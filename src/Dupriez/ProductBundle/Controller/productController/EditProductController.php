<?php


namespace Dupriez\ProductBundle\Controller\productController;


use Dupriez\ProductBundle\Entity\Products;
use Dupriez\ProductBundle\Form\ProductsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EditProductController extends Controller
{
    /**
     * @Route("/editproduct/{id}", name="editproduct")
     * @param request $request
     * @return Response
     */
    public function editProductAction(request $request, Products $products)
    {
        $form=$this->createForm(ProductsType::class,$products);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($products);
            $em->flush();
            return new Response('produit modifié');
        }
        $fromView =$form->createView();

        return $this->render('@DupriezProduct/Product/productForm.html.twig', array('productForm'=>$fromView));
    }
}