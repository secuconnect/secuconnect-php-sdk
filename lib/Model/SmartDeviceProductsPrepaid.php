<?php

namespace Secuconnect\Client\Model;

/**
 * SmartDeviceProductsPrepaid
 *
 * @category Class
 * @description SmartDeviceProductsPrepaid
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDeviceProductsPrepaid extends SmartDeviceProductsEnabledWithTid
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
        'demo_force' => 'bool',
        'vtc_tid' => 'string',
        'endofday' => 'bool',
        'password' => 'string[]',
        'simulate' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'demo_force' => null,
        'vtc_tid' => null,
        'endofday' => null,
        'password' => null,
        'simulate' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'demo_force' => 'demo_force',
        'vtc_tid' => 'vtc_tid',
        'endofday' => 'endofday',
        'password' => 'password',
        'simulate' => 'simulate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'demo_force' => 'setDemoForce',
        'vtc_tid' => 'setVtcTid',
        'endofday' => 'setEndofday',
        'password' => 'setPassword',
        'simulate' => 'setSimulate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'demo_force' => 'getDemoForce',
        'vtc_tid' => 'getVtcTid',
        'endofday' => 'getEndofday',
        'password' => 'getPassword',
        'simulate' => 'getSimulate'
    ];

    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['demo_force'] = isset($data['demo_force']) ? $data['demo_force'] : null;
        $this->container['vtc_tid'] = isset($data['vtc_tid']) ? $data['vtc_tid'] : null;
        $this->container['endofday'] = isset($data['endofday']) ? $data['endofday'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['simulate'] = isset($data['simulate']) ? $data['simulate'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

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
     * Gets endofday
     * @return bool
     */
    public function getEndofday()
    {
        return $this->container['endofday'];
    }

    /**
     * Sets endofday
     * @param bool $endofday EndOfDay
     * @return $this
     */
    public function setEndofday($endofday)
    {
        $this->container['endofday'] = $endofday;

        return $this;
    }

    /**
     * Gets password
     * @return string[]
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string[] $password List of passwords which are allowed to run the terminal app
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets simulate
     * @return bool
     */
    public function getSimulate()
    {
        return $this->container['simulate'];
    }

    /**
     * Sets simulate
     * @param bool $simulate Simulate
     * @return $this
     */
    public function setSimulate($simulate)
    {
        $this->container['simulate'] = $simulate;

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

