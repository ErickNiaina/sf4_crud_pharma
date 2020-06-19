<?php

namespace App\Service;

use App\Entity\Family;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class FamilyService
{
    public function __construct(EntityManagerInterface $em,TokenStorageInterface $tokenStorage) 
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }


    public function addFamily(Request $request)
    {
        $family = new Family();
        $name = $request->request->get('libelle');
        $code = $request->request->get('code');
        $creePar = 'admin';
        $creele = $request->request->get('creele');
        $creele = new \DateTime($creele);
        
       
        $family->setLibelle($name);
        $family->setCodefamily($code);
        $family->setCreePar($creePar);
        $family->setCreeLe($creele);

        $this->em->persist($family);
        $this->em->flush();  
        
    }


    public function getAllFamily()
    {
        $family = $this->em->getRepository(Family::class)->findAll();
        return $family;
    }

    public function getByIdFamily($id)
    {
        $family = $this->em->getRepository(Family::class)->findOneBy(array('id' => $id));
        return $family;
    }

    public function deleteFamily(FamilyService $familyservice,$id)
    {
        $family = $familyservice->getByIdFamily($id);
        
        $this->em->remove($family);
        $this->em->flush(); 
    }


    public function newdateNow(){
        $now = new DateTime();
        $end = new DateTime($now->format('Y-m-t'));

        $dateloading = ((array) $now)['date'];
        $convertDatenow = date("Y-m-d h:i:s",strtotime($dateloading)); //recuperation de 1er avec format
 
        return $convertDatenow;
    }

    public function updateFamily(FamilyService $familyservice,Request $request,$id)
    {
        $family = $familyservice->getByIdFamily($id);

        $name = $request->request->get('libelle');
        $code = $request->request->get('code');
        $modifiePar = 'admin_modif';
        $datenow = $familyservice->newdateNow();
        $datenow = new DateTime($datenow);
    
        $family->setLibelle($name);
        $family->setCodefamily($code);
        $family->setModifieLe($datenow);
        $family->setCreeLe($family->getCreeLe());
        $family->setModifiePar($modifiePar);
        

        $this->em->persist($family);
        $this->em->flush();  
    }
}