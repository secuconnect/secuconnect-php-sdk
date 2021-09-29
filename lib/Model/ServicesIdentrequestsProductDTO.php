<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * ServicesIdentrequestsProductDTO
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServicesIdentrequestsProductDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ServicesIdentrequestsProductDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'provider' => 'PROVIDER',
        'type' => 'TYPE',
        'demo' => 'bool',
        'person' => '\Secuconnect\Client\Model\IdentrequestPersonDTO[]',
        'owner_transaction_id' => 'string',
        'redirect_url' => '\Secuconnect\Client\Model\IdentrequestRedirectUrls'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'provider' => null,
        'type' => null,
        'demo' => null,
        'person' => null,
        'owner_transaction_id' => null,
        'redirect_url' => null
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
        'provider' => 'provider',
        'type' => 'type',
        'demo' => 'demo',
        'person' => 'person',
        'owner_transaction_id' => 'owner_transaction_id',
        'redirect_url' => 'redirect_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'provider' => 'setProvider',
        'type' => 'setType',
        'demo' => 'setDemo',
        'person' => 'setPerson',
        'owner_transaction_id' => 'setOwnerTransactionId',
        'redirect_url' => 'setRedirectUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'provider' => 'getProvider',
        'type' => 'getType',
        'demo' => 'getDemo',
        'person' => 'getPerson',
        'owner_transaction_id' => 'getOwnerTransactionId',
        'redirect_url' => 'getRedirectUrl'
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
    const PROVIDER_POST_IDENT = 'post_ident';    const PROVIDER_BANK_IDENT = 'bank_ident';    const PROVIDER_WEBID = 'webid';    const TYPE_PERSON = 'person';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getProviderAllowableValues()
    {
        return [
            self::PROVIDER_POST_IDENT,
self::PROVIDER_BANK_IDENT,
self::PROVIDER_WEBID,        ];
    }


    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PERSON,        ];
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
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['demo'] = isset($data['demo']) ? $data['demo'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['owner_transaction_id'] = isset($data['owner_transaction_id']) ? $data['owner_transaction_id'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getProviderAllowableValues();
        if (!is_null($this->container['provider']) && !in_array($this->container['provider'], $allowed_values, true)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'provider', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowed_values, true)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider Third party identification provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $allowed_values = $this->getProviderAllowableValues();
        if (!is_null($provider) && !in_array($provider, $allowed_values, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'provider', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['provider'] = $provider;

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
     * @param string $type Type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowed_values, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets demo
     * @return bool
     */
    public function getDemo()
    {
        return $this->container['demo'];
    }

    /**
     * Sets demo
     * @param bool $demo Demo Flag
     * @return $this
     */
    public function setDemo($demo)
    {
        $this->container['demo'] = $demo;

        return $this;
    }

    /**
     * Gets person
     * @return \Secuconnect\Client\Model\IdentrequestPersonDTO[]
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     * @param \Secuconnect\Client\Model\IdentrequestPersonDTO[] $person The person which should be identified by third party provider
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets owner_transaction_id
     * @return string
     */
    public function getOwnerTransactionId()
    {
        return $this->container['owner_transaction_id'];
    }

    /**
     * Sets owner_transaction_id
     * @param string $owner_transaction_id Arbitrary ID to identify identrequest on merchant
     * @return $this
     */
    public function setOwnerTransactionId($owner_transaction_id)
    {
        $this->container['owner_transaction_id'] = $owner_transaction_id;

        return $this;
    }

    /**
     * Gets redirect_url
     * @return \Secuconnect\Client\Model\IdentrequestRedirectUrls
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     * @param \Secuconnect\Client\Model\IdentrequestRedirectUrls $redirect_url redirect_url
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param integer $offset Offset
     * @return mixed
     */
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

