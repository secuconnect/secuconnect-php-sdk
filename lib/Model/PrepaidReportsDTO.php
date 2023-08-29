<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PrepaidReportsDTO
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrepaidReportsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PrepaidReportsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant' => 'string',
        'store' => 'string',
        'smart_device' => 'string',
        'vtc_tid' => 'int',
        'report_from' => 'string',
        'report_to' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant' => null,
        'store' => null,
        'smart_device' => null,
        'vtc_tid' => null,
        'report_from' => null,
        'report_to' => null
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
        'smart_device' => 'smart_device',
        'vtc_tid' => 'vtc_tid',
        'report_from' => 'report_from',
        'report_to' => 'report_to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant' => 'setMerchant',
        'store' => 'setStore',
        'smart_device' => 'setSmartDevice',
        'vtc_tid' => 'setVtcTid',
        'report_from' => 'setReportFrom',
        'report_to' => 'setReportTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant' => 'getMerchant',
        'store' => 'getStore',
        'smart_device' => 'getSmartDevice',
        'vtc_tid' => 'getVtcTid',
        'report_from' => 'getReportFrom',
        'report_to' => 'getReportTo'
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
        $this->container['smart_device'] = isset($data['smart_device']) ? $data['smart_device'] : null;
        $this->container['vtc_tid'] = isset($data['vtc_tid']) ? $data['vtc_tid'] : null;
        $this->container['report_from'] = isset($data['report_from']) ? $data['report_from'] : null;
        $this->container['report_to'] = isset($data['report_to']) ? $data['report_to'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['merchant'] === null) {
            $invalid_properties[] = "'merchant' can't be null";
        }
        if ($this->container['store'] === null) {
            $invalid_properties[] = "'store' can't be null";
        }
        if ($this->container['smart_device'] === null) {
            $invalid_properties[] = "'smart_device' can't be null";
        }
        if ($this->container['vtc_tid'] === null) {
            $invalid_properties[] = "'vtc_tid' can't be null";
        }
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
     * @param string $merchant General Merchants ID
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
     * @param string $store General Stores ID
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets smart_device
     * @return string
     */
    public function getSmartDevice()
    {
        return $this->container['smart_device'];
    }

    /**
     * Sets smart_device
     * @param string $smart_device Smart Devices ID
     * @return $this
     */
    public function setSmartDevice($smart_device)
    {
        $this->container['smart_device'] = $smart_device;

        return $this;
    }

    /**
     * Gets vtc_tid
     * @return int
     */
    public function getVtcTid()
    {
        return $this->container['vtc_tid'];
    }

    /**
     * Sets vtc_tid
     * @param int $vtc_tid VTC TID
     * @return $this
     */
    public function setVtcTid($vtc_tid)
    {
        $this->container['vtc_tid'] = $vtc_tid;

        return $this;
    }

    /**
     * Gets report_from
     * @return string
     */
    public function getReportFrom()
    {
        return $this->container['report_from'];
    }

    /**
     * Sets report_from
     * @param string $report_from Report start date (ISO-8601 formatted date and time, incl. timezone)
     * @return $this
     */
    public function setReportFrom($report_from)
    {
        $this->container['report_from'] = $report_from;

        return $this;
    }

    /**
     * Gets report_to
     * @return string
     */
    public function getReportTo()
    {
        return $this->container['report_to'];
    }

    /**
     * Sets report_to
     * @param string $report_to Report end date (ISO-8601 formatted date and time, incl. timezone)
     * @return $this
     */
    public function setReportTo($report_to)
    {
        $this->container['report_to'] = $report_to;

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

