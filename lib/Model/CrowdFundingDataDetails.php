<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * CrowdFundingDataDetails
 *
 * @category Class
 * @description Details of the project transaction count and total amount per payment method
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CrowdFundingDataDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CrowdFundingDataDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency' => 'string',
        'debit' => '\Secuconnect\Client\Model\PaymentMethodBreakdown',
        'credit_card' => '\Secuconnect\Client\Model\PaymentMethodBreakdown',
        'prepay' => '\Secuconnect\Client\Model\PaymentMethodBreakdown',
        'sofort' => '\Secuconnect\Client\Model\PaymentMethodBreakdown',
        'twint' => '\Secuconnect\Client\Model\PaymentMethodBreakdown'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency' => null,
        'debit' => null,
        'credit_card' => null,
        'prepay' => null,
        'sofort' => null,
        'twint' => null
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
        'debit' => 'debit',
        'credit_card' => 'credit_card',
        'prepay' => 'prepay',
        'sofort' => 'sofort',
        'twint' => 'twint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'debit' => 'setDebit',
        'credit_card' => 'setCreditCard',
        'prepay' => 'setPrepay',
        'sofort' => 'setSofort',
        'twint' => 'setTwint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'debit' => 'getDebit',
        'credit_card' => 'getCreditCard',
        'prepay' => 'getPrepay',
        'sofort' => 'getSofort',
        'twint' => 'getTwint'
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
        $this->container['debit'] = isset($data['debit']) ? $data['debit'] : null;
        $this->container['credit_card'] = isset($data['credit_card']) ? $data['credit_card'] : null;
        $this->container['prepay'] = isset($data['prepay']) ? $data['prepay'] : null;
        $this->container['sofort'] = isset($data['sofort']) ? $data['sofort'] : null;
        $this->container['twint'] = isset($data['twint']) ? $data['twint'] : null;
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
     * Gets debit
     * @return \Secuconnect\Client\Model\PaymentMethodBreakdown
     */
    public function getDebit()
    {
        return $this->container['debit'];
    }

    /**
     * Sets debit
     * @param \Secuconnect\Client\Model\PaymentMethodBreakdown $debit debit
     * @return $this
     */
    public function setDebit($debit)
    {
        $this->container['debit'] = $debit;

        return $this;
    }

    /**
     * Gets credit_card
     * @return \Secuconnect\Client\Model\PaymentMethodBreakdown
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     * @param \Secuconnect\Client\Model\PaymentMethodBreakdown $credit_card credit_card
     * @return $this
     */
    public function setCreditCard($credit_card)
    {
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets prepay
     * @return \Secuconnect\Client\Model\PaymentMethodBreakdown
     */
    public function getPrepay()
    {
        return $this->container['prepay'];
    }

    /**
     * Sets prepay
     * @param \Secuconnect\Client\Model\PaymentMethodBreakdown $prepay prepay
     * @return $this
     */
    public function setPrepay($prepay)
    {
        $this->container['prepay'] = $prepay;

        return $this;
    }

    /**
     * Gets sofort
     * @return \Secuconnect\Client\Model\PaymentMethodBreakdown
     */
    public function getSofort()
    {
        return $this->container['sofort'];
    }

    /**
     * Sets sofort
     * @param \Secuconnect\Client\Model\PaymentMethodBreakdown $sofort sofort
     * @return $this
     */
    public function setSofort($sofort)
    {
        $this->container['sofort'] = $sofort;

        return $this;
    }

    /**
     * Gets twint
     * @return \Secuconnect\Client\Model\PaymentMethodBreakdown
     */
    public function getTwint()
    {
        return $this->container['twint'];
    }

    /**
     * Sets twint
     * @param \Secuconnect\Client\Model\PaymentMethodBreakdown $twint twint
     * @return $this
     */
    public function setTwint($twint)
    {
        $this->container['twint'] = $twint;

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

