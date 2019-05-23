<?php


namespace Dupriez\UserBundle\Controller\adresseController;


use Dupriez\UserBundle\Entity\Adresses;
use Dupriez\UserBundle\Form\AdressesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddAdresseController extends Controller
{
    /**
     * @Route("/addadresse", name="addAdresse")
     */
    public function addAdresseAction(Request $request)
    {
        $adresse = new Adresses();

        $form= $this->createForm(AdressesType::class,$adresse);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($adresse);

            $em->flush();

            return new Response('adresse ajouté');
        }

        $fromView =$form->createView();

        return $this->render('@DupriezUser/Default/adresse/adresseForm.html.twig', array('adresseForm'=>$fromView));
    }
}