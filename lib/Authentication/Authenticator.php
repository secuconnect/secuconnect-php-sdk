<?php

namespace Secuconnect\Client\Authentication;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Configuration;

/**
 * Class Authenticator
 */
class Authenticator
{
    /**
     * @var string
     */
    const EXPECTED_LENGTH_OF_REQUEST = 30;

    /**
     * @var AuthenticationCredentials
     */
    private $credentials;

    /**
     * @var string
     */
    private $authHost;

    /**
     * @var mixed
     */
    private $cache;

    /**
     * Authenticator constructor.
     * @param AuthenticationCredentials $credentials
     */
    public function __construct(AuthenticationCredentials $credentials)
    {
        $this->credentials = $credentials;
        $this->cache = Configuration::getDefaultConfiguration()->getCache();
        $this->authHost = Configuration::getDefaultConfiguration()->getAuthHost();
    }

    /**
     * Function to get token.
     *
     * @return mixed|null
     */
    public function getToken()
    {
        $cachedToken = $this->extractTokenFromCache();

        if($this->foundToken($cachedToken)) {
            $token = $cachedToken->get();
        } else {
            $api = $this->getAuthenticationApiClient();
            $token = null;

            try {
                if (isset($this->credentials->getCredentials()['code'])) {
                    $credentials = $this->credentials->getCredentials();
                    $expiresIn = $credentials['codeToken']->expires_in;
                    $interval = $credentials['codeToken']->interval;
                    unset($credentials['codeToken']);
                    $this->credentials->setCredentials($credentials);
                }

                $token = $this->getTokenFromApi($api);
            } catch (ApiException $e) {
                $response = $e->getResponseBody();

                if (isset($response->error) && $response->error === 'authorization_pending') {
                    $token = $this->tryObtainTokenForDevice($api, $expiresIn, $interval);
                }
            }

            if (isset($token->device_code) && isset($token->user_code)) {
                return $token;
            } elseif (isset($token->access_token)) {
                $this->saveTokenToCache($cachedToken, $token);
            }
        }

        return isset($token->access_token) ? $token->access_token : null;
    }

    /**
     * Function to try to obtain a token for a device.
     *
     * @param ApiClient $api
     * @param int $expiresIn
     * @param int $interval
     * @return mixed|null
     */
    private function tryObtainTokenForDevice($api, $expiresIn, $interval)
    {
        $token = null;

        while ($token === null && $expiresIn > 0) {
            try {
                sleep($interval);
                $token = $this->getTokenFromApi($api);
            } catch (ApiException $e) {
                $expiresIn = $expiresIn - $interval;
            }
        }

        return $token;
    }

    /**
     * Function to extract token from cache memory.
     *
     * @return mixed
     */
    private function extractTokenFromCache()
    {
        $cachedToken = $this->cache->getItem($this->credentials->getUniqueKey());
        return $cachedToken;
    }

    /**
     * Function to use when the token was found.
     *
     * @param CacheItemInterface $cachedToken
     * @return mixed
     */
    private function foundToken(CacheItemInterface $cachedToken)
    {
        return $cachedToken->isHit();
    }

    /**
     * Function to save token to cache memory.
     *
     * @param CacheItemInterface $cachedToken
     * @param object $token
     */
    private function saveTokenToCache(CacheItemInterface $cachedToken, $token)
    {
        $cachedToken->set($token);
        $expiresIn = ((int) $token->expires_in) - self::EXPECTED_LENGTH_OF_REQUEST;
        $cachedToken->expiresAfter($expiresIn);
        $this->cache->save($cachedToken);
    }

    /**
     * Function to get api client for authentication purpose.
     *
     * @return ApiClient $api
     */
    private function getAuthenticationApiClient()
    {
        $config = new Configuration();
        $config->setHost($this->authHost);

        $api = new ApiClient($config);
        return $api;
    }

    /**
     * Function to get access token from API.
     *
     * @param ApiClient $api
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

    /**
     * Function to authenticate by client grant type.
     *
     * @param string $clientId
     * @param string $clientSecret
     */
    public static function authenticateByClientCredentials($clientId, $clientSecret)
    {
        $auth = new self(
            OAuthClientCredentials::from(
                $clientId,
                $clientSecret
            )
        );
        $accessToken = $auth->getToken();
        Configuration::getDefaultConfiguration()
            ->setAccessToken($accessToken);
    }

    /**
     * Function to authenticate by application user grant type.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $username
     * @param string $password
     * @param string $device
     * @param string $deviceName
     */
    public static function authenticateByApplicationUser($clientId, $clientSecret, $username, $password, $device, $deviceName)
    {
        $auth = new self(
            OAuthApplicationUserCredentials::from(
                $clientId,
                $clientSecret,
                $username,
                $password,
                $device,
                $deviceName
            )
        );
        $accessToken = $auth->getToken();

        Configuration::getDefaultConfiguration()
            ->setAccessToken($accessToken);
    }

    /**
     * Function to authenticate by device grant type.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $uuid
     * @throws ApiException
     */
    public static function authenticateByDevice($clientId, $clientSecret, $uuid)
    {
        if (empty($clientId) || empty($clientSecret) || empty($uuid)) {
            throw new ApiException('Incomplete credentials data', 401);
        } else {
            $codeToken = self::obtainCodeToken($clientId, $clientSecret, $uuid);

            if (!is_null($codeToken)) {
                $deviceAuth = new self(
                    OAuthDeviceCredentials::from(
                        $clientId,
                        $clientSecret,
                        $codeToken
                    )
                );
                $cachedDeviceToken = $deviceAuth->extractTokenFromCache();

                if (isset($cachedDeviceToken->get()->refresh_token)) {
                    $deviceTokenFromCache = $cachedDeviceToken->get();

                    if (!is_null($deviceTokenFromCache)) {
                        $newToken = self::obtainNewTokenUsingRefresh($clientId, $clientSecret, $deviceTokenFromCache);

                        if (!is_null($newToken)) {
                            Configuration::getDefaultConfiguration()
                                ->setAccessToken($newToken);
                        }
                    }
                } else {
                    self::authenticateFirstTime($codeToken, $deviceAuth);
                }
            }
        }
    }

    /**
     * Function to authenticate the first time for a device.
     * It is when doesn't exist token for a device in a cache.
     *
     * @param object $codeToken
     * @param Authenticator $deviceAuth
     * @throws ApiException
     */
    private static function authenticateFirstTime($codeToken, $deviceAuth)
    {
        Configuration::getDefaultConfiguration()
            ->getPrinter()
            ->printUserCode($codeToken);

        if (isset($codeToken->device_code)) {
            $deviceToken = $deviceAuth->getToken();

            if (!is_null($deviceToken)) {
                Configuration::getDefaultConfiguration()
                    ->setAccessToken($deviceToken);
            } else {
                throw new ApiException('Unfortunately, the access token could not be obtained.', 401);
            }
        } else {
            throw new ApiException('Device code not found.', 404);
        }
    }

    /**
     * Function to obtain code token. Code token means token, which contains user_code and device_code.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $uuid
     * @return mixed|null
     */
    private static function obtainCodeToken($clientId, $clientSecret, $uuid)
    {
        $codeAuth = new self(
            OAuthDeviceCredentials::fromUuid(
                $clientId,
                $clientSecret,
                $uuid
            )
        );
        $codeToken = $codeAuth->getToken();

        return !is_null($codeToken) ? $codeToken : null;
    }

    /**
     * Function to obtain a new token, which contains string value allowing to make requests to API using refresh token.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param object $deviceTokenFromCache
     * @return mixed|null
     */
    private static function obtainNewTokenUsingRefresh($clientId, $clientSecret, $deviceTokenFromCache)
    {
        $refreshAuth = new self(
            OAuthRefreshCredentials::from(
                $clientId,
                $clientSecret,
                $deviceTokenFromCache->refresh_token
            )
        );
        $newToken = $refreshAuth->getToken();

        return !is_null($newToken) ? $newToken : null;
    }
}
