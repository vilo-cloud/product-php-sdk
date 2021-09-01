# Vilo\ProductService\TypeAttributeApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsTypeAttributeCreate()**](TypeAttributeApi.md#productsTypeAttributeCreate) | **POST** /products/type_attributes | Creates a Type Attribute for Product
[**typeAttributeGetCollectionProductCollection()**](TypeAttributeApi.md#typeAttributeGetCollectionProductCollection) | **GET** /products/type_attributes | Get a collection of Attribute Type for the Product entity.
[**typeAttributeGetItemProductItem()**](TypeAttributeApi.md#typeAttributeGetItemProductItem) | **GET** /products/type_attributes/{id} | Get an Attribute Type for the Product entity.


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



$apiInstance = new Vilo\ProductService\Api\TypeAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type_attribute_jsonld_attribute_write = new \Vilo\ProductService\Model\TypeAttributeJsonldAttributeWrite(); // \Vilo\ProductService\Model\TypeAttributeJsonldAttributeWrite | Creates a TypeAttribute on Product.

try {
    $result = $apiInstance->productsTypeAttributeCreate($type_attribute_jsonld_attribute_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypeAttributeApi->productsTypeAttributeCreate: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\TypeAttributeApi(
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
    echo 'Exception when calling TypeAttributeApi->typeAttributeGetCollectionProductCollection: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\TypeAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The Attribute Type ID

try {
    $result = $apiInstance->typeAttributeGetItemProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypeAttributeApi->typeAttributeGetItemProductItem: ', $e->getMessage(), PHP_EOL;
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
