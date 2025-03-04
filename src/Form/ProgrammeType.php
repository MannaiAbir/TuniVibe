<?php

namespace App\Form;

use App\Entity\Programme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ProgrammeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du programme',
                'attr' => ['placeholder' => 'Entrez le nom du programme'],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le nom du programme ne peut pas être vide.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z\s]+$/',
                        'message' => 'Le nom du programme doit contenir uniquement des lettres (a-z) et des espaces.',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['placeholder' => 'Entrez la description du programme'],
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La description ne peut pas être vide.',
                    ]),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu',
                'attr' => ['placeholder' => 'Entrez le lieu'],
                'required' => true,  // Rendre ce champ obligatoire
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le lieu ne peut pas être vide.',
                    ]),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'Le lieu ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('dateDebut', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date de début',
                'attr' => ['class' => 'datepicker'],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La date de début est obligatoire.',
                    ]),
                    new Assert\Type("\DateTimeInterface"),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de début ne peut pas être dans le passé.',
                    ]),
                ],
            ])
            ->add('dateFin', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date de fin',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La date de fin est obligatoire.',
                    ]),
                    new Assert\Type("\DateTimeInterface"),
                    new Assert\GreaterThanOrEqual([
                        'propertyPath' => 'parent.all[dateDebut].data',
                        'message' => 'La date de fin doit être après la date de début.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Programme::class,
        ]);
    }
}
