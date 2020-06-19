<?php

namespace App\Controller;

use App\Service\CategoryService;
use App\Service\LaboService;
use App\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function list(ProductService $productService)
    {
        $product = $productService->getAllProduct();
        return $this->render('product/list.html.twig',[
            'products' => $product
        ]);
    }

    /**
     * @Route("/view/{id}/product", name="view_product")
     */
    public function view(ProductService $productService,$id)
    {
        $oneProduct = $productService->getByIdProduct($id);
        return $this->render('product/view.html.twig',[
            'oneproduct' => $oneProduct
        ]);
    }

    /**
     * @Route("/add/product", name="add_product")
     */
    public function add(LaboService $laboservice,CategoryService $categoryService,Request $request,ProductService $productService)
    {
        $labo = $laboservice->getAllLabo();
        $category = $categoryService->getAllCategory();

        $submittedToken = $request->request->get('token');
                if ($this->isCsrfTokenValid('add-product', $submittedToken)) {
                    $productService->addProduct($request,$categoryService,$laboservice);
                    return $this->redirectToRoute('product');
                }

        return $this->render('product/add.html.twig',[
            'laboratory' => $labo,
            'Category' => $category
        ]);
    }

    /**
     * @Route("/edit/{id}/product", name="edit_product")
     */
    public function edit(Request $request,$id,LaboService $laboservice,CategoryService $categoryService,ProductService $productService)
    {
        $labo = $laboservice->getAllLabo();
        $category = $categoryService->getAllCategory();
        $oneproduct = $productService->getByIdProduct($id);
        

            $submittedToken = $request->request->get('token');
                if ($this->isCsrfTokenValid('edit-product', $submittedToken)) {
                    $productService->updateProduct($productService,$categoryService,$request,$id,$laboservice);
                    return $this->redirectToRoute('product');
                }
        return $this->render('product/edit.html.twig',[
            'laboratory' => $labo,
            'Category' => $category,
            'oneproduct' => $oneproduct
        ]);
    }

    /**
     * @Route("/delete/{id}/product", name="delete_product")
     */
    public function delete(ProductService $productService,$id)
    {
        $productService->deleteProduct($productService,$id);
        return $this->redirectToRoute('product');
    }



}
