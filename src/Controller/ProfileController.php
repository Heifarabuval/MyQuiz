<?php

namespace App\Controller;

use App\Entity\ConnectionHistory;
use App\Entity\User;
use App\Form\Model\ChangePassword;
use App\Form\PasswordChangeForm;
use App\Form\ProfileType;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;


class ProfileController extends AbstractController
{



    #[Route('/profile', name: 'profile')]
    public function index(Request $request,UserPasswordEncoderInterface $passwordEncoder,
                          EntityManagerInterface $manager,MailerInterface $mailer
    )
    {
        if (isset($_COOKIE['connection'])){
            $co=new ConnectionHistory();
            $co->setUser($this->getUser())
                ->setConnectedAt(new DateTime);
            $manager->persist($co);
            $manager->flush();
            unset($_COOKIE['connection']);
        }
      if( array_search('ROLE_VERIFIED',$this->getUser()->getRoles())){
          $user=$this->getUser();
          $form= $this->createForm(ProfileType::class,$user);
          $form->handleRequest($request);

          if ($form->isSubmitted()){

              if($this->getDoctrine()->getRepository(User::class)
                  ->findOneBy(['email'=>$user->getEmail()])
              ==null){


                  $user->setRoles(['ROLE_USER']);
                  $user->setActivationToken(md5(uniqid()));
                  $manager->flush();
                  $email = (new TemplatedEmail())
                      ->from('quizz@defou.fr')
                      ->to($user->getEmail())
                      ->subject('Confirm your account')
                      ->htmlTemplate('email/activation.html.twig')
                      ->context([
                          'username' => $user->getUsername(),
                          'token'=>$user->getActivationToken()
                      ]);
                  $mailer->send($email);
                  return $this->redirectToRoute('security_login');
              }
              $manager->flush();
              $this->addFlash(
                  'message',
                  'Informations mises à jour !'
              );
              return $this->redirectToRoute('profile');
          }
          if (isset($_COOKIE['history'])&&$this->getUser()==null){
              $history=json_decode($_COOKIE['history'],true);
          }else{
              $history=$this->getUser()->getHistories();
          }
          return $this->render('profile/index.html.twig', [
              'user'=>$this->getUser(),"form"=>$form->createView(),
              'history'=>$history
          ]);
      }else{

          $user=$this->getUser();
          return $this->render('email/blocked.html.twig',['user' => $user]);

      }



    }

    #[Route('/profile/update-pass', name: 'update_password')]
    public function update(Request $request,UserPasswordEncoderInterface $encoder, EntityManagerInterface $manager){
        $user=$this->getUser();
        $pass=$user->getPassword();
        $changePassModel=new ChangePassword();
        $form= $this->createForm(PasswordChangeForm::class,$changePassModel);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()) {
            if ($encoder->isPasswordValid($user,$changePassModel->getOldPassword()) &&
                $changePassModel->getNewPassword()==$changePassModel->getNewConfirmPassword()){
                $hash=$encoder->encodePassword($user,$changePassModel->getNewPassword());
                $user->setPassword($hash);
                $manager->flush();
                $this->addFlash(
                    'message',
                    'Mot de passe changé !'
                );
               return $this->redirectToRoute('profile');
            }else{
                $this->addFlash(
                    'message',
                    'Mot de passe incorrect !'
                );
            }

        }
        return $this->render('profile/passwordForm.html.twig', [
            'user'=>$this->getUser(),"form"=>$form->createView()
        ]);

    }


}
