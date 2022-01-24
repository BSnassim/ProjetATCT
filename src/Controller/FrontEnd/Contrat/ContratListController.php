<?php

namespace App\Controller\FrontEnd\Contrat;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContratListController extends AbstractController
{
    #[Route('/front/end/contrat/contrat/list', name: 'front_end_contrat_contrat_list')]
    public function index(): Response
    {
        return $this->render('front_end/contrat/contrat_list/index.html.twig', [
            'controller_name' => 'ContratListController',
        ]);
    }
}
