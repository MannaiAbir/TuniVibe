<?php

namespace App\Form;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('question', TextType::class, [
                'label' => 'Question',
                'attr' => ['placeholder' => 'Enter the question'],
            ])
            ->add('options', CollectionType::class, [
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
                'constraints' => [
                    new Count(['min' => 4, 'max' => 4, 'minMessage' => 'You must provide exactly 4 options for this question']),
                ],
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'option-field', 'placeholder' => 'Enter an option'],
                ],
            ])
            ->add('optionCorrect', ChoiceType::class, [
                'choices' => [], // Initially empty, updated via event listener
                'placeholder' => 'Select the correct option',
                'label' => 'Correct Option',
                'required' => true,
            ]);

        // Add event listener to populate correct option dropdown
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $question = $event->getData();
            $form = $event->getForm();
            $options = $question && is_array($question->getOptions()) ? $question->getOptions() : [];

            if (empty($options)) {
                $options = ['No options available'];
            }

            $form->add('optionCorrect', ChoiceType::class, [
                'choices' => array_combine($options, $options),
                'placeholder' => 'Select the correct option',
                'label' => 'Correct Option',
                'required' => true,
                'mapped' => true,
                'invalid_message' => 'Please select a valid option from the list.',
            ]);
        });

        // Ensure options exist during form submission
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            $form = $event->getForm();

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
        ]);
    }
}