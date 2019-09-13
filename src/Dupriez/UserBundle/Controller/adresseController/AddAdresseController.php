<?php


namespace Dupriez\UserBundle\Controller\adresseController;


use Dupriez\UserBundle\Entity\Adresses;
use Dupriez\UserBundle\Form\AdressesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddAdresseController extends Controller
{
    /**
     * @Route("/addadresse", name="addadresse")
     * @param Request $request
     * @return Response
     */
    public function addAdresseAction(Request $request)
    {
        $user = $this->getUser()->getId();
        $adresse = new Adresses();
        $adresse->setUsers($user);


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

        return $this->render('@DupriezUser/Default/adresse/adresseForm.html.twig', array('adresseForm'=>$fromView, 'user'=>$user));
    }
}