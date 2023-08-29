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
        'l' => 'int',
        'k' => 'int',
        'ks' => 'string',
        'c' => 'int',
        's' => 'int',
        't' => '\Secuconnect\Client\Model\AggregationTimeResult',
        'description' => 'string',
        'id_old' => 'int',
        'parent' => '\Secuconnect\Client\Model\ParentModel',
        'merchant' => '\Secuconnect\Client\Model\GeneralMerchantsProductModel',
        'pay_in_advance_account' => '\Secuconnect\Client\Model\BankAccountDescriptor',
        'paypal_configuration' => '\Secuconnect\Client\Model\ThirdPartyEnvironment',
        'easycredit_configuration' => '\Secuconnect\Client\Model\ThirdPartyEnvironment',
        'checkout_configuration' => '\Secuconnect\Client\Model\CheckoutConfiguration',
        'payment_link_options' => '\Secuconnect\Client\Model\PaymentLinkOptions',
        'approved' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'l' => null,
        'k' => null,
        'ks' => null,
        'c' => null,
        's' => null,
        't' => null,
        'description' => null,
        'id_old' => 'id',
        'parent' => null,
        'merchant' => null,
        'pay_in_advance_account' => null,
        'paypal_configuration' => null,
        'easycredit_configuration' => null,
        'checkout_configuration' => null,
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
        'l' => 'l',
        'k' => 'k',
        'ks' => 'ks',
        'c' => 'c',
        's' => 's',
        't' => 't',
        'description' => 'description',
        'id_old' => 'id_old',
        'parent' => 'parent',
        'merchant' => 'merchant',
        'pay_in_advance_account' => 'pay_in_advance_account',
        'paypal_configuration' => 'paypal_configuration',
        'easycredit_configuration' => 'easycredit_configuration',
        'checkout_configuration' => 'checkout_configuration',
        'payment_link_options' => 'payment_link_options',
        'approved' => 'approved'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'l' => 'setL',
        'k' => 'setK',
        'ks' => 'setKs',
        'c' => 'setC',
        's' => 'setS',
        't' => 'setT',
        'description' => 'setDescription',
        'id_old' => 'setIdOld',
        'parent' => 'setParent',
        'merchant' => 'setMerchant',
        'pay_in_advance_account' => 'setPayInAdvanceAccount',
        'paypal_configuration' => 'setPaypalConfiguration',
        'easycredit_configuration' => 'setEasycreditConfiguration',
        'checkout_configuration' => 'setCheckoutConfiguration',
        'payment_link_options' => 'setPaymentLinkOptions',
        'approved' => 'setApproved'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'l' => 'getL',
        'k' => 'getK',
        'ks' => 'getKs',
        'c' => 'getC',
        's' => 'getS',
        't' => 'getT',
        'description' => 'getDescription',
        'id_old' => 'getIdOld',
        'parent' => 'getParent',
        'merchant' => 'getMerchant',
        'pay_in_advance_account' => 'getPayInAdvanceAccount',
        'paypal_configuration' => 'getPaypalConfiguration',
        'easycredit_configuration' => 'getEasycreditConfiguration',
        'checkout_configuration' => 'getCheckoutConfiguration',
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

        $this->container['l'] = isset($data['l']) ? $data['l'] : null;
        $this->container['k'] = isset($data['k']) ? $data['k'] : null;
        $this->container['ks'] = isset($data['ks']) ? $data['ks'] : null;
        $this->container['c'] = isset($data['c']) ? $data['c'] : null;
        $this->container['s'] = isset($data['s']) ? $data['s'] : null;
        $this->container['t'] = isset($data['t']) ? $data['t'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id_old'] = isset($data['id_old']) ? $data['id_old'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['pay_in_advance_account'] = isset($data['pay_in_advance_account']) ? $data['pay_in_advance_account'] : null;
        $this->container['paypal_configuration'] = isset($data['paypal_configuration']) ? $data['paypal_configuration'] : null;
        $this->container['easycredit_configuration'] = isset($data['easycredit_configuration']) ? $data['easycredit_configuration'] : null;
        $this->container['checkout_configuration'] = isset($data['checkout_configuration']) ? $data['checkout_configuration'] : null;
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
     * Gets l
     * @return int
     */
    public function getL()
    {
        return $this->container['l'];
    }

    /**
     * Sets l
     * @param int $l lookup index
     * @return $this
     */
    public function setL($l)
    {
        $this->container['l'] = $l;

        return $this;
    }

    /**
     * Gets k
     * @return int
     */
    public function getK()
    {
        return $this->container['k'];
    }

    /**
     * Sets k
     * @param int $k key index
     * @return $this
     */
    public function setK($k)
    {
        $this->container['k'] = $k;

        return $this;
    }

    /**
     * Gets ks
     * @return string
     */
    public function getKs()
    {
        return $this->container['ks'];
    }

    /**
     * Sets ks
     * @param string $ks key name
     * @return $this
     */
    public function setKs($ks)
    {
        $this->container['ks'] = $ks;

        return $this;
    }

    /**
     * Gets c
     * @return int
     */
    public function getC()
    {
        return $this->container['c'];
    }

    /**
     * Sets c
     * @param int $c count (number of items)
     * @return $this
     */
    public function setC($c)
    {
        $this->container['c'] = $c;

        return $this;
    }

    /**
     * Gets s
     * @return int
     */
    public function getS()
    {
        return $this->container['s'];
    }

    /**
     * Sets s
     * @param int $s sum
     * @return $this
     */
    public function setS($s)
    {
        $this->container['s'] = $s;

        return $this;
    }

    /**
     * Gets t
     * @return \Secuconnect\Client\Model\AggregationTimeResult
     */
    public function getT()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     * @param \Secuconnect\Client\Model\AggregationTimeResult $t t
     * @return $this
     */
    public function setT($t)
    {
        $this->container['t'] = $t;

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
     * @param string $description description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
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
     * @return \Secuconnect\Client\Model\GeneralMerchantsProductModel
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\GeneralMerchantsProductModel $merchant merchant
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
     * Gets paypal_configuration
     * @return \Secuconnect\Client\Model\ThirdPartyEnvironment
     */
    public function getPaypalConfiguration()
    {
        return $this->container['paypal_configuration'];
    }

    /**
     * Sets paypal_configuration
     * @param \Secuconnect\Client\Model\ThirdPartyEnvironment $paypal_configuration paypal_configuration
     * @return $this
     */
    public function setPaypalConfiguration($paypal_configuration)
    {
        $this->container['paypal_configuration'] = $paypal_configuration;

        return $this;
    }

    /**
     * Gets easycredit_configuration
     * @return \Secuconnect\Client\Model\ThirdPartyEnvironment
     */
    public function getEasycreditConfiguration()
    {
        return $this->container['easycredit_configuration'];
    }

    /**
     * Sets easycredit_configuration
     * @param \Secuconnect\Client\Model\ThirdPartyEnvironment $easycredit_configuration easycredit_configuration
     * @return $this
     */
    public function setEasycreditConfiguration($easycredit_configuration)
    {
        $this->container['easycredit_configuration'] = $easycredit_configuration;

        return $this;
    }

    /**
     * Gets checkout_configuration
     * @return \Secuconnect\Client\Model\CheckoutConfiguration
     */
    public function getCheckoutConfiguration()
    {
        return $this->container['checkout_configuration'];
    }

    /**
     * Sets checkout_configuration
     * @param \Secuconnect\Client\Model\CheckoutConfiguration $checkout_configuration checkout_configuration
     * @return $this
     */
    public function setCheckoutConfiguration($checkout_configuration)
    {
        $this->container['checkout_configuration'] = $checkout_configuration;

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

