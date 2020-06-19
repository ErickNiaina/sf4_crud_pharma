<?php

namespace App\Controller;

use App\Service\LaboService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LaboratoryController extends AbstractController
{
    /**
     * @Route("/laboratory", name="laboratory")
     */
    public function list(LaboService $laboService)
    {
        $labo = $laboService->getAllLabo();
        return $this->render('laboratory/list.html.twig',[
            'labo' => $labo
        ]);
    }

    /**
     * @Route("/add/laboratory", name="add_laboratory")
     */
    public function add(LaboService $labo,Request $request)
    {
        $submittedToken = $request->request->get('token');
            if ($this->isCsrfTokenValid('add-labo', $submittedToken)) {
                $labo->addLabo($request);
                return $this->redirectToRoute('laboratory');
            }
        
        return $this->render('laboratory/add.html.twig');
    }

    /**
     * @Route("/view/{id}/laboratory", name="view_laboratory")
     */
    public function view($id,LaboService $laboService)
    {
        $onelabo = $laboService->getByIdLabo($id);
        
        return $this->render('laboratory/view.html.twig',[
            'onelabo' => $onelabo
        ]);
    }

    /**
     * @Route("/edit/{id}/laboratory", name="edit_laboratory")
     */
    public function edit(LaboService $laboService,$id,Request $request)
    {
        $onelabo = $laboService->getByIdLabo($id);

        $submittedToken = $request->request->get('token');
        if ($this->isCsrfTokenValid('edit-labo', $submittedToken)) {
            
            $laboService->updateLabo($laboService,$request,$id);

            return $this->redirectToRoute('laboratory');
        }
       
        return $this->render('laboratory/edit.html.twig',[
            'onelabo' => $onelabo
        ]);
    }

    /**
     * @Route("/delete/{id}/laboratory", name="delete_laboratory")
     */
    public function delete($id,LaboService $laboService)
    {
        $laboService->deleteLabo($laboService,$id);
        return $this->redirectToRoute('laboratory');
    }
}
