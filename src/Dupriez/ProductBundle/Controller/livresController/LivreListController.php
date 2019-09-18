<?php


namespace Dupriez\ProductBundle\Controller\livresController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LivreListController extends Controller
{

    public function livreListAction()
    {
        $list = $this->getDoctrine()
            ->getRepository('DupriezProductBundle:Livres')
            ->getLivreWithProduct();
            return $list;
    }

    /**
     * @Route("/livre", name="livre")
     */
    public function livreClientAction()
    {
        $livreList=$this->livreListAction();
        return $this->render('@DupriezProduct/Livre/livre.html.twig', array('livreList'=>$livreList));
    }

    /**
     * @Route("/livregestion", name="livregestion")
     */
    public function livreGestionAction()
    {
        $livreList=$this->livreListAction();
        return $this->render('@DupriezProduct/Livre/livreGestion.html.twig', array('livreList'=>$livreList));
    }
}