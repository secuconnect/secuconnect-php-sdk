<?php

namespace Secuconnect\Client\Authentication;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Configuration;

class Authenticator
{
    private $credentials;
    private $authHost = 'https://connect-testing.secupay-ag.de/';
    /** @var CacheItemPoolInterface $cache */
    private $cache;
    const EXPECTED_LENGTH_OF_REQUEST = 30;

    /**
     * Authenticator constructor.
     * @param AuthenticationCredentials $credentials
     */
    public function __construct(AuthenticationCredentials $credentials)
    {
        $this->credentials = $credentials;
        $this->cache = Configuration::getDefaultConfiguration()->getCache();
    }

    public function getToken()
    {
        $cachedToken = $this->extractTokenFromCache();

        if($this->foundToken($cachedToken)) {
            $token = $cachedToken->get();
        } else {
            $api = $this->getAuthenticationApiClient();
            $token = $this->getTokenFromApi($api);
            $this->saveTokenToCache($cachedToken, $token);
        }

        return $token->access_token;
    }

    /**
     * @return mixed
     */
    private function extractTokenFromCache()
    {
        $cachedToken = $this->cache->getItem($this->credentials->getUniqueKey());
        return $cachedToken;
    }

    /**
     * @param CacheItemInterface $cachedToken
     * @return mixed
     */
    private function foundToken(CacheItemInterface $cachedToken)
    {
        return $cachedToken->isHit();
    }

    /**
     * @param $cachedToken
     * @param $token
     */
    private function saveTokenToCache(CacheItemInterface $cachedToken, $token)
    {
        $cachedToken->set($token);
        $expiresIn = ((int) $token->expires_in) - self::EXPECTED_LENGTH_OF_REQUEST;
        $cachedToken->expiresAfter($expiresIn);
        $this->cache->save($cachedToken);
    }

    /**
     * @return ApiClient
     */
    private function getAuthenticationApiClient()
    {
        $config = new Configuration();
        $config->setHost($this->authHost);

        $api = new ApiClient($config);
        return $api;
    }

    /**
     * @param $api
     * @return mixed
     * @throws ApiException
     */
    private function getTokenFromApi(ApiClient $api)
    {
        try {
            $response = $api->callApi(
                'oauth/token',
                ApiClient::$POST,
                [],
                $this->credentials->getCredentials(),
                ['Content-Type' => 'application/json']//['Content-Type: application/x-www-form-urlencoded']
            );
            $token = $response[0];
        } catch (ApiException $e) {
            throw $e;
        }
        return $token;
    }
}