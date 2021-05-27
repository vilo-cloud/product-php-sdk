<?php
/**
 * InlineResponse2002
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Vilo\ProductService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Product Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Vilo\ProductService\Model;

use \ArrayAccess;
use \Vilo\ProductService\ObjectSerializer;

/**
 * InlineResponse2002 Class Doc Comment
 *
 * @category Class
 * @package  Vilo\ProductService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2002 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hydramember' => '\Vilo\ProductService\Model\ProductGroupTypeJsonld[]',
        'hydratotal_items' => 'int',
        'hydraview' => '\Vilo\ProductService\Model\InlineResponse200HydraView',
        'hydrasearch' => '\Vilo\ProductService\Model\InlineResponse200HydraSearch'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hydramember' => null,
        'hydratotal_items' => null,
        'hydraview' => null,
        'hydrasearch' => null
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
        'hydramember' => 'hydra:member',
        'hydratotal_items' => 'hydra:totalItems',
        'hydraview' => 'hydra:view',
        'hydrasearch' => 'hydra:search'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hydramember' => 'setHydramember',
        'hydratotal_items' => 'setHydratotalItems',
        'hydraview' => 'setHydraview',
        'hydrasearch' => 'setHydrasearch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hydramember' => 'getHydramember',
        'hydratotal_items' => 'getHydratotalItems',
        'hydraview' => 'getHydraview',
        'hydrasearch' => 'getHydrasearch'
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
        $this->container['hydramember'] = $data['hydramember'] ?? null;
        $this->container['hydratotal_items'] = $data['hydratotal_items'] ?? null;
        $this->container['hydraview'] = $data['hydraview'] ?? null;
        $this->container['hydrasearch'] = $data['hydrasearch'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['hydramember'] === null) {
            $invalidProperties[] = "'hydramember' can't be null";
        }
        if (!is_null($this->container['hydratotal_items']) && ($this->container['hydratotal_items'] < 0)) {
            $invalidProperties[] = "invalid value for 'hydratotal_items', must be bigger than or equal to 0.";
        }

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
     * Gets hydramember
     *
     * @return \Vilo\ProductService\Model\ProductGroupTypeJsonld[]
     */
    public function getHydramember()
    {
        return $this->container['hydramember'];
    }

    /**
     * Sets hydramember
     *
     * @param \Vilo\ProductService\Model\ProductGroupTypeJsonld[] $hydramember hydramember
     *
     * @return self
     */
    public function setHydramember($hydramember)
    {
        $this->container['hydramember'] = $hydramember;

        return $this;
    }

    /**
     * Gets hydratotal_items
     *
     * @return int|null
     */
    public function getHydratotalItems()
    {
        return $this->container['hydratotal_items'];
    }

    /**
     * Sets hydratotal_items
     *
     * @param int|null $hydratotal_items hydratotal_items
     *
     * @return self
     */
    public function setHydratotalItems($hydratotal_items)
    {

        if (!is_null($hydratotal_items) && ($hydratotal_items < 0)) {
            throw new \InvalidArgumentException('invalid value for $hydratotal_items when calling InlineResponse2002., must be bigger than or equal to 0.');
        }

        $this->container['hydratotal_items'] = $hydratotal_items;

        return $this;
    }

    /**
     * Gets hydraview
     *
     * @return \Vilo\ProductService\Model\InlineResponse200HydraView|null
     */
    public function getHydraview()
    {
        return $this->container['hydraview'];
    }

    /**
     * Sets hydraview
     *
     * @param \Vilo\ProductService\Model\InlineResponse200HydraView|null $hydraview hydraview
     *
     * @return self
     */
    public function setHydraview($hydraview)
    {
        $this->container['hydraview'] = $hydraview;

        return $this;
    }

    /**
     * Gets hydrasearch
     *
     * @return \Vilo\ProductService\Model\InlineResponse200HydraSearch|null
     */
    public function getHydrasearch()
    {
        return $this->container['hydrasearch'];
    }

    /**
     * Sets hydrasearch
     *
     * @param \Vilo\ProductService\Model\InlineResponse200HydraSearch|null $hydrasearch hydrasearch
     *
     * @return self
     */
    public function setHydrasearch($hydrasearch)
    {
        $this->container['hydrasearch'] = $hydrasearch;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


