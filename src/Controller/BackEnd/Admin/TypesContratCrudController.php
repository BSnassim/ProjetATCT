<?php

namespace App\Controller\BackEnd\Admin;

use App\Entity\TypesContrat;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TypesContratCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypesContrat::class;
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
