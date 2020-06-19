<?php

namespace App\Controller;

use App\Service\CategoryService;
use App\Service\FamilyService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function list(CategoryService $categoryService)
    {
        $category = $categoryService->getAllCategory();
        return $this->render('category/list.html.twig',[
            'catego' => $category
        ]);
    }

    /**
     * @Route("/view/{id}/category", name="category_view")
     */
    public function view(CategoryService $categoryService,$id)
    {
        $onecategory = $categoryService->getByIdCategory($id);
        return $this->render('category/view.html.twig',[
            'onecategory' => $onecategory
        ]);
    }

    /**
     * @Route("/add/category", name="category_add")
     */
    public function add(FamilyService $familyService,CategoryService $categoryService,Request $request)
    {
        $family = $familyService->getAllFamily();
            $submittedToken = $request->request->get('token');
                if ($this->isCsrfTokenValid('add-category', $submittedToken)) {
                    $categoryService->addCategory($request,$familyService);
                    return $this->redirectToRoute('category');
                }
        return $this->render('category/add.html.twig',[
            'famly' => $family
        ]);
    }

    /**
     * @Route("/edit/{id}/category", name="category_edit")
     */
    public function edit(FamilyService $familyService,CategoryService $categoryService,Request $request,$id)
    {
        $family = $familyService->getAllFamily();
        $onecategory = $categoryService->getByIdCategory($id);
            $submittedToken = $request->request->get('token');
                if ($this->isCsrfTokenValid('edit-category', $submittedToken)) {
                    $categoryService->updateCategory($categoryService,$request,$id,$familyService);
                    return $this->redirectToRoute('category');
                }
        return $this->render('category/edit.html.twig',[
            'famly' => $family,
            'onecategory' => $onecategory
        ]);
    }

    /**
     * @Route("/delete/{id}/category", name="category_delete")
     */
    public function delete(CategoryService $categoryService,$id)
    {
        $categoryService->deleteCategory($categoryService,$id);
        return $this->redirectToRoute('category');
    }
}
