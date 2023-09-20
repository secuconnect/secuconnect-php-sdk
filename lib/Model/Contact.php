<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * Contact
 *
 * @category Class
 * @description Contact details
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Contact implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'forename' => 'string',
        'surname' => 'string',
        'companyname' => 'string',
        'salutation' => 'string',
        'gender' => 'string',
        'title' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'fax' => 'string',
        'dob' => 'string',
        'picture' => 'string',
        'url_website' => 'string',
        'birthplace' => 'string',
        'nationality' => 'string',
        'address' => '\Secuconnect\Client\Model\Address'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'forename' => null,
        'surname' => null,
        'companyname' => null,
        'salutation' => null,
        'gender' => null,
        'title' => null,
        'email' => null,
        'phone' => null,
        'mobile' => null,
        'fax' => null,
        'dob' => null,
        'picture' => null,
        'url_website' => null,
        'birthplace' => null,
        'nationality' => null,
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
        'name' => 'name',
        'forename' => 'forename',
        'surname' => 'surname',
        'companyname' => 'companyname',
        'salutation' => 'salutation',
        'gender' => 'gender',
        'title' => 'title',
        'email' => 'email',
        'phone' => 'phone',
        'mobile' => 'mobile',
        'fax' => 'fax',
        'dob' => 'dob',
        'picture' => 'picture',
        'url_website' => 'url_website',
        'birthplace' => 'birthplace',
        'nationality' => 'nationality',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'forename' => 'setForename',
        'surname' => 'setSurname',
        'companyname' => 'setCompanyname',
        'salutation' => 'setSalutation',
        'gender' => 'setGender',
        'title' => 'setTitle',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'mobile' => 'setMobile',
        'fax' => 'setFax',
        'dob' => 'setDob',
        'picture' => 'setPicture',
        'url_website' => 'setUrlWebsite',
        'birthplace' => 'setBirthplace',
        'nationality' => 'setNationality',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'forename' => 'getForename',
        'surname' => 'getSurname',
        'companyname' => 'getCompanyname',
        'salutation' => 'getSalutation',
        'gender' => 'getGender',
        'title' => 'getTitle',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'mobile' => 'getMobile',
        'fax' => 'getFax',
        'dob' => 'getDob',
        'picture' => 'getPicture',
        'url_website' => 'getUrlWebsite',
        'birthplace' => 'getBirthplace',
        'nationality' => 'getNationality',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['forename'] = isset($data['forename']) ? $data['forename'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['companyname'] = isset($data['companyname']) ? $data['companyname'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['picture'] = isset($data['picture']) ? $data['picture'] : null;
        $this->container['url_website'] = isset($data['url_website']) ? $data['url_website'] : null;
        $this->container['birthplace'] = isset($data['birthplace']) ? $data['birthplace'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name First and last name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets forename
     * @return string
     */
    public function getForename()
    {
        return $this->container['forename'];
    }

    /**
     * Sets forename
     * @param string $forename First name
     * @return $this
     */
    public function setForename($forename)
    {
        $this->container['forename'] = $forename;

        return $this;
    }

    /**
     * Gets surname
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     * @param string $surname Last name
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets companyname
     * @return string
     */
    public function getCompanyname()
    {
        return $this->container['companyname'];
    }

    /**
     * Sets companyname
     * @param string $companyname Company name
     * @return $this
     */
    public function setCompanyname($companyname)
    {
        $this->container['companyname'] = $companyname;

        return $this;
    }

    /**
     * Gets salutation
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     * @param string $salutation Salutation
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender Gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Title or academic degree
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email address
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param string $phone Landline number
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets mobile
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     * @param string $mobile Mobile phone number
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets fax
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     * @param string $fax Fax number
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets dob
     * @return string
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     * @param string $dob Date of birth, ISO 8601 formatted
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets picture
     * @return string
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     * @param string $picture The document ID (or URL) of an user picture; s. Document service
     * @return $this
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

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
     * @param string $url_website URL to company website
     * @return $this
     */
    public function setUrlWebsite($url_website)
    {
        $this->container['url_website'] = $url_website;

        return $this;
    }

    /**
     * Gets birthplace
     * @return string
     */
    public function getBirthplace()
    {
        return $this->container['birthplace'];
    }

    /**
     * Sets birthplace
     * @param string $birthplace Birthplace
     * @return $this
     */
    public function setBirthplace($birthplace)
    {
        $this->container['birthplace'] = $birthplace;

        return $this;
    }

    /**
     * Gets nationality
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     * @param string $nationality nationality
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

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

