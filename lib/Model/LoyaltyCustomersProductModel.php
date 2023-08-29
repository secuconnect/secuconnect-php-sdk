<?php

namespace Secuconnect\Client\Model;

/**
 * LoyaltyCustomersProductModel
 *
 * @category Class
 * @description LoyaltyCustomersProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCustomersProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyCustomersProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'l' => 'int',
        'k' => 'int',
        'ks' => 'string',
        'c' => 'int',
        's' => 'int',
        't' => '\Secuconnect\Client\Model\AggregationTimeResult',
        'created' => 'string',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'contact' => '\Secuconnect\Client\Model\Contact',
        'merchant_contact' => '\Secuconnect\Client\Model\Contact',
        'account_contact' => '\Secuconnect\Client\Model\Contact',
        'payment_container' => '\Secuconnect\Client\Model\LoyaltyCustomersPaymentContainerModel[]',
        'customernumber' => 'string',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'l' => null,
        'k' => null,
        'ks' => null,
        'c' => null,
        's' => null,
        't' => null,
        'created' => null,
        'merchant' => null,
        'contact' => null,
        'merchant_contact' => null,
        'account_contact' => null,
        'payment_container' => null,
        'customernumber' => null,
        'note' => null
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
        'l' => 'l',
        'k' => 'k',
        'ks' => 'ks',
        'c' => 'c',
        's' => 's',
        't' => 't',
        'created' => 'created',
        'merchant' => 'merchant',
        'contact' => 'contact',
        'merchant_contact' => 'merchant_contact',
        'account_contact' => 'account_contact',
        'payment_container' => 'payment_container',
        'customernumber' => 'customernumber',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'l' => 'setL',
        'k' => 'setK',
        'ks' => 'setKs',
        'c' => 'setC',
        's' => 'setS',
        't' => 'setT',
        'created' => 'setCreated',
        'merchant' => 'setMerchant',
        'contact' => 'setContact',
        'merchant_contact' => 'setMerchantContact',
        'account_contact' => 'setAccountContact',
        'payment_container' => 'setPaymentContainer',
        'customernumber' => 'setCustomernumber',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'l' => 'getL',
        'k' => 'getK',
        'ks' => 'getKs',
        'c' => 'getC',
        's' => 'getS',
        't' => 'getT',
        'created' => 'getCreated',
        'merchant' => 'getMerchant',
        'contact' => 'getContact',
        'merchant_contact' => 'getMerchantContact',
        'account_contact' => 'getAccountContact',
        'payment_container' => 'getPaymentContainer',
        'customernumber' => 'getCustomernumber',
        'note' => 'getNote'
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

        $this->container['l'] = isset($data['l']) ? $data['l'] : null;
        $this->container['k'] = isset($data['k']) ? $data['k'] : null;
        $this->container['ks'] = isset($data['ks']) ? $data['ks'] : null;
        $this->container['c'] = isset($data['c']) ? $data['c'] : null;
        $this->container['s'] = isset($data['s']) ? $data['s'] : null;
        $this->container['t'] = isset($data['t']) ? $data['t'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['merchant_contact'] = isset($data['merchant_contact']) ? $data['merchant_contact'] : null;
        $this->container['account_contact'] = isset($data['account_contact']) ? $data['account_contact'] : null;
        $this->container['payment_container'] = isset($data['payment_container']) ? $data['payment_container'] : null;
        $this->container['customernumber'] = isset($data['customernumber']) ? $data['customernumber'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
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
     * Gets l
     * @return int
     */
    public function getL()
    {
        return $this->container['l'];
    }

    /**
     * Sets l
     * @param int $l lookup index
     * @return $this
     */
    public function setL($l)
    {
        $this->container['l'] = $l;

        return $this;
    }

    /**
     * Gets k
     * @return int
     */
    public function getK()
    {
        return $this->container['k'];
    }

    /**
     * Sets k
     * @param int $k key index
     * @return $this
     */
    public function setK($k)
    {
        $this->container['k'] = $k;

        return $this;
    }

    /**
     * Gets ks
     * @return string
     */
    public function getKs()
    {
        return $this->container['ks'];
    }

    /**
     * Sets ks
     * @param string $ks key name
     * @return $this
     */
    public function setKs($ks)
    {
        $this->container['ks'] = $ks;

        return $this;
    }

    /**
     * Gets c
     * @return int
     */
    public function getC()
    {
        return $this->container['c'];
    }

    /**
     * Sets c
     * @param int $c count (number of items)
     * @return $this
     */
    public function setC($c)
    {
        $this->container['c'] = $c;

        return $this;
    }

    /**
     * Gets s
     * @return int
     */
    public function getS()
    {
        return $this->container['s'];
    }

    /**
     * Sets s
     * @param int $s sum
     * @return $this
     */
    public function setS($s)
    {
        $this->container['s'] = $s;

        return $this;
    }

    /**
     * Gets t
     * @return \Secuconnect\Client\Model\AggregationTimeResult
     */
    public function getT()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     * @param \Secuconnect\Client\Model\AggregationTimeResult $t t
     * @return $this
     */
    public function setT($t)
    {
        $this->container['t'] = $t;

        return $this;
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
     * Gets merchant
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\ProductInstanceUID $merchant merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param \Secuconnect\Client\Model\Contact $contact contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets merchant_contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getMerchantContact()
    {
        return $this->container['merchant_contact'];
    }

    /**
     * Sets merchant_contact
     * @param \Secuconnect\Client\Model\Contact $merchant_contact merchant_contact
     * @return $this
     */
    public function setMerchantContact($merchant_contact)
    {
        $this->container['merchant_contact'] = $merchant_contact;

        return $this;
    }

    /**
     * Gets account_contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getAccountContact()
    {
        return $this->container['account_contact'];
    }

    /**
     * Sets account_contact
     * @param \Secuconnect\Client\Model\Contact $account_contact account_contact
     * @return $this
     */
    public function setAccountContact($account_contact)
    {
        $this->container['account_contact'] = $account_contact;

        return $this;
    }

    /**
     * Gets payment_container
     * @return \Secuconnect\Client\Model\LoyaltyCustomersPaymentContainerModel[]
     */
    public function getPaymentContainer()
    {
        return $this->container['payment_container'];
    }

    /**
     * Sets payment_container
     * @param \Secuconnect\Client\Model\LoyaltyCustomersPaymentContainerModel[] $payment_container payment container
     * @return $this
     */
    public function setPaymentContainer($payment_container)
    {
        $this->container['payment_container'] = $payment_container;

        return $this;
    }

    /**
     * Gets customernumber
     * @return string
     */
    public function getCustomernumber()
    {
        return $this->container['customernumber'];
    }

    /**
     * Sets customernumber
     * @param string $customernumber Customer number
     * @return $this
     */
    public function setCustomernumber($customernumber)
    {
        $this->container['customernumber'] = $customernumber;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     * @param string $note Customer number
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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

