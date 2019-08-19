<?php

namespace Dupriez\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('prix')
                ->add('quantite')
                ->add('categorie', ChoiceType::class, ['choices'=> [
                    'livres' => 'livres',
                    'PC portables' =>'p_c_portable',
                    'Telephone' => 'telephone',
                    'Vetements' => 'vetements'
                ]])
                ->add('image', FileType::class, array('label'=>'image(JPG, PNG)','data_class'=>null));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dupriez\ProductBundle\Entity\Products'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dupriez_productbundle_products';
    }


}
