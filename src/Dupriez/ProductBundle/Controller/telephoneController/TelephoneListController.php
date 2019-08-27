<?php


namespace Dupriez\ProductBundle\Controller\telephoneController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TelephoneListController extends Controller
{
    /**
     * @Route("/telephone", name="telephone")
     */
    public function telephoneListAction()
    {
        $telephoneList = $this->getDoctrine()
            ->getRepository('DupriezProductBundle:Telephone')
            ->getTelephoneWithProduct();

        return $this->render('@DupriezProduct/Telephone/telephone.html.twig', array('telephoneList'=>$telephoneList));
    }

}