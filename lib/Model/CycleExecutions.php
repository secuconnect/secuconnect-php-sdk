<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * CycleExecutions
 *
 * @category Class
 * @description CycleExecutions
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CycleExecutions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CycleExecutions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sequence' => 'int',
        'tenure_type' => 'string',
        'total_cycles' => 'int',
        'cycles_completed' => 'int',
        'cycles_remaining' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sequence' => null,
        'tenure_type' => null,
        'total_cycles' => null,
        'cycles_completed' => null,
        'cycles_remaining' => null
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
        'sequence' => 'sequence',
        'tenure_type' => 'tenure_type',
        'total_cycles' => 'total_cycles',
        'cycles_completed' => 'cycles_completed',
        'cycles_remaining' => 'cycles_remaining'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'sequence' => 'setSequence',
        'tenure_type' => 'setTenureType',
        'total_cycles' => 'setTotalCycles',
        'cycles_completed' => 'setCyclesCompleted',
        'cycles_remaining' => 'setCyclesRemaining'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'sequence' => 'getSequence',
        'tenure_type' => 'getTenureType',
        'total_cycles' => 'getTotalCycles',
        'cycles_completed' => 'getCyclesCompleted',
        'cycles_remaining' => 'getCyclesRemaining'
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
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['tenure_type'] = isset($data['tenure_type']) ? $data['tenure_type'] : null;
        $this->container['total_cycles'] = isset($data['total_cycles']) ? $data['total_cycles'] : null;
        $this->container['cycles_completed'] = isset($data['cycles_completed']) ? $data['cycles_completed'] : null;
        $this->container['cycles_remaining'] = isset($data['cycles_remaining']) ? $data['cycles_remaining'] : null;
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
     * Gets sequence
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     * @param int $sequence sequence
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets tenure_type
     * @return string
     */
    public function getTenureType()
    {
        return $this->container['tenure_type'];
    }

    /**
     * Sets tenure_type
     * @param string $tenure_type Tenure type
     * @return $this
     */
    public function setTenureType($tenure_type)
    {
        $this->container['tenure_type'] = $tenure_type;

        return $this;
    }

    /**
     * Gets total_cycles
     * @return int
     */
    public function getTotalCycles()
    {
        return $this->container['total_cycles'];
    }

    /**
     * Sets total_cycles
     * @param int $total_cycles Total cycles
     * @return $this
     */
    public function setTotalCycles($total_cycles)
    {
        $this->container['total_cycles'] = $total_cycles;

        return $this;
    }

    /**
     * Gets cycles_completed
     * @return int
     */
    public function getCyclesCompleted()
    {
        return $this->container['cycles_completed'];
    }

    /**
     * Sets cycles_completed
     * @param int $cycles_completed Completed cycles
     * @return $this
     */
    public function setCyclesCompleted($cycles_completed)
    {
        $this->container['cycles_completed'] = $cycles_completed;

        return $this;
    }

    /**
     * Gets cycles_remaining
     * @return int
     */
    public function getCyclesRemaining()
    {
        return $this->container['cycles_remaining'];
    }

    /**
     * Sets cycles_remaining
     * @param int $cycles_remaining Remaining cycles
     * @return $this
     */
    public function setCyclesRemaining($cycles_remaining)
    {
        $this->container['cycles_remaining'] = $cycles_remaining;

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

