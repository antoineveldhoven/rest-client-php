<?php
/**
 * SeDomainRecords
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\SpamExpert
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Spam Experts
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

namespace Openprovider\Api\Rest\Client\SpamExpert\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * SeDomainRecords Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\SpamExpert
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SeDomainRecords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'se_domainRecords';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aliases' => 'string[]',
        'destinations' => '\Openprovider\Api\Rest\Client\SpamExpert\Model\SeDomainDestination[]',
        'outgoing_user_ips' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'aliases' => null,
        'destinations' => null,
        'outgoing_user_ips' => null
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
        'aliases' => 'aliases',
        'destinations' => 'destinations',
        'outgoing_user_ips' => 'outgoing_user_ips'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aliases' => 'setAliases',
        'destinations' => 'setDestinations',
        'outgoing_user_ips' => 'setOutgoingUserIps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aliases' => 'getAliases',
        'destinations' => 'getDestinations',
        'outgoing_user_ips' => 'getOutgoingUserIps'
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
    public function __construct(?array $data = null)
    {
        $this->container['aliases'] = isset($data['aliases']) ? $data['aliases'] : null;
        $this->container['destinations'] = isset($data['destinations']) ? $data['destinations'] : null;
        $this->container['outgoing_user_ips'] = isset($data['outgoing_user_ips']) ? $data['outgoing_user_ips'] : null;
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
     * Gets aliases
     *
     * @return string[]|null
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     *
     * @param string[]|null $aliases aliases
     *
     * @return $this
     */
    public function setAliases($aliases)
    {
        $this->container['aliases'] = $aliases;

        return $this;
    }

    /**
     * Gets destinations
     *
     * @return \Openprovider\Api\Rest\Client\SpamExpert\Model\SeDomainDestination[]|null
     */
    public function getDestinations()
    {
        return $this->container['destinations'];
    }

    /**
     * Sets destinations
     *
     * @param \Openprovider\Api\Rest\Client\SpamExpert\Model\SeDomainDestination[]|null $destinations destinations
     *
     * @return $this
     */
    public function setDestinations($destinations)
    {
        $this->container['destinations'] = $destinations;

        return $this;
    }

    /**
     * Gets outgoing_user_ips
     *
     * @return string[]|null
     */
    public function getOutgoingUserIps()
    {
        return $this->container['outgoing_user_ips'];
    }

    /**
     * Sets outgoing_user_ips
     *
     * @param string[]|null $outgoing_user_ips outgoing_user_ips
     *
     * @return $this
     */
    public function setOutgoingUserIps($outgoing_user_ips)
    {
        $this->container['outgoing_user_ips'] = $outgoing_user_ips;

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


