<?php

namespace Secuconnect\Client\Model;

/**
 * SmartDevicesProductModel
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartDevicesProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'string',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'store' => '\Secuconnect\Client\Model\Store',
        'contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'vendor' => 'string',
        'vendor_uid' => 'string',
        'type' => 'string',
        'device' => '\Secuconnect\Client\Model\SmartDevicesDevice',
        'routing' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'user_pin' => 'string',
        'products' => '\Secuconnect\Client\Model\SmartDevicesProducts',
        'description' => 'string',
        'tid' => 'string',
        'idle_screen_register' => 'string',
        'idle_screen_terminal' => 'string',
        'online' => 'bool',
        'refresh' => 'int',
        'terminal_type' => 'string',
        'base_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => null,
        'merchant' => null,
        'store' => null,
        'contract' => null,
        'vendor' => null,
        'vendor_uid' => null,
        'type' => null,
        'device' => null,
        'routing' => null,
        'user_pin' => null,
        'products' => null,
        'description' => null,
        'tid' => null,
        'idle_screen_register' => null,
        'idle_screen_terminal' => null,
        'online' => null,
        'refresh' => null,
        'terminal_type' => null,
        'base_version' => null
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
        'created' => 'created',
        'merchant' => 'merchant',
        'store' => 'store',
        'contract' => 'contract',
        'vendor' => 'vendor',
        'vendor_uid' => 'vendor_uid',
        'type' => 'type',
        'device' => 'device',
        'routing' => 'routing',
        'user_pin' => 'user_pin',
        'products' => 'products',
        'description' => 'description',
        'tid' => 'tid',
        'idle_screen_register' => 'idle_screen_register',
        'idle_screen_terminal' => 'idle_screen_terminal',
        'online' => 'online',
        'refresh' => 'refresh',
        'terminal_type' => 'terminal_type',
        'base_version' => 'base_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'merchant' => 'setMerchant',
        'store' => 'setStore',
        'contract' => 'setContract',
        'vendor' => 'setVendor',
        'vendor_uid' => 'setVendorUid',
        'type' => 'setType',
        'device' => 'setDevice',
        'routing' => 'setRouting',
        'user_pin' => 'setUserPin',
        'products' => 'setProducts',
        'description' => 'setDescription',
        'tid' => 'setTid',
        'idle_screen_register' => 'setIdleScreenRegister',
        'idle_screen_terminal' => 'setIdleScreenTerminal',
        'online' => 'setOnline',
        'refresh' => 'setRefresh',
        'terminal_type' => 'setTerminalType',
        'base_version' => 'setBaseVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'merchant' => 'getMerchant',
        'store' => 'getStore',
        'contract' => 'getContract',
        'vendor' => 'getVendor',
        'vendor_uid' => 'getVendorUid',
        'type' => 'getType',
        'device' => 'getDevice',
        'routing' => 'getRouting',
        'user_pin' => 'getUserPin',
        'products' => 'getProducts',
        'description' => 'getDescription',
        'tid' => 'getTid',
        'idle_screen_register' => 'getIdleScreenRegister',
        'idle_screen_terminal' => 'getIdleScreenTerminal',
        'online' => 'getOnline',
        'refresh' => 'getRefresh',
        'terminal_type' => 'getTerminalType',
        'base_version' => 'getBaseVersion'
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

        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['vendor_uid'] = isset($data['vendor_uid']) ? $data['vendor_uid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['routing'] = isset($data['routing']) ? $data['routing'] : null;
        $this->container['user_pin'] = isset($data['user_pin']) ? $data['user_pin'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['idle_screen_register'] = isset($data['idle_screen_register']) ? $data['idle_screen_register'] : null;
        $this->container['idle_screen_terminal'] = isset($data['idle_screen_terminal']) ? $data['idle_screen_terminal'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['refresh'] = isset($data['refresh']) ? $data['refresh'] : null;
        $this->container['terminal_type'] = isset($data['terminal_type']) ? $data['terminal_type'] : null;
        $this->container['base_version'] = isset($data['base_version']) ? $data['base_version'] : null;
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
     * Gets merchant
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\ProductInstanceUID $merchant merchant
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets store
     * @return \Secuconnect\Client\Model\Store
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\Store $store store
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets contract
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\ProductInstanceUID $contract contract
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
     * Gets device
     * @return \Secuconnect\Client\Model\SmartDevicesDevice
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     * @param \Secuconnect\Client\Model\SmartDevicesDevice $device device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets routing
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getRouting()
    {
        return $this->container['routing'];
    }

    /**
     * Sets routing
     * @param \Secuconnect\Client\Model\ProductInstanceUID $routing routing
     * @return $this
     */
    public function setRouting($routing)
    {
        $this->container['routing'] = $routing;

        return $this;
    }

    /**
     * Gets user_pin
     * @return string
     */
    public function getUserPin()
    {
        return $this->container['user_pin'];
    }

    /**
     * Sets user_pin
     * @param string $user_pin User pin
     * @return $this
     */
    public function setUserPin($user_pin)
    {
        $this->container['user_pin'] = $user_pin;

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
     * Gets idle_screen_register
     * @return string
     */
    public function getIdleScreenRegister()
    {
        return $this->container['idle_screen_register'];
    }

    /**
     * Sets idle_screen_register
     * @param string $idle_screen_register Idle screen register
     * @return $this
     */
    public function setIdleScreenRegister($idle_screen_register)
    {
        $this->container['idle_screen_register'] = $idle_screen_register;

        return $this;
    }

    /**
     * Gets idle_screen_terminal
     * @return string
     */
    public function getIdleScreenTerminal()
    {
        return $this->container['idle_screen_terminal'];
    }

    /**
     * Sets idle_screen_terminal
     * @param string $idle_screen_terminal Idle screen terminal
     * @return $this
     */
    public function setIdleScreenTerminal($idle_screen_terminal)
    {
        $this->container['idle_screen_terminal'] = $idle_screen_terminal;

        return $this;
    }

    /**
     * Gets online
     * @return bool
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     * @param bool $online Online
     * @return $this
     */
    public function setOnline($online)
    {
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets refresh
     * @return int
     */
    public function getRefresh()
    {
        return $this->container['refresh'];
    }

    /**
     * Sets refresh
     * @param int $refresh Last refresh timestamp
     * @return $this
     */
    public function setRefresh($refresh)
    {
        $this->container['refresh'] = $refresh;

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

