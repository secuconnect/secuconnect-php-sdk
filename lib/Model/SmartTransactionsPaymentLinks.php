<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsPaymentLinks
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsPaymentLinks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionsPaymentLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'prepaid' => 'string',
        'debit' => 'string',
        'creditcard' => 'string',
        'invoice' => 'string',
        'general' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'prepaid' => null,
        'debit' => null,
        'creditcard' => null,
        'invoice' => null,
        'general' => null
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
        'prepaid' => 'prepaid',
        'debit' => 'debit',
        'creditcard' => 'creditcard',
        'invoice' => 'invoice',
        'general' => 'general'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'prepaid' => 'setPrepaid',
        'debit' => 'setDebit',
        'creditcard' => 'setCreditcard',
        'invoice' => 'setInvoice',
        'general' => 'setGeneral'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'prepaid' => 'getPrepaid',
        'debit' => 'getDebit',
        'creditcard' => 'getCreditcard',
        'invoice' => 'getInvoice',
        'general' => 'getGeneral'
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
        $this->container['prepaid'] = isset($data['prepaid']) ? $data['prepaid'] : null;
        $this->container['debit'] = isset($data['debit']) ? $data['debit'] : null;
        $this->container['creditcard'] = isset($data['creditcard']) ? $data['creditcard'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['general'] = isset($data['general']) ? $data['general'] : null;
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
     * Gets prepaid
     * @return string
     */
    public function getPrepaid()
    {
        return $this->container['prepaid'];
    }

    /**
     * Sets prepaid
     * @param string $prepaid prepaid link
     * @return $this
     */
    public function setPrepaid($prepaid)
    {
        $this->container['prepaid'] = $prepaid;

        return $this;
    }

    /**
     * Gets debit
     * @return string
     */
    public function getDebit()
    {
        return $this->container['debit'];
    }

    /**
     * Sets debit
     * @param string $debit debit link
     * @return $this
     */
    public function setDebit($debit)
    {
        $this->container['debit'] = $debit;

        return $this;
    }

    /**
     * Gets creditcard
     * @return string
     */
    public function getCreditcard()
    {
        return $this->container['creditcard'];
    }

    /**
     * Sets creditcard
     * @param string $creditcard creditcard link
     * @return $this
     */
    public function setCreditcard($creditcard)
    {
        $this->container['creditcard'] = $creditcard;

        return $this;
    }

    /**
     * Gets invoice
     * @return string
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param string $invoice invoice link
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets general
     * @return string
     */
    public function getGeneral()
    {
        return $this->container['general'];
    }

    /**
     * Sets general
     * @param string $general general link
     * @return $this
     */
    public function setGeneral($general)
    {
        $this->container['general'] = $general;

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

