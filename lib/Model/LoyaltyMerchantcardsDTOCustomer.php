<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * LoyaltyMerchantcardsDTOCustomer
 *
 * @category Class
 * @description LoyaltyMerchantcardsDTOCustomer
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsDTOCustomer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyMerchantcardsDTOCustomer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_contact' => '\Secuconnect\Client\Model\Contact',
        'customernumber' => 'string',
        'note' => 'string',
        'consent_for_communication' => 'string',
        'additional_data' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_contact' => null,
        'customernumber' => null,
        'note' => null,
        'consent_for_communication' => null,
        'additional_data' => null
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
        'merchant_contact' => 'merchant_contact',
        'customernumber' => 'customernumber',
        'note' => 'note',
        'consent_for_communication' => 'consent_for_communication',
        'additional_data' => 'additional_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant_contact' => 'setMerchantContact',
        'customernumber' => 'setCustomernumber',
        'note' => 'setNote',
        'consent_for_communication' => 'setConsentForCommunication',
        'additional_data' => 'setAdditionalData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant_contact' => 'getMerchantContact',
        'customernumber' => 'getCustomernumber',
        'note' => 'getNote',
        'consent_for_communication' => 'getConsentForCommunication',
        'additional_data' => 'getAdditionalData'
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
        $this->container['merchant_contact'] = isset($data['merchant_contact']) ? $data['merchant_contact'] : null;
        $this->container['customernumber'] = isset($data['customernumber']) ? $data['customernumber'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['consent_for_communication'] = isset($data['consent_for_communication']) ? $data['consent_for_communication'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
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
     * Gets merchant_contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getMerchantContact()
    {
        return $this->container['merchant_contact'];
    }

    /**
     * Sets merchant_contact
     * @param \Secuconnect\Client\Model\Contact $merchant_contact merchant_contact
     * @return $this
     */
    public function setMerchantContact($merchant_contact)
    {
        $this->container['merchant_contact'] = $merchant_contact;

        return $this;
    }

    /**
     * Gets customernumber
     * @return string
     */
    public function getCustomernumber()
    {
        return $this->container['customernumber'];
    }

    /**
     * Sets customernumber
     * @param string $customernumber Customer number
     * @return $this
     */
    public function setCustomernumber($customernumber)
    {
        $this->container['customernumber'] = $customernumber;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     * @param string $note Note for customer
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets consent_for_communication
     * @return string
     */
    public function getConsentForCommunication()
    {
        return $this->container['consent_for_communication'];
    }

    /**
     * Sets consent_for_communication
     * @param string $consent_for_communication Consent for communication setting
     * @return $this
     */
    public function setConsentForCommunication($consent_for_communication)
    {
        $this->container['consent_for_communication'] = $consent_for_communication;

        return $this;
    }

    /**
     * Gets additional_data
     * @return object
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     * @param object $additional_data additional data properties
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

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

