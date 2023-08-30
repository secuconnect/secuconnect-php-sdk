<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * ApplepayPaymentConfig
 *
 * @category Class
 * @description ApplepayPaymentConfig
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplepayPaymentConfig implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ApplepayPaymentConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label' => 'string',
        'supported_networks' => 'string[]',
        'merchant_capabilities' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label' => null,
        'supported_networks' => null,
        'merchant_capabilities' => null
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
        'label' => 'label',
        'supported_networks' => 'supported_networks',
        'merchant_capabilities' => 'merchant_capabilities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
        'supported_networks' => 'setSupportedNetworks',
        'merchant_capabilities' => 'setMerchantCapabilities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'supported_networks' => 'getSupportedNetworks',
        'merchant_capabilities' => 'getMerchantCapabilities'
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['supported_networks'] = isset($data['supported_networks']) ? $data['supported_networks'] : null;
        $this->container['merchant_capabilities'] = isset($data['merchant_capabilities']) ? $data['merchant_capabilities'] : null;
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
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets supported_networks
     * @return string[]
     */
    public function getSupportedNetworks()
    {
        return $this->container['supported_networks'];
    }

    /**
     * Sets supported_networks
     * @param string[] $supported_networks supported_networks
     * @return $this
     */
    public function setSupportedNetworks($supported_networks)
    {
        $this->container['supported_networks'] = $supported_networks;

        return $this;
    }

    /**
     * Gets merchant_capabilities
     * @return string[]
     */
    public function getMerchantCapabilities()
    {
        return $this->container['merchant_capabilities'];
    }

    /**
     * Sets merchant_capabilities
     * @param string[] $merchant_capabilities merchant_capabilities
     * @return $this
     */
    public function setMerchantCapabilities($merchant_capabilities)
    {
        $this->container['merchant_capabilities'] = $merchant_capabilities;

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

