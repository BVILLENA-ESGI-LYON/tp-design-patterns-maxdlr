<?php

namespace EsgiIw\TpDesignPattern\ValueObject;

class Url
{
    private ?string $url = null;

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     * @return Url
     */
    public function setUrl(?string $url): Url
    {
        $this->url = $url;
        return $this;
    }
}