<?php


namespace Dupriez\ProductBundle\Controller\pcPortableController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PcListController extends Controller
{
    /**
     * @Route("/pc", name="pc")
     */
    public function pcListAction()
    {
        $pcList = $this->getDoctrine()
            ->getRepository('DupriezProductBundle:PC_portable')
            ->getPcWithProduct();

        return $this->render('@DupriezProduct/Pc/pc.html.twig', array('pcList'=>$pcList));

    }
}