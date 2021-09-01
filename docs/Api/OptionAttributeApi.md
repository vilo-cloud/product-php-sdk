# Vilo\ProductService\OptionAttributeApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**optionAttributeGetCollectionProductCollection()**](OptionAttributeApi.md#optionAttributeGetCollectionProductCollection) | **GET** /products/option_attributes | Retrieves the collection of Product resources.
[**optionAttributeGetItemProductItem()**](OptionAttributeApi.md#optionAttributeGetItemProductItem) | **GET** /products/option_attributes/{id} | Retrieves a Product resource.
[**productsOptionAttributeCreate()**](OptionAttributeApi.md#productsOptionAttributeCreate) | **POST** /products/option_attributes | Creates a Option Attribute for Product


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



$apiInstance = new Vilo\ProductService\Api\OptionAttributeApi(
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
    echo 'Exception when calling OptionAttributeApi->optionAttributeGetCollectionProductCollection: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\OptionAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->optionAttributeGetItemProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionAttributeApi->optionAttributeGetItemProductItem: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vilo\ProductService\Api\OptionAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$option_attribute_jsonld_attribute_write = new \Vilo\ProductService\Model\OptionAttributeJsonldAttributeWrite(); // \Vilo\ProductService\Model\OptionAttributeJsonldAttributeWrite | Creates a OptionAttribute on Product.

try {
    $result = $apiInstance->productsOptionAttributeCreate($option_attribute_jsonld_attribute_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionAttributeApi->productsOptionAttributeCreate: ', $e->getMessage(), PHP_EOL;
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
