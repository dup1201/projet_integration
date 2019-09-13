<?php


namespace Dupriez\UserBundle\Form;

use Symfony\Component\Form\AbstractType;


class RegistrationType extends AbstractType
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
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'dupriez_user_registration';
    }


    public function getName()
    {
        return $this->getBlockPrefix();
    }


}
