<?php

namespace Secuconnect\Client\Authentication;

use Secuconnect\Client\ApiException;

/**
 * Class OAuthClientCredentials
 */
class OAuthClientCredentials extends AuthenticationCredentials
{
    const GRANT_TYPE = 'client_credentials';

    /**
     * Function to get credentials data.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @return OAuthClientCredentials
     * @throws ApiException
     */
    public static function from($clientId, $clientSecret)
    {
        if (empty($clientId) || empty($clientSecret)) {
            throw new ApiException('Incomplete credentials data', 401);
        }

        $credentials = new OAuthClientCredentials();
        $credentials->credentials = [
            'grant_type' => self::GRANT_TYPE,
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
