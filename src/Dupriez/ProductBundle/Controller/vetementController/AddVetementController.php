<?php


namespace Dupriez\ProductBundle\Controller\vetementController;


use Dupriez\ProductBundle\Entity\Vetements;
use Dupriez\ProductBundle\Form\VetementsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddVetementController extends Controller
{
    /**
     * @Route("/addvetement", name="addvetement")
     * @param Request $request
     * @return Response
     */
    public function addVetementAction(Request $request)
    {
        $vetement = new Vetements();

        $form= $this->createForm(VetementsType::class, $vetement);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($vetement);

            $em->flush();

            return new Response('Vetement ajouté');
        }

        $fromView =$form->createView();

        return $this->render('@DupriezProduct/Vetement/vetementForm.html.twig', array('vetementForm'=>$fromView));
    }
}