<?php


namespace Dupriez\UserBundle\Controller\adresseController;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ViewAdresse extends Controller
{
    /**
     * @Route("/adresse/{user}", name="adresse")
     */
    public function viewAdresseAction($user)
    {
        $adresseList=$this->getDoctrine()
            ->getRepository('DupriezUserBundle:Adresses')
            ->findBy(array('users'=> $user));
        return $this->render('@DupriezUser/default/adresse/adresseTableau.html.twig', array('adresseList' =>$adresseList));
    }
}