<?php

namespace App\Form;

use App\Entity\Livre;
use Symfony\Component\Form\AbstractType;
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
            ->add('titre')
            ->add('auteur')
            ->add('description')
            ->add('fichierUrl', FileType::class, [
                'label' => 'Upload Book File (PDF, EPUB, etc.)',
                'mapped' => false, // Prevents automatic mapping to entity
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => ['application/pdf', 'application/epub+zip'],
                        'mimeTypesMessage' => 'Please upload a valid PDF or EPUB file',
                    ])
                ],
            ])
            ->add('imageCouverture', FileType::class, [
                'label' => 'Image de couverture (JPG/PNG)',
                'mapped' => false, // Prevents automatic mapping to the entity
                'required' => false,
            ])
            ->add('dateCreation', null, [
                'widget' => 'single_text',
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
