<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * CustomersWithoutMerchantcardAndDuplicatedCustomers
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomersWithoutMerchantcardAndDuplicatedCustomers implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'customers_without_merchantcard_and_duplicated_customers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customers_without_merchantcard' => 'null[]',
        'duplicated_customers' => 'null[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customers_without_merchantcard' => null,
        'duplicated_customers' => null
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
        'customers_without_merchantcard' => 'customers_without_merchantcard',
        'duplicated_customers' => 'duplicated_customers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customers_without_merchantcard' => 'setCustomersWithoutMerchantcard',
        'duplicated_customers' => 'setDuplicatedCustomers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customers_without_merchantcard' => 'getCustomersWithoutMerchantcard',
        'duplicated_customers' => 'getDuplicatedCustomers'
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
        $this->container['customers_without_merchantcard'] = isset($data['customers_without_merchantcard']) ? $data['customers_without_merchantcard'] : null;
        $this->container['duplicated_customers'] = isset($data['duplicated_customers']) ? $data['duplicated_customers'] : null;
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
     * Gets customers_without_merchantcard
     * @return null[]
     */
    public function getCustomersWithoutMerchantcard()
    {
        return $this->container['customers_without_merchantcard'];
    }

    /**
     * Sets customers_without_merchantcard
     * @param null[] $customers_without_merchantcard customers without merchantcard
     * @return $this
     */
    public function setCustomersWithoutMerchantcard($customers_without_merchantcard)
    {
        $this->container['customers_without_merchantcard'] = $customers_without_merchantcard;

        return $this;
    }

    /**
     * Gets duplicated_customers
     * @return null[]
     */
    public function getDuplicatedCustomers()
    {
        return $this->container['duplicated_customers'];
    }

    /**
     * Sets duplicated_customers
     * @param null[] $duplicated_customers duplicated customers
     * @return $this
     */
    public function setDuplicatedCustomers($duplicated_customers)
    {
        $this->container['duplicated_customers'] = $duplicated_customers;

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

