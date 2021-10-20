# OpenAPI\Client\NodeApi

All URIs are relative to http://localhost/v1.41.

Method | HTTP request | Description
------------- | ------------- | -------------
[**nodeDelete()**](NodeApi.md#nodeDelete) | **DELETE** /nodes/{id} | Delete a node
[**nodeInspect()**](NodeApi.md#nodeInspect) | **GET** /nodes/{id} | Inspect a node
[**nodeList()**](NodeApi.md#nodeList) | **GET** /nodes | List nodes
[**nodeUpdate()**](NodeApi.md#nodeUpdate) | **POST** /nodes/{id}/update | Update a node


## `nodeDelete()`

```php
nodeDelete($id, $force)
```

Delete a node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The ID or name of the node
$force = false; // bool | Force remove a node from the swarm

try {
    $apiInstance->nodeDelete($id, $force);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeDelete: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nodeInspect()`

```php
nodeInspect($id): \OpenAPI\Client\Model\Node
```

Inspect a node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The ID or name of the node

try {
    $result = $apiInstance->nodeInspect($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeInspect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID or name of the node |

### Return type

[**\OpenAPI\Client\Model\Node**](../Model/Node.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nodeList()`

```php
nodeList($filters): \OpenAPI\Client\Model\Node[]
```

List nodes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = 'filters_example'; // string | Filters to process on the nodes list, encoded as JSON (a `map[string][]string`).  Available filters: - `id=<node id>` - `label=<engine label>` - `membership=`(`accepted`|`pending`)` - `name=<node name>` - `node.label=<node label>` - `role=`(`manager`|`worker`)`

try {
    $result = $apiInstance->nodeList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | **string**| Filters to process on the nodes list, encoded as JSON (a &#x60;map[string][]string&#x60;).  Available filters: - &#x60;id&#x3D;&lt;node id&gt;&#x60; - &#x60;label&#x3D;&lt;engine label&gt;&#x60; - &#x60;membership&#x3D;&#x60;(&#x60;accepted&#x60;|&#x60;pending&#x60;)&#x60; - &#x60;name&#x3D;&lt;node name&gt;&#x60; - &#x60;node.label&#x3D;&lt;node label&gt;&#x60; - &#x60;role&#x3D;&#x60;(&#x60;manager&#x60;|&#x60;worker&#x60;)&#x60; | [optional]

### Return type

[**\OpenAPI\Client\Model\Node[]**](../Model/Node.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nodeUpdate()`

```php
nodeUpdate($id, $version, $body)
```

Update a node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The ID of the node
$version = 56; // int | The version number of the node object being updated. This is required to avoid conflicting writes.
$body = new \OpenAPI\Client\Model\NodeSpec(); // \OpenAPI\Client\Model\NodeSpec

try {
    $apiInstance->nodeUpdate($id, $version, $body);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the node |
 **version** | **int**| The version number of the node object being updated. This is required to avoid conflicting writes. |
 **body** | [**\OpenAPI\Client\Model\NodeSpec**](../Model/NodeSpec.md)|  | [optional]

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
