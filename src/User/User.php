<?php

namespace EsgiIw\TpDesignPattern\User;

class User
{
    public function __construct(
        public ?string $firstname,
        public ?string $lastname,
    )
    {
    }
}