<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * LoyaltyCardgroupsProductModel
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCardgroupsProductModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyCardgroupsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'id' => 'string',
        'merchant' => '\Secuconnect\Client\Model\LoyaltyCardgroupsDTOMerchant',
        'display_name' => 'string',
        'display_name_raw' => 'string',
        'stock_warn_limit' => 'string',
        'picture' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => 'id',
        'merchant' => null,
        'display_name' => null,
        'display_name_raw' => null,
        'stock_warn_limit' => null,
        'picture' => null
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
        'display_name' => 'display_name',
        'display_name_raw' => 'display_name_raw',
        'stock_warn_limit' => 'stock_warn_limit',
        'picture' => 'picture'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'merchant' => 'setMerchant',
        'display_name' => 'setDisplayName',
        'display_name_raw' => 'setDisplayNameRaw',
        'stock_warn_limit' => 'setStockWarnLimit',
        'picture' => 'setPicture'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'merchant' => 'getMerchant',
        'display_name' => 'getDisplayName',
        'display_name_raw' => 'getDisplayNameRaw',
        'stock_warn_limit' => 'getStockWarnLimit',
        'picture' => 'getPicture'
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
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['display_name_raw'] = isset($data['display_name_raw']) ? $data['display_name_raw'] : null;
        $this->container['stock_warn_limit'] = isset($data['stock_warn_limit']) ? $data['stock_warn_limit'] : null;
        $this->container['picture'] = isset($data['picture']) ? $data['picture'] : null;
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
     * @param string $object Object of loyalty card group
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
     * @param string $id Id of loyalty card group
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsDTOMerchant
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTOMerchant $merchant Loyalty card group merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets display_name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     * @param string $display_name Loyalty card group display name
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets display_name_raw
     * @return string
     */
    public function getDisplayNameRaw()
    {
        return $this->container['display_name_raw'];
    }

    /**
     * Sets display_name_raw
     * @param string $display_name_raw Loyalty card group display name raw
     * @return $this
     */
    public function setDisplayNameRaw($display_name_raw)
    {
        $this->container['display_name_raw'] = $display_name_raw;

        return $this;
    }

    /**
     * Gets stock_warn_limit
     * @return string
     */
    public function getStockWarnLimit()
    {
        return $this->container['stock_warn_limit'];
    }

    /**
     * Sets stock_warn_limit
     * @param string $stock_warn_limit Loyalty card group stock warn limit
     * @return $this
     */
    public function setStockWarnLimit($stock_warn_limit)
    {
        $this->container['stock_warn_limit'] = $stock_warn_limit;

        return $this;
    }

    /**
     * Gets picture
     * @return string
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     * @param string $picture Loyalty card group picture
     * @return $this
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

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


