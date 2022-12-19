<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentContainersDTO
 *
 * @category Class
 * @description PaymentContainersDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContainersDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContainersDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_id' => 'string',
        'customer' => '\Secuconnect\Client\Model\PaymentContainersDTOCustomer',
        'customer_id' => 'string',
        'type' => 'string',
        'private' => '\Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_id' => null,
        'customer' => null,
        'customer_id' => null,
        'type' => null,
        'private' => null
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
        'merchant_id' => 'merchant_id',
        'customer' => 'customer',
        'customer_id' => 'customer_id',
        'type' => 'type',
        'private' => 'private'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'customer' => 'setCustomer',
        'customer_id' => 'setCustomerId',
        'type' => 'setType',
        'private' => 'setPrivate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'customer' => 'getCustomer',
        'customer_id' => 'getCustomerId',
        'type' => 'getType',
        'private' => 'getPrivate'
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
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['private'] = isset($data['private']) ? $data['private'] : null;
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
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     * @param string $merchant_id General Merchant ID
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\PaymentContainersDTOCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\PaymentContainersDTOCustomer $customer customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets customer_id
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param string $customer_id Payment Customer ID
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of Payment Containers
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets private
     * @return \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     * @param \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate $private private
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

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

