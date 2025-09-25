<?php

namespace Secuconnect\Client\Model;

/**
 * SmartTransactionPaymentContainerDTO
 *
 * @category Class
 * @description Payment instrument
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionPaymentContainerDTO extends ProductInstanceUID
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionPaymentContainerDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_id' => 'string',
        'customer' => '\Secuconnect\Client\Model\PaymentContainersDTOCustomer',
        'customer_id' => 'string',
        'type' => 'string',
        'request_token' => 'bool',
        'notification_url' => 'string',
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
        'request_token' => null,
        'notification_url' => null,
        'private' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
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
        'request_token' => 'request_token',
        'notification_url' => 'notification_url',
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
        'request_token' => 'setRequestToken',
        'notification_url' => 'setNotificationUrl',
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
        'request_token' => 'getRequestToken',
        'notification_url' => 'getNotificationUrl',
        'private' => 'getPrivate'
    ];

    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['request_token'] = isset($data['request_token']) ? $data['request_token'] : false;
        $this->container['notification_url'] = isset($data['notification_url']) ? $data['notification_url'] : null;
        $this->container['private'] = isset($data['private']) ? $data['private'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

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
     * @param string $type Container type:  - `\"bank_account\"` - `\"credit_card\"` (read-only) - `\"googlepay\"` - `\"applepay\"` - `\"paypal\"` (read-only)
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets request_token
     * @return bool
     */
    public function getRequestToken()
    {
        return $this->container['request_token'];
    }

    /**
     * Sets request_token
     * @param bool $request_token Request token
     * @return $this
     */
    public function setRequestToken($request_token)
    {
        $this->container['request_token'] = $request_token;

        return $this;
    }

    /**
     * Gets notification_url
     * @return string
     */
    public function getNotificationUrl()
    {
        return $this->container['notification_url'];
    }

    /**
     * Sets notification_url
     * @param string $notification_url Shop URL for failed external authorization or payment
     * @return $this
     */
    public function setNotificationUrl($notification_url)
    {
        $this->container['notification_url'] = $notification_url;

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

