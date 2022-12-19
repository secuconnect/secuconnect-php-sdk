<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentPlansDTO
 *
 * @category Class
 * @description PaymentPlansDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentPlansDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentPlansDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'currency' => 'string',
        'paypal_plan_id' => 'string',
        'status' => 'string',
        'payment_methods' => 'string[]',
        'merchant' => '\Secuconnect\Client\Model\GeneralMerchantsProductModel',
        'merchant_id' => 'string',
        'billing_cycles' => '\Secuconnect\Client\Model\BillingCyclesItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'currency' => null,
        'paypal_plan_id' => null,
        'status' => null,
        'payment_methods' => null,
        'merchant' => null,
        'merchant_id' => null,
        'billing_cycles' => null
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
        'description' => 'description',
        'currency' => 'currency',
        'paypal_plan_id' => 'paypal_plan_id',
        'status' => 'status',
        'payment_methods' => 'payment_methods',
        'merchant' => 'merchant',
        'merchant_id' => 'merchant_id',
        'billing_cycles' => 'billing_cycles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'currency' => 'setCurrency',
        'paypal_plan_id' => 'setPaypalPlanId',
        'status' => 'setStatus',
        'payment_methods' => 'setPaymentMethods',
        'merchant' => 'setMerchant',
        'merchant_id' => 'setMerchantId',
        'billing_cycles' => 'setBillingCycles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'currency' => 'getCurrency',
        'paypal_plan_id' => 'getPaypalPlanId',
        'status' => 'getStatus',
        'payment_methods' => 'getPaymentMethods',
        'merchant' => 'getMerchant',
        'merchant_id' => 'getMerchantId',
        'billing_cycles' => 'getBillingCycles'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['paypal_plan_id'] = isset($data['paypal_plan_id']) ? $data['paypal_plan_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'active';
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['billing_cycles'] = isset($data['billing_cycles']) ? $data['billing_cycles'] : null;
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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description of payment plan
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets paypal_plan_id
     * @return string
     */
    public function getPaypalPlanId()
    {
        return $this->container['paypal_plan_id'];
    }

    /**
     * Sets paypal_plan_id
     * @param string $paypal_plan_id Payment plan id
     * @return $this
     */
    public function setPaypalPlanId($paypal_plan_id)
    {
        $this->container['paypal_plan_id'] = $paypal_plan_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Payment plan status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string[] $payment_methods Payment methods
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\GeneralMerchantsProductModel
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\GeneralMerchantsProductModel $merchant merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
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
     * Gets billing_cycles
     * @return \Secuconnect\Client\Model\BillingCyclesItem[]
     */
    public function getBillingCycles()
    {
        return $this->container['billing_cycles'];
    }

    /**
     * Sets billing_cycles
     * @param \Secuconnect\Client\Model\BillingCyclesItem[] $billing_cycles Billing cycles
     * @return $this
     */
    public function setBillingCycles($billing_cycles)
    {
        $this->container['billing_cycles'] = $billing_cycles;

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

