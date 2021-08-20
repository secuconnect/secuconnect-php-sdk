<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsCollectionModel
 *
 * @category Class
 * @description SmartTransactionsCollectionModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsCollectionModel implements ArrayAccess, OneOfSmartTransactionsDeliveryOptionsModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionsCollectionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'scheduled_slot' => '\Secuconnect\Client\Model\SmartTransactionsTimeSlot',
        'store_id' => 'string',
        'delivered_at' => 'string',
        'code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'scheduled_slot' => null,
        'store_id' => null,
        'delivered_at' => null,
        'code' => null
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
        'scheduled_slot' => 'scheduled_slot',
        'store_id' => 'store_id',
        'delivered_at' => 'delivered_at',
        'code' => 'code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'scheduled_slot' => 'setScheduledSlot',
        'store_id' => 'setStoreId',
        'delivered_at' => 'setDeliveredAt',
        'code' => 'setCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'scheduled_slot' => 'getScheduledSlot',
        'store_id' => 'getStoreId',
        'delivered_at' => 'getDeliveredAt',
        'code' => 'getCode'
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
        $this->container['scheduled_slot'] = isset($data['scheduled_slot']) ? $data['scheduled_slot'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['delivered_at'] = isset($data['delivered_at']) ? $data['delivered_at'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
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
     * Gets scheduled_slot
     * @return \Secuconnect\Client\Model\SmartTransactionsTimeSlot
     */
    public function getScheduledSlot()
    {
        return $this->container['scheduled_slot'];
    }

    /**
     * Sets scheduled_slot
     * @param \Secuconnect\Client\Model\SmartTransactionsTimeSlot $scheduled_slot scheduled_slot
     * @return $this
     */
    public function setScheduledSlot($scheduled_slot)
    {
        $this->container['scheduled_slot'] = $scheduled_slot;

        return $this;
    }

    /**
     * Gets store_id
     * @return string
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     * @param string $store_id Store ID
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets delivered_at
     * @return string
     */
    public function getDeliveredAt()
    {
        return $this->container['delivered_at'];
    }

    /**
     * Sets delivered_at
     * @param string $delivered_at Delivered at
     * @return $this
     */
    public function setDeliveredAt($delivered_at)
    {
        $this->container['delivered_at'] = $delivered_at;

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
     * @param string $code confirmation code to pickup the collection
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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

