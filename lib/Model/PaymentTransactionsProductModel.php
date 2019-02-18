<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentTransactionsProductModel
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentTransactionsProductModel implements ArrayAccess
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
        'object' => 'string',
        'id' => 'string',
        'merchant' => '\Secuconnect\Client\Model\PaymentTransactionsProductModelMerchant',
        'trans_id' => 'int',
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
        'details' => '\Secuconnect\Client\Model\PaymentTransactionsProductModelDetails',
        'customer' => '\Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => 'id',
        'merchant' => null,
        'trans_id' => null,
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
        'details' => null,
        'customer' => null
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
        'merchant' => 'merchant',
        'trans_id' => 'trans_id',
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
        'details' => 'details',
        'customer' => 'customer'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'merchant' => 'setMerchant',
        'trans_id' => 'setTransId',
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
        'details' => 'setDetails',
        'customer' => 'setCustomer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'merchant' => 'getMerchant',
        'trans_id' => 'getTransId',
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
        'details' => 'getDetails',
        'customer' => 'getCustomer'
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
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
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
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
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
     * @param string $object Object of payment transaction
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
     * @param string $id Id of payment transaction
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModelMerchant
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\PaymentTransactionsProductModelMerchant $merchant
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
     * @param int $trans_id Transaction identifier
     * @return $this
     */
    public function setTransId($trans_id)
    {
        $this->container['trans_id'] = $trans_id;

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
     * @param int $status WTF??
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
     * @param string $status_text Transaction status
     * @return $this
     */
    public function setStatusText($status_text)
    {
        $this->container['status_text'] = $status_text;

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
     * @param \Secuconnect\Client\Model\PaymentTransactionsProductModelDetails $details
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
     * @param \Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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


