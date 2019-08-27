<?php


namespace Dupriez\ProductBundle\Controller\livresController;


use Dupriez\ProductBundle\Entity\Livres;
use Dupriez\ProductBundle\Form\LivresType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EditLivreController extends Controller
{
    /**
     * @Route("/editlivre/{id}", name="editlivre")
     * @param Request $request
     * @return Response
     */
    public function editLivreAction(Request $request, Livres $livre)
    {

        $form= $this->createForm(LivresType::class, $livre);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($livre);

            $em->flush();

            return new Response('Livre modifié');
        }

        $fromView =$form->createView();

        return $this->render('@DupriezProduct/Livre/livreForm.html.twig', array('livreForm'=>$fromView));
    }
}