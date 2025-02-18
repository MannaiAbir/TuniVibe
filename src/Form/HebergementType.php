<?php   

namespace App\Form;

use App\Entity\Hebergement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints as Assert;

class HebergementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom est obligatoire.']),
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Le nom ne doit pas dépasser 100 caractères.'
                    ])
                ],
            ])
            ->add('type', TextType::class, [
                'label' => 'Type',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le type est obligatoire.']),
                    new Assert\Length([
                        'max' => 50,
                        'maxMessage' => 'Le type ne doit pas dépasser 50 caractères.'
                    ])
                ],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'adresse est obligatoire.']),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'L\'adresse ne doit pas dépasser 255 caractères.'
                    ])
                ],
            ])
            ->add('capacite', IntegerType::class, [
                'label' => 'Capacité',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La capacité est obligatoire.']),
                    new Assert\Positive(['message' => 'La capacité doit être un nombre positif.']),
                    new Assert\Type([
                        'type' => 'integer',
                        'message' => 'Veuillez entrer un nombre valide sans lettres.'
                    ]),
                ],
                'attr' => [
                    'oninput' => "this.value = this.value.replace(/[^0-9]/g, '');",
                    'maxlength' => 4
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => 1000,
                        'maxMessage' => 'La description ne doit pas dépasser 1000 caractères.'
                    ])
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'Télécharger une nouvelle image',
                'mapped' => false, // Ne pas mapper directement avec l'entité
                'required' => false, // Permet d'éviter d'exiger une image à chaque modification
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, WEBP).',
                    ])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Hebergement::class,
        ]);
    }
}
