<?php
/**
 * ProductProductWrite
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
 * ProductProductWrite Class Doc Comment
 *
 * @category Class
 * @package  Vilo\ProductService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductProductWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product-product_write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'sku' => 'string',
        'is_active' => 'bool',
        'ean' => 'string',
        'fk_attribute_set' => 'string',
        'product_group_items' => 'string[]',
        'product_bundle_children' => 'string[]',
        'product_bundle_parents' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'name' => null,
        'sku' => null,
        'is_active' => null,
        'ean' => null,
        'fk_attribute_set' => 'uuid',
        'product_group_items' => 'iri-reference',
        'product_bundle_children' => 'iri-reference',
        'product_bundle_parents' => 'iri-reference'
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
        'id' => 'id',
        'name' => 'name',
        'sku' => 'sku',
        'is_active' => 'isActive',
        'ean' => 'ean',
        'fk_attribute_set' => 'fkAttributeSet',
        'product_group_items' => 'productGroupItems',
        'product_bundle_children' => 'productBundleChildren',
        'product_bundle_parents' => 'productBundleParents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'sku' => 'setSku',
        'is_active' => 'setIsActive',
        'ean' => 'setEan',
        'fk_attribute_set' => 'setFkAttributeSet',
        'product_group_items' => 'setProductGroupItems',
        'product_bundle_children' => 'setProductBundleChildren',
        'product_bundle_parents' => 'setProductBundleParents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'sku' => 'getSku',
        'is_active' => 'getIsActive',
        'ean' => 'getEan',
        'fk_attribute_set' => 'getFkAttributeSet',
        'product_group_items' => 'getProductGroupItems',
        'product_bundle_children' => 'getProductBundleChildren',
        'product_bundle_parents' => 'getProductBundleParents'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['fk_attribute_set'] = $data['fk_attribute_set'] ?? null;
        $this->container['product_group_items'] = $data['product_group_items'] ?? null;
        $this->container['product_bundle_children'] = $data['product_bundle_children'] ?? null;
        $this->container['product_bundle_parents'] = $data['product_bundle_parents'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if (!preg_match("/^([a-zA-Z]+\\d+.*)$/", $this->container['sku'])) {
            $invalidProperties[] = "invalid value for 'sku', must be conform to the pattern /^([a-zA-Z]+\\d+.*)$/.";
        }

        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if (!is_null($this->container['ean']) && !preg_match("/^([0-9]{8,13})$/", $this->container['ean'])) {
            $invalidProperties[] = "invalid value for 'ean', must be conform to the pattern /^([0-9]{8,13})$/.";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {

        if ((!preg_match("/^([a-zA-Z]+\\d+.*)$/", $sku))) {
            throw new \InvalidArgumentException("invalid value for $sku when calling ProductProductWrite., must conform to the pattern /^([a-zA-Z]+\\d+.*)$/.");
        }

        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean ean
     *
     * @return self
     */
    public function setEan($ean)
    {

        if (!is_null($ean) && (!preg_match("/^([0-9]{8,13})$/", $ean))) {
            throw new \InvalidArgumentException("invalid value for $ean when calling ProductProductWrite., must conform to the pattern /^([0-9]{8,13})$/.");
        }

        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets fk_attribute_set
     *
     * @return string|null
     */
    public function getFkAttributeSet()
    {
        return $this->container['fk_attribute_set'];
    }

    /**
     * Sets fk_attribute_set
     *
     * @param string|null $fk_attribute_set fk_attribute_set
     *
     * @return self
     */
    public function setFkAttributeSet($fk_attribute_set)
    {
        $this->container['fk_attribute_set'] = $fk_attribute_set;

        return $this;
    }

    /**
     * Gets product_group_items
     *
     * @return string[]|null
     */
    public function getProductGroupItems()
    {
        return $this->container['product_group_items'];
    }

    /**
     * Sets product_group_items
     *
     * @param string[]|null $product_group_items product_group_items
     *
     * @return self
     */
    public function setProductGroupItems($product_group_items)
    {
        $this->container['product_group_items'] = $product_group_items;

        return $this;
    }

    /**
     * Gets product_bundle_children
     *
     * @return string[]|null
     */
    public function getProductBundleChildren()
    {
        return $this->container['product_bundle_children'];
    }

    /**
     * Sets product_bundle_children
     *
     * @param string[]|null $product_bundle_children product_bundle_children
     *
     * @return self
     */
    public function setProductBundleChildren($product_bundle_children)
    {
        $this->container['product_bundle_children'] = $product_bundle_children;

        return $this;
    }

    /**
     * Gets product_bundle_parents
     *
     * @return string[]|null
     */
    public function getProductBundleParents()
    {
        return $this->container['product_bundle_parents'];
    }

    /**
     * Sets product_bundle_parents
     *
     * @param string[]|null $product_bundle_parents product_bundle_parents
     *
     * @return self
     */
    public function setProductBundleParents($product_bundle_parents)
    {
        $this->container['product_bundle_parents'] = $product_bundle_parents;

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

