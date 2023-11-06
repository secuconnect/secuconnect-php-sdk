<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsApplicationContextShopDetails
 *
 * @category Class
 * @description Shop Details
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsApplicationContextShopDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionsApplicationContextShopDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shop_system' => 'string',
        'shop_system_version' => 'string',
        'shop_domain' => 'string',
        'plugin_vendor' => 'string',
        'plugin_version' => 'string',
        'user_agent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shop_system' => null,
        'shop_system_version' => null,
        'shop_domain' => null,
        'plugin_vendor' => null,
        'plugin_version' => null,
        'user_agent' => null
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
        'shop_system' => 'shop_system',
        'shop_system_version' => 'shop_system_version',
        'shop_domain' => 'shop_domain',
        'plugin_vendor' => 'plugin_vendor',
        'plugin_version' => 'plugin_version',
        'user_agent' => 'user_agent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'shop_system' => 'setShopSystem',
        'shop_system_version' => 'setShopSystemVersion',
        'shop_domain' => 'setShopDomain',
        'plugin_vendor' => 'setPluginVendor',
        'plugin_version' => 'setPluginVersion',
        'user_agent' => 'setUserAgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'shop_system' => 'getShopSystem',
        'shop_system_version' => 'getShopSystemVersion',
        'shop_domain' => 'getShopDomain',
        'plugin_vendor' => 'getPluginVendor',
        'plugin_version' => 'getPluginVersion',
        'user_agent' => 'getUserAgent'
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
        $this->container['shop_system'] = isset($data['shop_system']) ? $data['shop_system'] : null;
        $this->container['shop_system_version'] = isset($data['shop_system_version']) ? $data['shop_system_version'] : null;
        $this->container['shop_domain'] = isset($data['shop_domain']) ? $data['shop_domain'] : null;
        $this->container['plugin_vendor'] = isset($data['plugin_vendor']) ? $data['plugin_vendor'] : null;
        $this->container['plugin_version'] = isset($data['plugin_version']) ? $data['plugin_version'] : null;
        $this->container['user_agent'] = isset($data['user_agent']) ? $data['user_agent'] : null;
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
     * Gets shop_system
     * @return string
     */
    public function getShopSystem()
    {
        return $this->container['shop_system'];
    }

    /**
     * Sets shop_system
     * @param string $shop_system Shop system product name with or without major version; e. g. “Shopware” or better “Shopware 6”. The major version makes sense when the module targets a specific version.
     * @return $this
     */
    public function setShopSystem($shop_system)
    {
        $this->container['shop_system'] = $shop_system;

        return $this;
    }

    /**
     * Gets shop_system_version
     * @return string
     */
    public function getShopSystemVersion()
    {
        return $this->container['shop_system_version'];
    }

    /**
     * Sets shop_system_version
     * @param string $shop_system_version Full shop system version number; e. g. “6.5.5.0”. Include the major version even if it is contained in the shop system product name.
     * @return $this
     */
    public function setShopSystemVersion($shop_system_version)
    {
        $this->container['shop_system_version'] = $shop_system_version;

        return $this;
    }

    /**
     * Gets shop_domain
     * @return string
     */
    public function getShopDomain()
    {
        return $this->container['shop_domain'];
    }

    /**
     * Sets shop_domain
     * @param string $shop_domain Shop domain like “example.com” or perhaps “www.example.com”. Multi-shop/multi-site installations should pass the domain the customer has seen.
     * @return $this
     */
    public function setShopDomain($shop_domain)
    {
        $this->container['shop_domain'] = $shop_domain;

        return $this;
    }

    /**
     * Gets plugin_vendor
     * @return string
     */
    public function getPluginVendor()
    {
        return $this->container['plugin_vendor'];
    }

    /**
     * Sets plugin_vendor
     * @param string $plugin_vendor Name of payment plugin vendor, or the exact plugin product name; e. g. “Plugin-O-Rama” or “Plugin-O-Rama Payments”.
     * @return $this
     */
    public function setPluginVendor($plugin_vendor)
    {
        $this->container['plugin_vendor'] = $plugin_vendor;

        return $this;
    }

    /**
     * Gets plugin_version
     * @return string
     */
    public function getPluginVersion()
    {
        return $this->container['plugin_version'];
    }

    /**
     * Sets plugin_version
     * @param string $plugin_version Version number of the plugin vendor; e. g. “1.2.3”.
     * @return $this
     */
    public function setPluginVersion($plugin_version)
    {
        $this->container['plugin_version'] = $plugin_version;

        return $this;
    }

    /**
     * Gets user_agent
     * @return string
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     * @param string $user_agent HTTP user agent; e. g. “PostmanRuntime/7.29.0” or “GuzzleHttp/6.5.5 curl/7.74.0 PHP/8.0.8”. Taken from the HTTP request if not explicitly transmitted.
     * @return $this
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

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

