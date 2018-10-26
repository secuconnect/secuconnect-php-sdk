<?php

namespace Secuconnect\Client\Cache;

use DateTime;
use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Authentication\OAuthClientCredentials;

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
        $credentials = OAuthClientCredentials::from(
            '09ae83af7c37121b2de929b211bad944',
            '9c5f250b69f6436cb38fd780349bc00810d8d5051d3dcf821e428f65a32724bd'
        );
        $auth = new Authenticator($credentials);

        $accessToken = $auth->getToken();
        $accessToken2 = $auth->getToken();

        $this->assertEquals($accessToken, $accessToken2);
    }
}
