<?php

namespace Secuconnect\Client\Cache;

use DateTime;
use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Authentication\OAuthClientCredentials;
use Secuconnect\Client\Globals;

/**
 * Class FileCacheTest
 */
class FileCacheTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var FileCache
     */
    private static $fileCache;

    public static function setUpBeforeClass()
    {
        self::$fileCache = new FileCache();
    }

    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public static function tearDownAfterClass()
    {
        self::$fileCache = null;
    }

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

    public function testGetItem()
    {
        $cacheItem = new CacheItem('simpleKey');
        $cacheItem->set('simpleValue');
        $now = new DateTime();
        $tomorrow = $now->modify('+1 day');
        $cacheItem->expiresAt($tomorrow);

        $this->assertEquals($cacheItem, self::$fileCache->getItem('simpleKey'));
    }

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

    public function testSaveTokenToCache()
    {
        $accessToken = Authenticator::authenticateByClientCredentials(...array_values(Globals::OAuthClientCredentials));
        $accessToken2 = Authenticator::authenticateByClientCredentials(...array_values(Globals::OAuthClientCredentials));

        $this->assertEquals($accessToken, $accessToken2);
    }
}
