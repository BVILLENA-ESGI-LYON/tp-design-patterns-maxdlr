<?php

namespace EsgiIw\TpDesignPattern\Event\Setup;

use EsgiIw\TpDesignPattern\Address\Address;

interface PhysicalEventInterface
{
    public function setLocation(Address $address): self;

    public function getLocation(): Address;
}