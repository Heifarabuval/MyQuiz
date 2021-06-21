<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\History;
use App\Entity\Quizz;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizController extends AbstractController
{


    #[Route('/', name: 'quiz')]
    public function index(Request $request,PaginatorInterface $paginator): Response
    {
        if (isset($_COOKIE['history'])&&$this->getUser()==null){
            $history=json_decode($_COOKIE['history'],true);
            foreach ($history as $key=> $item){
                $history[$key]['quiz']=$this->getDoctrine()->getRepository(Quizz::class)->find($item['quizz_id']);
            }
            $history=array_reverse($history);

        }else{
            $history=$this->getDoctrine()->getRepository(History::class)->findBySortedAsc($this->getUser());
            if ($history==null){
                $history=0;
            }
        }

        $quizList = $this->getDoctrine()->getRepository(Quizz::class)->findAll();
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $quizList=$paginator->paginate($quizList,
                             $request->query->getInt('page',1),9);
        return $this->render('quiz/index.html.twig', [
            'quizs' => $quizList, 'categories' => $categories,'history'=>$history
        ]);

    }


    #[Route('/start-quiz/{slug}', name: 'start-quiz')]
    public function startQuiz($slug, Request $request,EntityManagerInterface $manager)
    {

        $recorded=null;

        if (isset($_COOKIE['history'])){
            $history=json_decode($_COOKIE['history'],true);
        }else{
            $history=[];
        }



        $i = 0;
        $quiz = $this->getDoctrine()->getRepository(Quizz::class)->findOneBy(['slug'=>$slug]);
        $id=$quiz->getId();

        $questions = $quiz->getQuestions()->toArray();


        if ($this->getUser()!==null){
            $bestScore=$this->getDoctrine()->getRepository(History::class)->findBestScore($this->getUser(),$quiz);
        }

        if (!isset($bestScore[0])){
            $bestScore=[''];
        }else{
            $bestScore=$bestScore[0];
        }

        foreach ($questions as $question) {
            $rep = $question->getAnswers()->toArray();
            shuffle($rep);
            $rep = new  ArrayCollection($rep);
            $question->setAnswers($rep);
        }


        if (sizeof($request->request->all()) > 0) {

            foreach ($request->request->all() as $req) {
                $reqs[] = $req;
            }

            foreach ($quiz->getQuestions() as $key => $question) {

                if (password_verify(true, $reqs[$key])) {
                    $i++;
                    $question->setStatus('ok');

                } else {
                    $question->setStatus('ko');
                }


            }

            $score=$i / sizeof($quiz->getQuestions()) * 100;

            if (isset($_COOKIE['history'])) {
                $data = json_decode($_COOKIE['history'], true);
            }
            if (isset($_COOKIE['last_score'])){
                $score = $score > $_COOKIE['last_score']?$score:$_COOKIE['last_score'];
            }
            $recorded=$i / sizeof($quiz->getQuestions()) * 100;

            if ($this->getUser()==null){
                $data[] = ['quizz_id' => $id, 'score' => $recorded];
                setcookie('history', json_encode($data), time() + 3600 * 8760, '/');
                setcookie('last_score', $score,time() + 3600 * 8760, '/start-quiz/'.$slug);
            }else{
                /*TODO record in db score + quizz id*/
                $record=new History();
                $record->setUser($this->getUser())
                    ->setQuiz($quiz)
                    ->setScore($recorded)
                    ->setCreatedAt(new DateTime());
                $this->getUser()->addHistory($record);
                $manager->persist($record);
                $manager->flush();

            }


        }
        return $this->render('quiz/quiz.html.twig', ['quiz' => $quiz, 'cookies' => $_COOKIE,'bestScore'=>$bestScore,'scoreRecorded'=>$recorded]);
    }
}
