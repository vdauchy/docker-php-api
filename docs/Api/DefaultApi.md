# Swagger\Client\DefaultApi

All URIs are relative to *http://localhost/v1.38*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskLogs**](DefaultApi.md#taskLogs) | **GET** /tasks/{id}/logs | Get task logs


# **taskLogs**
> string taskLogs($id, $details, $follow, $stdout, $stderr, $since, $timestamps, $tail)

Get task logs

Get `stdout` and `stderr` logs from a task.  **Note**: This endpoint works only for services with the `json-file` or `journald` logging drivers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the task
$details = false; // bool | Show task context and extra details provided to logs.
$follow = false; // bool | Return the logs as a stream.  This will return a `101` HTTP response with a `Connection: upgrade` header, then hijack the HTTP connection to send raw output. For more information about hijacking and the stream format, [see the documentation for the attach endpoint](#operation/ContainerAttach).
$stdout = false; // bool | Return logs from `stdout`
$stderr = false; // bool | Return logs from `stderr`
$since = 0; // int | Only return logs since this time, as a UNIX timestamp
$timestamps = false; // bool | Add timestamps to every log line
$tail = "all"; // string | Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.

try {
    $result = $apiInstance->taskLogs($id, $details, $follow, $stdout, $stderr, $since, $timestamps, $tail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->taskLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the task |
 **details** | **bool**| Show task context and extra details provided to logs. | [optional] [default to false]
 **follow** | **bool**| Return the logs as a stream.  This will return a &#x60;101&#x60; HTTP response with a &#x60;Connection: upgrade&#x60; header, then hijack the HTTP connection to send raw output. For more information about hijacking and the stream format, [see the documentation for the attach endpoint](#operation/ContainerAttach). | [optional] [default to false]
 **stdout** | **bool**| Return logs from &#x60;stdout&#x60; | [optional] [default to false]
 **stderr** | **bool**| Return logs from &#x60;stderr&#x60; | [optional] [default to false]
 **since** | **int**| Only return logs since this time, as a UNIX timestamp | [optional] [default to 0]
 **timestamps** | **bool**| Add timestamps to every log line | [optional] [default to false]
 **tail** | **string**| Only return this number of log lines from the end of the logs. Specify as an integer or &#x60;all&#x60; to output all log lines. | [optional] [default to all]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/vnd.docker.raw-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

