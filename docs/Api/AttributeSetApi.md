# Vilo\ProductService\AttributeSetApi

All URIs are relative to https://product-service.staging.vilo.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**attributeSetAssignProductItem()**](AttributeSetApi.md#attributeSetAssignProductItem) | **PUT** /products/attribute_sets/{id}/assign_attribute/{attributeReferenceId} | Assign an Attribute to an Attribute Set for the Product entity.
[**attributeSetGetCollectionProductCollection()**](AttributeSetApi.md#attributeSetGetCollectionProductCollection) | **GET** /products/attribute_sets | Get a collection of Attribute Set for the Product entity.
[**attributeSetGetItemProductItem()**](AttributeSetApi.md#attributeSetGetItemProductItem) | **GET** /products/attribute_sets/{id} | Get an Attribute Set for the Product entity.
[**attributeSetMakeDefaultProductItem()**](AttributeSetApi.md#attributeSetMakeDefaultProductItem) | **PUT** /products/attribute_sets/{id}/make_default | Set an Attribute Set as default for the Product entity.
[**productsAttributeSetCreate()**](AttributeSetApi.md#productsAttributeSetCreate) | **POST** /products/attribute_sets | Creates a Attribute Set for Product


## `attributeSetAssignProductItem()`

```php
attributeSetAssignProductItem($id, $attribute_reference_id): \Vilo\ProductService\Model\AttributeSetJsonldRead
```

Assign an Attribute to an Attribute Set for the Product entity.

Replace {attributeReferenceI} with the Attribute ID and {id} with Attribute Set ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\AttributeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The Attribute Set ID
$attribute_reference_id = 'attribute_reference_id_example'; // string | The Attribute Reference ID

try {
    $result = $apiInstance->attributeSetAssignProductItem($id, $attribute_reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeSetApi->attributeSetAssignProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Attribute Set ID |
 **attribute_reference_id** | **string**| The Attribute Reference ID |

### Return type

[**\Vilo\ProductService\Model\AttributeSetJsonldRead**](../Model/AttributeSetJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeSetGetCollectionProductCollection()`

```php
attributeSetGetCollectionProductCollection($page, $items_per_page): \Vilo\ProductService\Model\InlineResponse2007
```

Get a collection of Attribute Set for the Product entity.

Get an Attribute Set collection for the Product entity.

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
    $result = $apiInstance->attributeSetGetCollectionProductCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeSetApi->attributeSetGetCollectionProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]

### Return type

[**\Vilo\ProductService\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeSetGetItemProductItem()`

```php
attributeSetGetItemProductItem($id): \Vilo\ProductService\Model\AttributeSetJsonldRead
```

Get an Attribute Set for the Product entity.

Get an Attribute Set for the Product entity.

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
    $result = $apiInstance->attributeSetGetItemProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeSetApi->attributeSetGetItemProductItem: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeSetMakeDefaultProductItem()`

```php
attributeSetMakeDefaultProductItem($id): \Vilo\ProductService\Model\AttributeSetJsonldRead
```

Set an Attribute Set as default for the Product entity.

This attribute set will be added by default to new entities if no attribute set is specified at creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vilo\ProductService\Api\AttributeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The Attribute Set ID to make default.

try {
    $result = $apiInstance->attributeSetMakeDefaultProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeSetApi->attributeSetMakeDefaultProductItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Attribute Set ID to make default. |

### Return type

[**\Vilo\ProductService\Model\AttributeSetJsonldRead**](../Model/AttributeSetJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsAttributeSetCreate()`

```php
productsAttributeSetCreate($attribute_set_jsonld_write): \Vilo\ProductService\Model\AttributeSetJsonldRead
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
$attribute_set_jsonld_write = new \Vilo\ProductService\Model\AttributeSetJsonldWrite(); // \Vilo\ProductService\Model\AttributeSetJsonldWrite | Creates a AttributeSet on Product.

try {
    $result = $apiInstance->productsAttributeSetCreate($attribute_set_jsonld_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeSetApi->productsAttributeSetCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_jsonld_write** | [**\Vilo\ProductService\Model\AttributeSetJsonldWrite**](../Model/AttributeSetJsonldWrite.md)| Creates a AttributeSet on Product. | [optional]

### Return type

[**\Vilo\ProductService\Model\AttributeSetJsonldRead**](../Model/AttributeSetJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`
- **Accept**: `application/ld+json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
