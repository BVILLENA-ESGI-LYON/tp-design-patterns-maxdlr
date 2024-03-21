<?php

namespace EsgiIw\TpDesignPattern\Event\Setup;

use EsgiIw\TpDesignPattern\Address\Address;
use Override;

abstract class AbstractPhysicalEvent extends AbstractEvent implements PhysicalEventInterface
{
    protected Address $address;

    #[Override] public function setLocation(Address $address): PhysicalEventInterface
    {
        $this->address = $address;
        return $this;
    }

    #[Override] public function getLocation(): Address
    {
        return $this->address;
    }


}