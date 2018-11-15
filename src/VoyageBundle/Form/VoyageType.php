<?php

namespace VoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoyageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('destinationvoyage')
            ->add('datevoyagealler')
            ->add('hdepartvoyagealler')
            ->add('harriveevoyagealler')
            ->add('departvoyage')
            ->add('nbPlaceDispo')
            ->add('datevoyageretour')
            ->add('hdepartvoyageretour')
            ->add('harriveevoyageretour')
            ->add('prix')
            ->add('num')
            ->add('compagnie');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VoyageBundle\Entity\Voyage'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'voyagebundle_voyage';
    }


}
