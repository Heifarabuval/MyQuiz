<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Category;
use App\Entity\Question;
use App\Entity\Quizz;
use App\Form\QuizTitleType;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddQuizController extends AbstractController
{
    #[Route('/add/quiz', name: 'add-quiz')]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        $quiz = new Quizz();
        $form= $this->createForm(QuizTitleType::class);
        $form->handleRequest($request);
        $categories=$this->getDoctrine()->getRepository(Category::class)->findAll();

        if($request->get('title')!==null){

            $quiz = new Quizz();
            $quiz
                ->setName($request->get('title'))
                ->setCategory($this->getDoctrine()->getRepository(Category::class)->find($request->get('category')))
                ->setUser($this->getUser());
            $manager->persist($quiz);


        for ($i=1; $i<=10;$i++){
            $data=$request->request->all();
            $quest=$data['question-'.$i];

            $question = new Question();
            $question->setQuestion($quest);
            $question->setQuizz($quiz);

            for ($j=1; $j<=3;$j++) {
                $condition= $j==1;
                $ans = $data['question-' . $i . '/answer-'.$j];
                $answer=new Answer();
                $answer->setAnswer($ans)
                        ->setExpectedAnswer($condition)
                        ->setExpectedAnswerCrypt($condition);
                $question->addAnswer($answer);
                $manager->persist($answer);
            }


            $manager->persist($question);
            $manager->flush();
        }
        }


        return $this->render('add_quiz/index.html.twig', [
            'categories' => $categories,
            'form'=>$form->createView()
        ]);
    }
}
