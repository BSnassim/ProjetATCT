<?php

namespace App\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConventionCrudController extends AbstractController
{
    #[Route('/back/end/convention/crud', name: 'back_end_convention_crud')]
    public function index(): Response
    {
        return $this->render('back_end/convention_crud/index.html.twig', [
            'controller_name' => 'ConventionCrudController',
        ]);
    }
}
