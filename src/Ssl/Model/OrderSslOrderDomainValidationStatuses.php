<?php
/**
 * OrderSslOrderDomainValidationStatuses
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
 * OrderSslOrderDomainValidationStatuses Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Ssl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderSslOrderDomainValidationStatuses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'orderSslOrderDomainValidationStatuses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ca_operation' => 'string',
        'ca_order_status' => 'string',
        'ca_status' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ca_operation' => null,
        'ca_order_status' => null,
        'ca_status' => null,
        'status' => null
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
        'ca_operation' => 'ca_operation',
        'ca_order_status' => 'ca_order_status',
        'ca_status' => 'ca_status',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ca_operation' => 'setCaOperation',
        'ca_order_status' => 'setCaOrderStatus',
        'ca_status' => 'setCaStatus',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ca_operation' => 'getCaOperation',
        'ca_order_status' => 'getCaOrderStatus',
        'ca_status' => 'getCaStatus',
        'status' => 'getStatus'
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
        $this->container['ca_operation'] = isset($data['ca_operation']) ? $data['ca_operation'] : null;
        $this->container['ca_order_status'] = isset($data['ca_order_status']) ? $data['ca_order_status'] : null;
        $this->container['ca_status'] = isset($data['ca_status']) ? $data['ca_status'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets ca_operation
     *
     * @return string|null
     */
    public function getCaOperation()
    {
        return $this->container['ca_operation'];
    }

    /**
     * Sets ca_operation
     *
     * @param string|null $ca_operation ca_operation
     *
     * @return $this
     */
    public function setCaOperation($ca_operation)
    {
        $this->container['ca_operation'] = $ca_operation;

        return $this;
    }

    /**
     * Gets ca_order_status
     *
     * @return string|null
     */
    public function getCaOrderStatus()
    {
        return $this->container['ca_order_status'];
    }

    /**
     * Sets ca_order_status
     *
     * @param string|null $ca_order_status ca_order_status
     *
     * @return $this
     */
    public function setCaOrderStatus($ca_order_status)
    {
        $this->container['ca_order_status'] = $ca_order_status;

        return $this;
    }

    /**
     * Gets ca_status
     *
     * @return string|null
     */
    public function getCaStatus()
    {
        return $this->container['ca_status'];
    }

    /**
     * Sets ca_status
     *
     * @param string|null $ca_status ca_status
     *
     * @return $this
     */
    public function setCaStatus($ca_status)
    {
        $this->container['ca_status'] = $ca_status;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


