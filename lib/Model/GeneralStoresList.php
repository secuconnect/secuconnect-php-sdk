<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * GeneralStoresList
 *
 * @category Class
 * @description GeneralStoresList
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralStoresList implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GeneralStoresList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
        'data' => '\Secuconnect\Client\Model\GeneralStoresProductModel[]',
        'scroll_id' => 'string',
        'result' => 'bool',
        'meta' => 'object',
        'type' => 'string',
        'sum' => 'bool',
        'lookup' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'count' => null,
        'data' => null,
        'scroll_id' => null,
        'result' => null,
        'meta' => null,
        'type' => null,
        'sum' => null,
        'lookup' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'count' => 'count',
        'data' => 'data',
        'scroll_id' => 'scroll_id',
        'result' => 'result',
        'meta' => 'meta',
        'type' => 'type',
        'sum' => 'sum',
        'lookup' => 'lookup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'data' => 'setData',
        'scroll_id' => 'setScrollId',
        'result' => 'setResult',
        'meta' => 'setMeta',
        'type' => 'setType',
        'sum' => 'setSum',
        'lookup' => 'setLookup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'data' => 'getData',
        'scroll_id' => 'getScrollId',
        'result' => 'getResult',
        'meta' => 'getMeta',
        'type' => 'getType',
        'sum' => 'getSum',
        'lookup' => 'getLookup'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['scroll_id'] = isset($data['scroll_id']) ? $data['scroll_id'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sum'] = isset($data['sum']) ? $data['sum'] : null;
        $this->container['lookup'] = isset($data['lookup']) ? $data['lookup'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count Number of existing general stores
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets data
     * @return \Secuconnect\Client\Model\GeneralStoresProductModel[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param \Secuconnect\Client\Model\GeneralStoresProductModel[] $data List of GeneralStores
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets scroll_id
     * @return string
     */
    public function getScrollId()
    {
        return $this->container['scroll_id'];
    }

    /**
     * Sets scroll_id
     * @param string $scroll_id Identifier of a previous search context
     * @return $this
     */
    public function setScrollId($scroll_id)
    {
        $this->container['scroll_id'] = $scroll_id;

        return $this;
    }

    /**
     * Gets result
     * @return bool
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     * @param bool $result In case the product model function returns only scalar value (f.e. for the query validation)
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets meta
     * @return object
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     * @param object $meta Meta definition of the product model
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Aggregation type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sum
     * @return bool
     */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum
     * @param bool $sum Aggregation result is summarized?
     * @return $this
     */
    public function setSum($sum)
    {
        $this->container['sum'] = $sum;

        return $this;
    }

    /**
     * Gets lookup
     * @return string[]
     */
    public function getLookup()
    {
        return $this->container['lookup'];
    }

    /**
     * Sets lookup
     * @param string[] $lookup Aggregation lookup table
     * @return $this
     */
    public function setLookup($lookup)
    {
        $this->container['lookup'] = $lookup;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Secuconnect\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Secuconnect\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

