<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * GooglePayDescriptor
 *
 * @category Class
 * @description GooglePay details
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GooglePayDescriptor implements ArrayAccess, OneOfPaymentContainersDTOModelPrivate 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GooglePayDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signature' => 'string',
        'protocol_version' => 'string',
        'signed_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signature' => null,
        'protocol_version' => null,
        'signed_message' => null
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
        'protocol_version' => 'protocolVersion',
        'signed_message' => 'signedMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'signature' => 'setSignature',
        'protocol_version' => 'setProtocolVersion',
        'signed_message' => 'setSignedMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'signature' => 'getSignature',
        'protocol_version' => 'getProtocolVersion',
        'signed_message' => 'getSignedMessage'
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
        $this->container['protocol_version'] = isset($data['protocol_version']) ? $data['protocol_version'] : 'ECv1';
        $this->container['signed_message'] = isset($data['signed_message']) ? $data['signed_message'] : null;
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
     * @param string $signature Base64 encoded signature of the signedMessage data.
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets protocol_version
     * @return string
     */
    public function getProtocolVersion()
    {
        return $this->container['protocol_version'];
    }

    /**
     * Sets protocol_version
     * @param string $protocol_version Version information about the payment token.
     * @return $this
     */
    public function setProtocolVersion($protocol_version)
    {
        $this->container['protocol_version'] = $protocol_version;

        return $this;
    }

    /**
     * Gets signed_message
     * @return string
     */
    public function getSignedMessage()
    {
        return $this->container['signed_message'];
    }

    /**
     * Sets signed_message
     * @param string $signed_message A JSON object serialized as an HTML-safe string that contains the encryptedMessage, ephemeralPublicKey, and tag.
     * @return $this
     */
    public function setSignedMessage($signed_message)
    {
        $this->container['signed_message'] = $signed_message;

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

