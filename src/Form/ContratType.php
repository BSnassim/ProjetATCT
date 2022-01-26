<?php

namespace App\Form;

use App\Entity\Contrat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDebut')
            ->add('dateFin')
            ->add('preavis')
            ->add('type')
            ->add('montant')
            ->add('numEnregistrement')
            ->add('periodiciteEntretien')
            ->add('periodiciteFacturation')
            ->add('augmentation')
            ->add('libellePDF')
            ->add('filePDF',VichFileType::class)
            ->add('numFournisseur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contrat::class,
        ]);
    }
}
