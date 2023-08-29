<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * IframeOptions
 *
 * @category Class
 * @description Iframe options
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IframeOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'IframeOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_hint_title' => 'string',
        'project_title' => 'string',
        'project_logo' => 'string',
        'submit_button_title' => 'string',
        'primary_colour' => 'string',
        'language' => 'string',
        'basket_title' => 'string',
        'is_basket_shown' => 'bool',
        'language_formality' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment_hint_title' => null,
        'project_title' => null,
        'project_logo' => null,
        'submit_button_title' => null,
        'primary_colour' => null,
        'language' => null,
        'basket_title' => null,
        'is_basket_shown' => null,
        'language_formality' => null
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
        'payment_hint_title' => 'payment_hint_title',
        'project_title' => 'project_title',
        'project_logo' => 'project_logo',
        'submit_button_title' => 'submit_button_title',
        'primary_colour' => 'primary_colour',
        'language' => 'language',
        'basket_title' => 'basket_title',
        'is_basket_shown' => 'is_basket_shown',
        'language_formality' => 'language_formality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'payment_hint_title' => 'setPaymentHintTitle',
        'project_title' => 'setProjectTitle',
        'project_logo' => 'setProjectLogo',
        'submit_button_title' => 'setSubmitButtonTitle',
        'primary_colour' => 'setPrimaryColour',
        'language' => 'setLanguage',
        'basket_title' => 'setBasketTitle',
        'is_basket_shown' => 'setIsBasketShown',
        'language_formality' => 'setLanguageFormality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'payment_hint_title' => 'getPaymentHintTitle',
        'project_title' => 'getProjectTitle',
        'project_logo' => 'getProjectLogo',
        'submit_button_title' => 'getSubmitButtonTitle',
        'primary_colour' => 'getPrimaryColour',
        'language' => 'getLanguage',
        'basket_title' => 'getBasketTitle',
        'is_basket_shown' => 'getIsBasketShown',
        'language_formality' => 'getLanguageFormality'
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
        $this->container['payment_hint_title'] = isset($data['payment_hint_title']) ? $data['payment_hint_title'] : null;
        $this->container['project_title'] = isset($data['project_title']) ? $data['project_title'] : null;
        $this->container['project_logo'] = isset($data['project_logo']) ? $data['project_logo'] : null;
        $this->container['submit_button_title'] = isset($data['submit_button_title']) ? $data['submit_button_title'] : null;
        $this->container['primary_colour'] = isset($data['primary_colour']) ? $data['primary_colour'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['basket_title'] = isset($data['basket_title']) ? $data['basket_title'] : null;
        $this->container['is_basket_shown'] = isset($data['is_basket_shown']) ? $data['is_basket_shown'] : null;
        $this->container['language_formality'] = isset($data['language_formality']) ? $data['language_formality'] : null;
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
     * Gets payment_hint_title
     * @return string
     */
    public function getPaymentHintTitle()
    {
        return $this->container['payment_hint_title'];
    }

    /**
     * Sets payment_hint_title
     * @param string $payment_hint_title Payment hint title
     * @return $this
     */
    public function setPaymentHintTitle($payment_hint_title)
    {
        $this->container['payment_hint_title'] = $payment_hint_title;

        return $this;
    }

    /**
     * Gets project_title
     * @return string
     */
    public function getProjectTitle()
    {
        return $this->container['project_title'];
    }

    /**
     * Sets project_title
     * @param string $project_title Project title
     * @return $this
     */
    public function setProjectTitle($project_title)
    {
        $this->container['project_title'] = $project_title;

        return $this;
    }

    /**
     * Gets project_logo
     * @return string
     */
    public function getProjectLogo()
    {
        return $this->container['project_logo'];
    }

    /**
     * Sets project_logo
     * @param string $project_logo Project logo link
     * @return $this
     */
    public function setProjectLogo($project_logo)
    {
        $this->container['project_logo'] = $project_logo;

        return $this;
    }

    /**
     * Gets submit_button_title
     * @return string
     */
    public function getSubmitButtonTitle()
    {
        return $this->container['submit_button_title'];
    }

    /**
     * Sets submit_button_title
     * @param string $submit_button_title Submit button title
     * @return $this
     */
    public function setSubmitButtonTitle($submit_button_title)
    {
        $this->container['submit_button_title'] = $submit_button_title;

        return $this;
    }

    /**
     * Gets primary_colour
     * @return string
     */
    public function getPrimaryColour()
    {
        return $this->container['primary_colour'];
    }

    /**
     * Sets primary_colour
     * @param string $primary_colour Primary colour
     * @return $this
     */
    public function setPrimaryColour($primary_colour)
    {
        $this->container['primary_colour'] = $primary_colour;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language Language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets basket_title
     * @return string
     */
    public function getBasketTitle()
    {
        return $this->container['basket_title'];
    }

    /**
     * Sets basket_title
     * @param string $basket_title Basket title
     * @return $this
     */
    public function setBasketTitle($basket_title)
    {
        $this->container['basket_title'] = $basket_title;

        return $this;
    }

    /**
     * Gets is_basket_shown
     * @return bool
     */
    public function getIsBasketShown()
    {
        return $this->container['is_basket_shown'];
    }

    /**
     * Sets is_basket_shown
     * @param bool $is_basket_shown Is Basket Shown
     * @return $this
     */
    public function setIsBasketShown($is_basket_shown)
    {
        $this->container['is_basket_shown'] = $is_basket_shown;

        return $this;
    }

    /**
     * Gets language_formality
     * @return string
     */
    public function getLanguageFormality()
    {
        return $this->container['language_formality'];
    }

    /**
     * Sets language_formality
     * @param string $language_formality language_formality
     * @return $this
     */
    public function setLanguageFormality($language_formality)
    {
        $this->container['language_formality'] = $language_formality;

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

