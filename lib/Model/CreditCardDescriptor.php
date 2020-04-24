<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * CreditCardDescriptor
 *
 * @category Class
 * @description Credit card data like owner, iban, bic and bank name
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditCardDescriptor implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreditCardDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'owner' => 'string',
        'pan' => 'string',
        'expiration_date' => 'string',
        'issuer' => 'string',
        'transact_container' => 'string',
        'transact_skey_pubkey' => 'string',
        'transact_skey_keyname' => 'string',
        'transact_hash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'owner' => null,
        'pan' => null,
        'expiration_date' => null,
        'issuer' => null,
        'transact_container' => null,
        'transact_skey_pubkey' => null,
        'transact_skey_keyname' => null,
        'transact_hash' => null
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
        'owner' => 'owner',
        'pan' => 'pan',
        'expiration_date' => 'expiration_date',
        'issuer' => 'issuer',
        'transact_container' => 'transact_container',
        'transact_skey_pubkey' => 'transact_skey_pubkey',
        'transact_skey_keyname' => 'transact_skey_keyname',
        'transact_hash' => 'transact_hash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'owner' => 'setOwner',
        'pan' => 'setPan',
        'expiration_date' => 'setExpirationDate',
        'issuer' => 'setIssuer',
        'transact_container' => 'setTransactContainer',
        'transact_skey_pubkey' => 'setTransactSkeyPubkey',
        'transact_skey_keyname' => 'setTransactSkeyKeyname',
        'transact_hash' => 'setTransactHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'owner' => 'getOwner',
        'pan' => 'getPan',
        'expiration_date' => 'getExpirationDate',
        'issuer' => 'getIssuer',
        'transact_container' => 'getTransactContainer',
        'transact_skey_pubkey' => 'getTransactSkeyPubkey',
        'transact_skey_keyname' => 'getTransactSkeyKeyname',
        'transact_hash' => 'getTransactHash'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['pan'] = isset($data['pan']) ? $data['pan'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['transact_container'] = isset($data['transact_container']) ? $data['transact_container'] : null;
        $this->container['transact_skey_pubkey'] = isset($data['transact_skey_pubkey']) ? $data['transact_skey_pubkey'] : null;
        $this->container['transact_skey_keyname'] = isset($data['transact_skey_keyname']) ? $data['transact_skey_keyname'] : null;
        $this->container['transact_hash'] = isset($data['transact_hash']) ? $data['transact_hash'] : null;
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
     * Gets owner
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param string $owner Owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets pan
     * @return string
     */
    public function getPan()
    {
        return $this->container['pan'];
    }

    /**
     * Sets pan
     * @param string $pan truncated Primary Account Number (PAN)
     * @return $this
     */
    public function setPan($pan)
    {
        $this->container['pan'] = $pan;

        return $this;
    }

    /**
     * Gets expiration_date
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     * @param string $expiration_date Expiration date
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets issuer
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     * @param string $issuer Card issuer
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets transact_container
     * @return string
     */
    public function getTransactContainer()
    {
        return $this->container['transact_container'];
    }

    /**
     * Sets transact_container
     * @param string $transact_container transact container
     * @return $this
     */
    public function setTransactContainer($transact_container)
    {
        $this->container['transact_container'] = $transact_container;

        return $this;
    }

    /**
     * Gets transact_skey_pubkey
     * @return string
     */
    public function getTransactSkeyPubkey()
    {
        return $this->container['transact_skey_pubkey'];
    }

    /**
     * Sets transact_skey_pubkey
     * @param string $transact_skey_pubkey transact public key
     * @return $this
     */
    public function setTransactSkeyPubkey($transact_skey_pubkey)
    {
        $this->container['transact_skey_pubkey'] = $transact_skey_pubkey;

        return $this;
    }

    /**
     * Gets transact_skey_keyname
     * @return string
     */
    public function getTransactSkeyKeyname()
    {
        return $this->container['transact_skey_keyname'];
    }

    /**
     * Sets transact_skey_keyname
     * @param string $transact_skey_keyname transact keyname
     * @return $this
     */
    public function setTransactSkeyKeyname($transact_skey_keyname)
    {
        $this->container['transact_skey_keyname'] = $transact_skey_keyname;

        return $this;
    }

    /**
     * Gets transact_hash
     * @return string
     */
    public function getTransactHash()
    {
        return $this->container['transact_hash'];
    }

    /**
     * Sets transact_hash
     * @param string $transact_hash transact hash
     * @return $this
     */
    public function setTransactHash($transact_hash)
    {
        $this->container['transact_hash'] = $transact_hash;

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

