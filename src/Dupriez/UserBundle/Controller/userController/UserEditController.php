<?php


namespace Dupriez\UserBundle\Controller\userController;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserEditController extends Controller
{
    /**
     * @Route("/userEdit/{id}", name="userEdit")
     */
    public function userEditAction($id)
    {
        $userList= $this->getDoctrine()
            ->getRepository('DupriezUserBundle:Users')
            ->find($id);
    }
}
