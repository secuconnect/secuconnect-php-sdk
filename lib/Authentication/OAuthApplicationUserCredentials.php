<?php

namespace Secuconnect\Client\Authentication;

/**
 * Class OAuthApplicationUserCredentials
 */
class OAuthApplicationUserCredentials extends AuthenticationCredentials
{
    /**
     * Function to get credentials data.
     *
     * @param string $clientId
     * @param string $clientCredentials
     * @param string $username
     * @param string $password
     * @param string $device
     * @param string $deviceName
     * @return OAuthApplicationUserCredentials $credentials
     */
    public static function from($clientId, $clientCredentials, $username, $password, $device, $deviceName)
    {
        $credentials = new static();
        $credentials->credentials = [
            'grant_type' => 'appuser',
            'client_id' => $clientId,
            'client_secret' => $clientCredentials,
            'username' => $username,
            'password' => $password,
            'device' => $device,
            'deviceinfo[name]' => $deviceName,
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
            . $this->credentials['deviceinfo[name]'];
        return \md5($textualKey);
    }
}
