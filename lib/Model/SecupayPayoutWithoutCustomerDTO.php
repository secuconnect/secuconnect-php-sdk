<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SecupayPayoutWithoutCustomerDTO
 *
 * @category Class
 * @description SecupayPayoutWithoutCustomerDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayPayoutWithoutCustomerDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SecupayPayoutWithoutCustomerDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'int',
        'currency' => 'string',
        'contract_id' => 'string',
        'payout_list' => '\Secuconnect\Client\Model\SecupayPayoutListItem[]',
        'purpose' => 'string',
        'execution_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'currency' => null,
        'contract_id' => null,
        'payout_list' => null,
        'purpose' => null,
        'execution_date' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'contract_id' => 'contract_id',
        'payout_list' => 'Payout_list',
        'purpose' => 'purpose',
        'execution_date' => 'execution_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'contract_id' => 'setContractId',
        'payout_list' => 'setPayoutList',
        'purpose' => 'setPurpose',
        'execution_date' => 'setExecutionDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'contract_id' => 'getContractId',
        'payout_list' => 'getPayoutList',
        'purpose' => 'getPurpose',
        'execution_date' => 'getExecutionDate'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['payout_list'] = isset($data['payout_list']) ? $data['payout_list'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['execution_date'] = isset($data['execution_date']) ? $data['execution_date'] : null;
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
     * Gets contract_id
     * @return string
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     * @param string $contract_id The contract ID
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets payout_list
     * @return \Secuconnect\Client\Model\SecupayPayoutListItem[]
     */
    public function getPayoutList()
    {
        return $this->container['payout_list'];
    }

    /**
     * Sets payout_list
     * @param \Secuconnect\Client\Model\SecupayPayoutListItem[] $payout_list A list of payout items
     * @return $this
     */
    public function setPayoutList($payout_list)
    {
        $this->container['payout_list'] = $payout_list;

        return $this;
    }

    /**
     * Gets purpose
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     * @param string $purpose The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer.
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets execution_date
     * @return string
     */
    public function getExecutionDate()
    {
        return $this->container['execution_date'];
    }

    /**
     * Sets execution_date
     * @param string $execution_date Date when the payout should be started
     * @return $this
     */
    public function setExecutionDate($execution_date)
    {
        $this->container['execution_date'] = $execution_date;

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

