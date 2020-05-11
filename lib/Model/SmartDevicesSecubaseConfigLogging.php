<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartDevicesSecubaseConfigLogging
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesSecubaseConfigLogging implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartDevicesSecubaseConfigLogging';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'secubase' => '\Secuconnect\Client\Model\SmartDevicesSecubaseConfigLoggingFileNet',
        'app' => '\Secuconnect\Client\Model\SmartDevicesSecubaseConfigLoggingFileNet'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'secubase' => null,
        'app' => null
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
        'secubase' => 'secubase',
        'app' => 'app'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'secubase' => 'setSecubase',
        'app' => 'setApp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'secubase' => 'getSecubase',
        'app' => 'getApp'
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
        $this->container['secubase'] = isset($data['secubase']) ? $data['secubase'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
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
     * Gets secubase
     * @return \Secuconnect\Client\Model\SmartDevicesSecubaseConfigLoggingFileNet
     */
    public function getSecubase()
    {
        return $this->container['secubase'];
    }

    /**
     * Sets secubase
     * @param \Secuconnect\Client\Model\SmartDevicesSecubaseConfigLoggingFileNet $secubase secubase
     * @return $this
     */
    public function setSecubase($secubase)
    {
        $this->container['secubase'] = $secubase;

        return $this;
    }

    /**
     * Gets app
     * @return \Secuconnect\Client\Model\SmartDevicesSecubaseConfigLoggingFileNet
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     * @param \Secuconnect\Client\Model\SmartDevicesSecubaseConfigLoggingFileNet $app app
     * @return $this
     */
    public function setApp($app)
    {
        $this->container['app'] = $app;

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

