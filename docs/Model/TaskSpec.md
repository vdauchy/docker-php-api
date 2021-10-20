# # TaskSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plugin_spec** | [**\OpenAPI\Client\Model\TaskSpecPluginSpec**](TaskSpecPluginSpec.md) |  | [optional]
**container_spec** | [**\OpenAPI\Client\Model\TaskSpecContainerSpec**](TaskSpecContainerSpec.md) |  | [optional]
**network_attachment_spec** | [**\OpenAPI\Client\Model\TaskSpecNetworkAttachmentSpec**](TaskSpecNetworkAttachmentSpec.md) |  | [optional]
**resources** | [**\OpenAPI\Client\Model\TaskSpecResources**](TaskSpecResources.md) |  | [optional]
**restart_policy** | [**\OpenAPI\Client\Model\TaskSpecRestartPolicy**](TaskSpecRestartPolicy.md) |  | [optional]
**placement** | [**\OpenAPI\Client\Model\TaskSpecPlacement**](TaskSpecPlacement.md) |  | [optional]
**force_update** | **int** | A counter that triggers an update even if no relevant parameters have been changed. | [optional]
**runtime** | **string** | Runtime is the type of runtime specified for the task executor. | [optional]
**networks** | [**\OpenAPI\Client\Model\NetworkAttachmentConfig[]**](NetworkAttachmentConfig.md) | Specifies which networks the service should attach to. | [optional]
**log_driver** | [**\OpenAPI\Client\Model\TaskSpecLogDriver**](TaskSpecLogDriver.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
