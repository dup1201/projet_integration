<?php


namespace Dupriez\ProductBundle\Controller\pcPortableController;


use Dupriez\ProductBundle\Entity\PC_portable;
use Dupriez\ProductBundle\Form\PC_portableType;
use Dupriez\ProductBundle\Form\telephoneType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddpcController extends Controller
{
    /**
     * @Route("/addpc", name="addpc")
     * @param Request $request
     * @return Response
     */
    public function addPcAction(Request $request)
    {
        $pc = new PC_portable();

        $form= $this->createForm(PC_portableType::class, $pc);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($pc);

            $em->flush();

            $flashbag = $this->get('session')->getFlashBag();
            $flashbag->add("success", "pc ajouté");
            return $this->redirectToRoute('productsgestion');
        }

        $fromView =$form->createView();

        return $this->render('@DupriezProduct/Pc/PcForm.html.twig', array('PcForm'=>$fromView));
    }
}