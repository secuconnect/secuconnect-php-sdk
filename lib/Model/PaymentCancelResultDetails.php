<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentCancelResultDetails
 *
 * @category Class
 * @description Refund information
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentCancelResultDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentCancelResultDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'new_trans_id' => 'int',
        'remaining_amount' => 'int',
        'refund_waiting_for_payment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'new_trans_id' => null,
        'remaining_amount' => null,
        'refund_waiting_for_payment' => null
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
        'new_trans_id' => 'new_trans_id',
        'remaining_amount' => 'remaining_amount',
        'refund_waiting_for_payment' => 'refund_waiting_for_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'new_trans_id' => 'setNewTransId',
        'remaining_amount' => 'setRemainingAmount',
        'refund_waiting_for_payment' => 'setRefundWaitingForPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'new_trans_id' => 'getNewTransId',
        'remaining_amount' => 'getRemainingAmount',
        'refund_waiting_for_payment' => 'getRefundWaitingForPayment'
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
        $this->container['new_trans_id'] = isset($data['new_trans_id']) ? $data['new_trans_id'] : null;
        $this->container['remaining_amount'] = isset($data['remaining_amount']) ? $data['remaining_amount'] : null;
        $this->container['refund_waiting_for_payment'] = isset($data['refund_waiting_for_payment']) ? $data['refund_waiting_for_payment'] : false;
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
     * Gets new_trans_id
     * @return int
     */
    public function getNewTransId()
    {
        return $this->container['new_trans_id'];
    }

    /**
     * Sets new_trans_id
     * @param int $new_trans_id Transaction ID of the Payment Transaction for the refund
     * @return $this
     */
    public function setNewTransId($new_trans_id)
    {
        $this->container['new_trans_id'] = $new_trans_id;

        return $this;
    }

    /**
     * Gets remaining_amount
     * @return int
     */
    public function getRemainingAmount()
    {
        return $this->container['remaining_amount'];
    }

    /**
     * Sets remaining_amount
     * @param int $remaining_amount Remaining amount in case of a partial cancellation or refund
     * @return $this
     */
    public function setRemainingAmount($remaining_amount)
    {
        $this->container['remaining_amount'] = $remaining_amount;

        return $this;
    }

    /**
     * Gets refund_waiting_for_payment
     * @return bool
     */
    public function getRefundWaitingForPayment()
    {
        return $this->container['refund_waiting_for_payment'];
    }

    /**
     * Sets refund_waiting_for_payment
     * @param bool $refund_waiting_for_payment Whether the merchant needs to transfer money back, before we will pay out the refund
     * @return $this
     */
    public function setRefundWaitingForPayment($refund_waiting_for_payment)
    {
        $this->container['refund_waiting_for_payment'] = $refund_waiting_for_payment;

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

