<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentContractsDTOClone
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsDTOClone implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContractsDTOClone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project' => 'string',
        'payment_data' => '\Secuconnect\Client\Model\PaymentInformation',
        'payin_account' => 'bool',
        'allow_transactions' => 'bool',
        'url_push' => 'string',
        'debit_product_id' => 'string',
        'prepay_product_id' => 'string',
        'invoice_product_id' => 'string',
        'creditcard_product_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'project' => null,
        'payment_data' => null,
        'payin_account' => null,
        'allow_transactions' => null,
        'url_push' => null,
        'debit_product_id' => null,
        'prepay_product_id' => null,
        'invoice_product_id' => null,
        'creditcard_product_id' => null
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
        'project' => 'project',
        'payment_data' => 'payment_data',
        'payin_account' => 'payin_account',
        'allow_transactions' => 'allow_transactions',
        'url_push' => 'url_push',
        'debit_product_id' => 'debit_product_id',
        'prepay_product_id' => 'prepay_product_id',
        'invoice_product_id' => 'invoice_product_id',
        'creditcard_product_id' => 'creditcard_product_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'project' => 'setProject',
        'payment_data' => 'setPaymentData',
        'payin_account' => 'setPayinAccount',
        'allow_transactions' => 'setAllowTransactions',
        'url_push' => 'setUrlPush',
        'debit_product_id' => 'setDebitProductId',
        'prepay_product_id' => 'setPrepayProductId',
        'invoice_product_id' => 'setInvoiceProductId',
        'creditcard_product_id' => 'setCreditcardProductId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'project' => 'getProject',
        'payment_data' => 'getPaymentData',
        'payin_account' => 'getPayinAccount',
        'allow_transactions' => 'getAllowTransactions',
        'url_push' => 'getUrlPush',
        'debit_product_id' => 'getDebitProductId',
        'prepay_product_id' => 'getPrepayProductId',
        'invoice_product_id' => 'getInvoiceProductId',
        'creditcard_product_id' => 'getCreditcardProductId'
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
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['payment_data'] = isset($data['payment_data']) ? $data['payment_data'] : null;
        $this->container['payin_account'] = isset($data['payin_account']) ? $data['payin_account'] : false;
        $this->container['allow_transactions'] = isset($data['allow_transactions']) ? $data['allow_transactions'] : null;
        $this->container['url_push'] = isset($data['url_push']) ? $data['url_push'] : null;
        $this->container['debit_product_id'] = isset($data['debit_product_id']) ? $data['debit_product_id'] : null;
        $this->container['prepay_product_id'] = isset($data['prepay_product_id']) ? $data['prepay_product_id'] : null;
        $this->container['invoice_product_id'] = isset($data['invoice_product_id']) ? $data['invoice_product_id'] : null;
        $this->container['creditcard_product_id'] = isset($data['creditcard_product_id']) ? $data['creditcard_product_id'] : null;
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
     * Gets project
     * @return string
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     * @param string $project Name of the project (must be unique)
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets payment_data
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getPaymentData()
    {
        return $this->container['payment_data'];
    }

    /**
     * Sets payment_data
     * @param \Secuconnect\Client\Model\PaymentInformation $payment_data Merchants bank account for the payout
     * @return $this
     */
    public function setPaymentData($payment_data)
    {
        $this->container['payment_data'] = $payment_data;

        return $this;
    }

    /**
     * Gets payin_account
     * @return bool
     */
    public function getPayinAccount()
    {
        return $this->container['payin_account'];
    }

    /**
     * Sets payin_account
     * @param bool $payin_account Pay in account
     * @return $this
     */
    public function setPayinAccount($payin_account)
    {
        $this->container['payin_account'] = $payin_account;

        return $this;
    }

    /**
     * Gets allow_transactions
     * @return bool
     */
    public function getAllowTransactions()
    {
        return $this->container['allow_transactions'];
    }

    /**
     * Sets allow_transactions
     * @param bool $allow_transactions DEPRECATED: Should allow transactions for this sub-contract?
     * @return $this
     */
    public function setAllowTransactions($allow_transactions)
    {
        $this->container['allow_transactions'] = $allow_transactions;

        return $this;
    }

    /**
     * Gets url_push
     * @return string
     */
    public function getUrlPush()
    {
        return $this->container['url_push'];
    }

    /**
     * Sets url_push
     * @param string $url_push The default URL where your service listen for push notifications of the secuconnect service
     * @return $this
     */
    public function setUrlPush($url_push)
    {
        $this->container['url_push'] = $url_push;

        return $this;
    }

    /**
     * Gets debit_product_id
     * @return string
     */
    public function getDebitProductId()
    {
        return $this->container['debit_product_id'];
    }

    /**
     * Sets debit_product_id
     * @param string $debit_product_id DEPRECATED: Contract debit product id
     * @return $this
     */
    public function setDebitProductId($debit_product_id)
    {
        $this->container['debit_product_id'] = $debit_product_id;

        return $this;
    }

    /**
     * Gets prepay_product_id
     * @return string
     */
    public function getPrepayProductId()
    {
        return $this->container['prepay_product_id'];
    }

    /**
     * Sets prepay_product_id
     * @param string $prepay_product_id DEPRECATED: Contracts prepay product id
     * @return $this
     */
    public function setPrepayProductId($prepay_product_id)
    {
        $this->container['prepay_product_id'] = $prepay_product_id;

        return $this;
    }

    /**
     * Gets invoice_product_id
     * @return string
     */
    public function getInvoiceProductId()
    {
        return $this->container['invoice_product_id'];
    }

    /**
     * Sets invoice_product_id
     * @param string $invoice_product_id DEPRECATED: Contracts invoice product id
     * @return $this
     */
    public function setInvoiceProductId($invoice_product_id)
    {
        $this->container['invoice_product_id'] = $invoice_product_id;

        return $this;
    }

    /**
     * Gets creditcard_product_id
     * @return string
     */
    public function getCreditcardProductId()
    {
        return $this->container['creditcard_product_id'];
    }

    /**
     * Sets creditcard_product_id
     * @param string $creditcard_product_id DEPRECATED: Contracts credit card product id
     * @return $this
     */
    public function setCreditcardProductId($creditcard_product_id)
    {
        $this->container['creditcard_product_id'] = $creditcard_product_id;

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


