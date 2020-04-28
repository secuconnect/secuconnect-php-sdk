<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * UploadidentProductDTO
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UploadidentProductDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UploadidentProductDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_id' => 'string',
        'payment_id' => 'string',
        'contract_id' => 'string',
        'apikey' => 'string',
        'service_issue_id' => 'int',
        'document_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_id' => null,
        'payment_id' => null,
        'contract_id' => null,
        'apikey' => null,
        'service_issue_id' => null,
        'document_ids' => null
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
        'merchant_id' => 'merchant_id',
        'payment_id' => 'payment_id',
        'contract_id' => 'contract_id',
        'apikey' => 'apikey',
        'service_issue_id' => 'service_issue_id',
        'document_ids' => 'document_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'payment_id' => 'setPaymentId',
        'contract_id' => 'setContractId',
        'apikey' => 'setApikey',
        'service_issue_id' => 'setServiceIssueId',
        'document_ids' => 'setDocumentIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'payment_id' => 'getPaymentId',
        'contract_id' => 'getContractId',
        'apikey' => 'getApikey',
        'service_issue_id' => 'getServiceIssueId',
        'document_ids' => 'getDocumentIds'
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
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['payment_id'] = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['apikey'] = isset($data['apikey']) ? $data['apikey'] : null;
        $this->container['service_issue_id'] = isset($data['service_issue_id']) ? $data['service_issue_id'] : null;
        $this->container['document_ids'] = isset($data['document_ids']) ? $data['document_ids'] : null;
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
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     * @param string $merchant_id Merchant ID
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     * @param string $payment_id Payment ID
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets contract_id
     * @return string
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     * @param string $contract_id Contract ID
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets apikey
     * @return string
     */
    public function getApikey()
    {
        return $this->container['apikey'];
    }

    /**
     * Sets apikey
     * @param string $apikey Api Key
     * @return $this
     */
    public function setApikey($apikey)
    {
        $this->container['apikey'] = $apikey;

        return $this;
    }

    /**
     * Gets service_issue_id
     * @return int
     */
    public function getServiceIssueId()
    {
        return $this->container['service_issue_id'];
    }

    /**
     * Sets service_issue_id
     * @param int $service_issue_id Service issue id
     * @return $this
     */
    public function setServiceIssueId($service_issue_id)
    {
        $this->container['service_issue_id'] = $service_issue_id;

        return $this;
    }

    /**
     * Gets document_ids
     * @return string[]
     */
    public function getDocumentIds()
    {
        return $this->container['document_ids'];
    }

    /**
     * Sets document_ids
     * @param string[] $document_ids List of documents ids
     * @return $this
     */
    public function setDocumentIds($document_ids)
    {
        $this->container['document_ids'] = $document_ids;

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

