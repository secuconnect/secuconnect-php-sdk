<?php

namespace Secuconnect\Client\Model;

/**
 * LoyaltyCardgroupsProductModel
 *
 * @category Class
 * @description LoyaltyCardgroupsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCardgroupsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyCardgroupsProductModel';

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
        'merchant' => '\Secuconnect\Client\Model\GeneralMerchantsProductModel',
        'display_name' => 'string',
        'display_name_raw' => 'string',
        'stock_warn_limit' => 'int',
        'picture' => 'string',
        'balance_limit' => 'int',
        'balance_expiry' => 'bool',
        'cancel_selected' => 'bool',
        'description' => 'string'
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
        'merchant' => null,
        'display_name' => null,
        'display_name_raw' => null,
        'stock_warn_limit' => null,
        'picture' => null,
        'balance_limit' => null,
        'balance_expiry' => null,
        'cancel_selected' => null,
        'description' => null
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
        'merchant' => 'merchant',
        'display_name' => 'display_name',
        'display_name_raw' => 'display_name_raw',
        'stock_warn_limit' => 'stock_warn_limit',
        'picture' => 'picture',
        'balance_limit' => 'balance_limit',
        'balance_expiry' => 'balance_expiry',
        'cancel_selected' => 'cancel_selected',
        'description' => 'description'
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
        'merchant' => 'setMerchant',
        'display_name' => 'setDisplayName',
        'display_name_raw' => 'setDisplayNameRaw',
        'stock_warn_limit' => 'setStockWarnLimit',
        'picture' => 'setPicture',
        'balance_limit' => 'setBalanceLimit',
        'balance_expiry' => 'setBalanceExpiry',
        'cancel_selected' => 'setCancelSelected',
        'description' => 'setDescription'
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
        'merchant' => 'getMerchant',
        'display_name' => 'getDisplayName',
        'display_name_raw' => 'getDisplayNameRaw',
        'stock_warn_limit' => 'getStockWarnLimit',
        'picture' => 'getPicture',
        'balance_limit' => 'getBalanceLimit',
        'balance_expiry' => 'getBalanceExpiry',
        'cancel_selected' => 'getCancelSelected',
        'description' => 'getDescription'
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
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['display_name_raw'] = isset($data['display_name_raw']) ? $data['display_name_raw'] : null;
        $this->container['stock_warn_limit'] = isset($data['stock_warn_limit']) ? $data['stock_warn_limit'] : null;
        $this->container['picture'] = isset($data['picture']) ? $data['picture'] : null;
        $this->container['balance_limit'] = isset($data['balance_limit']) ? $data['balance_limit'] : null;
        $this->container['balance_expiry'] = isset($data['balance_expiry']) ? $data['balance_expiry'] : null;
        $this->container['cancel_selected'] = isset($data['cancel_selected']) ? $data['cancel_selected'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
     * Gets display_name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     * @param string $display_name Loyalty card group display name
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets display_name_raw
     * @return string
     */
    public function getDisplayNameRaw()
    {
        return $this->container['display_name_raw'];
    }

    /**
     * Sets display_name_raw
     * @param string $display_name_raw Loyalty card group display name raw
     * @return $this
     */
    public function setDisplayNameRaw($display_name_raw)
    {
        $this->container['display_name_raw'] = $display_name_raw;

        return $this;
    }

    /**
     * Gets stock_warn_limit
     * @return int
     */
    public function getStockWarnLimit()
    {
        return $this->container['stock_warn_limit'];
    }

    /**
     * Sets stock_warn_limit
     * @param int $stock_warn_limit Loyalty card group stock warn limit
     * @return $this
     */
    public function setStockWarnLimit($stock_warn_limit)
    {
        $this->container['stock_warn_limit'] = $stock_warn_limit;

        return $this;
    }

    /**
     * Gets picture
     * @return string
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     * @param string $picture Loyalty card group picture
     * @return $this
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

        return $this;
    }

    /**
     * Gets balance_limit
     * @return int
     */
    public function getBalanceLimit()
    {
        return $this->container['balance_limit'];
    }

    /**
     * Sets balance_limit
     * @param int $balance_limit Loyalty card group balance limit
     * @return $this
     */
    public function setBalanceLimit($balance_limit)
    {
        $this->container['balance_limit'] = $balance_limit;

        return $this;
    }

    /**
     * Gets balance_expiry
     * @return bool
     */
    public function getBalanceExpiry()
    {
        return $this->container['balance_expiry'];
    }

    /**
     * Sets balance_expiry
     * @param bool $balance_expiry The card group allows to set an expiry date for a card.
     * @return $this
     */
    public function setBalanceExpiry($balance_expiry)
    {
        $this->container['balance_expiry'] = $balance_expiry;

        return $this;
    }

    /**
     * Gets cancel_selected
     * @return bool
     */
    public function getCancelSelected()
    {
        return $this->container['cancel_selected'];
    }

    /**
     * Sets cancel_selected
     * @param bool $cancel_selected The card group allows to cancel specific transactions.
     * @return $this
     */
    public function setCancelSelected($cancel_selected)
    {
        $this->container['cancel_selected'] = $cancel_selected;

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
     * @param string $description Loyalty card group description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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

