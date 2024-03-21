<?php

namespace EsgiIw\TpDesignPattern\Event\Setup;

use DateTime;
use EsgiIw\TpDesignPattern\Participation\Participation;
use EsgiIw\TpDesignPattern\User\User;

interface EventInterface
{
    public function setCapacity(int $capacity): self;

    public function getCapacity(): int;

    public function setManager(User $manager): self;

    public function getManager(): User;

    public function setDateTime(DateTime $dateTime): self;

    public function getDateTime(): DateTime;

    public function addParticipation(Participation $participation): self;

    public function removeParticipation(Participation $participation): self;

    /**
     * @return Participation[]
     */
    public function getParticipations(): array;
}