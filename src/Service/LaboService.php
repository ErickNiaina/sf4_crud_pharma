<?php

namespace App\Service;

use App\Entity\Laboratory;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class LaboService
{
    public function __construct(EntityManagerInterface $em,TokenStorageInterface $tokenStorage) 
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }


    public function addLabo(Request $request)
    {
        $labo = new Laboratory();
        $name = $request->request->get('name');
        $code = $request->request->get('code');
        $creePar = 'admin';
        $creele = $request->request->get('creele');
        $creele = new \DateTime($creele);
        
       
        $labo->setNamelaboratory($name);
        $labo->setCodelaboratory($code);
        $labo->setCreePar($creePar);
        $labo->setCreeLe($creele);

        $this->em->persist($labo);
        $this->em->flush();  
        
    }


    public function getAllLabo()
    {
        $labo = $this->em->getRepository(Laboratory::class)->findAll();
        return $labo;
    }

    public function getByIdLabo($id)
    {
        $labo = $this->em->getRepository(Laboratory::class)->findOneBy(array('id' => $id));
        return $labo;
    }

    public function deleteLabo(LaboService $laboService,$id)
    {
        $labo = $laboService->getByIdLabo($id);
        
        $this->em->remove($labo);
        $this->em->flush(); 
    }


    public function newdateNow(){
        $now = new DateTime();
        $end = new DateTime($now->format('Y-m-t'));

        $dateloading = ((array) $now)['date'];
        $convertDatenow = date("Y-m-d h:i:s",strtotime($dateloading)); //recuperation de 1er avec format
 
        return $convertDatenow;
    }

    public function updateLabo(LaboService $laboService,Request $request,$id)
    {
        $labo = $laboService->getByIdLabo($id);

        $name = $request->request->get('name');
        $code = $request->request->get('code');
        $modifiePar = 'admin_modif';
        $datenow = $laboService->newdateNow();
        $datenow = new DateTime($datenow);
    
        $labo->setNamelaboratory($name);
        $labo->setCodelaboratory($code);
        $labo->setModifieLe($datenow);
        $labo->setCreeLe($labo->getCreeLe());
        $labo->setModifiePar($modifiePar);
        

        $this->em->persist($labo);
        $this->em->flush();  
    }
}