<?php

namespace App\Controller\Admin;

use App\Entity\Quizz;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class QuizzCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Quizz::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('user')
            ->add('category');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            AssociationField::new('category')->autocomplete(),
            AssociationField::new('user')->autocomplete(),
            TextField::new('slug'),

        ];
    }

}
