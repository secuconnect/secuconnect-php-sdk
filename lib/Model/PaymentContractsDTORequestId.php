<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentContractsDTORequestId
 *
 * @category Class
 * @description PaymentContractsDTORequestId
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsDTORequestId implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContractsDTORequestId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact' => '\Secuconnect\Client\Model\Contact',
        'project' => 'string',
        'payout_account' => '\Secuconnect\Client\Model\PaymentInformation',
        'iframe_opts' => '\Secuconnect\Client\Model\PaymentContractsDTOIFrameOpts',
        'payin_account' => 'bool',
        'create_first_store' => 'bool',
        'store_name' => 'string',
        'payout_purpose' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact' => null,
        'project' => null,
        'payout_account' => null,
        'iframe_opts' => null,
        'payin_account' => null,
        'create_first_store' => null,
        'store_name' => null,
        'payout_purpose' => null
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
        'contact' => 'contact',
        'project' => 'project',
        'payout_account' => 'payout_account',
        'iframe_opts' => 'iframe_opts',
        'payin_account' => 'payin_account',
        'create_first_store' => 'create_first_store',
        'store_name' => 'store_name',
        'payout_purpose' => 'payout_purpose'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'contact' => 'setContact',
        'project' => 'setProject',
        'payout_account' => 'setPayoutAccount',
        'iframe_opts' => 'setIframeOpts',
        'payin_account' => 'setPayinAccount',
        'create_first_store' => 'setCreateFirstStore',
        'store_name' => 'setStoreName',
        'payout_purpose' => 'setPayoutPurpose'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'contact' => 'getContact',
        'project' => 'getProject',
        'payout_account' => 'getPayoutAccount',
        'iframe_opts' => 'getIframeOpts',
        'payin_account' => 'getPayinAccount',
        'create_first_store' => 'getCreateFirstStore',
        'store_name' => 'getStoreName',
        'payout_purpose' => 'getPayoutPurpose'
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
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['payout_account'] = isset($data['payout_account']) ? $data['payout_account'] : null;
        $this->container['iframe_opts'] = isset($data['iframe_opts']) ? $data['iframe_opts'] : null;
        $this->container['payin_account'] = isset($data['payin_account']) ? $data['payin_account'] : false;
        $this->container['create_first_store'] = isset($data['create_first_store']) ? $data['create_first_store'] : false;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['payout_purpose'] = isset($data['payout_purpose']) ? $data['payout_purpose'] : null;
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
     * Gets contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param \Secuconnect\Client\Model\Contact $contact contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
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
     * Gets payout_account
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getPayoutAccount()
    {
        return $this->container['payout_account'];
    }

    /**
     * Sets payout_account
     * @param \Secuconnect\Client\Model\PaymentInformation $payout_account payout_account
     * @return $this
     */
    public function setPayoutAccount($payout_account)
    {
        $this->container['payout_account'] = $payout_account;

        return $this;
    }

    /**
     * Gets iframe_opts
     * @return \Secuconnect\Client\Model\PaymentContractsDTOIFrameOpts
     */
    public function getIframeOpts()
    {
        return $this->container['iframe_opts'];
    }

    /**
     * Sets iframe_opts
     * @param \Secuconnect\Client\Model\PaymentContractsDTOIFrameOpts $iframe_opts iframe_opts
     * @return $this
     */
    public function setIframeOpts($iframe_opts)
    {
        $this->container['iframe_opts'] = $iframe_opts;

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
     * Gets create_first_store
     * @return bool
     */
    public function getCreateFirstStore()
    {
        return $this->container['create_first_store'];
    }

    /**
     * Sets create_first_store
     * @param bool $create_first_store Create first store
     * @return $this
     */
    public function setCreateFirstStore($create_first_store)
    {
        $this->container['create_first_store'] = $create_first_store;

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
     * @param string $store_name Store name
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

        return $this;
    }

    /**
     * Gets payout_purpose
     * @return string
     */
    public function getPayoutPurpose()
    {
        return $this->container['payout_purpose'];
    }

    /**
     * Sets payout_purpose
     * @param string $payout_purpose Payout purpose
     * @return $this
     */
    public function setPayoutPurpose($payout_purpose)
    {
        $this->container['payout_purpose'] = $payout_purpose;

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

