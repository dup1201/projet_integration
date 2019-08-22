<?php

namespace Dupriez\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PC_portableType extends AbstractType
{
    /**
     *
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('marque')
                ->add('modele')
                ->add('dimenssion')
                ->add('os')
                ->add('ecran')
                ->add('utilisation')
                ->add('poid')
                ->add('products', ProductsType::class);
    }/**
     *
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dupriez\ProductBundle\Entity\PC_portable'
        ));
    }

    /**
     * {
     */
    public function getBlockPrefix()
    {
        return 'dupriez_productbundle_pc_portable';
    }


}
