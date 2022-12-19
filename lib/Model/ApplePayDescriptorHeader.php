<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * ApplePayDescriptorHeader
 *
 * @category Class
 * @description The header element is a required child of the applepay element. Its child elements provides information required to process the Apple Pay transaction.
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplePayDescriptorHeader implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ApplePayDescriptorHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ephemeral_public_key' => 'string',
        'public_key_hash' => 'string',
        'transaction_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ephemeral_public_key' => null,
        'public_key_hash' => null,
        'transaction_id' => null
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
        'ephemeral_public_key' => 'ephemeralPublicKey',
        'public_key_hash' => 'publicKeyHash',
        'transaction_id' => 'transactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ephemeral_public_key' => 'setEphemeralPublicKey',
        'public_key_hash' => 'setPublicKeyHash',
        'transaction_id' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ephemeral_public_key' => 'getEphemeralPublicKey',
        'public_key_hash' => 'getPublicKeyHash',
        'transaction_id' => 'getTransactionId'
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
        $this->container['ephemeral_public_key'] = isset($data['ephemeral_public_key']) ? $data['ephemeral_public_key'] : null;
        $this->container['public_key_hash'] = isset($data['public_key_hash']) ? $data['public_key_hash'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
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
     * Gets ephemeral_public_key
     * @return string
     */
    public function getEphemeralPublicKey()
    {
        return $this->container['ephemeral_public_key'];
    }

    /**
     * Sets ephemeral_public_key
     * @param string $ephemeral_public_key Base64 encoded ephemeral public key
     * @return $this
     */
    public function setEphemeralPublicKey($ephemeral_public_key)
    {
        $this->container['ephemeral_public_key'] = $ephemeral_public_key;

        return $this;
    }

    /**
     * Gets public_key_hash
     * @return string
     */
    public function getPublicKeyHash()
    {
        return $this->container['public_key_hash'];
    }

    /**
     * Sets public_key_hash
     * @param string $public_key_hash Base64 hash of public merchant key cert
     * @return $this
     */
    public function setPublicKeyHash($public_key_hash)
    {
        $this->container['public_key_hash'] = $public_key_hash;

        return $this;
    }

    /**
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     * @param string $transaction_id Hex transaction ID
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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

