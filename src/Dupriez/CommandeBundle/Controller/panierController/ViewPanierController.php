<?php


namespace Dupriez\CommandeBundle\Controller\panierController;


use Dupriez\CommandeBundle\Entity\Commande;
use Dupriez\CommandeBundle\Form\CommandeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ViewPanierController extends Controller
{
    /**
     * @Route("/panier/{user}", name="panier")
     */
    public function viewPanierAction(Request $request, $user)
    {
        $panierList = $this->getDoctrine()->getRepository('DupriezCommandeBundle:Panier')->findOneBy(array("user" => $user, "etat" => 0));


        $commande = new Commande();




        $form = $this->createForm(CommandeType::class, $commande);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($commande);

            $em->flush();

            return new Response('commande validé');
        }

        $fromView = $form->createView();

        return $this->render('@DupriezCommande/Panier/panierList.html.twig', array('panierList' => $panierList, 'commandeForm' => $fromView));


    }
}