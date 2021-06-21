<?php

namespace App\Controller\Admin;

use App\Entity\Answer;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AnswerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Answer::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('question');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('answer'),
            AssociationField::new('question')->autocomplete(),
            BooleanField::new('expected_answer')
        ];
    }

}
