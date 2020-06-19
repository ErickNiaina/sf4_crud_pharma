<?php

namespace App\Service;

use App\Entity\Category;
use App\Entity\Family;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class CategoryService
{
    public function __construct(EntityManagerInterface $em,TokenStorageInterface $tokenStorage) 
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }


    public function addCategory(Request $request,FamilyService $familyService)
    {
       
        $category = new Category();
        $name = $request->request->get('libelle');
        $code = $request->request->get('code');
        $idfamille = $request->request->get('famille');
        $creePar = 'admin';
        $creele = $request->request->get('creele');
        $creele = new \DateTime($creele);

        $onefamily = $familyService->getByIdFamily($idfamille); 
        //methode manytoone inserez l'autre champ de type entity dans un autre entity relié (ex:entity:family)

        $category->setLibelle($name);
        $category->setCodecategory($code);
        $category->setCreePar($creePar);
        $category->setCreeLe($creele);
        $category->setFamily($onefamily);

        $this->em->persist($category);
        $this->em->flush();  
        
    }


    public function getAllCategory()
    {
        $category = $this->em->getRepository(Category::class)->findAll();
        return $category;
    }

    public function getByIdCategory($id)
    {
        $category = $this->em->getRepository(Category::class)->findOneBy(array('id' => $id));
        return $category;
    }

    public function deleteCategory(CategoryService $categoryservice,$id)
    {
        $category = $categoryservice->getByIdCategory($id);
        
        $this->em->remove($category);
        $this->em->flush(); 
    }


    public function newdateNow(){
        $now = new DateTime();
        $end = new DateTime($now->format('Y-m-t'));

        $dateloading = ((array) $now)['date'];
        $convertDatenow = date("Y-m-d h:i:s",strtotime($dateloading)); //recuperation de 1er avec format
 
        return $convertDatenow;
    }

    public function updateCategory(CategoryService $categoryservice,Request $request,$id,FamilyService $familyService)
    {
        $category = $categoryservice->getByIdCategory($id);

        $name = $request->request->get('libelle');
        $code = $request->request->get('code');
        $idfamily = $request->request->get('famille');
        $onefamily = $familyService->getByIdFamily($idfamily);
        $modifiePar = 'admin_modif';
        $datenow = $categoryservice->newdateNow();
        $datenow = new DateTime($datenow);
   
        $category->setLibelle($name);
        $category->setCodecategory($code);
        $category->setModifieLe($datenow);
        $category->setCreeLe($category->getCreeLe());
        $category->setModifiePar($modifiePar);
        $category->setFamily($onefamily);
 
        $this->em->persist($category);
        $this->em->flush();  
    }
}