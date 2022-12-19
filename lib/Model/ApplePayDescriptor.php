<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * ApplePayDescriptor
 *
 * @category Class
 * @description ApplePay details
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplePayDescriptor implements ArrayAccess, OneOfPaymentContainersDTOModelPrivate 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ApplePayDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signature' => 'string',
        'version' => 'string',
        'data' => 'string',
        'header' => '\Secuconnect\Client\Model\ApplePayDescriptorHeader'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signature' => null,
        'version' => null,
        'data' => null,
        'header' => null
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
        'signature' => 'signature',
        'version' => 'version',
        'data' => 'data',
        'header' => 'header'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'signature' => 'setSignature',
        'version' => 'setVersion',
        'data' => 'setData',
        'header' => 'setHeader'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'signature' => 'getSignature',
        'version' => 'getVersion',
        'data' => 'getData',
        'header' => 'getHeader'
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
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : 'EC_v1';
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
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
     * Gets signature
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     * @param string $signature Base64 encoded signature of the payment and header data.
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version Version information about the payment token.
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets data
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param string $data Base64 encoded encrypted payment data.
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets header
     * @return \Secuconnect\Client\Model\ApplePayDescriptorHeader
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     * @param \Secuconnect\Client\Model\ApplePayDescriptorHeader $header header
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

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

