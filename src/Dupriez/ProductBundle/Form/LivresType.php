<?php

namespace Dupriez\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivresType extends AbstractType
{
    /**
     *
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
                ->add('categorie',ChoiceType::class, ['choices'=> [
                    'enfant' => 'enfant',
                    'BD' =>'BD',
                    'roman' => 'roman',
                    'informatique' => 'informatique'
                ]])
                ->add('nbPages')
                ->add('isbn')
                ->add('editeur')
                ->add('dimenssion')
                ->add('auteur')
                ->add('resume')
                ->add('products', ProductsType::class);
    }/**
     *
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dupriez\ProductBundle\Entity\Livres'
        ));
    }

    /**
     *
     */
    public function getBlockPrefix()
    {
        return 'dupriez_productbundle_livres';
    }


}
