<?php

namespace App\Form;

use App\Entity\Livre;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre', TextType::class, [
            'constraints' => [
                new NotBlank(['message' => 'Le titre est obligatoire.']),
                new Length([
                    'max' => 50,
                    'maxMessage' => 'Le titre ne doit pas dépasser 50 caractères.',
                ]),
            ],
        ])
        ->add('auteur', TextType::class, [
            'constraints' => [
                new NotBlank(['message' => 'L\'auteur est obligatoire.']),
                new Length([
                    'max' => 30,
                    'maxMessage' => 'L\'auteur ne doit pas dépasser 30 caractères.',
                ]),
                new Regex([
                    'pattern' => '/^[a-zA-ZÀ-ÿ\s]+$/',
                    'message' => 'L\'auteur ne doit contenir que des lettres et des espaces.',
                ]),
            ],
        ])
        ->add('description', TextareaType::class, [
            'constraints' => [
                new NotBlank(),
                new Length(['min' => 20]), // Minimum 20 characters
            ],
        ])
        ->add('fichierUrl', FileType::class, [ // Change to 'file' instead of 'fichierUrl'
            'label' => 'Upload Book File (PDF, EPUB, etc.)',
            'mapped' => false, // Prevent Symfony from saving this field directly
            'required' => true,
            'constraints' => [
                new NotBlank(['message' => 'Le fichier est obligatoire.']),
                new File([
                    'maxSize' => '5M',
                    'mimeTypes' => ['application/pdf', 'application/epub+zip'],
                    'mimeTypesMessage' => 'Please upload a valid PDF or EPUB file',
                ])
            ],
        ])
        ->add('imageCouverture', FileType::class, [
            'label' => 'Image de couverture (JPG/PNG)',
            'mapped' => false, // Prevent Symfony from saving this field directly
            'required' => false,
            'constraints' => [
                new File([
                    'mimeTypes' => ['image/jpeg', 'image/png'],
                    'mimeTypesMessage' => 'Please upload a valid image file.',
                ])
            ],
        ])
            ->add('genre', ChoiceType::class, [
                'choices' => [
                    'Art' => 'art',
                    'Sociology' => 'sociology',
                    'History' => 'history',
                    'Philosophy' => 'philosophy',
                    'Biography' => 'biography',
                ],
                'placeholder' => 'Choose a genre', // Optional placeholder text
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
