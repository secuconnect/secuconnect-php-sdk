<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SecupayPayoutProductModel
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SecupayPayoutProductModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SecupayPayoutProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'id' => 'string',
        'trans_id' => 'int',
        'status' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'purpose' => 'string',
        'order_id' => 'string',
        'transaction_status' => 'string',
        'transaction_list' => '\Secuconnect\Client\Model\SecupayTransactionListItem[]',
        'transfer_purpose' => 'string',
        'transfer_account' => '\Secuconnect\Client\Model\PaymentInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => null,
        'trans_id' => null,
        'status' => null,
        'amount' => null,
        'currency' => null,
        'purpose' => null,
        'order_id' => null,
        'transaction_status' => null,
        'transaction_list' => null,
        'transfer_purpose' => null,
        'transfer_account' => null
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
        'trans_id' => 'trans_id',
        'status' => 'status',
        'amount' => 'amount',
        'currency' => 'currency',
        'purpose' => 'purpose',
        'order_id' => 'order_id',
        'transaction_status' => 'transaction_status',
        'transaction_list' => 'transaction_list',
        'transfer_purpose' => 'transfer_purpose',
        'transfer_account' => 'transfer_account'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'trans_id' => 'setTransId',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'purpose' => 'setPurpose',
        'order_id' => 'setOrderId',
        'transaction_status' => 'setTransactionStatus',
        'transaction_list' => 'setTransactionList',
        'transfer_purpose' => 'setTransferPurpose',
        'transfer_account' => 'setTransferAccount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'trans_id' => 'getTransId',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'purpose' => 'getPurpose',
        'order_id' => 'getOrderId',
        'transaction_status' => 'getTransactionStatus',
        'transaction_list' => 'getTransactionList',
        'transfer_purpose' => 'getTransferPurpose',
        'transfer_account' => 'getTransferAccount'
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
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['transaction_status'] = isset($data['transaction_status']) ? $data['transaction_status'] : null;
        $this->container['transaction_list'] = isset($data['transaction_list']) ? $data['transaction_list'] : null;
        $this->container['transfer_purpose'] = isset($data['transfer_purpose']) ? $data['transfer_purpose'] : null;
        $this->container['transfer_account'] = isset($data['transfer_account']) ? $data['transfer_account'] : null;
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
     * @param string $object Product name
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
     * @param string $id ID of instance
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param int $trans_id ID of transaction
     * @return $this
     */
    public function setTransId($trans_id)
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Transaction status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount Total amount of transaction lit's items
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency ISO 4217 code of currency, eg EUR for Euro.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets purpose
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     * @param string $purpose The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer.
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param string $order_id Specifying an order number. Depending on the contract setting, this must be unique for each payment.
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets transaction_status
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status
     * @param string $transaction_status Transaction status (number)
     * @return $this
     */
    public function setTransactionStatus($transaction_status)
    {
        $this->container['transaction_status'] = $transaction_status;

        return $this;
    }

    /**
     * Gets transaction_list
     * @return \Secuconnect\Client\Model\SecupayTransactionListItem[]
     */
    public function getTransactionList()
    {
        return $this->container['transaction_list'];
    }

    /**
     * Sets transaction_list
     * @param \Secuconnect\Client\Model\SecupayTransactionListItem[] $transaction_list A list of transaction items
     * @return $this
     */
    public function setTransactionList($transaction_list)
    {
        $this->container['transaction_list'] = $transaction_list;

        return $this;
    }

    /**
     * Gets transfer_purpose
     * @return string
     */
    public function getTransferPurpose()
    {
        return $this->container['transfer_purpose'];
    }

    /**
     * Sets transfer_purpose
     * @param string $transfer_purpose The purpose the payer needs to use for his transfer
     * @return $this
     */
    public function setTransferPurpose($transfer_purpose)
    {
        $this->container['transfer_purpose'] = $transfer_purpose;

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
     * @param \Secuconnect\Client\Model\PaymentInformation $transfer_account The bank account the payer needs to use for his transfer
     * @return $this
     */
    public function setTransferAccount($transfer_account)
    {
        $this->container['transfer_account'] = $transfer_account;

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


