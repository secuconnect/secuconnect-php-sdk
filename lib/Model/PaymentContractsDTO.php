<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentContractsDTO
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContractsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant' => 'string',
        'internal_reference' => 'string',
        'contract_id' => 'string',
        'demo' => 'string',
        'url_push' => 'string',
        'unique_order_id' => 'bool',
        'scoring' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant' => null,
        'internal_reference' => null,
        'contract_id' => null,
        'demo' => null,
        'url_push' => null,
        'unique_order_id' => null,
        'scoring' => null
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
        'merchant' => 'merchant',
        'internal_reference' => 'internal_reference',
        'contract_id' => 'contract_id',
        'demo' => 'demo',
        'url_push' => 'url_push',
        'unique_order_id' => 'unique_order_id',
        'scoring' => 'scoring'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant' => 'setMerchant',
        'internal_reference' => 'setInternalReference',
        'contract_id' => 'setContractId',
        'demo' => 'setDemo',
        'url_push' => 'setUrlPush',
        'unique_order_id' => 'setUniqueOrderId',
        'scoring' => 'setScoring'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant' => 'getMerchant',
        'internal_reference' => 'getInternalReference',
        'contract_id' => 'getContractId',
        'demo' => 'getDemo',
        'url_push' => 'getUrlPush',
        'unique_order_id' => 'getUniqueOrderId',
        'scoring' => 'getScoring'
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
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['internal_reference'] = isset($data['internal_reference']) ? $data['internal_reference'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['demo'] = isset($data['demo']) ? $data['demo'] : null;
        $this->container['url_push'] = isset($data['url_push']) ? $data['url_push'] : null;
        $this->container['unique_order_id'] = isset($data['unique_order_id']) ? $data['unique_order_id'] : null;
        $this->container['scoring'] = isset($data['scoring']) ? $data['scoring'] : null;
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
     * Gets merchant
     * @return string
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param string $merchant Contracts Merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets internal_reference
     * @return string
     */
    public function getInternalReference()
    {
        return $this->container['internal_reference'];
    }

    /**
     * Sets internal_reference
     * @param string $internal_reference The internal user id
     * @return $this
     */
    public function setInternalReference($internal_reference)
    {
        $this->container['internal_reference'] = $internal_reference;

        return $this;
    }

    /**
     * Gets contract_id
     * @return string
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     * @param string $contract_id Contracts id
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets demo
     * @return string
     */
    public function getDemo()
    {
        return $this->container['demo'];
    }

    /**
     * Sets demo
     * @param string $demo Is this a demo contract
     * @return $this
     */
    public function setDemo($demo)
    {
        $this->container['demo'] = $demo;

        return $this;
    }

    /**
     * Gets url_push
     * @return string
     */
    public function getUrlPush()
    {
        return $this->container['url_push'];
    }

    /**
     * Sets url_push
     * @param string $url_push An URL where your service listen for push notifications of the secuconnect service
     * @return $this
     */
    public function setUrlPush($url_push)
    {
        $this->container['url_push'] = $url_push;

        return $this;
    }

    /**
     * Gets unique_order_id
     * @return bool
     */
    public function getUniqueOrderId()
    {
        return $this->container['unique_order_id'];
    }

    /**
     * Sets unique_order_id
     * @param bool $unique_order_id Bool, default FALSE. If TRUE, an error message will be thrown if you try to create a new payment transaction with the same order_id of an previous transaction.
     * @return $this
     */
    public function setUniqueOrderId($unique_order_id)
    {
        $this->container['unique_order_id'] = $unique_order_id;

        return $this;
    }

    /**
     * Gets scoring
     * @return bool
     */
    public function getScoring()
    {
        return $this->container['scoring'];
    }

    /**
     * Sets scoring
     * @param bool $scoring Bool, default TRUE. If FALSE, the customer scoring is disabled for your payment contract
     * @return $this
     */
    public function setScoring($scoring)
    {
        $this->container['scoring'] = $scoring;

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

