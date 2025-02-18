<?php

namespace App\Form;

use App\Entity\User; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('username', TextType::class, [
            'constraints' => [
                new NotBlank(['message' => 'Le nom d\'utilisateur est obligatoire.']),
                new Length([
                    'min' => 3,
                    'max' => 50,
                    'minMessage' => 'Le nom d\'utilisateur doit contenir au moins {{ limit }} caractères.',
                    'maxMessage' => 'Le nom d\'utilisateur ne peut pas dépasser {{ limit }} caractères.',
                ]),
            ],
        ])
        ->add('email', EmailType::class, 
        [
            'label' => 'Adresse Email',
            'attr' => ['placeholder' => 'Entrez votre email'],
            'constraints' => [
                new Assert\NotBlank(['message' => "L'adresse email est obligatoire."]),
                new Assert\Email(['message' => "L'adresse email '{{ value }}' n'est pas valide."]),
         ],
        ])

        ->add('adresse', TextType::class, [
            'label' => 'Adresse',
            'attr' => ['placeholder' => 'Entrez votre adresse'],
            'constraints' => [
                new Assert\NotBlank(['message' => "L'adresse est obligatoire."]),
                new Assert\Length([
                    'max' => 255,
                    'maxMessage' => "L'adresse ne peut pas dépasser {{ limit }} caractères."
                ]),
            ],
        ])
        ->add('password', PasswordType::class, [
            'label' => 'Mot de passe',
            'attr' => ['placeholder' => 'Entrez un mot de passe sécurisé'],
            'constraints' => [
                new Assert\NotBlank(['message' => "Le mot de passe est obligatoire."]),
                new Assert\Length([
                    'min' => 6,
                    'max' => 50,
                    'minMessage' => "Le mot de passe doit contenir au moins {{ limit }} caractères.",
                    'maxMessage' => "Le mot de passe ne peut pas dépasser {{ limit }} caractères."
                ]),
            ],
        ])
        ->add('numeroTelephone', TelType::class, [
            'label' => 'Numéro de téléphone',
            'attr' => ['placeholder' => 'Entrez votre numéro de téléphone'],
            'constraints' => [
                new Assert\NotBlank(['message' => "Le numéro de téléphone est obligatoire."]),
                new Assert\Regex([
                    'pattern' => "/^[0-9]{8,15}$/",
                    'message' => "Le numéro de téléphone doit contenir entre 8 et 15 chiffres."
                ]),
            ],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}