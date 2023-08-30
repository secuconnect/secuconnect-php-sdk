<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * IframeOptionsPaymentConfig
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IframeOptionsPaymentConfig implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'IframeOptions_payment_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'googlepay' => '\Secuconnect\Client\Model\GooglepayPaymentConfig',
        'applepay' => '\Secuconnect\Client\Model\ApplepayPaymentConfig'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'googlepay' => null,
        'applepay' => null
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
        'googlepay' => 'Googlepay',
        'applepay' => 'Applepay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'googlepay' => 'setGooglepay',
        'applepay' => 'setApplepay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'googlepay' => 'getGooglepay',
        'applepay' => 'getApplepay'
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
        $this->container['googlepay'] = isset($data['googlepay']) ? $data['googlepay'] : null;
        $this->container['applepay'] = isset($data['applepay']) ? $data['applepay'] : null;
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
     * Gets googlepay
     * @return \Secuconnect\Client\Model\GooglepayPaymentConfig
     */
    public function getGooglepay()
    {
        return $this->container['googlepay'];
    }

    /**
     * Sets googlepay
     * @param \Secuconnect\Client\Model\GooglepayPaymentConfig $googlepay googlepay
     * @return $this
     */
    public function setGooglepay($googlepay)
    {
        $this->container['googlepay'] = $googlepay;

        return $this;
    }

    /**
     * Gets applepay
     * @return \Secuconnect\Client\Model\ApplepayPaymentConfig
     */
    public function getApplepay()
    {
        return $this->container['applepay'];
    }

    /**
     * Sets applepay
     * @param \Secuconnect\Client\Model\ApplepayPaymentConfig $applepay applepay
     * @return $this
     */
    public function setApplepay($applepay)
    {
        $this->container['applepay'] = $applepay;

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

