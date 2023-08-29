<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * Aggregate
 *
 * @category Class
 * @description Aggregation options
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Aggregate implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Aggregate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timestamp_prop' => 'string',
        'interval' => 'string',
        'min' => 'int',
        'max' => 'int',
        'group_by_prop' => 'string',
        'sum_by_prop' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timestamp_prop' => null,
        'interval' => null,
        'min' => null,
        'max' => null,
        'group_by_prop' => null,
        'sum_by_prop' => null
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
        'timestamp_prop' => 'timestamp_prop',
        'interval' => 'interval',
        'min' => 'min',
        'max' => 'max',
        'group_by_prop' => 'group_by_prop',
        'sum_by_prop' => 'sum_by_prop'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'timestamp_prop' => 'setTimestampProp',
        'interval' => 'setInterval',
        'min' => 'setMin',
        'max' => 'setMax',
        'group_by_prop' => 'setGroupByProp',
        'sum_by_prop' => 'setSumByProp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'timestamp_prop' => 'getTimestampProp',
        'interval' => 'getInterval',
        'min' => 'getMin',
        'max' => 'getMax',
        'group_by_prop' => 'getGroupByProp',
        'sum_by_prop' => 'getSumByProp'
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
        $this->container['timestamp_prop'] = isset($data['timestamp_prop']) ? $data['timestamp_prop'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : 'week';
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['group_by_prop'] = isset($data['group_by_prop']) ? $data['group_by_prop'] : null;
        $this->container['sum_by_prop'] = isset($data['sum_by_prop']) ? $data['sum_by_prop'] : null;
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
     * Gets timestamp_prop
     * @return string
     */
    public function getTimestampProp()
    {
        return $this->container['timestamp_prop'];
    }

    /**
     * Sets timestamp_prop
     * @param string $timestamp_prop The name of the field on which to perform the date aggregation.
     * @return $this
     */
    public function setTimestampProp($timestamp_prop)
    {
        $this->container['timestamp_prop'] = $timestamp_prop;

        return $this;
    }

    /**
     * Gets interval
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param string $interval The interval by which documents will be bucketed (calendar interval or fixed).
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets min
     * @return int
     */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
     * Sets min
     * @param int $min Enables extending the bounds of the histogram beyond the data itself.
     * @return $this
     */
    public function setMin($min)
    {
        $this->container['min'] = $min;

        return $this;
    }

    /**
     * Gets max
     * @return int
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     * @param int $max Enables extending the bounds of the histogram beyond the data itself.
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets group_by_prop
     * @return string
     */
    public function getGroupByProp()
    {
        return $this->container['group_by_prop'];
    }

    /**
     * Sets group_by_prop
     * @param string $group_by_prop The name of the field on which to perform the group aggregation.
     * @return $this
     */
    public function setGroupByProp($group_by_prop)
    {
        $this->container['group_by_prop'] = $group_by_prop;

        return $this;
    }

    /**
     * Gets sum_by_prop
     * @return string
     */
    public function getSumByProp()
    {
        return $this->container['sum_by_prop'];
    }

    /**
     * Sets sum_by_prop
     * @param string $sum_by_prop The name of the field on which to perform the sum aggregation.
     * @return $this
     */
    public function setSumByProp($sum_by_prop)
    {
        $this->container['sum_by_prop'] = $sum_by_prop;

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

