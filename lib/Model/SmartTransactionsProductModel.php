<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsProductModel
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsProductModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'id' => 'string',
        'status' => 'string',
        'merchant' => '\Secuconnect\Client\Model\SmartTransactionsMerchant',
        'contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'marketplace_contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'customer' => '\Secuconnect\Client\Model\LoyaltyCustomersProductModel',
        'checkin' => '\Secuconnect\Client\Model\SmartTransactionsCheckin',
        'merchant_ref' => 'string',
        'transaction_ref' => 'string',
        'store' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'device_source' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'device_destination' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'created' => 'string',
        'updated' => 'string',
        'receipt_number' => 'int',
        'receipt' => '\Secuconnect\Client\Model\SmartTransactionsReceipt[]',
        'receipt_merchant' => 'string',
        'receipt_merchant_print' => 'bool',
        'basket_info' => '\Secuconnect\Client\Model\SmartTransactionsBasketInfo',
        'basket' => '\Secuconnect\Client\Model\SmartTransactionsBasket',
        'idents' => '\Secuconnect\Client\Model\SmartTransactionsIdent[]',
        'tax_rate' => 'int',
        'tax_amount' => 'int',
        'cashier' => 'string',
        'market' => 'string',
        'order_option' => 'string',
        'pickup_options' => '\Secuconnect\Client\Model\SmartTransactionsPickupOptions',
        'product' => 'string',
        'trans_id' => 'int',
        'payment_method' => 'string',
        'transactions' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'last_visited_page' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => 'id',
        'status' => null,
        'merchant' => null,
        'contract' => null,
        'marketplace_contract' => null,
        'customer' => null,
        'checkin' => null,
        'merchant_ref' => null,
        'transaction_ref' => null,
        'store' => null,
        'device_source' => null,
        'device_destination' => null,
        'created' => null,
        'updated' => null,
        'receipt_number' => null,
        'receipt' => null,
        'receipt_merchant' => null,
        'receipt_merchant_print' => null,
        'basket_info' => null,
        'basket' => null,
        'idents' => null,
        'tax_rate' => null,
        'tax_amount' => null,
        'cashier' => null,
        'market' => null,
        'order_option' => null,
        'pickup_options' => null,
        'product' => null,
        'trans_id' => null,
        'payment_method' => null,
        'transactions' => null,
        'last_visited_page' => null
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
        'status' => 'status',
        'merchant' => 'merchant',
        'contract' => 'contract',
        'marketplace_contract' => 'marketplace_contract',
        'customer' => 'customer',
        'checkin' => 'checkin',
        'merchant_ref' => 'merchantRef',
        'transaction_ref' => 'transactionRef',
        'store' => 'store',
        'device_source' => 'device_source',
        'device_destination' => 'device_destination',
        'created' => 'created',
        'updated' => 'updated',
        'receipt_number' => 'receipt_number',
        'receipt' => 'receipt',
        'receipt_merchant' => 'receipt_merchant',
        'receipt_merchant_print' => 'receipt_merchant_print',
        'basket_info' => 'basket_info',
        'basket' => 'basket',
        'idents' => 'idents',
        'tax_rate' => 'tax_rate',
        'tax_amount' => 'tax_amount',
        'cashier' => 'cashier',
        'market' => 'market',
        'order_option' => 'order_option',
        'pickup_options' => 'pickup_options',
        'product' => 'product',
        'trans_id' => 'trans_id',
        'payment_method' => 'payment_method',
        'transactions' => 'transactions',
        'last_visited_page' => 'last_visited_page'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'status' => 'setStatus',
        'merchant' => 'setMerchant',
        'contract' => 'setContract',
        'marketplace_contract' => 'setMarketplaceContract',
        'customer' => 'setCustomer',
        'checkin' => 'setCheckin',
        'merchant_ref' => 'setMerchantRef',
        'transaction_ref' => 'setTransactionRef',
        'store' => 'setStore',
        'device_source' => 'setDeviceSource',
        'device_destination' => 'setDeviceDestination',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'receipt_number' => 'setReceiptNumber',
        'receipt' => 'setReceipt',
        'receipt_merchant' => 'setReceiptMerchant',
        'receipt_merchant_print' => 'setReceiptMerchantPrint',
        'basket_info' => 'setBasketInfo',
        'basket' => 'setBasket',
        'idents' => 'setIdents',
        'tax_rate' => 'setTaxRate',
        'tax_amount' => 'setTaxAmount',
        'cashier' => 'setCashier',
        'market' => 'setMarket',
        'order_option' => 'setOrderOption',
        'pickup_options' => 'setPickupOptions',
        'product' => 'setProduct',
        'trans_id' => 'setTransId',
        'payment_method' => 'setPaymentMethod',
        'transactions' => 'setTransactions',
        'last_visited_page' => 'setLastVisitedPage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'status' => 'getStatus',
        'merchant' => 'getMerchant',
        'contract' => 'getContract',
        'marketplace_contract' => 'getMarketplaceContract',
        'customer' => 'getCustomer',
        'checkin' => 'getCheckin',
        'merchant_ref' => 'getMerchantRef',
        'transaction_ref' => 'getTransactionRef',
        'store' => 'getStore',
        'device_source' => 'getDeviceSource',
        'device_destination' => 'getDeviceDestination',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'receipt_number' => 'getReceiptNumber',
        'receipt' => 'getReceipt',
        'receipt_merchant' => 'getReceiptMerchant',
        'receipt_merchant_print' => 'getReceiptMerchantPrint',
        'basket_info' => 'getBasketInfo',
        'basket' => 'getBasket',
        'idents' => 'getIdents',
        'tax_rate' => 'getTaxRate',
        'tax_amount' => 'getTaxAmount',
        'cashier' => 'getCashier',
        'market' => 'getMarket',
        'order_option' => 'getOrderOption',
        'pickup_options' => 'getPickupOptions',
        'product' => 'getProduct',
        'trans_id' => 'getTransId',
        'payment_method' => 'getPaymentMethod',
        'transactions' => 'getTransactions',
        'last_visited_page' => 'getLastVisitedPage'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['marketplace_contract'] = isset($data['marketplace_contract']) ? $data['marketplace_contract'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['checkin'] = isset($data['checkin']) ? $data['checkin'] : null;
        $this->container['merchant_ref'] = isset($data['merchant_ref']) ? $data['merchant_ref'] : null;
        $this->container['transaction_ref'] = isset($data['transaction_ref']) ? $data['transaction_ref'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['device_source'] = isset($data['device_source']) ? $data['device_source'] : null;
        $this->container['device_destination'] = isset($data['device_destination']) ? $data['device_destination'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['receipt_number'] = isset($data['receipt_number']) ? $data['receipt_number'] : null;
        $this->container['receipt'] = isset($data['receipt']) ? $data['receipt'] : null;
        $this->container['receipt_merchant'] = isset($data['receipt_merchant']) ? $data['receipt_merchant'] : null;
        $this->container['receipt_merchant_print'] = isset($data['receipt_merchant_print']) ? $data['receipt_merchant_print'] : null;
        $this->container['basket_info'] = isset($data['basket_info']) ? $data['basket_info'] : null;
        $this->container['basket'] = isset($data['basket']) ? $data['basket'] : null;
        $this->container['idents'] = isset($data['idents']) ? $data['idents'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['cashier'] = isset($data['cashier']) ? $data['cashier'] : null;
        $this->container['market'] = isset($data['market']) ? $data['market'] : null;
        $this->container['order_option'] = isset($data['order_option']) ? $data['order_option'] : null;
        $this->container['pickup_options'] = isset($data['pickup_options']) ? $data['pickup_options'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['last_visited_page'] = isset($data['last_visited_page']) ? $data['last_visited_page'] : null;
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
     * @param string $object Object of smart transaction
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
     * @param string $id Id of smart transaction
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $status Status of smart transaction
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\SmartTransactionsMerchant
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\SmartTransactionsMerchant $merchant Merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets contract
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\ProductInstanceUID $contract Contract
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets marketplace_contract
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getMarketplaceContract()
    {
        return $this->container['marketplace_contract'];
    }

    /**
     * Sets marketplace_contract
     * @param \Secuconnect\Client\Model\ProductInstanceUID $marketplace_contract Marketplace contract
     * @return $this
     */
    public function setMarketplaceContract($marketplace_contract)
    {
        $this->container['marketplace_contract'] = $marketplace_contract;

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
     * @param \Secuconnect\Client\Model\LoyaltyCustomersProductModel $customer Customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets checkin
     * @return \Secuconnect\Client\Model\SmartTransactionsCheckin
     */
    public function getCheckin()
    {
        return $this->container['checkin'];
    }

    /**
     * Sets checkin
     * @param \Secuconnect\Client\Model\SmartTransactionsCheckin $checkin Check in
     * @return $this
     */
    public function setCheckin($checkin)
    {
        $this->container['checkin'] = $checkin;

        return $this;
    }

    /**
     * Gets merchant_ref
     * @return string
     */
    public function getMerchantRef()
    {
        return $this->container['merchant_ref'];
    }

    /**
     * Sets merchant_ref
     * @param string $merchant_ref Merchant ref
     * @return $this
     */
    public function setMerchantRef($merchant_ref)
    {
        $this->container['merchant_ref'] = $merchant_ref;

        return $this;
    }

    /**
     * Gets transaction_ref
     * @return string
     */
    public function getTransactionRef()
    {
        return $this->container['transaction_ref'];
    }

    /**
     * Sets transaction_ref
     * @param string $transaction_ref Transaction ref
     * @return $this
     */
    public function setTransactionRef($transaction_ref)
    {
        $this->container['transaction_ref'] = $transaction_ref;

        return $this;
    }

    /**
     * Gets store
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\ProductInstanceUID $store Store
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets device_source
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getDeviceSource()
    {
        return $this->container['device_source'];
    }

    /**
     * Sets device_source
     * @param \Secuconnect\Client\Model\ProductInstanceUID $device_source Device source
     * @return $this
     */
    public function setDeviceSource($device_source)
    {
        $this->container['device_source'] = $device_source;

        return $this;
    }

    /**
     * Gets device_destination
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getDeviceDestination()
    {
        return $this->container['device_destination'];
    }

    /**
     * Sets device_destination
     * @param \Secuconnect\Client\Model\ProductInstanceUID $device_destination Device destination
     * @return $this
     */
    public function setDeviceDestination($device_destination)
    {
        $this->container['device_destination'] = $device_destination;

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
     * Gets receipt_number
     * @return int
     */
    public function getReceiptNumber()
    {
        return $this->container['receipt_number'];
    }

    /**
     * Sets receipt_number
     * @param int $receipt_number Receipt number
     * @return $this
     */
    public function setReceiptNumber($receipt_number)
    {
        $this->container['receipt_number'] = $receipt_number;

        return $this;
    }

    /**
     * Gets receipt
     * @return \Secuconnect\Client\Model\SmartTransactionsReceipt[]
     */
    public function getReceipt()
    {
        return $this->container['receipt'];
    }

    /**
     * Sets receipt
     * @param \Secuconnect\Client\Model\SmartTransactionsReceipt[] $receipt Receipt
     * @return $this
     */
    public function setReceipt($receipt)
    {
        $this->container['receipt'] = $receipt;

        return $this;
    }

    /**
     * Gets receipt_merchant
     * @return string
     */
    public function getReceiptMerchant()
    {
        return $this->container['receipt_merchant'];
    }

    /**
     * Sets receipt_merchant
     * @param string $receipt_merchant Receipt merchant
     * @return $this
     */
    public function setReceiptMerchant($receipt_merchant)
    {
        $this->container['receipt_merchant'] = $receipt_merchant;

        return $this;
    }

    /**
     * Gets receipt_merchant_print
     * @return bool
     */
    public function getReceiptMerchantPrint()
    {
        return $this->container['receipt_merchant_print'];
    }

    /**
     * Sets receipt_merchant_print
     * @param bool $receipt_merchant_print Receipt merchant print
     * @return $this
     */
    public function setReceiptMerchantPrint($receipt_merchant_print)
    {
        $this->container['receipt_merchant_print'] = $receipt_merchant_print;

        return $this;
    }

    /**
     * Gets basket_info
     * @return \Secuconnect\Client\Model\SmartTransactionsBasketInfo
     */
    public function getBasketInfo()
    {
        return $this->container['basket_info'];
    }

    /**
     * Sets basket_info
     * @param \Secuconnect\Client\Model\SmartTransactionsBasketInfo $basket_info Basket info
     * @return $this
     */
    public function setBasketInfo($basket_info)
    {
        $this->container['basket_info'] = $basket_info;

        return $this;
    }

    /**
     * Gets basket
     * @return \Secuconnect\Client\Model\SmartTransactionsBasket
     */
    public function getBasket()
    {
        return $this->container['basket'];
    }

    /**
     * Sets basket
     * @param \Secuconnect\Client\Model\SmartTransactionsBasket $basket Basket
     * @return $this
     */
    public function setBasket($basket)
    {
        $this->container['basket'] = $basket;

        return $this;
    }

    /**
     * Gets idents
     * @return \Secuconnect\Client\Model\SmartTransactionsIdent[]
     */
    public function getIdents()
    {
        return $this->container['idents'];
    }

    /**
     * Sets idents
     * @param \Secuconnect\Client\Model\SmartTransactionsIdent[] $idents Idents
     * @return $this
     */
    public function setIdents($idents)
    {
        $this->container['idents'] = $idents;

        return $this;
    }

    /**
     * Gets tax_rate
     * @return int
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     * @param int $tax_rate Tax rate
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_amount
     * @return int
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     * @param int $tax_amount Tax amount
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets cashier
     * @return string
     */
    public function getCashier()
    {
        return $this->container['cashier'];
    }

    /**
     * Sets cashier
     * @param string $cashier Cashier
     * @return $this
     */
    public function setCashier($cashier)
    {
        $this->container['cashier'] = $cashier;

        return $this;
    }

    /**
     * Gets market
     * @return string
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     * @param string $market Market
     * @return $this
     */
    public function setMarket($market)
    {
        $this->container['market'] = $market;

        return $this;
    }

    /**
     * Gets order_option
     * @return string
     */
    public function getOrderOption()
    {
        return $this->container['order_option'];
    }

    /**
     * Sets order_option
     * @param string $order_option Order option
     * @return $this
     */
    public function setOrderOption($order_option)
    {
        $this->container['order_option'] = $order_option;

        return $this;
    }

    /**
     * Gets pickup_options
     * @return \Secuconnect\Client\Model\SmartTransactionsPickupOptions
     */
    public function getPickupOptions()
    {
        return $this->container['pickup_options'];
    }

    /**
     * Sets pickup_options
     * @param \Secuconnect\Client\Model\SmartTransactionsPickupOptions $pickup_options Pickup options
     * @return $this
     */
    public function setPickupOptions($pickup_options)
    {
        $this->container['pickup_options'] = $pickup_options;

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
     * Gets trans_id
     * @return int
     */
    public function getTransId()
    {
        return $this->container['trans_id'];
    }

    /**
     * Sets trans_id
     * @param int $trans_id Transaction id
     * @return $this
     */
    public function setTransId($trans_id)
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets payment_method
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     * @param string $payment_method Payment method
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets transactions
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     * @param \Secuconnect\Client\Model\ProductInstanceUID $transactions Transactions
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets last_visited_page
     * @return string
     */
    public function getLastVisitedPage()
    {
        return $this->container['last_visited_page'];
    }

    /**
     * Sets last_visited_page
     * @param string $last_visited_page Last visited page
     * @return $this
     */
    public function setLastVisitedPage($last_visited_page)
    {
        $this->container['last_visited_page'] = $last_visited_page;

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


