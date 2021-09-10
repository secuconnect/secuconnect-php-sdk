<?php

namespace Secuconnect\Client\Model;

/**
 * PaymentSubscriptionsProductModel
 *
 * @category Class
 * @description PaymentSubscriptionsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentSubscriptionsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentSubscriptionsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'smart_transaction' => '\Secuconnect\Client\Model\BaseProductModel',
        'merchant' => '\Secuconnect\Client\Model\BaseProductModel',
        'contract' => '\Secuconnect\Client\Model\BaseProductModel',
        'customer' => '\Secuconnect\Client\Model\BaseProductModel',
        'container' => '\Secuconnect\Client\Model\BaseProductModel',
        'plan' => '\Secuconnect\Client\Model\BaseProductModel',
        'start_at' => 'string',
        'status' => 'string',
        'paypal_subscription_id' => 'string',
        'billing_cycles' => '\Secuconnect\Client\Model\PaymentSubscriptionsProductModelBillingCycles'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'smart_transaction' => null,
        'merchant' => null,
        'contract' => null,
        'customer' => null,
        'container' => null,
        'plan' => null,
        'start_at' => null,
        'status' => null,
        'paypal_subscription_id' => null,
        'billing_cycles' => null
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
        'created' => 'created',
        'updated' => 'updated',
        'smart_transaction' => 'smart_transaction',
        'merchant' => 'merchant',
        'contract' => 'contract',
        'customer' => 'customer',
        'container' => 'container',
        'plan' => 'plan',
        'start_at' => 'start_at',
        'status' => 'status',
        'paypal_subscription_id' => 'paypal_subscription_id',
        'billing_cycles' => 'billing_cycles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'smart_transaction' => 'setSmartTransaction',
        'merchant' => 'setMerchant',
        'contract' => 'setContract',
        'customer' => 'setCustomer',
        'container' => 'setContainer',
        'plan' => 'setPlan',
        'start_at' => 'setStartAt',
        'status' => 'setStatus',
        'paypal_subscription_id' => 'setPaypalSubscriptionId',
        'billing_cycles' => 'setBillingCycles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'smart_transaction' => 'getSmartTransaction',
        'merchant' => 'getMerchant',
        'contract' => 'getContract',
        'customer' => 'getCustomer',
        'container' => 'getContainer',
        'plan' => 'getPlan',
        'start_at' => 'getStartAt',
        'status' => 'getStatus',
        'paypal_subscription_id' => 'getPaypalSubscriptionId',
        'billing_cycles' => 'getBillingCycles'
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

        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['smart_transaction'] = isset($data['smart_transaction']) ? $data['smart_transaction'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['container'] = isset($data['container']) ? $data['container'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['paypal_subscription_id'] = isset($data['paypal_subscription_id']) ? $data['paypal_subscription_id'] : null;
        $this->container['billing_cycles'] = isset($data['billing_cycles']) ? $data['billing_cycles'] : null;
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
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     * @return string
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param string $updated updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets smart_transaction
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getSmartTransaction()
    {
        return $this->container['smart_transaction'];
    }

    /**
     * Sets smart_transaction
     * @param \Secuconnect\Client\Model\BaseProductModel $smart_transaction smart_transaction
     * @return $this
     */
    public function setSmartTransaction($smart_transaction)
    {
        $this->container['smart_transaction'] = $smart_transaction;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\BaseProductModel $merchant merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets contract
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\BaseProductModel $contract contract
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\BaseProductModel $customer customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets container
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getContainer()
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     * @param \Secuconnect\Client\Model\BaseProductModel $container container
     * @return $this
     */
    public function setContainer($container)
    {
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets plan
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     * @param \Secuconnect\Client\Model\BaseProductModel $plan plan
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets start_at
     * @return string
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     * @param string $start_at start at
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

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
     * @param string $status status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets paypal_subscription_id
     * @return string
     */
    public function getPaypalSubscriptionId()
    {
        return $this->container['paypal_subscription_id'];
    }

    /**
     * Sets paypal_subscription_id
     * @param string $paypal_subscription_id paypal_subscription_id
     * @return $this
     */
    public function setPaypalSubscriptionId($paypal_subscription_id)
    {
        $this->container['paypal_subscription_id'] = $paypal_subscription_id;

        return $this;
    }

    /**
     * Gets billing_cycles
     * @return \Secuconnect\Client\Model\PaymentSubscriptionsProductModelBillingCycles
     */
    public function getBillingCycles()
    {
        return $this->container['billing_cycles'];
    }

    /**
     * Sets billing_cycles
     * @param \Secuconnect\Client\Model\PaymentSubscriptionsProductModelBillingCycles $billing_cycles billing_cycles
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

