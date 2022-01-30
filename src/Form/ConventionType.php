<?php

namespace App\Form;

use App\Entity\Convention;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ConventionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDebut',DateType::Class, array(
                'widget' => 'choice',
                'years' => range(date('Y')-100, date('Y')+100),
                'label' => 'Debut'
            ))
            ->add('dateFin',DateType::Class, array(
                'widget' => 'choice',
                'years' => range(date('Y')-100, date('Y')+100),
                'label' => 'Fin'
            ))
            ->add('montant')
            ->add('libellePDF')
            ->add('objet')
            ->add('numFournisseur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Convention::class,
        ]);
    }
}
