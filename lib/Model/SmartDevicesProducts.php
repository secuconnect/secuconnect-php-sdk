<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartDevicesProducts
 *
 * @category Class
 * @description SmartDevicesProducts
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesProducts implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartDevicesProducts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'loyalty' => '\Secuconnect\Client\Model\SmartDeviceProductsLoyalty',
        'smart' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabledWithTid',
        'cashreg' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabledWithTid',
        'collect' => '\Secuconnect\Client\Model\SmartDeviceProductsCollect',
        'vtm' => '\Secuconnect\Client\Model\SmartDeviceProductsVtm',
        'prepaid' => '\Secuconnect\Client\Model\SmartDeviceProductsPrepaid',
        'support' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabled',
        'bonroll' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabledWithTid',
        'bvb' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabled',
        'easycredit' => '\Secuconnect\Client\Model\SmartDeviceProductsEasycredit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'loyalty' => null,
        'smart' => null,
        'cashreg' => null,
        'collect' => null,
        'vtm' => null,
        'prepaid' => null,
        'support' => null,
        'bonroll' => null,
        'bvb' => null,
        'easycredit' => null
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
        'loyalty' => 'loyalty',
        'smart' => 'smart',
        'cashreg' => 'cashreg',
        'collect' => 'collect',
        'vtm' => 'vtm',
        'prepaid' => 'prepaid',
        'support' => 'support',
        'bonroll' => 'bonroll',
        'bvb' => 'bvb',
        'easycredit' => 'easycredit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'loyalty' => 'setLoyalty',
        'smart' => 'setSmart',
        'cashreg' => 'setCashreg',
        'collect' => 'setCollect',
        'vtm' => 'setVtm',
        'prepaid' => 'setPrepaid',
        'support' => 'setSupport',
        'bonroll' => 'setBonroll',
        'bvb' => 'setBvb',
        'easycredit' => 'setEasycredit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'loyalty' => 'getLoyalty',
        'smart' => 'getSmart',
        'cashreg' => 'getCashreg',
        'collect' => 'getCollect',
        'vtm' => 'getVtm',
        'prepaid' => 'getPrepaid',
        'support' => 'getSupport',
        'bonroll' => 'getBonroll',
        'bvb' => 'getBvb',
        'easycredit' => 'getEasycredit'
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
        $this->container['loyalty'] = isset($data['loyalty']) ? $data['loyalty'] : null;
        $this->container['smart'] = isset($data['smart']) ? $data['smart'] : null;
        $this->container['cashreg'] = isset($data['cashreg']) ? $data['cashreg'] : null;
        $this->container['collect'] = isset($data['collect']) ? $data['collect'] : null;
        $this->container['vtm'] = isset($data['vtm']) ? $data['vtm'] : null;
        $this->container['prepaid'] = isset($data['prepaid']) ? $data['prepaid'] : null;
        $this->container['support'] = isset($data['support']) ? $data['support'] : null;
        $this->container['bonroll'] = isset($data['bonroll']) ? $data['bonroll'] : null;
        $this->container['bvb'] = isset($data['bvb']) ? $data['bvb'] : null;
        $this->container['easycredit'] = isset($data['easycredit']) ? $data['easycredit'] : null;
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
     * Gets loyalty
     * @return \Secuconnect\Client\Model\SmartDeviceProductsLoyalty
     */
    public function getLoyalty()
    {
        return $this->container['loyalty'];
    }

    /**
     * Sets loyalty
     * @param \Secuconnect\Client\Model\SmartDeviceProductsLoyalty $loyalty loyalty
     * @return $this
     */
    public function setLoyalty($loyalty)
    {
        $this->container['loyalty'] = $loyalty;

        return $this;
    }

    /**
     * Gets smart
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabledWithTid
     */
    public function getSmart()
    {
        return $this->container['smart'];
    }

    /**
     * Sets smart
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabledWithTid $smart smart
     * @return $this
     */
    public function setSmart($smart)
    {
        $this->container['smart'] = $smart;

        return $this;
    }

    /**
     * Gets cashreg
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabledWithTid
     */
    public function getCashreg()
    {
        return $this->container['cashreg'];
    }

    /**
     * Sets cashreg
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabledWithTid $cashreg cashreg
     * @return $this
     */
    public function setCashreg($cashreg)
    {
        $this->container['cashreg'] = $cashreg;

        return $this;
    }

    /**
     * Gets collect
     * @return \Secuconnect\Client\Model\SmartDeviceProductsCollect
     */
    public function getCollect()
    {
        return $this->container['collect'];
    }

    /**
     * Sets collect
     * @param \Secuconnect\Client\Model\SmartDeviceProductsCollect $collect collect
     * @return $this
     */
    public function setCollect($collect)
    {
        $this->container['collect'] = $collect;

        return $this;
    }

    /**
     * Gets vtm
     * @return \Secuconnect\Client\Model\SmartDeviceProductsVtm
     */
    public function getVtm()
    {
        return $this->container['vtm'];
    }

    /**
     * Sets vtm
     * @param \Secuconnect\Client\Model\SmartDeviceProductsVtm $vtm vtm
     * @return $this
     */
    public function setVtm($vtm)
    {
        $this->container['vtm'] = $vtm;

        return $this;
    }

    /**
     * Gets prepaid
     * @return \Secuconnect\Client\Model\SmartDeviceProductsPrepaid
     */
    public function getPrepaid()
    {
        return $this->container['prepaid'];
    }

    /**
     * Sets prepaid
     * @param \Secuconnect\Client\Model\SmartDeviceProductsPrepaid $prepaid prepaid
     * @return $this
     */
    public function setPrepaid($prepaid)
    {
        $this->container['prepaid'] = $prepaid;

        return $this;
    }

    /**
     * Gets support
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabled
     */
    public function getSupport()
    {
        return $this->container['support'];
    }

    /**
     * Sets support
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabled $support support
     * @return $this
     */
    public function setSupport($support)
    {
        $this->container['support'] = $support;

        return $this;
    }

    /**
     * Gets bonroll
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabledWithTid
     */
    public function getBonroll()
    {
        return $this->container['bonroll'];
    }

    /**
     * Sets bonroll
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabledWithTid $bonroll bonroll
     * @return $this
     */
    public function setBonroll($bonroll)
    {
        $this->container['bonroll'] = $bonroll;

        return $this;
    }

    /**
     * Gets bvb
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabled
     */
    public function getBvb()
    {
        return $this->container['bvb'];
    }

    /**
     * Sets bvb
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabled $bvb bvb
     * @return $this
     */
    public function setBvb($bvb)
    {
        $this->container['bvb'] = $bvb;

        return $this;
    }

    /**
     * Gets easycredit
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEasycredit
     */
    public function getEasycredit()
    {
        return $this->container['easycredit'];
    }

    /**
     * Sets easycredit
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEasycredit $easycredit easycredit
     * @return $this
     */
    public function setEasycredit($easycredit)
    {
        $this->container['easycredit'] = $easycredit;

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

