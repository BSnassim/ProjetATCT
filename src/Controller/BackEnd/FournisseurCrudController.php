<?php

namespace App\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FournisseurCrudController extends AbstractController
{
    #[Route('/back/end/fournisseur/crud', name: 'back_end_fournisseur_crud')]
    public function index(): Response
    {
        return $this->render('back_end/fournisseur_crud/index.html.twig', [
            'controller_name' => 'FournisseurCrudController',
        ]);
    }
}
