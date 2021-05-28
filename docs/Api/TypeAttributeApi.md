# Vilo\ProductService\TypeAttributeApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsAttributesGetItemTypeAttributeItem()**](TypeAttributeApi.md#productsAttributesGetItemTypeAttributeItem) | **GET** /products/type-attributes/{id} | Retrieves a TypeAttribute resource.
[**productsTypeAttributeCreate()**](TypeAttributeApi.md#productsTypeAttributeCreate) | **POST** /products/type-attributes | Creates a Type Attribute for Product
[**productsTypeAttributeGetCollectionTypeAttributeCollection()**](TypeAttributeApi.md#productsTypeAttributeGetCollectionTypeAttributeCollection) | **GET** /products/type-attributes | Retrieves the collection of TypeAttribute resources.


## `productsAttributesGetItemTypeAttributeItem()`

```php
productsAttributesGetItemTypeAttributeItem($id): \Vilo\ProductService\Model\TypeAttributeJsonldProductTypeAttributeRead
```

Retrieves a TypeAttribute resource.

Retrieves a TypeAttribute resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\TypeAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->productsAttributesGetItemTypeAttributeItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypeAttributeApi->productsAttributesGetItemTypeAttributeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\TypeAttributeJsonldProductTypeAttributeRead**](../Model/TypeAttributeJsonldProductTypeAttributeRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsTypeAttributeCreate()`

```php
productsTypeAttributeCreate($type_attribute_product_create): \Vilo\ProductService\Model\InlineResponse2006
```

Creates a Type Attribute for Product

Creates a Type Attribute for Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\TypeAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type_attribute_product_create = new \Vilo\ProductService\Model\TypeAttributeProductCreate(); // \Vilo\ProductService\Model\TypeAttributeProductCreate | New Product Type Attribute

try {
    $result = $apiInstance->productsTypeAttributeCreate($type_attribute_product_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypeAttributeApi->productsTypeAttributeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_attribute_product_create** | [**\Vilo\ProductService\Model\TypeAttributeProductCreate**](../Model/TypeAttributeProductCreate.md)| New Product Type Attribute | [optional]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsTypeAttributeGetCollectionTypeAttributeCollection()`

```php
productsTypeAttributeGetCollectionTypeAttributeCollection($page, $items_per_page): \Vilo\ProductService\Model\InlineResponse2006
```

Retrieves the collection of TypeAttribute resources.

Retrieves the collection of TypeAttribute resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\TypeAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->productsTypeAttributeGetCollectionTypeAttributeCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypeAttributeApi->productsTypeAttributeGetCollectionTypeAttributeCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
