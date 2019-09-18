<?php


namespace Dupriez\ProductBundle\Controller\telephoneController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DeleteTelephoneController extends Controller
{
    /**
     * @Route("/deletetelephone/{id}", name="deletetelephone")
     * @param $id
     * @return Response
     */
    public function deleteLivreAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('DupriezProductBundle:Telephone');
        $telephone = $repository->find($id);
        $em->remove($telephone);
        $em->flush();

        $flashbag = $this->get('session')->getFlashBag();
        $flashbag->add("success", "téléphone supprimé");
        return $this->redirectToRoute('telephonegestion');
    }
}