# Vilo\ProductService\ProductGroupItemApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductGroupItemItem()**](ProductGroupItemApi.md#deleteProductGroupItemItem) | **DELETE** /product_group_items/{id} | Removes the ProductGroupItem resource.
[**getProductGroupItemCollection()**](ProductGroupItemApi.md#getProductGroupItemCollection) | **GET** /product_group_items | Retrieves the collection of ProductGroupItem resources.
[**getProductGroupItemItem()**](ProductGroupItemApi.md#getProductGroupItemItem) | **GET** /product_group_items/{id} | Retrieves a ProductGroupItem resource.
[**patchProductGroupItemItem()**](ProductGroupItemApi.md#patchProductGroupItemItem) | **PATCH** /product_group_items/{id} | Updates the ProductGroupItem resource.
[**postProductGroupItemCollection()**](ProductGroupItemApi.md#postProductGroupItemCollection) | **POST** /product_group_items | Creates a ProductGroupItem resource.
[**putProductGroupItemItem()**](ProductGroupItemApi.md#putProductGroupItemItem) | **PUT** /product_group_items/{id} | Replaces the ProductGroupItem resource.


## `deleteProductGroupItemItem()`

```php
deleteProductGroupItemItem($id)
```

Removes the ProductGroupItem resource.

Removes the ProductGroupItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $apiInstance->deleteProductGroupItemItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupItemApi->deleteProductGroupItemItem: ', $e->getMessage(), PHP_EOL;
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

## `getProductGroupItemCollection()`

```php
getProductGroupItemCollection($page, $items_per_page, $order_sequence, $fk_product, $fk_product2, $fk_product_group, $fk_product_group2): \Vilo\ProductService\Model\InlineResponse2001
```

Retrieves the collection of ProductGroupItem resources.

Retrieves the collection of ProductGroupItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$order_sequence = 'order_sequence_example'; // string
$fk_product = 'fk_product_example'; // string
$fk_product2 = array('fk_product_example'); // string[]
$fk_product_group = 'fk_product_group_example'; // string
$fk_product_group2 = array('fk_product_group_example'); // string[]

try {
    $result = $apiInstance->getProductGroupItemCollection($page, $items_per_page, $order_sequence, $fk_product, $fk_product2, $fk_product_group, $fk_product_group2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupItemApi->getProductGroupItemCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]
 **order_sequence** | **string**|  | [optional]
 **fk_product** | **string**|  | [optional]
 **fk_product2** | [**string[]**](../Model/string.md)|  | [optional]
 **fk_product_group** | **string**|  | [optional]
 **fk_product_group2** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductGroupItemItem()`

```php
getProductGroupItemItem($id): \Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead
```

Retrieves a ProductGroupItem resource.

Retrieves a ProductGroupItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->getProductGroupItemItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupItemApi->getProductGroupItemItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead**](../Model/ProductGroupItemJsonldProductGroupItemRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProductGroupItemItem()`

```php
patchProductGroupItemItem($id, $product_group_item_jsonld_product_group_item_read): \Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead
```

Updates the ProductGroupItem resource.

Updates the ProductGroupItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$product_group_item_jsonld_product_group_item_read = new \Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead(); // \Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead | The updated ProductGroupItem resource

try {
    $result = $apiInstance->patchProductGroupItemItem($id, $product_group_item_jsonld_product_group_item_read);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupItemApi->patchProductGroupItemItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_group_item_jsonld_product_group_item_read** | [**\Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead**](../Model/ProductGroupItemJsonldProductGroupItemRead.md)| The updated ProductGroupItem resource |

### Return type

[**\Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead**](../Model/ProductGroupItemJsonldProductGroupItemRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`, `application/vnd.api+json`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductGroupItemCollection()`

```php
postProductGroupItemCollection($product_group_item_jsonld_product_group_item_read): \Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead
```

Creates a ProductGroupItem resource.

Creates a ProductGroupItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_group_item_jsonld_product_group_item_read = new \Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead(); // \Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead | The new ProductGroupItem resource

try {
    $result = $apiInstance->postProductGroupItemCollection($product_group_item_jsonld_product_group_item_read);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupItemApi->postProductGroupItemCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_group_item_jsonld_product_group_item_read** | [**\Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead**](../Model/ProductGroupItemJsonldProductGroupItemRead.md)| The new ProductGroupItem resource |

### Return type

[**\Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead**](../Model/ProductGroupItemJsonldProductGroupItemRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductGroupItemItem()`

```php
putProductGroupItemItem($id, $product_group_item_jsonld_product_group_item_read): \Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead
```

Replaces the ProductGroupItem resource.

Replaces the ProductGroupItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$product_group_item_jsonld_product_group_item_read = new \Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead(); // \Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead | The updated ProductGroupItem resource

try {
    $result = $apiInstance->putProductGroupItemItem($id, $product_group_item_jsonld_product_group_item_read);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupItemApi->putProductGroupItemItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_group_item_jsonld_product_group_item_read** | [**\Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead**](../Model/ProductGroupItemJsonldProductGroupItemRead.md)| The updated ProductGroupItem resource |

### Return type

[**\Vilo\ProductService\Model\ProductGroupItemJsonldProductGroupItemRead**](../Model/ProductGroupItemJsonldProductGroupItemRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
