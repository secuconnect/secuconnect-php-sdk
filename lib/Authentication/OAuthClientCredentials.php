<?php

namespace Secuconnect\Client\Authentication;


class OAuthClientCredentials extends AuthenticationCredentials
{
    /**
     * @param $clientId
     * @param $clientSecret
     * @return static
     */
    public static function from($clientId, $clientSecret)
    {
        $credentials = new static();

        $credentials->credentials = [
            'grant_type' => 'client_credentials',
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
        ];

        return $credentials;
    }

    /**
     * @return string
     */
    public function getUniqueKey()
    {
        $textualKey = $this->credentials['grant_type']
            . $this->credentials['client_id'];
        return \md5($textualKey);
    }
}