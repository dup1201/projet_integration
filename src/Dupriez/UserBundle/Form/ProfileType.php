<?php


namespace Dupriez\UserBundle\Form;


use Symfony\Component\Form\AbstractType;

class ProfileType extends AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('telephone');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getBlockPrefix()
    {
        return 'dupriez_user_profile';
    }


    public function getName()
    {
        return $this->getBlockPrefix();
    }

}