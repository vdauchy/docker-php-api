# Swagger\Client\SessionExperimentalApi

All URIs are relative to *http://localhost/v1.38*

Method | HTTP request | Description
------------- | ------------- | -------------
[**session**](SessionExperimentalApi.md#session) | **POST** /session | Initialize interactive session


# **session**
> session()

Initialize interactive session

Start a new interactive session with a server. Session allows server to call back to the client for advanced capabilities.  > **Note**: This endpoint is *experimental* and only available if the daemon is started with experimental > features enabled. The specifications for this endpoint may still change in a future version of the API.  ### Hijacking  This endpoint hijacks the HTTP connection to HTTP2 transport that allows the client to expose gPRC services on that connection.  For example, the client sends this request to upgrade the connection:  ``` POST /session HTTP/1.1 Upgrade: h2c Connection: Upgrade ```  The Docker daemon will respond with a `101 UPGRADED` response follow with the raw stream:  ``` HTTP/1.1 101 UPGRADED Connection: Upgrade Upgrade: h2c ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SessionExperimentalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->session();
} catch (Exception $e) {
    echo 'Exception when calling SessionExperimentalApi->session: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/vnd.docker.raw-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

