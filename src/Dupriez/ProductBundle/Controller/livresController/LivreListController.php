<?php


namespace Dupriez\ProductBundle\Controller\livresController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LivreListController extends Controller
{
    /**
     * @Route("/livre", name="livre")
     */
    public function livreListAction()
    {
        $livreList = $this->getDoctrine()
            ->getRepository('DupriezProductBundle:Livres')
            ->getLivreWithProduct();

        return $this->render('@DupriezProduct/Livre/livre.html.twig', array('livreList'=>$livreList));
    }
}