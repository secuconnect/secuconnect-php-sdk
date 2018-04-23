<?php

namespace Secuconnect\Client\Authentication;


class OAuthDeviceCredentials extends AuthenticationCredentials
{
    /**
     * OAuthDeviceCredentials constructor.
     * @param $clientId
     * @param $clientSecret
     * @param $deviceUuid
     * @return static
     */
    public static function from($clientId, $clientSecret, $deviceUuid)
    {
        $credentials = new static();
        $credentials->credentials = [
            'grant_type' => 'device',
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'uuid' => $deviceUuid,
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
            . $this->credentials['uuid'];
        return \md5($textualKey);
    }
}