<?php


namespace Dupriez\UserBundle\Controller\userController;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserDetailController extends Controller
{
    /**
     * @Route("/userDetail/{id}", name="userDetail")
     */
    public function userDetailAction($id)
    {

        $userList= $this->getDoctrine()
            ->getRepository('DupriezUserBundle:Users')
            ->find($id);
        return $this->render('@DupriezUser/Default/users/userDetail.html.twig',compact('userList'));

    }
}