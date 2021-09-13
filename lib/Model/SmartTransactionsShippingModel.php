<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsShippingModel
 *
 * @category Class
 * @description SmartTransactionsShippingModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsShippingModel implements ArrayAccess, OneOfSmartTransactionsDeliveryOptionsModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionsShippingModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'shipped_at' => 'string',
        'shipped_by' => 'string',
        'tracking_code' => 'string',
        'invoice_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'shipped_at' => null,
        'shipped_by' => null,
        'tracking_code' => null,
        'invoice_number' => null
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
        'type' => 'type',
        'shipped_at' => 'shipped_at',
        'shipped_by' => 'shipped_by',
        'tracking_code' => 'tracking_code',
        'invoice_number' => 'invoice_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'shipped_at' => 'setShippedAt',
        'shipped_by' => 'setShippedBy',
        'tracking_code' => 'setTrackingCode',
        'invoice_number' => 'setInvoiceNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'shipped_at' => 'getShippedAt',
        'shipped_by' => 'getShippedBy',
        'tracking_code' => 'getTrackingCode',
        'invoice_number' => 'getInvoiceNumber'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['shipped_at'] = isset($data['shipped_at']) ? $data['shipped_at'] : null;
        $this->container['shipped_by'] = isset($data['shipped_by']) ? $data['shipped_by'] : null;
        $this->container['tracking_code'] = isset($data['tracking_code']) ? $data['tracking_code'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of delivery option
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets shipped_at
     * @return string
     */
    public function getShippedAt()
    {
        return $this->container['shipped_at'];
    }

    /**
     * Sets shipped_at
     * @param string $shipped_at Shipment Date
     * @return $this
     */
    public function setShippedAt($shipped_at)
    {
        $this->container['shipped_at'] = $shipped_at;

        return $this;
    }

    /**
     * Gets shipped_by
     * @return string
     */
    public function getShippedBy()
    {
        return $this->container['shipped_by'];
    }

    /**
     * Sets shipped_by
     * @param string $shipped_by Parcel Provider
     * @return $this
     */
    public function setShippedBy($shipped_by)
    {
        $this->container['shipped_by'] = $shipped_by;

        return $this;
    }

    /**
     * Gets tracking_code
     * @return string
     */
    public function getTrackingCode()
    {
        return $this->container['tracking_code'];
    }

    /**
     * Sets tracking_code
     * @param string $tracking_code Tracking Code
     * @return $this
     */
    public function setTrackingCode($tracking_code)
    {
        $this->container['tracking_code'] = $tracking_code;

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

