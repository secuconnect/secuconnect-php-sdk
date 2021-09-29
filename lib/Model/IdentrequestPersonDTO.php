<?php

namespace Secuconnect\Client\Model;

/**
 * IdentrequestPersonDTO
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdentrequestPersonDTO extends Contact
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'IdentrequestPersonDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom1' => 'string',
        'custom2' => 'string',
        'custom3' => 'string',
        'custom4' => 'string',
        'custom5' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'custom1' => null,
        'custom2' => null,
        'custom3' => null,
        'custom4' => null,
        'custom5' => null
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
        'custom1' => 'custom1',
        'custom2' => 'custom2',
        'custom3' => 'custom3',
        'custom4' => 'custom4',
        'custom5' => 'custom5'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'custom1' => 'setCustom1',
        'custom2' => 'setCustom2',
        'custom3' => 'setCustom3',
        'custom4' => 'setCustom4',
        'custom5' => 'setCustom5'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'custom1' => 'getCustom1',
        'custom2' => 'getCustom2',
        'custom3' => 'getCustom3',
        'custom4' => 'getCustom4',
        'custom5' => 'getCustom5'
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

        $this->container['custom1'] = isset($data['custom1']) ? $data['custom1'] : null;
        $this->container['custom2'] = isset($data['custom2']) ? $data['custom2'] : null;
        $this->container['custom3'] = isset($data['custom3']) ? $data['custom3'] : null;
        $this->container['custom4'] = isset($data['custom4']) ? $data['custom4'] : null;
        $this->container['custom5'] = isset($data['custom5']) ? $data['custom5'] : null;
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
     * Gets custom1
     * @return string
     */
    public function getCustom1()
    {
        return $this->container['custom1'];
    }

    /**
     * Sets custom1
     * @param string $custom1 Some custom fields which can be individually used to store information
     * @return $this
     */
    public function setCustom1($custom1)
    {
        $this->container['custom1'] = $custom1;

        return $this;
    }

    /**
     * Gets custom2
     * @return string
     */
    public function getCustom2()
    {
        return $this->container['custom2'];
    }

    /**
     * Sets custom2
     * @param string $custom2 Some custom fields which can be individually used to store information
     * @return $this
     */
    public function setCustom2($custom2)
    {
        $this->container['custom2'] = $custom2;

        return $this;
    }

    /**
     * Gets custom3
     * @return string
     */
    public function getCustom3()
    {
        return $this->container['custom3'];
    }

    /**
     * Sets custom3
     * @param string $custom3 Some custom fields which can be individually used to store information
     * @return $this
     */
    public function setCustom3($custom3)
    {
        $this->container['custom3'] = $custom3;

        return $this;
    }

    /**
     * Gets custom4
     * @return string
     */
    public function getCustom4()
    {
        return $this->container['custom4'];
    }

    /**
     * Sets custom4
     * @param string $custom4 Some custom fields which can be individually used to store information
     * @return $this
     */
    public function setCustom4($custom4)
    {
        $this->container['custom4'] = $custom4;

        return $this;
    }

    /**
     * Gets custom5
     * @return string
     */
    public function getCustom5()
    {
        return $this->container['custom5'];
    }

    /**
     * Sets custom5
     * @param string $custom5 Some custom fields which can be individually used to store information
     * @return $this
     */
    public function setCustom5($custom5)
    {
        $this->container['custom5'] = $custom5;

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

