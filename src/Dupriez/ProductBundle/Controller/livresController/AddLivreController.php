<?php


namespace Dupriez\ProductBundle\Controller\livresController;


use Dupriez\ProductBundle\Entity\Livres;
use Dupriez\ProductBundle\Form\LivresType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddLivreController extends Controller
{
    /**
     * @Route("/addlivre", name="addlivre")
     * @param Request $request
     * @return Response
     */
    public function addLivreAction(Request $request)
    {

        $livre = new Livres();

        $form= $this->createForm(LivresType::class, $livre);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($livre);

            $em->flush();

            $flashbag = $this->get('session')->getFlashBag();
            $flashbag->add("success", "livre ajouté");
            return $this->redirectToRoute('productsgestion');
        }

        $fromView =$form->createView();

        return $this->render('@DupriezProduct/Livre/livreForm.html.twig', array('livreForm'=>$fromView));
    }
}