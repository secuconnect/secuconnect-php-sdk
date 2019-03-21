<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsCheckoutLinks
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsCheckoutLinks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionsCheckoutLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url_success' => 'string',
        'url_failure' => 'string',
        'url_abort' => 'string',
        'url_error' => 'string',
        'url_checkout' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url_success' => null,
        'url_failure' => null,
        'url_abort' => null,
        'url_error' => null,
        'url_checkout' => null
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
        'url_success' => 'url_success',
        'url_failure' => 'url_failure',
        'url_abort' => 'url_abort',
        'url_error' => 'url_error',
        'url_checkout' => 'url_checkout'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'url_success' => 'setUrlSuccess',
        'url_failure' => 'setUrlFailure',
        'url_abort' => 'setUrlAbort',
        'url_error' => 'setUrlError',
        'url_checkout' => 'setUrlCheckout'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'url_success' => 'getUrlSuccess',
        'url_failure' => 'getUrlFailure',
        'url_abort' => 'getUrlAbort',
        'url_error' => 'getUrlError',
        'url_checkout' => 'getUrlCheckout'
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
        $this->container['url_success'] = isset($data['url_success']) ? $data['url_success'] : null;
        $this->container['url_failure'] = isset($data['url_failure']) ? $data['url_failure'] : null;
        $this->container['url_abort'] = isset($data['url_abort']) ? $data['url_abort'] : null;
        $this->container['url_error'] = isset($data['url_error']) ? $data['url_error'] : null;
        $this->container['url_checkout'] = isset($data['url_checkout']) ? $data['url_checkout'] : null;
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
     * Gets url_success
     * @return string
     */
    public function getUrlSuccess()
    {
        return $this->container['url_success'];
    }

    /**
     * Sets url_success
     * @param string $url_success Success URL
     * @return $this
     */
    public function setUrlSuccess($url_success)
    {
        $this->container['url_success'] = $url_success;

        return $this;
    }

    /**
     * Gets url_failure
     * @return string
     */
    public function getUrlFailure()
    {
        return $this->container['url_failure'];
    }

    /**
     * Sets url_failure
     * @param string $url_failure Failure URL
     * @return $this
     */
    public function setUrlFailure($url_failure)
    {
        $this->container['url_failure'] = $url_failure;

        return $this;
    }

    /**
     * Gets url_abort
     * @return string
     */
    public function getUrlAbort()
    {
        return $this->container['url_abort'];
    }

    /**
     * Sets url_abort
     * @param string $url_abort Abort URL
     * @return $this
     */
    public function setUrlAbort($url_abort)
    {
        $this->container['url_abort'] = $url_abort;

        return $this;
    }

    /**
     * Gets url_error
     * @return string
     */
    public function getUrlError()
    {
        return $this->container['url_error'];
    }

    /**
     * Sets url_error
     * @param string $url_error Error URL
     * @return $this
     */
    public function setUrlError($url_error)
    {
        $this->container['url_error'] = $url_error;

        return $this;
    }

    /**
     * Gets url_checkout
     * @return string
     */
    public function getUrlCheckout()
    {
        return $this->container['url_checkout'];
    }

    /**
     * Sets url_checkout
     * @param string $url_checkout Smart Checkout URL
     * @return $this
     */
    public function setUrlCheckout($url_checkout)
    {
        $this->container['url_checkout'] = $url_checkout;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
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


