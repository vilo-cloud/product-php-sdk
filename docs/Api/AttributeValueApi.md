# Vilo\ProductService\AttributeValueApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**attributableGetAttributeValuesProductSubresource()**](AttributeValueApi.md#attributableGetAttributeValuesProductSubresource) | **GET** /products/{id}/attribute_values | Get All the AttributeValues for the entity Product with {id}
[**attributeValueAssignProductItem()**](AttributeValueApi.md#attributeValueAssignProductItem) | **PUT** /products/{id}/assign_attribute_value/{attributeValueId} | Assign attribute value to a Product entity.
[**attributeValueCreateProductCollection()**](AttributeValueApi.md#attributeValueCreateProductCollection) | **POST** /products/attributes/{attributeReferenceId}/attribute_values | Add an AttributeValue for an Attribute on the Product entity.
[**attributeValueGetProductCollection()**](AttributeValueApi.md#attributeValueGetProductCollection) | **GET** /products/attribute_references/{attributeReferenceId}/attribute_values | Get the AttributeValues for an Attribute on the Product entity.
[**attributeValueGetProductItem()**](AttributeValueApi.md#attributeValueGetProductItem) | **GET** /products/attribute_references/{attributeReferenceId}/attribute_values/{id} | Retrieves a Product resource.
[**attributeValueUnassignProductItem()**](AttributeValueApi.md#attributeValueUnassignProductItem) | **PUT** /products/{id}/unassign_attribute_value/{attributeValueId} | Unassign attribute value from a Product entity.
[**attributeValueUpdateProductItem()**](AttributeValueApi.md#attributeValueUpdateProductItem) | **PUT** /products/attributes/attribute_values/{attributeValueId} | Update an AttributeValue for an Attribute on the Product entity.


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



$apiInstance = new Vilo\ProductService\Api\AttributeValueApi(
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
    echo 'Exception when calling AttributeValueApi->attributableGetAttributeValuesProductSubresource: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\AttributeValueApi(
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
    echo 'Exception when calling AttributeValueApi->attributeValueAssignProductItem: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\AttributeValueApi(
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
    echo 'Exception when calling AttributeValueApi->attributeValueCreateProductCollection: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\AttributeValueApi(
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
    echo 'Exception when calling AttributeValueApi->attributeValueGetProductCollection: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\AttributeValueApi(
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
    echo 'Exception when calling AttributeValueApi->attributeValueGetProductItem: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\AttributeValueApi(
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
    echo 'Exception when calling AttributeValueApi->attributeValueUnassignProductItem: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\AttributeValueApi(
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
    echo 'Exception when calling AttributeValueApi->attributeValueUpdateProductItem: ', $e->getMessage(), PHP_EOL;
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
