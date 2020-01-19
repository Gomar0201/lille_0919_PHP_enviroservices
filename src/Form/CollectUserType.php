<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CollectUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
        $builder->add('firstname', TextType::class, [
            'required' => true
        ]);
        $builder->add('lastname', TextType::class, [
            'required' => true
        ]);
        $builder->add('address', TextType::class, [
            'required' => true
        ]);
        $builder->add('postCode', NumberType::class, [
            'required' => true,
            'help' => '5 chiffres',
        ]);
        $builder->add('city', TextType::class, [
            'required' => true
        ]);
        $builder->add('phoneNumber', NumberType::class, [
            'required' => true,
            'help' => '10 chiffres',
        ]);
        $builder->add('email', EmailType::class, [
            'required' => true
        ]);
        $builder->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver); // TODO: Change the autogenerated stub
        $resolver->setDefaults([
            'data_class' => User::class
        ]);
    }
}
