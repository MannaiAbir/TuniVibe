<?php
// src/Form/InscriptionEvenementType.php

namespace App\Form;

use App\Entity\InscriptionEvenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class InscriptionEvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomComplet', TextType::class, [
                'label' => 'Nom et prénom *',
                'attr' => ['placeholder' => 'Nour mabrouk']
            ])
            ->add('dateNaissance', DateType::class, [
                'label' => 'Date de naissance *',
                'widget' => 'single_text',
                'html5' => true
            ])
            ->add('profession', TextType::class, [
                'label' => 'Profession/Statut *',
                'attr' => ['placeholder' => 'Étudiant, Employé...']
            ])
            ->add('tailleTshirt', ChoiceType::class, [
                'label' => 'Taille de T-shirt',
                'required' => false,
                'choices' => [
                    'XS' => 'XS',
                    'S' => 'S',
                    'M' => 'M',
                    'L' => 'L',
                    'XL' => 'XL',
                    'XXL' => 'XXL'
                ],
                'placeholder' => 'Choisir une taille'
            ])
            ->add('activiteGroupe', ChoiceType::class, [
                'label' => 'Participer aux activités de groupe ?',
                'required' => false,
                'choices' => [
                    'Oui' => 'oui',
                    'Non' => 'non',
                    'Peu importe' => 'indifferent'
                ]
            ])
            ->add('competences', TextareaType::class, [
                'label' => 'Compétences spécifiques',
                'required' => false,
                'attr' => ['placeholder' => 'Musique, peinture, organisation...']
            ])
            ->add('regimesAlimentaires', ChoiceType::class, [
                'label' => 'Restrictions alimentaires',
                'required' => false,
                'multiple' => true,
                'choices' => [
                    'Végétarien 🌱' => 'vegetarien',
                    'Sans gluten 🚫🌾' => 'sans_gluten',
                    'Allergie aux noix 🥜' => 'allergie_noix',
                    'Diabétique 🩸 (contrôle des sucres)' => 'diabetique',
                    'Sans sel 🧂 (hypertension)' => 'sans_sel',
                    'Aucune' => 'aucune'
                ]
            ])
            ->add('accessibilite', TextareaType::class, [
                'label' => 'Besoins d\'accessibilité',
                'required' => false,
                'attr' => ['placeholder' => 'Accès PMR, interprète LSF...']
            ])
            ->add('reglesSecurite', CheckboxType::class, [
                'label' => 'J\'accepte les règles de sécurité *',
                'required' => true
            ])
            ->add('benevolat', ChoiceType::class, [
                'label' => 'Souhaitez-vous être bénévole ?',
                'required' => false,
                'choices' => [
                    'Oui' => 'oui',
                    'Non' => 'non',
                    'Peut-être' => 'peut_etre'
                ]
            ])
            ->add('sondageSatisfaction', CheckboxType::class, [
                'label' => 'Participer au sondage de satisfaction ?',
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InscriptionEvenement::class,
        ]);
    }
}
