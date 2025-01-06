<?php
/**
 * CsrCreateCsrResponseData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Ssl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SSL
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

namespace Openprovider\Api\Rest\Client\Ssl\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * CsrCreateCsrResponseData Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Ssl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CsrCreateCsrResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'csrCreateCsrResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'command' => 'string',
        'config' => 'string',
        'config_path' => 'string',
        'csr' => 'string',
        'key' => 'string',
        'key_path' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'command' => null,
        'config' => null,
        'config_path' => null,
        'csr' => null,
        'key' => null,
        'key_path' => null
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
        'command' => 'command',
        'config' => 'config',
        'config_path' => 'config_path',
        'csr' => 'csr',
        'key' => 'key',
        'key_path' => 'key_path'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'command' => 'setCommand',
        'config' => 'setConfig',
        'config_path' => 'setConfigPath',
        'csr' => 'setCsr',
        'key' => 'setKey',
        'key_path' => 'setKeyPath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'command' => 'getCommand',
        'config' => 'getConfig',
        'config_path' => 'getConfigPath',
        'csr' => 'getCsr',
        'key' => 'getKey',
        'key_path' => 'getKeyPath'
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
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['config_path'] = isset($data['config_path']) ? $data['config_path'] : null;
        $this->container['csr'] = isset($data['csr']) ? $data['csr'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['key_path'] = isset($data['key_path']) ? $data['key_path'] : null;
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
     * Gets command
     *
     * @return string|null
     */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
     * Sets command
     *
     * @param string|null $command command
     *
     * @return $this
     */
    public function setCommand($command)
    {
        $this->container['command'] = $command;

        return $this;
    }

    /**
     * Gets config
     *
     * @return string|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param string|null $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets config_path
     *
     * @return string|null
     */
    public function getConfigPath()
    {
        return $this->container['config_path'];
    }

    /**
     * Sets config_path
     *
     * @param string|null $config_path config_path
     *
     * @return $this
     */
    public function setConfigPath($config_path)
    {
        $this->container['config_path'] = $config_path;

        return $this;
    }

    /**
     * Gets csr
     *
     * @return string|null
     */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
     * Sets csr
     *
     * @param string|null $csr csr
     *
     * @return $this
     */
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets key_path
     *
     * @return string|null
     */
    public function getKeyPath()
    {
        return $this->container['key_path'];
    }

    /**
     * Sets key_path
     *
     * @param string|null $key_path key_path
     *
     * @return $this
     */
    public function setKeyPath($key_path)
    {
        $this->container['key_path'] = $key_path;

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


