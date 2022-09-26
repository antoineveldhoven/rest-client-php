<?php
/**
 * ZoneSectigoData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Dns
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DNS
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Dns\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * ZoneSectigoData Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Dns
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ZoneSectigoData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'zoneSectigoData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'autorenew' => 'bool',
        'order_date' => 'string',
        'renewal_date' => 'string',
        'secured' => 'bool',
        'website_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'autorenew' => 'boolean',
        'order_date' => null,
        'renewal_date' => null,
        'secured' => 'boolean',
        'website_id' => 'int32'
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
        'autorenew' => 'autorenew',
        'order_date' => 'order_date',
        'renewal_date' => 'renewal_date',
        'secured' => 'secured',
        'website_id' => 'website_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'autorenew' => 'setAutorenew',
        'order_date' => 'setOrderDate',
        'renewal_date' => 'setRenewalDate',
        'secured' => 'setSecured',
        'website_id' => 'setWebsiteId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'autorenew' => 'getAutorenew',
        'order_date' => 'getOrderDate',
        'renewal_date' => 'getRenewalDate',
        'secured' => 'getSecured',
        'website_id' => 'getWebsiteId'
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
        $this->container['autorenew'] = isset($data['autorenew']) ? $data['autorenew'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['renewal_date'] = isset($data['renewal_date']) ? $data['renewal_date'] : null;
        $this->container['secured'] = isset($data['secured']) ? $data['secured'] : null;
        $this->container['website_id'] = isset($data['website_id']) ? $data['website_id'] : null;
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
     * Gets autorenew
     *
     * @return bool|null
     */
    public function getAutorenew()
    {
        return $this->container['autorenew'];
    }

    /**
     * Sets autorenew
     *
     * @param bool|null $autorenew autorenew
     *
     * @return $this
     */
    public function setAutorenew($autorenew)
    {
        $this->container['autorenew'] = $autorenew;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return string|null
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param string|null $order_date order_date
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets renewal_date
     *
     * @return string|null
     */
    public function getRenewalDate()
    {
        return $this->container['renewal_date'];
    }

    /**
     * Sets renewal_date
     *
     * @param string|null $renewal_date renewal_date
     *
     * @return $this
     */
    public function setRenewalDate($renewal_date)
    {
        $this->container['renewal_date'] = $renewal_date;

        return $this;
    }

    /**
     * Gets secured
     *
     * @return bool|null
     */
    public function getSecured()
    {
        return $this->container['secured'];
    }

    /**
     * Sets secured
     *
     * @param bool|null $secured secured
     *
     * @return $this
     */
    public function setSecured($secured)
    {
        $this->container['secured'] = $secured;

        return $this;
    }

    /**
     * Gets website_id
     *
     * @return int|null
     */
    public function getWebsiteId()
    {
        return $this->container['website_id'];
    }

    /**
     * Sets website_id
     *
     * @param int|null $website_id website_id
     *
     * @return $this
     */
    public function setWebsiteId($website_id)
    {
        $this->container['website_id'] = $website_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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


