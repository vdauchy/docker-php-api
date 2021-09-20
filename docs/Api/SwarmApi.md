# Swagger\Client\SwarmApi

All URIs are relative to *http://localhost/v1.38*

Method | HTTP request | Description
------------- | ------------- | -------------
[**swarmInit**](SwarmApi.md#swarmInit) | **POST** /swarm/init | Initialize a new swarm
[**swarmInspect**](SwarmApi.md#swarmInspect) | **GET** /swarm | Inspect swarm
[**swarmJoin**](SwarmApi.md#swarmJoin) | **POST** /swarm/join | Join an existing swarm
[**swarmLeave**](SwarmApi.md#swarmLeave) | **POST** /swarm/leave | Leave a swarm
[**swarmUnlock**](SwarmApi.md#swarmUnlock) | **POST** /swarm/unlock | Unlock a locked manager
[**swarmUnlockkey**](SwarmApi.md#swarmUnlockkey) | **GET** /swarm/unlockkey | Get the unlock key
[**swarmUpdate**](SwarmApi.md#swarmUpdate) | **POST** /swarm/update | Update a swarm


# **swarmInit**
> string swarmInit($body)

Initialize a new swarm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 

try {
    $result = $apiInstance->swarmInit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmInit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **swarmInspect**
> \Swagger\Client\Model\Swarm swarmInspect()

Inspect swarm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SwarmApi(
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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Swarm**](../Model/Swarm.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **swarmJoin**
> swarmJoin($body)

Join an existing swarm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 

try {
    $apiInstance->swarmJoin($body);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmJoin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **swarmLeave**
> swarmLeave($force)

Leave a swarm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SwarmApi(
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
?>
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

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **swarmUnlock**
> swarmUnlock($body)

Unlock a locked manager

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | 

try {
    $apiInstance->swarmUnlock($body);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmUnlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **swarmUnlockkey**
> \Swagger\Client\Model\UnlockKeyResponse swarmUnlockkey()

Get the unlock key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SwarmApi(
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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\UnlockKeyResponse**](../Model/UnlockKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **swarmUpdate**
> swarmUpdate($body, $version, $rotate_worker_token, $rotate_manager_token, $rotate_manager_unlock_key)

Update a swarm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SwarmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SwarmSpec(); // \Swagger\Client\Model\SwarmSpec | 
$version = 789; // int | The version number of the swarm object being updated. This is required to avoid conflicting writes.
$rotate_worker_token = false; // bool | Rotate the worker join token.
$rotate_manager_token = false; // bool | Rotate the manager join token.
$rotate_manager_unlock_key = false; // bool | Rotate the manager unlock key.

try {
    $apiInstance->swarmUpdate($body, $version, $rotate_worker_token, $rotate_manager_token, $rotate_manager_unlock_key);
} catch (Exception $e) {
    echo 'Exception when calling SwarmApi->swarmUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwarmSpec**](../Model/SwarmSpec.md)|  |
 **version** | **int**| The version number of the swarm object being updated. This is required to avoid conflicting writes. |
 **rotate_worker_token** | **bool**| Rotate the worker join token. | [optional] [default to false]
 **rotate_manager_token** | **bool**| Rotate the manager join token. | [optional] [default to false]
 **rotate_manager_unlock_key** | **bool**| Rotate the manager unlock key. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

