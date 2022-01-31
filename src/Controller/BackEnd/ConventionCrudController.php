<?php

namespace App\Controller\BackEnd;

use App\Entity\Convention;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ConventionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Convention::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
