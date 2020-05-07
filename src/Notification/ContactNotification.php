<?php

namespace App\Notification;

use App\Entity\Contact;
use Swift_Mailer;
use Swift_Message;
use Twig\Environment;


class ContactNotification
{

    /** 
     * @var Swift_Mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $renderer;


    /* public function __construct(Swift_Mailer $mailer, Environment $renderer)
    {
        
    } */

    public function notify(Contact $contact)
    {
        /* $message = new Swift_Message('Agence : ' . $contact->getProperty()->getTitle())
            ->setFrom('noreply@agence.fr')
            ->setTo('contact@agence.fr')
            ->setReplyTo($contact->getEmail())
            ->setBody($this->render()) */
    }



    
}
