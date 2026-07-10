<?php

namespace Secuconnect\Client\Model;

/**
 * SecupayPayoutWithoutCustomerResponse
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayPayoutWithoutCustomerResponse extends SecupayPayoutWithoutCustomerDTO
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SecupayPayoutWithoutCustomerResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'trans_id' => 'int',
        'transfer_account' => '\Secuconnect\Client\Model\PaymentInformation',
        'documents' => '\Secuconnect\Client\Model\SecupayPayoutDocuments',
        'id' => '\Secuconnect\Client\Model\PCI_ID'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'trans_id' => null,
        'transfer_account' => null,
        'documents' => null,
        'id' => null
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
        'trans_id' => 'trans_id',
        'transfer_account' => 'transfer_account',
        'documents' => 'documents',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'trans_id' => 'setTransId',
        'transfer_account' => 'setTransferAccount',
        'documents' => 'setDocuments',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'trans_id' => 'getTransId',
        'transfer_account' => 'getTransferAccount',
        'documents' => 'getDocuments',
        'id' => 'getId'
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

        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['transfer_account'] = isset($data['transfer_account']) ? $data['transfer_account'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * Gets trans_id
     * @return int
     */
    public function getTransId()
    {
        return $this->container['trans_id'];
    }

    /**
     * Sets trans_id
     * @param int $trans_id ID of created transaction
     * @return $this
     */
    public function setTransId($trans_id)
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets transfer_account
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getTransferAccount()
    {
        return $this->container['transfer_account'];
    }

    /**
     * Sets transfer_account
     * @param \Secuconnect\Client\Model\PaymentInformation $transfer_account transfer_account
     * @return $this
     */
    public function setTransferAccount($transfer_account)
    {
        $this->container['transfer_account'] = $transfer_account;

        return $this;
    }

    /**
     * Gets documents
     * @return \Secuconnect\Client\Model\SecupayPayoutDocuments
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     * @param \Secuconnect\Client\Model\SecupayPayoutDocuments $documents documents
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets id
     * @return \Secuconnect\Client\Model\PCI_ID
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param \Secuconnect\Client\Model\PCI_ID $id id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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

