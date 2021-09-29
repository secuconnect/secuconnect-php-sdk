<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * IdentDocumentData
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdentDocumentData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'IdentDocumentData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => '\Secuconnect\Client\Model\ValueField',
        'dateissued' => '\Secuconnect\Client\Model\ValueField',
        'issuedby' => '\Secuconnect\Client\Model\ValueField',
        'number' => '\Secuconnect\Client\Model\ValueField',
        'type' => '\Secuconnect\Client\Model\ValueField',
        'validuntil' => '\Secuconnect\Client\Model\ValueField'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
        'dateissued' => null,
        'issuedby' => null,
        'number' => null,
        'type' => null,
        'validuntil' => null
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
        'country' => 'country',
        'dateissued' => 'dateissued',
        'issuedby' => 'issuedby',
        'number' => 'number',
        'type' => 'type',
        'validuntil' => 'validuntil'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'dateissued' => 'setDateissued',
        'issuedby' => 'setIssuedby',
        'number' => 'setNumber',
        'type' => 'setType',
        'validuntil' => 'setValiduntil'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'dateissued' => 'getDateissued',
        'issuedby' => 'getIssuedby',
        'number' => 'getNumber',
        'type' => 'getType',
        'validuntil' => 'getValiduntil'
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['dateissued'] = isset($data['dateissued']) ? $data['dateissued'] : null;
        $this->container['issuedby'] = isset($data['issuedby']) ? $data['issuedby'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['validuntil'] = isset($data['validuntil']) ? $data['validuntil'] : null;
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
     * Gets country
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param \Secuconnect\Client\Model\ValueField $country country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets dateissued
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getDateissued()
    {
        return $this->container['dateissued'];
    }

    /**
     * Sets dateissued
     * @param \Secuconnect\Client\Model\ValueField $dateissued dateissued
     * @return $this
     */
    public function setDateissued($dateissued)
    {
        $this->container['dateissued'] = $dateissued;

        return $this;
    }

    /**
     * Gets issuedby
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getIssuedby()
    {
        return $this->container['issuedby'];
    }

    /**
     * Sets issuedby
     * @param \Secuconnect\Client\Model\ValueField $issuedby issuedby
     * @return $this
     */
    public function setIssuedby($issuedby)
    {
        $this->container['issuedby'] = $issuedby;

        return $this;
    }

    /**
     * Gets number
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param \Secuconnect\Client\Model\ValueField $number number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets type
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param \Secuconnect\Client\Model\ValueField $type type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets validuntil
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getValiduntil()
    {
        return $this->container['validuntil'];
    }

    /**
     * Sets validuntil
     * @param \Secuconnect\Client\Model\ValueField $validuntil validuntil
     * @return $this
     */
    public function setValiduntil($validuntil)
    {
        $this->container['validuntil'] = $validuntil;

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

