<?php

namespace App\Controller\BackEnd;

use App\Entity\Contrat;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use Vich\UploaderBundle\Form\Type\VichFileType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;



class ContratCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contrat::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //ChoiceField::new('type')
            //->setChoices([
              //  'Tacite reconduction ouvert'=>'Tacite reconduction ouvert',
              //  'Ferme'=>'Ferme',
              //  'Tacite 1 an + 2 ans'=>'Tacite 1 an + 2 ans',
            //]),
            //ChoiceField::new('periodiciteFacturation')
            //->setChoices([
             //   'Mensuel'=>'Mensuel',
              //  'Trimestriel'=>'Trimestriel',
               // 'Semestriel'=>'Semestriel',
               // 'Annuel'=>'Annuel',

            //])
            //->renderExpanded(),
            CollectionField::new('type'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->remove(Crud::PAGE_INDEX, Action::NEW);
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->overrideTemplate('crud/index', 'admin/contratConfig/config.html.twig');
    }
}
