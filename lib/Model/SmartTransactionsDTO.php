<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsDTO
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant' => 'string',
        'provider_contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'status' => 'string',
        'transaction_ref' => 'string',
        'merchant_ref' => 'string',
        'basket' => '\Secuconnect\Client\Model\SmartTransactionsBasket',
        'basket_info' => '\Secuconnect\Client\Model\SmartTransactionsBasketInfo',
        'idents' => '\Secuconnect\Client\Model\SmartTransactionsIdent[]',
        'tax_amount' => 'int',
        'tax_rate' => 'int',
        'market' => 'string',
        'cashier' => 'string',
        'product' => 'string',
        'receipt' => '\Secuconnect\Client\Model\SmartTransactionsReceipt[]',
        'receipt_number' => 'int',
        'device_source' => 'string',
        'trans_id' => 'int',
        'contract' => '\Secuconnect\Client\Model\ProductInstanceID',
        'last_visited_page' => 'string',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'shipping_address' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'container' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'checkin' => '\Secuconnect\Client\Model\SmartTransactionsCheckin',
        'payment_method' => 'string',
        'is_demo' => 'bool',
        'intent' => 'string',
        'checkout_links' => '\Secuconnect\Client\Model\SmartTransactionsCheckoutLinks',
        'delivery_options' => 'SmartTransactionsDTODeliveryOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant' => null,
        'provider_contract' => null,
        'status' => null,
        'transaction_ref' => null,
        'merchant_ref' => null,
        'basket' => null,
        'basket_info' => null,
        'idents' => null,
        'tax_amount' => null,
        'tax_rate' => null,
        'market' => null,
        'cashier' => null,
        'product' => null,
        'receipt' => null,
        'receipt_number' => null,
        'device_source' => null,
        'trans_id' => null,
        'contract' => null,
        'last_visited_page' => null,
        'customer' => null,
        'shipping_address' => null,
        'container' => null,
        'checkin' => null,
        'payment_method' => null,
        'is_demo' => null,
        'intent' => null,
        'checkout_links' => null,
        'delivery_options' => null
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
        'merchant' => 'merchant',
        'provider_contract' => 'provider_contract',
        'status' => 'status',
        'transaction_ref' => 'transactionRef',
        'merchant_ref' => 'merchantRef',
        'basket' => 'basket',
        'basket_info' => 'basket_info',
        'idents' => 'idents',
        'tax_amount' => 'tax_amount',
        'tax_rate' => 'tax_rate',
        'market' => 'market',
        'cashier' => 'cashier',
        'product' => 'product',
        'receipt' => 'receipt',
        'receipt_number' => 'receipt_number',
        'device_source' => 'device_source',
        'trans_id' => 'trans_id',
        'contract' => 'contract',
        'last_visited_page' => 'last_visited_page',
        'customer' => 'customer',
        'shipping_address' => 'shipping_address',
        'container' => 'container',
        'checkin' => 'checkin',
        'payment_method' => 'payment_method',
        'is_demo' => 'is_demo',
        'intent' => 'intent',
        'checkout_links' => 'checkout_links',
        'delivery_options' => 'delivery_options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant' => 'setMerchant',
        'provider_contract' => 'setProviderContract',
        'status' => 'setStatus',
        'transaction_ref' => 'setTransactionRef',
        'merchant_ref' => 'setMerchantRef',
        'basket' => 'setBasket',
        'basket_info' => 'setBasketInfo',
        'idents' => 'setIdents',
        'tax_amount' => 'setTaxAmount',
        'tax_rate' => 'setTaxRate',
        'market' => 'setMarket',
        'cashier' => 'setCashier',
        'product' => 'setProduct',
        'receipt' => 'setReceipt',
        'receipt_number' => 'setReceiptNumber',
        'device_source' => 'setDeviceSource',
        'trans_id' => 'setTransId',
        'contract' => 'setContract',
        'last_visited_page' => 'setLastVisitedPage',
        'customer' => 'setCustomer',
        'shipping_address' => 'setShippingAddress',
        'container' => 'setContainer',
        'checkin' => 'setCheckin',
        'payment_method' => 'setPaymentMethod',
        'is_demo' => 'setIsDemo',
        'intent' => 'setIntent',
        'checkout_links' => 'setCheckoutLinks',
        'delivery_options' => 'setDeliveryOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant' => 'getMerchant',
        'provider_contract' => 'getProviderContract',
        'status' => 'getStatus',
        'transaction_ref' => 'getTransactionRef',
        'merchant_ref' => 'getMerchantRef',
        'basket' => 'getBasket',
        'basket_info' => 'getBasketInfo',
        'idents' => 'getIdents',
        'tax_amount' => 'getTaxAmount',
        'tax_rate' => 'getTaxRate',
        'market' => 'getMarket',
        'cashier' => 'getCashier',
        'product' => 'getProduct',
        'receipt' => 'getReceipt',
        'receipt_number' => 'getReceiptNumber',
        'device_source' => 'getDeviceSource',
        'trans_id' => 'getTransId',
        'contract' => 'getContract',
        'last_visited_page' => 'getLastVisitedPage',
        'customer' => 'getCustomer',
        'shipping_address' => 'getShippingAddress',
        'container' => 'getContainer',
        'checkin' => 'getCheckin',
        'payment_method' => 'getPaymentMethod',
        'is_demo' => 'getIsDemo',
        'intent' => 'getIntent',
        'checkout_links' => 'getCheckoutLinks',
        'delivery_options' => 'getDeliveryOptions'
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
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['provider_contract'] = isset($data['provider_contract']) ? $data['provider_contract'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transaction_ref'] = isset($data['transaction_ref']) ? $data['transaction_ref'] : null;
        $this->container['merchant_ref'] = isset($data['merchant_ref']) ? $data['merchant_ref'] : null;
        $this->container['basket'] = isset($data['basket']) ? $data['basket'] : null;
        $this->container['basket_info'] = isset($data['basket_info']) ? $data['basket_info'] : null;
        $this->container['idents'] = isset($data['idents']) ? $data['idents'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['market'] = isset($data['market']) ? $data['market'] : null;
        $this->container['cashier'] = isset($data['cashier']) ? $data['cashier'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['receipt'] = isset($data['receipt']) ? $data['receipt'] : null;
        $this->container['receipt_number'] = isset($data['receipt_number']) ? $data['receipt_number'] : null;
        $this->container['device_source'] = isset($data['device_source']) ? $data['device_source'] : null;
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['last_visited_page'] = isset($data['last_visited_page']) ? $data['last_visited_page'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['container'] = isset($data['container']) ? $data['container'] : null;
        $this->container['checkin'] = isset($data['checkin']) ? $data['checkin'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['is_demo'] = isset($data['is_demo']) ? $data['is_demo'] : null;
        $this->container['intent'] = isset($data['intent']) ? $data['intent'] : null;
        $this->container['checkout_links'] = isset($data['checkout_links']) ? $data['checkout_links'] : null;
        $this->container['delivery_options'] = isset($data['delivery_options']) ? $data['delivery_options'] : null;
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
     * Gets merchant
     * @return string
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param string $merchant Merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

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
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets device_source
     * @return string
     */
    public function getDeviceSource()
    {
        return $this->container['device_source'];
    }

    /**
     * Sets device_source
     * @param string $device_source Device source
     * @return $this
     */
    public function setDeviceSource($device_source)
    {
        $this->container['device_source'] = $device_source;

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
     * Gets contract
     * @return \Secuconnect\Client\Model\ProductInstanceID
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\ProductInstanceID $contract contract
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

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
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getContainer()
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     * @param \Secuconnect\Client\Model\ProductInstanceUID $container container
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
     * Gets intent
     * @return string
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     * @param string $intent
     * @return $this
     */
    public function setIntent($intent)
    {
        $this->container['intent'] = $intent;

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
     * Gets delivery_options
     * @return SmartTransactionsDTODeliveryOptions
     */
    public function getDeliveryOptions()
    {
        return $this->container['delivery_options'];
    }

    /**
     * Sets delivery_options
     * @param SmartTransactionsDTODeliveryOptions $delivery_options SmartTransactionsDTO
     * @return $this
     */
    public function setDeliveryOptions($delivery_options)
    {
        $this->container['delivery_options'] = $delivery_options;

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

