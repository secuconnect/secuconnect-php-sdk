<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartDevicesDTOSecubaseConfig
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesDTOSecubaseConfig implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartDevicesDTOSecubaseConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'secubase_version' => 'string',
        'base_version' => 'string',
        'oai_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'secubase_version' => null,
        'base_version' => null,
        'oai_version' => null
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
        'secubase_version' => 'secubaseVersion',
        'base_version' => 'baseVersion',
        'oai_version' => 'oaiVersion'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'secubase_version' => 'setSecubaseVersion',
        'base_version' => 'setBaseVersion',
        'oai_version' => 'setOaiVersion'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'secubase_version' => 'getSecubaseVersion',
        'base_version' => 'getBaseVersion',
        'oai_version' => 'getOaiVersion'
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
        $this->container['base_version'] = isset($data['base_version']) ? $data['base_version'] : null;
        $this->container['oai_version'] = isset($data['oai_version']) ? $data['oai_version'] : null;
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
     * @param string $secubase_version Secubase version
     * @return $this
     */
    public function setSecubaseVersion($secubase_version)
    {
        $this->container['secubase_version'] = $secubase_version;

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
     * @param string $base_version Base version
     * @return $this
     */
    public function setBaseVersion($base_version)
    {
        $this->container['base_version'] = $base_version;

        return $this;
    }

    /**
     * Gets oai_version
     * @return string
     */
    public function getOaiVersion()
    {
        return $this->container['oai_version'];
    }

    /**
     * Sets oai_version
     * @param string $oai_version Oai version
     * @return $this
     */
    public function setOaiVersion($oai_version)
    {
        $this->container['oai_version'] = $oai_version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
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


