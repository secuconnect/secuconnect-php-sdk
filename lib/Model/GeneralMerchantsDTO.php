<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * GeneralMerchantsDTO
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GeneralMerchantsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GeneralMerchantsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'legal_details' => '\Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]',
        'checkout_options' => '\Secuconnect\Client\Model\GeneralMerchantsCheckoutOptions',
        'urls' => '\Secuconnect\Client\Model\GeneralMerchantsUrls[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'legal_details' => null,
        'checkout_options' => null,
        'urls' => null
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
        'legal_details' => 'legal_details',
        'checkout_options' => 'checkout_options',
        'urls' => 'urls'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'legal_details' => 'setLegalDetails',
        'checkout_options' => 'setCheckoutOptions',
        'urls' => 'setUrls'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'legal_details' => 'getLegalDetails',
        'checkout_options' => 'getCheckoutOptions',
        'urls' => 'getUrls'
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
        $this->container['legal_details'] = isset($data['legal_details']) ? $data['legal_details'] : null;
        $this->container['checkout_options'] = isset($data['checkout_options']) ? $data['checkout_options'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
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
     * Gets legal_details
     * @return \Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]
     */
    public function getLegalDetails()
    {
        return $this->container['legal_details'];
    }

    /**
     * Sets legal_details
     * @param \Secuconnect\Client\Model\GeneralMerchantsLegalDetails[] $legal_details Legal details
     * @return $this
     */
    public function setLegalDetails($legal_details)
    {
        $this->container['legal_details'] = $legal_details;

        return $this;
    }

    /**
     * Gets checkout_options
     * @return \Secuconnect\Client\Model\GeneralMerchantsCheckoutOptions
     */
    public function getCheckoutOptions()
    {
        return $this->container['checkout_options'];
    }

    /**
     * Sets checkout_options
     * @param \Secuconnect\Client\Model\GeneralMerchantsCheckoutOptions $checkout_options Checkout options
     * @return $this
     */
    public function setCheckoutOptions($checkout_options)
    {
        $this->container['checkout_options'] = $checkout_options;

        return $this;
    }

    /**
     * Gets urls
     * @return \Secuconnect\Client\Model\GeneralMerchantsUrls[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     * @param \Secuconnect\Client\Model\GeneralMerchantsUrls[] $urls Urls
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

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


