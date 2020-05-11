<?php

namespace Secuconnect\Client\Model;

/**
 * PaymentContainersProductModel
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContainersProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContainersProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract' => '\Secuconnect\Client\Model\PaymentContractsProductModel',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'assign' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'type' => 'string',
        'public' => '\Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate',
        'private' => '\Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate',
        'created' => 'string',
        'updated' => 'string',
        'mandate' => '\Secuconnect\Client\Model\PaymentContainerMandate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract' => null,
        'customer' => null,
        'assign' => null,
        'type' => null,
        'public' => null,
        'private' => null,
        'created' => null,
        'updated' => null,
        'mandate' => null
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
        'contract' => 'contract',
        'customer' => 'customer',
        'assign' => 'assign',
        'type' => 'type',
        'public' => 'public',
        'private' => 'private',
        'created' => 'created',
        'updated' => 'updated',
        'mandate' => 'mandate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'contract' => 'setContract',
        'customer' => 'setCustomer',
        'assign' => 'setAssign',
        'type' => 'setType',
        'public' => 'setPublic',
        'private' => 'setPrivate',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'mandate' => 'setMandate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'contract' => 'getContract',
        'customer' => 'getCustomer',
        'assign' => 'getAssign',
        'type' => 'getType',
        'public' => 'getPublic',
        'private' => 'getPrivate',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'mandate' => 'getMandate'
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

        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['assign'] = isset($data['assign']) ? $data['assign'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['private'] = isset($data['private']) ? $data['private'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['mandate'] = isset($data['mandate']) ? $data['mandate'] : null;
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
     * Gets contract
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\PaymentContractsProductModel $contract contract
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\PaymentCustomersProductModel $customer customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets assign
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getAssign()
    {
        return $this->container['assign'];
    }

    /**
     * Sets assign
     * @param \Secuconnect\Client\Model\ProductInstanceUID $assign assign
     * @return $this
     */
    public function setAssign($assign)
    {
        $this->container['assign'] = $assign;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of payment container
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets public
     * @return \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     * @param \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate $public public
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets private
     * @return \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     * @param \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate $private private
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
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
     * @param string $created Creation date
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
     * @param string $updated Last update date
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets mandate
     * @return \Secuconnect\Client\Model\PaymentContainerMandate
     */
    public function getMandate()
    {
        return $this->container['mandate'];
    }

    /**
     * Sets mandate
     * @param \Secuconnect\Client\Model\PaymentContainerMandate $mandate mandate
     * @return $this
     */
    public function setMandate($mandate)
    {
        $this->container['mandate'] = $mandate;

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

