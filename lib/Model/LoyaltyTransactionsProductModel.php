<?php

namespace Secuconnect\Client\Model;

/**
 * LoyaltyTransactionsProductModel
 *
 * @category Class
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
        'merchant' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchant',
        'cardgroup' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTOCardgroup',
        'store' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTOStore',
        'merchantcard' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchantcard',
        'card' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTOCard',
        'parents' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[]',
        'children' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[]',
        'tid' => 'string',
        'status' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'balance' => 'int',
        'description' => 'string',
        'created' => 'string',
        'last_changee' => 'string',
        'receipt' => '\Secuconnect\Client\Model\ReceiptTypeValue[]',
        'is_cancelling' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant' => null,
        'cardgroup' => null,
        'store' => null,
        'merchantcard' => null,
        'card' => null,
        'parents' => null,
        'children' => null,
        'tid' => null,
        'status' => null,
        'amount' => null,
        'currency' => null,
        'balance' => null,
        'description' => null,
        'created' => null,
        'last_changee' => null,
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
        'merchant' => 'merchant',
        'cardgroup' => 'cardgroup',
        'store' => 'store',
        'merchantcard' => 'merchantcard',
        'card' => 'card',
        'parents' => 'parents',
        'children' => 'children',
        'tid' => 'tid',
        'status' => 'status',
        'amount' => 'amount',
        'currency' => 'currency',
        'balance' => 'balance',
        'description' => 'description',
        'created' => 'created',
        'last_changee' => 'last_changee',
        'receipt' => 'receipt',
        'is_cancelling' => 'is_cancelling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant' => 'setMerchant',
        'cardgroup' => 'setCardgroup',
        'store' => 'setStore',
        'merchantcard' => 'setMerchantcard',
        'card' => 'setCard',
        'parents' => 'setParents',
        'children' => 'setChildren',
        'tid' => 'setTid',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'balance' => 'setBalance',
        'description' => 'setDescription',
        'created' => 'setCreated',
        'last_changee' => 'setLastChangee',
        'receipt' => 'setReceipt',
        'is_cancelling' => 'setIsCancelling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant' => 'getMerchant',
        'cardgroup' => 'getCardgroup',
        'store' => 'getStore',
        'merchantcard' => 'getMerchantcard',
        'card' => 'getCard',
        'parents' => 'getParents',
        'children' => 'getChildren',
        'tid' => 'getTid',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'balance' => 'getBalance',
        'description' => 'getDescription',
        'created' => 'getCreated',
        'last_changee' => 'getLastChangee',
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

        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['cardgroup'] = isset($data['cardgroup']) ? $data['cardgroup'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['merchantcard'] = isset($data['merchantcard']) ? $data['merchantcard'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['parents'] = isset($data['parents']) ? $data['parents'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['last_changee'] = isset($data['last_changee']) ? $data['last_changee'] : null;
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
     * Gets merchant
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchant
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchant $merchant merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets cardgroup
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTOCardgroup
     */
    public function getCardgroup()
    {
        return $this->container['cardgroup'];
    }

    /**
     * Sets cardgroup
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTOCardgroup $cardgroup cardgroup
     * @return $this
     */
    public function setCardgroup($cardgroup)
    {
        $this->container['cardgroup'] = $cardgroup;

        return $this;
    }

    /**
     * Gets store
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTOStore
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTOStore $store store
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets merchantcard
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchantcard
     */
    public function getMerchantcard()
    {
        return $this->container['merchantcard'];
    }

    /**
     * Sets merchantcard
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchantcard $merchantcard merchantcard
     * @return $this
     */
    public function setMerchantcard($merchantcard)
    {
        $this->container['merchantcard'] = $merchantcard;

        return $this;
    }

    /**
     * Gets card
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTOCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTOCard $card card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets parents
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[]
     */
    public function getParents()
    {
        return $this->container['parents'];
    }

    /**
     * Sets parents
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[] $parents LoyaltyTransactionsProductModel
     * @return $this
     */
    public function setParents($parents)
    {
        $this->container['parents'] = $parents;

        return $this;
    }

    /**
     * Gets children
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[] $children LoyaltyTransactionsProductModel
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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
     * @param string $tid The TID of the processed Smart Device
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
     * @param string $status The status text of the Loyalty Transaction
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
     * @param int $amount Loyalty Transaction amount
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
     * @param string $currency The currency of the Loyalty Transaction
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
     * @param int $balance The balance of the merchantcard after this Loyalty Transaction
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
     * @param string $description Loyalty Transaction type
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $created Created at date
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets last_changee
     * @return string
     */
    public function getLastChangee()
    {
        return $this->container['last_changee'];
    }

    /**
     * Sets last_changee
     * @param string $last_changee Last change oif this transaction, most like a status change
     * @return $this
     */
    public function setLastChangee($last_changee)
    {
        $this->container['last_changee'] = $last_changee;

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
     * @param int $is_cancelling Indicator for a cancelling transaction (1 = full-cancel, 3 = partial-cancel)
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

