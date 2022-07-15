<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentSubscriptionsProductModelBillingCycles
 *
 * @category Class
 * @description Billing cycles
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentSubscriptionsProductModelBillingCycles implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentSubscriptionsProductModelBillingCycles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cycle_executions' => '\Secuconnect\Client\Model\BillingCyclesItem[]',
        'next_billing_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cycle_executions' => null,
        'next_billing_time' => null
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
        'cycle_executions' => 'cycle_executions',
        'next_billing_time' => 'next_billing_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cycle_executions' => 'setCycleExecutions',
        'next_billing_time' => 'setNextBillingTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cycle_executions' => 'getCycleExecutions',
        'next_billing_time' => 'getNextBillingTime'
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
        $this->container['cycle_executions'] = isset($data['cycle_executions']) ? $data['cycle_executions'] : null;
        $this->container['next_billing_time'] = isset($data['next_billing_time']) ? $data['next_billing_time'] : null;
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
     * Gets cycle_executions
     * @return \Secuconnect\Client\Model\BillingCyclesItem[]
     */
    public function getCycleExecutions()
    {
        return $this->container['cycle_executions'];
    }

    /**
     * Sets cycle_executions
     * @param \Secuconnect\Client\Model\BillingCyclesItem[] $cycle_executions cycle executions
     * @return $this
     */
    public function setCycleExecutions($cycle_executions)
    {
        $this->container['cycle_executions'] = $cycle_executions;

        return $this;
    }

    /**
     * Gets next_billing_time
     * @return string
     */
    public function getNextBillingTime()
    {
        return $this->container['next_billing_time'];
    }

    /**
     * Sets next_billing_time
     * @param string $next_billing_time next billing time
     * @return $this
     */
    public function setNextBillingTime($next_billing_time)
    {
        $this->container['next_billing_time'] = $next_billing_time;

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

