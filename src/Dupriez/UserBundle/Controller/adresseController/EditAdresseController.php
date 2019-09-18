<?php


namespace Dupriez\UserBundle\Controller\adresseController;


use Dupriez\UserBundle\Entity\Adresses;
use Dupriez\UserBundle\Form\AdressesType;
use FOS\UserBundle\Model\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EditAdresseController extends Controller
{
    /**
     * @Route("/editadresse/{id}", name="editadresse")
     * @param Request $request
     * @return Response
     */
    public function editAdresseAction(Request $request, Adresses $adresse)
    {

        $user = $this->getUser()->getId();

        $form= $this->createForm(AdressesType::class,$adresse);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($adresse);

            $em->flush();

            $flashbag = $this->get('session')->getFlashBag();
            $flashbag->add("success", "Adresse modifié");
            return $this->redirectToRoute('adresse',['user'=>$user]);
        }

        $fromView =$form->createView();

        return $this->render('@DupriezUser/Default/adresse/adresseForm.html.twig', array('adresseForm'=>$fromView));
    }
}