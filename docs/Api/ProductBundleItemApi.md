# Vilo\ProductService\ProductBundleItemApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductBundleItemItem()**](ProductBundleItemApi.md#deleteProductBundleItemItem) | **DELETE** /product_bundle_items/{id} | Removes the ProductBundleItem resource.
[**getProductBundleItemCollection()**](ProductBundleItemApi.md#getProductBundleItemCollection) | **GET** /product_bundle_items | Retrieves the collection of ProductBundleItem resources.
[**getProductBundleItemItem()**](ProductBundleItemApi.md#getProductBundleItemItem) | **GET** /product_bundle_items/{id} | Retrieves a ProductBundleItem resource.
[**patchProductBundleItemItem()**](ProductBundleItemApi.md#patchProductBundleItemItem) | **PATCH** /product_bundle_items/{id} | Updates the ProductBundleItem resource.
[**postProductBundleItemCollection()**](ProductBundleItemApi.md#postProductBundleItemCollection) | **POST** /product_bundle_items | Creates a ProductBundleItem resource.
[**putProductBundleItemItem()**](ProductBundleItemApi.md#putProductBundleItemItem) | **PUT** /product_bundle_items/{id} | Replaces the ProductBundleItem resource.


## `deleteProductBundleItemItem()`

```php
deleteProductBundleItemItem($id)
```

Removes the ProductBundleItem resource.

Removes the ProductBundleItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductBundleItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $apiInstance->deleteProductBundleItemItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundleItemApi->deleteProductBundleItemItem: ', $e->getMessage(), PHP_EOL;
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

## `getProductBundleItemCollection()`

```php
getProductBundleItemCollection($page, $items_per_page, $order_sequence, $fk_product_parent, $fk_product_parent2, $fk_product_child, $fk_product_child2): \Vilo\ProductService\Model\InlineResponse200
```

Retrieves the collection of ProductBundleItem resources.

Retrieves the collection of ProductBundleItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductBundleItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$order_sequence = 'order_sequence_example'; // string
$fk_product_parent = 'fk_product_parent_example'; // string
$fk_product_parent2 = array('fk_product_parent_example'); // string[]
$fk_product_child = 'fk_product_child_example'; // string
$fk_product_child2 = array('fk_product_child_example'); // string[]

try {
    $result = $apiInstance->getProductBundleItemCollection($page, $items_per_page, $order_sequence, $fk_product_parent, $fk_product_parent2, $fk_product_child, $fk_product_child2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundleItemApi->getProductBundleItemCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]
 **order_sequence** | **string**|  | [optional]
 **fk_product_parent** | **string**|  | [optional]
 **fk_product_parent2** | [**string[]**](../Model/string.md)|  | [optional]
 **fk_product_child** | **string**|  | [optional]
 **fk_product_child2** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Vilo\ProductService\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductBundleItemItem()`

```php
getProductBundleItemItem($id): \Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead
```

Retrieves a ProductBundleItem resource.

Retrieves a ProductBundleItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductBundleItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->getProductBundleItemItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundleItemApi->getProductBundleItemItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead**](../Model/ProductBundleItemJsonldProductBundleItemRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProductBundleItemItem()`

```php
patchProductBundleItemItem($id, $product_bundle_item_jsonld_product_bundle_item_read): \Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead
```

Updates the ProductBundleItem resource.

Updates the ProductBundleItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductBundleItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$product_bundle_item_jsonld_product_bundle_item_read = new \Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead(); // \Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead | The updated ProductBundleItem resource

try {
    $result = $apiInstance->patchProductBundleItemItem($id, $product_bundle_item_jsonld_product_bundle_item_read);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundleItemApi->patchProductBundleItemItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_bundle_item_jsonld_product_bundle_item_read** | [**\Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead**](../Model/ProductBundleItemJsonldProductBundleItemRead.md)| The updated ProductBundleItem resource |

### Return type

[**\Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead**](../Model/ProductBundleItemJsonldProductBundleItemRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`, `application/vnd.api+json`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductBundleItemCollection()`

```php
postProductBundleItemCollection($product_bundle_item_jsonld_product_bundle_item_read): \Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead
```

Creates a ProductBundleItem resource.

Creates a ProductBundleItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductBundleItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_bundle_item_jsonld_product_bundle_item_read = new \Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead(); // \Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead | The new ProductBundleItem resource

try {
    $result = $apiInstance->postProductBundleItemCollection($product_bundle_item_jsonld_product_bundle_item_read);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundleItemApi->postProductBundleItemCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_bundle_item_jsonld_product_bundle_item_read** | [**\Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead**](../Model/ProductBundleItemJsonldProductBundleItemRead.md)| The new ProductBundleItem resource |

### Return type

[**\Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead**](../Model/ProductBundleItemJsonldProductBundleItemRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductBundleItemItem()`

```php
putProductBundleItemItem($id, $product_bundle_item_jsonld_product_bundle_item_read): \Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead
```

Replaces the ProductBundleItem resource.

Replaces the ProductBundleItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductBundleItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$product_bundle_item_jsonld_product_bundle_item_read = new \Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead(); // \Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead | The updated ProductBundleItem resource

try {
    $result = $apiInstance->putProductBundleItemItem($id, $product_bundle_item_jsonld_product_bundle_item_read);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundleItemApi->putProductBundleItemItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_bundle_item_jsonld_product_bundle_item_read** | [**\Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead**](../Model/ProductBundleItemJsonldProductBundleItemRead.md)| The updated ProductBundleItem resource |

### Return type

[**\Vilo\ProductService\Model\ProductBundleItemJsonldProductBundleItemRead**](../Model/ProductBundleItemJsonldProductBundleItemRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
