<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentContractsDTOClone
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsDTOClone implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContractsDTOClone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project' => 'string',
        'payment_data' => '\Secuconnect\Client\Model\PaymentInformation',
        'payin_account' => 'bool',
        'url_push' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'project' => null,
        'payment_data' => null,
        'payin_account' => null,
        'url_push' => null
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
        'project' => 'project',
        'payment_data' => 'payment_data',
        'payin_account' => 'payin_account',
        'url_push' => 'url_push'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'project' => 'setProject',
        'payment_data' => 'setPaymentData',
        'payin_account' => 'setPayinAccount',
        'url_push' => 'setUrlPush'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'project' => 'getProject',
        'payment_data' => 'getPaymentData',
        'payin_account' => 'getPayinAccount',
        'url_push' => 'getUrlPush'
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
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['payment_data'] = isset($data['payment_data']) ? $data['payment_data'] : null;
        $this->container['payin_account'] = isset($data['payin_account']) ? $data['payin_account'] : false;
        $this->container['url_push'] = isset($data['url_push']) ? $data['url_push'] : null;
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
     * Gets project
     * @return string
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     * @param string $project Name of the project (must be unique)
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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
     * Gets payin_account
     * @return bool
     */
    public function getPayinAccount()
    {
        return $this->container['payin_account'];
    }

    /**
     * Sets payin_account
     * @param bool $payin_account Pay in account
     * @return $this
     */
    public function setPayinAccount($payin_account)
    {
        $this->container['payin_account'] = $payin_account;

        return $this;
    }

    /**
     * Gets url_push
     * @return string
     */
    public function getUrlPush()
    {
        return $this->container['url_push'];
    }

    /**
     * Sets url_push
     * @param string $url_push The default URL where your service listen for push notifications of the secuconnect service
     * @return $this
     */
    public function setUrlPush($url_push)
    {
        $this->container['url_push'] = $url_push;

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

