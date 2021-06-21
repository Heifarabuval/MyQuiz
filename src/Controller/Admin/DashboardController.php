<?php

namespace App\Controller\Admin;

use App\Entity\Answer;
use App\Entity\Category;
use App\Entity\ConnectionHistory;
use App\Entity\History;
use App\Entity\Question;
use App\Entity\Quizz;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);
        return $this->redirect($routeBuilder->setController(UserCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('MyQuiz Admin');
    }

    public function configureMenuItems(): iterable
    {
        /*yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');*/
        yield MenuItem::section('User');
        yield MenuItem::linkToCrud('Users', 'fas fa-users', User::class);
        yield MenuItem::linkToCrud('Historique connection', 'fas fa-history', ConnectionHistory::class);
        yield MenuItem::linkToCrud('Historique jeu', 'fas fa-history', History::class);
        yield MenuItem::section('Quiz');
        yield MenuItem::linkToCrud('Quiz', 'fas fa-gamepad', Quizz::class);
        yield MenuItem::linkToCrud('Category', 'fas fa-list', Category::class);
        yield MenuItem::linkToCrud('Questions', 'far fa-question-circle', Question::class);
        yield MenuItem::linkToCrud('Réponses', 'fas fa-exclamation', Answer::class);
        yield MenuItem::section('Autres');
        yield MenuItem::linkToRoute('Retour aux quizs','fas fa-backward','quiz');


    }
}
