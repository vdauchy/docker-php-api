# Swagger\Client\SecretApi

All URIs are relative to *http://localhost/v1.41*

Method | HTTP request | Description
------------- | ------------- | -------------
[**secretCreate**](SecretApi.md#secretCreate) | **POST** /secrets/create | Create a secret
[**secretDelete**](SecretApi.md#secretDelete) | **DELETE** /secrets/{id} | Delete a secret
[**secretInspect**](SecretApi.md#secretInspect) | **GET** /secrets/{id} | Inspect a secret
[**secretList**](SecretApi.md#secretList) | **GET** /secrets | List secrets
[**secretUpdate**](SecretApi.md#secretUpdate) | **POST** /secrets/{id}/update | Update a Secret


# **secretCreate**
> \Swagger\Client\Model\IdResponse secretCreate($body)

Create a secret

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecretApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->secretCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretApi->secretCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\IdResponse**](../Model/IdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **secretDelete**
> secretDelete($id)

Delete a secret

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecretApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the secret

try {
    $apiInstance->secretDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SecretApi->secretDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the secret |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **secretInspect**
> \Swagger\Client\Model\Secret secretInspect($id)

Inspect a secret

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecretApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the secret

try {
    $result = $apiInstance->secretInspect($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretApi->secretInspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the secret |

### Return type

[**\Swagger\Client\Model\Secret**](../Model/Secret.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **secretList**
> \Swagger\Client\Model\Secret[] secretList($filters)

List secrets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecretApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = "filters_example"; // string | A JSON encoded value of the filters (a `map[string][]string`) to process on the secrets list.  Available filters:  - `id=<secret id>` - `label=<key> or label=<key>=value` - `name=<secret name>` - `names=<secret name>`

try {
    $result = $apiInstance->secretList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretApi->secretList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | **string**| A JSON encoded value of the filters (a &#x60;map[string][]string&#x60;) to process on the secrets list.  Available filters:  - &#x60;id&#x3D;&lt;secret id&gt;&#x60; - &#x60;label&#x3D;&lt;key&gt; or label&#x3D;&lt;key&gt;&#x3D;value&#x60; - &#x60;name&#x3D;&lt;secret name&gt;&#x60; - &#x60;names&#x3D;&lt;secret name&gt;&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\Secret[]**](../Model/Secret.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **secretUpdate**
> secretUpdate($id, $version, $body)

Update a Secret

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecretApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID or name of the secret
$version = 789; // int | The version number of the secret object being updated. This is required to avoid conflicting writes.
$body = new \Swagger\Client\Model\SecretSpec(); // \Swagger\Client\Model\SecretSpec | The spec of the secret to update. Currently, only the Labels field can be updated. All other fields must remain unchanged from the [SecretInspect endpoint](#operation/SecretInspect) response values.

try {
    $apiInstance->secretUpdate($id, $version, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecretApi->secretUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID or name of the secret |
 **version** | **int**| The version number of the secret object being updated. This is required to avoid conflicting writes. |
 **body** | [**\Swagger\Client\Model\SecretSpec**](../Model/SecretSpec.md)| The spec of the secret to update. Currently, only the Labels field can be updated. All other fields must remain unchanged from the [SecretInspect endpoint](#operation/SecretInspect) response values. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

