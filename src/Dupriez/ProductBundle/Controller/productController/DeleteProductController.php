<?php


namespace Dupriez\ProductBundle\Controller\productController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DeleteProductController extends Controller
{
    /**
     * @Route ("/deleteproduct/{id}", name="deleteproduct")
     * @return Response
     */
    public function deleteProductAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('DupriezProductBundle:Products');
        $product = $repository->find($id);
        $em->remove($product);
        $em->flush();

        return new Response('Produit supprimé');
    }
}