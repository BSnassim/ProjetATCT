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
                    'Tacite reconduction ouvert'=>'Tacite reconduction ouvert',
                    'Ferme'=>'Ferme',
                    'Tacite 1 an + 2 ans'=>'Tacite 1 an + 2 ans',
                ),))
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
