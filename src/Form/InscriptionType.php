<?php

namespace App\Form;

use App\Entity\Utilisateurs;

use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\TextType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Validator\Constraints\Form;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('civilite', ChoiceType::class , [
            'label' => 'Votre civilité',
            'required' => 'true',
            'choices' => ["Mme" => "Mme", "Mlle" => "Mlle", "M." => "M."],
            'multiple' => 'true',
            'expanded' => 'false'
        ])
            ->add('nom', TextType::class , [
            'label' => 'Votre nom',
            'required' => 'true'
        ])
            ->add('prenom', TextType::class , [
            'label' => 'Votre prénom',
            'required' => 'true'
        ])
            ->add('login', TextType::class , [
            'label' => 'Votre login',
            'required' => 'true'
        ])
            ->add('password', PasswordType::class , [
            'label' => 'Votre mot de passe',
            'required' => 'true'
        ])
            ->add('email', EmailType::class , [
            'label' => 'Votre email'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateurs::class ,
        ]);
    }
}