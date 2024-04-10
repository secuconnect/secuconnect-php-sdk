<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * LoyaltyMerchantcardsDTO
 *
 * @category Class
 * @description LoyaltyMerchantcardsDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyMerchantcardsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant' => 'string',
        'card' => 'string',
        'payment_container' => 'string',
        'created_by_merchant' => 'bool',
        'used_by_merchant' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant' => null,
        'card' => null,
        'payment_container' => null,
        'created_by_merchant' => null,
        'used_by_merchant' => null
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
        'merchant' => 'merchant',
        'card' => 'card',
        'payment_container' => 'payment_container',
        'created_by_merchant' => 'created_by_merchant',
        'used_by_merchant' => 'used_by_merchant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant' => 'setMerchant',
        'card' => 'setCard',
        'payment_container' => 'setPaymentContainer',
        'created_by_merchant' => 'setCreatedByMerchant',
        'used_by_merchant' => 'setUsedByMerchant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant' => 'getMerchant',
        'card' => 'getCard',
        'payment_container' => 'getPaymentContainer',
        'created_by_merchant' => 'getCreatedByMerchant',
        'used_by_merchant' => 'getUsedByMerchant'
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
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['payment_container'] = isset($data['payment_container']) ? $data['payment_container'] : null;
        $this->container['created_by_merchant'] = isset($data['created_by_merchant']) ? $data['created_by_merchant'] : null;
        $this->container['used_by_merchant'] = isset($data['used_by_merchant']) ? $data['used_by_merchant'] : null;
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
     * Gets merchant
     * @return string
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param string $merchant General merchant id
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets card
     * @return string
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param string $card Loyalty Card ID
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets payment_container
     * @return string
     */
    public function getPaymentContainer()
    {
        return $this->container['payment_container'];
    }

    /**
     * Sets payment_container
     * @param string $payment_container Loyalty Payment Container ID
     * @return $this
     */
    public function setPaymentContainer($payment_container)
    {
        $this->container['payment_container'] = $payment_container;

        return $this;
    }

    /**
     * Gets created_by_merchant
     * @return bool
     */
    public function getCreatedByMerchant()
    {
        return $this->container['created_by_merchant'];
    }

    /**
     * Sets created_by_merchant
     * @param bool $created_by_merchant Whether the card was created by the merchant
     * @return $this
     */
    public function setCreatedByMerchant($created_by_merchant)
    {
        $this->container['created_by_merchant'] = $created_by_merchant;

        return $this;
    }

    /**
     * Gets used_by_merchant
     * @return bool
     */
    public function getUsedByMerchant()
    {
        return $this->container['used_by_merchant'];
    }

    /**
     * Sets used_by_merchant
     * @param bool $used_by_merchant Whether the card was used by the merchant
     * @return $this
     */
    public function setUsedByMerchant($used_by_merchant)
    {
        $this->container['used_by_merchant'] = $used_by_merchant;

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

