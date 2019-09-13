<?php


namespace Dupriez\ProductBundle\Controller\telephoneController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DeleteTelephoneController extends Controller
{
    /**
     * @Route("/deletetelephone/{id}", name="deletetelephone")
     * @param $id
     * @return Response
     */
    public function deleteLivreAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('DupriezProductBundle:Telephone');
        $telephone = $repository->find($id);
        $em->remove($telephone);
        $em->flush();

        return new Response('Telephone supprimé');
    }
}