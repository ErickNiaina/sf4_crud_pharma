<?php

namespace App\Service;

use App\Entity\Category;
use App\Entity\Laboratory;
use App\Entity\Product;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class ProductService
{
    public function __construct(EntityManagerInterface $em,TokenStorageInterface $tokenStorage) 
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }


    public function addProduct(Request $request,CategoryService $categoryService,LaboService $laboService)
    {
       
        $product = new Product();
        $name = $request->request->get('libelle');
        $idlabo = $request->request->get('laboratoire');
        $idcategory = $request->request->get('categorie');
        $creePar = 'admin';
        $creele = $request->request->get('creele');
        $creele = new \DateTime($creele);

        $oneCategorie = $categoryService->getByIdCategory($idcategory); 
        $oneLaboratory = $laboService->getByIdLabo($idlabo);
        //methode manytoone inserez l'autre champ de type entity dans un autre entity relié (ex:entity:laboratoire ou categorie relié dans l'entity produit)

        $product->setLibelle($name);
        $product->setCreePar($creePar);
        $product->setCreeLe($creele);
        $product->setCategory($oneCategorie);
        $product->setLaboratory($oneLaboratory);

        $this->em->persist($product);
        $this->em->flush();  
        
    }


    public function getAllProduct()
    {
        $product = $this->em->getRepository(Product::class)->findAll();
        return $product;
    }

    public function getByIdProduct($id)
    {
        $product = $this->em->getRepository(Product::class)->findOneBy(array('id' => $id));
        return $product;
    }

    public function deleteProduct(ProductService $productService,$id)
    {
        $product = $productService->getByIdProduct($id);
        
        $this->em->remove($product);
        $this->em->flush(); 
    }


    public function newdateNow(){
        $now = new DateTime();
        $end = new DateTime($now->format('Y-m-t'));

        $dateloading = ((array) $now)['date'];
        $convertDatenow = date("Y-m-d h:i:s",strtotime($dateloading)); //recuperation de 1er avec format
 
        return $convertDatenow;
    }

    public function updateProduct(ProductService $productService,CategoryService $categoryservice,Request $request,$id,LaboService $laboService)
    {
        
        $oneproduct = $productService->getByIdProduct($id);
        $name = $request->request->get('libelle');
        $idlabo = $request->request->get('laboratoire');
        $idcategory = $request->request->get('categorie');

        $onecategory = $categoryservice->getByIdCategory($idcategory);
        $onelabo = $laboService->getByIdLabo($idlabo);
        $modifiePar = 'admin_modif';
        $datenow = $categoryservice->newdateNow();
        $datenow = new DateTime($datenow);
    
        $oneproduct->setLibelle($name);
        $oneproduct->setModifieLe($datenow);
        $oneproduct->setCreeLe($oneproduct->getCreeLe());
        $oneproduct->setModifiePar($modifiePar);
        $oneproduct->setCategory($onecategory);
        $oneproduct->setLaboratory($onelabo);
 
        $this->em->persist($oneproduct);
        $this->em->flush();  
    }
}