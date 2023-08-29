<?php

namespace Secuconnect\Client\Model;

/**
 * GeneralMerchantsPublicDataModel
 *
 * @category Class
 * @description GeneralMerchantsPublicDataModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralMerchantsPublicDataModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GeneralMerchantsPublicDataModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'legal_details' => '\Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]',
        'company' => '\Secuconnect\Client\Model\GeneralMerchantsPublicDataCompany',
        'merchant_urls' => '\Secuconnect\Client\Model\GeneralMerchantsUrls[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'legal_details' => null,
        'company' => null,
        'merchant_urls' => null
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
        'legal_details' => 'legal_details',
        'company' => 'company',
        'merchant_urls' => 'merchant_urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'legal_details' => 'setLegalDetails',
        'company' => 'setCompany',
        'merchant_urls' => 'setMerchantUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'legal_details' => 'getLegalDetails',
        'company' => 'getCompany',
        'merchant_urls' => 'getMerchantUrls'
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

        $this->container['legal_details'] = isset($data['legal_details']) ? $data['legal_details'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['merchant_urls'] = isset($data['merchant_urls']) ? $data['merchant_urls'] : null;
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
     * Gets legal_details
     * @return \Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]
     */
    public function getLegalDetails()
    {
        return $this->container['legal_details'];
    }

    /**
     * Sets legal_details
     * @param \Secuconnect\Client\Model\GeneralMerchantsLegalDetails[] $legal_details Legal details like terms of use, privacy policy, or imprint
     * @return $this
     */
    public function setLegalDetails($legal_details)
    {
        $this->container['legal_details'] = $legal_details;

        return $this;
    }

    /**
     * Gets company
     * @return \Secuconnect\Client\Model\GeneralMerchantsPublicDataCompany
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param \Secuconnect\Client\Model\GeneralMerchantsPublicDataCompany $company company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets merchant_urls
     * @return \Secuconnect\Client\Model\GeneralMerchantsUrls[]
     */
    public function getMerchantUrls()
    {
        return $this->container['merchant_urls'];
    }

    /**
     * Sets merchant_urls
     * @param \Secuconnect\Client\Model\GeneralMerchantsUrls[] $merchant_urls URLs
     * @return $this
     */
    public function setMerchantUrls($merchant_urls)
    {
        $this->container['merchant_urls'] = $merchant_urls;

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

