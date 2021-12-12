<?php

namespace App\Form;

use App\Entity\Medecin;
use App\Entity\service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedecinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_med')
            ->add('nom')
            ->add('email')
            ->add('adresse')
            ->add('id_service',EntityType::class,['class'=>Service::class,'choice_label'=>'libelle','choice_value'=>'id']);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medecin::class,
        ]);
    }
}
