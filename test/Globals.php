<?php

namespace Secuconnect\Client;

/**
 * Class Globals
 */
class Globals
{
    public const OAuthClientCredentials = [
        'clientId' => '...',
        'clientSecret' => '...'
    ];

    public const OAuthApplicationUserCredentials = [
        'clientId' => '...',
        'clientSecret' => '...',
        'username' => '...',
        'password' => '...',
        'device' => '...',
        'deviceName' => '...'
    ];

    public const OAuthDeviceCredentials = [
        'clientId' => '...',
        'clientSecret' => '...',
        'uuid' => '...'
    ];

    public const OAuthRefreshCredentials = [
        'clientId' => '...',
        'clientSecret' => '...',
        'refreshToken' => '...'
    ];
}
