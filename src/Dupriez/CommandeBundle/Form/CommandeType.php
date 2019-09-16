<?php

namespace Dupriez\CommandeBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresseLiv', EntityType::class, array(
                'class' => 'Dupriez\UserBundle\Entity\Adresses',
                'choice_label' => 'adresse'))
            ->add('adresseFact', EntityType::class, array(
                'class' => 'Dupriez\UserBundle\Entity\Adresses',
                'choice_label' => 'adresse'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dupriez\CommandeBundle\Entity\Commande'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dupriez_commandebundle_commande';
    }

}
