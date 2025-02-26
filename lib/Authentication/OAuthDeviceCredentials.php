<?php

namespace Secuconnect\Client\Authentication;

use Secuconnect\Client\ApiException;

/**
 * Class OAuthDeviceCredentials
 */
class OAuthDeviceCredentials extends AuthenticationCredentials
{
    const GRANT_TYPE = 'device';

    /**
     * Function to get credentials data. Second step for a device.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $codeToken
     * @return OAuthDeviceCredentials
     * @throws ApiException
     */
    public static function from($clientId, $clientSecret, $codeToken)
    {
        if (empty($clientId) || empty($clientSecret) || empty($codeToken)) {
            throw new ApiException('Incomplete credentials data', 401);
        }

        $credentials = self::createBasicCredentials($clientId, $clientSecret);
        $credentials->credentials['code'] = $codeToken;

        return $credentials;
    }

    /**
     * Function to get credentials data. First step for a device.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $uuid
     * @return OAuthDeviceCredentials
     * @throws ApiException
     */
    public static function fromUuid($clientId, $clientSecret, $uuid)
    {
        if (empty($clientId) || empty($clientSecret) || empty($uuid)) {
            throw new ApiException('Incomplete credentials data', 401);
        }

        $credentials = self::createBasicCredentials($clientId, $clientSecret);
        $credentials->credentials['uuid'] = $uuid;

        return $credentials;
    }

    /**
     * @inheritdoc
     */
    public function getUniqueKey()
    {
        $textualKey = $this->credentials['grant_type']
            . $this->credentials['client_id'];

        if (isset($this->credentials['uuid'])) {
            $textualKey .= $this->credentials['uuid'];
        } elseif (isset($this->credentials['code'])) {
            $textualKey .= $this->credentials['code'];
        }

        return \md5($textualKey);
    }

    /**
     * Function to create basic credentials data.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @return OAuthDeviceCredentials
     */
    private static function createBasicCredentials($clientId, $clientSecret)
    {
        $credentials = new OAuthDeviceCredentials();
        $credentials->credentials = [
            'grant_type' => self::GRANT_TYPE,
            'client_id' => $clientId,
            'client_secret' => $clientSecret
        ];

        return $credentials;
    }
}
