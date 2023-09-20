<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentContractsDTORequestId
 *
 * @category Class
 * @description PaymentContractsDTORequestId
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsDTORequestId implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContractsDTORequestId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract_id' => 'string',
        'contact' => '\Secuconnect\Client\Model\Contact',
        'project' => 'string',
        'payout_account' => '\Secuconnect\Client\Model\PaymentInformation',
        'payment_data' => '\Secuconnect\Client\Model\PaymentInformation',
        'iframe_opts' => '\Secuconnect\Client\Model\PaymentContractsDTOIFrameOpts',
        'url_push' => 'string',
        'payin_account' => 'bool',
        'create_first_store' => 'bool',
        'store_name' => 'string',
        'payout_purpose' => 'string',
        'identrequest' => 'string',
        'signed_contract' => 'string',
        'additional_data' => '\Secuconnect\Client\Model\PaymentContractsDTORequestIdAdditionalData',
        'notes' => 'string',
        'invoice_reference' => 'string',
        'tid' => 'string',
        'merchant_category' => 'int',
        'account_statement_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract_id' => null,
        'contact' => null,
        'project' => null,
        'payout_account' => null,
        'payment_data' => null,
        'iframe_opts' => null,
        'url_push' => null,
        'payin_account' => null,
        'create_first_store' => null,
        'store_name' => null,
        'payout_purpose' => null,
        'identrequest' => null,
        'signed_contract' => null,
        'additional_data' => null,
        'notes' => null,
        'invoice_reference' => null,
        'tid' => null,
        'merchant_category' => null,
        'account_statement_text' => null
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
        'contract_id' => 'contract_id',
        'contact' => 'contact',
        'project' => 'project',
        'payout_account' => 'payout_account',
        'payment_data' => 'payment_data',
        'iframe_opts' => 'iframe_opts',
        'url_push' => 'url_push',
        'payin_account' => 'payin_account',
        'create_first_store' => 'create_first_store',
        'store_name' => 'store_name',
        'payout_purpose' => 'payout_purpose',
        'identrequest' => 'identrequest',
        'signed_contract' => 'signed_contract',
        'additional_data' => 'additional_data',
        'notes' => 'notes',
        'invoice_reference' => 'invoice_reference',
        'tid' => 'tid',
        'merchant_category' => 'merchant_category',
        'account_statement_text' => 'account_statement_text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'contract_id' => 'setContractId',
        'contact' => 'setContact',
        'project' => 'setProject',
        'payout_account' => 'setPayoutAccount',
        'payment_data' => 'setPaymentData',
        'iframe_opts' => 'setIframeOpts',
        'url_push' => 'setUrlPush',
        'payin_account' => 'setPayinAccount',
        'create_first_store' => 'setCreateFirstStore',
        'store_name' => 'setStoreName',
        'payout_purpose' => 'setPayoutPurpose',
        'identrequest' => 'setIdentrequest',
        'signed_contract' => 'setSignedContract',
        'additional_data' => 'setAdditionalData',
        'notes' => 'setNotes',
        'invoice_reference' => 'setInvoiceReference',
        'tid' => 'setTid',
        'merchant_category' => 'setMerchantCategory',
        'account_statement_text' => 'setAccountStatementText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'contract_id' => 'getContractId',
        'contact' => 'getContact',
        'project' => 'getProject',
        'payout_account' => 'getPayoutAccount',
        'payment_data' => 'getPaymentData',
        'iframe_opts' => 'getIframeOpts',
        'url_push' => 'getUrlPush',
        'payin_account' => 'getPayinAccount',
        'create_first_store' => 'getCreateFirstStore',
        'store_name' => 'getStoreName',
        'payout_purpose' => 'getPayoutPurpose',
        'identrequest' => 'getIdentrequest',
        'signed_contract' => 'getSignedContract',
        'additional_data' => 'getAdditionalData',
        'notes' => 'getNotes',
        'invoice_reference' => 'getInvoiceReference',
        'tid' => 'getTid',
        'merchant_category' => 'getMerchantCategory',
        'account_statement_text' => 'getAccountStatementText'
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
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['payout_account'] = isset($data['payout_account']) ? $data['payout_account'] : null;
        $this->container['payment_data'] = isset($data['payment_data']) ? $data['payment_data'] : null;
        $this->container['iframe_opts'] = isset($data['iframe_opts']) ? $data['iframe_opts'] : null;
        $this->container['url_push'] = isset($data['url_push']) ? $data['url_push'] : null;
        $this->container['payin_account'] = isset($data['payin_account']) ? $data['payin_account'] : false;
        $this->container['create_first_store'] = isset($data['create_first_store']) ? $data['create_first_store'] : false;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['payout_purpose'] = isset($data['payout_purpose']) ? $data['payout_purpose'] : null;
        $this->container['identrequest'] = isset($data['identrequest']) ? $data['identrequest'] : null;
        $this->container['signed_contract'] = isset($data['signed_contract']) ? $data['signed_contract'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['invoice_reference'] = isset($data['invoice_reference']) ? $data['invoice_reference'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['merchant_category'] = isset($data['merchant_category']) ? $data['merchant_category'] : null;
        $this->container['account_statement_text'] = isset($data['account_statement_text']) ? $data['account_statement_text'] : null;
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
     * Gets contract_id
     * @return string
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     * @param string $contract_id General Contract ID of the parent contract
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param \Secuconnect\Client\Model\Contact $contact contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
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
     * @param string $project Project name (must be unique)
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets payout_account
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getPayoutAccount()
    {
        return $this->container['payout_account'];
    }

    /**
     * Sets payout_account
     * @param \Secuconnect\Client\Model\PaymentInformation $payout_account payout_account
     * @return $this
     */
    public function setPayoutAccount($payout_account)
    {
        $this->container['payout_account'] = $payout_account;

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
     * @param \Secuconnect\Client\Model\PaymentInformation $payment_data payment_data
     * @return $this
     */
    public function setPaymentData($payment_data)
    {
        $this->container['payment_data'] = $payment_data;

        return $this;
    }

    /**
     * Gets iframe_opts
     * @return \Secuconnect\Client\Model\PaymentContractsDTOIFrameOpts
     */
    public function getIframeOpts()
    {
        return $this->container['iframe_opts'];
    }

    /**
     * Sets iframe_opts
     * @param \Secuconnect\Client\Model\PaymentContractsDTOIFrameOpts $iframe_opts iframe_opts
     * @return $this
     */
    public function setIframeOpts($iframe_opts)
    {
        $this->container['iframe_opts'] = $iframe_opts;

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
     * @param string $url_push Default URL for push notifications; this is where your service listens for callbacks of the secuconnect service
     * @return $this
     */
    public function setUrlPush($url_push)
    {
        $this->container['url_push'] = $url_push;

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
     * @param bool $payin_account Pay-in account
     * @return $this
     */
    public function setPayinAccount($payin_account)
    {
        $this->container['payin_account'] = $payin_account;

        return $this;
    }

    /**
     * Gets create_first_store
     * @return bool
     */
    public function getCreateFirstStore()
    {
        return $this->container['create_first_store'];
    }

    /**
     * Sets create_first_store
     * @param bool $create_first_store Whether to create a first store at the same location
     * @return $this
     */
    public function setCreateFirstStore($create_first_store)
    {
        $this->container['create_first_store'] = $create_first_store;

        return $this;
    }

    /**
     * Gets store_name
     * @return string
     */
    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name
     * @param string $store_name Store name of the first store
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

        return $this;
    }

    /**
     * Gets payout_purpose
     * @return string
     */
    public function getPayoutPurpose()
    {
        return $this->container['payout_purpose'];
    }

    /**
     * Sets payout_purpose
     * @param string $payout_purpose Purpose for payouts that appears at the bank statement
     * @return $this
     */
    public function setPayoutPurpose($payout_purpose)
    {
        $this->container['payout_purpose'] = $payout_purpose;

        return $this;
    }

    /**
     * Gets identrequest
     * @return string
     */
    public function getIdentrequest()
    {
        return $this->container['identrequest'];
    }

    /**
     * Sets identrequest
     * @param string $identrequest Object ID of Services Identrequest (`SIR_...`)
     * @return $this
     */
    public function setIdentrequest($identrequest)
    {
        $this->container['identrequest'] = $identrequest;

        return $this;
    }

    /**
     * Gets signed_contract
     * @return string
     */
    public function getSignedContract()
    {
        return $this->container['signed_contract'];
    }

    /**
     * Sets signed_contract
     * @param string $signed_contract The document ID of of uploaded signed contract; s. Document service (`DUP_...`)
     * @return $this
     */
    public function setSignedContract($signed_contract)
    {
        $this->container['signed_contract'] = $signed_contract;

        return $this;
    }

    /**
     * Gets additional_data
     * @return \Secuconnect\Client\Model\PaymentContractsDTORequestIdAdditionalData
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     * @param \Secuconnect\Client\Model\PaymentContractsDTORequestIdAdditionalData $additional_data additional_data
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes Additional notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets invoice_reference
     * @return string
     */
    public function getInvoiceReference()
    {
        return $this->container['invoice_reference'];
    }

    /**
     * Sets invoice_reference
     * @param string $invoice_reference Reference-Text from Inputfield
     * @return $this
     */
    public function setInvoiceReference($invoice_reference)
    {
        $this->container['invoice_reference'] = $invoice_reference;

        return $this;
    }

    /**
     * Gets tid
     * @return string
     */
    public function getTid()
    {
        return $this->container['tid'];
    }

    /**
     * Sets tid
     * @param string $tid Third party terminal ID
     * @return $this
     */
    public function setTid($tid)
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets merchant_category
     * @return int
     */
    public function getMerchantCategory()
    {
        return $this->container['merchant_category'];
    }

    /**
     * Sets merchant_category
     * @param int $merchant_category Merchant category  This is _not_ the ISO Merchant Category Code (MCC). The list can be obtained at `GET /pai/v2/General/Merchants/me/MerchantCategories.
     * @return $this
     */
    public function setMerchantCategory($merchant_category)
    {
        $this->container['merchant_category'] = $merchant_category;

        return $this;
    }

    /**
     * Gets account_statement_text
     * @return string
     */
    public function getAccountStatementText()
    {
        return $this->container['account_statement_text'];
    }

    /**
     * Sets account_statement_text
     * @param string $account_statement_text Descriptor that appears at the credit card statements
     * @return $this
     */
    public function setAccountStatementText($account_statement_text)
    {
        $this->container['account_statement_text'] = $account_statement_text;

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

