<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * GeneralMerchantsProductModel
 *
 * @category    Class
 * @package     Secuconnect\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GeneralMerchantsProductModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GeneralMerchantsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object' => 'string',
        'id' => 'string',
        'id_old' => 'string',
        'type' => 'string',
        'user' => '\Secuconnect\Client\Model\GeneralMerchantsUser',
        'parent' => '\Secuconnect\Client\Model\ParentModel',
        'assigned_by' => '\Secuconnect\Client\Model\AssignedBy[]',
        'invited_by' => '\Secuconnect\Client\Model\InvitedBy[]',
        'legal_details' => '\Secuconnect\Client\Model\GeneralMerchantsLegalDetails',
        'checkout_options' => '\Secuconnect\Client\Model\GeneralMerchantsCheckoutOptions',
        'urls' => '\Secuconnect\Client\Model\GeneralMerchantsUrls'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object' => null,
        'id' => 'id',
        'id_old' => 'id',
        'type' => null,
        'user' => null,
        'parent' => null,
        'assigned_by' => null,
        'invited_by' => null,
        'legal_details' => null,
        'checkout_options' => null,
        'urls' => null
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
        'object' => 'object',
        'id' => 'id',
        'id_old' => 'id_old',
        'type' => 'type',
        'user' => 'user',
        'parent' => 'parent',
        'assigned_by' => 'assigned_by',
        'invited_by' => 'invited_by',
        'legal_details' => 'legal_details',
        'checkout_options' => 'checkout_options',
        'urls' => 'urls'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'id_old' => 'setIdOld',
        'type' => 'setType',
        'user' => 'setUser',
        'parent' => 'setParent',
        'assigned_by' => 'setAssignedBy',
        'invited_by' => 'setInvitedBy',
        'legal_details' => 'setLegalDetails',
        'checkout_options' => 'setCheckoutOptions',
        'urls' => 'setUrls'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'id_old' => 'getIdOld',
        'type' => 'getType',
        'user' => 'getUser',
        'parent' => 'getParent',
        'assigned_by' => 'getAssignedBy',
        'invited_by' => 'getInvitedBy',
        'legal_details' => 'getLegalDetails',
        'checkout_options' => 'getCheckoutOptions',
        'urls' => 'getUrls'
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
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['id_old'] = isset($data['id_old']) ? $data['id_old'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['assigned_by'] = isset($data['assigned_by']) ? $data['assigned_by'] : null;
        $this->container['invited_by'] = isset($data['invited_by']) ? $data['invited_by'] : null;
        $this->container['legal_details'] = isset($data['legal_details']) ? $data['legal_details'] : null;
        $this->container['checkout_options'] = isset($data['checkout_options']) ? $data['checkout_options'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
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
     * Gets object
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string $object Object of general merchant
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Id of general merchant
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_old
     * @return string
     */
    public function getIdOld()
    {
        return $this->container['id_old'];
    }

    /**
     * Sets id_old
     * @param string $id_old Old id of general merchant
     * @return $this
     */
    public function setIdOld($id_old)
    {
        $this->container['id_old'] = $id_old;

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
     * @param string $type Type of general merchant
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets user
     * @return \Secuconnect\Client\Model\GeneralMerchantsUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \Secuconnect\Client\Model\GeneralMerchantsUser $user General merchant user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets parent
     * @return \Secuconnect\Client\Model\ParentModel
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     * @param \Secuconnect\Client\Model\ParentModel $parent Parent of general merchant user
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets assigned_by
     * @return \Secuconnect\Client\Model\AssignedBy[]
     */
    public function getAssignedBy()
    {
        return $this->container['assigned_by'];
    }

    /**
     * Sets assigned_by
     * @param \Secuconnect\Client\Model\AssignedBy[] $assigned_by Assigned by
     * @return $this
     */
    public function setAssignedBy($assigned_by)
    {
        $this->container['assigned_by'] = $assigned_by;

        return $this;
    }

    /**
     * Gets invited_by
     * @return \Secuconnect\Client\Model\InvitedBy[]
     */
    public function getInvitedBy()
    {
        return $this->container['invited_by'];
    }

    /**
     * Sets invited_by
     * @param \Secuconnect\Client\Model\InvitedBy[] $invited_by Invited by
     * @return $this
     */
    public function setInvitedBy($invited_by)
    {
        $this->container['invited_by'] = $invited_by;

        return $this;
    }

    /**
     * Gets legal_details
     * @return \Secuconnect\Client\Model\GeneralMerchantsLegalDetails
     */
    public function getLegalDetails()
    {
        return $this->container['legal_details'];
    }

    /**
     * Sets legal_details
     * @param \Secuconnect\Client\Model\GeneralMerchantsLegalDetails $legal_details Legal details
     * @return $this
     */
    public function setLegalDetails($legal_details)
    {
        $this->container['legal_details'] = $legal_details;

        return $this;
    }

    /**
     * Gets checkout_options
     * @return \Secuconnect\Client\Model\GeneralMerchantsCheckoutOptions
     */
    public function getCheckoutOptions()
    {
        return $this->container['checkout_options'];
    }

    /**
     * Sets checkout_options
     * @param \Secuconnect\Client\Model\GeneralMerchantsCheckoutOptions $checkout_options Checkout options
     * @return $this
     */
    public function setCheckoutOptions($checkout_options)
    {
        $this->container['checkout_options'] = $checkout_options;

        return $this;
    }

    /**
     * Gets urls
     * @return \Secuconnect\Client\Model\GeneralMerchantsUrls
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     * @param \Secuconnect\Client\Model\GeneralMerchantsUrls $urls Urls
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

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


