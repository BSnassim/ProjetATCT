<?php

namespace App\Form;

use App\Entity\Contrat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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
            ->add('type', ChoiceType::class, array(
                'choices' => array(
                    '1'=>'Uns',
                    '2'=>'Deux',
                    '3'=>'Trois',
                ),))
            ->add('montant')
            ->add('numEnregistrement')
            ->add('periodiciteEntretien')
            ->add('periodiciteFacturation')
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
