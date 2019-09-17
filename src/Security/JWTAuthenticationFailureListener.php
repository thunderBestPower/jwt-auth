<?php

namespace App\Security;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;

class JWTAuthenticationFailureListener
{
    public function onAuthenticationFailureResponse(AuthenticationFailureEvent $event): void
    {
        $response = new JWTAuthenticationFailureResponse('Utente e/o Passowrd non validi');

        $event->setResponse($response);
    }
}
