<?php

namespace Secuconnect\Client\Model;

/**
 * PaymentInstructions
 *
 * @category Class
 * @description PaymentInstructions
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentInstructions extends BankAccountDescriptor
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentInstructions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'girocode_url' => 'string',
        'interest' => 'int',
        'total_value' => 'int',
        'number_of_installments' => 'int',
        'installment' => 'int',
        'last_installment' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'girocode_url' => null,
        'interest' => null,
        'total_value' => null,
        'number_of_installments' => null,
        'installment' => null,
        'last_installment' => null
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
        'girocode_url' => 'girocode_url',
        'interest' => 'interest',
        'total_value' => 'total_value',
        'number_of_installments' => 'number_of_installments',
        'installment' => 'installment',
        'last_installment' => 'last_installment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'girocode_url' => 'setGirocodeUrl',
        'interest' => 'setInterest',
        'total_value' => 'setTotalValue',
        'number_of_installments' => 'setNumberOfInstallments',
        'installment' => 'setInstallment',
        'last_installment' => 'setLastInstallment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'girocode_url' => 'getGirocodeUrl',
        'interest' => 'getInterest',
        'total_value' => 'getTotalValue',
        'number_of_installments' => 'getNumberOfInstallments',
        'installment' => 'getInstallment',
        'last_installment' => 'getLastInstallment'
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

        $this->container['girocode_url'] = isset($data['girocode_url']) ? $data['girocode_url'] : null;
        $this->container['interest'] = isset($data['interest']) ? $data['interest'] : null;
        $this->container['total_value'] = isset($data['total_value']) ? $data['total_value'] : null;
        $this->container['number_of_installments'] = isset($data['number_of_installments']) ? $data['number_of_installments'] : null;
        $this->container['installment'] = isset($data['installment']) ? $data['installment'] : null;
        $this->container['last_installment'] = isset($data['last_installment']) ? $data['last_installment'] : null;
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
     * Gets girocode_url
     * @return string
     */
    public function getGirocodeUrl()
    {
        return $this->container['girocode_url'];
    }

    /**
     * Sets girocode_url
     * @param string $girocode_url Url to generated GiroCode
     * @return $this
     */
    public function setGirocodeUrl($girocode_url)
    {
        $this->container['girocode_url'] = $girocode_url;

        return $this;
    }

    /**
     * Gets interest
     * @return int
     */
    public function getInterest()
    {
        return $this->container['interest'];
    }

    /**
     * Sets interest
     * @param int $interest Total amount of interest for easyCredit transaction
     * @return $this
     */
    public function setInterest($interest)
    {
        $this->container['interest'] = $interest;

        return $this;
    }

    /**
     * Gets total_value
     * @return int
     */
    public function getTotalValue()
    {
        return $this->container['total_value'];
    }

    /**
     * Sets total_value
     * @param int $total_value Total amount of basket & interest for easyCredit transaction
     * @return $this
     */
    public function setTotalValue($total_value)
    {
        $this->container['total_value'] = $total_value;

        return $this;
    }

    /**
     * Gets number_of_installments
     * @return int
     */
    public function getNumberOfInstallments()
    {
        return $this->container['number_of_installments'];
    }

    /**
     * Sets number_of_installments
     * @param int $number_of_installments Number of installments for easyCredit transaction
     * @return $this
     */
    public function setNumberOfInstallments($number_of_installments)
    {
        $this->container['number_of_installments'] = $number_of_installments;

        return $this;
    }

    /**
     * Gets installment
     * @return int
     */
    public function getInstallment()
    {
        return $this->container['installment'];
    }

    /**
     * Sets installment
     * @param int $installment The monthly payment for easyCredit transaction
     * @return $this
     */
    public function setInstallment($installment)
    {
        $this->container['installment'] = $installment;

        return $this;
    }

    /**
     * Gets last_installment
     * @return int
     */
    public function getLastInstallment()
    {
        return $this->container['last_installment'];
    }

    /**
     * Sets last_installment
     * @param int $last_installment The last installment payment for easyCredit transaction
     * @return $this
     */
    public function setLastInstallment($last_installment)
    {
        $this->container['last_installment'] = $last_installment;

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

