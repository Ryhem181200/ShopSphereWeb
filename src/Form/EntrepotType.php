<?php

namespace App\Form;

use App\Entity\Entrepot;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EntrepotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nome')
            ->add('adressee')
            ->add('capacitee')
            ->add('statute', ChoiceType::class, [
                'choices'  => [
                    'Actif' => 'Actif',
                    'Inactif' => 'Inactif',
                    'En maintenance' => 'En maintenance',
                    'Complet' => 'Complet',
                ],
            ])  
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Entrepot::class,
        ]);
    }
}
