<?php


namespace Dupriez\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Test\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('date de naissance')
            ->add('telephone');
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }
    public function getName()
    {
        return 'dupriez_user_registration';
    }
}
