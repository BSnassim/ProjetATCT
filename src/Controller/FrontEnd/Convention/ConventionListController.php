<?php

namespace App\Controller\FrontEnd\Convention;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConventionListController extends AbstractController
{
    #[Route('/front/end/convention/convention/list', name: 'front_end_convention_convention_list')]
    public function index(): Response
    {
        return $this->render('front_end/convention/convention_list/index.html.twig', [
            'controller_name' => 'ConventionListController',
        ]);
    }
}
