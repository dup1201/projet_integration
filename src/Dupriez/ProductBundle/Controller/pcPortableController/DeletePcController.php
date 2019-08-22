<?php


namespace Dupriez\ProductBundle\Controller\pcPortableController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DeletePcController extends Controller
{
    /**
     * @Route("/deletepc/{id}", name="deletepc")
     * @param $id
     * @return Response
     */
    public function deletePcAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('DupriezProductBundle:PC_portable');
        $pc = $repository->find($id);
        $em->remove($pc);
        $em->flush();

        return new Response('pc portable supprimé');
    }
}