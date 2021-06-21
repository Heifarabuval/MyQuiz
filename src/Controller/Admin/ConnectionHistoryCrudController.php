<?php

namespace App\Controller\Admin;

use App\Entity\ConnectionHistory;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\DateTimeFilter;

class ConnectionHistoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ConnectionHistory::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('user')
            ->add(DateTimeFilter::new('connectedAt'));
    }



    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('user'),
            DateTimeField::new('connectedAt')
        ];
    }

}
