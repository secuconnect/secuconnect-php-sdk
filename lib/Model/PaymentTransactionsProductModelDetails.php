<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentTransactionsProductModelDetails
 *
 * @category    Class
 * @description Transaction details
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentTransactionsProductModelDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentTransactionsProductModel_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'int',
        'cleared' => 'string',
        'status' => 'int',
        'status_text' => 'string',
        'status_simple' => 'int',
        'status_text_simple' => 'string',
        'description' => 'string',
        'description_raw' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'cleared' => null,
        'status' => null,
        'status_text' => null,
        'status_simple' => null,
        'status_text_simple' => null,
        'description' => null,
        'description_raw' => null
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
        'amount' => 'amount',
        'cleared' => 'cleared',
        'status' => 'status',
        'status_text' => 'status_text',
        'status_simple' => 'status_simple',
        'status_text_simple' => 'status_text_simple',
        'description' => 'description',
        'description_raw' => 'description_raw'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'cleared' => 'setCleared',
        'status' => 'setStatus',
        'status_text' => 'setStatusText',
        'status_simple' => 'setStatusSimple',
        'status_text_simple' => 'setStatusTextSimple',
        'description' => 'setDescription',
        'description_raw' => 'setDescriptionRaw'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'cleared' => 'getCleared',
        'status' => 'getStatus',
        'status_text' => 'getStatusText',
        'status_simple' => 'getStatusSimple',
        'status_text_simple' => 'getStatusTextSimple',
        'description' => 'getDescription',
        'description_raw' => 'getDescriptionRaw'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['cleared'] = isset($data['cleared']) ? $data['cleared'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_text'] = isset($data['status_text']) ? $data['status_text'] : null;
        $this->container['status_simple'] = isset($data['status_simple']) ? $data['status_simple'] : null;
        $this->container['status_text_simple'] = isset($data['status_text_simple']) ? $data['status_text_simple'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['description_raw'] = isset($data['description_raw']) ? $data['description_raw'] : null;
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
     * Gets cleared
     * @return string
     */
    public function getCleared()
    {
        return $this->container['cleared'];
    }

    /**
     * Sets cleared
     * @param string $cleared Clearing status
     * @return $this
     */
    public function setCleared($cleared)
    {
        $this->container['cleared'] = $cleared;

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
     * Gets status_simple
     * @return int
     */
    public function getStatusSimple()
    {
        return $this->container['status_simple'];
    }

    /**
     * Sets status_simple
     * @param int $status_simple Transaction simple-status ID
     * @return $this
     */
    public function setStatusSimple($status_simple)
    {
        $this->container['status_simple'] = $status_simple;

        return $this;
    }

    /**
     * Gets status_text_simple
     * @return string
     */
    public function getStatusTextSimple()
    {
        return $this->container['status_text_simple'];
    }

    /**
     * Sets status_text_simple
     * @param string $status_text_simple Transaction simple-status description
     * @return $this
     */
    public function setStatusTextSimple($status_text_simple)
    {
        $this->container['status_text_simple'] = $status_text_simple;

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
     * @param string $description Transaction description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_raw
     * @return string
     */
    public function getDescriptionRaw()
    {
        return $this->container['description_raw'];
    }

    /**
     * Sets description_raw
     * @param string $description_raw Transaction description (plain text)
     * @return $this
     */
    public function setDescriptionRaw($description_raw)
    {
        $this->container['description_raw'] = $description_raw;

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


