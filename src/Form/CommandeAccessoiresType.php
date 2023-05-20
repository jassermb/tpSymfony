<?php

namespace App\Form;

use App\Entity\CommandeAccessoires;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CommandeAccessoiresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom_complet', TextType::class, [
            'label' => 'Nom complet'
        ])
        ->add('adresse_email', EmailType::class, [
            'label' => 'Adresse email'
        ])
        ->add('num_tel', TelType::class, [
            'label' => 'Numéro de téléphone'
        ])
        ->add('adresse_livraison', TextType::class, [
            'label' => 'Adresse de livraison'
        ])
        ->add('nom_accessoire', TextType::class, [
            'label' => 'Nom de l\'accessoire'
        ])
        ->add('prix_accessoire', NumberType::class, [
            'label' => 'Prix de l\'accessoire'
        ])
        
    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CommandeAccessoires::class,
        ]);
    }
}
