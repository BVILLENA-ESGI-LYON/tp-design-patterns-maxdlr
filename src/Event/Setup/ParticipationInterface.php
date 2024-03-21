<?php

namespace EsgiIw\TpDesignPattern\Event\Setup;

interface ParticipationInterface
{
    public function subscribe(): self;

    public function unsubscribe(): void;
}