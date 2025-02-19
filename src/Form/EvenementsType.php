<?php
namespace App\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Entity\Activites;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Entity\Evenements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('lieu')
            ->add('image')
            ->add('activites', EntityType::class, [
                'class' => Activites::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => false,
            ]);
            
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenements::class,
        ]);
    }
}

