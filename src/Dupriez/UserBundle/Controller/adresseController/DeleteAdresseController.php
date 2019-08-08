<?php


namespace Dupriez\UserBundle\Controller\adresseController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DeleteAdresseController extends Controller
{

    /**
     * @Route("/deleteadresse/{id}", name="deleteadresse")
     * @return Response
     */
    public function deleteAdresseAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('DupriezUserBundle:Adresses');
        $adresse = $repository->find($id);
        $em->remove($adresse);
        $em->flush();

        return new Response('Adresse supprimé');
    }
}