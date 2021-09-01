# Vilo\ProductService\ProductApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateProductItem()**](ProductApi.md#activateProductItem) | **POST** /products/{id}/activate | Activate a Product resource
[**approveProductItem()**](ProductApi.md#approveProductItem) | **POST** /products/{id}/approve | Approving a Product resource
[**attributableGetAttributeValuesProductSubresource()**](ProductApi.md#attributableGetAttributeValuesProductSubresource) | **GET** /products/{id}/attribute_values | Get All the AttributeValues for the entity Product with {id}
[**attributeReferenceGetCollectionProductCollection()**](ProductApi.md#attributeReferenceGetCollectionProductCollection) | **GET** /products/attribute_references | Get a collection of Attribute References for the Product entity.
[**attributeReferenceGetItemProductItem()**](ProductApi.md#attributeReferenceGetItemProductItem) | **GET** /products/attribute_references/{id} | Retrieves a Product resource.
[**attributeSetAssignProductItem()**](ProductApi.md#attributeSetAssignProductItem) | **PUT** /products/attribute_sets/{id}/assign_attribute/{attributeReferenceId} | Assign an Attribute to an Attribute Set for the Product entity.
[**attributeSetGetCollectionProductCollection()**](ProductApi.md#attributeSetGetCollectionProductCollection) | **GET** /products/attribute_sets | Get a collection of Attribute Set for the Product entity.
[**attributeSetGetItemProductItem()**](ProductApi.md#attributeSetGetItemProductItem) | **GET** /products/attribute_sets/{id} | Get an Attribute Set for the Product entity.
[**attributeSetMakeDefaultProductItem()**](ProductApi.md#attributeSetMakeDefaultProductItem) | **PUT** /products/attribute_sets/{id}/make_default | Set an Attribute Set as default for the Product entity.
[**attributeValueAssignProductItem()**](ProductApi.md#attributeValueAssignProductItem) | **PUT** /products/{id}/assign_attribute_value/{attributeValueId} | Assign attribute value to a Product entity.
[**attributeValueCreateProductCollection()**](ProductApi.md#attributeValueCreateProductCollection) | **POST** /products/attributes/{attributeReferenceId}/attribute_values | Add an AttributeValue for an Attribute on the Product entity.
[**attributeValueGetProductCollection()**](ProductApi.md#attributeValueGetProductCollection) | **GET** /products/attribute_references/{attributeReferenceId}/attribute_values | Get the AttributeValues for an Attribute on the Product entity.
[**attributeValueGetProductItem()**](ProductApi.md#attributeValueGetProductItem) | **GET** /products/attribute_references/{attributeReferenceId}/attribute_values/{id} | Retrieves a Product resource.
[**attributeValueUnassignProductItem()**](ProductApi.md#attributeValueUnassignProductItem) | **PUT** /products/{id}/unassign_attribute_value/{attributeValueId} | Unassign attribute value from a Product entity.
[**attributeValueUpdateProductItem()**](ProductApi.md#attributeValueUpdateProductItem) | **PUT** /products/attributes/attribute_values/{attributeValueId} | Update an AttributeValue for an Attribute on the Product entity.
[**deactivateProductItem()**](ProductApi.md#deactivateProductItem) | **POST** /products/{id}/deactivate | Deactivate a Product resource
[**deleteProductItem()**](ProductApi.md#deleteProductItem) | **DELETE** /products/{id} | Removes the Product resource.
[**disapproveProductItem()**](ProductApi.md#disapproveProductItem) | **POST** /products/{id}/disapprove | Disapproving a Product resource
[**getProductCollection()**](ProductApi.md#getProductCollection) | **GET** /products | Retrieves the collection of Product resources.
[**getProductItem()**](ProductApi.md#getProductItem) | **GET** /products/{id} | Retrieves a Product resource.
[**optionAttributeGetCollectionProductCollection()**](ProductApi.md#optionAttributeGetCollectionProductCollection) | **GET** /products/option_attributes | Retrieves the collection of Product resources.
[**optionAttributeGetItemProductItem()**](ProductApi.md#optionAttributeGetItemProductItem) | **GET** /products/option_attributes/{id} | Retrieves a Product resource.
[**patchProductItem()**](ProductApi.md#patchProductItem) | **PATCH** /products/{id} | Updates the Product resource.
[**postProductCollection()**](ProductApi.md#postProductCollection) | **POST** /products | Creates a Product resource.
[**productsAttributeSetCreate()**](ProductApi.md#productsAttributeSetCreate) | **POST** /products/attribute_sets | Creates a Attribute Set for Product
[**productsOptionAttributeCreate()**](ProductApi.md#productsOptionAttributeCreate) | **POST** /products/option_attributes | Creates a Option Attribute for Product
[**productsTypeAttributeCreate()**](ProductApi.md#productsTypeAttributeCreate) | **POST** /products/type_attributes | Creates a Type Attribute for Product
[**putProductItem()**](ProductApi.md#putProductItem) | **PUT** /products/{id} | Replaces the Product resource.
[**typeAttributeGetCollectionProductCollection()**](ProductApi.md#typeAttributeGetCollectionProductCollection) | **GET** /products/type_attributes | Get a collection of Attribute Type for the Product entity.
[**typeAttributeGetItemProductItem()**](ProductApi.md#typeAttributeGetItemProductItem) | **GET** /products/type_attributes/{id} | Get an Attribute Type for the Product entity.
[**validateProductItem()**](ProductApi.md#validateProductItem) | **POST** /products/{id}/validate | Validates a Product resource


## `activateProductItem()`

```php
activateProductItem($id): \Vilo\ProductService\Model\ProductJsonld
```

Activate a Product resource

Activate a Product resource. A product should be activated only once all the AttributeBundle are validated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->activateProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->activateProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveProductItem()`

```php
approveProductItem($id): \Vilo\ProductService\Model\ProductJsonld
```

Approving a Product resource

Approving a Product resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->approveProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->approveProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributableGetAttributeValuesProductSubresource()`

```php
attributableGetAttributeValuesProductSubresource($id, $page, $items_per_page): \Vilo\ProductService\Model\InlineResponse2006
```

Get All the AttributeValues for the entity Product with {id}

Returns a collection of AttributeValues for a given Product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Product identifier
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->attributableGetAttributeValuesProductSubresource($id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributableGetAttributeValuesProductSubresource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product identifier |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeReferenceGetCollectionProductCollection()`

```php
attributeReferenceGetCollectionProductCollection($page, $items_per_page): \Vilo\ProductService\Model\InlineResponse2005
```

Get a collection of Attribute References for the Product entity.

Get a collection of Attribute References for the Product entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->attributeReferenceGetCollectionProductCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeReferenceGetCollectionProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeReferenceGetItemProductItem()`

```php
attributeReferenceGetItemProductItem($id): \Vilo\ProductService\Model\AttributeReferenceJsonldAttributeRead
```

Retrieves a Product resource.

Retrieves a Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->attributeReferenceGetItemProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeReferenceGetItemProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\AttributeReferenceJsonldAttributeRead**](../Model/AttributeReferenceJsonldAttributeRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeSetAssignProductItem()`

```php
attributeSetAssignProductItem($id, $attribute_reference_id): \Vilo\ProductService\Model\AttributeSetJsonldRead
```

Assign an Attribute to an Attribute Set for the Product entity.

Replace {attributeReferenceI} with the Attribute ID and {id} with Attribute Set ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The Attribute Set ID
$attribute_reference_id = 'attribute_reference_id_example'; // string | The Attribute Reference ID

try {
    $result = $apiInstance->attributeSetAssignProductItem($id, $attribute_reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeSetAssignProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Attribute Set ID |
 **attribute_reference_id** | **string**| The Attribute Reference ID |

### Return type

[**\Vilo\ProductService\Model\AttributeSetJsonldRead**](../Model/AttributeSetJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeSetGetCollectionProductCollection()`

```php
attributeSetGetCollectionProductCollection($page, $items_per_page): \Vilo\ProductService\Model\InlineResponse2007
```

Get a collection of Attribute Set for the Product entity.

Get an Attribute Set collection for the Product entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->attributeSetGetCollectionProductCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeSetGetCollectionProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeSetGetItemProductItem()`

```php
attributeSetGetItemProductItem($id): \Vilo\ProductService\Model\AttributeSetJsonldRead
```

Get an Attribute Set for the Product entity.

Get an Attribute Set for the Product entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->attributeSetGetItemProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeSetGetItemProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\AttributeSetJsonldRead**](../Model/AttributeSetJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeSetMakeDefaultProductItem()`

```php
attributeSetMakeDefaultProductItem($id): \Vilo\ProductService\Model\AttributeSetJsonldRead
```

Set an Attribute Set as default for the Product entity.

This attribute set will be added by default to new entities if no attribute set is specified at creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The Attribute Set ID to make default.

try {
    $result = $apiInstance->attributeSetMakeDefaultProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeSetMakeDefaultProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Attribute Set ID to make default. |

### Return type

[**\Vilo\ProductService\Model\AttributeSetJsonldRead**](../Model/AttributeSetJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeValueAssignProductItem()`

```php
attributeValueAssignProductItem($id, $attribute_value_id): \Vilo\ProductService\Model\AttributeValueJsonld
```

Assign attribute value to a Product entity.

Assign attribute value to a Product entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The Product ID
$attribute_value_id = 'attribute_value_id_example'; // string | The AttributeValue ID

try {
    $result = $apiInstance->attributeValueAssignProductItem($id, $attribute_value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeValueAssignProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Product ID |
 **attribute_value_id** | **string**| The AttributeValue ID |

### Return type

[**\Vilo\ProductService\Model\AttributeValueJsonld**](../Model/AttributeValueJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeValueCreateProductCollection()`

```php
attributeValueCreateProductCollection($attribute_reference_id, $attribute_value_jsonld): \Vilo\ProductService\Model\AttributeValueJsonld
```

Add an AttributeValue for an Attribute on the Product entity.

This AttributeValue can then be assigned to any instance of the Product entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_reference_id = 'attribute_reference_id_example'; // string | The AttributeReference ID
$attribute_value_jsonld = new \Vilo\ProductService\Model\AttributeValueJsonld(); // \Vilo\ProductService\Model\AttributeValueJsonld | Creates a AttributeValue on Product.

try {
    $result = $apiInstance->attributeValueCreateProductCollection($attribute_reference_id, $attribute_value_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeValueCreateProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_reference_id** | **string**| The AttributeReference ID |
 **attribute_value_jsonld** | [**\Vilo\ProductService\Model\AttributeValueJsonld**](../Model/AttributeValueJsonld.md)| Creates a AttributeValue on Product. |

### Return type

[**\Vilo\ProductService\Model\AttributeValueJsonld**](../Model/AttributeValueJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeValueGetProductCollection()`

```php
attributeValueGetProductCollection($attribute_reference_id, $page, $items_per_page): \Vilo\ProductService\Model\InlineResponse2006
```

Get the AttributeValues for an Attribute on the Product entity.

Get the AttributeValues for an Attribute on the Product entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_reference_id = 'attribute_reference_id_example'; // string | The AttributeReference ID
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->attributeValueGetProductCollection($attribute_reference_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeValueGetProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_reference_id** | **string**| The AttributeReference ID |
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeValueGetProductItem()`

```php
attributeValueGetProductItem($attribute_reference_id, $id): \Vilo\ProductService\Model\AttributeValueJsonld
```

Retrieves a Product resource.

Retrieves a Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_reference_id = 'attribute_reference_id_example'; // string | The AttributeReference ID
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->attributeValueGetProductItem($attribute_reference_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeValueGetProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_reference_id** | **string**| The AttributeReference ID |
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\AttributeValueJsonld**](../Model/AttributeValueJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeValueUnassignProductItem()`

```php
attributeValueUnassignProductItem($id, $attribute_value_id): \Vilo\ProductService\Model\AttributeValueJsonld
```

Unassign attribute value from a Product entity.

Unassign attribute value from a Product entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The Product ID
$attribute_value_id = 'attribute_value_id_example'; // string | The AttributeValue ID

try {
    $result = $apiInstance->attributeValueUnassignProductItem($id, $attribute_value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeValueUnassignProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Product ID |
 **attribute_value_id** | **string**| The AttributeValue ID |

### Return type

[**\Vilo\ProductService\Model\AttributeValueJsonld**](../Model/AttributeValueJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeValueUpdateProductItem()`

```php
attributeValueUpdateProductItem($attribute_value_id, $inline_object): \Vilo\ProductService\Model\AttributeValueJsonld
```

Update an AttributeValue for an Attribute on the Product entity.

This AttributeValue can then be assigned to any instance of the Product entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_value_id = 'attribute_value_id_example'; // string | The AttributeValue ID
$inline_object = new \Vilo\ProductService\Model\InlineObject(); // \Vilo\ProductService\Model\InlineObject

try {
    $result = $apiInstance->attributeValueUpdateProductItem($attribute_value_id, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->attributeValueUpdateProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_value_id** | **string**| The AttributeValue ID |
 **inline_object** | [**\Vilo\ProductService\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\Vilo\ProductService\Model\AttributeValueJsonld**](../Model/AttributeValueJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateProductItem()`

```php
deactivateProductItem($id): \Vilo\ProductService\Model\ProductJsonld
```

Deactivate a Product resource

Deactivate a Product resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->deactivateProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->deactivateProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductItem()`

```php
deleteProductItem($id)
```

Removes the Product resource.

Removes the Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $apiInstance->deleteProductItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->deleteProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disapproveProductItem()`

```php
disapproveProductItem($id): \Vilo\ProductService\Model\ProductJsonld
```

Disapproving a Product resource

Disapproving a Product resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->disapproveProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->disapproveProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductCollection()`

```php
getProductCollection($page, $items_per_page, $order_id, $order_is_active, $order_approved_at, $exists_approved_at, $is_active, $is_part_of_a_bundle, $is_bundle): \Vilo\ProductService\Model\InlineResponse2004
```

Retrieves the collection of Product resources.

Retrieves the collection of Product resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$order_id = 'order_id_example'; // string
$order_is_active = 'order_is_active_example'; // string
$order_approved_at = 'order_approved_at_example'; // string
$exists_approved_at = True; // bool
$is_active = True; // bool
$is_part_of_a_bundle = True; // bool
$is_bundle = True; // bool

try {
    $result = $apiInstance->getProductCollection($page, $items_per_page, $order_id, $order_is_active, $order_approved_at, $exists_approved_at, $is_active, $is_part_of_a_bundle, $is_bundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]
 **order_id** | **string**|  | [optional]
 **order_is_active** | **string**|  | [optional]
 **order_approved_at** | **string**|  | [optional]
 **exists_approved_at** | **bool**|  | [optional]
 **is_active** | **bool**|  | [optional]
 **is_part_of_a_bundle** | **bool**|  | [optional]
 **is_bundle** | **bool**|  | [optional]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductItem()`

```php
getProductItem($id): \Vilo\ProductService\Model\ProductJsonld
```

Retrieves a Product resource.

Retrieves a Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->getProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optionAttributeGetCollectionProductCollection()`

```php
optionAttributeGetCollectionProductCollection($page, $items_per_page): \Vilo\ProductService\Model\InlineResponse2008
```

Retrieves the collection of Product resources.

Retrieves the collection of Product resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->optionAttributeGetCollectionProductCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->optionAttributeGetCollectionProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optionAttributeGetItemProductItem()`

```php
optionAttributeGetItemProductItem($id): \Vilo\ProductService\Model\OptionAttributeJsonldAttributeRead
```

Retrieves a Product resource.

Retrieves a Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->optionAttributeGetItemProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->optionAttributeGetItemProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\OptionAttributeJsonldAttributeRead**](../Model/OptionAttributeJsonldAttributeRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProductItem()`

```php
patchProductItem($id, $product_product_write): \Vilo\ProductService\Model\ProductJsonld
```

Updates the Product resource.

Updates the Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$product_product_write = new \Vilo\ProductService\Model\ProductProductWrite(); // \Vilo\ProductService\Model\ProductProductWrite | The updated Product resource

try {
    $result = $apiInstance->patchProductItem($id, $product_product_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->patchProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_product_write** | [**\Vilo\ProductService\Model\ProductProductWrite**](../Model/ProductProductWrite.md)| The updated Product resource |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductCollection()`

```php
postProductCollection($product_jsonld_product_write): \Vilo\ProductService\Model\ProductJsonld
```

Creates a Product resource.

Creates a Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_jsonld_product_write = new \Vilo\ProductService\Model\ProductJsonldProductWrite(); // \Vilo\ProductService\Model\ProductJsonldProductWrite | The new Product resource

try {
    $result = $apiInstance->postProductCollection($product_jsonld_product_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->postProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_jsonld_product_write** | [**\Vilo\ProductService\Model\ProductJsonldProductWrite**](../Model/ProductJsonldProductWrite.md)| The new Product resource |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsAttributeSetCreate()`

```php
productsAttributeSetCreate($attribute_set_jsonld_write): \Vilo\ProductService\Model\AttributeSetJsonldRead
```

Creates a Attribute Set for Product

Creates a Attribute Set for Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_set_jsonld_write = new \Vilo\ProductService\Model\AttributeSetJsonldWrite(); // \Vilo\ProductService\Model\AttributeSetJsonldWrite | Creates a AttributeSet on Product.

try {
    $result = $apiInstance->productsAttributeSetCreate($attribute_set_jsonld_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsAttributeSetCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_jsonld_write** | [**\Vilo\ProductService\Model\AttributeSetJsonldWrite**](../Model/AttributeSetJsonldWrite.md)| Creates a AttributeSet on Product. | [optional]

### Return type

[**\Vilo\ProductService\Model\AttributeSetJsonldRead**](../Model/AttributeSetJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsOptionAttributeCreate()`

```php
productsOptionAttributeCreate($option_attribute_jsonld_attribute_write): \Vilo\ProductService\Model\OptionAttributeJsonldAttributeRead
```

Creates a Option Attribute for Product

Creates a Option Attribute for Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$option_attribute_jsonld_attribute_write = new \Vilo\ProductService\Model\OptionAttributeJsonldAttributeWrite(); // \Vilo\ProductService\Model\OptionAttributeJsonldAttributeWrite | Creates a OptionAttribute on Product.

try {
    $result = $apiInstance->productsOptionAttributeCreate($option_attribute_jsonld_attribute_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsOptionAttributeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **option_attribute_jsonld_attribute_write** | [**\Vilo\ProductService\Model\OptionAttributeJsonldAttributeWrite**](../Model/OptionAttributeJsonldAttributeWrite.md)| Creates a OptionAttribute on Product. | [optional]

### Return type

[**\Vilo\ProductService\Model\OptionAttributeJsonldAttributeRead**](../Model/OptionAttributeJsonldAttributeRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsTypeAttributeCreate()`

```php
productsTypeAttributeCreate($type_attribute_jsonld_attribute_write): \Vilo\ProductService\Model\TypeAttributeJsonldAttributeRead
```

Creates a Type Attribute for Product

Creates a Type Attribute for Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type_attribute_jsonld_attribute_write = new \Vilo\ProductService\Model\TypeAttributeJsonldAttributeWrite(); // \Vilo\ProductService\Model\TypeAttributeJsonldAttributeWrite | Creates a TypeAttribute on Product.

try {
    $result = $apiInstance->productsTypeAttributeCreate($type_attribute_jsonld_attribute_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsTypeAttributeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_attribute_jsonld_attribute_write** | [**\Vilo\ProductService\Model\TypeAttributeJsonldAttributeWrite**](../Model/TypeAttributeJsonldAttributeWrite.md)| Creates a TypeAttribute on Product. | [optional]

### Return type

[**\Vilo\ProductService\Model\TypeAttributeJsonldAttributeRead**](../Model/TypeAttributeJsonldAttributeRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductItem()`

```php
putProductItem($id, $product_jsonld_product_write): \Vilo\ProductService\Model\ProductJsonld
```

Replaces the Product resource.

Replaces the Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$product_jsonld_product_write = new \Vilo\ProductService\Model\ProductJsonldProductWrite(); // \Vilo\ProductService\Model\ProductJsonldProductWrite | The updated Product resource

try {
    $result = $apiInstance->putProductItem($id, $product_jsonld_product_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->putProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_jsonld_product_write** | [**\Vilo\ProductService\Model\ProductJsonldProductWrite**](../Model/ProductJsonldProductWrite.md)| The updated Product resource |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `typeAttributeGetCollectionProductCollection()`

```php
typeAttributeGetCollectionProductCollection($page, $items_per_page): \Vilo\ProductService\Model\InlineResponse2009
```

Get a collection of Attribute Type for the Product entity.

Get a collection of Attribute Type for the Product entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->typeAttributeGetCollectionProductCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->typeAttributeGetCollectionProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `typeAttributeGetItemProductItem()`

```php
typeAttributeGetItemProductItem($id): \Vilo\ProductService\Model\TypeAttributeJsonldAttributeRead
```

Get an Attribute Type for the Product entity.

Get an Attribute Type for the Product entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The Attribute Type ID

try {
    $result = $apiInstance->typeAttributeGetItemProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->typeAttributeGetItemProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Attribute Type ID |

### Return type

[**\Vilo\ProductService\Model\TypeAttributeJsonldAttributeRead**](../Model/TypeAttributeJsonldAttributeRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateProductItem()`

```php
validateProductItem($id)
```

Validates a Product resource

Validates a Product resource. Validation checks all AttributeValue constraints and AttributeSet constraints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $apiInstance->validateProductItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->validateProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
