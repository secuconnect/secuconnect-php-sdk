<?php

namespace Secuconnect\Client\Model;

/**
 * SecupayTransactionProductModel
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayTransactionProductModel extends BaseProductModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SecupayTransactionProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'trans_id' => 'int',
        'status' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'purpose' => 'string',
        'order_id' => 'string',
        'basket' => '\Secuconnect\Client\Model\SecupayBasketItem[]',
        'transaction_status' => 'string',
        'accrual' => 'bool',
        'payment_action' => 'string',
        'transfer_purpose' => 'string',
        'transfer_account' => '\Secuconnect\Client\Model\PaymentInformation',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'used_payment_instrument' => '\Secuconnect\Client\Model\SecupayTransactionProductModelUsedPaymentInstrument',
        'redirect_url' => '\Secuconnect\Client\Model\SecupayRedirectUrl',
        'subscription' => '\Secuconnect\Client\Model\SecupayTransactionProductDTOSubscription',
        'iframe_url' => 'string',
        'container' => '\Secuconnect\Client\Model\PaymentContainersProductModel',
        'sub_transactions' => '\Secuconnect\Client\Model\SecupaySubTransactionProductModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'trans_id' => null,
        'status' => null,
        'amount' => null,
        'currency' => null,
        'purpose' => null,
        'order_id' => null,
        'basket' => null,
        'transaction_status' => null,
        'accrual' => null,
        'payment_action' => null,
        'transfer_purpose' => null,
        'transfer_account' => null,
        'customer' => null,
        'used_payment_instrument' => null,
        'redirect_url' => null,
        'subscription' => null,
        'iframe_url' => null,
        'container' => null,
        'sub_transactions' => null
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
        'status' => 'status',
        'amount' => 'amount',
        'currency' => 'currency',
        'purpose' => 'purpose',
        'order_id' => 'order_id',
        'basket' => 'basket',
        'transaction_status' => 'transaction_status',
        'accrual' => 'accrual',
        'payment_action' => 'payment_action',
        'transfer_purpose' => 'transfer_purpose',
        'transfer_account' => 'transfer_account',
        'customer' => 'customer',
        'used_payment_instrument' => 'used_payment_instrument',
        'redirect_url' => 'redirect_url',
        'subscription' => 'subscription',
        'iframe_url' => 'iframe_url',
        'container' => 'container',
        'sub_transactions' => 'sub_transactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'trans_id' => 'setTransId',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'purpose' => 'setPurpose',
        'order_id' => 'setOrderId',
        'basket' => 'setBasket',
        'transaction_status' => 'setTransactionStatus',
        'accrual' => 'setAccrual',
        'payment_action' => 'setPaymentAction',
        'transfer_purpose' => 'setTransferPurpose',
        'transfer_account' => 'setTransferAccount',
        'customer' => 'setCustomer',
        'used_payment_instrument' => 'setUsedPaymentInstrument',
        'redirect_url' => 'setRedirectUrl',
        'subscription' => 'setSubscription',
        'iframe_url' => 'setIframeUrl',
        'container' => 'setContainer',
        'sub_transactions' => 'setSubTransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'trans_id' => 'getTransId',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'purpose' => 'getPurpose',
        'order_id' => 'getOrderId',
        'basket' => 'getBasket',
        'transaction_status' => 'getTransactionStatus',
        'accrual' => 'getAccrual',
        'payment_action' => 'getPaymentAction',
        'transfer_purpose' => 'getTransferPurpose',
        'transfer_account' => 'getTransferAccount',
        'customer' => 'getCustomer',
        'used_payment_instrument' => 'getUsedPaymentInstrument',
        'redirect_url' => 'getRedirectUrl',
        'subscription' => 'getSubscription',
        'iframe_url' => 'getIframeUrl',
        'container' => 'getContainer',
        'sub_transactions' => 'getSubTransactions'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['basket'] = isset($data['basket']) ? $data['basket'] : null;
        $this->container['transaction_status'] = isset($data['transaction_status']) ? $data['transaction_status'] : null;
        $this->container['accrual'] = isset($data['accrual']) ? $data['accrual'] : null;
        $this->container['payment_action'] = isset($data['payment_action']) ? $data['payment_action'] : null;
        $this->container['transfer_purpose'] = isset($data['transfer_purpose']) ? $data['transfer_purpose'] : null;
        $this->container['transfer_account'] = isset($data['transfer_account']) ? $data['transfer_account'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['used_payment_instrument'] = isset($data['used_payment_instrument']) ? $data['used_payment_instrument'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['iframe_url'] = isset($data['iframe_url']) ? $data['iframe_url'] : null;
        $this->container['container'] = isset($data['container']) ? $data['container'] : null;
        $this->container['sub_transactions'] = isset($data['sub_transactions']) ? $data['sub_transactions'] : null;
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
     * @param int $trans_id Transaction identifier
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
     * @param int $amount Total amount of payment in cents (or the smallest cash unit of the relevant currency)
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
     * Gets basket
     * @return \Secuconnect\Client\Model\SecupayBasketItem[]
     */
    public function getBasket()
    {
        return $this->container['basket'];
    }

    /**
     * Sets basket
     * @param \Secuconnect\Client\Model\SecupayBasketItem[] $basket A list of items that are being purchased.
     * @return $this
     */
    public function setBasket($basket)
    {
        $this->container['basket'] = $basket;

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
     * Gets accrual
     * @return bool
     */
    public function getAccrual()
    {
        return $this->container['accrual'];
    }

    /**
     * Sets accrual
     * @param bool $accrual Indicates whether the payment is locked for pay-out (TRUE) or not (FALSE). Standard value here is FALSE.
     * @return $this
     */
    public function setAccrual($accrual)
    {
        $this->container['accrual'] = $accrual;

        return $this;
    }

    /**
     * Gets payment_action
     * @return string
     */
    public function getPaymentAction()
    {
        return $this->container['payment_action'];
    }

    /**
     * Sets payment_action
     * @param string $payment_action Specifies whether a pre-authorization (\"authorization\") or instant payment ( \"sale\") is to be performed. Standard value here is \"sale\". The collection of the pre-authorized payment is made with the \"capture\" command.
     * @return $this
     */
    public function setPaymentAction($payment_action)
    {
        $this->container['payment_action'] = $payment_action;

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
     * @param \Secuconnect\Client\Model\PaymentInformation $transfer_account transfer_account
     * @return $this
     */
    public function setTransferAccount($transfer_account)
    {
        $this->container['transfer_account'] = $transfer_account;

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
     * Gets used_payment_instrument
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModelUsedPaymentInstrument
     */
    public function getUsedPaymentInstrument()
    {
        return $this->container['used_payment_instrument'];
    }

    /**
     * Sets used_payment_instrument
     * @param \Secuconnect\Client\Model\SecupayTransactionProductModelUsedPaymentInstrument $used_payment_instrument used_payment_instrument
     * @return $this
     */
    public function setUsedPaymentInstrument($used_payment_instrument)
    {
        $this->container['used_payment_instrument'] = $used_payment_instrument;

        return $this;
    }

    /**
     * Gets redirect_url
     * @return \Secuconnect\Client\Model\SecupayRedirectUrl
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     * @param \Secuconnect\Client\Model\SecupayRedirectUrl $redirect_url redirect_url
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets subscription
     * @return \Secuconnect\Client\Model\SecupayTransactionProductDTOSubscription
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTOSubscription $subscription subscription
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets iframe_url
     * @return string
     */
    public function getIframeUrl()
    {
        return $this->container['iframe_url'];
    }

    /**
     * Sets iframe_url
     * @param string $iframe_url The url of the payment checkout iframe
     * @return $this
     */
    public function setIframeUrl($iframe_url)
    {
        $this->container['iframe_url'] = $iframe_url;

        return $this;
    }

    /**
     * Gets container
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     */
    public function getContainer()
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     * @param \Secuconnect\Client\Model\PaymentContainersProductModel $container container
     * @return $this
     */
    public function setContainer($container)
    {
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets sub_transactions
     * @return \Secuconnect\Client\Model\SecupaySubTransactionProductModel[]
     */
    public function getSubTransactions()
    {
        return $this->container['sub_transactions'];
    }

    /**
     * Sets sub_transactions
     * @param \Secuconnect\Client\Model\SecupaySubTransactionProductModel[] $sub_transactions A list of sub transactions (for mixed basket)
     * @return $this
     */
    public function setSubTransactions($sub_transactions)
    {
        $this->container['sub_transactions'] = $sub_transactions;

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

