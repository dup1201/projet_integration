<?php

namespace Dupriez\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function indexAction()
    {
        return $this->render('@DupriezAccueil/Default/index.html.twig');
    }
}
