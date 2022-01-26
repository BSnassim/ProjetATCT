<?php

namespace App\Controller\BackEnd;

use App\Entity\Contrat;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;


class ContratCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contrat::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('numFournisseur','Fournisseur'),
            DateField::new('dateDebut'),
            DateField::new('dateFin'),
            IntegerField::new('preavis'),
            ChoiceField::new('type')
            ->setChoices([
                'Tacite reconduction ouvert'=>'Tacite reconduction ouvert',
                'Ferme'=>'Ferme',
                'Tacite 1 an + 2 ans'=>'Tacite 1 an + 2 ans',
            ]),
            MoneyField::new('montant')->setCurrency('TND'),
            IntegerField::new('numEnregistrement'),
            TextField::new('periodiciteEntretien'),
            ChoiceField::new('periodiciteFacturation')
            ->setChoices([
                'Mensuel'=>'Mensuel',
                'Trimestriel'=>'Trimestriel',
                'Semestriel'=>'Semestriel',
                'Annuel'=>'Annuel',
            ])
            ->renderExpanded(),
            
        ];
    }
    
}
