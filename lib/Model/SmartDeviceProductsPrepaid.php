<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartDeviceProductsPrepaid
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDeviceProductsPrepaid implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartDeviceProductsPrepaid';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'simulate_force' => 'bool',
        'demo_force' => 'bool',
        'vtc_tid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'simulate_force' => null,
        'demo_force' => null,
        'vtc_tid' => null
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
        'enabled' => 'enabled',
        'simulate_force' => 'simulate_force',
        'demo_force' => 'demo_force',
        'vtc_tid' => 'vtc_tid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'simulate_force' => 'setSimulateForce',
        'demo_force' => 'setDemoForce',
        'vtc_tid' => 'setVtcTid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'simulate_force' => 'getSimulateForce',
        'demo_force' => 'getDemoForce',
        'vtc_tid' => 'getVtcTid'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['simulate_force'] = isset($data['simulate_force']) ? $data['simulate_force'] : null;
        $this->container['demo_force'] = isset($data['demo_force']) ? $data['demo_force'] : null;
        $this->container['vtc_tid'] = isset($data['vtc_tid']) ? $data['vtc_tid'] : null;
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
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled Enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets simulate_force
     * @return bool
     */
    public function getSimulateForce()
    {
        return $this->container['simulate_force'];
    }

    /**
     * Sets simulate_force
     * @param bool $simulate_force Simulate force
     * @return $this
     */
    public function setSimulateForce($simulate_force)
    {
        $this->container['simulate_force'] = $simulate_force;

        return $this;
    }

    /**
     * Gets demo_force
     * @return bool
     */
    public function getDemoForce()
    {
        return $this->container['demo_force'];
    }

    /**
     * Sets demo_force
     * @param bool $demo_force Demo force
     * @return $this
     */
    public function setDemoForce($demo_force)
    {
        $this->container['demo_force'] = $demo_force;

        return $this;
    }

    /**
     * Gets vtc_tid
     * @return string
     */
    public function getVtcTid()
    {
        return $this->container['vtc_tid'];
    }

    /**
     * Sets vtc_tid
     * @param string $vtc_tid Vtc tid
     * @return $this
     */
    public function setVtcTid($vtc_tid)
    {
        $this->container['vtc_tid'] = $vtc_tid;

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

