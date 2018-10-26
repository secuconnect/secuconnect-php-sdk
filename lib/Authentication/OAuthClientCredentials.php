<?php

namespace Secuconnect\Client\Authentication;

/**
 * Class OAuthClientCredentials
 */
class OAuthClientCredentials extends AuthenticationCredentials
{
    /**
     * Function to get credentials data.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @return OAuthClientCredentials
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
     * @inheritdoc
     */
    public function getUniqueKey()
    {
        $textualKey = $this->credentials['grant_type']
            . $this->credentials['client_id'];
        return \md5($textualKey);
    }
}
