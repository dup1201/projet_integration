<?php

namespace Dupriez\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TelephoneType extends AbstractType
{
    /**
     *
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('marque')
                ->add('modele')
                ->add('couleur')
                ->add('capacite')
                ->add('ecran')
                ->add('dimenssion')
                ->add('products', ProductsType::class);
    }/**
     *
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dupriez\ProductBundle\Entity\Telephone'
        ));
    }

    /**
     *
     */
    public function getBlockPrefix()
    {
        return 'dupriez_productbundle_telephone';
    }


}
