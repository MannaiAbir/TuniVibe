<?php
namespace App\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Evenements;
use App\Entity\Activites;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ActivitesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //$builder
            //->add('nom', TextType::class)
            //->add('description', TextareaType::class);
           

        
    //}

    //public function configureOptions(OptionsResolver $resolver): void
    //{
      //  $resolver->setDefaults([
        //    'data_class' => Activites::class,
        // ]);
    //}

   
    $builder
        ->add('nom')
        ->add('description')
        ->add('evenements', EntityType::class, [
            'class' => Evenements::class,
            'choice_label' => 'titre',
            'multiple' => true, // Pour ManyToMany
            'expanded' => true, // Optionnel pour des checkboxes
        ])
    ;
}}
