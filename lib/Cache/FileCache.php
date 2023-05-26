<?php

namespace Secuconnect\Client\Cache;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

/**
 * Class FileCache
 */
class FileCache implements CacheItemPoolInterface
{
    const DEFAULT_FOLDER = 'tmp';

    /**
     * @var array
     */
    private $cacheItems = [];

    /**
     * @var string
     */
    private $dir;

    /**
     * FileCache constructor.
     * @param string $dir
     */
    public function __construct($dir = null)
    {
        if (is_string($dir) && is_dir($dir)) {
            $this->dir = $dir;
        } else {
            $this->dir = __DIR__ . DIRECTORY_SEPARATOR  . '..' . DIRECTORY_SEPARATOR  . '..' . DIRECTORY_SEPARATOR  . self::DEFAULT_FOLDER;

            if (!file_exists($this->dir)) {
                if (!mkdir($this->dir)) {
                    return null;
                }
            }
        }
    }

    /**
     * @inheritdoc
     */
    public function getItem($key): CacheItemInterface
    {
        if (isset($this->cacheItems[$key])) {
            return clone $this->cacheItems[$key];
        }

        $file = @file_get_contents($this->filenameFor($key));

        if ($file !== false) {
            $cacheItem = unserialize($file);
            if ($cacheItem instanceof CacheItem) {
                return $this->cacheItems[$key] = $cacheItem;
            }
        }

        $this->cacheItems[$key] = new CacheItem($key);

        return $this->cacheItems[$key];
    }

    /**
     * @inheritdoc
     */
    public function getItems(array $keys = []): iterable
    {
        $items = [];

        foreach ($keys as $key) {
            $items[$key] = $this->getItem($key);
        }

        return $items;
    }

    /**
     * @inheritdoc
     */
    public function hasItem($key): bool
    {
        $itemNotExpired = isset($this->cacheItems[$key]) && $this->cacheItems[$key]->isHit();

        return $itemNotExpired || file_exists($this->filenameFor($key));
    }

    /**
     * @inheritdoc
     */
    public function clear(): bool
    {
        $this->cacheItems = [];

        return true;
    }

    /**
     * @inheritdoc
     */
    public function deleteItem($key): bool
    {
        if (isset($this->cacheItems[$key])) {
            unset($this->cacheItems[$key]);
        } else {
            return false;
        }

        @unlink($this->filenameFor($key));

        return true;
    }

    /**
     * @inheritdoc
     */
    public function deleteItems(array $keys): bool
    {
        foreach ($keys as $key) {
            if ($this->deleteItem($key) === false) {
                return false;
            }
        }

        return true;
    }

    /**
     * @inheritdoc
     */
    public function save(CacheItemInterface $item): bool
    {
        if (!$item->isHit()) {
            return false;
        }

        $bytes = file_put_contents($this->filenameFor($item->getKey()), serialize($item));

        return ($bytes !== false);
    }

    /**
     * @inheritdoc
     */
    public function saveDeferred(CacheItemInterface $item): bool
    {
        $this->cacheItems[$item->getKey()] = $item;

        return true;
    }

    /**
     * @inheritdoc
     */
    public function commit(): bool
    {
        foreach ($this->cacheItems as $key => $item) {
            $this->save($item);
            unset($this->cacheItems[$key]);
        }

        return true;
    }

    /**
     * @param string $key
     * @return string
     */
    private function filenameFor($key)
    {
        return rtrim($this->dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $key;
    }
}
