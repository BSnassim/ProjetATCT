<?php

namespace App\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContratCrudController extends AbstractController
{
    #[Route('/back/end/contrat/crud', name: 'back_end_contrat_crud')]
    public function index(): Response
    {
        return $this->render('back_end/contrat_crud/index.html.twig', [
            'controller_name' => 'ContratCrudController',
        ]);
    }
}
