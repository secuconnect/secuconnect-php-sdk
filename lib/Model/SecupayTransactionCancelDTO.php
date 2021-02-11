<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SecupayTransactionCancelDTO
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayTransactionCancelDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SecupayTransactionCancelDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract' => '\Secuconnect\Client\Model\PaymentContractsProductModel',
        'amount' => 'int',
        'reduce_stakeholder_payment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract' => null,
        'amount' => null,
        'reduce_stakeholder_payment' => null
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
        'contract' => 'contract',
        'amount' => 'amount',
        'reduce_stakeholder_payment' => 'reduce_stakeholder_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'contract' => 'setContract',
        'amount' => 'setAmount',
        'reduce_stakeholder_payment' => 'setReduceStakeholderPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'contract' => 'getContract',
        'amount' => 'getAmount',
        'reduce_stakeholder_payment' => 'getReduceStakeholderPayment'
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
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['reduce_stakeholder_payment'] = isset($data['reduce_stakeholder_payment']) ? $data['reduce_stakeholder_payment'] : false;
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
     * Gets contract
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\PaymentContractsProductModel $contract contract
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets reduce_stakeholder_payment
     * @return bool
     */
    public function getReduceStakeholderPayment()
    {
        return $this->container['reduce_stakeholder_payment'];
    }

    /**
     * Sets reduce_stakeholder_payment
     * @param bool $reduce_stakeholder_payment Mixed-Basket: (percentage) reduce the stakeholder amount too
     * @return $this
     */
    public function setReduceStakeholderPayment($reduce_stakeholder_payment)
    {
        $this->container['reduce_stakeholder_payment'] = $reduce_stakeholder_payment;

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

