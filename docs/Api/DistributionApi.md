# Swagger\Client\DistributionApi

All URIs are relative to *http://localhost/v1.41*

Method | HTTP request | Description
------------- | ------------- | -------------
[**distributionInspect**](DistributionApi.md#distributionInspect) | **GET** /distribution/{name}/json | Get image information from the registry


# **distributionInspect**
> \Swagger\Client\Model\DistributionInspectResponse distributionInspect($name)

Get image information from the registry

Return image digest and platform information by contacting the registry.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Image name or id

try {
    $result = $apiInstance->distributionInspect($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->distributionInspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Image name or id |

### Return type

[**\Swagger\Client\Model\DistributionInspectResponse**](../Model/DistributionInspectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

