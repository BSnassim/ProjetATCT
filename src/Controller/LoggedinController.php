<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoggedinController extends AbstractController
{
    #[Route('/loggedin', name: 'loggedin')]
    public function index(): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        return $this->redirect($this->generateUrl('admin'));
    elseif($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
        return $this->redirect($this->generateUrl('contrat_index'));
    throw new \Exception(AccessDeniedException::class);
    }
}
