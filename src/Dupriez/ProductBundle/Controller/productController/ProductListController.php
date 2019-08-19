<?php


namespace Dupriez\ProductBundle\Controller\productController;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProductListController extends Controller
{
    /**
     * @Route("/products", name="products")
     */
    public function productListAction()
    {
        $productList= $this->getDoctrine()
            ->getRepository('DupriezProductBundle:Products')
            ->findAll();

        return $this->render('@DupriezProduct/Product/product.html.twig', array('productList'=>$productList));
    }
}