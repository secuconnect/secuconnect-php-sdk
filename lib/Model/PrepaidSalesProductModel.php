<?php

namespace Secuconnect\Client\Model;

/**
 * PrepaidSalesProductModel
 *
 * @category Class
 * @description PrepaidSalesProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrepaidSalesProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PrepaidSalesProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'string',
        'status' => 'string',
        'stock' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'item' => '\Secuconnect\Client\Model\PrepaidSalesItem',
        'itemgroup' => '\Secuconnect\Client\Model\ItemGroup',
        'smart_device' => '\Secuconnect\Client\Model\PrepaidSalesSmartDevice',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'store' => '\Secuconnect\Client\Model\Store',
        'contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'demo' => 'bool',
        'description' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'commission' => 'int',
        'commission_currency' => 'string',
        'code' => 'string',
        'serial' => 'string',
        'cardnumber' => 'string',
        'expire_date' => 'string',
        'provider_delivery_number' => 'string',
        'receipt_header' => 'string',
        'receipt_customer' => 'string',
        'receipt_zvt' => 'string',
        'receipt_dealer' => 'string',
        'vtc_tid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => null,
        'status' => null,
        'stock' => null,
        'item' => null,
        'itemgroup' => null,
        'smart_device' => null,
        'merchant' => null,
        'store' => null,
        'contract' => null,
        'demo' => null,
        'description' => null,
        'amount' => null,
        'currency' => null,
        'commission' => null,
        'commission_currency' => null,
        'code' => null,
        'serial' => null,
        'cardnumber' => null,
        'expire_date' => null,
        'provider_delivery_number' => null,
        'receipt_header' => null,
        'receipt_customer' => null,
        'receipt_zvt' => null,
        'receipt_dealer' => null,
        'vtc_tid' => null
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
        'status' => 'status',
        'stock' => 'stock',
        'item' => 'item',
        'itemgroup' => 'itemgroup',
        'smart_device' => 'smart_device',
        'merchant' => 'merchant',
        'store' => 'store',
        'contract' => 'contract',
        'demo' => 'demo',
        'description' => 'description',
        'amount' => 'amount',
        'currency' => 'currency',
        'commission' => 'commission',
        'commission_currency' => 'commission_currency',
        'code' => 'code',
        'serial' => 'serial',
        'cardnumber' => 'cardnumber',
        'expire_date' => 'expire_date',
        'provider_delivery_number' => 'provider_delivery_number',
        'receipt_header' => 'receipt_header',
        'receipt_customer' => 'receipt_customer',
        'receipt_zvt' => 'receipt_zvt',
        'receipt_dealer' => 'receipt_dealer',
        'vtc_tid' => 'vtc_tid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'status' => 'setStatus',
        'stock' => 'setStock',
        'item' => 'setItem',
        'itemgroup' => 'setItemgroup',
        'smart_device' => 'setSmartDevice',
        'merchant' => 'setMerchant',
        'store' => 'setStore',
        'contract' => 'setContract',
        'demo' => 'setDemo',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'commission' => 'setCommission',
        'commission_currency' => 'setCommissionCurrency',
        'code' => 'setCode',
        'serial' => 'setSerial',
        'cardnumber' => 'setCardnumber',
        'expire_date' => 'setExpireDate',
        'provider_delivery_number' => 'setProviderDeliveryNumber',
        'receipt_header' => 'setReceiptHeader',
        'receipt_customer' => 'setReceiptCustomer',
        'receipt_zvt' => 'setReceiptZvt',
        'receipt_dealer' => 'setReceiptDealer',
        'vtc_tid' => 'setVtcTid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'status' => 'getStatus',
        'stock' => 'getStock',
        'item' => 'getItem',
        'itemgroup' => 'getItemgroup',
        'smart_device' => 'getSmartDevice',
        'merchant' => 'getMerchant',
        'store' => 'getStore',
        'contract' => 'getContract',
        'demo' => 'getDemo',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'commission' => 'getCommission',
        'commission_currency' => 'getCommissionCurrency',
        'code' => 'getCode',
        'serial' => 'getSerial',
        'cardnumber' => 'getCardnumber',
        'expire_date' => 'getExpireDate',
        'provider_delivery_number' => 'getProviderDeliveryNumber',
        'receipt_header' => 'getReceiptHeader',
        'receipt_customer' => 'getReceiptCustomer',
        'receipt_zvt' => 'getReceiptZvt',
        'receipt_dealer' => 'getReceiptDealer',
        'vtc_tid' => 'getVtcTid'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['itemgroup'] = isset($data['itemgroup']) ? $data['itemgroup'] : null;
        $this->container['smart_device'] = isset($data['smart_device']) ? $data['smart_device'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['demo'] = isset($data['demo']) ? $data['demo'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
        $this->container['commission_currency'] = isset($data['commission_currency']) ? $data['commission_currency'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['serial'] = isset($data['serial']) ? $data['serial'] : null;
        $this->container['cardnumber'] = isset($data['cardnumber']) ? $data['cardnumber'] : null;
        $this->container['expire_date'] = isset($data['expire_date']) ? $data['expire_date'] : null;
        $this->container['provider_delivery_number'] = isset($data['provider_delivery_number']) ? $data['provider_delivery_number'] : null;
        $this->container['receipt_header'] = isset($data['receipt_header']) ? $data['receipt_header'] : null;
        $this->container['receipt_customer'] = isset($data['receipt_customer']) ? $data['receipt_customer'] : null;
        $this->container['receipt_zvt'] = isset($data['receipt_zvt']) ? $data['receipt_zvt'] : null;
        $this->container['receipt_dealer'] = isset($data['receipt_dealer']) ? $data['receipt_dealer'] : null;
        $this->container['vtc_tid'] = isset($data['vtc_tid']) ? $data['vtc_tid'] : null;
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
     * Gets stock
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     * @param \Secuconnect\Client\Model\ProductInstanceUID $stock stock
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets item
     * @return \Secuconnect\Client\Model\PrepaidSalesItem
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     * @param \Secuconnect\Client\Model\PrepaidSalesItem $item item
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets itemgroup
     * @return \Secuconnect\Client\Model\ItemGroup
     */
    public function getItemgroup()
    {
        return $this->container['itemgroup'];
    }

    /**
     * Sets itemgroup
     * @param \Secuconnect\Client\Model\ItemGroup $itemgroup itemgroup
     * @return $this
     */
    public function setItemgroup($itemgroup)
    {
        $this->container['itemgroup'] = $itemgroup;

        return $this;
    }

    /**
     * Gets smart_device
     * @return \Secuconnect\Client\Model\PrepaidSalesSmartDevice
     */
    public function getSmartDevice()
    {
        return $this->container['smart_device'];
    }

    /**
     * Sets smart_device
     * @param \Secuconnect\Client\Model\PrepaidSalesSmartDevice $smart_device smart_device
     * @return $this
     */
    public function setSmartDevice($smart_device)
    {
        $this->container['smart_device'] = $smart_device;

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
     * @param \Secuconnect\Client\Model\ProductInstanceUID $merchant merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets store
     * @return \Secuconnect\Client\Model\Store
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\Store $store store
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

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
     * Gets demo
     * @return bool
     */
    public function getDemo()
    {
        return $this->container['demo'];
    }

    /**
     * Sets demo
     * @param bool $demo Demo
     * @return $this
     */
    public function setDemo($demo)
    {
        $this->container['demo'] = $demo;

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
     * @param string $description Description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets commission
     * @return int
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     * @param int $commission Commission
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets commission_currency
     * @return string
     */
    public function getCommissionCurrency()
    {
        return $this->container['commission_currency'];
    }

    /**
     * Sets commission_currency
     * @param string $commission_currency Commission currency
     * @return $this
     */
    public function setCommissionCurrency($commission_currency)
    {
        $this->container['commission_currency'] = $commission_currency;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets serial
     * @return string
     */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
     * Sets serial
     * @param string $serial Serial
     * @return $this
     */
    public function setSerial($serial)
    {
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets cardnumber
     * @return string
     */
    public function getCardnumber()
    {
        return $this->container['cardnumber'];
    }

    /**
     * Sets cardnumber
     * @param string $cardnumber Card number
     * @return $this
     */
    public function setCardnumber($cardnumber)
    {
        $this->container['cardnumber'] = $cardnumber;

        return $this;
    }

    /**
     * Gets expire_date
     * @return string
     */
    public function getExpireDate()
    {
        return $this->container['expire_date'];
    }

    /**
     * Sets expire_date
     * @param string $expire_date Expire date
     * @return $this
     */
    public function setExpireDate($expire_date)
    {
        $this->container['expire_date'] = $expire_date;

        return $this;
    }

    /**
     * Gets provider_delivery_number
     * @return string
     */
    public function getProviderDeliveryNumber()
    {
        return $this->container['provider_delivery_number'];
    }

    /**
     * Sets provider_delivery_number
     * @param string $provider_delivery_number Provider delivery number
     * @return $this
     */
    public function setProviderDeliveryNumber($provider_delivery_number)
    {
        $this->container['provider_delivery_number'] = $provider_delivery_number;

        return $this;
    }

    /**
     * Gets receipt_header
     * @return string
     */
    public function getReceiptHeader()
    {
        return $this->container['receipt_header'];
    }

    /**
     * Sets receipt_header
     * @param string $receipt_header Receipt header
     * @return $this
     */
    public function setReceiptHeader($receipt_header)
    {
        $this->container['receipt_header'] = $receipt_header;

        return $this;
    }

    /**
     * Gets receipt_customer
     * @return string
     */
    public function getReceiptCustomer()
    {
        return $this->container['receipt_customer'];
    }

    /**
     * Sets receipt_customer
     * @param string $receipt_customer Receipt customer
     * @return $this
     */
    public function setReceiptCustomer($receipt_customer)
    {
        $this->container['receipt_customer'] = $receipt_customer;

        return $this;
    }

    /**
     * Gets receipt_zvt
     * @return string
     */
    public function getReceiptZvt()
    {
        return $this->container['receipt_zvt'];
    }

    /**
     * Sets receipt_zvt
     * @param string $receipt_zvt Receipt zvt
     * @return $this
     */
    public function setReceiptZvt($receipt_zvt)
    {
        $this->container['receipt_zvt'] = $receipt_zvt;

        return $this;
    }

    /**
     * Gets receipt_dealer
     * @return string
     */
    public function getReceiptDealer()
    {
        return $this->container['receipt_dealer'];
    }

    /**
     * Sets receipt_dealer
     * @param string $receipt_dealer Receipt dealer
     * @return $this
     */
    public function setReceiptDealer($receipt_dealer)
    {
        $this->container['receipt_dealer'] = $receipt_dealer;

        return $this;
    }

    /**
     * Gets vtc_tid
     * @return string
     */
    public function getVtcTid()
    {
        return $this->container['vtc_tid'];
    }

    /**
     * Sets vtc_tid
     * @param string $vtc_tid Vtc tid
     * @return $this
     */
    public function setVtcTid($vtc_tid)
    {
        $this->container['vtc_tid'] = $vtc_tid;

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

