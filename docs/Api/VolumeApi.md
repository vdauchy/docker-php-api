# Swagger\Client\VolumeApi

All URIs are relative to *http://localhost/v1.40*

Method | HTTP request | Description
------------- | ------------- | -------------
[**volumeCreate**](VolumeApi.md#volumeCreate) | **POST** /volumes/create | Create a volume
[**volumeDelete**](VolumeApi.md#volumeDelete) | **DELETE** /volumes/{name} | Remove a volume
[**volumeInspect**](VolumeApi.md#volumeInspect) | **GET** /volumes/{name} | Inspect a volume
[**volumeList**](VolumeApi.md#volumeList) | **GET** /volumes | List volumes
[**volumePrune**](VolumeApi.md#volumePrune) | **POST** /volumes/prune | Delete unused volumes


# **volumeCreate**
> \Swagger\Client\Model\Volume volumeCreate($volume_config)

Create a volume

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$volume_config = new \Swagger\Client\Model\VolumeConfig(); // \Swagger\Client\Model\VolumeConfig | Volume configuration

try {
    $result = $apiInstance->volumeCreate($volume_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumeCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **volume_config** | [**\Swagger\Client\Model\VolumeConfig**](../Model/VolumeConfig.md)| Volume configuration |

### Return type

[**\Swagger\Client\Model\Volume**](../Model/Volume.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **volumeDelete**
> volumeDelete($name, $force)

Remove a volume

Instruct the driver to remove the volume.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Volume name or ID
$force = false; // bool | Force the removal of the volume

try {
    $apiInstance->volumeDelete($name, $force);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Volume name or ID |
 **force** | **bool**| Force the removal of the volume | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **volumeInspect**
> \Swagger\Client\Model\Volume volumeInspect($name)

Inspect a volume

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Volume name or ID

try {
    $result = $apiInstance->volumeInspect($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumeInspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Volume name or ID |

### Return type

[**\Swagger\Client\Model\Volume**](../Model/Volume.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **volumeList**
> \Swagger\Client\Model\VolumeListResponse volumeList($filters)

List volumes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = "filters_example"; // string | JSON encoded value of the filters (a `map[string][]string`) to process on the volumes list. Available filters:  - `dangling=<boolean>` When set to `true` (or `1`), returns all    volumes that are not in use by a container. When set to `false`    (or `0`), only volumes that are in use by one or more    containers are returned. - `driver=<volume-driver-name>` Matches volumes based on their driver. - `label=<key>` or `label=<key>:<value>` Matches volumes based on    the presence of a `label` alone or a `label` and a value. - `name=<volume-name>` Matches all or part of a volume name.

try {
    $result = $apiInstance->volumeList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | **string**| JSON encoded value of the filters (a &#x60;map[string][]string&#x60;) to process on the volumes list. Available filters:  - &#x60;dangling&#x3D;&lt;boolean&gt;&#x60; When set to &#x60;true&#x60; (or &#x60;1&#x60;), returns all    volumes that are not in use by a container. When set to &#x60;false&#x60;    (or &#x60;0&#x60;), only volumes that are in use by one or more    containers are returned. - &#x60;driver&#x3D;&lt;volume-driver-name&gt;&#x60; Matches volumes based on their driver. - &#x60;label&#x3D;&lt;key&gt;&#x60; or &#x60;label&#x3D;&lt;key&gt;:&lt;value&gt;&#x60; Matches volumes based on    the presence of a &#x60;label&#x60; alone or a &#x60;label&#x60; and a value. - &#x60;name&#x3D;&lt;volume-name&gt;&#x60; Matches all or part of a volume name. | [optional]

### Return type

[**\Swagger\Client\Model\VolumeListResponse**](../Model/VolumeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **volumePrune**
> \Swagger\Client\Model\VolumePruneResponse volumePrune($filters)

Delete unused volumes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = "filters_example"; // string | Filters to process on the prune list, encoded as JSON (a `map[string][]string`).  Available filters: - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune volumes with (or without, in case `label!=...` is used) the specified labels.

try {
    $result = $apiInstance->volumePrune($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumePrune: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | **string**| Filters to process on the prune list, encoded as JSON (a &#x60;map[string][]string&#x60;).  Available filters: - &#x60;label&#x60; (&#x60;label&#x3D;&lt;key&gt;&#x60;, &#x60;label&#x3D;&lt;key&gt;&#x3D;&lt;value&gt;&#x60;, &#x60;label!&#x3D;&lt;key&gt;&#x60;, or &#x60;label!&#x3D;&lt;key&gt;&#x3D;&lt;value&gt;&#x60;) Prune volumes with (or without, in case &#x60;label!&#x3D;...&#x60; is used) the specified labels. | [optional]

### Return type

[**\Swagger\Client\Model\VolumePruneResponse**](../Model/VolumePruneResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

