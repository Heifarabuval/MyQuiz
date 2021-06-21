<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Quizz;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category/{slug}', name: 'category')]
    public function index($slug,Request $request,PaginatorInterface $paginator): Response
    {
        if ($this->getUser()==null) {
            if (isset($_COOKIE['history'])) {
                $history = json_decode($_COOKIE['history'], true);
                foreach ($history as $key => $item) {
                    $history[$key]['quiz'] = $this->getDoctrine()->getRepository(Quizz::class)->find($item['quizz_id']);
                }
                $history = array_reverse($history);

            } else {
                $history='false';
            }


        }else{

            $history=$this->getUser()->getHistories();

            if( (sizeof($history->toArray())==0)){
                $history='false';
            }

        }
        $categories= $this->getDoctrine()->getRepository(Category::class)->findAllSortedAsc();
        $category=$this->getDoctrine()->getRepository(Category::class)->findOneBy(['slug'=>$slug]);
        $quizs=$category->getQuizzs();
        $quizs=$paginator->paginate($quizs,
            $request->query->getInt('page',1),9);


        if ($history=='false'){
            json_encode($history);
        }


        return $this->render('category/index.html.twig', [
            'category' => $category,
            'categories'=>$categories,
            'history'=>$history,
            'quizs'=>$quizs

        ]);
    }
}
