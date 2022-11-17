<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartDeviceProductsWebterminalConfigAllowedActions
 *
 * @category Class
 * @description SmartDeviceProductsWebterminalConfigAllowedActions
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDeviceProductsWebterminalConfigAllowedActions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartDeviceProductsWebterminalConfigAllowedActions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'balance_check' => 'bool',
        'cancel_last' => 'bool',
        'cashreport' => 'bool',
        'charge' => 'bool',
        'charge_points' => 'bool',
        'discharge' => 'bool',
        'discharge_points' => 'bool',
        'immediate_bonus' => 'bool',
        'sale_revenue' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'balance_check' => null,
        'cancel_last' => null,
        'cashreport' => null,
        'charge' => null,
        'charge_points' => null,
        'discharge' => null,
        'discharge_points' => null,
        'immediate_bonus' => null,
        'sale_revenue' => null
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
        'balance_check' => 'balance_check',
        'cancel_last' => 'cancel_last',
        'cashreport' => 'cashreport',
        'charge' => 'charge',
        'charge_points' => 'charge_points',
        'discharge' => 'discharge',
        'discharge_points' => 'discharge_points',
        'immediate_bonus' => 'immediate_bonus',
        'sale_revenue' => 'sale_revenue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'balance_check' => 'setBalanceCheck',
        'cancel_last' => 'setCancelLast',
        'cashreport' => 'setCashreport',
        'charge' => 'setCharge',
        'charge_points' => 'setChargePoints',
        'discharge' => 'setDischarge',
        'discharge_points' => 'setDischargePoints',
        'immediate_bonus' => 'setImmediateBonus',
        'sale_revenue' => 'setSaleRevenue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'balance_check' => 'getBalanceCheck',
        'cancel_last' => 'getCancelLast',
        'cashreport' => 'getCashreport',
        'charge' => 'getCharge',
        'charge_points' => 'getChargePoints',
        'discharge' => 'getDischarge',
        'discharge_points' => 'getDischargePoints',
        'immediate_bonus' => 'getImmediateBonus',
        'sale_revenue' => 'getSaleRevenue'
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
        $this->container['balance_check'] = isset($data['balance_check']) ? $data['balance_check'] : null;
        $this->container['cancel_last'] = isset($data['cancel_last']) ? $data['cancel_last'] : null;
        $this->container['cashreport'] = isset($data['cashreport']) ? $data['cashreport'] : null;
        $this->container['charge'] = isset($data['charge']) ? $data['charge'] : null;
        $this->container['charge_points'] = isset($data['charge_points']) ? $data['charge_points'] : null;
        $this->container['discharge'] = isset($data['discharge']) ? $data['discharge'] : null;
        $this->container['discharge_points'] = isset($data['discharge_points']) ? $data['discharge_points'] : null;
        $this->container['immediate_bonus'] = isset($data['immediate_bonus']) ? $data['immediate_bonus'] : null;
        $this->container['sale_revenue'] = isset($data['sale_revenue']) ? $data['sale_revenue'] : null;
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
     * Gets balance_check
     * @return bool
     */
    public function getBalanceCheck()
    {
        return $this->container['balance_check'];
    }

    /**
     * Sets balance_check
     * @param bool $balance_check Option enabled or disabled
     * @return $this
     */
    public function setBalanceCheck($balance_check)
    {
        $this->container['balance_check'] = $balance_check;

        return $this;
    }

    /**
     * Gets cancel_last
     * @return bool
     */
    public function getCancelLast()
    {
        return $this->container['cancel_last'];
    }

    /**
     * Sets cancel_last
     * @param bool $cancel_last Option enabled or disabled
     * @return $this
     */
    public function setCancelLast($cancel_last)
    {
        $this->container['cancel_last'] = $cancel_last;

        return $this;
    }

    /**
     * Gets cashreport
     * @return bool
     */
    public function getCashreport()
    {
        return $this->container['cashreport'];
    }

    /**
     * Sets cashreport
     * @param bool $cashreport Option enabled or disabled
     * @return $this
     */
    public function setCashreport($cashreport)
    {
        $this->container['cashreport'] = $cashreport;

        return $this;
    }

    /**
     * Gets charge
     * @return bool
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge
     * @param bool $charge Option enabled or disabled
     * @return $this
     */
    public function setCharge($charge)
    {
        $this->container['charge'] = $charge;

        return $this;
    }

    /**
     * Gets charge_points
     * @return bool
     */
    public function getChargePoints()
    {
        return $this->container['charge_points'];
    }

    /**
     * Sets charge_points
     * @param bool $charge_points Option enabled or disabled
     * @return $this
     */
    public function setChargePoints($charge_points)
    {
        $this->container['charge_points'] = $charge_points;

        return $this;
    }

    /**
     * Gets discharge
     * @return bool
     */
    public function getDischarge()
    {
        return $this->container['discharge'];
    }

    /**
     * Sets discharge
     * @param bool $discharge Option enabled or disabled
     * @return $this
     */
    public function setDischarge($discharge)
    {
        $this->container['discharge'] = $discharge;

        return $this;
    }

    /**
     * Gets discharge_points
     * @return bool
     */
    public function getDischargePoints()
    {
        return $this->container['discharge_points'];
    }

    /**
     * Sets discharge_points
     * @param bool $discharge_points Option enabled or disabled
     * @return $this
     */
    public function setDischargePoints($discharge_points)
    {
        $this->container['discharge_points'] = $discharge_points;

        return $this;
    }

    /**
     * Gets immediate_bonus
     * @return bool
     */
    public function getImmediateBonus()
    {
        return $this->container['immediate_bonus'];
    }

    /**
     * Sets immediate_bonus
     * @param bool $immediate_bonus Option enabled or disabled
     * @return $this
     */
    public function setImmediateBonus($immediate_bonus)
    {
        $this->container['immediate_bonus'] = $immediate_bonus;

        return $this;
    }

    /**
     * Gets sale_revenue
     * @return bool
     */
    public function getSaleRevenue()
    {
        return $this->container['sale_revenue'];
    }

    /**
     * Sets sale_revenue
     * @param bool $sale_revenue Option enabled or disabled
     * @return $this
     */
    public function setSaleRevenue($sale_revenue)
    {
        $this->container['sale_revenue'] = $sale_revenue;

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

