<?php

namespace EsgiIw\TpDesignPattern\Event;

use EsgiIw\TpDesignPattern\Event\Setup as Setup;
use Override;

final class OnlineGamingEvent extends Setup\AbstractVirtualEvent
{
    #[Override] public function createEvent(): Setup\EventManagementInterface
    {
        // TODO: Implement createEvent() method.
    }

    #[Override] public function getEvent(): Setup\EventManagementInterface
    {
        // TODO: Implement getEvent() method.
    }

    #[Override] public function editEvent(): Setup\EventManagementInterface
    {
        // TODO: Implement editEvent() method.
    }

    #[Override] public function deleteEvent(): void
    {
        // TODO: Implement deleteEvent() method.
    }

    #[Override] public function cancelEvent(): void
    {
        // TODO: Implement cancelEvent() method.
    }
}