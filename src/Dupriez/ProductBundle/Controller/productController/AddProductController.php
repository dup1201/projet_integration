<?php


namespace Dupriez\ProductBundle\Controller\productController;



use Dupriez\ProductBundle\Entity\Products;
use Dupriez\ProductBundle\Form\ProductsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddProductController extends Controller
{
    /**
     * @Route("/addproduct", name="addproduct")
     * @param Request $request
     * @return Response
     */
    public function addProductAction(Request $request)
    {
        $products = new Products();

        $form= $this->createForm(ProductsType::class, $products);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em =$this->getDoctrine()->getManager();

            $em->persist($products);

            $em->flush();

            return new Response('produit ajouté');
        }

        $fromView =$form->createView();

        return $this->render('@DupriezProduct/Product/productForm.html.twig', array('productForm'=>$fromView));
    }
}