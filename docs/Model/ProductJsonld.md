# # ProductJsonld

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**name** | **string** |  |
**sku** | **string** |  |
**approved_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**is_active** | **bool** |  |
**ean** | **string** |  | [optional]
**fk_attribute_set** | **string** |  | [optional]
**product_group_items** | **string[]** |  | [optional]
**product_bundle_children** | **string[]** |  | [optional]
**product_bundle_parents** | **string[]** |  | [optional]
**is_bundle** | **bool** | ApiFilter(BooleanFilter::class). | [optional] [readonly]
**is_part_of_a_bundle** | **bool** | ApiFilter(BooleanFilter::class). | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
