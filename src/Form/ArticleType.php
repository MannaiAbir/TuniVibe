<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Type;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le titre ne peut pas être vide.',
                    ]),
                    new Length([
                        'min' => 5,
                        'max' => 100,
                        'minMessage' => 'Le titre doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le titre ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Contenu',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le contenu ne peut pas être vide.',
                    ]),
                    new Length([
                        'min' => 20,
                        'minMessage' => 'Le contenu doit contenir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'Image (JPG, PNG, GIF)',
                'mapped' => false,
                'required' => false,  // L'image peut être facultative
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPG, PNG, GIF).',
                    ])
                ],
            ])
            ->add('author', TextType::class, [
                'label' => 'Auteur',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom de l\'auteur est obligatoire.',
                    ]),
                    new Length([
                        'min' => 3,
                        'minMessage' => 'Le nom de l\'auteur doit contenir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('category', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Voyage' => 'voyage',
                    'Expérience sociale' => 'experience_sociale',
                    'Expérience culturelle' => 'experience_culturelle',
                    'Art' => 'art',
                    'Autre' => 'other',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez choisir une catégorie.',
                    ]),
                    new Choice([
                        'choices' => ['voyage', 'experience_sociale', 'experience_culturelle', 'art', 'other'],
                        'message' => 'Veuillez sélectionner une catégorie valide.',
                    ]),
                ],
            ])
            
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Publié' => 'published',
                    'Brouillon' => 'draft',
                    'En attente' => 'pending',
                ],
                'data' => 'pending',  // Valeur par défaut
                'label' => false,  // Supprime l'affichage du label
                'attr' => ['style' => 'display:none;'],  // Cache complètement le champ
                'constraints' => [
                    new Choice([
                        'choices' => ['published', 'draft', 'pending'],
                        'message' => 'Statut non valide.',
                    ]),
                ],
            ])
            
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
