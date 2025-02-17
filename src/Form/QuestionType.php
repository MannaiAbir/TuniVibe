<?php

namespace App\Form;

use App\Entity\Livre;
use App\Entity\Question;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
    ->add('quiz', HiddenType::class, [
        'data' => $options['quizId'], // Passing quizId to the form
    ])
        ->add('question')
        ->add('options', CollectionType::class, [
            'entry_type' => TextType::class,
            'allow_add' => true,
            'allow_delete' => true,
            'prototype' => true,  // This allows Symfony to generate a prototype for new fields
            'by_reference' => false,
            'label' => 'Options',
            'entry_options' => [
                'label' => false,
                'attr' => ['class' => 'option-field'], // Add a class to easily target input fields
            ],
        ])
        ->add('livre', EntityType::class, [
            'class' => Livre::class,
            'choice_label' => 'id',
        ])
        ->add('optionCorrect', ChoiceType::class, [
            'choices' => [], // Initially empty, updated via event listener
            'placeholder' => 'Select the correct option',
            'label' => 'Correct Option',
            'required' => true,
        ]);

    // Add event listener to populate correct option dropdown
    $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
        $quiz = $event->getData();
        $form = $event->getForm();
        $options = $quiz && is_array($quiz->getOptions()) ? $quiz->getOptions() : [];

        if (empty($options)) {
            $options = ['No options available'];
        }
        // Only add the 'optionCorrect' field when the form is being rendered, not when it's submitted
        $form->add('optionCorrect', ChoiceType::class, [
            'choices' => array_combine($options, $options),
            'placeholder' => 'Select the correct option',
            'label' => 'Correct Option',
            'required' => true,
            'mapped' => true,
            'invalid_message' => 'Please select a valid option from the list.',
        ]);
    });
    // **NEW FIX: Ensure options exist during form submission**
$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
    $data = $event->getData();
    $form = $event->getForm();

    // Make sure options are properly set during form submission
    if (isset($data['options'])) {
        $options = is_array($data['options']) ? $data['options'] : [];
        $form->add('optionCorrect', ChoiceType::class, [
           'choices' => array_combine($options, $options),
            'placeholder' => 'Select the correct option',
            'label' => 'Correct Option',
            'required' => true,
            'mapped' => true,
        ]);
    }
});
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
            'quizId' => null,
        ]);
    }
}

