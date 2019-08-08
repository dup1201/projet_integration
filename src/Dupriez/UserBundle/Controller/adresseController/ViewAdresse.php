<?php


namespace Dupriez\UserBundle\Controller\adresseController;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ViewAdresse extends Controller
{
    /**
     * @Route("/adresse/{users}", name="adresse")
     */
    public function viewAdresseAction($users)
    {
        $adresseList=$this->getDoctrine()
            ->getRepository('DupriezUserBundle:Adresses')
            ->findBy(array('users'=> $users));
        return $this->render('@DupriezUser/default/adresse/adresseTableau.html.twig', array('adresseList' =>$adresseList));
    }
}