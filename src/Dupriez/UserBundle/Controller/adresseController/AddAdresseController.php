<?php


namespace Dupriez\UserBundle\Controller\adresseController;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AddAdresseController extends Controller
{
    /**
     * @Route("/addadresse", name="addAdresse")
     */
    public function indexAction()
    {
        return $this->render('@DupriezUser/Default/adresse/adresseForm.html.twig');
    }
}