<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * IdentresultPerson
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdentresultPerson implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'IdentresultPerson';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identificationprocess' => '\Secuconnect\Client\Model\IdentificationProcess',
        'customdata' => '\Secuconnect\Client\Model\IdentificationCustomData',
        'contactdata' => '\Secuconnect\Client\Model\ContactData',
        'userdata' => '\Secuconnect\Client\Model\UserData',
        'attachments' => '\Secuconnect\Client\Model\IdentDocument[]',
        'identificationdocument' => '\Secuconnect\Client\Model\IdentDocumentData',
        'video' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identificationprocess' => null,
        'customdata' => null,
        'contactdata' => null,
        'userdata' => null,
        'attachments' => null,
        'identificationdocument' => null,
        'video' => null
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
        'identificationprocess' => 'identificationprocess',
        'customdata' => 'customdata',
        'contactdata' => 'contactdata',
        'userdata' => 'userdata',
        'attachments' => 'attachments',
        'identificationdocument' => 'identificationdocument',
        'video' => 'video'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'identificationprocess' => 'setIdentificationprocess',
        'customdata' => 'setCustomdata',
        'contactdata' => 'setContactdata',
        'userdata' => 'setUserdata',
        'attachments' => 'setAttachments',
        'identificationdocument' => 'setIdentificationdocument',
        'video' => 'setVideo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'identificationprocess' => 'getIdentificationprocess',
        'customdata' => 'getCustomdata',
        'contactdata' => 'getContactdata',
        'userdata' => 'getUserdata',
        'attachments' => 'getAttachments',
        'identificationdocument' => 'getIdentificationdocument',
        'video' => 'getVideo'
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
        $this->container['identificationprocess'] = isset($data['identificationprocess']) ? $data['identificationprocess'] : null;
        $this->container['customdata'] = isset($data['customdata']) ? $data['customdata'] : null;
        $this->container['contactdata'] = isset($data['contactdata']) ? $data['contactdata'] : null;
        $this->container['userdata'] = isset($data['userdata']) ? $data['userdata'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['identificationdocument'] = isset($data['identificationdocument']) ? $data['identificationdocument'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
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
     * Gets identificationprocess
     * @return \Secuconnect\Client\Model\IdentificationProcess
     */
    public function getIdentificationprocess()
    {
        return $this->container['identificationprocess'];
    }

    /**
     * Sets identificationprocess
     * @param \Secuconnect\Client\Model\IdentificationProcess $identificationprocess identificationprocess
     * @return $this
     */
    public function setIdentificationprocess($identificationprocess)
    {
        $this->container['identificationprocess'] = $identificationprocess;

        return $this;
    }

    /**
     * Gets customdata
     * @return \Secuconnect\Client\Model\IdentificationCustomData
     */
    public function getCustomdata()
    {
        return $this->container['customdata'];
    }

    /**
     * Sets customdata
     * @param \Secuconnect\Client\Model\IdentificationCustomData $customdata customdata
     * @return $this
     */
    public function setCustomdata($customdata)
    {
        $this->container['customdata'] = $customdata;

        return $this;
    }

    /**
     * Gets contactdata
     * @return \Secuconnect\Client\Model\ContactData
     */
    public function getContactdata()
    {
        return $this->container['contactdata'];
    }

    /**
     * Sets contactdata
     * @param \Secuconnect\Client\Model\ContactData $contactdata contactdata
     * @return $this
     */
    public function setContactdata($contactdata)
    {
        $this->container['contactdata'] = $contactdata;

        return $this;
    }

    /**
     * Gets userdata
     * @return \Secuconnect\Client\Model\UserData
     */
    public function getUserdata()
    {
        return $this->container['userdata'];
    }

    /**
     * Sets userdata
     * @param \Secuconnect\Client\Model\UserData $userdata userdata
     * @return $this
     */
    public function setUserdata($userdata)
    {
        $this->container['userdata'] = $userdata;

        return $this;
    }

    /**
     * Gets attachments
     * @return \Secuconnect\Client\Model\IdentDocument[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     * @param \Secuconnect\Client\Model\IdentDocument[] $attachments User Data submitted by provider
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets identificationdocument
     * @return \Secuconnect\Client\Model\IdentDocumentData
     */
    public function getIdentificationdocument()
    {
        return $this->container['identificationdocument'];
    }

    /**
     * Sets identificationdocument
     * @param \Secuconnect\Client\Model\IdentDocumentData $identificationdocument identificationdocument
     * @return $this
     */
    public function setIdentificationdocument($identificationdocument)
    {
        $this->container['identificationdocument'] = $identificationdocument;

        return $this;
    }

    /**
     * Gets video
     * @return string
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     * @param string $video The url to download the identification video
     * @return $this
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

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

