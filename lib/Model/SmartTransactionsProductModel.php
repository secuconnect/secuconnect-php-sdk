<?php

namespace Secuconnect\Client\Model;

/**
 * SmartTransactionsProductModel
 *
 * @category Class
 * @description SmartTransactionsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsProductModel extends BaseProductModel
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
        'l' => 'int',
        'k' => 'int',
        'ks' => 'string',
        'c' => 'int',
        's' => 'int',
        't' => '\Secuconnect\Client\Model\AggregationTimeResult',
        'created' => 'string',
        'updated' => 'string',
        'status' => 'string',
        'merchant' => '\Secuconnect\Client\Model\SmartTransactionsMerchant',
        'contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'provider_contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'shipping_address' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'container' => '\Secuconnect\Client\Model\SmartTransactionsContainer',
        'checkin' => '\Secuconnect\Client\Model\SmartTransactionsCheckin',
        'merchant_ref' => 'string',
        'transaction_ref' => 'string',
        'store' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'device_source' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'device_destination' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'receipt_number' => 'int',
        'receipt' => '\Secuconnect\Client\Model\SmartTransactionsReceipt[]',
        'receipt_merchant' => '\Secuconnect\Client\Model\SmartTransactionsReceipt[]',
        'receipt_merchant_print' => 'bool',
        'basket_info' => '\Secuconnect\Client\Model\SmartTransactionsBasketInfo',
        'basket' => '\Secuconnect\Client\Model\SmartTransactionsBasket',
        'idents' => '\Secuconnect\Client\Model\SmartTransactionsIdent[]',
        'tax_rate' => 'int',
        'tax_amount' => 'int',
        'cashier' => 'string',
        'market' => 'string',
        'delivery_options' => '\Secuconnect\Client\Model\OneOfSmartTransactionsDeliveryOptionsModel',
        'product' => 'string',
        'trans_id' => 'int',
        'payment_method' => 'string',
        'transactions' => '\Secuconnect\Client\Model\PaymentTransactionsProductModel[]',
        'last_visited_page' => 'string',
        'is_demo' => 'bool',
        'checkout_links' => '\Secuconnect\Client\Model\SmartTransactionsCheckoutLinks',
        'intent' => 'string',
        'iframe_url' => 'string',
        'prepaid_sales' => '\Secuconnect\Client\Model\SmartTransactionsPrepaidSalesDetails',
        'communications' => '\Secuconnect\Client\Model\SmartTransactionsCommunication',
        'payment_links' => '\Secuconnect\Client\Model\SmartTransactionsPaymentLinks',
        'application_context' => '\Secuconnect\Client\Model\SmartTransactionsApplicationContext',
        'payment_instructions' => '\Secuconnect\Client\Model\PaymentInstructions',
        'payment_context' => '\Secuconnect\Client\Model\PaymentContext',
        'subscription' => '\Secuconnect\Client\Model\ProductInstanceUID'
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
        'updated' => null,
        'status' => null,
        'merchant' => null,
        'contract' => null,
        'provider_contract' => null,
        'customer' => null,
        'shipping_address' => null,
        'container' => null,
        'checkin' => null,
        'merchant_ref' => null,
        'transaction_ref' => null,
        'store' => null,
        'device_source' => null,
        'device_destination' => null,
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
        'delivery_options' => null,
        'product' => null,
        'trans_id' => null,
        'payment_method' => null,
        'transactions' => null,
        'last_visited_page' => null,
        'is_demo' => null,
        'checkout_links' => null,
        'intent' => null,
        'iframe_url' => null,
        'prepaid_sales' => null,
        'communications' => null,
        'payment_links' => null,
        'application_context' => null,
        'payment_instructions' => null,
        'payment_context' => null,
        'subscription' => null
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
        'updated' => 'updated',
        'status' => 'status',
        'merchant' => 'merchant',
        'contract' => 'contract',
        'provider_contract' => 'provider_contract',
        'customer' => 'customer',
        'shipping_address' => 'shipping_address',
        'container' => 'container',
        'checkin' => 'checkin',
        'merchant_ref' => 'merchantRef',
        'transaction_ref' => 'transactionRef',
        'store' => 'store',
        'device_source' => 'device_source',
        'device_destination' => 'device_destination',
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
        'delivery_options' => 'delivery_options',
        'product' => 'product',
        'trans_id' => 'trans_id',
        'payment_method' => 'payment_method',
        'transactions' => 'transactions',
        'last_visited_page' => 'last_visited_page',
        'is_demo' => 'is_demo',
        'checkout_links' => 'checkout_links',
        'intent' => 'intent',
        'iframe_url' => 'iframe_url',
        'prepaid_sales' => 'prepaid_sales',
        'communications' => 'communications',
        'payment_links' => 'payment_links',
        'application_context' => 'application_context',
        'payment_instructions' => 'payment_instructions',
        'payment_context' => 'payment_context',
        'subscription' => 'subscription'
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
        'updated' => 'setUpdated',
        'status' => 'setStatus',
        'merchant' => 'setMerchant',
        'contract' => 'setContract',
        'provider_contract' => 'setProviderContract',
        'customer' => 'setCustomer',
        'shipping_address' => 'setShippingAddress',
        'container' => 'setContainer',
        'checkin' => 'setCheckin',
        'merchant_ref' => 'setMerchantRef',
        'transaction_ref' => 'setTransactionRef',
        'store' => 'setStore',
        'device_source' => 'setDeviceSource',
        'device_destination' => 'setDeviceDestination',
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
        'delivery_options' => 'setDeliveryOptions',
        'product' => 'setProduct',
        'trans_id' => 'setTransId',
        'payment_method' => 'setPaymentMethod',
        'transactions' => 'setTransactions',
        'last_visited_page' => 'setLastVisitedPage',
        'is_demo' => 'setIsDemo',
        'checkout_links' => 'setCheckoutLinks',
        'intent' => 'setIntent',
        'iframe_url' => 'setIframeUrl',
        'prepaid_sales' => 'setPrepaidSales',
        'communications' => 'setCommunications',
        'payment_links' => 'setPaymentLinks',
        'application_context' => 'setApplicationContext',
        'payment_instructions' => 'setPaymentInstructions',
        'payment_context' => 'setPaymentContext',
        'subscription' => 'setSubscription'
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
        'updated' => 'getUpdated',
        'status' => 'getStatus',
        'merchant' => 'getMerchant',
        'contract' => 'getContract',
        'provider_contract' => 'getProviderContract',
        'customer' => 'getCustomer',
        'shipping_address' => 'getShippingAddress',
        'container' => 'getContainer',
        'checkin' => 'getCheckin',
        'merchant_ref' => 'getMerchantRef',
        'transaction_ref' => 'getTransactionRef',
        'store' => 'getStore',
        'device_source' => 'getDeviceSource',
        'device_destination' => 'getDeviceDestination',
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
        'delivery_options' => 'getDeliveryOptions',
        'product' => 'getProduct',
        'trans_id' => 'getTransId',
        'payment_method' => 'getPaymentMethod',
        'transactions' => 'getTransactions',
        'last_visited_page' => 'getLastVisitedPage',
        'is_demo' => 'getIsDemo',
        'checkout_links' => 'getCheckoutLinks',
        'intent' => 'getIntent',
        'iframe_url' => 'getIframeUrl',
        'prepaid_sales' => 'getPrepaidSales',
        'communications' => 'getCommunications',
        'payment_links' => 'getPaymentLinks',
        'application_context' => 'getApplicationContext',
        'payment_instructions' => 'getPaymentInstructions',
        'payment_context' => 'getPaymentContext',
        'subscription' => 'getSubscription'
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
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['provider_contract'] = isset($data['provider_contract']) ? $data['provider_contract'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['container'] = isset($data['container']) ? $data['container'] : null;
        $this->container['checkin'] = isset($data['checkin']) ? $data['checkin'] : null;
        $this->container['merchant_ref'] = isset($data['merchant_ref']) ? $data['merchant_ref'] : null;
        $this->container['transaction_ref'] = isset($data['transaction_ref']) ? $data['transaction_ref'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['device_source'] = isset($data['device_source']) ? $data['device_source'] : null;
        $this->container['device_destination'] = isset($data['device_destination']) ? $data['device_destination'] : null;
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
        $this->container['delivery_options'] = isset($data['delivery_options']) ? $data['delivery_options'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['last_visited_page'] = isset($data['last_visited_page']) ? $data['last_visited_page'] : null;
        $this->container['is_demo'] = isset($data['is_demo']) ? $data['is_demo'] : null;
        $this->container['checkout_links'] = isset($data['checkout_links']) ? $data['checkout_links'] : null;
        $this->container['intent'] = isset($data['intent']) ? $data['intent'] : null;
        $this->container['iframe_url'] = isset($data['iframe_url']) ? $data['iframe_url'] : null;
        $this->container['prepaid_sales'] = isset($data['prepaid_sales']) ? $data['prepaid_sales'] : null;
        $this->container['communications'] = isset($data['communications']) ? $data['communications'] : null;
        $this->container['payment_links'] = isset($data['payment_links']) ? $data['payment_links'] : null;
        $this->container['application_context'] = isset($data['application_context']) ? $data['application_context'] : null;
        $this->container['payment_instructions'] = isset($data['payment_instructions']) ? $data['payment_instructions'] : null;
        $this->container['payment_context'] = isset($data['payment_context']) ? $data['payment_context'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
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
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the Smart Transaction
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
     * @param \Secuconnect\Client\Model\SmartTransactionsMerchant $merchant merchant
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
     * @param \Secuconnect\Client\Model\ProductInstanceUID $contract contract
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets provider_contract
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getProviderContract()
    {
        return $this->container['provider_contract'];
    }

    /**
     * Sets provider_contract
     * @param \Secuconnect\Client\Model\ProductInstanceUID $provider_contract provider_contract
     * @return $this
     */
    public function setProviderContract($provider_contract)
    {
        $this->container['provider_contract'] = $provider_contract;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\PaymentCustomersProductModel $customer customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets shipping_address
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     * @param \Secuconnect\Client\Model\PaymentCustomersProductModel $shipping_address shipping_address
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets container
     * @return \Secuconnect\Client\Model\SmartTransactionsContainer
     */
    public function getContainer()
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     * @param \Secuconnect\Client\Model\SmartTransactionsContainer $container container
     * @return $this
     */
    public function setContainer($container)
    {
        $this->container['container'] = $container;

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
     * @param \Secuconnect\Client\Model\SmartTransactionsCheckin $checkin checkin
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
     * @param string $merchant_ref Merchant reference, e.g. merchant customer ID
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
     * @param string $transaction_ref Merchant reference, e.g. merchant customer ID
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
     * @param \Secuconnect\Client\Model\ProductInstanceUID $store store
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
     * @param \Secuconnect\Client\Model\ProductInstanceUID $device_source device_source
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
     * @param \Secuconnect\Client\Model\ProductInstanceUID $device_destination device_destination
     * @return $this
     */
    public function setDeviceDestination($device_destination)
    {
        $this->container['device_destination'] = $device_destination;

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
     * @param \Secuconnect\Client\Model\SmartTransactionsReceipt[] $receipt Receipt for both, the customer and the merchant
     * @return $this
     */
    public function setReceipt($receipt)
    {
        $this->container['receipt'] = $receipt;

        return $this;
    }

    /**
     * Gets receipt_merchant
     * @return \Secuconnect\Client\Model\SmartTransactionsReceipt[]
     */
    public function getReceiptMerchant()
    {
        return $this->container['receipt_merchant'];
    }

    /**
     * Sets receipt_merchant
     * @param \Secuconnect\Client\Model\SmartTransactionsReceipt[] $receipt_merchant Receipt for the merchant
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
     * @param bool $receipt_merchant_print Whether the receipt for the merchant was printed
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
     * @param \Secuconnect\Client\Model\SmartTransactionsBasketInfo $basket_info basket_info
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
     * @param \Secuconnect\Client\Model\SmartTransactionsBasket $basket basket
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
     * @param \Secuconnect\Client\Model\SmartTransactionsIdent[] $idents secucard customer card or voucher, or request to create it
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
     * @param int $tax_rate tax_rate
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
     * @param int $tax_amount tax_amount
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
     * Gets delivery_options
     * @return \Secuconnect\Client\Model\OneOfSmartTransactionsDeliveryOptionsModel
     */
    public function getDeliveryOptions()
    {
        return $this->container['delivery_options'];
    }

    /**
     * Sets delivery_options
     * @param \Secuconnect\Client\Model\OneOfSmartTransactionsDeliveryOptionsModel $delivery_options delivery_options
     * @return $this
     */
    public function setDeliveryOptions($delivery_options)
    {
        $this->container['delivery_options'] = $delivery_options;

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
     * @param int $trans_id Transaction ID (TA code)
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
     * @param string $payment_method Payment method, as passed with `/prepare/{method}` or `/start/{method}`
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets transactions
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     * @param \Secuconnect\Client\Model\PaymentTransactionsProductModel[] $transactions Payment Transactions
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
     * Gets is_demo
     * @return bool
     */
    public function getIsDemo()
    {
        return $this->container['is_demo'];
    }

    /**
     * Sets is_demo
     * @param bool $is_demo Demo payment
     * @return $this
     */
    public function setIsDemo($is_demo)
    {
        $this->container['is_demo'] = $is_demo;

        return $this;
    }

    /**
     * Gets checkout_links
     * @return \Secuconnect\Client\Model\SmartTransactionsCheckoutLinks
     */
    public function getCheckoutLinks()
    {
        return $this->container['checkout_links'];
    }

    /**
     * Sets checkout_links
     * @param \Secuconnect\Client\Model\SmartTransactionsCheckoutLinks $checkout_links checkout_links
     * @return $this
     */
    public function setCheckoutLinks($checkout_links)
    {
        $this->container['checkout_links'] = $checkout_links;

        return $this;
    }

    /**
     * Gets intent
     * @return string
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     * @param string $intent Intent:  - `\"sale\"` - `\"order\"`
     * @return $this
     */
    public function setIntent($intent)
    {
        $this->container['intent'] = $intent;

        return $this;
    }

    /**
     * Gets iframe_url
     * @return string
     */
    public function getIframeUrl()
    {
        return $this->container['iframe_url'];
    }

    /**
     * Sets iframe_url
     * @param string $iframe_url URL for external authorization (credit with card 3-D Secure, PayPal, Sofort, etc.)
     * @return $this
     */
    public function setIframeUrl($iframe_url)
    {
        $this->container['iframe_url'] = $iframe_url;

        return $this;
    }

    /**
     * Gets prepaid_sales
     * @return \Secuconnect\Client\Model\SmartTransactionsPrepaidSalesDetails
     */
    public function getPrepaidSales()
    {
        return $this->container['prepaid_sales'];
    }

    /**
     * Sets prepaid_sales
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepaidSalesDetails $prepaid_sales prepaid_sales
     * @return $this
     */
    public function setPrepaidSales($prepaid_sales)
    {
        $this->container['prepaid_sales'] = $prepaid_sales;

        return $this;
    }

    /**
     * Gets communications
     * @return \Secuconnect\Client\Model\SmartTransactionsCommunication
     */
    public function getCommunications()
    {
        return $this->container['communications'];
    }

    /**
     * Sets communications
     * @param \Secuconnect\Client\Model\SmartTransactionsCommunication $communications communications
     * @return $this
     */
    public function setCommunications($communications)
    {
        $this->container['communications'] = $communications;

        return $this;
    }

    /**
     * Gets payment_links
     * @return \Secuconnect\Client\Model\SmartTransactionsPaymentLinks
     */
    public function getPaymentLinks()
    {
        return $this->container['payment_links'];
    }

    /**
     * Sets payment_links
     * @param \Secuconnect\Client\Model\SmartTransactionsPaymentLinks $payment_links payment_links
     * @return $this
     */
    public function setPaymentLinks($payment_links)
    {
        $this->container['payment_links'] = $payment_links;

        return $this;
    }

    /**
     * Gets application_context
     * @return \Secuconnect\Client\Model\SmartTransactionsApplicationContext
     */
    public function getApplicationContext()
    {
        return $this->container['application_context'];
    }

    /**
     * Sets application_context
     * @param \Secuconnect\Client\Model\SmartTransactionsApplicationContext $application_context application_context
     * @return $this
     */
    public function setApplicationContext($application_context)
    {
        $this->container['application_context'] = $application_context;

        return $this;
    }

    /**
     * Gets payment_instructions
     * @return \Secuconnect\Client\Model\PaymentInstructions
     */
    public function getPaymentInstructions()
    {
        return $this->container['payment_instructions'];
    }

    /**
     * Sets payment_instructions
     * @param \Secuconnect\Client\Model\PaymentInstructions $payment_instructions payment_instructions
     * @return $this
     */
    public function setPaymentInstructions($payment_instructions)
    {
        $this->container['payment_instructions'] = $payment_instructions;

        return $this;
    }

    /**
     * Gets payment_context
     * @return \Secuconnect\Client\Model\PaymentContext
     */
    public function getPaymentContext()
    {
        return $this->container['payment_context'];
    }

    /**
     * Sets payment_context
     * @param \Secuconnect\Client\Model\PaymentContext $payment_context payment_context
     * @return $this
     */
    public function setPaymentContext($payment_context)
    {
        $this->container['payment_context'] = $payment_context;

        return $this;
    }

    /**
     * Gets subscription
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     * @param \Secuconnect\Client\Model\ProductInstanceUID $subscription subscription
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

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

