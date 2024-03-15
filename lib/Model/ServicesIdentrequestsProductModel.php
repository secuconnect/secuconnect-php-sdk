<?php

namespace Secuconnect\Client\Model;

/**
 * ServicesIdentrequestsProductModel
 *
 * @category Class
 * @description ServicesIdentrequestsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServicesIdentrequestsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ServicesIdentrequestsProductModel';

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
        'created' => 'string',
        'updated' => 'string',
        'contract' => '\Secuconnect\Client\Model\BaseProductModel',
        'identcase' => '\Secuconnect\Client\Model\BaseProductModel',
        'assignment' => '\Secuconnect\Client\Model\BaseProductModel[]',
        'provider' => 'string',
        'type' => 'string',
        'status' => 'string',
        'demo' => 'bool',
        'person' => '\Secuconnect\Client\Model\IdentrequestPerson[]',
        'owner_transaction_id' => 'string',
        'redirect_urls' => '\Secuconnect\Client\Model\IdentrequestRedirectUrls',
        'graduation_date' => 'string',
        'treated' => 'bool'
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
        'created' => null,
        'updated' => null,
        'contract' => null,
        'identcase' => null,
        'assignment' => null,
        'provider' => null,
        'type' => null,
        'status' => null,
        'demo' => null,
        'person' => null,
        'owner_transaction_id' => null,
        'redirect_urls' => null,
        'graduation_date' => null,
        'treated' => null
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
        'created' => 'created',
        'updated' => 'updated',
        'contract' => 'contract',
        'identcase' => 'identcase',
        'assignment' => 'assignment',
        'provider' => 'provider',
        'type' => 'type',
        'status' => 'status',
        'demo' => 'demo',
        'person' => 'person',
        'owner_transaction_id' => 'owner_transaction_id',
        'redirect_urls' => 'redirect_urls',
        'graduation_date' => 'graduation_date',
        'treated' => 'treated'
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
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'contract' => 'setContract',
        'identcase' => 'setIdentcase',
        'assignment' => 'setAssignment',
        'provider' => 'setProvider',
        'type' => 'setType',
        'status' => 'setStatus',
        'demo' => 'setDemo',
        'person' => 'setPerson',
        'owner_transaction_id' => 'setOwnerTransactionId',
        'redirect_urls' => 'setRedirectUrls',
        'graduation_date' => 'setGraduationDate',
        'treated' => 'setTreated'
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
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'contract' => 'getContract',
        'identcase' => 'getIdentcase',
        'assignment' => 'getAssignment',
        'provider' => 'getProvider',
        'type' => 'getType',
        'status' => 'getStatus',
        'demo' => 'getDemo',
        'person' => 'getPerson',
        'owner_transaction_id' => 'getOwnerTransactionId',
        'redirect_urls' => 'getRedirectUrls',
        'graduation_date' => 'getGraduationDate',
        'treated' => 'getTreated'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['identcase'] = isset($data['identcase']) ? $data['identcase'] : null;
        $this->container['assignment'] = isset($data['assignment']) ? $data['assignment'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['demo'] = isset($data['demo']) ? $data['demo'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['owner_transaction_id'] = isset($data['owner_transaction_id']) ? $data['owner_transaction_id'] : null;
        $this->container['redirect_urls'] = isset($data['redirect_urls']) ? $data['redirect_urls'] : null;
        $this->container['graduation_date'] = isset($data['graduation_date']) ? $data['graduation_date'] : null;
        $this->container['treated'] = isset($data['treated']) ? $data['treated'] : null;
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
     * Gets contract
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\BaseProductModel $contract contract
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets identcase
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getIdentcase()
    {
        return $this->container['identcase'];
    }

    /**
     * Sets identcase
     * @param \Secuconnect\Client\Model\BaseProductModel $identcase identcase
     * @return $this
     */
    public function setIdentcase($identcase)
    {
        $this->container['identcase'] = $identcase;

        return $this;
    }

    /**
     * Gets assignment
     * @return \Secuconnect\Client\Model\BaseProductModel[]
     */
    public function getAssignment()
    {
        return $this->container['assignment'];
    }

    /**
     * Sets assignment
     * @param \Secuconnect\Client\Model\BaseProductModel[] $assignment assignment
     * @return $this
     */
    public function setAssignment($assignment)
    {
        $this->container['assignment'] = $assignment;

        return $this;
    }

    /**
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $status Ident Request status:  * `\"requested\"` * `\"error\"` * `\"ok_preliminary\"` * `\"failed_preliminary\"` * `\"ok\"` * `\"failed\"`
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param bool $demo Demo Flag
     * @return $this
     */
    public function setDemo($demo)
    {
        $this->container['demo'] = $demo;

        return $this;
    }

    /**
     * Gets person
     * @return \Secuconnect\Client\Model\IdentrequestPerson[]
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     * @param \Secuconnect\Client\Model\IdentrequestPerson[] $person Details of the person to be identified
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets owner_transaction_id
     * @return string
     */
    public function getOwnerTransactionId()
    {
        return $this->container['owner_transaction_id'];
    }

    /**
     * Sets owner_transaction_id
     * @param string $owner_transaction_id Arbitrary ID to identify the Ident Request on the merchant's site
     * @return $this
     */
    public function setOwnerTransactionId($owner_transaction_id)
    {
        $this->container['owner_transaction_id'] = $owner_transaction_id;

        return $this;
    }

    /**
     * Gets redirect_urls
     * @return \Secuconnect\Client\Model\IdentrequestRedirectUrls
     */
    public function getRedirectUrls()
    {
        return $this->container['redirect_urls'];
    }

    /**
     * Sets redirect_urls
     * @param \Secuconnect\Client\Model\IdentrequestRedirectUrls $redirect_urls redirect_urls
     * @return $this
     */
    public function setRedirectUrls($redirect_urls)
    {
        $this->container['redirect_urls'] = $redirect_urls;

        return $this;
    }

    /**
     * Gets graduation_date
     * @return string
     */
    public function getGraduationDate()
    {
        return $this->container['graduation_date'];
    }

    /**
     * Sets graduation_date
     * @param string $graduation_date graduation_date
     * @return $this
     */
    public function setGraduationDate($graduation_date)
    {
        $this->container['graduation_date'] = $graduation_date;

        return $this;
    }

    /**
     * Gets treated
     * @return bool
     */
    public function getTreated()
    {
        return $this->container['treated'];
    }

    /**
     * Sets treated
     * @param bool $treated Flag to see if the Ident Request was processed by secupay
     * @return $this
     */
    public function setTreated($treated)
    {
        $this->container['treated'] = $treated;

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

