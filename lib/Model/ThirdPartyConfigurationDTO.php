<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * ThirdPartyConfigurationDTO
 *
 * @category Class
 * @description Third-Party settings
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ThirdPartyConfigurationDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ThirdPartyConfigurationDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paypal' => '\Secuconnect\Client\Model\ThirdPartyEnvironmentDTO',
        'easycredit' => '\Secuconnect\Client\Model\ThirdPartyEnvironmentDTO',
        'saferpay' => '\Secuconnect\Client\Model\ThirdPartyEnvironmentDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paypal' => null,
        'easycredit' => null,
        'saferpay' => null
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
        'paypal' => 'paypal',
        'easycredit' => 'easycredit',
        'saferpay' => 'saferpay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paypal' => 'setPaypal',
        'easycredit' => 'setEasycredit',
        'saferpay' => 'setSaferpay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paypal' => 'getPaypal',
        'easycredit' => 'getEasycredit',
        'saferpay' => 'getSaferpay'
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
        $this->container['paypal'] = isset($data['paypal']) ? $data['paypal'] : null;
        $this->container['easycredit'] = isset($data['easycredit']) ? $data['easycredit'] : null;
        $this->container['saferpay'] = isset($data['saferpay']) ? $data['saferpay'] : null;
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
     * Gets paypal
     * @return \Secuconnect\Client\Model\ThirdPartyEnvironmentDTO
     */
    public function getPaypal()
    {
        return $this->container['paypal'];
    }

    /**
     * Sets paypal
     * @param \Secuconnect\Client\Model\ThirdPartyEnvironmentDTO $paypal paypal
     * @return $this
     */
    public function setPaypal($paypal)
    {
        $this->container['paypal'] = $paypal;

        return $this;
    }

    /**
     * Gets easycredit
     * @return \Secuconnect\Client\Model\ThirdPartyEnvironmentDTO
     */
    public function getEasycredit()
    {
        return $this->container['easycredit'];
    }

    /**
     * Sets easycredit
     * @param \Secuconnect\Client\Model\ThirdPartyEnvironmentDTO $easycredit easycredit
     * @return $this
     */
    public function setEasycredit($easycredit)
    {
        $this->container['easycredit'] = $easycredit;

        return $this;
    }

    /**
     * Gets saferpay
     * @return \Secuconnect\Client\Model\ThirdPartyEnvironmentDTO
     */
    public function getSaferpay()
    {
        return $this->container['saferpay'];
    }

    /**
     * Sets saferpay
     * @param \Secuconnect\Client\Model\ThirdPartyEnvironmentDTO $saferpay saferpay
     * @return $this
     */
    public function setSaferpay($saferpay)
    {
        $this->container['saferpay'] = $saferpay;

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

