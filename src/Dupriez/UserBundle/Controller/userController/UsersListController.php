<?php


namespace Dupriez\UserBundle\Controller\userController;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class UsersListController extends Controller
{
    /**
     * @Route("/users", name="users")
     */
    public function usersListAction()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, "Vous ne pouvez voir cette page que si vous êtes administrateur ");
        $usersList= $this->getDoctrine()
            ->getRepository('DupriezUserBundle:Users')
            ->findAll();

        return $this->render('@DupriezUser/Default/users/users.html.twig', array('usersList'=>$usersList));
    }




}