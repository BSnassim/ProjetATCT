<?php

namespace App\Controller\BackEnd;

use App\Entity\Convention;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ConventionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Convention::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('numFournisseur','Fournisseur'),
            DateField::new('dateDebut'),
            DateField::new('dateFin'),
            MoneyField::new('montant')->setCurrency('TND'),
        ];
    }

}
