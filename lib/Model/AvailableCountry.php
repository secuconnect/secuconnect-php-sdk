<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * AvailableCountry
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailableCountry implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AvailableCountry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'en' => 'string',
        'iso_code' => 'string',
        'de' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'en' => null,
        'iso_code' => null,
        'de' => null
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
        'en' => 'en',
        'iso_code' => 'iso_code',
        'de' => 'de'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'en' => 'setEn',
        'iso_code' => 'setIsoCode',
        'de' => 'setDe'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'en' => 'getEn',
        'iso_code' => 'getIsoCode',
        'de' => 'getDe'
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
        $this->container['en'] = isset($data['en']) ? $data['en'] : null;
        $this->container['iso_code'] = isset($data['iso_code']) ? $data['iso_code'] : null;
        $this->container['de'] = isset($data['de']) ? $data['de'] : null;
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
     * Gets en
     * @return string
     */
    public function getEn()
    {
        return $this->container['en'];
    }

    /**
     * Sets en
     * @param string $en Country name in English
     * @return $this
     */
    public function setEn($en)
    {
        $this->container['en'] = $en;

        return $this;
    }

    /**
     * Gets iso_code
     * @return string
     */
    public function getIsoCode()
    {
        return $this->container['iso_code'];
    }

    /**
     * Sets iso_code
     * @param string $iso_code ISO region code
     * @return $this
     */
    public function setIsoCode($iso_code)
    {
        $this->container['iso_code'] = $iso_code;

        return $this;
    }

    /**
     * Gets de
     * @return string
     */
    public function getDe()
    {
        return $this->container['de'];
    }

    /**
     * Sets de
     * @param string $de Country name in German
     * @return $this
     */
    public function setDe($de)
    {
        $this->container['de'] = $de;

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

