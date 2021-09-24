# TaskSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plugin_spec** | [**\Swagger\Client\Model\TaskSpecPluginSpec**](TaskSpecPluginSpec.md) |  | [optional] 
**container_spec** | [**\Swagger\Client\Model\TaskSpecContainerSpec**](TaskSpecContainerSpec.md) |  | [optional] 
**network_attachment_spec** | [**\Swagger\Client\Model\TaskSpecNetworkAttachmentSpec**](TaskSpecNetworkAttachmentSpec.md) |  | [optional] 
**resources** | [**\Swagger\Client\Model\TaskSpecResources**](TaskSpecResources.md) |  | [optional] 
**restart_policy** | [**\Swagger\Client\Model\TaskSpecRestartPolicy**](TaskSpecRestartPolicy.md) |  | [optional] 
**placement** | [**\Swagger\Client\Model\TaskSpecPlacement**](TaskSpecPlacement.md) |  | [optional] 
**force_update** | **int** | A counter that triggers an update even if no relevant parameters have been changed. | [optional] 
**runtime** | **string** | Runtime is the type of runtime specified for the task executor. | [optional] 
**networks** | [**\Swagger\Client\Model\NetworkAttachmentConfig[]**](NetworkAttachmentConfig.md) | Specifies which networks the service should attach to. | [optional] 
**log_driver** | [**\Swagger\Client\Model\TaskSpecLogDriver**](TaskSpecLogDriver.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


