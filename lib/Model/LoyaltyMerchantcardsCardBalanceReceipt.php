<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * LoyaltyMerchantcardsCardBalanceReceipt
 *
 * @category Class
 * @description LoyaltyMerchantcardsCardBalanceReceipt
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsCardBalanceReceipt implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyMerchantcardsCardBalanceReceipt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'valid' => 'bool',
        'balance' => 'int',
        'cash_balance' => 'int',
        'bonus_balance' => 'int',
        'zvt_cardgroup' => 'string',
        'points' => 'int',
        'new_passcode' => 'bool',
        'receipt_header' => '\Secuconnect\Client\Model\ReceiptType[]',
        'receipt' => '\Secuconnect\Client\Model\ReceiptTypeValue[]',
        'amount_split_enabled' => 'bool',
        'limit_allowed' => 'bool',
        'limit_str' => 'string',
        'limit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'valid' => null,
        'balance' => null,
        'cash_balance' => null,
        'bonus_balance' => null,
        'zvt_cardgroup' => null,
        'points' => null,
        'new_passcode' => null,
        'receipt_header' => null,
        'receipt' => null,
        'amount_split_enabled' => null,
        'limit_allowed' => null,
        'limit_str' => null,
        'limit' => null
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
        'valid' => 'valid',
        'balance' => 'balance',
        'cash_balance' => 'cash_balance',
        'bonus_balance' => 'bonus_balance',
        'zvt_cardgroup' => 'zvt_cardgroup',
        'points' => 'points',
        'new_passcode' => 'new_passcode',
        'receipt_header' => 'receipt_header',
        'receipt' => 'receipt',
        'amount_split_enabled' => 'amount_split_enabled',
        'limit_allowed' => 'limit_allowed',
        'limit_str' => 'limit_str',
        'limit' => 'limit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'valid' => 'setValid',
        'balance' => 'setBalance',
        'cash_balance' => 'setCashBalance',
        'bonus_balance' => 'setBonusBalance',
        'zvt_cardgroup' => 'setZvtCardgroup',
        'points' => 'setPoints',
        'new_passcode' => 'setNewPasscode',
        'receipt_header' => 'setReceiptHeader',
        'receipt' => 'setReceipt',
        'amount_split_enabled' => 'setAmountSplitEnabled',
        'limit_allowed' => 'setLimitAllowed',
        'limit_str' => 'setLimitStr',
        'limit' => 'setLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'valid' => 'getValid',
        'balance' => 'getBalance',
        'cash_balance' => 'getCashBalance',
        'bonus_balance' => 'getBonusBalance',
        'zvt_cardgroup' => 'getZvtCardgroup',
        'points' => 'getPoints',
        'new_passcode' => 'getNewPasscode',
        'receipt_header' => 'getReceiptHeader',
        'receipt' => 'getReceipt',
        'amount_split_enabled' => 'getAmountSplitEnabled',
        'limit_allowed' => 'getLimitAllowed',
        'limit_str' => 'getLimitStr',
        'limit' => 'getLimit'
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
        $this->container['valid'] = isset($data['valid']) ? $data['valid'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['cash_balance'] = isset($data['cash_balance']) ? $data['cash_balance'] : null;
        $this->container['bonus_balance'] = isset($data['bonus_balance']) ? $data['bonus_balance'] : null;
        $this->container['zvt_cardgroup'] = isset($data['zvt_cardgroup']) ? $data['zvt_cardgroup'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['new_passcode'] = isset($data['new_passcode']) ? $data['new_passcode'] : null;
        $this->container['receipt_header'] = isset($data['receipt_header']) ? $data['receipt_header'] : null;
        $this->container['receipt'] = isset($data['receipt']) ? $data['receipt'] : null;
        $this->container['amount_split_enabled'] = isset($data['amount_split_enabled']) ? $data['amount_split_enabled'] : null;
        $this->container['limit_allowed'] = isset($data['limit_allowed']) ? $data['limit_allowed'] : null;
        $this->container['limit_str'] = isset($data['limit_str']) ? $data['limit_str'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
     * Gets valid
     * @return bool
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     * @param bool $valid Whether the card is valid
     * @return $this
     */
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets balance
     * @return int
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     * @param int $balance Total money balance; in the smallest currency unit (e. g. Euro Cent)
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets cash_balance
     * @return int
     */
    public function getCashBalance()
    {
        return $this->container['cash_balance'];
    }

    /**
     * Sets cash_balance
     * @param int $cash_balance Money balance loaded with money; in the smallest currency unit (e. g. Euro Cent)
     * @return $this
     */
    public function setCashBalance($cash_balance)
    {
        $this->container['cash_balance'] = $cash_balance;

        return $this;
    }

    /**
     * Gets bonus_balance
     * @return int
     */
    public function getBonusBalance()
    {
        return $this->container['bonus_balance'];
    }

    /**
     * Sets bonus_balance
     * @param int $bonus_balance Money balance collected as bonus for former transactions; in the smallest currency unit (e. g. Euro Cent)
     * @return $this
     */
    public function setBonusBalance($bonus_balance)
    {
        $this->container['bonus_balance'] = $bonus_balance;

        return $this;
    }

    /**
     * Gets zvt_cardgroup
     * @return string
     */
    public function getZvtCardgroup()
    {
        return $this->container['zvt_cardgroup'];
    }

    /**
     * Sets zvt_cardgroup
     * @param string $zvt_cardgroup ZVT Cardgroup
     * @return $this
     */
    public function setZvtCardgroup($zvt_cardgroup)
    {
        $this->container['zvt_cardgroup'] = $zvt_cardgroup;

        return $this;
    }

    /**
     * Gets points
     * @return int
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     * @param int $points Points balance
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets new_passcode
     * @return bool
     */
    public function getNewPasscode()
    {
        return $this->container['new_passcode'];
    }

    /**
     * Sets new_passcode
     * @param bool $new_passcode Whether a new passcode has been set
     * @return $this
     */
    public function setNewPasscode($new_passcode)
    {
        $this->container['new_passcode'] = $new_passcode;

        return $this;
    }

    /**
     * Gets receipt_header
     * @return \Secuconnect\Client\Model\ReceiptType[]
     */
    public function getReceiptHeader()
    {
        return $this->container['receipt_header'];
    }

    /**
     * Sets receipt_header
     * @param \Secuconnect\Client\Model\ReceiptType[] $receipt_header Receipt header
     * @return $this
     */
    public function setReceiptHeader($receipt_header)
    {
        $this->container['receipt_header'] = $receipt_header;

        return $this;
    }

    /**
     * Gets receipt
     * @return \Secuconnect\Client\Model\ReceiptTypeValue[]
     */
    public function getReceipt()
    {
        return $this->container['receipt'];
    }

    /**
     * Sets receipt
     * @param \Secuconnect\Client\Model\ReceiptTypeValue[] $receipt Receipt
     * @return $this
     */
    public function setReceipt($receipt)
    {
        $this->container['receipt'] = $receipt;

        return $this;
    }

    /**
     * Gets amount_split_enabled
     * @return bool
     */
    public function getAmountSplitEnabled()
    {
        return $this->container['amount_split_enabled'];
    }

    /**
     * Sets amount_split_enabled
     * @param bool $amount_split_enabled Result has true or false value
     * @return $this
     */
    public function setAmountSplitEnabled($amount_split_enabled)
    {
        $this->container['amount_split_enabled'] = $amount_split_enabled;

        return $this;
    }

    /**
     * Gets limit_allowed
     * @return bool
     */
    public function getLimitAllowed()
    {
        return $this->container['limit_allowed'];
    }

    /**
     * Sets limit_allowed
     * @param bool $limit_allowed Whether the card can be overdrawn (`true`) or not (`false`)
     * @return $this
     */
    public function setLimitAllowed($limit_allowed)
    {
        $this->container['limit_allowed'] = $limit_allowed;

        return $this;
    }

    /**
     * Gets limit_str
     * @return string
     */
    public function getLimitStr()
    {
        return $this->container['limit_str'];
    }

    /**
     * Sets limit_str
     * @param string $limit_str Formatted overdraft limit (amount and currency unit)
     * @return $this
     */
    public function setLimitStr($limit_str)
    {
        $this->container['limit_str'] = $limit_str;

        return $this;
    }

    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param int $limit Overdraft limit in the smallest currency unit (e. g. Euro Cent)
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

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

