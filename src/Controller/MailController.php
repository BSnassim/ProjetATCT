<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;

class MailController extends AbstractController
{
    #[Route('/mail', name: 'mail')]
    public function index(MailerInterface $mailer, UserRepository $repo): Response
    {
        $users = $repo->findAll();
        foreach($users as $user){
            $to = $user->getEmail();
            $email = (new Email())
            ->from('atct@app.com')
            ->to($to)
            ->subject('Notification du contrat')
            ->html('Check your contracts. Now.');

            $mailer->send($email);
        }
        return $this->render('mail/index.html.twig', [
            'controller_name' => 'MailController',
        ]);
    }

    /*public function sendEmail(MailerInterface $mailer, UserRepository $repo)
    {
        $users = $repo.findAll();
        foreach($users as $user){
            $to = $user->getEmail();
            $email = (new Email())
            ->from('atct@app.com')
            ->to($to)
            ->subject('Notification du contrat')
            ->html('Check your contracts. Now.');

            $mailer->send($email);
        }
    }
    */
}
