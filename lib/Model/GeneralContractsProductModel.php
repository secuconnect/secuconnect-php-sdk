<?php

namespace Secuconnect\Client\Model;

/**
 * GeneralContractsProductModel
 *
 * @category Class
 * @description GeneralContractsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralContractsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GeneralContractsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_old' => 'int',
        'parent' => '\Secuconnect\Client\Model\ParentModel',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'pay_in_advance_account' => '\Secuconnect\Client\Model\BankAccountDescriptor',
        'payment_link_options' => '\Secuconnect\Client\Model\PaymentLinkOptions',
        'approved' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_old' => 'id',
        'parent' => null,
        'merchant' => null,
        'pay_in_advance_account' => null,
        'payment_link_options' => null,
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
        'id_old' => 'id_old',
        'parent' => 'parent',
        'merchant' => 'merchant',
        'pay_in_advance_account' => 'pay_in_advance_account',
        'payment_link_options' => 'payment_link_options',
        'approved' => 'approved'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_old' => 'setIdOld',
        'parent' => 'setParent',
        'merchant' => 'setMerchant',
        'pay_in_advance_account' => 'setPayInAdvanceAccount',
        'payment_link_options' => 'setPaymentLinkOptions',
        'approved' => 'setApproved'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_old' => 'getIdOld',
        'parent' => 'getParent',
        'merchant' => 'getMerchant',
        'pay_in_advance_account' => 'getPayInAdvanceAccount',
        'payment_link_options' => 'getPaymentLinkOptions',
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

        $this->container['id_old'] = isset($data['id_old']) ? $data['id_old'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['pay_in_advance_account'] = isset($data['pay_in_advance_account']) ? $data['pay_in_advance_account'] : null;
        $this->container['payment_link_options'] = isset($data['payment_link_options']) ? $data['payment_link_options'] : null;
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
     * Gets id_old
     * @return int
     */
    public function getIdOld()
    {
        return $this->container['id_old'];
    }

    /**
     * Sets id_old
     * @param int $id_old ID in secupay Frontend
     * @return $this
     */
    public function setIdOld($id_old)
    {
        $this->container['id_old'] = $id_old;

        return $this;
    }

    /**
     * Gets parent
     * @return \Secuconnect\Client\Model\ParentModel
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     * @param \Secuconnect\Client\Model\ParentModel $parent parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\ProductInstanceUID $merchant merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets pay_in_advance_account
     * @return \Secuconnect\Client\Model\BankAccountDescriptor
     */
    public function getPayInAdvanceAccount()
    {
        return $this->container['pay_in_advance_account'];
    }

    /**
     * Sets pay_in_advance_account
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $pay_in_advance_account pay_in_advance_account
     * @return $this
     */
    public function setPayInAdvanceAccount($pay_in_advance_account)
    {
        $this->container['pay_in_advance_account'] = $pay_in_advance_account;

        return $this;
    }

    /**
     * Gets payment_link_options
     * @return \Secuconnect\Client\Model\PaymentLinkOptions
     */
    public function getPaymentLinkOptions()
    {
        return $this->container['payment_link_options'];
    }

    /**
     * Sets payment_link_options
     * @param \Secuconnect\Client\Model\PaymentLinkOptions $payment_link_options payment_link_options
     * @return $this
     */
    public function setPaymentLinkOptions($payment_link_options)
    {
        $this->container['payment_link_options'] = $payment_link_options;

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

