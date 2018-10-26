<?php

namespace Secuconnect\Client\Cache;

use DateTime;

/**
 * Class CacheItemTest
 */
class CacheItemTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var CacheItem
     */
    private static $cacheItem;

    public static function setUpBeforeClass()
    {
        self::$cacheItem = new CacheItem('simpleKey');
        self::$cacheItem->set('simpleValue');
    }

    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public static function tearDownAfterClass()
    {
        self::$cacheItem = null;
    }

    public function testGetKey()
    {
        $this->assertEquals('simpleKey', self::$cacheItem->getKey());
    }

    public function testExpiresAtTomorrow()
    {
        $now = new DateTime();
        $tomorrow = $now->modify('+1 day');
        self::$cacheItem->expiresAt($tomorrow);

        $this->assertTrue(self::$cacheItem->isHit());
    }

    public function testGetValue()
    {
        $this->assertEquals('simpleValue', self::$cacheItem->get());
    }

    public function testExpiresAtNullAfterSet()
    {
        self::$cacheItem->expiresAt(null);

        $this->assertFalse(self::$cacheItem->isHit());
    }

    public function testExpiresAtYesterday()
    {
        $now = new DateTime();
        $yesterday = $now->modify('-1 day');
        self::$cacheItem->expiresAt($yesterday);

        $this->assertFalse(self::$cacheItem->isHit());
    }

    public function testExpiresAtNull()
    {
        self::$cacheItem->expiresAt(null);

        $this->assertFalse(self::$cacheItem->isHit());
    }
}
