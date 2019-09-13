<?php


namespace Dupriez\CommandeBundle\Controller\panierController;


use Dupriez\CommandeBundle\Entity\Panier;
use Dupriez\CommandeBundle\Form\PanierType;
use Dupriez\ProductBundle\Entity\Products;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddPanierController extends Controller
{
    /**
     * @Route("/addpanier", name="addpanier")
     * @param Request $request
     * @return Response
     */
    public function addPanierAction(Request $request)
    {

        $user = $this->getUser();
        $product = $request->query->get('id');

        $panier = new Panier();
        $panier->setUsers($user);
        $panier->setProducts($product);

        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($panier);

            $em->flush();

            return new Response('produit ajouté au panier');
        }

        $fromView = $form->createView();

        return $this->render('@DupriezCommande/Panier/panierForm.html.twig', array('panierForm' => $fromView));
    }
}