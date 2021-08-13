<?php

namespace Secuconnect\Client\Model;

/**
 * GeneralMerchantsProductModel
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralMerchantsProductModel extends BaseProductModel
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
        'id_old' => 'int',
        'type' => 'string',
        'user' => '\Secuconnect\Client\Model\GeneralMerchantsUser',
        'parent' => '\Secuconnect\Client\Model\ParentModel',
        'assigned_by' => '\Secuconnect\Client\Model\AssignedBy[]',
        'invited_by' => '\Secuconnect\Client\Model\InvitedBy[]',
        'legal_details' => '\Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]',
        'urls' => '\Secuconnect\Client\Model\GeneralMerchantsUrls[]',
        'store_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_old' => 'id',
        'type' => null,
        'user' => null,
        'parent' => null,
        'assigned_by' => null,
        'invited_by' => null,
        'legal_details' => null,
        'urls' => null,
        'store_name' => null
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
        'id_old' => 'id_old',
        'type' => 'type',
        'user' => 'user',
        'parent' => 'parent',
        'assigned_by' => 'assigned_by',
        'invited_by' => 'invited_by',
        'legal_details' => 'legal_details',
        'urls' => 'urls',
        'store_name' => 'store_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_old' => 'setIdOld',
        'type' => 'setType',
        'user' => 'setUser',
        'parent' => 'setParent',
        'assigned_by' => 'setAssignedBy',
        'invited_by' => 'setInvitedBy',
        'legal_details' => 'setLegalDetails',
        'urls' => 'setUrls',
        'store_name' => 'setStoreName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_old' => 'getIdOld',
        'type' => 'getType',
        'user' => 'getUser',
        'parent' => 'getParent',
        'assigned_by' => 'getAssignedBy',
        'invited_by' => 'getInvitedBy',
        'legal_details' => 'getLegalDetails',
        'urls' => 'getUrls',
        'store_name' => 'getStoreName'
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

        $this->container['id_old'] = isset($data['id_old']) ? $data['id_old'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['assigned_by'] = isset($data['assigned_by']) ? $data['assigned_by'] : null;
        $this->container['invited_by'] = isset($data['invited_by']) ? $data['invited_by'] : null;
        $this->container['legal_details'] = isset($data['legal_details']) ? $data['legal_details'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
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
     * Gets id_old
     * @return int
     */
    public function getIdOld()
    {
        return $this->container['id_old'];
    }

    /**
     * Sets id_old
     * @param int $id_old ID in secupay Frontend
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
     * @param string $type User type ID - unverified shop (1); internet  shop (11); kaufmännischer Netzbetrieb (KNB, 45); secucard merchant (46);  App Center user (63), checkout provider (64)
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
     * @param \Secuconnect\Client\Model\GeneralMerchantsUser $user user
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
     * @param \Secuconnect\Client\Model\ParentModel $parent parent
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
     * @return \Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]
     */
    public function getLegalDetails()
    {
        return $this->container['legal_details'];
    }

    /**
     * Sets legal_details
     * @param \Secuconnect\Client\Model\GeneralMerchantsLegalDetails[] $legal_details Legal details like terms of use, privacy policy, or imprint
     * @return $this
     */
    public function setLegalDetails($legal_details)
    {
        $this->container['legal_details'] = $legal_details;

        return $this;
    }

    /**
     * Gets urls
     * @return \Secuconnect\Client\Model\GeneralMerchantsUrls[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     * @param \Secuconnect\Client\Model\GeneralMerchantsUrls[] $urls URLs
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets store_name
     * @return string
     */
    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name
     * @param string $store_name Store name
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

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

