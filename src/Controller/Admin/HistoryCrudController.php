<?php

namespace App\Controller\Admin;

use App\Entity\History;

use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\DateTimeFilter;


class HistoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return History::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('quiz')
            ->add('user')
            ->add(DateTimeFilter::new('createdAt'));
    }




    public function configureFields(string $pageName): iterable
    {
        return [
           AssociationField::new('quiz'),
            AssociationField::new('user'),
            DateTimeField::new('createdAt')
        ];
    }

}
