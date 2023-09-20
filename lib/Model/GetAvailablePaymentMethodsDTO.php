<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * GetAvailablePaymentMethodsDTO
 *
 * @category Class
 * @description GetAvailablePaymentMethodsDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetAvailablePaymentMethodsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GetAvailablePaymentMethodsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency' => 'string',
        'is_demo' => 'bool',
        'apiv2_products' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency' => null,
        'is_demo' => null,
        'apiv2_products' => null
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
        'currency' => 'currency',
        'is_demo' => 'is_demo',
        'apiv2_products' => 'apiv2_products'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'is_demo' => 'setIsDemo',
        'apiv2_products' => 'setApiv2Products'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'is_demo' => 'getIsDemo',
        'apiv2_products' => 'getApiv2Products'
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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['is_demo'] = isset($data['is_demo']) ? $data['is_demo'] : null;
        $this->container['apiv2_products'] = isset($data['apiv2_products']) ? $data['apiv2_products'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['currency'] === null) {
            $invalid_properties[] = "'currency' can't be null";
        }
        if ($this->container['is_demo'] === null) {
            $invalid_properties[] = "'is_demo' can't be null";
        }
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
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets is_demo
     * @return bool
     */
    public function getIsDemo()
    {
        return $this->container['is_demo'];
    }

    /**
     * Sets is_demo
     * @param bool $is_demo Demo mode. Such transactions are not actually processed.
     * @return $this
     */
    public function setIsDemo($is_demo)
    {
        $this->container['is_demo'] = $is_demo;

        return $this;
    }

    /**
     * Gets apiv2_products
     * @return bool
     */
    public function getApiv2Products()
    {
        return $this->container['apiv2_products'];
    }

    /**
     * Sets apiv2_products
     * @param bool $apiv2_products If TRUE, the response will use the flex.API/APIv2 product names, and the other parameters will be ignored.
     * @return $this
     */
    public function setApiv2Products($apiv2_products)
    {
        $this->container['apiv2_products'] = $apiv2_products;

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

