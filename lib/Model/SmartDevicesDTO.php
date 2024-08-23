<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartDevicesDTO
 *
 * @category Class
 * @description SmartDevicesDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartDevicesDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant' => 'string',
        'store' => 'string',
        'device' => 'string',
        'contract' => 'string',
        'vendor' => 'string',
        'vendor_uid' => 'string',
        'type' => 'string',
        'description' => 'string',
        'tid' => 'string',
        'products' => '\Secuconnect\Client\Model\SmartDevicesProducts',
        'terminal_type' => 'string',
        'base_version' => 'string',
        'status' => '\Secuconnect\Client\Model\DeviceStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant' => null,
        'store' => null,
        'device' => null,
        'contract' => null,
        'vendor' => null,
        'vendor_uid' => null,
        'type' => null,
        'description' => null,
        'tid' => null,
        'products' => null,
        'terminal_type' => null,
        'base_version' => null,
        'status' => null
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
        'merchant' => 'merchant',
        'store' => 'store',
        'device' => 'device',
        'contract' => 'contract',
        'vendor' => 'vendor',
        'vendor_uid' => 'vendor_uid',
        'type' => 'type',
        'description' => 'description',
        'tid' => 'tid',
        'products' => 'products',
        'terminal_type' => 'terminal_type',
        'base_version' => 'base_version',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant' => 'setMerchant',
        'store' => 'setStore',
        'device' => 'setDevice',
        'contract' => 'setContract',
        'vendor' => 'setVendor',
        'vendor_uid' => 'setVendorUid',
        'type' => 'setType',
        'description' => 'setDescription',
        'tid' => 'setTid',
        'products' => 'setProducts',
        'terminal_type' => 'setTerminalType',
        'base_version' => 'setBaseVersion',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant' => 'getMerchant',
        'store' => 'getStore',
        'device' => 'getDevice',
        'contract' => 'getContract',
        'vendor' => 'getVendor',
        'vendor_uid' => 'getVendorUid',
        'type' => 'getType',
        'description' => 'getDescription',
        'tid' => 'getTid',
        'products' => 'getProducts',
        'terminal_type' => 'getTerminalType',
        'base_version' => 'getBaseVersion',
        'status' => 'getStatus'
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
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['vendor_uid'] = isset($data['vendor_uid']) ? $data['vendor_uid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['terminal_type'] = isset($data['terminal_type']) ? $data['terminal_type'] : null;
        $this->container['base_version'] = isset($data['base_version']) ? $data['base_version'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets merchant
     * @return string
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param string $merchant Merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets store
     * @return string
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     * @param string $store Store
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets device
     * @return string
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     * @param string $device Device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets contract
     * @return string
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param string $contract Contract
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets vendor
     * @return string
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     * @param string $vendor Vendor
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets vendor_uid
     * @return string
     */
    public function getVendorUid()
    {
        return $this->container['vendor_uid'];
    }

    /**
     * Sets vendor_uid
     * @param string $vendor_uid Vendor uid
     * @return $this
     */
    public function setVendorUid($vendor_uid)
    {
        $this->container['vendor_uid'] = $vendor_uid;

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
     * @param string $type Type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $description Description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $tid TID
     * @return $this
     */
    public function setTid($tid)
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets products
     * @return \Secuconnect\Client\Model\SmartDevicesProducts
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     * @param \Secuconnect\Client\Model\SmartDevicesProducts $products products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets terminal_type
     * @return string
     */
    public function getTerminalType()
    {
        return $this->container['terminal_type'];
    }

    /**
     * Sets terminal_type
     * @param string $terminal_type Terminal type
     * @return $this
     */
    public function setTerminalType($terminal_type)
    {
        $this->container['terminal_type'] = $terminal_type;

        return $this;
    }

    /**
     * Gets base_version
     * @return string
     */
    public function getBaseVersion()
    {
        return $this->container['base_version'];
    }

    /**
     * Sets base_version
     * @param string $base_version Base version
     * @return $this
     */
    public function setBaseVersion($base_version)
    {
        $this->container['base_version'] = $base_version;

        return $this;
    }

    /**
     * Gets status
     * @return \Secuconnect\Client\Model\DeviceStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Secuconnect\Client\Model\DeviceStatus $status status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

