# Swagger\Client\NodeApi

All URIs are relative to *http://localhost/v1.39*

Method | HTTP request | Description
------------- | ------------- | -------------
[**nodeDelete**](NodeApi.md#nodeDelete) | **DELETE** /nodes/{id} | Delete a node
[**nodeInspect**](NodeApi.md#nodeInspect) | **GET** /nodes/{id} | Inspect a node
[**nodeList**](NodeApi.md#nodeList) | **GET** /nodes | List nodes
[**nodeUpdate**](NodeApi.md#nodeUpdate) | **POST** /nodes/{id}/update | Update a node


# **nodeDelete**
> nodeDelete($id, $force)

Delete a node

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID or name of the node
$force = false; // bool | Force remove a node from the swarm

try {
    $apiInstance->nodeDelete($id, $force);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID or name of the node |
 **force** | **bool**| Force remove a node from the swarm | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nodeInspect**
> \Swagger\Client\Model\Node nodeInspect($id)

Inspect a node

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID or name of the node

try {
    $result = $apiInstance->nodeInspect($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeInspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID or name of the node |

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nodeList**
> \Swagger\Client\Model\Node[] nodeList($filters)

List nodes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = "filters_example"; // string | Filters to process on the nodes list, encoded as JSON (a `map[string][]string`).  Available filters: - `id=<node id>` - `label=<engine label>` - `membership=`(`accepted`|`pending`)` - `name=<node name>` - `role=`(`manager`|`worker`)`

try {
    $result = $apiInstance->nodeList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | **string**| Filters to process on the nodes list, encoded as JSON (a &#x60;map[string][]string&#x60;).  Available filters: - &#x60;id&#x3D;&lt;node id&gt;&#x60; - &#x60;label&#x3D;&lt;engine label&gt;&#x60; - &#x60;membership&#x3D;&#x60;(&#x60;accepted&#x60;|&#x60;pending&#x60;)&#x60; - &#x60;name&#x3D;&lt;node name&gt;&#x60; - &#x60;role&#x3D;&#x60;(&#x60;manager&#x60;|&#x60;worker&#x60;)&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\Node[]**](../Model/Node.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nodeUpdate**
> nodeUpdate($id, $version, $body)

Update a node

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the node
$version = 789; // int | The version number of the node object being updated. This is required to avoid conflicting writes.
$body = new \Swagger\Client\Model\NodeSpec(); // \Swagger\Client\Model\NodeSpec | 

try {
    $apiInstance->nodeUpdate($id, $version, $body);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the node |
 **version** | **int**| The version number of the node object being updated. This is required to avoid conflicting writes. |
 **body** | [**\Swagger\Client\Model\NodeSpec**](../Model/NodeSpec.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

