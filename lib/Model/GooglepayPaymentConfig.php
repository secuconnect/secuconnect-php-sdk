<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * GooglepayPaymentConfig
 *
 * @category Class
 * @description GooglepayPaymentConfig
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GooglepayPaymentConfig implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GooglepayPaymentConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_version' => 'int',
        'api_version_minor' => 'int',
        'type' => 'string',
        'allowed_auth_methods' => 'string[]',
        'allowed_card_networks' => 'string[]',
        'gateway' => 'string',
        'gateway_merchant_id' => 'string',
        'merchant_id' => 'string',
        'merchant_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_version' => null,
        'api_version_minor' => null,
        'type' => null,
        'allowed_auth_methods' => null,
        'allowed_card_networks' => null,
        'gateway' => null,
        'gateway_merchant_id' => null,
        'merchant_id' => null,
        'merchant_name' => null
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
        'api_version' => 'api_version',
        'api_version_minor' => 'api_version_minor',
        'type' => 'type',
        'allowed_auth_methods' => 'allowed_auth_methods',
        'allowed_card_networks' => 'allowed_card_networks',
        'gateway' => 'gateway',
        'gateway_merchant_id' => 'gateway_merchant_id',
        'merchant_id' => 'merchant_id',
        'merchant_name' => 'merchant_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'api_version' => 'setApiVersion',
        'api_version_minor' => 'setApiVersionMinor',
        'type' => 'setType',
        'allowed_auth_methods' => 'setAllowedAuthMethods',
        'allowed_card_networks' => 'setAllowedCardNetworks',
        'gateway' => 'setGateway',
        'gateway_merchant_id' => 'setGatewayMerchantId',
        'merchant_id' => 'setMerchantId',
        'merchant_name' => 'setMerchantName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'api_version' => 'getApiVersion',
        'api_version_minor' => 'getApiVersionMinor',
        'type' => 'getType',
        'allowed_auth_methods' => 'getAllowedAuthMethods',
        'allowed_card_networks' => 'getAllowedCardNetworks',
        'gateway' => 'getGateway',
        'gateway_merchant_id' => 'getGatewayMerchantId',
        'merchant_id' => 'getMerchantId',
        'merchant_name' => 'getMerchantName'
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
        $this->container['api_version'] = isset($data['api_version']) ? $data['api_version'] : null;
        $this->container['api_version_minor'] = isset($data['api_version_minor']) ? $data['api_version_minor'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['allowed_auth_methods'] = isset($data['allowed_auth_methods']) ? $data['allowed_auth_methods'] : null;
        $this->container['allowed_card_networks'] = isset($data['allowed_card_networks']) ? $data['allowed_card_networks'] : null;
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
        $this->container['gateway_merchant_id'] = isset($data['gateway_merchant_id']) ? $data['gateway_merchant_id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['merchant_name'] = isset($data['merchant_name']) ? $data['merchant_name'] : null;
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
     * Gets api_version
     * @return int
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     * @param int $api_version api_version
     * @return $this
     */
    public function setApiVersion($api_version)
    {
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets api_version_minor
     * @return int
     */
    public function getApiVersionMinor()
    {
        return $this->container['api_version_minor'];
    }

    /**
     * Sets api_version_minor
     * @param int $api_version_minor api_version_minor
     * @return $this
     */
    public function setApiVersionMinor($api_version_minor)
    {
        $this->container['api_version_minor'] = $api_version_minor;

        return $this;
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
     * @param string $type type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets allowed_auth_methods
     * @return string[]
     */
    public function getAllowedAuthMethods()
    {
        return $this->container['allowed_auth_methods'];
    }

    /**
     * Sets allowed_auth_methods
     * @param string[] $allowed_auth_methods allowed_auth_methods
     * @return $this
     */
    public function setAllowedAuthMethods($allowed_auth_methods)
    {
        $this->container['allowed_auth_methods'] = $allowed_auth_methods;

        return $this;
    }

    /**
     * Gets allowed_card_networks
     * @return string[]
     */
    public function getAllowedCardNetworks()
    {
        return $this->container['allowed_card_networks'];
    }

    /**
     * Sets allowed_card_networks
     * @param string[] $allowed_card_networks allowed_card_networks
     * @return $this
     */
    public function setAllowedCardNetworks($allowed_card_networks)
    {
        $this->container['allowed_card_networks'] = $allowed_card_networks;

        return $this;
    }

    /**
     * Gets gateway
     * @return string
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     * @param string $gateway gateway
     * @return $this
     */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;

        return $this;
    }

    /**
     * Gets gateway_merchant_id
     * @return string
     */
    public function getGatewayMerchantId()
    {
        return $this->container['gateway_merchant_id'];
    }

    /**
     * Sets gateway_merchant_id
     * @param string $gateway_merchant_id gateway_merchant_id
     * @return $this
     */
    public function setGatewayMerchantId($gateway_merchant_id)
    {
        $this->container['gateway_merchant_id'] = $gateway_merchant_id;

        return $this;
    }

    /**
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     * @param string $merchant_id merchant_id
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets merchant_name
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchant_name'];
    }

    /**
     * Sets merchant_name
     * @param string $merchant_name merchant_name
     * @return $this
     */
    public function setMerchantName($merchant_name)
    {
        $this->container['merchant_name'] = $merchant_name;

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

