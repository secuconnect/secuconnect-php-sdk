<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentContractsDTORequestIdAdditionalDataCreateCard
 *
 * @category Class
 * @description Create card input
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsDTORequestIdAdditionalDataCreateCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContractsDTORequestIdAdditionalData_create_card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_scheme' => 'CARD_SCHEME',
        'app_language' => 'string',
        'passport_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_scheme' => null,
        'app_language' => null,
        'passport_id' => null
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
        'card_scheme' => 'card_scheme',
        'app_language' => 'app_language',
        'passport_id' => 'passport_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'card_scheme' => 'setCardScheme',
        'app_language' => 'setAppLanguage',
        'passport_id' => 'setPassportId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'card_scheme' => 'getCardScheme',
        'app_language' => 'getAppLanguage',
        'passport_id' => 'getPassportId'
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
    const CARD_SCHEME_VI = 'VI';    const CARD_SCHEME_MC = 'MC';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCardSchemeAllowableValues()
    {
        return [
            self::CARD_SCHEME_VI,
self::CARD_SCHEME_MC,        ];
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
        $this->container['card_scheme'] = isset($data['card_scheme']) ? $data['card_scheme'] : null;
        $this->container['app_language'] = isset($data['app_language']) ? $data['app_language'] : null;
        $this->container['passport_id'] = isset($data['passport_id']) ? $data['passport_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getCardSchemeAllowableValues();
        if (!is_null($this->container['card_scheme']) && !in_array($this->container['card_scheme'], $allowed_values, true)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'card_scheme', must be one of '%s'",
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
     * Gets card_scheme
     * @return string
     */
    public function getCardScheme()
    {
        return $this->container['card_scheme'];
    }

    /**
     * Sets card_scheme
     * @param string $card_scheme Credit card schema
     * @return $this
     */
    public function setCardScheme($card_scheme)
    {
        $allowed_values = $this->getCardSchemeAllowableValues();
        if (!is_null($card_scheme) && !in_array($card_scheme, $allowed_values, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'card_scheme', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['card_scheme'] = $card_scheme;

        return $this;
    }

    /**
     * Gets app_language
     * @return string
     */
    public function getAppLanguage()
    {
        return $this->container['app_language'];
    }

    /**
     * Sets app_language
     * @param string $app_language app_language
     * @return $this
     */
    public function setAppLanguage($app_language)
    {
        $this->container['app_language'] = $app_language;

        return $this;
    }

    /**
     * Gets passport_id
     * @return string
     */
    public function getPassportId()
    {
        return $this->container['passport_id'];
    }

    /**
     * Sets passport_id
     * @param string $passport_id Passport ID
     * @return $this
     */
    public function setPassportId($passport_id)
    {
        $this->container['passport_id'] = $passport_id;

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

