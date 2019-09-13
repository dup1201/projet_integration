<?php


namespace Dupriez\ProductBundle\Controller\pcPortableController;


use Dupriez\ProductBundle\Entity\PC_portable;
use Dupriez\ProductBundle\Form\PC_portableType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EditPcController extends Controller
{
    /**
     * @Route("/editpc/{id}", name="editpc")
     * @param Request $request
     * @return Response
     */
    public function editPcAction(Request $request, PC_portable $pc)
    {

        $form= $this->createForm(PC_portableType::class, $pc);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($pc);

            $em->flush();

            return new Response('Pc portable ajouté');
        }

        $fromView =$form->createView();

        return $this->render('@DupriezProduct/Pc/PcForm.html.twig', array('PcForm'=>$fromView));
    }
}