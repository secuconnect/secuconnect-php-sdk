<?php

namespace Secuconnect\Client\Authentication;

use Exception;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;
use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Configuration;

/**
 * Class Authenticator
 */
class Authenticator
{
    /**
     * Some buffer for the expiration time
     * @var string
     */
    const EXPECTED_LENGTH_OF_REQUEST = 10;
    const REFRESH_TOKEN_EXPIRE_TIME = 15768000;
    const REFRESH_TOKEN = 'refreshToken_';
    const ACCESS_TOKEN = 'accessToken_';

    /**
     * @var CacheItemPoolInterface
     */
    private static $cache;

    /**
     * @var ApiClient
     */
    private static $apiClient;

    /**
     * @var AuthenticationCredentials
     */
    private static $credentials;

    /**
     * Authenticator constructor.
     * @throws Exception
     */
    private function __construct()
    {
        throw new Exception(__METHOD__ . ' not implemented, use the static methods!');
    }

    /**
     * @param CacheItemPoolInterface $cache
     */
    public static function setCache(CacheItemPoolInterface $cache)
    {
        self::$cache = $cache;
    }

    /**
     * @param ApiClient $apiClient
     */
    public static function setApiClient(ApiClient $apiClient)
    {
        self::$apiClient = $apiClient;
    }

    /**
     * Function to authenticate by "device" grant type.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $uuid
     * @return string
     * @throws ApiException
     */
    public static function authenticateByDevice($clientId, $clientSecret, $uuid)
    {
        return self::startAuthenticationProcess(OAuthDeviceCredentials::fromUuid(
            $clientId,
            $clientSecret,
            $uuid
        ));
    }

    /**
     * Function to authenticate by "appuser" grant type.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $username
     * @param string $password
     * @param string $device
     * @param string $deviceName
     * @return string
     * @throws ApiException
     */
    public static function authenticateByApplicationUser($clientId, $clientSecret, $username, $password, $device, $deviceName)
    {
        return self::startAuthenticationProcess(OAuthApplicationUserCredentials::from(
            $clientId,
            $clientSecret,
            $username,
            $password,
            $device,
            $deviceName
        ));
    }

    /**
     * Function to authenticate by "client" grant type.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @return string
     * @throws ApiException
     */
    public static function authenticateByClientCredentials($clientId, $clientSecret)
    {
        return self::startAuthenticationProcess(OAuthClientCredentials::from(
            $clientId,
            $clientSecret
        ));
    }

    /**
     * Function to authenticate by "refresh token" grant type.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $refreshToken
     * @return string
     * @throws ApiException
     */
    public static function authenticateByRefreshToken($clientId, $clientSecret, $refreshToken)
    {
        return self::startAuthenticationProcess(OAuthRefreshCredentials::from(
            $clientId,
            $clientSecret,
            $refreshToken
        ));
    }

    /**
     * Function to run the authenticate process a second time
     *
     * @return string|null
     */
    public static function reauthenticate() {
        if (self::$credentials) {
            try {
                $key = self::ACCESS_TOKEN . self::$credentials->getUniqueKey();
                if (self::$cache->getItem($key)) {
                    self::$cache->deleteItem($key);
                }
                
                return self::startAuthenticationProcess(self::$credentials);
            } catch (InvalidArgumentException $e) {
                // ignore
            } catch (ApiException $e) {
                // ignore
            }
        }

        return null;
    }

    /**
     * Starts the authentication process and returns the access token if it was successful.
     *
     * @param AuthenticationCredentials $authenticationCredentials
     * @return string
     * @throws ApiException
     */
    protected static function startAuthenticationProcess(AuthenticationCredentials $authenticationCredentials)
    {
        self::init($authenticationCredentials);
        $authId = $authenticationCredentials->getUniqueKey();

        $accessToken = self::tryToGetAccessTokenFromCache($authId);

        if (!$accessToken) {
            $accessToken = self::tryToGetAccessTokenViaCachedRefreshToken($authenticationCredentials, $authId);
        }

        if (!$accessToken) {
            $accessToken = self::tryToGetAccessTokenViaAPI($authenticationCredentials, $authId);
        }

        if (!$accessToken) {
            $errorBody = (object)['error' => 'invalid_token', 'error_description' => 'The access token is invalid'];
            throw new ApiException('Access token value error', 400, [], $errorBody);
        }

        Configuration::getDefaultConfiguration()->setAccessToken($accessToken);
        return $accessToken;
    }

    /**
     * Init static values (with default values if needed)
     *
     * @param AuthenticationCredentials $authenticationCredentials
     */
    private static function init(AuthenticationCredentials $authenticationCredentials)
    {
        self::$credentials = $authenticationCredentials;

        if (!self::$cache) {
            self::setCache(Configuration::getDefaultConfiguration()->getCache());
        }

        if (!self::$apiClient) {
            $config = clone Configuration::getDefaultConfiguration();
            $config->setHost(Configuration::getDefaultConfiguration()->getAuthHost());

            self::setApiClient(new ApiClient($config));
        }
    }

    /**
     * Check if the access token is stored into cache
     *
     * @param string $authId
     * @return mixed|null
     */
    private static function tryToGetAccessTokenFromCache($authId)
    {
        $cacheItem = self::getCacheItem(
            self::ACCESS_TOKEN . $authId
        );

        if (!$cacheItem->isHit()) {
            return null;
        }

        return (string)$cacheItem->get();
    }

    /**
     * Check if a refresh token is stored into cache. If so then get a new access token via API
     *
     * @param AuthenticationCredentials $authenticationCredentials
     * @param string $authId
     * @return string|null
     */
    private static function tryToGetAccessTokenViaCachedRefreshToken(AuthenticationCredentials $authenticationCredentials, $authId)
    {
        // Avoid loops
        if ($authenticationCredentials instanceof OAuthRefreshCredentials) {
            return null;
        }

        try {
            $cacheItem = self::getCacheItem(
                self::REFRESH_TOKEN . $authId
            );

            if (!$cacheItem->isHit()) {
                return null;
            }

            $refreshToken = (string)$cacheItem->get();
            $credentials = $authenticationCredentials->getCredentials();

            return (string)self::tryToGetAccessTokenViaAPI(
                OAuthRefreshCredentials::from($credentials['client_id'], $credentials['client_secret'], $refreshToken),
                $authId
            );
        } catch (ApiException $e) {
            return null;
        }
    }

    /**
     * Function to get access token from API.
     *
     * @param AuthenticationCredentials $authenticationCredentials
     * @param string $authId
     * @return string|null
     * @throws ApiException
     */
    private static function tryToGetAccessTokenViaAPI(AuthenticationCredentials $authenticationCredentials, $authId)
    {
        // Get new token via API
        $newToken = self::getTokenFromApi($authenticationCredentials);
        $credentials = $authenticationCredentials->getCredentials();

        if ($authenticationCredentials instanceof OAuthDeviceCredentials && !empty($newToken->user_code)) {
            $newToken = self::authenticateFirstTime(
                $credentials['client_id'],
                $credentials['client_secret'],
                $newToken
            );
        }

        if (empty($newToken->access_token)) {
            return null;
        }

        self::storeNewTokenInCache($newToken, $authId);

        // Store new access token in config
        $accessToken = (string)$newToken->access_token;
        Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

        return $accessToken;
    }

    /**
     * Function to get access token from API.
     *
     * @param AuthenticationCredentials $authenticationCredentials
     * @return object
     * @throws ApiException
     */
    private static function getTokenFromApi(AuthenticationCredentials $authenticationCredentials)
    {
        $credentials = $authenticationCredentials->getCredentials();

        $response = self::$apiClient->callApi(
            'oauth/token',
            ApiClient::$POST,
            [],
            $credentials,
            ['Content-Type' => 'application/x-www-form-urlencoded']
        );

        if (empty($response[0])) {
            return null;
        }

        return (object)$response[0];
    }

    /**
     * Store new access token (and refresh token) in cache
     *
     * @param object $newToken
     * @param string $authId
     */
    private static function storeNewTokenInCache($newToken, $authId)
    {
        if (!empty($newToken->access_token)) {
            $cacheItem = self::getCacheItem(
                self::ACCESS_TOKEN . $authId
            );

            self::saveTokenToCache($cacheItem, (string)$newToken->access_token, (int)$newToken->expires_in);
        }

        if (!empty($newToken->refresh_token)) {
            $cacheItem = self::getCacheItem(
                self::REFRESH_TOKEN . $authId
            );

            self::saveTokenToCache($cacheItem, (string)$newToken->refresh_token, self::REFRESH_TOKEN_EXPIRE_TIME);
        }
    }

    /**
     * Function to authenticate the first time for a device.
     * It is when doesn't exist token for a device in a cache.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param object $token
     * @return object|null
     * @throws ApiException
     */
    private static function authenticateFirstTime($clientId, $clientSecret, $token)
    {
        Configuration::getDefaultConfiguration()
            ->getPrinter()
            ->printUserCode($token);

        $expiresIn = (int)$token->expires_in;
        $interval = (int)$token->interval;

        $codeCredentials = OAuthDeviceCredentials::from($clientId, $clientSecret, $token->device_code);

        while ($expiresIn > 0) {
            try {
                sleep($interval);
                return self::getTokenFromApi($codeCredentials);
            } catch (ApiException $e) {
                $response = $e->getResponseBody();

                if (empty($response->error) || $response->error !== 'authorization_pending') {
                    return null;
                }

                // authorization_pending -> try again
                $expiresIn -= $interval;
            }
        }

        return null;
    }

    /**
     * Function to save token to cache memory.
     *
     * @param CacheItemInterface $cacheItem
     * @param string $token
     * @param int $expiresIn
     */
    private static function saveTokenToCache(CacheItemInterface $cacheItem, $token, $expiresIn)
    {
        $cacheItem->set($token);
        $expiresIn -= self::EXPECTED_LENGTH_OF_REQUEST;
        $cacheItem->expiresAfter($expiresIn);
        self::$cache->save($cacheItem);
    }

    /**
     * Get a cache item
     *
     * @param string $key
     * @return CacheItemInterface|null
     */
    private static function getCacheItem($key)
    {
        try {
            return self::$cache->getItem($key);
        } catch (InvalidArgumentException $e) {
            return null;
        }
    }
}
