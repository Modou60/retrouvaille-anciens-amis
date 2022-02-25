<?php

namespace App\Form;

use App\Entity\Utilisateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\RadioType;
=======
// use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
>>>>>>> modou
=======
// use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
>>>>>>> modou
=======
// use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
>>>>>>> modou

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('civilite', ChoiceType::class, [
                'label' => 'Votre civilité',
                'required' => 'true',
                'choices' => ["Mme" => "Mme", "Mlle" => "Mlle", "M." => "M."],
                'multiple' => false,
                'expanded' => true
            ])
            ->add('nom', TextType::class, [
                'label' => 'Votre nom',
                'required' => 'true'
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Votre prénom',
                'required' => 'true'
            ])
            ->add('login', TextType::class, [
                'label' => 'Votre login',
                'required' => 'true'
            ])
            ->add('password', PasswordType::class, [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                // il ne faut pas qu'il ne place pas directement sur l'objet
                // il sera lu et encodé dans le controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez votre mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Le nombre de caractèrs de votre message doit au moins {{ limit }} ',
                        // longueur maximum autorisé par symfony pour des raison de sécurité
                        'max' => 4096,
                    ]),
                ],
                // 'label' => 'Votre mot de passe',
                'required' => 'true'
            ])
=======
=======
>>>>>>> modou
=======
>>>>>>> modou
                 'mapped' => false,
                'required' => true,
                'label' => 'Entrez votre mot de passe',
            ])
            // ->add('confirmepassword', PasswordType::class, [
                // 'mapped' => false,
            //     'required' => true,
            //     'label' => 'Confirmez votre mot de passe',
            // ])
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> modou
=======
>>>>>>> modou
=======
>>>>>>> modou
            ->add('email', EmailType::class, [
                'label' => 'Votre email'
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            // ->add('plainPassword', PasswordType::class, [
            // instead of being set onto the object directly,
            // this is read and encoded in the controller
            //     'mapped' => false,
            //     'attr' => ['autocomplete' => 'new-password'],
            //     'constraints' => [
            //         new NotBlank([
            //             'message' => 'Please enter a password',
            //         ]),
            //         new Length([
            //             'min' => 6,
            //             'minMessage' => 'Your password should be at least {{ limit }} characters',
            //             // max length allowed by Symfony for security reasons
            //             'max' => 4096,
            //         ]),
            //     ],
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateurs::class,
        ]);
    }
}
