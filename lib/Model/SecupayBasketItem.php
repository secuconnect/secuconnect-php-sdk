<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SecupayBasketItem
 *
 * @category    Class
 * @description Item describing single position in basket in transaction
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SecupayBasketItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SecupayBasketItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_type' => 'string',
        'article_number' => 'string',
        'quantity' => 'int',
        'name' => 'string',
        'model' => 'string',
        'ean' => 'string',
        'tax' => 'string',
        'total' => 'int',
        'price' => 'int',
        'apikey' => 'string',
        'transaction_hash' => 'string',
        'contract_id' => 'string',
        'reference_id' => 'string',
        'sub_basket' => '\Secuconnect\Client\Model\SecupayBasketItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_type' => null,
        'article_number' => null,
        'quantity' => null,
        'name' => null,
        'model' => null,
        'ean' => null,
        'tax' => null,
        'total' => null,
        'price' => null,
        'apikey' => null,
        'transaction_hash' => null,
        'contract_id' => null,
        'reference_id' => null,
        'sub_basket' => null
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
        'item_type' => 'item_type',
        'article_number' => 'article_number',
        'quantity' => 'quantity',
        'name' => 'name',
        'model' => 'model',
        'ean' => 'ean',
        'tax' => 'tax',
        'total' => 'total',
        'price' => 'price',
        'apikey' => 'apikey',
        'transaction_hash' => 'transaction_hash',
        'contract_id' => 'contract_id',
        'reference_id' => 'reference_id',
        'sub_basket' => 'sub_basket'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'item_type' => 'setItemType',
        'article_number' => 'setArticleNumber',
        'quantity' => 'setQuantity',
        'name' => 'setName',
        'model' => 'setModel',
        'ean' => 'setEan',
        'tax' => 'setTax',
        'total' => 'setTotal',
        'price' => 'setPrice',
        'apikey' => 'setApikey',
        'transaction_hash' => 'setTransactionHash',
        'contract_id' => 'setContractId',
        'reference_id' => 'setReferenceId',
        'sub_basket' => 'setSubBasket'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'item_type' => 'getItemType',
        'article_number' => 'getArticleNumber',
        'quantity' => 'getQuantity',
        'name' => 'getName',
        'model' => 'getModel',
        'ean' => 'getEan',
        'tax' => 'getTax',
        'total' => 'getTotal',
        'price' => 'getPrice',
        'apikey' => 'getApikey',
        'transaction_hash' => 'getTransactionHash',
        'contract_id' => 'getContractId',
        'reference_id' => 'getReferenceId',
        'sub_basket' => 'getSubBasket'
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
        $this->container['item_type'] = isset($data['item_type']) ? $data['item_type'] : 'article';
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['apikey'] = isset($data['apikey']) ? $data['apikey'] : null;
        $this->container['transaction_hash'] = isset($data['transaction_hash']) ? $data['transaction_hash'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['sub_basket'] = isset($data['sub_basket']) ? $data['sub_basket'] : null;
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
     * Gets article_number
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     * @param string $article_number Article number of item
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        $this->container['article_number'] = $article_number;

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
     * @param int $quantity Quantity of articles in item
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Descriptive name of item
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets model
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     * @param string $model Model of item
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

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
     * @param string $ean EAN, European Article Number
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets tax
     * @return string
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     * @param string $tax Applicable tax in percentages
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets total
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param int $total Total price
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets price
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param int $price Price of single article, if item is of article category
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets apikey
     * @return string
     */
    public function getApikey()
    {
        return $this->container['apikey'];
    }

    /**
     * Sets apikey
     * @param string $apikey Special param for stakeholder payments
     * @return $this
     */
    public function setApikey($apikey)
    {
        $this->container['apikey'] = $apikey;

        return $this;
    }

    /**
     * Gets transaction_hash
     * @return string
     */
    public function getTransactionHash()
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     * @param string $transaction_hash Special param for payout payments
     * @return $this
     */
    public function setTransactionHash($transaction_hash)
    {
        $this->container['transaction_hash'] = $transaction_hash;

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
     * @param string $contract_id Contract id - Special param for stakeholder payments
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

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
     * @param string $reference_id Reference id - must be unique for the entire basket
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets sub_basket
     * @return \Secuconnect\Client\Model\SecupayBasketItem[]
     */
    public function getSubBasket()
    {
        return $this->container['sub_basket'];
    }

    /**
     * Sets sub_basket
     * @param \Secuconnect\Client\Model\SecupayBasketItem[] $sub_basket Mixed-Basket: All basket items for one merchant.
     * @return $this
     */
    public function setSubBasket($sub_basket)
    {
        $this->container['sub_basket'] = $sub_basket;

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


