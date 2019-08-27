<?php


namespace Dupriez\ProductBundle\Controller\vetementController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VetementListController extends Controller
{
    /**
     * @Route("/vetement", name="vetement")
     */
    public function vetementListAction()
    {
        $vetementList = $this->getDoctrine()
            ->getRepository('DupriezProductBundle:Vetements')
            ->getVetementWithProduct();

        return $this->render('@DupriezProduct/Vetement/vetement.html.twig', array('vetementList'=>$vetementList));
    }
}