# # PluginConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**docker_version** | **string** | Docker Version used to create the plugin | [optional]
**description** | **string** |  |
**documentation** | **string** |  |
**interface** | [**\OpenAPI\Client\Model\PluginConfigInterface**](PluginConfigInterface.md) |  |
**entrypoint** | **string[]** |  |
**work_dir** | **string** |  |
**user** | [**\OpenAPI\Client\Model\PluginConfigUser**](PluginConfigUser.md) |  | [optional]
**network** | [**\OpenAPI\Client\Model\PluginConfigNetwork**](PluginConfigNetwork.md) |  |
**linux** | [**\OpenAPI\Client\Model\PluginConfigLinux**](PluginConfigLinux.md) |  |
**propagated_mount** | **string** |  |
**ipc_host** | **bool** |  |
**pid_host** | **bool** |  |
**mounts** | [**\OpenAPI\Client\Model\PluginMount[]**](PluginMount.md) |  |
**env** | [**\OpenAPI\Client\Model\PluginEnv[]**](PluginEnv.md) |  |
**args** | [**\OpenAPI\Client\Model\PluginConfigArgs**](PluginConfigArgs.md) |  |
**rootfs** | [**\OpenAPI\Client\Model\PluginConfigRootfs**](PluginConfigRootfs.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
