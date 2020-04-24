<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsPrepare
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsPrepare implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionsPrepare';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'container' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'method' => 'string',
        'callback_urls' => '\Secuconnect\Client\Model\SmartTransactionsPrepareCallbackUrls',
        'email' => 'string',
        'mode' => 'string',
        'is_paypal_basic' => 'bool',
        'is_demo' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer' => null,
        'container' => null,
        'method' => null,
        'callback_urls' => null,
        'email' => null,
        'mode' => null,
        'is_paypal_basic' => null,
        'is_demo' => null
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
        'customer' => 'customer',
        'container' => 'container',
        'method' => 'method',
        'callback_urls' => 'callback_urls',
        'email' => 'email',
        'mode' => 'mode',
        'is_paypal_basic' => 'is_paypal_basic',
        'is_demo' => 'is_demo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'container' => 'setContainer',
        'method' => 'setMethod',
        'callback_urls' => 'setCallbackUrls',
        'email' => 'setEmail',
        'mode' => 'setMode',
        'is_paypal_basic' => 'setIsPaypalBasic',
        'is_demo' => 'setIsDemo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'container' => 'getContainer',
        'method' => 'getMethod',
        'callback_urls' => 'getCallbackUrls',
        'email' => 'getEmail',
        'mode' => 'getMode',
        'is_paypal_basic' => 'getIsPaypalBasic',
        'is_demo' => 'getIsDemo'
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
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['container'] = isset($data['container']) ? $data['container'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['callback_urls'] = isset($data['callback_urls']) ? $data['callback_urls'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['is_paypal_basic'] = isset($data['is_paypal_basic']) ? $data['is_paypal_basic'] : null;
        $this->container['is_demo'] = isset($data['is_demo']) ? $data['is_demo'] : null;
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
     * Gets customer
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\ProductInstanceUID $customer customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets container
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getContainer()
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     * @param \Secuconnect\Client\Model\ProductInstanceUID $container container
     * @return $this
     */
    public function setContainer($container)
    {
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param string $method Method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets callback_urls
     * @return \Secuconnect\Client\Model\SmartTransactionsPrepareCallbackUrls
     */
    public function getCallbackUrls()
    {
        return $this->container['callback_urls'];
    }

    /**
     * Sets callback_urls
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepareCallbackUrls $callback_urls callback_urls
     * @return $this
     */
    public function setCallbackUrls($callback_urls)
    {
        $this->container['callback_urls'] = $callback_urls;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets mode
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string $mode Mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets is_paypal_basic
     * @return bool
     */
    public function getIsPaypalBasic()
    {
        return $this->container['is_paypal_basic'];
    }

    /**
     * Sets is_paypal_basic
     * @param bool $is_paypal_basic Is paypal basic or not
     * @return $this
     */
    public function setIsPaypalBasic($is_paypal_basic)
    {
        $this->container['is_paypal_basic'] = $is_paypal_basic;

        return $this;
    }

    /**
     * Gets is_demo
     * @return bool
     */
    public function getIsDemo()
    {
        return $this->container['is_demo'];
    }

    /**
     * Sets is_demo
     * @param bool $is_demo Is demo or not
     * @return $this
     */
    public function setIsDemo($is_demo)
    {
        $this->container['is_demo'] = $is_demo;

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

