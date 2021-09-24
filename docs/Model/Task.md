# Task

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the task. | [optional] 
**version** | [**\Swagger\Client\Model\ObjectVersion**](ObjectVersion.md) |  | [optional] 
**created_at** | **string** |  | [optional] 
**updated_at** | **string** |  | [optional] 
**name** | **string** | Name of the task. | [optional] 
**labels** | **map[string,string]** | User-defined key/value metadata. | [optional] 
**spec** | [**\Swagger\Client\Model\TaskSpec**](TaskSpec.md) |  | [optional] 
**service_id** | **string** | The ID of the service this task is part of. | [optional] 
**slot** | **int** |  | [optional] 
**node_id** | **string** | The ID of the node that this task is on. | [optional] 
**assigned_generic_resources** | [**\Swagger\Client\Model\GenericResources**](GenericResources.md) |  | [optional] 
**status** | [**\Swagger\Client\Model\TaskStatus**](TaskStatus.md) |  | [optional] 
**desired_state** | [**\Swagger\Client\Model\TaskState**](TaskState.md) |  | [optional] 
**job_iteration** | [**\Swagger\Client\Model\ObjectVersion**](ObjectVersion.md) | If the Service this Task belongs to is a job-mode service, contains the JobIteration of the Service this Task was created for. Absent if the Task was created for a Replicated or Global Service. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


