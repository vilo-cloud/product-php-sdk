# Vilo\ProductService\ProductGroupTypeApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductGroupTypeItem()**](ProductGroupTypeApi.md#deleteProductGroupTypeItem) | **DELETE** /product_group_types/{id} | Removes the ProductGroupType resource.
[**getProductGroupTypeCollection()**](ProductGroupTypeApi.md#getProductGroupTypeCollection) | **GET** /product_group_types | Retrieves the collection of ProductGroupType resources.
[**getProductGroupTypeItem()**](ProductGroupTypeApi.md#getProductGroupTypeItem) | **GET** /product_group_types/{id} | Retrieves a ProductGroupType resource.
[**patchProductGroupTypeItem()**](ProductGroupTypeApi.md#patchProductGroupTypeItem) | **PATCH** /product_group_types/{id} | Updates the ProductGroupType resource.
[**postProductGroupTypeCollection()**](ProductGroupTypeApi.md#postProductGroupTypeCollection) | **POST** /product_group_types | Creates a ProductGroupType resource.
[**putProductGroupTypeItem()**](ProductGroupTypeApi.md#putProductGroupTypeItem) | **PUT** /product_group_types/{id} | Replaces the ProductGroupType resource.


## `deleteProductGroupTypeItem()`

```php
deleteProductGroupTypeItem($id)
```

Removes the ProductGroupType resource.

Removes the ProductGroupType resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $apiInstance->deleteProductGroupTypeItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupTypeApi->deleteProductGroupTypeItem: ', $e->getMessage(), PHP_EOL;
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

## `getProductGroupTypeCollection()`

```php
getProductGroupTypeCollection($page, $items_per_page, $key, $key2): \Vilo\ProductService\Model\InlineResponse2002
```

Retrieves the collection of ProductGroupType resources.

Retrieves the collection of ProductGroupType resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$key = 'key_example'; // string
$key2 = array('key_example'); // string[]

try {
    $result = $apiInstance->getProductGroupTypeCollection($page, $items_per_page, $key, $key2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupTypeApi->getProductGroupTypeCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]
 **key** | **string**|  | [optional]
 **key2** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductGroupTypeItem()`

```php
getProductGroupTypeItem($id): \Vilo\ProductService\Model\ProductGroupTypeJsonld
```

Retrieves a ProductGroupType resource.

Retrieves a ProductGroupType resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->getProductGroupTypeItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupTypeApi->getProductGroupTypeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\ProductGroupTypeJsonld**](../Model/ProductGroupTypeJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProductGroupTypeItem()`

```php
patchProductGroupTypeItem($id, $product_group_type_jsonld): \Vilo\ProductService\Model\ProductGroupTypeJsonld
```

Updates the ProductGroupType resource.

Updates the ProductGroupType resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$product_group_type_jsonld = new \Vilo\ProductService\Model\ProductGroupTypeJsonld(); // \Vilo\ProductService\Model\ProductGroupTypeJsonld | The updated ProductGroupType resource

try {
    $result = $apiInstance->patchProductGroupTypeItem($id, $product_group_type_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupTypeApi->patchProductGroupTypeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_group_type_jsonld** | [**\Vilo\ProductService\Model\ProductGroupTypeJsonld**](../Model/ProductGroupTypeJsonld.md)| The updated ProductGroupType resource |

### Return type

[**\Vilo\ProductService\Model\ProductGroupTypeJsonld**](../Model/ProductGroupTypeJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`, `application/vnd.api+json`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductGroupTypeCollection()`

```php
postProductGroupTypeCollection($product_group_type_jsonld): \Vilo\ProductService\Model\ProductGroupTypeJsonld
```

Creates a ProductGroupType resource.

Creates a ProductGroupType resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_group_type_jsonld = new \Vilo\ProductService\Model\ProductGroupTypeJsonld(); // \Vilo\ProductService\Model\ProductGroupTypeJsonld | The new ProductGroupType resource

try {
    $result = $apiInstance->postProductGroupTypeCollection($product_group_type_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupTypeApi->postProductGroupTypeCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_group_type_jsonld** | [**\Vilo\ProductService\Model\ProductGroupTypeJsonld**](../Model/ProductGroupTypeJsonld.md)| The new ProductGroupType resource |

### Return type

[**\Vilo\ProductService\Model\ProductGroupTypeJsonld**](../Model/ProductGroupTypeJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductGroupTypeItem()`

```php
putProductGroupTypeItem($id, $product_group_type_jsonld): \Vilo\ProductService\Model\ProductGroupTypeJsonld
```

Replaces the ProductGroupType resource.

Replaces the ProductGroupType resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$product_group_type_jsonld = new \Vilo\ProductService\Model\ProductGroupTypeJsonld(); // \Vilo\ProductService\Model\ProductGroupTypeJsonld | The updated ProductGroupType resource

try {
    $result = $apiInstance->putProductGroupTypeItem($id, $product_group_type_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupTypeApi->putProductGroupTypeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_group_type_jsonld** | [**\Vilo\ProductService\Model\ProductGroupTypeJsonld**](../Model/ProductGroupTypeJsonld.md)| The updated ProductGroupType resource |

### Return type

[**\Vilo\ProductService\Model\ProductGroupTypeJsonld**](../Model/ProductGroupTypeJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
