<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsBasketProduct
 *
 * @category Class
 * @description SmartTransactionsBasketProduct
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsBasketProduct implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionsBasketProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'parent' => 'int',
        'item_type' => 'string',
        'desc' => 'string',
        'article_number' => 'string',
        'serial_number' => 'string',
        'ean' => 'string',
        'quantity' => 'int',
        'price_one' => 'int',
        'sum' => 'int',
        'tax' => 'int',
        'reference_id' => 'string',
        'contract_id' => 'string',
        'group' => '\Secuconnect\Client\Model\SmartTransactionsBasketProductGroup[]',
        'sub_basket' => '\Secuconnect\Client\Model\SmartTransactionsSubBasketProduct[]',
        'plan_id' => 'string',
        'start_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'parent' => null,
        'item_type' => null,
        'desc' => null,
        'article_number' => null,
        'serial_number' => null,
        'ean' => null,
        'quantity' => null,
        'price_one' => null,
        'sum' => null,
        'tax' => null,
        'reference_id' => null,
        'contract_id' => null,
        'group' => null,
        'sub_basket' => null,
        'plan_id' => null,
        'start_at' => null
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
        'id' => 'id',
        'parent' => 'parent',
        'item_type' => 'item_type',
        'desc' => 'desc',
        'article_number' => 'articleNumber',
        'serial_number' => 'serialNumber',
        'ean' => 'ean',
        'quantity' => 'quantity',
        'price_one' => 'priceOne',
        'sum' => 'sum',
        'tax' => 'tax',
        'reference_id' => 'reference_id',
        'contract_id' => 'contract_id',
        'group' => 'group',
        'sub_basket' => 'sub_basket',
        'plan_id' => 'plan_id',
        'start_at' => 'start_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent' => 'setParent',
        'item_type' => 'setItemType',
        'desc' => 'setDesc',
        'article_number' => 'setArticleNumber',
        'serial_number' => 'setSerialNumber',
        'ean' => 'setEan',
        'quantity' => 'setQuantity',
        'price_one' => 'setPriceOne',
        'sum' => 'setSum',
        'tax' => 'setTax',
        'reference_id' => 'setReferenceId',
        'contract_id' => 'setContractId',
        'group' => 'setGroup',
        'sub_basket' => 'setSubBasket',
        'plan_id' => 'setPlanId',
        'start_at' => 'setStartAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent' => 'getParent',
        'item_type' => 'getItemType',
        'desc' => 'getDesc',
        'article_number' => 'getArticleNumber',
        'serial_number' => 'getSerialNumber',
        'ean' => 'getEan',
        'quantity' => 'getQuantity',
        'price_one' => 'getPriceOne',
        'sum' => 'getSum',
        'tax' => 'getTax',
        'reference_id' => 'getReferenceId',
        'contract_id' => 'getContractId',
        'group' => 'getGroup',
        'sub_basket' => 'getSubBasket',
        'plan_id' => 'getPlanId',
        'start_at' => 'getStartAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['item_type'] = isset($data['item_type']) ? $data['item_type'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['price_one'] = isset($data['price_one']) ? $data['price_one'] : null;
        $this->container['sum'] = isset($data['sum']) ? $data['sum'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['sub_basket'] = isset($data['sub_basket']) ? $data['sub_basket'] : null;
        $this->container['plan_id'] = isset($data['plan_id']) ? $data['plan_id'] : null;
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Product id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent
     * @return int
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     * @param int $parent Parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets item_type
     * @return string
     */
    public function getItemType()
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     * @param string $item_type Category of item
     * @return $this
     */
    public function setItemType($item_type)
    {
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /**
     * Gets desc
     * @return string
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     * @param string $desc Desc
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets article_number
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     * @param string $article_number Article number
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets serial_number
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     * @param string $serial_number The serialnumber of the scanned posa card
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets ean
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     * @param string $ean ean
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets price_one
     * @return int
     */
    public function getPriceOne()
    {
        return $this->container['price_one'];
    }

    /**
     * Sets price_one
     * @param int $price_one price_one
     * @return $this
     */
    public function setPriceOne($price_one)
    {
        $this->container['price_one'] = $price_one;

        return $this;
    }

    /**
     * Gets sum
     * @return int
     */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum
     * @param int $sum it is the value of the sum of the product with all items in sub_basket
     * @return $this
     */
    public function setSum($sum)
    {
        $this->container['sum'] = $sum;

        return $this;
    }

    /**
     * Gets tax
     * @return int
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     * @param int $tax tax
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     * @param string $reference_id The reference_id must be unique, it's a Reference for to the reference_id of SmartTransactionsSubBasketProduct [example: SmartTransactionsBasketProduct->reference_id is 1000 then all SmartTransactionsSubBasketProduct must have unique reference_id like 1000.1, 1000.2 etc.]
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
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
     * @param string $contract_id contract id
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets group
     * @return \Secuconnect\Client\Model\SmartTransactionsBasketProductGroup[]
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     * @param \Secuconnect\Client\Model\SmartTransactionsBasketProductGroup[] $group Group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets sub_basket
     * @return \Secuconnect\Client\Model\SmartTransactionsSubBasketProduct[]
     */
    public function getSubBasket()
    {
        return $this->container['sub_basket'];
    }

    /**
     * Sets sub_basket
     * @param \Secuconnect\Client\Model\SmartTransactionsSubBasketProduct[] $sub_basket sub basket Product
     * @return $this
     */
    public function setSubBasket($sub_basket)
    {
        $this->container['sub_basket'] = $sub_basket;

        return $this;
    }

    /**
     * Gets plan_id
     * @return string
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     * @param string $plan_id subscription item plan_id
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets start_at
     * @return string
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     * @param string $start_at timestamp when the subscription should start
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

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

