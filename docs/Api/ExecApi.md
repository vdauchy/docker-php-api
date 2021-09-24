# Swagger\Client\ExecApi

All URIs are relative to *http://localhost/v1.39*

Method | HTTP request | Description
------------- | ------------- | -------------
[**containerExec**](ExecApi.md#containerExec) | **POST** /containers/{id}/exec | Create an exec instance
[**execInspect**](ExecApi.md#execInspect) | **GET** /exec/{id}/json | Inspect an exec instance
[**execResize**](ExecApi.md#execResize) | **POST** /exec/{id}/resize | Resize an exec instance
[**execStart**](ExecApi.md#execStart) | **POST** /exec/{id}/start | Start an exec instance


# **containerExec**
> \Swagger\Client\Model\IdResponse containerExec($exec_config, $id)

Create an exec instance

Run a command inside a running container.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exec_config = new \Swagger\Client\Model\ExecConfig(); // \Swagger\Client\Model\ExecConfig | Exec configuration
$id = "id_example"; // string | ID or name of container

try {
    $result = $apiInstance->containerExec($exec_config, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecApi->containerExec: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exec_config** | [**\Swagger\Client\Model\ExecConfig**](../Model/ExecConfig.md)| Exec configuration |
 **id** | **string**| ID or name of container |

### Return type

[**\Swagger\Client\Model\IdResponse**](../Model/IdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **execInspect**
> \Swagger\Client\Model\ExecInspectResponse execInspect($id)

Inspect an exec instance

Return low-level information about an exec instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Exec instance ID

try {
    $result = $apiInstance->execInspect($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecApi->execInspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Exec instance ID |

### Return type

[**\Swagger\Client\Model\ExecInspectResponse**](../Model/ExecInspectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **execResize**
> execResize($id, $h, $w)

Resize an exec instance

Resize the TTY session used by an exec instance. This endpoint only works if `tty` was specified as part of creating and starting the exec instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Exec instance ID
$h = 56; // int | Height of the TTY session in characters
$w = 56; // int | Width of the TTY session in characters

try {
    $apiInstance->execResize($id, $h, $w);
} catch (Exception $e) {
    echo 'Exception when calling ExecApi->execResize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Exec instance ID |
 **h** | **int**| Height of the TTY session in characters | [optional]
 **w** | **int**| Width of the TTY session in characters | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **execStart**
> execStart($id, $exec_start_config)

Start an exec instance

Starts a previously set up exec instance. If detach is true, this endpoint returns immediately after starting the command. Otherwise, it sets up an interactive session with the command.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Exec instance ID
$exec_start_config = new \Swagger\Client\Model\ExecStartConfig(); // \Swagger\Client\Model\ExecStartConfig | 

try {
    $apiInstance->execStart($id, $exec_start_config);
} catch (Exception $e) {
    echo 'Exception when calling ExecApi->execStart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Exec instance ID |
 **exec_start_config** | [**\Swagger\Client\Model\ExecStartConfig**](../Model/ExecStartConfig.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.docker.raw-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

