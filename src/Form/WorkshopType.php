<?php

namespace App\Form;

use App\Entity\Workshop;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class WorkshopType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'constraints' => [
                    new Length([
                        'min' => 5,
                        'minMessage' => 'Le titre doit contenir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'constraints' => [
                    new Length([
                        'min' => 10,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                'html5' => true, // Active le rendu HTML5
                'label' => 'Date de début',
                'attr' => [
                    'min' => (new \DateTime())->format('Y-m-d'), // Bloque les dates antérieures à aujourd'hui
                ],
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de début doit être aujourd\'hui ou une date future.',
                    ]),
                ],
            ])
            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'html5' => true, // Active le rendu HTML5
                'label' => 'Date de fin',
                'attr' => [
                    'min' => (new \DateTime('tomorrow'))->format('Y-m-d'), // Initialise avec demain
                ],
                'constraints' => [
                    new Callback([$this, 'validateDateFin']),
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '2M', // Limite la taille de l'image à 2 Mo
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPG, PNG, WEBP).',
                    ])
                ],
            ])
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'label' => 'Catégorie'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Workshop::class,
        ]);
    }

    public function validateDateFin($dateFin, ExecutionContextInterface $context)
    {
        $form = $context->getRoot();
        $dateDebut = $form['dateDebut']->getData();

        if ($dateFin <= $dateDebut) {
            $context->buildViolation('La date de fin doit être supérieure à la date de début.')
                ->atPath('dateFin')
                ->addViolation();
        }
    }
}