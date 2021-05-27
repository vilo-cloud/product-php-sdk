# Vilo\ProductService\ProductApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveProductItem()**](ProductApi.md#approveProductItem) | **POST** /products/{id}/approve | approving a Product resource
[**deleteProductItem()**](ProductApi.md#deleteProductItem) | **DELETE** /products/{id} | Removes the Product resource.
[**disapproveProductItem()**](ProductApi.md#disapproveProductItem) | **POST** /products/{id}/disapprove | disapproving a Product resource
[**getProductCollection()**](ProductApi.md#getProductCollection) | **GET** /products | Retrieves the collection of Product resources.
[**getProductItem()**](ProductApi.md#getProductItem) | **GET** /products/{id} | Retrieves a Product resource.
[**patchProductItem()**](ProductApi.md#patchProductItem) | **PATCH** /products/{id} | Updates the Product resource.
[**postProductCollection()**](ProductApi.md#postProductCollection) | **POST** /products | Creates a Product resource.
[**putProductItem()**](ProductApi.md#putProductItem) | **PUT** /products/{id} | Replaces the Product resource.


## `approveProductItem()`

```php
approveProductItem($id): \Vilo\ProductService\Model\ProductJsonld
```

approving a Product resource

approving a Product resource

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
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

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

disapproving a Product resource

disapproving a Product resource

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
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductCollection()`

```php
getProductCollection($page, $items_per_page, $order_id, $order_name, $order_sku, $order_is_active, $order_approved_at, $name, $sku, $ean, $ean2, $exists_approved_at, $is_active, $fk_attribute_set, $fk_attribute_set2, $is_part_of_a_bundle, $is_bundle): \Vilo\ProductService\Model\InlineResponse2004
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
$order_name = 'order_name_example'; // string
$order_sku = 'order_sku_example'; // string
$order_is_active = 'order_is_active_example'; // string
$order_approved_at = 'order_approved_at_example'; // string
$name = 'name_example'; // string
$sku = 'sku_example'; // string
$ean = 'ean_example'; // string
$ean2 = array('ean_example'); // string[]
$exists_approved_at = True; // bool
$is_active = True; // bool
$fk_attribute_set = 'fk_attribute_set_example'; // string
$fk_attribute_set2 = array('fk_attribute_set_example'); // string[]
$is_part_of_a_bundle = True; // bool
$is_bundle = True; // bool

try {
    $result = $apiInstance->getProductCollection($page, $items_per_page, $order_id, $order_name, $order_sku, $order_is_active, $order_approved_at, $name, $sku, $ean, $ean2, $exists_approved_at, $is_active, $fk_attribute_set, $fk_attribute_set2, $is_part_of_a_bundle, $is_bundle);
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
 **order_name** | **string**|  | [optional]
 **order_sku** | **string**|  | [optional]
 **order_is_active** | **string**|  | [optional]
 **order_approved_at** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **sku** | **string**|  | [optional]
 **ean** | **string**|  | [optional]
 **ean2** | [**string[]**](../Model/string.md)|  | [optional]
 **exists_approved_at** | **bool**|  | [optional]
 **is_active** | **bool**|  | [optional]
 **fk_attribute_set** | **string**|  | [optional]
 **fk_attribute_set2** | [**string[]**](../Model/string.md)|  | [optional]
 **is_part_of_a_bundle** | **bool**|  | [optional]
 **is_bundle** | **bool**|  | [optional]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

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
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProductItem()`

```php
patchProductItem($id, $product_jsonld): \Vilo\ProductService\Model\ProductJsonld
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
$product_jsonld = new \Vilo\ProductService\Model\ProductJsonld(); // \Vilo\ProductService\Model\ProductJsonld | The updated Product resource

try {
    $result = $apiInstance->patchProductItem($id, $product_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->patchProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_jsonld** | [**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)| The updated Product resource |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`, `application/vnd.api+json`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductCollection()`

```php
postProductCollection($product_jsonld): \Vilo\ProductService\Model\ProductJsonld
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
$product_jsonld = new \Vilo\ProductService\Model\ProductJsonld(); // \Vilo\ProductService\Model\ProductJsonld | The new Product resource

try {
    $result = $apiInstance->postProductCollection($product_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->postProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_jsonld** | [**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)| The new Product resource |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductItem()`

```php
putProductItem($id, $product_jsonld): \Vilo\ProductService\Model\ProductJsonld
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
$product_jsonld = new \Vilo\ProductService\Model\ProductJsonld(); // \Vilo\ProductService\Model\ProductJsonld | The updated Product resource

try {
    $result = $apiInstance->putProductItem($id, $product_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->putProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **product_jsonld** | [**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)| The updated Product resource |

### Return type

[**\Vilo\ProductService\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
