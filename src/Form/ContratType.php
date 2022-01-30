<?php

namespace App\Form;

use App\Entity\Contrat;
use App\Entity\TypesContrat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Repository\TypesContratRepository;

class ContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numFournisseur')
            ->add('objet')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('preavis')
            ->add('Type')
            ->add('montant')
            ->add('numEnregistrement')
            ->add('periodiciteEntretien')
            ->add('periodiciteFacturation', ChoiceType::class, array(
                'choices' => array(
                    'Mensuel'=>'Mensuel',
                    'Trimestriel'=>'Trimestriel',
                    'Semestriel'=>'Semestriel',
                    'Annuel'=>'Annuel'
                ),))
            ->add('augmentation')
            ->add('filePDF',VichFileType::class, ['label' => 'PDF'])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contrat::class,
        ]);
    }
}
