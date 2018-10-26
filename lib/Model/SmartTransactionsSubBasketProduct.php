<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsSubBasketProduct
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsSubBasketProduct implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SmartTransactionsSubBasketProduct';

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
        'ean' => 'string',
        'quantity' => 'int',
        'price_one' => 'int',
        'sum' => 'int',
        'tax' => 'int',
        'reference_id' => 'string',
        'group' => '\Secuconnect\Client\Model\SmartTransactionsBasketProductGroup[]'
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
        'ean' => null,
        'quantity' => null,
        'price_one' => null,
        'sum' => null,
        'tax' => null,
        'reference_id' => null,
        'group' => null
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
        'ean' => 'ean',
        'quantity' => 'quantity',
        'price_one' => 'priceOne',
        'sum' => 'sum',
        'tax' => 'tax',
        'reference_id' => 'reference_id',
        'group' => 'group'
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
        'ean' => 'setEan',
        'quantity' => 'setQuantity',
        'price_one' => 'setPriceOne',
        'sum' => 'setSum',
        'tax' => 'setTax',
        'reference_id' => 'setReferenceId',
        'group' => 'setGroup'
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
        'ean' => 'getEan',
        'quantity' => 'getQuantity',
        'price_one' => 'getPriceOne',
        'sum' => 'getSum',
        'tax' => 'getTax',
        'reference_id' => 'getReferenceId',
        'group' => 'getGroup'
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
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['price_one'] = isset($data['price_one']) ? $data['price_one'] : null;
        $this->container['sum'] = isset($data['sum']) ? $data['sum'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
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
     * @param string $desc Description of the sub-basket product
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
     * Gets ean
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     * @param string $ean international article number
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
     * @param int $price_one Price one
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
     * @param int $sum 
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
     * @param int $tax Tax
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
     * @param string $reference_id The reference_id must be unique, it's Referring to the reference_id of SmartTransactionsBasketProduct [example: SmartTransactionsBasketProduct->reference_id is 1000 then all SmartTransactionsSubBasketProduct must have unique reference_id like 1000.1, 1000.2 etc.]
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

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
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
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


