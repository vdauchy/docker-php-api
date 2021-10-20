# OpenAPI\Client\SwarmApi

All URIs are relative to http://localhost/v1.41.

Method | HTTP request | Description
------------- | ------------- | -------------
[**swarmInit()**](SwarmApi.md#swarmInit) | **POST** /swarm/init | Initialize a new swarm
[**swarmInspect()**](SwarmApi.md#swarmInspect) | **GET** /swarm | Inspect swarm
[**swarmJoin()**](SwarmApi.md#swarmJoin) | **POST** /swarm/join | Join an existing swarm
[**swarmLeave()**](SwarmApi.md#swarmLeave) | **POST** /swarm/leave | Leave a swarm
[**swarmUnlock()**](SwarmApi.md#swarmUnlock) | **POST** /swarm/unlock | Unlock a locked manager
[**swarmUnlockkey()**](SwarmApi.md#swarmUnlockkey) | **GET** /swarm/unlockkey | Get the unlock key
[**swarmUpdate()**](SwarmApi.md#swarmUpdate) | **POST** /swarm/update | Update a swarm


## `swarmInit()`

```php
swarmInit($body): string
```

Initialize a new swarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\InlineObject5(); // \OpenAPI\Client\Model\InlineObject5

try {
    $result = $apiInstance->swarmInit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmInit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\InlineObject5**](../Model/InlineObject5.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `swarmInspect()`

```php
swarmInspect(): \OpenAPI\Client\Model\Swarm
```

Inspect swarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->swarmInspect();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmInspect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Swarm**](../Model/Swarm.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `swarmJoin()`

```php
swarmJoin($body)
```

Join an existing swarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\InlineObject6(); // \OpenAPI\Client\Model\InlineObject6

try {
    $apiInstance->swarmJoin($body);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\InlineObject6**](../Model/InlineObject6.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `swarmLeave()`

```php
swarmLeave($force)
```

Leave a swarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$force = false; // bool | Force leave swarm, even if this is the last manager or that it will break the cluster.

try {
    $apiInstance->swarmLeave($force);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **force** | **bool**| Force leave swarm, even if this is the last manager or that it will break the cluster. | [optional] [default to false]

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

## `swarmUnlock()`

```php
swarmUnlock($body)
```

Unlock a locked manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\InlineObject7(); // \OpenAPI\Client\Model\InlineObject7

try {
    $apiInstance->swarmUnlock($body);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmUnlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\InlineObject7**](../Model/InlineObject7.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `swarmUnlockkey()`

```php
swarmUnlockkey(): \OpenAPI\Client\Model\UnlockKeyResponse
```

Get the unlock key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->swarmUnlockkey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmUnlockkey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\UnlockKeyResponse**](../Model/UnlockKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `swarmUpdate()`

```php
swarmUpdate($version, $body, $rotate_worker_token, $rotate_manager_token, $rotate_manager_unlock_key)
```

Update a swarm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = 56; // int | The version number of the swarm object being updated. This is required to avoid conflicting writes.
$body = new \OpenAPI\Client\Model\SwarmSpec(); // \OpenAPI\Client\Model\SwarmSpec
$rotate_worker_token = false; // bool | Rotate the worker join token.
$rotate_manager_token = false; // bool | Rotate the manager join token.
$rotate_manager_unlock_key = false; // bool | Rotate the manager unlock key.

try {
    $apiInstance->swarmUpdate($version, $body, $rotate_worker_token, $rotate_manager_token, $rotate_manager_unlock_key);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **int**| The version number of the swarm object being updated. This is required to avoid conflicting writes. |
 **body** | [**\OpenAPI\Client\Model\SwarmSpec**](../Model/SwarmSpec.md)|  |
 **rotate_worker_token** | **bool**| Rotate the worker join token. | [optional] [default to false]
 **rotate_manager_token** | **bool**| Rotate the manager join token. | [optional] [default to false]
 **rotate_manager_unlock_key** | **bool**| Rotate the manager unlock key. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
