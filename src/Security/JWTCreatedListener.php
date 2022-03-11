<?php

namespace BlueWeb\JwtAuth\Security;

use BlueWeb\User\Entity\BlueWebUser;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;

class JWTCreatedListener
{
    public function onJwtCreated(JWTCreatedEvent $event): void
    {
        /** @var BlueWebUser $user */
        $user = $event->getUser();

        $payload = $event->getData();
        $payload['id'] = $user->getId();

        $event->setData($payload);
    }
}
