# Vilo\ProductService\ProductGroupApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductGroupItem()**](ProductGroupApi.md#deleteProductGroupItem) | **DELETE** /product_groups/{id} | Removes the ProductGroup resource.
[**getProductGroupCollection()**](ProductGroupApi.md#getProductGroupCollection) | **GET** /product_groups | Retrieves the collection of ProductGroup resources.
[**getProductGroupItem()**](ProductGroupApi.md#getProductGroupItem) | **GET** /product_groups/{id} | Retrieves a ProductGroup resource.
[**patchProductGroupItem()**](ProductGroupApi.md#patchProductGroupItem) | **PATCH** /product_groups/{id} | Updates the ProductGroup resource.
[**postProductGroupCollection()**](ProductGroupApi.md#postProductGroupCollection) | **POST** /product_groups | Creates a ProductGroup resource.
[**putProductGroupItem()**](ProductGroupApi.md#putProductGroupItem) | **PUT** /product_groups/{id} | Replaces the ProductGroup resource.


## `deleteProductGroupItem()`

```php
deleteProductGroupItem($id)
```

Removes the ProductGroup resource.

Removes the ProductGroup resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $apiInstance->deleteProductGroupItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->deleteProductGroupItem: ', $e->getMessage(), PHP_EOL;
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

## `getProductGroupCollection()`

```php
getProductGroupCollection($page, $items_per_page, $name, $fk_product_group_type, $fk_product_group_type2, $product_group_items, $product_group_items2, $has_group_items): \Vilo\ProductService\Model\InlineResponse2003
```

Retrieves the collection of ProductGroup resources.

Retrieves the collection of ProductGroup resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$name = 'name_example'; // string
$fk_product_group_type = 'fk_product_group_type_example'; // string
$fk_product_group_type2 = array('fk_product_group_type_example'); // string[]
$product_group_items = 'product_group_items_example'; // string
$product_group_items2 = array('product_group_items_example'); // string[]
$has_group_items = True; // bool

try {
    $result = $apiInstance->getProductGroupCollection($page, $items_per_page, $name, $fk_product_group_type, $fk_product_group_type2, $product_group_items, $product_group_items2, $has_group_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->getProductGroupCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]
 **name** | **string**|  | [optional]
 **fk_product_group_type** | **string**|  | [optional]
 **fk_product_group_type2** | [**string[]**](../Model/string.md)|  | [optional]
 **product_group_items** | **string**|  | [optional]
 **product_group_items2** | [**string[]**](../Model/string.md)|  | [optional]
 **has_group_items** | **bool**|  | [optional]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductGroupItem()`

```php
getProductGroupItem($id): \Vilo\ProductService\Model\ProductGroupJsonld
```

Retrieves a ProductGroup resource.

Retrieves a ProductGroup resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->getProductGroupItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->getProductGroupItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\ProductGroupJsonld**](../Model/ProductGroupJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProductGroupItem()`

```php
patchProductGroupItem($id, $product_group): \Vilo\ProductService\Model\ProductGroupJsonld
```

Updates the ProductGroup resource.

Updates the ProductGroup resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$product_group = new \Vilo\ProductService\Model\ProductGroup(); // \Vilo\ProductService\Model\ProductGroup | The updated ProductGroup resource

try {
    $result = $apiInstance->patchProductGroupItem($id, $product_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->patchProductGroupItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_group** | [**\Vilo\ProductService\Model\ProductGroup**](../Model/ProductGroup.md)| The updated ProductGroup resource |

### Return type

[**\Vilo\ProductService\Model\ProductGroupJsonld**](../Model/ProductGroupJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductGroupCollection()`

```php
postProductGroupCollection($product_group_jsonld): \Vilo\ProductService\Model\ProductGroupJsonld
```

Creates a ProductGroup resource.

Creates a ProductGroup resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_group_jsonld = new \Vilo\ProductService\Model\ProductGroupJsonld(); // \Vilo\ProductService\Model\ProductGroupJsonld | The new ProductGroup resource

try {
    $result = $apiInstance->postProductGroupCollection($product_group_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->postProductGroupCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_group_jsonld** | [**\Vilo\ProductService\Model\ProductGroupJsonld**](../Model/ProductGroupJsonld.md)| The new ProductGroup resource |

### Return type

[**\Vilo\ProductService\Model\ProductGroupJsonld**](../Model/ProductGroupJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductGroupItem()`

```php
putProductGroupItem($id, $product_group_jsonld): \Vilo\ProductService\Model\ProductGroupJsonld
```

Replaces the ProductGroup resource.

Replaces the ProductGroup resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$product_group_jsonld = new \Vilo\ProductService\Model\ProductGroupJsonld(); // \Vilo\ProductService\Model\ProductGroupJsonld | The updated ProductGroup resource

try {
    $result = $apiInstance->putProductGroupItem($id, $product_group_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->putProductGroupItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_group_jsonld** | [**\Vilo\ProductService\Model\ProductGroupJsonld**](../Model/ProductGroupJsonld.md)| The updated ProductGroup resource |

### Return type

[**\Vilo\ProductService\Model\ProductGroupJsonld**](../Model/ProductGroupJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
