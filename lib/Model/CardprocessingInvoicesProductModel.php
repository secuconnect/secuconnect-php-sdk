<?php

namespace Secuconnect\Client\Model;

/**
 * CardprocessingInvoicesProductModel
 *
 * @category Class
 * @description CardprocessingInvoicesProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CardprocessingInvoicesProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CardprocessingInvoicesProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'merchant' => '\Secuconnect\Client\Model\GeneralMerchantsProductModel',
        'store' => '\Secuconnect\Client\Model\GeneralStoresProductModel',
        'store_name' => 'string',
        'id_old' => 'int',
        'tid' => 'string',
        'invoice_number' => 'string',
        'net_amount' => 'int',
        'tax_amount' => 'int',
        'amount' => 'int',
        'document_url' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'merchant' => null,
        'store' => null,
        'store_name' => null,
        'id_old' => null,
        'tid' => null,
        'invoice_number' => null,
        'net_amount' => null,
        'tax_amount' => null,
        'amount' => null,
        'document_url' => null,
        'type' => null
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
        'store' => 'store',
        'store_name' => 'store_name',
        'id_old' => 'id_old',
        'tid' => 'tid',
        'invoice_number' => 'invoice_number',
        'net_amount' => 'net_amount',
        'tax_amount' => 'tax_amount',
        'amount' => 'amount',
        'document_url' => 'document_url',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'merchant' => 'setMerchant',
        'store' => 'setStore',
        'store_name' => 'setStoreName',
        'id_old' => 'setIdOld',
        'tid' => 'setTid',
        'invoice_number' => 'setInvoiceNumber',
        'net_amount' => 'setNetAmount',
        'tax_amount' => 'setTaxAmount',
        'amount' => 'setAmount',
        'document_url' => 'setDocumentUrl',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'merchant' => 'getMerchant',
        'store' => 'getStore',
        'store_name' => 'getStoreName',
        'id_old' => 'getIdOld',
        'tid' => 'getTid',
        'invoice_number' => 'getInvoiceNumber',
        'net_amount' => 'getNetAmount',
        'tax_amount' => 'getTaxAmount',
        'amount' => 'getAmount',
        'document_url' => 'getDocumentUrl',
        'type' => 'getType'
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
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['id_old'] = isset($data['id_old']) ? $data['id_old'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['net_amount'] = isset($data['net_amount']) ? $data['net_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['document_url'] = isset($data['document_url']) ? $data['document_url'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets id_old
     * @return int
     */
    public function getIdOld()
    {
        return $this->container['id_old'];
    }

    /**
     * Sets id_old
     * @param int $id_old Invoice ID
     * @return $this
     */
    public function setIdOld($id_old)
    {
        $this->container['id_old'] = $id_old;

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
     * Gets invoice_number
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     * @param string $invoice_number Invoice Number
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets net_amount
     * @return int
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     * @param int $net_amount net_amount
     * @return $this
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

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
     * Gets document_url
     * @return string
     */
    public function getDocumentUrl()
    {
        return $this->container['document_url'];
    }

    /**
     * Sets document_url
     * @param string $document_url The url of the invoice document (PDF)
     * @return $this
     */
    public function setDocumentUrl($document_url)
    {
        $this->container['document_url'] = $document_url;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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

