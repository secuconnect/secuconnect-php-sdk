<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * CheckoutConfigurationNotifications
 *
 * @category Class
 * @description Checkout notification settings
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutConfigurationNotifications implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CheckoutConfigurationNotifications';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_order_mail' => 'bool',
        'customer_order_mail' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_order_mail' => null,
        'customer_order_mail' => null
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
        'merchant_order_mail' => 'merchant_order_mail',
        'customer_order_mail' => 'customer_order_mail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant_order_mail' => 'setMerchantOrderMail',
        'customer_order_mail' => 'setCustomerOrderMail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant_order_mail' => 'getMerchantOrderMail',
        'customer_order_mail' => 'getCustomerOrderMail'
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
        $this->container['merchant_order_mail'] = isset($data['merchant_order_mail']) ? $data['merchant_order_mail'] : true;
        $this->container['customer_order_mail'] = isset($data['customer_order_mail']) ? $data['customer_order_mail'] : true;
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
     * Gets merchant_order_mail
     * @return bool
     */
    public function getMerchantOrderMail()
    {
        return $this->container['merchant_order_mail'];
    }

    /**
     * Sets merchant_order_mail
     * @param bool $merchant_order_mail If enabled an order confirmation mail will be send to the seller
     * @return $this
     */
    public function setMerchantOrderMail($merchant_order_mail)
    {
        $this->container['merchant_order_mail'] = $merchant_order_mail;

        return $this;
    }

    /**
     * Gets customer_order_mail
     * @return bool
     */
    public function getCustomerOrderMail()
    {
        return $this->container['customer_order_mail'];
    }

    /**
     * Sets customer_order_mail
     * @param bool $customer_order_mail If enabled an order confirmation mail will be send to the payer
     * @return $this
     */
    public function setCustomerOrderMail($customer_order_mail)
    {
        $this->container['customer_order_mail'] = $customer_order_mail;

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

