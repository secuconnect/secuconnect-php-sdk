<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * BillingCyclesItem
 *
 * @category Class
 * @description BillingCyclesItem
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingCyclesItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BillingCyclesItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sequence' => 'int',
        'interval' => '\Secuconnect\Client\Model\PaymentPlanInterval',
        'tenure_type' => 'string',
        'total_cycles' => 'int',
        'price' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sequence' => null,
        'interval' => null,
        'tenure_type' => null,
        'total_cycles' => null,
        'price' => null
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
        'sequence' => 'sequence',
        'interval' => 'interval',
        'tenure_type' => 'tenure_type',
        'total_cycles' => 'total_cycles',
        'price' => 'price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'sequence' => 'setSequence',
        'interval' => 'setInterval',
        'tenure_type' => 'setTenureType',
        'total_cycles' => 'setTotalCycles',
        'price' => 'setPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'sequence' => 'getSequence',
        'interval' => 'getInterval',
        'tenure_type' => 'getTenureType',
        'total_cycles' => 'getTotalCycles',
        'price' => 'getPrice'
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
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['tenure_type'] = isset($data['tenure_type']) ? $data['tenure_type'] : null;
        $this->container['total_cycles'] = isset($data['total_cycles']) ? $data['total_cycles'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
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
     * Gets sequence
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     * @param int $sequence sequence
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets interval
     * @return \Secuconnect\Client\Model\PaymentPlanInterval
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param \Secuconnect\Client\Model\PaymentPlanInterval $interval interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets tenure_type
     * @return string
     */
    public function getTenureType()
    {
        return $this->container['tenure_type'];
    }

    /**
     * Sets tenure_type
     * @param string $tenure_type Tenure type
     * @return $this
     */
    public function setTenureType($tenure_type)
    {
        $this->container['tenure_type'] = $tenure_type;

        return $this;
    }

    /**
     * Gets total_cycles
     * @return int
     */
    public function getTotalCycles()
    {
        return $this->container['total_cycles'];
    }

    /**
     * Sets total_cycles
     * @param int $total_cycles Total cycles
     * @return $this
     */
    public function setTotalCycles($total_cycles)
    {
        $this->container['total_cycles'] = $total_cycles;

        return $this;
    }

    /**
     * Gets price
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param int $price Price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param integer $offset Offset
     * @return mixed
     */
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

