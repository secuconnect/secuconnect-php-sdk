<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * UserData
 *
 * @category Class
 * @description UserData
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dob' => '\Secuconnect\Client\Model\ValueField',
        'birthplace' => '\Secuconnect\Client\Model\ValueField',
        'forename' => '\Secuconnect\Client\Model\ValueField',
        'surname' => '\Secuconnect\Client\Model\ValueField',
        'nationality' => '\Secuconnect\Client\Model\ValueField',
        'gender' => '\Secuconnect\Client\Model\ValueField',
        'address' => '\Secuconnect\Client\Model\UserAddressData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dob' => null,
        'birthplace' => null,
        'forename' => null,
        'surname' => null,
        'nationality' => null,
        'gender' => null,
        'address' => null
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
        'dob' => 'dob',
        'birthplace' => 'birthplace',
        'forename' => 'forename',
        'surname' => 'surname',
        'nationality' => 'nationality',
        'gender' => 'gender',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'dob' => 'setDob',
        'birthplace' => 'setBirthplace',
        'forename' => 'setForename',
        'surname' => 'setSurname',
        'nationality' => 'setNationality',
        'gender' => 'setGender',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'dob' => 'getDob',
        'birthplace' => 'getBirthplace',
        'forename' => 'getForename',
        'surname' => 'getSurname',
        'nationality' => 'getNationality',
        'gender' => 'getGender',
        'address' => 'getAddress'
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
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['birthplace'] = isset($data['birthplace']) ? $data['birthplace'] : null;
        $this->container['forename'] = isset($data['forename']) ? $data['forename'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
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
     * Gets dob
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     * @param \Secuconnect\Client\Model\ValueField $dob dob
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets birthplace
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getBirthplace()
    {
        return $this->container['birthplace'];
    }

    /**
     * Sets birthplace
     * @param \Secuconnect\Client\Model\ValueField $birthplace birthplace
     * @return $this
     */
    public function setBirthplace($birthplace)
    {
        $this->container['birthplace'] = $birthplace;

        return $this;
    }

    /**
     * Gets forename
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getForename()
    {
        return $this->container['forename'];
    }

    /**
     * Sets forename
     * @param \Secuconnect\Client\Model\ValueField $forename forename
     * @return $this
     */
    public function setForename($forename)
    {
        $this->container['forename'] = $forename;

        return $this;
    }

    /**
     * Gets surname
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     * @param \Secuconnect\Client\Model\ValueField $surname surname
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets nationality
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     * @param \Secuconnect\Client\Model\ValueField $nationality nationality
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets gender
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param \Secuconnect\Client\Model\ValueField $gender gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets address
     * @return \Secuconnect\Client\Model\UserAddressData
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \Secuconnect\Client\Model\UserAddressData $address address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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

