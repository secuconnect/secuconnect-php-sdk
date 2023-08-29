<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * ParentObj
 *
 * @category Class
 * @description ParentObj
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParentObj implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ParentObj';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'id' => 'string',
        'trans_id' => 'int',
        'ref_type_id' => 'int',
        'ref_type_raw' => 'string',
        'hierarchy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => 'id',
        'trans_id' => null,
        'ref_type_id' => null,
        'ref_type_raw' => null,
        'hierarchy' => null
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
        'trans_id' => 'trans_id',
        'ref_type_id' => 'ref_type_id',
        'ref_type_raw' => 'ref_type_raw',
        'hierarchy' => 'hierarchy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'trans_id' => 'setTransId',
        'ref_type_id' => 'setRefTypeId',
        'ref_type_raw' => 'setRefTypeRaw',
        'hierarchy' => 'setHierarchy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'trans_id' => 'getTransId',
        'ref_type_id' => 'getRefTypeId',
        'ref_type_raw' => 'getRefTypeRaw',
        'hierarchy' => 'getHierarchy'
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
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['ref_type_id'] = isset($data['ref_type_id']) ? $data['ref_type_id'] : null;
        $this->container['ref_type_raw'] = isset($data['ref_type_raw']) ? $data['ref_type_raw'] : null;
        $this->container['hierarchy'] = isset($data['hierarchy']) ? $data['hierarchy'] : null;
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
     * @param string $object Parent object type
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
     * @param string $id Parent object ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param int $trans_id Transaction ID
     * @return $this
     */
    public function setTransId($trans_id)
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets ref_type_id
     * @return int
     */
    public function getRefTypeId()
    {
        return $this->container['ref_type_id'];
    }

    /**
     * Sets ref_type_id
     * @param int $ref_type_id Ref type ID
     * @return $this
     */
    public function setRefTypeId($ref_type_id)
    {
        $this->container['ref_type_id'] = $ref_type_id;

        return $this;
    }

    /**
     * Gets ref_type_raw
     * @return string
     */
    public function getRefTypeRaw()
    {
        return $this->container['ref_type_raw'];
    }

    /**
     * Sets ref_type_raw
     * @param string $ref_type_raw Ref type name (DE)
     * @return $this
     */
    public function setRefTypeRaw($ref_type_raw)
    {
        $this->container['ref_type_raw'] = $ref_type_raw;

        return $this;
    }

    /**
     * Gets hierarchy
     * @return string
     */
    public function getHierarchy()
    {
        return $this->container['hierarchy'];
    }

    /**
     * Sets hierarchy
     * @param string $hierarchy Relation direction type ('child' or 'parent')
     * @return $this
     */
    public function setHierarchy($hierarchy)
    {
        $this->container['hierarchy'] = $hierarchy;

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

