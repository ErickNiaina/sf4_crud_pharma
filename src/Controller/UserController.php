<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\UserService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function list(UserService $userService)
    {
        $user = $userService->getAllUser();
        return $this->render('user/list.html.twig',[
            'user' => $user
        ]);
    }

    /**
     * @Route("/view/{id}/user", name="user_view")
     */
    public function view($id,UserService $userService)
    {
        $oneUser = $userService->getByIdUser($id);
        
        return $this->render('user/view.html.twig',[
            'oneuser' => $oneUser
        ]);
    }

    /**
     * @Route("/add/user", name="user_add")
     */
    public function add(UserService $userService,Request $request,UserPasswordEncoderInterface $encoder)
    {
        $submittedToken = $request->request->get('token');
            if ($this->isCsrfTokenValid('add-user', $submittedToken)) {
                $adduser = $userService->addUser($request,$encoder);
                
                return $this->redirectToRoute('user');
            }
        
        return $this->render('user/add.html.twig');
    }

    /**
     * @Route("/edit/{id}/user", name="user_edit")
     */
    public function edit(UserService $userService,$id,Request $request)
    {
        $oneUser = $userService->getByIdUser($id);

        $submittedToken = $request->request->get('token');
        if ($this->isCsrfTokenValid('edit-user', $submittedToken)) {
            
            $userService->updateUser($userService,$request,$id);

            return $this->redirectToRoute('user');
        }
       
        return $this->render('user/edit.html.twig',[
            'oneuser' => $oneUser
        ]);
    }

    /**
     * @Route("/delete/{id}/user", name="user_delete")
     */
    public function delete(UserService $userService,$id)
    {
        $userService->deleteUser($userService,$id);
        return $this->redirectToRoute('user');
    }
}
