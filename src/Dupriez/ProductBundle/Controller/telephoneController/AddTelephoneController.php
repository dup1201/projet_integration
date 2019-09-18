<?php


namespace Dupriez\ProductBundle\Controller\telephoneController;


use Dupriez\ProductBundle\Entity\Telephone;
use Dupriez\ProductBundle\Form\TelephoneType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddTelephoneController extends Controller
{
    /**
     * @Route("/addtelephone", name="addtelephone")
     * @param Request $request
     * @return Response
     */
    public function addPcAction(Request $request)
    {
        $telephone = new Telephone();

        $form= $this->createForm(TelephoneType::class, $telephone);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($telephone);

            $em->flush();

            $flashbag = $this->get('session')->getFlashBag();
            $flashbag->add("success", "telephone ajouté");
            return $this->redirectToRoute('productsgestion');
        }

        $fromView =$form->createView();

        return $this->render('@DupriezProduct/Telephone/telephoneForm.html.twig', array('telephoneForm'=>$fromView));
    }
}