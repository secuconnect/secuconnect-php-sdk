<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartDevicesGetSecubaseConfigDTO
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesGetSecubaseConfigDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartDevicesGetSecubaseConfigDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'secubase_version' => 'string',
        'secudroid_version' => 'string',
        'base_version' => 'string',
        'terminal_type' => 'string',
        'terminal_id' => 'string',
        'smart_device' => '\Secuconnect\Client\Model\SmartDevicesProductModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'secubase_version' => null,
        'secudroid_version' => null,
        'base_version' => null,
        'terminal_type' => null,
        'terminal_id' => null,
        'smart_device' => null
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
        'secubase_version' => 'secubase_version',
        'secudroid_version' => 'secudroid_version',
        'base_version' => 'base_version',
        'terminal_type' => 'terminal_type',
        'terminal_id' => 'terminal_id',
        'smart_device' => 'smart_device'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'secubase_version' => 'setSecubaseVersion',
        'secudroid_version' => 'setSecudroidVersion',
        'base_version' => 'setBaseVersion',
        'terminal_type' => 'setTerminalType',
        'terminal_id' => 'setTerminalId',
        'smart_device' => 'setSmartDevice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'secubase_version' => 'getSecubaseVersion',
        'secudroid_version' => 'getSecudroidVersion',
        'base_version' => 'getBaseVersion',
        'terminal_type' => 'getTerminalType',
        'terminal_id' => 'getTerminalId',
        'smart_device' => 'getSmartDevice'
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
        $this->container['secubase_version'] = isset($data['secubase_version']) ? $data['secubase_version'] : null;
        $this->container['secudroid_version'] = isset($data['secudroid_version']) ? $data['secudroid_version'] : null;
        $this->container['base_version'] = isset($data['base_version']) ? $data['base_version'] : null;
        $this->container['terminal_type'] = isset($data['terminal_type']) ? $data['terminal_type'] : null;
        $this->container['terminal_id'] = isset($data['terminal_id']) ? $data['terminal_id'] : null;
        $this->container['smart_device'] = isset($data['smart_device']) ? $data['smart_device'] : null;
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
     * Gets secubase_version
     * @return string
     */
    public function getSecubaseVersion()
    {
        return $this->container['secubase_version'];
    }

    /**
     * Sets secubase_version
     * @param string $secubase_version Secubase version of the Ingenico terminal (C part)
     * @return $this
     */
    public function setSecubaseVersion($secubase_version)
    {
        $this->container['secubase_version'] = $secubase_version;

        return $this;
    }

    /**
     * Gets secudroid_version
     * @return string
     */
    public function getSecudroidVersion()
    {
        return $this->container['secudroid_version'];
    }

    /**
     * Sets secudroid_version
     * @param string $secudroid_version Version of the Android app (Java part)
     * @return $this
     */
    public function setSecudroidVersion($secudroid_version)
    {
        $this->container['secudroid_version'] = $secudroid_version;

        return $this;
    }

    /**
     * Gets base_version
     * @return string
     */
    public function getBaseVersion()
    {
        return $this->container['base_version'];
    }

    /**
     * Sets base_version
     * @param string $base_version Lua base app version
     * @return $this
     */
    public function setBaseVersion($base_version)
    {
        $this->container['base_version'] = $base_version;

        return $this;
    }

    /**
     * Gets terminal_type
     * @return string
     */
    public function getTerminalType()
    {
        return $this->container['terminal_type'];
    }

    /**
     * Sets terminal_type
     * @param string $terminal_type Terminal model
     * @return $this
     */
    public function setTerminalType($terminal_type)
    {
        $this->container['terminal_type'] = $terminal_type;

        return $this;
    }

    /**
     * Gets terminal_id
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     * @param string $terminal_id Terminal ID
     * @return $this
     */
    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    /**
     * Gets smart_device
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     */
    public function getSmartDevice()
    {
        return $this->container['smart_device'];
    }

    /**
     * Sets smart_device
     * @param \Secuconnect\Client\Model\SmartDevicesProductModel $smart_device smart_device
     * @return $this
     */
    public function setSmartDevice($smart_device)
    {
        $this->container['smart_device'] = $smart_device;

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

