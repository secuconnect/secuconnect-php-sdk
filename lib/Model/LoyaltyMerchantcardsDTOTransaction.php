<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * LoyaltyMerchantcardsDTOTransaction
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsDTOTransaction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyMerchantcardsDTOTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'terminal_id' => 'string',
        'amount' => 'int',
        'tid' => 'string',
        'store' => 'string',
        'cardnumber' => 'int',
        'bonus_amount' => 'int',
        'amount_split_allowed' => 'string',
        'merchant_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action' => null,
        'terminal_id' => null,
        'amount' => null,
        'tid' => null,
        'store' => null,
        'cardnumber' => null,
        'bonus_amount' => null,
        'amount_split_allowed' => null,
        'merchant_id' => null
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
        'action' => 'action',
        'terminal_id' => 'terminal_id',
        'amount' => 'amount',
        'tid' => 'tid',
        'store' => 'store',
        'cardnumber' => 'cardnumber',
        'bonus_amount' => 'bonus_amount',
        'amount_split_allowed' => 'amount_split_allowed',
        'merchant_id' => 'merchant_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'terminal_id' => 'setTerminalId',
        'amount' => 'setAmount',
        'tid' => 'setTid',
        'store' => 'setStore',
        'cardnumber' => 'setCardnumber',
        'bonus_amount' => 'setBonusAmount',
        'amount_split_allowed' => 'setAmountSplitAllowed',
        'merchant_id' => 'setMerchantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'terminal_id' => 'getTerminalId',
        'amount' => 'getAmount',
        'tid' => 'getTid',
        'store' => 'getStore',
        'cardnumber' => 'getCardnumber',
        'bonus_amount' => 'getBonusAmount',
        'amount_split_allowed' => 'getAmountSplitAllowed',
        'merchant_id' => 'getMerchantId'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['terminal_id'] = isset($data['terminal_id']) ? $data['terminal_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['cardnumber'] = isset($data['cardnumber']) ? $data['cardnumber'] : null;
        $this->container['bonus_amount'] = isset($data['bonus_amount']) ? $data['bonus_amount'] : null;
        $this->container['amount_split_allowed'] = isset($data['amount_split_allowed']) ? $data['amount_split_allowed'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
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
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action Action
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets terminal_id
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     * @param string $terminal_id Terminal id
     * @return $this
     */
    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

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
     * @param int $amount Amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets tid
     * @return string
     */
    public function getTid()
    {
        return $this->container['tid'];
    }

    /**
     * Sets tid
     * @param string $tid Tid
     * @return $this
     */
    public function setTid($tid)
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets store
     * @return string
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     * @param string $store Store id
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets cardnumber
     * @return int
     */
    public function getCardnumber()
    {
        return $this->container['cardnumber'];
    }

    /**
     * Sets cardnumber
     * @param int $cardnumber Card number
     * @return $this
     */
    public function setCardnumber($cardnumber)
    {
        $this->container['cardnumber'] = $cardnumber;

        return $this;
    }

    /**
     * Gets bonus_amount
     * @return int
     */
    public function getBonusAmount()
    {
        return $this->container['bonus_amount'];
    }

    /**
     * Sets bonus_amount
     * @param int $bonus_amount Bonus amount
     * @return $this
     */
    public function setBonusAmount($bonus_amount)
    {
        $this->container['bonus_amount'] = $bonus_amount;

        return $this;
    }

    /**
     * Gets amount_split_allowed
     * @return string
     */
    public function getAmountSplitAllowed()
    {
        return $this->container['amount_split_allowed'];
    }

    /**
     * Sets amount_split_allowed
     * @param string $amount_split_allowed Amount split allowed
     * @return $this
     */
    public function setAmountSplitAllowed($amount_split_allowed)
    {
        $this->container['amount_split_allowed'] = $amount_split_allowed;

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
     * @param string $merchant_id Merchant id
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

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

