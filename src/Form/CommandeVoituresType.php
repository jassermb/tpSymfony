<?php

namespace App\Form;

use App\Entity\CommandeVoitures;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class CommandeVoituresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        

        // ...
        
        $builder
            ->add('Nom_complet', TextType::class, [
                'label' => 'Nom complet  '
            ])
            ->add('Email', EmailType::class, [
                'label' => 'Adresse email  '
            ])
            ->add('num_tel', TelType::class, [
                'label' => 'Numéro de téléphone  '
            ])
            ->add('Adresse_livraison', TextType::class, [
                'label' => 'Adresse de livraison'
            ])
            ->add('Marque_voiture', ChoiceType::class, [
                'label' => 'Marque de la voiture',
                'choices' => [
                    'Audi' => 'Audi',
                    'BMW' => 'BMW',
                    'Mercedes' => 'Mercedes',
                    'Volkswagen' => 'Volkswagen',
                    'Autre' => 'Autre'
                ]
            ])
            ->add('Modele_voiture', ChoiceType::class, [
                'label' => 'Modèle de la voiture',
                'choices' => [
                    'Série 1' => 'Série 1',
                    'Série 2' => 'Série 2',
                    'Série 3' => 'Série 3',
                    'Série 4' => 'Série 4',
                    'Série 5' => 'Série 5',
                    'Série 6' => 'Série 6',
                    'Série 7' => 'Série 7',
                    'Autre' => 'Autre'
                ]
            ])
            ->add('Prix_voiture', NumberType::class, [
                'label' => 'Prix de la voiture'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CommandeVoitures::class,
        ]);
    }
}
