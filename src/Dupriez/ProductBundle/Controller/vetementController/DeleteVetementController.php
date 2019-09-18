<?php


namespace Dupriez\ProductBundle\Controller\vetementController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DeleteVetementController extends Controller
{
    /**
     * @Route("/deletevetement/{id}", name="deletevetement")
     * @param $id
     * @return Response
     */
    public function deleteLivreAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('DupriezProductBundle:Vetements');
        $vetement = $repository->find($id);
        $em->remove($vetement);
        $em->flush();

        $flashbag = $this->get('session')->getFlashBag();
        $flashbag->add("success", "vetement supprimé");
        return $this->redirectToRoute('vetement');
    }
}