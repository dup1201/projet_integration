<?php


namespace Dupriez\ProductBundle\Controller\vetementController;


use Dupriez\ProductBundle\Entity\Vetements;
use Dupriez\ProductBundle\Form\VetementsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EditVetementController extends Controller
{
    /**
     * @Route("/editvetement/{id}", name="editvetement")
     * @param Request $request
     * @return Response
     */
    public function EditVetementAction(Request $request, Vetements $vetement)
    {
        $form= $this->createForm(VetementsType::class, $vetement);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($vetement);

            $em->flush();

            $flashbag = $this->get('session')->getFlashBag();
            $flashbag->add("success", "Vetement modifié");
        }

        $fromView =$form->createView();

        return $this->render('@DupriezProduct/Vetement/vetementForm.html.twig', array('vetementForm'=>$fromView));
    }
}