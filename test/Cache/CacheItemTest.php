<?php

namespace Secuconnect\Client\Cache;

use DateTime;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class CacheItemTest
 */
class CacheItemTest extends TestCase
{
    /**
     * @var CacheItem
     */
    private static $cacheItem;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$cacheItem = new CacheItem('simpleKey');
        self::$cacheItem->set('simpleValue');
    }

    public static function tearDownAfterClass(): void
    {
        self::$cacheItem = null;
        parent::tearDownAfterClass();
    }

    public function testGetKey()
    {
        $this->assertEquals('simpleKey', self::$cacheItem->getKey());
    }

    /**
     * @throws Exception
     */
    public function testExpiresAtTomorrow()
    {
        $now = new DateTime();
        $tomorrow = $now->modify('+1 day');
        self::$cacheItem->expiresAt($tomorrow);

        $this->assertTrue(self::$cacheItem->isHit());
    }

    /**
     * @throws Exception
     */
    public function testGetValue()
    {
        $this->assertEquals('simpleValue', self::$cacheItem->get());
    }

    /**
     * @throws Exception
     */
    public function testExpiresAtNullAfterSet()
    {
        self::$cacheItem->expiresAt(null);

        $this->assertFalse(self::$cacheItem->isHit());
    }

    /**
     * @throws Exception
     */
    public function testExpiresAtYesterday()
    {
        $now = new DateTime();
        $yesterday = $now->modify('-1 day');
        self::$cacheItem->expiresAt($yesterday);

        $this->assertFalse(self::$cacheItem->isHit());
    }

    /**
     * @throws Exception
     */
    public function testExpiresAtNull()
    {
        self::$cacheItem->expiresAt(null);

        $this->assertFalse(self::$cacheItem->isHit());
    }
}
