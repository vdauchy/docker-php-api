# # Task

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the task. | [optional]
**version** | [**\OpenAPI\Client\Model\ObjectVersion**](ObjectVersion.md) |  | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]
**name** | **string** | Name of the task. | [optional]
**labels** | **array<string,string>** | User-defined key/value metadata. | [optional]
**spec** | [**\OpenAPI\Client\Model\TaskSpec**](TaskSpec.md) |  | [optional]
**service_id** | **string** | The ID of the service this task is part of. | [optional]
**slot** | **int** |  | [optional]
**node_id** | **string** | The ID of the node that this task is on. | [optional]
**assigned_generic_resources** | **object[]** | User-defined resources can be either Integer resources (e.g, &#x60;SSD&#x3D;3&#x60;) or String resources (e.g, &#x60;GPU&#x3D;UUID1&#x60;). | [optional]
**status** | [**\OpenAPI\Client\Model\TaskStatus**](TaskStatus.md) |  | [optional]
**desired_state** | [**\OpenAPI\Client\Model\TaskState**](TaskState.md) |  | [optional]
**job_iteration** | [**\OpenAPI\Client\Model\ObjectVersion**](ObjectVersion.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
