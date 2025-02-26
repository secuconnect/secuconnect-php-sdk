<?php

namespace Secuconnect\Client\Authentication;

use Secuconnect\Client\ApiException;

/**
 * Class OAuthApplicationUserCredentials
 */
class OAuthApplicationUserCredentials extends AuthenticationCredentials
{
    const GRANT_TYPE = 'appuser';

    /**
     * Function to get credentials data.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $username
     * @param string $password
     * @param string $device
     * @param string $deviceName
     * @return OAuthApplicationUserCredentials $credentials
     * @throws ApiException
     */
    public static function from($clientId, $clientSecret, $username, $password, $device, $deviceName)
    {
        if (empty($clientId) || empty($clientSecret) || empty($username) || empty($password) || empty($device) || empty($deviceName)) {
            throw new ApiException('Incomplete credentials data', 401);
        }

        $credentials = new OAuthApplicationUserCredentials();
        $credentials->credentials = [
            'grant_type' => self::GRANT_TYPE,
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'username' => $username,
            'password' => $password,
            'device' => $device,
            'deviceinfo' => ['name' => $deviceName],
        ];

        return $credentials;
    }

    /**
     * @inheritdoc
     */
    public function getUniqueKey()
    {
        $textualKey = $this->credentials['grant_type']
            . $this->credentials['client_id']
            . $this->credentials['username']
            . $this->credentials['device']
            . $this->credentials['deviceinfo']['name'];
        return \md5($textualKey);
    }
}
