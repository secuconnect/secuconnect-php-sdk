<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTemplatesElementModel
 *
 * @category Class
 * @description SmartTemplatesElementModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTemplatesElementModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTemplatesElementModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order' => 'int',
        'type' => 'string',
        'config' => 'object',
        'condition' => 'object',
        'name' => 'string',
        'property' => 'string',
        'elements' => '\Secuconnect\Client\Model\SmartTemplatesElementModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order' => null,
        'type' => null,
        'config' => null,
        'condition' => null,
        'name' => null,
        'property' => null,
        'elements' => null
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
        'order' => 'order',
        'type' => 'type',
        'config' => 'config',
        'condition' => 'condition',
        'name' => 'name',
        'property' => 'property',
        'elements' => 'elements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'order' => 'setOrder',
        'type' => 'setType',
        'config' => 'setConfig',
        'condition' => 'setCondition',
        'name' => 'setName',
        'property' => 'setProperty',
        'elements' => 'setElements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'order' => 'getOrder',
        'type' => 'getType',
        'config' => 'getConfig',
        'condition' => 'getCondition',
        'name' => 'getName',
        'property' => 'getProperty',
        'elements' => 'getElements'
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
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['elements'] = isset($data['elements']) ? $data['elements'] : null;
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
     * Gets order
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param int $order The order in which the elements are getting parsed for matching conditions, the first matching will be taken
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

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
     * @param string $type The element type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets config
     * @return object
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     * @param object $config The element configuration
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets condition
     * @return object
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     * @param object $condition The element conditions to determine when this element should be shown
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

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
     * @param string $name Name of the element
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets property
     * @return string
     */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
     * Sets property
     * @param string $property Special property for 'loop' elements to configure on which data to loop on
     * @return $this
     */
    public function setProperty($property)
    {
        $this->container['property'] = $property;

        return $this;
    }

    /**
     * Gets elements
     * @return \Secuconnect\Client\Model\SmartTemplatesElementModel[]
     */
    public function getElements()
    {
        return $this->container['elements'];
    }

    /**
     * Sets elements
     * @param \Secuconnect\Client\Model\SmartTemplatesElementModel[] $elements The child elements to be shown inside an the current element
     * @return $this
     */
    public function setElements($elements)
    {
        $this->container['elements'] = $elements;

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

