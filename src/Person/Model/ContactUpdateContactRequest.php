<?php
/**
 * ContactUpdateContactRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Reseller/Customer
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Person\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * ContactUpdateContactRequest Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactUpdateContactRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'contactUpdateContactRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_data' => '\Openprovider\Api\Rest\Client\Person\Model\ContactAdditionalData',
        'address' => '\Openprovider\Api\Rest\Client\Person\Model\ContactAddress',
        'api_access_enabled' => 'bool',
        'auth_type' => 'string',
        'comments' => 'string',
        'company_name' => 'string',
        'email' => 'string',
        'id' => 'int',
        'inn' => 'string',
        'is_active' => 'bool',
        'kpp' => 'string',
        'locale' => 'string',
        'name' => '\Openprovider\Api\Rest\Client\Person\Model\ContactName',
        'password_change_declined_at' => 'string',
        'phone' => 'string',
        'rcp_client_ip_list' => '\Openprovider\Api\Rest\Client\Person\Model\ContactClientIpList',
        'role' => 'string',
        'type' => 'string',
        'vat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'additional_data' => null,
        'address' => null,
        'api_access_enabled' => 'boolean',
        'auth_type' => null,
        'comments' => null,
        'company_name' => null,
        'email' => null,
        'id' => 'int32',
        'inn' => null,
        'is_active' => 'boolean',
        'kpp' => null,
        'locale' => null,
        'name' => null,
        'password_change_declined_at' => null,
        'phone' => null,
        'rcp_client_ip_list' => null,
        'role' => null,
        'type' => null,
        'vat' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_data' => 'additional_data',
        'address' => 'address',
        'api_access_enabled' => 'api_access_enabled',
        'auth_type' => 'auth_type',
        'comments' => 'comments',
        'company_name' => 'company_name',
        'email' => 'email',
        'id' => 'id',
        'inn' => 'inn',
        'is_active' => 'is_active',
        'kpp' => 'kpp',
        'locale' => 'locale',
        'name' => 'name',
        'password_change_declined_at' => 'password_change_declined_at',
        'phone' => 'phone',
        'rcp_client_ip_list' => 'rcp_client_ip_list',
        'role' => 'role',
        'type' => 'type',
        'vat' => 'vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_data' => 'setAdditionalData',
        'address' => 'setAddress',
        'api_access_enabled' => 'setApiAccessEnabled',
        'auth_type' => 'setAuthType',
        'comments' => 'setComments',
        'company_name' => 'setCompanyName',
        'email' => 'setEmail',
        'id' => 'setId',
        'inn' => 'setInn',
        'is_active' => 'setIsActive',
        'kpp' => 'setKpp',
        'locale' => 'setLocale',
        'name' => 'setName',
        'password_change_declined_at' => 'setPasswordChangeDeclinedAt',
        'phone' => 'setPhone',
        'rcp_client_ip_list' => 'setRcpClientIpList',
        'role' => 'setRole',
        'type' => 'setType',
        'vat' => 'setVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_data' => 'getAdditionalData',
        'address' => 'getAddress',
        'api_access_enabled' => 'getApiAccessEnabled',
        'auth_type' => 'getAuthType',
        'comments' => 'getComments',
        'company_name' => 'getCompanyName',
        'email' => 'getEmail',
        'id' => 'getId',
        'inn' => 'getInn',
        'is_active' => 'getIsActive',
        'kpp' => 'getKpp',
        'locale' => 'getLocale',
        'name' => 'getName',
        'password_change_declined_at' => 'getPasswordChangeDeclinedAt',
        'phone' => 'getPhone',
        'rcp_client_ip_list' => 'getRcpClientIpList',
        'role' => 'getRole',
        'type' => 'getType',
        'vat' => 'getVat'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['api_access_enabled'] = isset($data['api_access_enabled']) ? $data['api_access_enabled'] : null;
        $this->container['auth_type'] = isset($data['auth_type']) ? $data['auth_type'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inn'] = isset($data['inn']) ? $data['inn'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['kpp'] = isset($data['kpp']) ? $data['kpp'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['password_change_declined_at'] = isset($data['password_change_declined_at']) ? $data['password_change_declined_at'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['rcp_client_ip_list'] = isset($data['rcp_client_ip_list']) ? $data['rcp_client_ip_list'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets additional_data
     *
     * @return \Openprovider\Api\Rest\Client\Person\Model\ContactAdditionalData|null
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param \Openprovider\Api\Rest\Client\Person\Model\ContactAdditionalData|null $additional_data additional_data
     *
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Openprovider\Api\Rest\Client\Person\Model\ContactAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Openprovider\Api\Rest\Client\Person\Model\ContactAddress|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets api_access_enabled
     *
     * @return bool|null
     */
    public function getApiAccessEnabled()
    {
        return $this->container['api_access_enabled'];
    }

    /**
     * Sets api_access_enabled
     *
     * @param bool|null $api_access_enabled api_access_enabled
     *
     * @return $this
     */
    public function setApiAccessEnabled($api_access_enabled)
    {
        $this->container['api_access_enabled'] = $api_access_enabled;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return string|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string|null $auth_type auth_type
     *
     * @return $this
     */
    public function setAuthType($auth_type)
    {
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets inn
     *
     * @return string|null
     */
    public function getInn()
    {
        return $this->container['inn'];
    }

    /**
     * Sets inn
     *
     * @param string|null $inn inn
     *
     * @return $this
     */
    public function setInn($inn)
    {
        $this->container['inn'] = $inn;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets kpp
     *
     * @return string|null
     */
    public function getKpp()
    {
        return $this->container['kpp'];
    }

    /**
     * Sets kpp
     *
     * @param string|null $kpp kpp
     *
     * @return $this
     */
    public function setKpp($kpp)
    {
        $this->container['kpp'] = $kpp;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Openprovider\Api\Rest\Client\Person\Model\ContactName|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Openprovider\Api\Rest\Client\Person\Model\ContactName|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets password_change_declined_at
     *
     * @return string|null
     */
    public function getPasswordChangeDeclinedAt()
    {
        return $this->container['password_change_declined_at'];
    }

    /**
     * Sets password_change_declined_at
     *
     * @param string|null $password_change_declined_at password_change_declined_at
     *
     * @return $this
     */
    public function setPasswordChangeDeclinedAt($password_change_declined_at)
    {
        $this->container['password_change_declined_at'] = $password_change_declined_at;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets rcp_client_ip_list
     *
     * @return \Openprovider\Api\Rest\Client\Person\Model\ContactClientIpList|null
     */
    public function getRcpClientIpList()
    {
        return $this->container['rcp_client_ip_list'];
    }

    /**
     * Sets rcp_client_ip_list
     *
     * @param \Openprovider\Api\Rest\Client\Person\Model\ContactClientIpList|null $rcp_client_ip_list rcp_client_ip_list
     *
     * @return $this
     */
    public function setRcpClientIpList($rcp_client_ip_list)
    {
        $this->container['rcp_client_ip_list'] = $rcp_client_ip_list;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string|null $vat vat
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

