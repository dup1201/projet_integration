<?php


namespace Dupriez\ProductBundle\Controller\pcPortableController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DeletePcController extends Controller
{
    /**
     * @Route("/deletepc/{id}", name="deletepc")
     * @param $id
     * @return Response
     */
    public function deletePcAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('DupriezProductBundle:PC_portable');
        $pc = $repository->find($id);
        $em->remove($pc);
        $em->flush();

        $flashbag = $this->get('session')->getFlashBag();
        $flashbag->add("success", "pc portable supprimé");
        return $this->redirectToRoute('pcgestion');
    }
}