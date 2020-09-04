<?php

namespace Secuconnect\Client\Model;

/**
 * GeneralStoresProductModel
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralStoresProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GeneralStoresProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_old' => 'string',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'store_name' => 'string',
        'facebook_id' => 'string',
        'source' => 'string',
        'key' => 'string',
        'hash' => 'string',
        'address_components' => '\Secuconnect\Client\Model\AddressComponents[]',
        'address_formatted' => 'string',
        'phone_number_formatted' => 'string',
        'geometry' => '\Secuconnect\Client\Model\GeoAddressGeometry',
        'name' => 'string',
        'name_raw' => 'string',
        'photo_main' => 'string',
        'photo' => 'string[]',
        'category_main' => 'string',
        'category' => 'string[]',
        'url_googleplus' => 'string',
        'url_website' => 'string',
        'open_hours' => '\Secuconnect\Client\Model\OpenHours[]',
        'open_now' => 'bool',
        'open_time' => 'string',
        'utc_offset' => 'string',
        'assigned_by' => '\Secuconnect\Client\Model\AssignedBy[]',
        'invited_by' => '\Secuconnect\Client\Model\InvitedBy[]',
        'has_beacon' => 'bool',
        'acceptance_point' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_old' => 'id',
        'merchant' => null,
        'store_name' => null,
        'facebook_id' => null,
        'source' => null,
        'key' => null,
        'hash' => null,
        'address_components' => null,
        'address_formatted' => null,
        'phone_number_formatted' => null,
        'geometry' => null,
        'name' => null,
        'name_raw' => null,
        'photo_main' => null,
        'photo' => null,
        'category_main' => null,
        'category' => null,
        'url_googleplus' => null,
        'url_website' => null,
        'open_hours' => null,
        'open_now' => null,
        'open_time' => null,
        'utc_offset' => null,
        'assigned_by' => null,
        'invited_by' => null,
        'has_beacon' => null,
        'acceptance_point' => null
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
        'id_old' => 'id_old',
        'merchant' => 'merchant',
        'store_name' => 'store_name',
        'facebook_id' => 'facebook_id',
        'source' => 'source',
        'key' => 'key',
        'hash' => 'hash',
        'address_components' => 'address_components',
        'address_formatted' => 'address_formatted',
        'phone_number_formatted' => 'phone_number_formatted',
        'geometry' => 'geometry',
        'name' => 'name',
        'name_raw' => 'name_raw',
        'photo_main' => 'photo_main',
        'photo' => 'photo',
        'category_main' => 'category_main',
        'category' => 'category',
        'url_googleplus' => 'url_googleplus',
        'url_website' => 'url_website',
        'open_hours' => 'open_hours',
        'open_now' => 'open_now',
        'open_time' => 'open_time',
        'utc_offset' => 'utc_offset',
        'assigned_by' => 'assigned_by',
        'invited_by' => 'invited_by',
        'has_beacon' => 'has_beacon',
        'acceptance_point' => 'acceptance_point'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_old' => 'setIdOld',
        'merchant' => 'setMerchant',
        'store_name' => 'setStoreName',
        'facebook_id' => 'setFacebookId',
        'source' => 'setSource',
        'key' => 'setKey',
        'hash' => 'setHash',
        'address_components' => 'setAddressComponents',
        'address_formatted' => 'setAddressFormatted',
        'phone_number_formatted' => 'setPhoneNumberFormatted',
        'geometry' => 'setGeometry',
        'name' => 'setName',
        'name_raw' => 'setNameRaw',
        'photo_main' => 'setPhotoMain',
        'photo' => 'setPhoto',
        'category_main' => 'setCategoryMain',
        'category' => 'setCategory',
        'url_googleplus' => 'setUrlGoogleplus',
        'url_website' => 'setUrlWebsite',
        'open_hours' => 'setOpenHours',
        'open_now' => 'setOpenNow',
        'open_time' => 'setOpenTime',
        'utc_offset' => 'setUtcOffset',
        'assigned_by' => 'setAssignedBy',
        'invited_by' => 'setInvitedBy',
        'has_beacon' => 'setHasBeacon',
        'acceptance_point' => 'setAcceptancePoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_old' => 'getIdOld',
        'merchant' => 'getMerchant',
        'store_name' => 'getStoreName',
        'facebook_id' => 'getFacebookId',
        'source' => 'getSource',
        'key' => 'getKey',
        'hash' => 'getHash',
        'address_components' => 'getAddressComponents',
        'address_formatted' => 'getAddressFormatted',
        'phone_number_formatted' => 'getPhoneNumberFormatted',
        'geometry' => 'getGeometry',
        'name' => 'getName',
        'name_raw' => 'getNameRaw',
        'photo_main' => 'getPhotoMain',
        'photo' => 'getPhoto',
        'category_main' => 'getCategoryMain',
        'category' => 'getCategory',
        'url_googleplus' => 'getUrlGoogleplus',
        'url_website' => 'getUrlWebsite',
        'open_hours' => 'getOpenHours',
        'open_now' => 'getOpenNow',
        'open_time' => 'getOpenTime',
        'utc_offset' => 'getUtcOffset',
        'assigned_by' => 'getAssignedBy',
        'invited_by' => 'getInvitedBy',
        'has_beacon' => 'getHasBeacon',
        'acceptance_point' => 'getAcceptancePoint'
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

        $this->container['id_old'] = isset($data['id_old']) ? $data['id_old'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['facebook_id'] = isset($data['facebook_id']) ? $data['facebook_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['address_components'] = isset($data['address_components']) ? $data['address_components'] : null;
        $this->container['address_formatted'] = isset($data['address_formatted']) ? $data['address_formatted'] : null;
        $this->container['phone_number_formatted'] = isset($data['phone_number_formatted']) ? $data['phone_number_formatted'] : null;
        $this->container['geometry'] = isset($data['geometry']) ? $data['geometry'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_raw'] = isset($data['name_raw']) ? $data['name_raw'] : null;
        $this->container['photo_main'] = isset($data['photo_main']) ? $data['photo_main'] : null;
        $this->container['photo'] = isset($data['photo']) ? $data['photo'] : null;
        $this->container['category_main'] = isset($data['category_main']) ? $data['category_main'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['url_googleplus'] = isset($data['url_googleplus']) ? $data['url_googleplus'] : null;
        $this->container['url_website'] = isset($data['url_website']) ? $data['url_website'] : null;
        $this->container['open_hours'] = isset($data['open_hours']) ? $data['open_hours'] : null;
        $this->container['open_now'] = isset($data['open_now']) ? $data['open_now'] : null;
        $this->container['open_time'] = isset($data['open_time']) ? $data['open_time'] : null;
        $this->container['utc_offset'] = isset($data['utc_offset']) ? $data['utc_offset'] : null;
        $this->container['assigned_by'] = isset($data['assigned_by']) ? $data['assigned_by'] : null;
        $this->container['invited_by'] = isset($data['invited_by']) ? $data['invited_by'] : null;
        $this->container['has_beacon'] = isset($data['has_beacon']) ? $data['has_beacon'] : null;
        $this->container['acceptance_point'] = isset($data['acceptance_point']) ? $data['acceptance_point'] : null;
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
     * Gets id_old
     * @return string
     */
    public function getIdOld()
    {
        return $this->container['id_old'];
    }

    /**
     * Sets id_old
     * @param string $id_old Old id of general store
     * @return $this
     */
    public function setIdOld($id_old)
    {
        $this->container['id_old'] = $id_old;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\ProductInstanceUID $merchant merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets store_name
     * @return string
     */
    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name
     * @param string $store_name Store Name
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

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
     * @param string $facebook_id Facebook id
     * @return $this
     */
    public function setFacebookId($facebook_id)
    {
        $this->container['facebook_id'] = $facebook_id;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source Source
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key Key
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets hash
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     * @param string $hash Hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets address_components
     * @return \Secuconnect\Client\Model\AddressComponents[]
     */
    public function getAddressComponents()
    {
        return $this->container['address_components'];
    }

    /**
     * Sets address_components
     * @param \Secuconnect\Client\Model\AddressComponents[] $address_components Address components
     * @return $this
     */
    public function setAddressComponents($address_components)
    {
        $this->container['address_components'] = $address_components;

        return $this;
    }

    /**
     * Gets address_formatted
     * @return string
     */
    public function getAddressFormatted()
    {
        return $this->container['address_formatted'];
    }

    /**
     * Sets address_formatted
     * @param string $address_formatted General store formatted address
     * @return $this
     */
    public function setAddressFormatted($address_formatted)
    {
        $this->container['address_formatted'] = $address_formatted;

        return $this;
    }

    /**
     * Gets phone_number_formatted
     * @return string
     */
    public function getPhoneNumberFormatted()
    {
        return $this->container['phone_number_formatted'];
    }

    /**
     * Sets phone_number_formatted
     * @param string $phone_number_formatted General store formatted phone number
     * @return $this
     */
    public function setPhoneNumberFormatted($phone_number_formatted)
    {
        $this->container['phone_number_formatted'] = $phone_number_formatted;

        return $this;
    }

    /**
     * Gets geometry
     * @return \Secuconnect\Client\Model\GeoAddressGeometry
     */
    public function getGeometry()
    {
        return $this->container['geometry'];
    }

    /**
     * Sets geometry
     * @param \Secuconnect\Client\Model\GeoAddressGeometry $geometry geometry
     * @return $this
     */
    public function setGeometry($geometry)
    {
        $this->container['geometry'] = $geometry;

        return $this;
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
     * @param string $name General store name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_raw
     * @return string
     */
    public function getNameRaw()
    {
        return $this->container['name_raw'];
    }

    /**
     * Sets name_raw
     * @param string $name_raw General store raw name
     * @return $this
     */
    public function setNameRaw($name_raw)
    {
        $this->container['name_raw'] = $name_raw;

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
     * @param string $photo_main General store main photo
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
     * @param string[] $photo General store photos
     * @return $this
     */
    public function setPhoto($photo)
    {
        $this->container['photo'] = $photo;

        return $this;
    }

    /**
     * Gets category_main
     * @return string
     */
    public function getCategoryMain()
    {
        return $this->container['category_main'];
    }

    /**
     * Sets category_main
     * @param string $category_main General store main category
     * @return $this
     */
    public function setCategoryMain($category_main)
    {
        $this->container['category_main'] = $category_main;

        return $this;
    }

    /**
     * Gets category
     * @return string[]
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string[] $category General store category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets url_googleplus
     * @return string
     */
    public function getUrlGoogleplus()
    {
        return $this->container['url_googleplus'];
    }

    /**
     * Sets url_googleplus
     * @param string $url_googleplus Url to general store google plus
     * @return $this
     */
    public function setUrlGoogleplus($url_googleplus)
    {
        $this->container['url_googleplus'] = $url_googleplus;

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
     * @param string $url_website Url to general store website
     * @return $this
     */
    public function setUrlWebsite($url_website)
    {
        $this->container['url_website'] = $url_website;

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
     * @param \Secuconnect\Client\Model\OpenHours[] $open_hours Open hours in every day
     * @return $this
     */
    public function setOpenHours($open_hours)
    {
        $this->container['open_hours'] = $open_hours;

        return $this;
    }

    /**
     * Gets open_now
     * @return bool
     */
    public function getOpenNow()
    {
        return $this->container['open_now'];
    }

    /**
     * Sets open_now
     * @param bool $open_now Open now
     * @return $this
     */
    public function setOpenNow($open_now)
    {
        $this->container['open_now'] = $open_now;

        return $this;
    }

    /**
     * Gets open_time
     * @return string
     */
    public function getOpenTime()
    {
        return $this->container['open_time'];
    }

    /**
     * Sets open_time
     * @param string $open_time Open time
     * @return $this
     */
    public function setOpenTime($open_time)
    {
        $this->container['open_time'] = $open_time;

        return $this;
    }

    /**
     * Gets utc_offset
     * @return string
     */
    public function getUtcOffset()
    {
        return $this->container['utc_offset'];
    }

    /**
     * Sets utc_offset
     * @param string $utc_offset Utc offset
     * @return $this
     */
    public function setUtcOffset($utc_offset)
    {
        $this->container['utc_offset'] = $utc_offset;

        return $this;
    }

    /**
     * Gets assigned_by
     * @return \Secuconnect\Client\Model\AssignedBy[]
     */
    public function getAssignedBy()
    {
        return $this->container['assigned_by'];
    }

    /**
     * Sets assigned_by
     * @param \Secuconnect\Client\Model\AssignedBy[] $assigned_by Assigned by
     * @return $this
     */
    public function setAssignedBy($assigned_by)
    {
        $this->container['assigned_by'] = $assigned_by;

        return $this;
    }

    /**
     * Gets invited_by
     * @return \Secuconnect\Client\Model\InvitedBy[]
     */
    public function getInvitedBy()
    {
        return $this->container['invited_by'];
    }

    /**
     * Sets invited_by
     * @param \Secuconnect\Client\Model\InvitedBy[] $invited_by Invited by
     * @return $this
     */
    public function setInvitedBy($invited_by)
    {
        $this->container['invited_by'] = $invited_by;

        return $this;
    }

    /**
     * Gets has_beacon
     * @return bool
     */
    public function getHasBeacon()
    {
        return $this->container['has_beacon'];
    }

    /**
     * Sets has_beacon
     * @param bool $has_beacon Has beacon
     * @return $this
     */
    public function setHasBeacon($has_beacon)
    {
        $this->container['has_beacon'] = $has_beacon;

        return $this;
    }

    /**
     * Gets acceptance_point
     * @return bool
     */
    public function getAcceptancePoint()
    {
        return $this->container['acceptance_point'];
    }

    /**
     * Sets acceptance_point
     * @param bool $acceptance_point Is Acceptance Point
     * @return $this
     */
    public function setAcceptancePoint($acceptance_point)
    {
        $this->container['acceptance_point'] = $acceptance_point;

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

