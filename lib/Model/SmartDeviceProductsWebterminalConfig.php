<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartDeviceProductsWebterminalConfig
 *
 * @category Class
 * @description SmartDeviceProductsWebterminalConfig
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDeviceProductsWebterminalConfig implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartDeviceProductsWebterminalConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed_actions' => '\Secuconnect\Client\Model\SmartDeviceProductsWebterminalConfigAllowedActions',
        'transactions_grid_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed_actions' => null,
        'transactions_grid_enabled' => null
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
        'allowed_actions' => 'allowed_actions',
        'transactions_grid_enabled' => 'transactions_grid_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'allowed_actions' => 'setAllowedActions',
        'transactions_grid_enabled' => 'setTransactionsGridEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'allowed_actions' => 'getAllowedActions',
        'transactions_grid_enabled' => 'getTransactionsGridEnabled'
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
        $this->container['allowed_actions'] = isset($data['allowed_actions']) ? $data['allowed_actions'] : null;
        $this->container['transactions_grid_enabled'] = isset($data['transactions_grid_enabled']) ? $data['transactions_grid_enabled'] : null;
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
     * Gets allowed_actions
     * @return \Secuconnect\Client\Model\SmartDeviceProductsWebterminalConfigAllowedActions
     */
    public function getAllowedActions()
    {
        return $this->container['allowed_actions'];
    }

    /**
     * Sets allowed_actions
     * @param \Secuconnect\Client\Model\SmartDeviceProductsWebterminalConfigAllowedActions $allowed_actions allowed_actions
     * @return $this
     */
    public function setAllowedActions($allowed_actions)
    {
        $this->container['allowed_actions'] = $allowed_actions;

        return $this;
    }

    /**
     * Gets transactions_grid_enabled
     * @return bool
     */
    public function getTransactionsGridEnabled()
    {
        return $this->container['transactions_grid_enabled'];
    }

    /**
     * Sets transactions_grid_enabled
     * @param bool $transactions_grid_enabled Option enabled or disabled
     * @return $this
     */
    public function setTransactionsGridEnabled($transactions_grid_enabled)
    {
        $this->container['transactions_grid_enabled'] = $transactions_grid_enabled;

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

