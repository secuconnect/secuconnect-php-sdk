<?php

namespace Secuconnect\Client\Model;

/**
 * PaymentPayoutsProductModel
 *
 * @category Class
 * @description PaymentPayoutsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentPayoutsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentPayoutsProductModel';

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
        'store_name' => 'string',
        'merchant' => '\Secuconnect\Client\Model\GeneralMerchantsProductModel',
        'trans_id' => 'int',
        'amount' => 'int',
        'currency' => 'string',
        'date' => 'string',
        'simple_status_id' => 'int',
        'simple_status_description' => 'string',
        'receiver' => 'string',
        'purpose' => 'string',
        'trans_status_id' => 'int',
        'documents' => '\Secuconnect\Client\Model\DocumentLink[]',
        'product_id' => 'int',
        'refund_amount' => 'int',
        'stakeholder_amount' => 'int',
        'claim_amount' => 'int',
        'invoice_amount' => 'int',
        'misc_amount' => 'int',
        'payout_amount' => 'int',
        'transaction_volume' => 'int'
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
        'store_name' => null,
        'merchant' => null,
        'trans_id' => null,
        'amount' => null,
        'currency' => null,
        'date' => null,
        'simple_status_id' => null,
        'simple_status_description' => null,
        'receiver' => null,
        'purpose' => null,
        'trans_status_id' => null,
        'documents' => null,
        'product_id' => null,
        'refund_amount' => null,
        'stakeholder_amount' => null,
        'claim_amount' => null,
        'invoice_amount' => null,
        'misc_amount' => null,
        'payout_amount' => null,
        'transaction_volume' => null
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
        'store_name' => 'store_name',
        'merchant' => 'merchant',
        'trans_id' => 'trans_id',
        'amount' => 'amount',
        'currency' => 'currency',
        'date' => 'date',
        'simple_status_id' => 'simple_status_id',
        'simple_status_description' => 'simple_status_description',
        'receiver' => 'receiver',
        'purpose' => 'purpose',
        'trans_status_id' => 'trans_status_id',
        'documents' => 'documents',
        'product_id' => 'product_id',
        'refund_amount' => 'refund_amount',
        'stakeholder_amount' => 'stakeholder_amount',
        'claim_amount' => 'claim_amount',
        'invoice_amount' => 'invoice_amount',
        'misc_amount' => 'misc_amount',
        'payout_amount' => 'payout_amount',
        'transaction_volume' => 'transaction_volume'
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
        'store_name' => 'setStoreName',
        'merchant' => 'setMerchant',
        'trans_id' => 'setTransId',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'date' => 'setDate',
        'simple_status_id' => 'setSimpleStatusId',
        'simple_status_description' => 'setSimpleStatusDescription',
        'receiver' => 'setReceiver',
        'purpose' => 'setPurpose',
        'trans_status_id' => 'setTransStatusId',
        'documents' => 'setDocuments',
        'product_id' => 'setProductId',
        'refund_amount' => 'setRefundAmount',
        'stakeholder_amount' => 'setStakeholderAmount',
        'claim_amount' => 'setClaimAmount',
        'invoice_amount' => 'setInvoiceAmount',
        'misc_amount' => 'setMiscAmount',
        'payout_amount' => 'setPayoutAmount',
        'transaction_volume' => 'setTransactionVolume'
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
        'store_name' => 'getStoreName',
        'merchant' => 'getMerchant',
        'trans_id' => 'getTransId',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'date' => 'getDate',
        'simple_status_id' => 'getSimpleStatusId',
        'simple_status_description' => 'getSimpleStatusDescription',
        'receiver' => 'getReceiver',
        'purpose' => 'getPurpose',
        'trans_status_id' => 'getTransStatusId',
        'documents' => 'getDocuments',
        'product_id' => 'getProductId',
        'refund_amount' => 'getRefundAmount',
        'stakeholder_amount' => 'getStakeholderAmount',
        'claim_amount' => 'getClaimAmount',
        'invoice_amount' => 'getInvoiceAmount',
        'misc_amount' => 'getMiscAmount',
        'payout_amount' => 'getPayoutAmount',
        'transaction_volume' => 'getTransactionVolume'
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
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['simple_status_id'] = isset($data['simple_status_id']) ? $data['simple_status_id'] : null;
        $this->container['simple_status_description'] = isset($data['simple_status_description']) ? $data['simple_status_description'] : null;
        $this->container['receiver'] = isset($data['receiver']) ? $data['receiver'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['trans_status_id'] = isset($data['trans_status_id']) ? $data['trans_status_id'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['refund_amount'] = isset($data['refund_amount']) ? $data['refund_amount'] : null;
        $this->container['stakeholder_amount'] = isset($data['stakeholder_amount']) ? $data['stakeholder_amount'] : null;
        $this->container['claim_amount'] = isset($data['claim_amount']) ? $data['claim_amount'] : null;
        $this->container['invoice_amount'] = isset($data['invoice_amount']) ? $data['invoice_amount'] : null;
        $this->container['misc_amount'] = isset($data['misc_amount']) ? $data['misc_amount'] : null;
        $this->container['payout_amount'] = isset($data['payout_amount']) ? $data['payout_amount'] : null;
        $this->container['transaction_volume'] = isset($data['transaction_volume']) ? $data['transaction_volume'] : null;
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
     * Gets date
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param string $date date
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets simple_status_id
     * @return int
     */
    public function getSimpleStatusId()
    {
        return $this->container['simple_status_id'];
    }

    /**
     * Sets simple_status_id
     * @param int $simple_status_id Transaction simple-status ID
     * @return $this
     */
    public function setSimpleStatusId($simple_status_id)
    {
        $this->container['simple_status_id'] = $simple_status_id;

        return $this;
    }

    /**
     * Gets simple_status_description
     * @return string
     */
    public function getSimpleStatusDescription()
    {
        return $this->container['simple_status_description'];
    }

    /**
     * Sets simple_status_description
     * @param string $simple_status_description Transaction simple-status description
     * @return $this
     */
    public function setSimpleStatusDescription($simple_status_description)
    {
        $this->container['simple_status_description'] = $simple_status_description;

        return $this;
    }

    /**
     * Gets receiver
     * @return string
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     * @param string $receiver Store name
     * @return $this
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

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
     * @param string $purpose Store name
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets trans_status_id
     * @return int
     */
    public function getTransStatusId()
    {
        return $this->container['trans_status_id'];
    }

    /**
     * Sets trans_status_id
     * @param int $trans_status_id Transaction status ID
     * @return $this
     */
    public function setTransStatusId($trans_status_id)
    {
        $this->container['trans_status_id'] = $trans_status_id;

        return $this;
    }

    /**
     * Gets documents
     * @return \Secuconnect\Client\Model\DocumentLink[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     * @param \Secuconnect\Client\Model\DocumentLink[] $documents documents
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id Payment product ID
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets refund_amount
     * @return int
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     * @param int $refund_amount refund_amount
     * @return $this
     */
    public function setRefundAmount($refund_amount)
    {
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets stakeholder_amount
     * @return int
     */
    public function getStakeholderAmount()
    {
        return $this->container['stakeholder_amount'];
    }

    /**
     * Sets stakeholder_amount
     * @param int $stakeholder_amount stakeholder_amount
     * @return $this
     */
    public function setStakeholderAmount($stakeholder_amount)
    {
        $this->container['stakeholder_amount'] = $stakeholder_amount;

        return $this;
    }

    /**
     * Gets claim_amount
     * @return int
     */
    public function getClaimAmount()
    {
        return $this->container['claim_amount'];
    }

    /**
     * Sets claim_amount
     * @param int $claim_amount claim_amount
     * @return $this
     */
    public function setClaimAmount($claim_amount)
    {
        $this->container['claim_amount'] = $claim_amount;

        return $this;
    }

    /**
     * Gets invoice_amount
     * @return int
     */
    public function getInvoiceAmount()
    {
        return $this->container['invoice_amount'];
    }

    /**
     * Sets invoice_amount
     * @param int $invoice_amount invoice_amount
     * @return $this
     */
    public function setInvoiceAmount($invoice_amount)
    {
        $this->container['invoice_amount'] = $invoice_amount;

        return $this;
    }

    /**
     * Gets misc_amount
     * @return int
     */
    public function getMiscAmount()
    {
        return $this->container['misc_amount'];
    }

    /**
     * Sets misc_amount
     * @param int $misc_amount misc_amount
     * @return $this
     */
    public function setMiscAmount($misc_amount)
    {
        $this->container['misc_amount'] = $misc_amount;

        return $this;
    }

    /**
     * Gets payout_amount
     * @return int
     */
    public function getPayoutAmount()
    {
        return $this->container['payout_amount'];
    }

    /**
     * Sets payout_amount
     * @param int $payout_amount payout_amount
     * @return $this
     */
    public function setPayoutAmount($payout_amount)
    {
        $this->container['payout_amount'] = $payout_amount;

        return $this;
    }

    /**
     * Gets transaction_volume
     * @return int
     */
    public function getTransactionVolume()
    {
        return $this->container['transaction_volume'];
    }

    /**
     * Sets transaction_volume
     * @param int $transaction_volume transaction_volume
     * @return $this
     */
    public function setTransactionVolume($transaction_volume)
    {
        $this->container['transaction_volume'] = $transaction_volume;

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

