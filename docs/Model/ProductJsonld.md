# # ProductJsonld

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**context** | [**OneOfStringMap**](OneOfStringMap.md) |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**approved_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**is_active** | **bool** |  | [optional] [readonly]
**product_group_items** | **string[]** |  | [optional]
**product_bundle_children** | **string[]** |  | [optional]
**product_bundle_parents** | **string[]** |  | [optional]
**attribute_sets** | **string[]** | TODO sending attribute sets with the request payload is out of the scope of the POC. | [optional] [readonly]
**is_bundle** | **bool** | ApiFilter(BooleanFilter::class). | [optional] [readonly]
**is_part_of_a_bundle** | **bool** | ApiFilter(BooleanFilter::class). | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
