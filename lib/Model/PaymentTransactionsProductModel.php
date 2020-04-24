<?php

namespace Secuconnect\Client\Model;

/**
 * PaymentTransactionsProductModel
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentTransactionsProductModel extends BaseProductModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentTransactionsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'platform' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'merchant' => '\Secuconnect\Client\Model\GeneralMerchantsProductModel',
        'store' => '\Secuconnect\Client\Model\GeneralStoresProductModel',
        'trans_id' => 'int',
        'parents' => '\Secuconnect\Client\Model\ParentObj[]',
        'product_id' => 'int',
        'product' => 'string',
        'product_raw' => 'string',
        'zahlungsmittel_id' => 'int',
        'contract_id' => 'int',
        'amount' => 'int',
        'currency' => 'string',
        'created' => 'string',
        'updated' => 'string',
        'status' => 'int',
        'status_text' => 'string',
        'incoming_payment_date' => 'string',
        'details' => '\Secuconnect\Client\Model\PaymentTransactionsProductModelDetails',
        'customer' => '\Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer',
        'tid' => 'string',
        'payment_data' => 'string',
        'store_name' => 'string',
        'payout_date' => 'string',
        'invoice_number' => 'string',
        'transaction_hash' => 'string',
        'reference_id' => 'string',
        'account_owner' => 'string',
        'accrual' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'platform' => null,
        'merchant' => null,
        'store' => null,
        'trans_id' => null,
        'parents' => null,
        'product_id' => null,
        'product' => null,
        'product_raw' => null,
        'zahlungsmittel_id' => null,
        'contract_id' => null,
        'amount' => null,
        'currency' => null,
        'created' => null,
        'updated' => null,
        'status' => null,
        'status_text' => null,
        'incoming_payment_date' => null,
        'details' => null,
        'customer' => null,
        'tid' => null,
        'payment_data' => null,
        'store_name' => null,
        'payout_date' => null,
        'invoice_number' => null,
        'transaction_hash' => null,
        'reference_id' => null,
        'account_owner' => null,
        'accrual' => null
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
        'platform' => 'platform',
        'merchant' => 'merchant',
        'store' => 'store',
        'trans_id' => 'trans_id',
        'parents' => 'parents',
        'product_id' => 'product_id',
        'product' => 'product',
        'product_raw' => 'product_raw',
        'zahlungsmittel_id' => 'zahlungsmittel_id',
        'contract_id' => 'contract_id',
        'amount' => 'amount',
        'currency' => 'currency',
        'created' => 'created',
        'updated' => 'updated',
        'status' => 'status',
        'status_text' => 'status_text',
        'incoming_payment_date' => 'incoming_payment_date',
        'details' => 'details',
        'customer' => 'customer',
        'tid' => 'tid',
        'payment_data' => 'payment_data',
        'store_name' => 'store_name',
        'payout_date' => 'payout_date',
        'invoice_number' => 'invoice_number',
        'transaction_hash' => 'transaction_hash',
        'reference_id' => 'reference_id',
        'account_owner' => 'account_owner',
        'accrual' => 'accrual'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'platform' => 'setPlatform',
        'merchant' => 'setMerchant',
        'store' => 'setStore',
        'trans_id' => 'setTransId',
        'parents' => 'setParents',
        'product_id' => 'setProductId',
        'product' => 'setProduct',
        'product_raw' => 'setProductRaw',
        'zahlungsmittel_id' => 'setZahlungsmittelId',
        'contract_id' => 'setContractId',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'status' => 'setStatus',
        'status_text' => 'setStatusText',
        'incoming_payment_date' => 'setIncomingPaymentDate',
        'details' => 'setDetails',
        'customer' => 'setCustomer',
        'tid' => 'setTid',
        'payment_data' => 'setPaymentData',
        'store_name' => 'setStoreName',
        'payout_date' => 'setPayoutDate',
        'invoice_number' => 'setInvoiceNumber',
        'transaction_hash' => 'setTransactionHash',
        'reference_id' => 'setReferenceId',
        'account_owner' => 'setAccountOwner',
        'accrual' => 'setAccrual'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'platform' => 'getPlatform',
        'merchant' => 'getMerchant',
        'store' => 'getStore',
        'trans_id' => 'getTransId',
        'parents' => 'getParents',
        'product_id' => 'getProductId',
        'product' => 'getProduct',
        'product_raw' => 'getProductRaw',
        'zahlungsmittel_id' => 'getZahlungsmittelId',
        'contract_id' => 'getContractId',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'status' => 'getStatus',
        'status_text' => 'getStatusText',
        'incoming_payment_date' => 'getIncomingPaymentDate',
        'details' => 'getDetails',
        'customer' => 'getCustomer',
        'tid' => 'getTid',
        'payment_data' => 'getPaymentData',
        'store_name' => 'getStoreName',
        'payout_date' => 'getPayoutDate',
        'invoice_number' => 'getInvoiceNumber',
        'transaction_hash' => 'getTransactionHash',
        'reference_id' => 'getReferenceId',
        'account_owner' => 'getAccountOwner',
        'accrual' => 'getAccrual'
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

        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['parents'] = isset($data['parents']) ? $data['parents'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['product_raw'] = isset($data['product_raw']) ? $data['product_raw'] : null;
        $this->container['zahlungsmittel_id'] = isset($data['zahlungsmittel_id']) ? $data['zahlungsmittel_id'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_text'] = isset($data['status_text']) ? $data['status_text'] : null;
        $this->container['incoming_payment_date'] = isset($data['incoming_payment_date']) ? $data['incoming_payment_date'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['payment_data'] = isset($data['payment_data']) ? $data['payment_data'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['payout_date'] = isset($data['payout_date']) ? $data['payout_date'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['transaction_hash'] = isset($data['transaction_hash']) ? $data['transaction_hash'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['account_owner'] = isset($data['account_owner']) ? $data['account_owner'] : null;
        $this->container['accrual'] = isset($data['accrual']) ? $data['accrual'] : null;
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
     * Gets platform
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     * @param \Secuconnect\Client\Model\ProductInstanceUID $platform platform
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

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
     * Gets trans_id
     * @return int
     */
    public function getTransId()
    {
        return $this->container['trans_id'];
    }

    /**
     * Sets trans_id
     * @param int $trans_id Transaction identifier
     * @return $this
     */
    public function setTransId($trans_id)
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets parents
     * @return \Secuconnect\Client\Model\ParentObj[]
     */
    public function getParents()
    {
        return $this->container['parents'];
    }

    /**
     * Sets parents
     * @param \Secuconnect\Client\Model\ParentObj[] $parents Parents
     * @return $this
     */
    public function setParents($parents)
    {
        $this->container['parents'] = $parents;

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
     * @param int $product_id Product identifier
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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
     * @param string $product Product type
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets product_raw
     * @return string
     */
    public function getProductRaw()
    {
        return $this->container['product_raw'];
    }

    /**
     * Sets product_raw
     * @param string $product_raw the name of the payment product
     * @return $this
     */
    public function setProductRaw($product_raw)
    {
        $this->container['product_raw'] = $product_raw;

        return $this;
    }

    /**
     * Gets zahlungsmittel_id
     * @return int
     */
    public function getZahlungsmittelId()
    {
        return $this->container['zahlungsmittel_id'];
    }

    /**
     * Sets zahlungsmittel_id
     * @param int $zahlungsmittel_id The internal id of the stored payment instrument.
     * @return $this
     */
    public function setZahlungsmittelId($zahlungsmittel_id)
    {
        $this->container['zahlungsmittel_id'] = $zahlungsmittel_id;

        return $this;
    }

    /**
     * Gets contract_id
     * @return int
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     * @param int $contract_id Contract identifier
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

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
     * @param int $amount Total amount of payment in cents (or the smallest cash unit of the relevant currency)
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
     * @param string $currency ISO 4217 code of currency, eg EUR for Euro.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * Gets updated
     * @return string
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param string $updated Updated at date
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param int $status Transaction status ID
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_text
     * @return string
     */
    public function getStatusText()
    {
        return $this->container['status_text'];
    }

    /**
     * Sets status_text
     * @param string $status_text Transaction status description
     * @return $this
     */
    public function setStatusText($status_text)
    {
        $this->container['status_text'] = $status_text;

        return $this;
    }

    /**
     * Gets incoming_payment_date
     * @return string
     */
    public function getIncomingPaymentDate()
    {
        return $this->container['incoming_payment_date'];
    }

    /**
     * Sets incoming_payment_date
     * @param string $incoming_payment_date Date when the payment was received
     * @return $this
     */
    public function setIncomingPaymentDate($incoming_payment_date)
    {
        $this->container['incoming_payment_date'] = $incoming_payment_date;

        return $this;
    }

    /**
     * Gets details
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModelDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param \Secuconnect\Client\Model\PaymentTransactionsProductModelDetails $details details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer $customer customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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
     * @param string $tid Terminal-ID
     * @return $this
     */
    public function setTid($tid)
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets payment_data
     * @return string
     */
    public function getPaymentData()
    {
        return $this->container['payment_data'];
    }

    /**
     * Sets payment_data
     * @param string $payment_data Data of the used payment instrument
     * @return $this
     */
    public function setPaymentData($payment_data)
    {
        $this->container['payment_data'] = $payment_data;

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
     * Gets payout_date
     * @return string
     */
    public function getPayoutDate()
    {
        return $this->container['payout_date'];
    }

    /**
     * Sets payout_date
     * @param string $payout_date Date when the payout was created
     * @return $this
     */
    public function setPayoutDate($payout_date)
    {
        $this->container['payout_date'] = $payout_date;

        return $this;
    }

    /**
     * Gets invoice_number
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     * @param string $invoice_number Invoice number (from merchant)
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets transaction_hash
     * @return string
     */
    public function getTransactionHash()
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     * @param string $transaction_hash Payment-ID
     * @return $this
     */
    public function setTransactionHash($transaction_hash)
    {
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     * @param string $reference_id Reference ID
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets account_owner
     * @return string
     */
    public function getAccountOwner()
    {
        return $this->container['account_owner'];
    }

    /**
     * Sets account_owner
     * @param string $account_owner Name of the bank account owner
     * @return $this
     */
    public function setAccountOwner($account_owner)
    {
        $this->container['account_owner'] = $account_owner;

        return $this;
    }

    /**
     * Gets accrual
     * @return bool
     */
    public function getAccrual()
    {
        return $this->container['accrual'];
    }

    /**
     * Sets accrual
     * @param bool $accrual Accrual Flag
     * @return $this
     */
    public function setAccrual($accrual)
    {
        $this->container['accrual'] = $accrual;

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

