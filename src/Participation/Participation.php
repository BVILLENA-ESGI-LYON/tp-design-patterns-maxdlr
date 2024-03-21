<?php

namespace EsgiIw\TpDesignPattern\Participation;

use EsgiIw\TpDesignPattern\Event\Setup\EventInterface;
use EsgiIw\TpDesignPattern\Event\Setup\ParticipationInterface;
use EsgiIw\TpDesignPattern\User\User;
use Override;

class Participation implements ParticipationInterface
{
    public function __construct(
        public User            $participant,
        public ?EventInterface $event = null,
    )
    {
    }

    #[Override] public function subscribe(): ParticipationInterface
    {
        // TODO: Implement subscribe() method.
    }

    #[Override] public function unsubscribe(): void
    {
        // TODO: Implement unsubscribe() method.
    }
}