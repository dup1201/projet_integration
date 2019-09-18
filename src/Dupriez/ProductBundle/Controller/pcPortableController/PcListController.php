<?php


namespace Dupriez\ProductBundle\Controller\pcPortableController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PcListController extends Controller
{

    public function pcListAction()
    {
            $list= $this->getDoctrine()
            ->getRepository('DupriezProductBundle:PC_portable')
            ->getPcWithProduct();

        return $list;

    }

    /**
     * @Route("/pc", name="pc")
     */
    public function affichePcClient()
    {
        $pcList=$this->pcListAction();
        return $this->render('@DupriezProduct/Pc/pc.html.twig', array('pcList'=>$pcList));
    }
    /**
     * @Route("/pcgestion", name="pcgestion")
     */
    public function affichePcGestion()
    {
        $pcList=$this->pcListAction();
        return $this->render('@DupriezProduct/Pc/pcGestion.html.twig', array('pcList'=>$pcList));
    }

}