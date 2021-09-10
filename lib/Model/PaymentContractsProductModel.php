<?php

namespace Secuconnect\Client\Model;

/**
 * PaymentContractsProductModel
 *
 * @category Class
 * @description PaymentContractsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContractsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'parent' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'pay_in_account' => '\Secuconnect\Client\Model\PaymentInformation',
        'demo' => 'bool',
        'approved' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'parent' => null,
        'pay_in_account' => null,
        'demo' => null,
        'approved' => null
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
        'parent' => 'parent',
        'pay_in_account' => 'pay_in_account',
        'demo' => 'demo',
        'approved' => 'approved'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'parent' => 'setParent',
        'pay_in_account' => 'setPayInAccount',
        'demo' => 'setDemo',
        'approved' => 'setApproved'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'parent' => 'getParent',
        'pay_in_account' => 'getPayInAccount',
        'demo' => 'getDemo',
        'approved' => 'getApproved'
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
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['pay_in_account'] = isset($data['pay_in_account']) ? $data['pay_in_account'] : null;
        $this->container['demo'] = isset($data['demo']) ? $data['demo'] : null;
        $this->container['approved'] = isset($data['approved']) ? $data['approved'] : null;
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
     * Gets parent
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     * @param \Secuconnect\Client\Model\ProductInstanceUID $parent parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets pay_in_account
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getPayInAccount()
    {
        return $this->container['pay_in_account'];
    }

    /**
     * Sets pay_in_account
     * @param \Secuconnect\Client\Model\PaymentInformation $pay_in_account pay_in_account
     * @return $this
     */
    public function setPayInAccount($pay_in_account)
    {
        $this->container['pay_in_account'] = $pay_in_account;

        return $this;
    }

    /**
     * Gets demo
     * @return bool
     */
    public function getDemo()
    {
        return $this->container['demo'];
    }

    /**
     * Sets demo
     * @param bool $demo Is this a demo contract
     * @return $this
     */
    public function setDemo($demo)
    {
        $this->container['demo'] = $demo;

        return $this;
    }

    /**
     * Gets approved
     * @return bool
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     * @param bool $approved Indicates if the payout lock was removed
     * @return $this
     */
    public function setApproved($approved)
    {
        $this->container['approved'] = $approved;

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

