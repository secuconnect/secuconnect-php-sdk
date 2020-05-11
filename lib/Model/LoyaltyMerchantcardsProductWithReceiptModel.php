<?php

namespace Secuconnect\Client\Model;

/**
 * LoyaltyMerchantcardsProductWithReceiptModel
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsProductWithReceiptModel extends LoyaltyMerchantcardsProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyMerchantcardsProductWithReceiptModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'receipt_header' => '\Secuconnect\Client\Model\ReceiptType[]',
        'receipt' => '\Secuconnect\Client\Model\ReceiptTypeValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'receipt_header' => null,
        'receipt' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'receipt_header' => 'receipt_header',
        'receipt' => 'receipt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'receipt_header' => 'setReceiptHeader',
        'receipt' => 'setReceipt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'receipt_header' => 'getReceiptHeader',
        'receipt' => 'getReceipt'
    ];

    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['receipt_header'] = isset($data['receipt_header']) ? $data['receipt_header'] : null;
        $this->container['receipt'] = isset($data['receipt']) ? $data['receipt'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

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
     * Gets receipt_header
     * @return \Secuconnect\Client\Model\ReceiptType[]
     */
    public function getReceiptHeader()
    {
        return $this->container['receipt_header'];
    }

    /**
     * Sets receipt_header
     * @param \Secuconnect\Client\Model\ReceiptType[] $receipt_header Receipt header
     * @return $this
     */
    public function setReceiptHeader($receipt_header)
    {
        $this->container['receipt_header'] = $receipt_header;

        return $this;
    }

    /**
     * Gets receipt
     * @return \Secuconnect\Client\Model\ReceiptTypeValue[]
     */
    public function getReceipt()
    {
        return $this->container['receipt'];
    }

    /**
     * Sets receipt
     * @param \Secuconnect\Client\Model\ReceiptTypeValue[] $receipt Receipt
     * @return $this
     */
    public function setReceipt($receipt)
    {
        $this->container['receipt'] = $receipt;

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

