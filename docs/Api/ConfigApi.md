# OpenAPI\Client\ConfigApi

All URIs are relative to http://localhost/v1.41.

Method | HTTP request | Description
------------- | ------------- | -------------
[**configCreate()**](ConfigApi.md#configCreate) | **POST** /configs/create | Create a config
[**configDelete()**](ConfigApi.md#configDelete) | **DELETE** /configs/{id} | Delete a config
[**configInspect()**](ConfigApi.md#configInspect) | **GET** /configs/{id} | Inspect a config
[**configList()**](ConfigApi.md#configList) | **GET** /configs | List configs
[**configUpdate()**](ConfigApi.md#configUpdate) | **POST** /configs/{id}/update | Update a Config


## `configCreate()`

```php
configCreate($body): \OpenAPI\Client\Model\IdResponse
```

Create a config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->configCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

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

## `configDelete()`

```php
configDelete($id)
```

Delete a config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID of the config

try {
    $apiInstance->configDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the config |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configInspect()`

```php
configInspect($id): \OpenAPI\Client\Model\Config
```

Inspect a config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID of the config

try {
    $result = $apiInstance->configInspect($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configInspect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the config |

### Return type

[**\OpenAPI\Client\Model\Config**](../Model/Config.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configList()`

```php
configList($filters): \OpenAPI\Client\Model\Config[]
```

List configs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = 'filters_example'; // string | A JSON encoded value of the filters (a `map[string][]string`) to process on the configs list.  Available filters:  - `id=<config id>` - `label=<key> or label=<key>=value` - `name=<config name>` - `names=<config name>`

try {
    $result = $apiInstance->configList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | **string**| A JSON encoded value of the filters (a &#x60;map[string][]string&#x60;) to process on the configs list.  Available filters:  - &#x60;id&#x3D;&lt;config id&gt;&#x60; - &#x60;label&#x3D;&lt;key&gt; or label&#x3D;&lt;key&gt;&#x3D;value&#x60; - &#x60;name&#x3D;&lt;config name&gt;&#x60; - &#x60;names&#x3D;&lt;config name&gt;&#x60; | [optional]

### Return type

[**\OpenAPI\Client\Model\Config[]**](../Model/Config.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configUpdate()`

```php
configUpdate($id, $version, $body)
```

Update a Config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The ID or name of the config
$version = 56; // int | The version number of the config object being updated. This is required to avoid conflicting writes.
$body = new \OpenAPI\Client\Model\ConfigSpec(); // \OpenAPI\Client\Model\ConfigSpec | The spec of the config to update. Currently, only the Labels field can be updated. All other fields must remain unchanged from the [ConfigInspect endpoint](#operation/ConfigInspect) response values.

try {
    $apiInstance->configUpdate($id, $version, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID or name of the config |
 **version** | **int**| The version number of the config object being updated. This is required to avoid conflicting writes. |
 **body** | [**\OpenAPI\Client\Model\ConfigSpec**](../Model/ConfigSpec.md)| The spec of the config to update. Currently, only the Labels field can be updated. All other fields must remain unchanged from the [ConfigInspect endpoint](#operation/ConfigInspect) response values. | [optional]

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
