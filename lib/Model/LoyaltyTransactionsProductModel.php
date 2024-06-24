<?php

namespace Secuconnect\Client\Model;

/**
 * LoyaltyTransactionsProductModel
 *
 * @category Class
 * @description LoyaltyTransactionsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyTransactionsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyTransactionsProductModel';

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
        'merchant' => '\Secuconnect\Client\Model\GeneralMerchantsProductModel',
        'cardgroup' => '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel',
        'store' => '\Secuconnect\Client\Model\GeneralStoresProductModel',
        'merchantcard' => '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel',
        'card' => '\Secuconnect\Client\Model\LoyaltyCardsProductModel',
        'parents' => '\Secuconnect\Client\Model\LoyaltyTransactionsRelatedTransactions[]',
        'children' => '\Secuconnect\Client\Model\LoyaltyTransactionsRelatedTransactions[]',
        'cleared' => 'bool',
        'clearing_information' => 'null[]',
        'trans_id' => 'int',
        'tid' => 'string',
        'status' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'balance' => 'int',
        'description' => 'string',
        'purpose' => 'string',
        'additional_data' => 'object',
        'last_change' => 'string',
        'receipt' => '\Secuconnect\Client\Model\ReceiptTypeValue[]',
        'is_cancelling' => 'int'
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
        'cardgroup' => null,
        'store' => null,
        'merchantcard' => null,
        'card' => null,
        'parents' => null,
        'children' => null,
        'cleared' => null,
        'clearing_information' => null,
        'trans_id' => null,
        'tid' => null,
        'status' => null,
        'amount' => null,
        'currency' => null,
        'balance' => null,
        'description' => null,
        'purpose' => null,
        'additional_data' => null,
        'last_change' => null,
        'receipt' => null,
        'is_cancelling' => null
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
        'cardgroup' => 'cardgroup',
        'store' => 'store',
        'merchantcard' => 'merchantcard',
        'card' => 'card',
        'parents' => 'parents',
        'children' => 'children',
        'cleared' => 'cleared',
        'clearing_information' => 'clearing_information',
        'trans_id' => 'trans_id',
        'tid' => 'tid',
        'status' => 'status',
        'amount' => 'amount',
        'currency' => 'currency',
        'balance' => 'balance',
        'description' => 'description',
        'purpose' => 'purpose',
        'additional_data' => 'additional_data',
        'last_change' => 'last_change',
        'receipt' => 'receipt',
        'is_cancelling' => 'is_cancelling'
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
        'cardgroup' => 'setCardgroup',
        'store' => 'setStore',
        'merchantcard' => 'setMerchantcard',
        'card' => 'setCard',
        'parents' => 'setParents',
        'children' => 'setChildren',
        'cleared' => 'setCleared',
        'clearing_information' => 'setClearingInformation',
        'trans_id' => 'setTransId',
        'tid' => 'setTid',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'balance' => 'setBalance',
        'description' => 'setDescription',
        'purpose' => 'setPurpose',
        'additional_data' => 'setAdditionalData',
        'last_change' => 'setLastChange',
        'receipt' => 'setReceipt',
        'is_cancelling' => 'setIsCancelling'
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
        'cardgroup' => 'getCardgroup',
        'store' => 'getStore',
        'merchantcard' => 'getMerchantcard',
        'card' => 'getCard',
        'parents' => 'getParents',
        'children' => 'getChildren',
        'cleared' => 'getCleared',
        'clearing_information' => 'getClearingInformation',
        'trans_id' => 'getTransId',
        'tid' => 'getTid',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'balance' => 'getBalance',
        'description' => 'getDescription',
        'purpose' => 'getPurpose',
        'additional_data' => 'getAdditionalData',
        'last_change' => 'getLastChange',
        'receipt' => 'getReceipt',
        'is_cancelling' => 'getIsCancelling'
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
        $this->container['cardgroup'] = isset($data['cardgroup']) ? $data['cardgroup'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['merchantcard'] = isset($data['merchantcard']) ? $data['merchantcard'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['parents'] = isset($data['parents']) ? $data['parents'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['cleared'] = isset($data['cleared']) ? $data['cleared'] : null;
        $this->container['clearing_information'] = isset($data['clearing_information']) ? $data['clearing_information'] : null;
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['last_change'] = isset($data['last_change']) ? $data['last_change'] : null;
        $this->container['receipt'] = isset($data['receipt']) ? $data['receipt'] : null;
        $this->container['is_cancelling'] = isset($data['is_cancelling']) ? $data['is_cancelling'] : null;
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
     * Gets cardgroup
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
     */
    public function getCardgroup()
    {
        return $this->container['cardgroup'];
    }

    /**
     * Sets cardgroup
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel $cardgroup cardgroup
     * @return $this
     */
    public function setCardgroup($cardgroup)
    {
        $this->container['cardgroup'] = $cardgroup;

        return $this;
    }

    /**
     * Gets store
     * @return \Secuconnect\Client\Model\GeneralStoresProductModel
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\GeneralStoresProductModel $store store
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets merchantcard
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function getMerchantcard()
    {
        return $this->container['merchantcard'];
    }

    /**
     * Sets merchantcard
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel $merchantcard merchantcard
     * @return $this
     */
    public function setMerchantcard($merchantcard)
    {
        $this->container['merchantcard'] = $merchantcard;

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
     * @param \Secuconnect\Client\Model\LoyaltyCardsProductModel $card card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets parents
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsRelatedTransactions[]
     */
    public function getParents()
    {
        return $this->container['parents'];
    }

    /**
     * Sets parents
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsRelatedTransactions[] $parents parents
     * @return $this
     */
    public function setParents($parents)
    {
        $this->container['parents'] = $parents;

        return $this;
    }

    /**
     * Gets children
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsRelatedTransactions[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsRelatedTransactions[] $children children
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets cleared
     * @return bool
     */
    public function getCleared()
    {
        return $this->container['cleared'];
    }

    /**
     * Sets cleared
     * @param bool $cleared Boolean if Transaction is cleared or not
     * @return $this
     */
    public function setCleared($cleared)
    {
        $this->container['cleared'] = $cleared;

        return $this;
    }

    /**
     * Gets clearing_information
     * @return null[]
     */
    public function getClearingInformation()
    {
        return $this->container['clearing_information'];
    }

    /**
     * Sets clearing_information
     * @param null[] $clearing_information Clearing Information
     * @return $this
     */
    public function setClearingInformation($clearing_information)
    {
        $this->container['clearing_information'] = $clearing_information;

        return $this;
    }

    /**
     * Gets trans_id
     * @return int
     */
    public function getTransId()
    {
        return $this->container['trans_id'];
    }

    /**
     * Sets trans_id
     * @param int $trans_id Transaction ID
     * @return $this
     */
    public function setTransId($trans_id)
    {
        $this->container['trans_id'] = $trans_id;

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
     * @param string $tid Terminal ID of the Smart Device that processed this transaction
     * @return $this
     */
    public function setTid($tid)
    {
        $this->container['tid'] = $tid;

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
     * @param string $status Status of the Loyalty Transaction
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets balance
     * @return int
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     * @param int $balance New card balance of the Merchant Card after this transaction
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
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
     * @param string $description Loyalty Transaction type, e. g. `\"Aufladung\"`
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $purpose The purpose of the transaction.
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets additional_data
     * @return object
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     * @param object $additional_data Custom additional data
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets last_change
     * @return string
     */
    public function getLastChange()
    {
        return $this->container['last_change'];
    }

    /**
     * Sets last_change
     * @param string $last_change Last change of this transaction (most likely a status change)
     * @return $this
     */
    public function setLastChange($last_change)
    {
        $this->container['last_change'] = $last_change;

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
     * Gets is_cancelling
     * @return int
     */
    public function getIsCancelling()
    {
        return $this->container['is_cancelling'];
    }

    /**
     * Sets is_cancelling
     * @param int $is_cancelling Indicates when the transaction is just about to be cancelled:  - `0` = no - `1` = full cancellation - `3` = partial cancellation
     * @return $this
     */
    public function setIsCancelling($is_cancelling)
    {
        $this->container['is_cancelling'] = $is_cancelling;

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

