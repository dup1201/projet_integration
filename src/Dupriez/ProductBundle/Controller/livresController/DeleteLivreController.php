<?php


namespace Dupriez\ProductBundle\Controller\livresController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DeleteLivreController extends Controller
{
    /**
     * @Route("/deletelivre/{id}", name="deletelivre")
     * @param $id
     * @return Response
     */
    public function deleteLivreAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('DupriezProductBundle:Livres');
        $livre = $repository->find($id);
        $em->remove($livre);
        $em->flush();

        return new Response('Livre supprimé');
    }
}