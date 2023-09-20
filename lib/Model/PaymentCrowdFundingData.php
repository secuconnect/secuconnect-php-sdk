<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentCrowdFundingData
 *
 * @category Class
 * @description PaymentCrowdFundingData
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentCrowdFundingData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentCrowdFundingData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project' => '\Secuconnect\Client\Model\CrowdFundingDataDetails',
        'deposited_amount' => 'int',
        'paid_out' => 'int',
        'deducted_amount' => 'int',
        'open' => '\Secuconnect\Client\Model\CrowdFundingDataOpenAmount',
        'result' => 'Null'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'project' => null,
        'deposited_amount' => null,
        'paid_out' => null,
        'deducted_amount' => null,
        'open' => null,
        'result' => null
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
        'project' => 'project',
        'deposited_amount' => 'deposited_amount',
        'paid_out' => 'paid_out',
        'deducted_amount' => 'deducted_amount',
        'open' => 'open',
        'result' => 'result'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'project' => 'setProject',
        'deposited_amount' => 'setDepositedAmount',
        'paid_out' => 'setPaidOut',
        'deducted_amount' => 'setDeductedAmount',
        'open' => 'setOpen',
        'result' => 'setResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'project' => 'getProject',
        'deposited_amount' => 'getDepositedAmount',
        'paid_out' => 'getPaidOut',
        'deducted_amount' => 'getDeductedAmount',
        'open' => 'getOpen',
        'result' => 'getResult'
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
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['deposited_amount'] = isset($data['deposited_amount']) ? $data['deposited_amount'] : null;
        $this->container['paid_out'] = isset($data['paid_out']) ? $data['paid_out'] : null;
        $this->container['deducted_amount'] = isset($data['deducted_amount']) ? $data['deducted_amount'] : null;
        $this->container['open'] = isset($data['open']) ? $data['open'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
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
     * Gets project
     * @return \Secuconnect\Client\Model\CrowdFundingDataDetails
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     * @param \Secuconnect\Client\Model\CrowdFundingDataDetails $project project
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets deposited_amount
     * @return int
     */
    public function getDepositedAmount()
    {
        return $this->container['deposited_amount'];
    }

    /**
     * Sets deposited_amount
     * @param int $deposited_amount Total deposited amount of all transactions for this merchant
     * @return $this
     */
    public function setDepositedAmount($deposited_amount)
    {
        $this->container['deposited_amount'] = $deposited_amount;

        return $this;
    }

    /**
     * Gets paid_out
     * @return int
     */
    public function getPaidOut()
    {
        return $this->container['paid_out'];
    }

    /**
     * Sets paid_out
     * @param int $paid_out Total paid out amount of all transactions for this merchant
     * @return $this
     */
    public function setPaidOut($paid_out)
    {
        $this->container['paid_out'] = $paid_out;

        return $this;
    }

    /**
     * Gets deducted_amount
     * @return int
     */
    public function getDeductedAmount()
    {
        return $this->container['deducted_amount'];
    }

    /**
     * Sets deducted_amount
     * @param int $deducted_amount Total deducted amount of all transactions for this merchant
     * @return $this
     */
    public function setDeductedAmount($deducted_amount)
    {
        $this->container['deducted_amount'] = $deducted_amount;

        return $this;
    }

    /**
     * Gets open
     * @return \Secuconnect\Client\Model\CrowdFundingDataOpenAmount
     */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
     * Sets open
     * @param \Secuconnect\Client\Model\CrowdFundingDataOpenAmount $open open
     * @return $this
     */
    public function setOpen($open)
    {
        $this->container['open'] = $open;

        return $this;
    }

    /**
     * Gets result
     * @return Null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     * @param Null $result This field is returned if the contract doesn't have crowdfunding contract condition
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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

