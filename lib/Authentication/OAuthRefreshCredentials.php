<?php

namespace Secuconnect\Client\Authentication;

use Secuconnect\Client\ApiException;

/**
 * Class OAuthRefreshCredentials
 */
class OAuthRefreshCredentials extends AuthenticationCredentials
{
    const GRANT_TYPE = 'refresh_token';

    /**
     * Function to get credentials data.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $refreshToken
     * @return OAuthRefreshCredentials
     * @throws ApiException
     */
    public static function from($clientId, $clientSecret, $refreshToken)
    {
        if (empty($clientId) || empty($clientSecret) || empty($refreshToken)) {
            throw new ApiException('Incomplete credentials data', 401);
        }

        $credentials = new OAuthRefreshCredentials();
        $credentials->credentials = [
            'grant_type' => self::GRANT_TYPE,
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
