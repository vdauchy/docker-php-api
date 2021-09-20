# Swagger\Client\TaskApi

All URIs are relative to *http://localhost/v1.38*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskInspect**](TaskApi.md#taskInspect) | **GET** /tasks/{id} | Inspect a task
[**taskList**](TaskApi.md#taskList) | **GET** /tasks | List tasks


# **taskInspect**
> \Swagger\Client\Model\Task taskInspect($id)

Inspect a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the task

try {
    $result = $apiInstance->taskInspect($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->taskInspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the task |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskList**
> \Swagger\Client\Model\Task[] taskList($filters)

List tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = "filters_example"; // string | A JSON encoded value of the filters (a `map[string][]string`) to process on the tasks list. Available filters:  - `desired-state=(running | shutdown | accepted)` - `id=<task id>` - `label=key` or `label=\"key=value\"` - `name=<task name>` - `node=<node id or name>` - `service=<service name>`

try {
    $result = $apiInstance->taskList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->taskList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | **string**| A JSON encoded value of the filters (a &#x60;map[string][]string&#x60;) to process on the tasks list. Available filters:  - &#x60;desired-state&#x3D;(running | shutdown | accepted)&#x60; - &#x60;id&#x3D;&lt;task id&gt;&#x60; - &#x60;label&#x3D;key&#x60; or &#x60;label&#x3D;\&quot;key&#x3D;value\&quot;&#x60; - &#x60;name&#x3D;&lt;task name&gt;&#x60; - &#x60;node&#x3D;&lt;node id or name&gt;&#x60; - &#x60;service&#x3D;&lt;service name&gt;&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\Task[]**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

