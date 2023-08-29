<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentMandatesDTO
 *
 * @category Class
 * @description PaymentMandatesDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMandatesDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMandatesDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iban' => 'string',
        'bic' => 'string',
        'type' => 'string',
        'date_of_signature' => 'string',
        'identification' => 'string',
        'merchant_id' => '\Secuconnect\Client\Model\ProductInstanceID'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iban' => null,
        'bic' => null,
        'type' => null,
        'date_of_signature' => null,
        'identification' => null,
        'merchant_id' => null
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
        'iban' => 'iban',
        'bic' => 'bic',
        'type' => 'type',
        'date_of_signature' => 'date_of_signature',
        'identification' => 'identification',
        'merchant_id' => 'merchant_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'iban' => 'setIban',
        'bic' => 'setBic',
        'type' => 'setType',
        'date_of_signature' => 'setDateOfSignature',
        'identification' => 'setIdentification',
        'merchant_id' => 'setMerchantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'iban' => 'getIban',
        'bic' => 'getBic',
        'type' => 'getType',
        'date_of_signature' => 'getDateOfSignature',
        'identification' => 'getIdentification',
        'merchant_id' => 'getMerchantId'
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
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['date_of_signature'] = isset($data['date_of_signature']) ? $data['date_of_signature'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['iban'] === null) {
            $invalid_properties[] = "'iban' can't be null";
        }
        if ($this->container['bic'] === null) {
            $invalid_properties[] = "'bic' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['date_of_signature'] === null) {
            $invalid_properties[] = "'date_of_signature' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalid_properties[] = "'merchant_id' can't be null";
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
     * Gets iban
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     * @param string $iban International Bank Account Number (IBAN)
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     * @param string $bic Bank Identifier Code (BIC), or formerly SWIFT code
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

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
     * @param string $type SEPA mandate type: `COR1`, `CORE`, `B2B`
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets date_of_signature
     * @return string
     */
    public function getDateOfSignature()
    {
        return $this->container['date_of_signature'];
    }

    /**
     * Sets date_of_signature
     * @param string $date_of_signature date_of_signature
     * @return $this
     */
    public function setDateOfSignature($date_of_signature)
    {
        $this->container['date_of_signature'] = $date_of_signature;

        return $this;
    }

    /**
     * Gets identification
     * @return string
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     * @param string $identification SEPA Payment Identification
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

        return $this;
    }

    /**
     * Gets merchant_id
     * @return \Secuconnect\Client\Model\ProductInstanceID
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     * @param \Secuconnect\Client\Model\ProductInstanceID $merchant_id merchant_id
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

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

