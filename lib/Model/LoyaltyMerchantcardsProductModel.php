<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * LoyaltyMerchantcardsProductModel
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsProductModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyMerchantcardsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'id' => 'string',
        'card' => '\Secuconnect\Client\Model\LoyaltyCardsProductModel',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'created_for_merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'created_for_store' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'customer' => '\Secuconnect\Client\Model\LoyaltyCustomersProductModel',
        'cardgroup' => '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel',
        'payment_container' => '\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOPaymentContainer',
        'balance' => 'int',
        'points' => 'int',
        'bonus_balance' => 'int',
        'cash_balance' => 'int',
        'stock_status' => 'string',
        'lock_status' => 'string',
        'last_usage' => '\DateTime',
        'last_charge' => '\DateTime',
        'is_base_card' => 'bool',
        'passcode' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => 'id',
        'card' => null,
        'merchant' => null,
        'created_for_merchant' => null,
        'created_for_store' => null,
        'customer' => null,
        'cardgroup' => null,
        'payment_container' => null,
        'balance' => null,
        'points' => null,
        'bonus_balance' => null,
        'cash_balance' => null,
        'stock_status' => null,
        'lock_status' => null,
        'last_usage' => 'date-time',
        'last_charge' => 'date-time',
        'is_base_card' => null,
        'passcode' => null
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
        'object' => 'object',
        'id' => 'id',
        'card' => 'card',
        'merchant' => 'merchant',
        'created_for_merchant' => 'created_for_merchant',
        'created_for_store' => 'created_for_store',
        'customer' => 'customer',
        'cardgroup' => 'cardgroup',
        'payment_container' => 'payment_container',
        'balance' => 'balance',
        'points' => 'points',
        'bonus_balance' => 'bonus_balance',
        'cash_balance' => 'cash_balance',
        'stock_status' => 'stock_status',
        'lock_status' => 'lock_status',
        'last_usage' => 'last_usage',
        'last_charge' => 'last_charge',
        'is_base_card' => 'is_base_card',
        'passcode' => 'passcode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'card' => 'setCard',
        'merchant' => 'setMerchant',
        'created_for_merchant' => 'setCreatedForMerchant',
        'created_for_store' => 'setCreatedForStore',
        'customer' => 'setCustomer',
        'cardgroup' => 'setCardgroup',
        'payment_container' => 'setPaymentContainer',
        'balance' => 'setBalance',
        'points' => 'setPoints',
        'bonus_balance' => 'setBonusBalance',
        'cash_balance' => 'setCashBalance',
        'stock_status' => 'setStockStatus',
        'lock_status' => 'setLockStatus',
        'last_usage' => 'setLastUsage',
        'last_charge' => 'setLastCharge',
        'is_base_card' => 'setIsBaseCard',
        'passcode' => 'setPasscode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'card' => 'getCard',
        'merchant' => 'getMerchant',
        'created_for_merchant' => 'getCreatedForMerchant',
        'created_for_store' => 'getCreatedForStore',
        'customer' => 'getCustomer',
        'cardgroup' => 'getCardgroup',
        'payment_container' => 'getPaymentContainer',
        'balance' => 'getBalance',
        'points' => 'getPoints',
        'bonus_balance' => 'getBonusBalance',
        'cash_balance' => 'getCashBalance',
        'stock_status' => 'getStockStatus',
        'lock_status' => 'getLockStatus',
        'last_usage' => 'getLastUsage',
        'last_charge' => 'getLastCharge',
        'is_base_card' => 'getIsBaseCard',
        'passcode' => 'getPasscode'
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
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['created_for_merchant'] = isset($data['created_for_merchant']) ? $data['created_for_merchant'] : null;
        $this->container['created_for_store'] = isset($data['created_for_store']) ? $data['created_for_store'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['cardgroup'] = isset($data['cardgroup']) ? $data['cardgroup'] : null;
        $this->container['payment_container'] = isset($data['payment_container']) ? $data['payment_container'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['bonus_balance'] = isset($data['bonus_balance']) ? $data['bonus_balance'] : null;
        $this->container['cash_balance'] = isset($data['cash_balance']) ? $data['cash_balance'] : null;
        $this->container['stock_status'] = isset($data['stock_status']) ? $data['stock_status'] : null;
        $this->container['lock_status'] = isset($data['lock_status']) ? $data['lock_status'] : null;
        $this->container['last_usage'] = isset($data['last_usage']) ? $data['last_usage'] : null;
        $this->container['last_charge'] = isset($data['last_charge']) ? $data['last_charge'] : null;
        $this->container['is_base_card'] = isset($data['is_base_card']) ? $data['is_base_card'] : null;
        $this->container['passcode'] = isset($data['passcode']) ? $data['passcode'] : null;
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
     * Gets object
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string $object Object of loyalty merchant card
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Id of loyalty merchant card
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets card
     * @return \Secuconnect\Client\Model\LoyaltyCardsProductModel
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \Secuconnect\Client\Model\LoyaltyCardsProductModel $card Id of loyalty store group
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

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
     * @param \Secuconnect\Client\Model\ProductInstanceUID $merchant Current merchant id
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets created_for_merchant
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getCreatedForMerchant()
    {
        return $this->container['created_for_merchant'];
    }

    /**
     * Sets created_for_merchant
     * @param \Secuconnect\Client\Model\ProductInstanceUID $created_for_merchant Merchant id, that loyalty merchant card object was created for
     * @return $this
     */
    public function setCreatedForMerchant($created_for_merchant)
    {
        $this->container['created_for_merchant'] = $created_for_merchant;

        return $this;
    }

    /**
     * Gets created_for_store
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getCreatedForStore()
    {
        return $this->container['created_for_store'];
    }

    /**
     * Sets created_for_store
     * @param \Secuconnect\Client\Model\ProductInstanceUID $created_for_store Store id, that loyalty merchant card object was created for
     * @return $this
     */
    public function setCreatedForStore($created_for_store)
    {
        $this->container['created_for_store'] = $created_for_store;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\LoyaltyCustomersProductModel $customer Loyalty merchant card customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets cardgroup
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
     */
    public function getCardgroup()
    {
        return $this->container['cardgroup'];
    }

    /**
     * Sets cardgroup
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel $cardgroup Loyalty merchant card card group
     * @return $this
     */
    public function setCardgroup($cardgroup)
    {
        $this->container['cardgroup'] = $cardgroup;

        return $this;
    }

    /**
     * Gets payment_container
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOPaymentContainer
     */
    public function getPaymentContainer()
    {
        return $this->container['payment_container'];
    }

    /**
     * Sets payment_container
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOPaymentContainer $payment_container Loyalty merchant card payment container
     * @return $this
     */
    public function setPaymentContainer($payment_container)
    {
        $this->container['payment_container'] = $payment_container;

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
     * @param int $balance Loyalty merchant card balance
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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
     * @param int $points Loyalty merchant card points
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

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
     * @param int $bonus_balance Loyalty merchant card bonus balance
     * @return $this
     */
    public function setBonusBalance($bonus_balance)
    {
        $this->container['bonus_balance'] = $bonus_balance;

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
     * @param int $cash_balance Loyalty merchant card cash balance
     * @return $this
     */
    public function setCashBalance($cash_balance)
    {
        $this->container['cash_balance'] = $cash_balance;

        return $this;
    }

    /**
     * Gets stock_status
     * @return string
     */
    public function getStockStatus()
    {
        return $this->container['stock_status'];
    }

    /**
     * Sets stock_status
     * @param string $stock_status Loyalty merchant card stock status
     * @return $this
     */
    public function setStockStatus($stock_status)
    {
        $this->container['stock_status'] = $stock_status;

        return $this;
    }

    /**
     * Gets lock_status
     * @return string
     */
    public function getLockStatus()
    {
        return $this->container['lock_status'];
    }

    /**
     * Sets lock_status
     * @param string $lock_status Loyalty merchant card lock status
     * @return $this
     */
    public function setLockStatus($lock_status)
    {
        $this->container['lock_status'] = $lock_status;

        return $this;
    }

    /**
     * Gets last_usage
     * @return \DateTime
     */
    public function getLastUsage()
    {
        return $this->container['last_usage'];
    }

    /**
     * Sets last_usage
     * @param \DateTime $last_usage Loyalty merchant card last usage
     * @return $this
     */
    public function setLastUsage($last_usage)
    {
        $this->container['last_usage'] = $last_usage;

        return $this;
    }

    /**
     * Gets last_charge
     * @return \DateTime
     */
    public function getLastCharge()
    {
        return $this->container['last_charge'];
    }

    /**
     * Sets last_charge
     * @param \DateTime $last_charge Loyalty merchant card last charge
     * @return $this
     */
    public function setLastCharge($last_charge)
    {
        $this->container['last_charge'] = $last_charge;

        return $this;
    }

    /**
     * Gets is_base_card
     * @return bool
     */
    public function getIsBaseCard()
    {
        return $this->container['is_base_card'];
    }

    /**
     * Sets is_base_card
     * @param bool $is_base_card Information whether loyalty merchant card is base card
     * @return $this
     */
    public function setIsBaseCard($is_base_card)
    {
        $this->container['is_base_card'] = $is_base_card;

        return $this;
    }

    /**
     * Gets passcode
     * @return int
     */
    public function getPasscode()
    {
        return $this->container['passcode'];
    }

    /**
     * Sets passcode
     * @param int $passcode Loyalty merchant card passcode
     * @return $this
     */
    public function setPasscode($passcode)
    {
        $this->container['passcode'] = $passcode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
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


