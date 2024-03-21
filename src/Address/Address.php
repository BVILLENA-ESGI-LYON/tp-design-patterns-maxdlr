<?php

namespace EsgiIw\TpDesignPattern\Address;

class Address
{
    public function __construct(
        public string  $line1,
        public string  $postCode,
        public string  $city,
        public string  $country,
        public ?string $line2 = null,
    )
    {
    }
}