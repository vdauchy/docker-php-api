# # ContainerInspectResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the container | [optional]
**created** | **string** | The time the container was created | [optional]
**path** | **string** | The path to the command being run | [optional]
**args** | **string[]** | The arguments to the command being run | [optional]
**state** | [**\OpenAPI\Client\Model\ContainerState**](ContainerState.md) |  | [optional]
**image** | **string** | The container&#39;s image ID | [optional]
**resolv_conf_path** | **string** |  | [optional]
**hostname_path** | **string** |  | [optional]
**hosts_path** | **string** |  | [optional]
**log_path** | **string** |  | [optional]
**name** | **string** |  | [optional]
**restart_count** | **int** |  | [optional]
**driver** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**mount_label** | **string** |  | [optional]
**process_label** | **string** |  | [optional]
**app_armor_profile** | **string** |  | [optional]
**exec_ids** | **string[]** | IDs of exec instances that are running in the container. | [optional]
**host_config** | [**\OpenAPI\Client\Model\HostConfig**](HostConfig.md) |  | [optional]
**graph_driver** | [**\OpenAPI\Client\Model\GraphDriverData**](GraphDriverData.md) |  | [optional]
**size_rw** | **int** | The size of files that have been created or changed by this container. | [optional]
**size_root_fs** | **int** | The total size of all the files in this container. | [optional]
**mounts** | [**\OpenAPI\Client\Model\MountPoint[]**](MountPoint.md) |  | [optional]
**config** | [**\OpenAPI\Client\Model\ContainerConfig**](ContainerConfig.md) |  | [optional]
**network_settings** | [**\OpenAPI\Client\Model\NetworkSettings**](NetworkSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
