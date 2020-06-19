<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserService
{
    public function __construct(EntityManagerInterface $em,TokenStorageInterface $tokenStorage) 
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }


    public function getUserCourant()
    {
        $user = $this->tokenStorage->getToken()->getUser();
        //->getrowid();
        return $user;
    }

    public function addUser(Request $request,UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $username = $request->request->get('username');
        $email = $request->request->get('email');
        $password = $request->request->get('password');
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPassword($password);
        $hash = $encoder->encodePassword($user, $user->getPassword());
        $crypt = $user->setPassword($hash);
        
        $this->em->persist($user);
        $this->em->flush();  
        
    }


    public function getAllUser()
    {
        $user = $this->em->getRepository(User::class)->findAll();
        return $user;
    }

    public function getByIdUser($id)
    {
        $user = $this->em->getRepository(User::class)->findOneBy(array('id' => $id));
        return $user;
    }

    public function deleteUser(UserService $userservice,$id)
    {
        $user = $userservice->getByIdUser($id);
        
        $this->em->remove($user);
        $this->em->flush(); 
    }

    public function updateUser(UserService $userService,Request $request,$id)
    {
        $user = $userService->getByIdUser($id);

        $username = $request->request->get('username');
        $email = $request->request->get('email');

        $user->setUsername($username);
        $user->setEmail($email);

        $this->em->persist($user);
        $this->em->flush();  
    }
}