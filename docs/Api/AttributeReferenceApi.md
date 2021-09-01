# Vilo\ProductService\AttributeReferenceApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**attributeReferenceGetCollectionProductCollection()**](AttributeReferenceApi.md#attributeReferenceGetCollectionProductCollection) | **GET** /products/attribute_references | Get a collection of Attribute References for the Product entity.
[**attributeReferenceGetItemProductItem()**](AttributeReferenceApi.md#attributeReferenceGetItemProductItem) | **GET** /products/attribute_references/{id} | Retrieves a Product resource.


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



$apiInstance = new Vilo\ProductService\Api\AttributeReferenceApi(
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
    echo 'Exception when calling AttributeReferenceApi->attributeReferenceGetCollectionProductCollection: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\AttributeReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->attributeReferenceGetItemProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeReferenceApi->attributeReferenceGetItemProductItem: ', $e->getMessage(), PHP_EOL;
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
