<?php

namespace Secuconnect\Client\Authentication;


class OAuthApplicationUserCredentials extends AuthenticationCredentials
{
    /**
     * OAuthApplicationUserCredentials constructor.
     * @param $clientId
     * @param $username
     * @param $password
     * @param $device
     * @param $deviceName
     * @return static
     */
    public static function from($client_id, $client_credentials, $username, $password, $device, $deviceName)
    {
        $credentials = new static();
        $credentials->credentials = [
            'grant_type' => 'appuser',
            'client_id' => $client_id,
            'client_secret' => $client_credentials,
            'username' => $username,
            'password' => $password,
            'device' => $device,
            'deviceinfo[name]' => $deviceName,
        ];

        return $credentials;
    }

    /**
     * @return string
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