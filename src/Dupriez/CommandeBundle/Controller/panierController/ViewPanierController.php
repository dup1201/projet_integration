<?php


namespace Dupriez\CommandeBundle\Controller\panierController;


use Dupriez\CommandeBundle\Entity\Panier;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewPanierController extends Controller
{
    /**
     * @Route("/panier/{users}", name="panier")
     */
    public function viewPanierAction($users)
    {
       $panierList = $this->getDoctrine()
             ->getRepository('DupriezCommandeBundle:Panier')
             ->getProductViewPanier();
         /*  $panierList=$this->getDoctrine()->getRepository('DupriezCommandeBundle:Panier')->find($users);*/
        return $this->render('@DupriezCommande/Panier/panierList.html.twig', array('panierList' => $panierList));

    }
}