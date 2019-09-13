<?php


namespace Dupriez\ProductBundle\Controller\productController;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProductListController extends Controller
{
    /**
     * @Route("/productsgestion", name="productsgestion")
     */
    public function productListAction()
    {
        $productList= $this->getDoctrine()
            ->getRepository('DupriezProductBundle:Products')
            ->findAll();

        return $this->render('@DupriezProduct/Product/product.html.twig', array('productList'=>$productList));
    }

    /**
     * @Route("/products", name="products")
     */
    public function productListUserAction()
    {
        $productList= $this->getDoctrine()
            ->getRepository('DupriezProductBundle:Products')
            ->findAll();

        return $this->render('@DupriezProduct/Product/productList.html.twig', array('productList'=>$productList));
    }
}