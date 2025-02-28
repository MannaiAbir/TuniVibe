<?php

namespace App\Form;

use App\Entity\Seance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class SeanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $workshop = $options['workshop'] ?? null; // Vérification pour éviter l'erreur

        $builder
        ->add('titre', TextType::class, [
            'label' => 'Titre',
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Ce champ ne doit pas être vide.',
                ]),
                new Length([
                    'min' => 5,
                    'minMessage' => 'Le titre doit contenir au moins {{ limit }} caractères.',
                ]),
            ],
        ])

            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez sélectionner une date.',
                    ]),
                    new Assert\GreaterThanOrEqual([
                        'value' => $options['workshop'] ? $options['workshop']->getDatedebut() : new \DateTime('1900-01-01'),
                        'message' => 'La date doit être après la date de début du workshop.',
                    ]),
                    new Assert\LessThanOrEqual([
                        'value' => $options['workshop'] ? $options['workshop']->getDatefin() : new \DateTime('2100-01-01'),
                        'message' => 'La date doit être avant la date de fin du workshop.',
                    ]),
                ],
            ])
            
            ->add('temps', TimeType::class, [
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez sélectionner l\'heure de la séance.']),
                ],
            ])
            ->add('duree', IntegerType::class, [
                'label' => 'Durée (Heures)',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez entrer une durée.']),
                    new Assert\GreaterThanOrEqual([
                        'value' => 1,
                        'message' => 'La durée doit être d\'au moins 1 heure.',
                    ]),
                    new Assert\LessThanOrEqual([
                        'value' => 5,
                        'message' => 'La durée ne peut pas dépasser 5 heures.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Seance::class,
            'workshop' => null, // Ajout de l'option pour éviter l'erreur
        ]);
    }
}
