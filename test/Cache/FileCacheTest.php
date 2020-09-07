<?php

namespace Secuconnect\Client\Cache;

use DateTime;
use PHPUnit\Framework\TestCase;
use Psr\Cache\InvalidArgumentException;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Globals;

/**
 * Class FileCacheTest
 */
class FileCacheTest extends TestCase
{
    /**
     * @var FileCache
     */
    private static $fileCache;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$fileCache = new FileCache();
    }

    public static function tearDownAfterClass()
    {
        self::$fileCache = null;
        parent::tearDownAfterClass();
    }

    /**
     * @throws InvalidArgumentException
     */
    public function testHasItem()
    {
        $cacheItem = new CacheItem('simpleKey');
        $cacheItem->set('simpleValue');
        $now = new DateTime();
        $tomorrow = $now->modify('+1 day');
        $cacheItem->expiresAt($tomorrow);
        self::$fileCache->saveDeferred($cacheItem);

        $this->assertTrue(self::$fileCache->hasItem('simpleKey'));
    }

    /**
     * @throws InvalidArgumentException
     */
    public function testGetItem()
    {
        $cacheItem = new CacheItem('simpleKey');
        $cacheItem->set('simpleValue');
        $now = new DateTime();
        $tomorrow = $now->modify('+1 day');
        $cacheItem->expiresAt($tomorrow);

        $this->assertEquals($cacheItem, self::$fileCache->getItem('simpleKey'));
    }

    /**
     * @throws InvalidArgumentException
     */
    public function testHasItemExpired()
    {
        $cacheItem = new CacheItem('simpleKey');
        $cacheItem->set('simpleValue');
        $now = new DateTime();
        $yesterday = $now->modify('-1 day');
        $cacheItem->expiresAt($yesterday);
        self::$fileCache->saveDeferred($cacheItem);

        $this->assertFalse(self::$fileCache->hasItem('simpleKey'));
    }

    /**
     * @throws InvalidArgumentException
     */
    public function testGetItems()
    {
        $cacheItem = new CacheItem('simpleKey');
        self::$fileCache->saveDeferred($cacheItem);

        $cacheItem2 = new CacheItem('simpleKey2');
        self::$fileCache->saveDeferred($cacheItem2);

        $cacheItem3 = new CacheItem('simpleKey3');
        self::$fileCache->saveDeferred($cacheItem3);

        $this->assertEquals($cacheItem, self::$fileCache->getItems(['simpleKey', 'simpleKey2', 'simpleKey3'])['simpleKey']);
        $this->assertEquals($cacheItem2, self::$fileCache->getItems(['simpleKey', 'simpleKey2', 'simpleKey3'])['simpleKey2']);
        $this->assertEquals($cacheItem3, self::$fileCache->getItems(['simpleKey', 'simpleKey2', 'simpleKey3'])['simpleKey3']);
    }

    /**
     * @throws ApiException
     */
    public function testSaveTokenToCache()
    {
        $accessToken = Authenticator::authenticateByClientCredentials(...array_values(Globals::OAuthClientCredentials));
        $accessToken2 = Authenticator::authenticateByClientCredentials(...array_values(Globals::OAuthClientCredentials));

        $this->assertEquals($accessToken, $accessToken2);
    }
}
