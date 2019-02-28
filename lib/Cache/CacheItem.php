<?php

namespace Secuconnect\Client\Cache;

use DateInterval;
use DateTime;
use DateTimeInterface;
use Psr\Cache\CacheItemInterface;

/**
 * Class CacheItem
 */
class CacheItem implements CacheItemInterface
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @var DateTimeInterface
     */
    private $expiresAt;

    /**
     * @var bool
     */
    private $isHit;

    /**
     * CacheItem constructor.
     * @param string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @inheritdoc
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function get()
    {
        if ($this->isHit()) {
            return $this->value;
        }

        return null;
    }

    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function isHit()
    {
        if (!$this->isHit) {
            return false;
        }

        $currentDate = new DateTime();
        $expired = $currentDate < $this->expiresAt;

        return $expired;
    }

    /**
     * @inheritdoc
     */
    public function set($value)
    {
        $this->isHit = true;
        $this->value = $value;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function expiresAt($expiration)
    {
        $this->expiresAt = $expiration;

        return $this;
    }

    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function expiresAfter($time)
    {
        if ($time instanceof DateInterval) {
            $this->expiresAt = (new DateTime())->add($time);
        } elseif (is_numeric($time)) {
            $this->expiresAt = (new DateTime())->add(new DateInterval('PT' . $time . 'S'));
        } else {
            $this->expiresAt = null;
        }

        return $this;
    }
}
