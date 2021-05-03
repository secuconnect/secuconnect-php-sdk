<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentContext
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContext implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_capture' => 'bool',
        'payment_methods' => 'string[]',
        'merchant_initiated' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_capture' => null,
        'payment_methods' => null,
        'merchant_initiated' => null
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
        'auto_capture' => 'auto_capture',
        'payment_methods' => 'payment_methods',
        'merchant_initiated' => 'merchant_initiated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'auto_capture' => 'setAutoCapture',
        'payment_methods' => 'setPaymentMethods',
        'merchant_initiated' => 'setMerchantInitiated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'auto_capture' => 'getAutoCapture',
        'payment_methods' => 'getPaymentMethods',
        'merchant_initiated' => 'getMerchantInitiated'
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
        $this->container['auto_capture'] = isset($data['auto_capture']) ? $data['auto_capture'] : false;
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['merchant_initiated'] = isset($data['merchant_initiated']) ? $data['merchant_initiated'] : false;
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
     * Gets auto_capture
     * @return bool
     */
    public function getAutoCapture()
    {
        return $this->container['auto_capture'];
    }

    /**
     * Sets auto_capture
     * @param bool $auto_capture auto capture the smart transaction
     * @return $this
     */
    public function setAutoCapture($auto_capture)
    {
        $this->container['auto_capture'] = $auto_capture;

        return $this;
    }

    /**
     * Gets payment_methods
     * @return string[]
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     * @param string[] $payment_methods PaymentContext
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets merchant_initiated
     * @return bool
     */
    public function getMerchantInitiated()
    {
        return $this->container['merchant_initiated'];
    }

    /**
     * Sets merchant_initiated
     * @param bool $merchant_initiated is this smart transaction created automatically by the merchant (process without customer interaction)
     * @return $this
     */
    public function setMerchantInitiated($merchant_initiated)
    {
        $this->container['merchant_initiated'] = $merchant_initiated;

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

