<?php


namespace Dupriez\CommandeBundle\Controller\panierController;


use Dupriez\CommandeBundle\Entity\Contenu;
use Dupriez\CommandeBundle\Entity\Panier;
use Dupriez\CommandeBundle\Form\PanierType;
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
        $idProduct = $request->query->get('id');
        $product = $this->getDoctrine()->getRepository('DupriezProductBundle:Products')
            ->find($idProduct);


        $panier = $this->getDoctrine()
            ->getRepository('DupriezCommandeBundle:Panier')
            ->getPanierUser($user);

        if (count($panier) == 0) {
            $panier = new Panier();
            $panier->setUser($user);
            $panier->setEtat(0);
        } else {
            $panier = $panier[0];
        }

        $form = $this->createForm(PanierType::class, new Contenu());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $contenu = new Contenu();
            $contenu->setPanier($panier)
                ->setProduct($product)
                ->setQuantite($form['quantite']->getData())
                ->setTotal( $product->getPrix()*$contenu->getQuantite());
            $panier->getContenu()->add($contenu);
            $em->persist($panier);
            $em->persist($contenu);

            $em->flush();

            return new Response('produit ajouté au panier');
        }

        $fromView = $form->createView();

        return $this->render('@DupriezCommande/Panier/panierForm.html.twig', array('panierForm' => $fromView));
    }
}