# # ServiceSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the service. | [optional]
**labels** | **array<string,string>** | User-defined key/value metadata. | [optional]
**task_template** | [**\OpenAPI\Client\Model\TaskSpec**](TaskSpec.md) |  | [optional]
**mode** | [**\OpenAPI\Client\Model\ServiceSpecMode**](ServiceSpecMode.md) |  | [optional]
**update_config** | [**\OpenAPI\Client\Model\ServiceSpecUpdateConfig**](ServiceSpecUpdateConfig.md) |  | [optional]
**rollback_config** | [**\OpenAPI\Client\Model\ServiceSpecRollbackConfig**](ServiceSpecRollbackConfig.md) |  | [optional]
**networks** | [**\OpenAPI\Client\Model\NetworkAttachmentConfig[]**](NetworkAttachmentConfig.md) | Specifies which networks the service should attach to. | [optional]
**endpoint_spec** | [**\OpenAPI\Client\Model\EndpointSpec**](EndpointSpec.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
