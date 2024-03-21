<?php

namespace EsgiIw\TpDesignPattern\Event\Setup;

use EsgiIw\TpDesignPattern\ValueObject\Url;

interface VirtualEventInterface
{
    public function setEventUrl(Url $url): self;

    public function getEventUrl(): Url;
}