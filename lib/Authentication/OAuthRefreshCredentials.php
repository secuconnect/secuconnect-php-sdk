<?php

namespace Secuconnect\Client\Authentication;

/**
 * Class OAuthRefreshCredentials
 */
class OAuthRefreshCredentials extends AuthenticationCredentials
{
    /**
     * Function to get credentials data.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $refreshToken
     * @return OAuthRefreshCredentials
     */
    public static function from($clientId, $clientSecret, $refreshToken)
    {
        $credentials = new static();
        $credentials->credentials = [
            'grant_type' => 'refresh_token',
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'refresh_token' => $refreshToken
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
