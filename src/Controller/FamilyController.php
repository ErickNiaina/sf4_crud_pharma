<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FamilyService;

class FamilyController extends AbstractController
{
    /**
     * @Route("/family", name="family")
     */
    public function list(FamilyService $familyservice)
    {
        $family = $familyservice->getAllFamily();
        return $this->render('family/list.html.twig',[
            'family' => $family
        ]);
    }

    /**
     * @Route("/view/{id}/family", name="family_view")
     */
    public function view(FamilyService $familyservice,$id)
    {
        $onefamily = $familyservice->getByIdFamily($id);
        return $this->render('family/view.html.twig',[
            'onefamily' => $onefamily
        ]);
    }

    /**
     * @Route("/add/family", name="family_add")
     */
    public function add(FamilyService $familyservice,Request $request)
    {
        $submittedToken = $request->request->get('token');
            if ($this->isCsrfTokenValid('add-family', $submittedToken)) {
                $familyservice->addFamily($request);
                return $this->redirectToRoute('family');
            }
        return $this->render('family/add.html.twig');
    }

    /**
     * @Route("/edit/{id}/family", name="family_edit")
     */
    public function edit(FamilyService $familyservice,Request $request,$id)
    {
        $onefamily = $familyservice->getByIdFamily($id);

        $submittedToken = $request->request->get('token');
        if ($this->isCsrfTokenValid('edit-family', $submittedToken)) {
            
            $familyservice->updateFamily($familyservice,$request,$id);

            return $this->redirectToRoute('family');
        }
       
        return $this->render('family/edit.html.twig',[
            'onefamily' => $onefamily
        ]);
    }

    /**
     * @Route("/delete/{id}/family", name="family_delete")
     */
    public function delete(FamilyService $familyservice,$id)
    {
        $familyservice->deleteFamily($familyservice,$id);
        return $this->redirectToRoute('family');
        
    }




}
