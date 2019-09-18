<?php

namespace Dupriez\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
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
                ->add('quantite', IntegerType::class, array('attr'=> array('min'=>1)))
                ->add('categorie', ChoiceType::class, ['choices'=> [
                    'livres' => 'livres',
                    'PC portables' =>'p_c_portable',
                    'Telephone' => 'telephone',
                    'Pull' => 'Pull',
                    'TeeShirt'=>'TeeShirt'
                ]])
                ->add('image', FileType::class, array('label'=>'image(JPG, PNG)','data_class'=>null));

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dupriez\ProductBundle\Entity\Products'
        ));
    }


    public function getBlockPrefix()
    {
        return 'dupriez_productbundle_products';
    }


}
