<?php


namespace Dupriez\ProductBundle\Controller\telephoneController;


use Dupriez\ProductBundle\Entity\Telephone;
use Dupriez\ProductBundle\Form\TelephoneType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EditTelephoneController extends Controller
{
    /**
     * @Route("/edittelephone/{id}", name="edittelephone")
     * @param Request $request
     * @return Response
     */
    public function editPcAction(Request $request, Telephone $telephone)
    {
        $form= $this->createForm(TelephoneType::class, $telephone);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($telephone);

            $em->flush();

            return new Response('Telephone  modifié');
        }

        $fromView =$form->createView();

        return $this->render('@DupriezProduct/Telephone/telephoneForm.html.twig', array('telephoneForm'=>$fromView));
    }
}