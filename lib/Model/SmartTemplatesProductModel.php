<?php

namespace Secuconnect\Client\Model;

/**
 * SmartTemplatesProductModel
 *
 * @category Class
 * @description SmartTemplatesProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTemplatesProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTemplatesProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'name' => 'string',
        'description' => 'string',
        'default_language' => 'string',
        'header' => '\Secuconnect\Client\Model\SmartTemplatesComponentModel[]',
        'footer' => '\Secuconnect\Client\Model\SmartTemplatesComponentModel[]',
        'pages' => '\Secuconnect\Client\Model\SmartTemplatesComponentModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'name' => null,
        'description' => null,
        'default_language' => null,
        'header' => null,
        'footer' => null,
        'pages' => null
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
        'created' => 'created',
        'updated' => 'updated',
        'name' => 'name',
        'description' => 'description',
        'default_language' => 'default_language',
        'header' => 'header',
        'footer' => 'footer',
        'pages' => 'pages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'name' => 'setName',
        'description' => 'setDescription',
        'default_language' => 'setDefaultLanguage',
        'header' => 'setHeader',
        'footer' => 'setFooter',
        'pages' => 'setPages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'name' => 'getName',
        'description' => 'getDescription',
        'default_language' => 'getDefaultLanguage',
        'header' => 'getHeader',
        'footer' => 'getFooter',
        'pages' => 'getPages'
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

        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['default_language'] = isset($data['default_language']) ? $data['default_language'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
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
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     * @return string
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param string $updated updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

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
     * @param string $name Name of smart template
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description of smart template
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets default_language
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->container['default_language'];
    }

    /**
     * Sets default_language
     * @param string $default_language Default Language configured for this template
     * @return $this
     */
    public function setDefaultLanguage($default_language)
    {
        $this->container['default_language'] = $default_language;

        return $this;
    }

    /**
     * Gets header
     * @return \Secuconnect\Client\Model\SmartTemplatesComponentModel[]
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     * @param \Secuconnect\Client\Model\SmartTemplatesComponentModel[] $header Header definition of smart template
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets footer
     * @return \Secuconnect\Client\Model\SmartTemplatesComponentModel[]
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     * @param \Secuconnect\Client\Model\SmartTemplatesComponentModel[] $footer Footer definition of smart template
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

        return $this;
    }

    /**
     * Gets pages
     * @return \Secuconnect\Client\Model\SmartTemplatesComponentModel[]
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     * @param \Secuconnect\Client\Model\SmartTemplatesComponentModel[] $pages Definition of different pages in smart template
     * @return $this
     */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;

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

