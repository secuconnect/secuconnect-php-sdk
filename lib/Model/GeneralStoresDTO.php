<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * GeneralStoresDTO
 *
 * @category Class
 * @description GeneralStoresDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralStoresDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GeneralStoresDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'merchant' => 'string',
        'address' => '\Secuconnect\Client\Model\Address',
        'facebook_id' => 'string',
        'phone' => 'string',
        'url_website' => 'string',
        'photo_main' => 'string',
        'photo' => 'string[]',
        'open_hours' => '\Secuconnect\Client\Model\OpenHours[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'merchant' => null,
        'address' => null,
        'facebook_id' => null,
        'phone' => null,
        'url_website' => null,
        'photo_main' => null,
        'photo' => null,
        'open_hours' => null
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
        'name' => 'name',
        'merchant' => 'merchant',
        'address' => 'address',
        'facebook_id' => 'facebook_id',
        'phone' => 'phone',
        'url_website' => 'url_website',
        'photo_main' => 'photo_main',
        'photo' => 'photo',
        'open_hours' => 'open_hours'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'merchant' => 'setMerchant',
        'address' => 'setAddress',
        'facebook_id' => 'setFacebookId',
        'phone' => 'setPhone',
        'url_website' => 'setUrlWebsite',
        'photo_main' => 'setPhotoMain',
        'photo' => 'setPhoto',
        'open_hours' => 'setOpenHours'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'merchant' => 'getMerchant',
        'address' => 'getAddress',
        'facebook_id' => 'getFacebookId',
        'phone' => 'getPhone',
        'url_website' => 'getUrlWebsite',
        'photo_main' => 'getPhotoMain',
        'photo' => 'getPhoto',
        'open_hours' => 'getOpenHours'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['facebook_id'] = isset($data['facebook_id']) ? $data['facebook_id'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['url_website'] = isset($data['url_website']) ? $data['url_website'] : null;
        $this->container['photo_main'] = isset($data['photo_main']) ? $data['photo_main'] : null;
        $this->container['photo'] = isset($data['photo']) ? $data['photo'] : null;
        $this->container['open_hours'] = isset($data['open_hours']) ? $data['open_hours'] : null;
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
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
     * @param string $merchant Merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets address
     * @return \Secuconnect\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \Secuconnect\Client\Model\Address $address address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets facebook_id
     * @return string
     */
    public function getFacebookId()
    {
        return $this->container['facebook_id'];
    }

    /**
     * Sets facebook_id
     * @param string $facebook_id New facebook ID
     * @return $this
     */
    public function setFacebookId($facebook_id)
    {
        $this->container['facebook_id'] = $facebook_id;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone New phone number
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets url_website
     * @return string
     */
    public function getUrlWebsite()
    {
        return $this->container['url_website'];
    }

    /**
     * Sets url_website
     * @param string $url_website New URL to general store website
     * @return $this
     */
    public function setUrlWebsite($url_website)
    {
        $this->container['url_website'] = $url_website;

        return $this;
    }

    /**
     * Gets photo_main
     * @return string
     */
    public function getPhotoMain()
    {
        return $this->container['photo_main'];
    }

    /**
     * Sets photo_main
     * @param string $photo_main New main photo
     * @return $this
     */
    public function setPhotoMain($photo_main)
    {
        $this->container['photo_main'] = $photo_main;

        return $this;
    }

    /**
     * Gets photo
     * @return string[]
     */
    public function getPhoto()
    {
        return $this->container['photo'];
    }

    /**
     * Sets photo
     * @param string[] $photo New photos
     * @return $this
     */
    public function setPhoto($photo)
    {
        $this->container['photo'] = $photo;

        return $this;
    }

    /**
     * Gets open_hours
     * @return \Secuconnect\Client\Model\OpenHours[]
     */
    public function getOpenHours()
    {
        return $this->container['open_hours'];
    }

    /**
     * Sets open_hours
     * @param \Secuconnect\Client\Model\OpenHours[] $open_hours Opening hours per weekday
     * @return $this
     */
    public function setOpenHours($open_hours)
    {
        $this->container['open_hours'] = $open_hours;

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

