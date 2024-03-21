<?php

namespace EsgiIw\TpDesignPattern\Event\Setup;

use EsgiIw\TpDesignPattern\ValueObject\Url;
use Override;

abstract class AbstractVirtualEvent extends AbstractEvent implements VirtualEventInterface
{
    protected Url $url;

    #[Override] public function setEventUrl(Url $url): VirtualEventInterface
    {
        $this->url = $url;
        return $this;
    }

    #[Override] public function getEventUrl(): Url
    {
        return $this->url;
    }
}