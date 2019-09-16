<?php


namespace Dupriez\CommandeBundle\Controller\panierController;


use Dupriez\CommandeBundle\Entity\Commande;
use Dupriez\CommandeBundle\Form\CommandeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ValidPanierController extends Controller
{
    /**
     * @Route("/validpanier" , name="validpanier")
     * @param Request
     * @return Response
     */
    public function ValidPanierAction(Request $request)
    {

    }


}