# TaskSpecPlacement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**constraints** | **string[]** | An array of constraints. | [optional] 
**preferences** | [**\Swagger\Client\Model\TaskSpecPlacementPreferences[]**](TaskSpecPlacementPreferences.md) | Preferences provide a way to make the scheduler aware of factors such as topology. They are provided in order from highest to lowest precedence. | [optional] 
**platforms** | [**\Swagger\Client\Model\Platform[]**](Platform.md) | Platforms stores all the platforms that the service&#39;s image can run on. This field is used in the platform filter for scheduling. If empty, then the platform filter is off, meaning there are no scheduling restrictions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


