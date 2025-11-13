<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * MITInstructions
 *
 * @category Class
 * @description Settings for merchant initiated transaction (MIT)
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MITInstructions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MITInstructions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'standing_instruction' => 'string',
        'recurring_expiry' => 'string',
        'recurring_frequency' => 'int',
        'cit_reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'standing_instruction' => null,
        'recurring_expiry' => null,
        'recurring_frequency' => null,
        'cit_reference' => null
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
        'standing_instruction' => 'standing_instruction',
        'recurring_expiry' => 'recurring_expiry',
        'recurring_frequency' => 'recurring_frequency',
        'cit_reference' => 'cit_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'standing_instruction' => 'setStandingInstruction',
        'recurring_expiry' => 'setRecurringExpiry',
        'recurring_frequency' => 'setRecurringFrequency',
        'cit_reference' => 'setCitReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'standing_instruction' => 'getStandingInstruction',
        'recurring_expiry' => 'getRecurringExpiry',
        'recurring_frequency' => 'getRecurringFrequency',
        'cit_reference' => 'getCitReference'
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
        $this->container['standing_instruction'] = isset($data['standing_instruction']) ? $data['standing_instruction'] : null;
        $this->container['recurring_expiry'] = isset($data['recurring_expiry']) ? $data['recurring_expiry'] : null;
        $this->container['recurring_frequency'] = isset($data['recurring_frequency']) ? $data['recurring_frequency'] : null;
        $this->container['cit_reference'] = isset($data['cit_reference']) ? $data['cit_reference'] : null;
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
     * @param string $type Instructions type:  - `\"cit\"` - `\"mit\"`
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets standing_instruction
     * @return string
     */
    public function getStandingInstruction()
    {
        return $this->container['standing_instruction'];
    }

    /**
     * Sets standing_instruction
     * @param string $standing_instruction Standing Instruction:  - `\"ucof\"` - `\"recurring\"`
     * @return $this
     */
    public function setStandingInstruction($standing_instruction)
    {
        $this->container['standing_instruction'] = $standing_instruction;

        return $this;
    }

    /**
     * Gets recurring_expiry
     * @return string
     */
    public function getRecurringExpiry()
    {
        return $this->container['recurring_expiry'];
    }

    /**
     * Sets recurring_expiry
     * @param string $recurring_expiry The date until a recurring payment should be possible
     * @return $this
     */
    public function setRecurringExpiry($recurring_expiry)
    {
        $this->container['recurring_expiry'] = $recurring_expiry;

        return $this;
    }

    /**
     * Gets recurring_frequency
     * @return int
     */
    public function getRecurringFrequency()
    {
        return $this->container['recurring_frequency'];
    }

    /**
     * Sets recurring_frequency
     * @param int $recurring_frequency How often a recurring payment should be possible in given period
     * @return $this
     */
    public function setRecurringFrequency($recurring_frequency)
    {
        $this->container['recurring_frequency'] = $recurring_frequency;

        return $this;
    }

    /**
     * Gets cit_reference
     * @return string
     */
    public function getCitReference()
    {
        return $this->container['cit_reference'];
    }

    /**
     * Sets cit_reference
     * @param string $cit_reference The Payment Transactions ID from initial transaction to process a recurring payment
     * @return $this
     */
    public function setCitReference($cit_reference)
    {
        $this->container['cit_reference'] = $cit_reference;

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

