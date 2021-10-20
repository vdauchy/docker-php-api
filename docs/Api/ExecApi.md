# OpenAPI\Client\ExecApi

All URIs are relative to http://localhost/v1.41.

Method | HTTP request | Description
------------- | ------------- | -------------
[**containerExec()**](ExecApi.md#containerExec) | **POST** /containers/{id}/exec | Create an exec instance
[**execInspect()**](ExecApi.md#execInspect) | **GET** /exec/{id}/json | Inspect an exec instance
[**execResize()**](ExecApi.md#execResize) | **POST** /exec/{id}/resize | Resize an exec instance
[**execStart()**](ExecApi.md#execStart) | **POST** /exec/{id}/start | Start an exec instance


## `containerExec()`

```php
containerExec($id, $exec_config): \OpenAPI\Client\Model\IdResponse
```

Create an exec instance

Run a command inside a running container.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID or name of container
$exec_config = new \OpenAPI\Client\Model\InlineObject(); // \OpenAPI\Client\Model\InlineObject

try {
    $result = $apiInstance->containerExec($id, $exec_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecApi->containerExec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID or name of container |
 **exec_config** | [**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\OpenAPI\Client\Model\IdResponse**](../Model/IdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `execInspect()`

```php
execInspect($id): \OpenAPI\Client\Model\ExecInspectResponse
```

Inspect an exec instance

Return low-level information about an exec instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Exec instance ID

try {
    $result = $apiInstance->execInspect($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecApi->execInspect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Exec instance ID |

### Return type

[**\OpenAPI\Client\Model\ExecInspectResponse**](../Model/ExecInspectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `execResize()`

```php
execResize($id, $h, $w)
```

Resize an exec instance

Resize the TTY session used by an exec instance. This endpoint only works if `tty` was specified as part of creating and starting the exec instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Exec instance ID
$h = 56; // int | Height of the TTY session in characters
$w = 56; // int | Width of the TTY session in characters

try {
    $apiInstance->execResize($id, $h, $w);
} catch (Exception $e) {
    echo 'Exception when calling ExecApi->execResize: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `execStart()`

```php
execStart($id, $exec_start_config)
```

Start an exec instance

Starts a previously set up exec instance. If detach is true, this endpoint returns immediately after starting the command. Otherwise, it sets up an interactive session with the command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Exec instance ID
$exec_start_config = new \OpenAPI\Client\Model\InlineObject1(); // \OpenAPI\Client\Model\InlineObject1

try {
    $apiInstance->execStart($id, $exec_start_config);
} catch (Exception $e) {
    echo 'Exception when calling ExecApi->execStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Exec instance ID |
 **exec_start_config** | [**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.docker.raw-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
