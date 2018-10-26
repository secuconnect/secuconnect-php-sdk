<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentContainersProductModel
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentContainersProductModel implements ArrayAccess
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
        'object' => 'string',
        'id' => 'string',
        'contract' => '\Secuconnect\Client\Model\PaymentContractsProductModel',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'assign' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'type' => 'string',
        'public' => '\Secuconnect\Client\Model\BankAccountDescriptor',
        'private' => '\Secuconnect\Client\Model\BankAccountDescriptor',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'mandate' => '\Secuconnect\Client\Model\PaymentContainerMandate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => 'id',
        'contract' => null,
        'customer' => null,
        'assign' => null,
        'type' => null,
        'public' => null,
        'private' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'mandate' => null
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
        'object' => 'object',
        'id' => 'id',
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
        'object' => 'setObject',
        'id' => 'setId',
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
        'object' => 'getObject',
        'id' => 'getId',
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
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * Gets object
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string $object Object of payment container
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Id of payment container
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param \Secuconnect\Client\Model\PaymentContractsProductModel $contract Payment container contract
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
     * @param \Secuconnect\Client\Model\PaymentCustomersProductModel $customer Payment container customer
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
     * @param \Secuconnect\Client\Model\ProductInstanceUID $assign Assign to
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
     * @return \Secuconnect\Client\Model\BankAccountDescriptor
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $public Public payment instrument data
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets private
     * @return \Secuconnect\Client\Model\BankAccountDescriptor
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $private Private payment instrument data
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created Creation date
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param \DateTime $updated Last update date
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
     * @param \Secuconnect\Client\Model\PaymentContainerMandate $mandate Payment container mandate
     * @return $this
     */
    public function setMandate($mandate)
    {
        $this->container['mandate'] = $mandate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
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


