<?php

namespace Secuconnect\Client\Authentication;


abstract class AuthenticationCredentials
{
    protected $credentials;

    /**
     * @return array
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    abstract public function getUniqueKey();
}