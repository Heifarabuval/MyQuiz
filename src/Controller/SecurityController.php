<?php

namespace App\Controller;

use App\Entity\ConnectionHistory;
use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/registration', name: 'security_registration')]
    public function registration(Request $request,EntityManagerInterface $manager,UserPasswordEncoderInterface $encoder,MailerInterface $mailer)
    {
        if ($this->getUser()!==null){
            return $this->redirectToRoute('profile');
        }
        $user = new User();
        $form= $this->createForm(RegistrationType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $hash=$encoder->encodePassword($user,$user->getPassword());
            $user->setPassword($hash);
            $user->setRoles(['ROLE_USER']);
            $user->setActivationToken(md5(uniqid()));
            $manager->persist($user);
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
        return $this->render('security/registration.html.twig',["form"=>$form->createView()]);
    }

    #[Route('/login',name: 'security_login')]
    public function login(AuthenticationUtils $authenticationUtils){
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        setcookie("connection", true, time()+10);
        return $this->render('security/login.html.twig',['last_username' => $lastUsername, 'error' => $error]);

    }

    #[Route('/logout',name: 'security_logout')]
    public function logout(EntityManagerInterface $manager){
    }



    #[Route('/activation/{token}',name: 'security_activation')]
    public function activation($token,UserRepository $repository){
        $user= $repository->findOneBy(['activation_token'=>$token]);
        if (!$user){
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas');
        }
        $user->setActivationToken(null);
        $roles=$user->getRoles();
        array_push($roles,'ROLE_VERIFIED');
        $user->setRoles($roles);
        $manager=$this->getDoctrine()->getManager();
        $manager->persist($user);
        $manager->flush();

        $this->addFlash('message','Vous avez bien activé votre compte');

        return $this->redirectToRoute('profile');
    }
}
