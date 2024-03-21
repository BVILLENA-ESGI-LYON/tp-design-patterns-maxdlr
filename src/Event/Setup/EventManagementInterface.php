<?php

namespace EsgiIw\TpDesignPattern\Event\Setup;

interface EventManagementInterface
{
    public function createEvent(): self;

    public function getEvent(): self;

    public function editEvent(): self;

    public function deleteEvent(): void;

    public function cancelEvent(): void;
}