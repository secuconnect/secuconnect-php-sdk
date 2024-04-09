<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * VirtualTerminalDataModel
 *
 * @category Class
 * @description VirtualTerminalDataModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VirtualTerminalDataModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VirtualTerminalDataModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'store' => 'object',
        'tid' => 'string',
        'actions' => 'string[]',
        'gift_terminal' => 'int',
        'amount_split_enabled' => 'int',
        'disabled' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'store' => null,
        'tid' => null,
        'actions' => null,
        'gift_terminal' => null,
        'amount_split_enabled' => null,
        'disabled' => null
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
        'store' => 'store',
        'tid' => 'tid',
        'actions' => 'actions',
        'gift_terminal' => 'gift_terminal',
        'amount_split_enabled' => 'amount_split_enabled',
        'disabled' => 'disabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'store' => 'setStore',
        'tid' => 'setTid',
        'actions' => 'setActions',
        'gift_terminal' => 'setGiftTerminal',
        'amount_split_enabled' => 'setAmountSplitEnabled',
        'disabled' => 'setDisabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'store' => 'getStore',
        'tid' => 'getTid',
        'actions' => 'getActions',
        'gift_terminal' => 'getGiftTerminal',
        'amount_split_enabled' => 'getAmountSplitEnabled',
        'disabled' => 'getDisabled'
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
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['gift_terminal'] = isset($data['gift_terminal']) ? $data['gift_terminal'] : null;
        $this->container['amount_split_enabled'] = isset($data['amount_split_enabled']) ? $data['amount_split_enabled'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
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
     * Gets store
     * @return object
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     * @param object $store Store to which the terminal belongs
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets tid
     * @return string
     */
    public function getTid()
    {
        return $this->container['tid'];
    }

    /**
     * Sets tid
     * @param string $tid Terminal ID
     * @return $this
     */
    public function setTid($tid)
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets actions
     * @return string[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     * @param string[] $actions Allowed actions:  - `\"charge\"` - `\"discharge\"` - `\"sale_revenue\"` - `\"charge_points\"` - `\"discharge_points\"` - `\"cancel_last\"` - `\"immediate_bonus\"`
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets gift_terminal
     * @return int
     */
    public function getGiftTerminal()
    {
        return $this->container['gift_terminal'];
    }

    /**
     * Sets gift_terminal
     * @param int $gift_terminal Whether the loyalty terminal is a gift terminal (bonus program active)
     * @return $this
     */
    public function setGiftTerminal($gift_terminal)
    {
        $this->container['gift_terminal'] = $gift_terminal;

        return $this;
    }

    /**
     * Gets amount_split_enabled
     * @return int
     */
    public function getAmountSplitEnabled()
    {
        return $this->container['amount_split_enabled'];
    }

    /**
     * Sets amount_split_enabled
     * @param int $amount_split_enabled Whether amount split is enabled
     * @return $this
     */
    public function setAmountSplitEnabled($amount_split_enabled)
    {
        $this->container['amount_split_enabled'] = $amount_split_enabled;

        return $this;
    }

    /**
     * Gets disabled
     * @return int
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     * @param int $disabled Whether the terminal is disabled (`1`) or not (`0`)
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

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

