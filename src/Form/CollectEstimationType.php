<?php

namespace App\Form;

use App\Entity\Estimations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CollectEstimationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('model')
            ->add('capacity')
            ->add('brand')
            ->add('liquidDamage', ChoiceType::class, [
                'expanded' => true,
                'choices' => [
                    'oui' => '1',
                    'non' => '0'
                ]
            ])
            ->add('screenCracks', ChoiceType::class, [
                'expanded' => true,
                'choices' => [
                    'oui' => '1',
                    'non' => '0'
                ]
            ])
            ->add('casingCracks', ChoiceType::class, [
                'expanded' => true,
                'choices' => [
                    'oui' => '1',
                    'non' => '0'
                ]
            ])
            ->add('batteryCracks', ChoiceType::class, [
                'expanded' => true,
                'choices' => [
                    'oui' => '1',
                    'non' => '0'
                ]
            ])
            ->add('buttonCracks', ChoiceType::class, [
                'expanded' => true,
                'choices' => [
                    'oui' => '1',
                    'non' => '0'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Estimations::class,
        ]);
    }
}
