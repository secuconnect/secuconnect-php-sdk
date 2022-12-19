<?php

namespace Secuconnect\Client\Model;

/**
 * CardprocessingTransactionsProductModel
 *
 * @category Class
 * @description CardprocessingTransactionsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CardprocessingTransactionsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CardprocessingTransactionsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'merchant' => '\Secuconnect\Client\Model\GeneralMerchantsProductModel',
        'related_transactions' => '\Secuconnect\Client\Model\ParentObj[]',
        'store' => '\Secuconnect\Client\Model\GeneralStoresProductModel',
        'store_name' => 'string',
        'trans_id' => 'int',
        'tid' => 'string',
        'end_of_day_date' => 'string',
        'end_of_day_id' => 'string',
        'amount' => 'int',
        'trace' => 'int',
        'receipt_number' => 'string',
        'product' => 'string',
        'ref_report_id' => 'int',
        'ref_report_type' => 'int',
        'l' => 'int',
        'k' => 'int',
        'ks' => 'string',
        'c' => 'int',
        's' => 'int',
        't' => '\Secuconnect\Client\Model\AggregationTimeResult'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'merchant' => null,
        'related_transactions' => null,
        'store' => null,
        'store_name' => null,
        'trans_id' => null,
        'tid' => null,
        'end_of_day_date' => null,
        'end_of_day_id' => null,
        'amount' => null,
        'trace' => null,
        'receipt_number' => null,
        'product' => null,
        'ref_report_id' => null,
        'ref_report_type' => null,
        'l' => null,
        'k' => null,
        'ks' => null,
        'c' => null,
        's' => null,
        't' => null
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
        'created' => 'created',
        'updated' => 'updated',
        'merchant' => 'merchant',
        'related_transactions' => 'related_transactions',
        'store' => 'store',
        'store_name' => 'store_name',
        'trans_id' => 'trans_id',
        'tid' => 'tid',
        'end_of_day_date' => 'end_of_day_date',
        'end_of_day_id' => 'end_of_day_id',
        'amount' => 'amount',
        'trace' => 'trace',
        'receipt_number' => 'receipt_number',
        'product' => 'product',
        'ref_report_id' => 'ref_report_id',
        'ref_report_type' => 'ref_report_type',
        'l' => 'l',
        'k' => 'k',
        'ks' => 'ks',
        'c' => 'c',
        's' => 's',
        't' => 't'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'merchant' => 'setMerchant',
        'related_transactions' => 'setRelatedTransactions',
        'store' => 'setStore',
        'store_name' => 'setStoreName',
        'trans_id' => 'setTransId',
        'tid' => 'setTid',
        'end_of_day_date' => 'setEndOfDayDate',
        'end_of_day_id' => 'setEndOfDayId',
        'amount' => 'setAmount',
        'trace' => 'setTrace',
        'receipt_number' => 'setReceiptNumber',
        'product' => 'setProduct',
        'ref_report_id' => 'setRefReportId',
        'ref_report_type' => 'setRefReportType',
        'l' => 'setL',
        'k' => 'setK',
        'ks' => 'setKs',
        'c' => 'setC',
        's' => 'setS',
        't' => 'setT'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'merchant' => 'getMerchant',
        'related_transactions' => 'getRelatedTransactions',
        'store' => 'getStore',
        'store_name' => 'getStoreName',
        'trans_id' => 'getTransId',
        'tid' => 'getTid',
        'end_of_day_date' => 'getEndOfDayDate',
        'end_of_day_id' => 'getEndOfDayId',
        'amount' => 'getAmount',
        'trace' => 'getTrace',
        'receipt_number' => 'getReceiptNumber',
        'product' => 'getProduct',
        'ref_report_id' => 'getRefReportId',
        'ref_report_type' => 'getRefReportType',
        'l' => 'getL',
        'k' => 'getK',
        'ks' => 'getKs',
        'c' => 'getC',
        's' => 'getS',
        't' => 'getT'
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

        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['related_transactions'] = isset($data['related_transactions']) ? $data['related_transactions'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['end_of_day_date'] = isset($data['end_of_day_date']) ? $data['end_of_day_date'] : null;
        $this->container['end_of_day_id'] = isset($data['end_of_day_id']) ? $data['end_of_day_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['trace'] = isset($data['trace']) ? $data['trace'] : null;
        $this->container['receipt_number'] = isset($data['receipt_number']) ? $data['receipt_number'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['ref_report_id'] = isset($data['ref_report_id']) ? $data['ref_report_id'] : null;
        $this->container['ref_report_type'] = isset($data['ref_report_type']) ? $data['ref_report_type'] : null;
        $this->container['l'] = isset($data['l']) ? $data['l'] : null;
        $this->container['k'] = isset($data['k']) ? $data['k'] : null;
        $this->container['ks'] = isset($data['ks']) ? $data['ks'] : null;
        $this->container['c'] = isset($data['c']) ? $data['c'] : null;
        $this->container['s'] = isset($data['s']) ? $data['s'] : null;
        $this->container['t'] = isset($data['t']) ? $data['t'] : null;
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
     * Gets updated
     * @return string
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param string $updated updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

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
     * Gets related_transactions
     * @return \Secuconnect\Client\Model\ParentObj[]
     */
    public function getRelatedTransactions()
    {
        return $this->container['related_transactions'];
    }

    /**
     * Sets related_transactions
     * @param \Secuconnect\Client\Model\ParentObj[] $related_transactions Related transactions
     * @return $this
     */
    public function setRelatedTransactions($related_transactions)
    {
        $this->container['related_transactions'] = $related_transactions;

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
     * Gets store_name
     * @return string
     */
    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name
     * @param string $store_name Store name
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

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
     * @param int $trans_id Transaction Number
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
     * @param string $tid TID
     * @return $this
     */
    public function setTid($tid)
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets end_of_day_date
     * @return string
     */
    public function getEndOfDayDate()
    {
        return $this->container['end_of_day_date'];
    }

    /**
     * Sets end_of_day_date
     * @param string $end_of_day_date end_of_day_date
     * @return $this
     */
    public function setEndOfDayDate($end_of_day_date)
    {
        $this->container['end_of_day_date'] = $end_of_day_date;

        return $this;
    }

    /**
     * Gets end_of_day_id
     * @return string
     */
    public function getEndOfDayId()
    {
        return $this->container['end_of_day_id'];
    }

    /**
     * Sets end_of_day_id
     * @param string $end_of_day_id End of day ID
     * @return $this
     */
    public function setEndOfDayId($end_of_day_id)
    {
        $this->container['end_of_day_id'] = $end_of_day_id;

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
     * Gets trace
     * @return int
     */
    public function getTrace()
    {
        return $this->container['trace'];
    }

    /**
     * Sets trace
     * @param int $trace Trace
     * @return $this
     */
    public function setTrace($trace)
    {
        $this->container['trace'] = $trace;

        return $this;
    }

    /**
     * Gets receipt_number
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->container['receipt_number'];
    }

    /**
     * Sets receipt_number
     * @param string $receipt_number Receipt number
     * @return $this
     */
    public function setReceiptNumber($receipt_number)
    {
        $this->container['receipt_number'] = $receipt_number;

        return $this;
    }

    /**
     * Gets product
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     * @param string $product Product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets ref_report_id
     * @return int
     */
    public function getRefReportId()
    {
        return $this->container['ref_report_id'];
    }

    /**
     * Sets ref_report_id
     * @param int $ref_report_id Report ID
     * @return $this
     */
    public function setRefReportId($ref_report_id)
    {
        $this->container['ref_report_id'] = $ref_report_id;

        return $this;
    }

    /**
     * Gets ref_report_type
     * @return int
     */
    public function getRefReportType()
    {
        return $this->container['ref_report_type'];
    }

    /**
     * Sets ref_report_type
     * @param int $ref_report_type Report Type
     * @return $this
     */
    public function setRefReportType($ref_report_type)
    {
        $this->container['ref_report_type'] = $ref_report_type;

        return $this;
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

