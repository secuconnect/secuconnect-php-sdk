<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * GeneralMerchantsDTO
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
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
        'salutation' => 'string',
        'companyname' => 'string',
        'forename' => 'string',
        'surname' => 'string',
        'dob' => 'string',
        'homepage' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => '\Secuconnect\Client\Model\Address',
        'payment_data' => '\Secuconnect\Client\Model\PaymentInformation',
        'legal_details' => '\Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]',
        'urls' => '\Secuconnect\Client\Model\GeneralMerchantsUrls[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'salutation' => null,
        'companyname' => null,
        'forename' => null,
        'surname' => null,
        'dob' => null,
        'homepage' => null,
        'email' => null,
        'phone' => null,
        'address' => null,
        'payment_data' => null,
        'legal_details' => null,
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
        'salutation' => 'salutation',
        'companyname' => 'companyname',
        'forename' => 'forename',
        'surname' => 'surname',
        'dob' => 'dob',
        'homepage' => 'homepage',
        'email' => 'email',
        'phone' => 'phone',
        'address' => 'address',
        'payment_data' => 'payment_data',
        'legal_details' => 'legal_details',
        'urls' => 'urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'salutation' => 'setSalutation',
        'companyname' => 'setCompanyname',
        'forename' => 'setForename',
        'surname' => 'setSurname',
        'dob' => 'setDob',
        'homepage' => 'setHomepage',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'address' => 'setAddress',
        'payment_data' => 'setPaymentData',
        'legal_details' => 'setLegalDetails',
        'urls' => 'setUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'salutation' => 'getSalutation',
        'companyname' => 'getCompanyname',
        'forename' => 'getForename',
        'surname' => 'getSurname',
        'dob' => 'getDob',
        'homepage' => 'getHomepage',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'address' => 'getAddress',
        'payment_data' => 'getPaymentData',
        'legal_details' => 'getLegalDetails',
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
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['companyname'] = isset($data['companyname']) ? $data['companyname'] : null;
        $this->container['forename'] = isset($data['forename']) ? $data['forename'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['homepage'] = isset($data['homepage']) ? $data['homepage'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['payment_data'] = isset($data['payment_data']) ? $data['payment_data'] : null;
        $this->container['legal_details'] = isset($data['legal_details']) ? $data['legal_details'] : null;
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
     * Gets salutation
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     * @param string $salutation Salutation {'Frau', 'Herr', 'Firma', 'Divers'}
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

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
     * Gets dob
     * @return string
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     * @param string $dob Date of birth
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets homepage
     * @return string
     */
    public function getHomepage()
    {
        return $this->container['homepage'];
    }

    /**
     * Sets homepage
     * @param string $homepage Merchant homepage or shop URL
     * @return $this
     */
    public function setHomepage($homepage)
    {
        $this->container['homepage'] = $homepage;

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
     * @param string $email Merchant email address
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
     * @param string $phone Merchant phone number
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
     * Gets payment_data
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getPaymentData()
    {
        return $this->container['payment_data'];
    }

    /**
     * Sets payment_data
     * @param \Secuconnect\Client\Model\PaymentInformation $payment_data payment_data
     * @return $this
     */
    public function setPaymentData($payment_data)
    {
        $this->container['payment_data'] = $payment_data;

        return $this;
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
     * @param \Secuconnect\Client\Model\GeneralMerchantsLegalDetails[] $legal_details Legal details, like terms of use, privacy policy, or imprint
     * @return $this
     */
    public function setLegalDetails($legal_details)
    {
        $this->container['legal_details'] = $legal_details;

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
     * @param \Secuconnect\Client\Model\GeneralMerchantsUrls[] $urls URLs
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

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

