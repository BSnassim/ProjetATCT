<?php

namespace App\Controller\FrontEnd\Fournisseur;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FournisseurListController extends AbstractController
{
    #[Route('/front/end/fournisseur/fournisseur/list', name: 'front_end_fournisseur_fournisseur_list')]
    public function index(): Response
    {
        return $this->render('front_end/fournisseur/fournisseur_list/index.html.twig', [
            'controller_name' => 'FournisseurListController',
        ]);
    }
}
