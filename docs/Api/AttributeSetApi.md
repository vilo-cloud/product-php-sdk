# Vilo\ProductService\AttributeSetApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsAttributeSetAssignAttributeAttributeSetItem()**](AttributeSetApi.md#productsAttributeSetAssignAttributeAttributeSetItem) | **POST** /products/attribute-sets/{set}/assign-attribute/{attribute} | Assign an Attribute to a Attribute Set for Product
[**productsAttributeSetCreate()**](AttributeSetApi.md#productsAttributeSetCreate) | **POST** /products/attribute-sets | Creates a Attribute Set for Product
[**productsAttributeSetCreateAttributeSetCollection()**](AttributeSetApi.md#productsAttributeSetCreateAttributeSetCollection) | **GET** /products/attribute-sets | Retrieves the collection of AttributeSet resources.
[**productsAttributeSetGetItemAttributeSetItem()**](AttributeSetApi.md#productsAttributeSetGetItemAttributeSetItem) | **GET** /products/attribute-sets/{id} | Retrieves a AttributeSet resource.


## `productsAttributeSetAssignAttributeAttributeSetItem()`

```php
productsAttributeSetAssignAttributeAttributeSetItem($set, $attribute): \Vilo\ProductService\Model\AttributeSetJsonldRead
```

Assign an Attribute to a Attribute Set for Product

Replace {attribute} with the Attribute ID and {set} with Attribute Set ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\AttributeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set = 'set_example'; // string | The Attribute Set ID
$attribute = 'attribute_example'; // string | The Attribute ID

try {
    $result = $apiInstance->productsAttributeSetAssignAttributeAttributeSetItem($set, $attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeSetApi->productsAttributeSetAssignAttributeAttributeSetItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set** | **string**| The Attribute Set ID |
 **attribute** | **string**| The Attribute ID |

### Return type

[**\Vilo\ProductService\Model\AttributeSetJsonldRead**](../Model/AttributeSetJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsAttributeSetCreate()`

```php
productsAttributeSetCreate($attribute_set_product_create): \Vilo\ProductService\Model\InlineResponse2005
```

Creates a Attribute Set for Product

Creates a Attribute Set for Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\AttributeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_set_product_create = new \Vilo\ProductService\Model\AttributeSetProductCreate(); // \Vilo\ProductService\Model\AttributeSetProductCreate | New Product Attribute Set

try {
    $result = $apiInstance->productsAttributeSetCreate($attribute_set_product_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeSetApi->productsAttributeSetCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_product_create** | [**\Vilo\ProductService\Model\AttributeSetProductCreate**](../Model/AttributeSetProductCreate.md)| New Product Attribute Set | [optional]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsAttributeSetCreateAttributeSetCollection()`

```php
productsAttributeSetCreateAttributeSetCollection($page, $items_per_page): \Vilo\ProductService\Model\InlineResponse2005
```

Retrieves the collection of AttributeSet resources.

Retrieves the collection of AttributeSet resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\AttributeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page

try {
    $result = $apiInstance->productsAttributeSetCreateAttributeSetCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeSetApi->productsAttributeSetCreateAttributeSetCollection: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsAttributeSetGetItemAttributeSetItem()`

```php
productsAttributeSetGetItemAttributeSetItem($id): \Vilo\ProductService\Model\AttributeSetJsonldRead
```

Retrieves a AttributeSet resource.

Retrieves a AttributeSet resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\AttributeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->productsAttributeSetGetItemAttributeSetItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeSetApi->productsAttributeSetGetItemAttributeSetItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Vilo\ProductService\Model\AttributeSetJsonldRead**](../Model/AttributeSetJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `application/xml`, `text/xml`, `application/x-yaml`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
