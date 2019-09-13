<?php


namespace Dupriez\ProductBundle\Controller\vetementController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


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

    /**
     * @Route("/vetementcategorie", name="vetementcategorie")
     */
    public function vetementCAtegorieAction()
    {
        return $this->render('@DupriezProduct/Vetement/vetementCategorie.html.twig');
    }

    /**
     * @Route("/pull", name="pull")
     */
    public function pullListAction()
    {
        $pullList = $this->getDoctrine()
            ->getRepository('DupriezProductBundle:Vetements')
            ->getCategorieWithProduct('pull');

        return $this->render('@DupriezProduct/Vetement/pull.html.twig', array('pullList'=>$pullList));
    }

    /**
     * @Route("/teeshirt", name="teeshirt")
     * @param Request $request
     */
    public function teeShirtListAction(Request $request)
    {
        $page = $request->get('page', 1);
            $nbParPage = 4;

        $repository = $this->getDoctrine()
            ->getRepository('DupriezProductBundle:Vetements');

            $teeShirtList=$repository
            ->getPage($page, $nbParPage);

            $nbDeTeeShirt = $repository->getNombreDeTeeShirt();
            $nbDePage = ceil($nbDeTeeShirt / $nbParPage);




        return $this->render('@DupriezProduct/Vetement/teeShirt.html.twig', array('teeShirtList'=>$teeShirtList, 'nbDePage'=>$nbDePage));
    }


}