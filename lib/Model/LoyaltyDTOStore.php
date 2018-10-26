<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * LoyaltyDTOStore
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyDTOStore implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyDTOStore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'id' => 'string',
        'address_components' => '\Secuconnect\Client\Model\LoyaltyStoregroupsDTOStoresAddressComponents[]',
        'address_formatted' => 'string',
        'geometry' => 'string',
        'name' => 'string',
        'name_raw' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => null,
        'address_components' => null,
        'address_formatted' => null,
        'geometry' => null,
        'name' => null,
        'name_raw' => null
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
        'address_components' => 'address_components',
        'address_formatted' => 'address_formatted',
        'geometry' => 'geometry',
        'name' => 'name',
        'name_raw' => 'name_raw'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'address_components' => 'setAddressComponents',
        'address_formatted' => 'setAddressFormatted',
        'geometry' => 'setGeometry',
        'name' => 'setName',
        'name_raw' => 'setNameRaw'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'address_components' => 'getAddressComponents',
        'address_formatted' => 'getAddressFormatted',
        'geometry' => 'getGeometry',
        'name' => 'getName',
        'name_raw' => 'getNameRaw'
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
        $this->container['address_components'] = isset($data['address_components']) ? $data['address_components'] : null;
        $this->container['address_formatted'] = isset($data['address_formatted']) ? $data['address_formatted'] : null;
        $this->container['geometry'] = isset($data['geometry']) ? $data['geometry'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_raw'] = isset($data['name_raw']) ? $data['name_raw'] : null;
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
     * @param string $object LoyaltyDTOStore
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
     * @param string $id LoyaltyDTOStore
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets address_components
     * @return \Secuconnect\Client\Model\LoyaltyStoregroupsDTOStoresAddressComponents[]
     */
    public function getAddressComponents()
    {
        return $this->container['address_components'];
    }

    /**
     * Sets address_components
     * @param \Secuconnect\Client\Model\LoyaltyStoregroupsDTOStoresAddressComponents[] $address_components LoyaltyDTOStore
     * @return $this
     */
    public function setAddressComponents($address_components)
    {
        $this->container['address_components'] = $address_components;

        return $this;
    }

    /**
     * Gets address_formatted
     * @return string
     */
    public function getAddressFormatted()
    {
        return $this->container['address_formatted'];
    }

    /**
     * Sets address_formatted
     * @param string $address_formatted Address formatted
     * @return $this
     */
    public function setAddressFormatted($address_formatted)
    {
        $this->container['address_formatted'] = $address_formatted;

        return $this;
    }

    /**
     * Gets geometry
     * @return string
     */
    public function getGeometry()
    {
        return $this->container['geometry'];
    }

    /**
     * Sets geometry
     * @param string $geometry Geometry
     * @return $this
     */
    public function setGeometry($geometry)
    {
        $this->container['geometry'] = $geometry;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_raw
     * @return string
     */
    public function getNameRaw()
    {
        return $this->container['name_raw'];
    }

    /**
     * Sets name_raw
     * @param string $name_raw Raw name
     * @return $this
     */
    public function setNameRaw($name_raw)
    {
        $this->container['name_raw'] = $name_raw;

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


