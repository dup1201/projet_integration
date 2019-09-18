<?php


namespace Dupriez\ProductBundle\Controller\telephoneController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TelephoneListController extends Controller
{
    public function getTelephoneListAction()
    {
        $list = $this->getDoctrine()
            ->getRepository('DupriezProductBundle:Telephone')
            ->getTelephoneWithProduct();
        return $list;

    }

    /**
     * @Route("/telephonegestion", name="telephonegestion")
     */
    public function telephoneListGestionAction()
    {
        $telephoneList = $this->getTelephoneListAction();

        return $this->render('@DupriezProduct/Telephone/telephone.html.twig', array('telephoneList' => $telephoneList));
    }

    /**
     * @Route("/telephone", name="telephone")
     */
    public function afficheTelephoneClient()
    {
        $telephoneList = $this->getTelephoneListAction();
        return $this->render('@DupriezProduct/Telephone/telephoneClient.html.twig', array('telephoneList' => $telephoneList));
    }
}