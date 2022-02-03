<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;

class MailAll
{
    public $mailer;
    public $repo;

    public function __construct(MailerInterface $mailer, UserRepository $repo)
    {
        $this->mailer = $mailer;
        $this->repo = $repo;
    }
    public function NotifyUsers(string $objet)
    {
        $users = $this->repo->findAll();
        foreach($users as $user){
            $to = $user->getEmail();
            $email = (new Email())
            ->from('atct@app.com')
            ->to($to)
            ->subject('Notification du contrat')
            ->html("Le contrat d'objet : ". $objet . "</br> Expirera dans moins de 90 jours.");

            $this->mailer->send($email);
        }
    }
}