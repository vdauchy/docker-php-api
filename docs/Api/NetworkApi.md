# Swagger\Client\NetworkApi

All URIs are relative to *http://localhost/v1.39*

Method | HTTP request | Description
------------- | ------------- | -------------
[**networkConnect**](NetworkApi.md#networkConnect) | **POST** /networks/{id}/connect | Connect a container to a network
[**networkCreate**](NetworkApi.md#networkCreate) | **POST** /networks/create | Create a network
[**networkDelete**](NetworkApi.md#networkDelete) | **DELETE** /networks/{id} | Remove a network
[**networkDisconnect**](NetworkApi.md#networkDisconnect) | **POST** /networks/{id}/disconnect | Disconnect a container from a network
[**networkInspect**](NetworkApi.md#networkInspect) | **GET** /networks/{id} | Inspect a network
[**networkList**](NetworkApi.md#networkList) | **GET** /networks | List networks
[**networkPrune**](NetworkApi.md#networkPrune) | **POST** /networks/prune | Delete unused networks


# **networkConnect**
> networkConnect($id, $container)

Connect a container to a network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Network ID or name
$container = new \Swagger\Client\Model\Container(); // \Swagger\Client\Model\Container | 

try {
    $apiInstance->networkConnect($id, $container);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkConnect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Network ID or name |
 **container** | [**\Swagger\Client\Model\Container**](../Model/Container.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkCreate**
> \Swagger\Client\Model\NetworkCreateResponse networkCreate($network_config)

Create a network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$network_config = new \Swagger\Client\Model\NetworkConfig(); // \Swagger\Client\Model\NetworkConfig | Network configuration

try {
    $result = $apiInstance->networkCreate($network_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network_config** | [**\Swagger\Client\Model\NetworkConfig**](../Model/NetworkConfig.md)| Network configuration |

### Return type

[**\Swagger\Client\Model\NetworkCreateResponse**](../Model/NetworkCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkDelete**
> networkDelete($id)

Remove a network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Network ID or name

try {
    $apiInstance->networkDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Network ID or name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkDisconnect**
> networkDisconnect($id, $container)

Disconnect a container from a network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Network ID or name
$container = new \Swagger\Client\Model\Container1(); // \Swagger\Client\Model\Container1 | 

try {
    $apiInstance->networkDisconnect($id, $container);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkDisconnect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Network ID or name |
 **container** | [**\Swagger\Client\Model\Container1**](../Model/Container1.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkInspect**
> \Swagger\Client\Model\Network networkInspect($id, $verbose, $scope)

Inspect a network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Network ID or name
$verbose = false; // bool | Detailed inspect output for troubleshooting
$scope = "scope_example"; // string | Filter the network by scope (swarm, global, or local)

try {
    $result = $apiInstance->networkInspect($id, $verbose, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkInspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Network ID or name |
 **verbose** | **bool**| Detailed inspect output for troubleshooting | [optional] [default to false]
 **scope** | **string**| Filter the network by scope (swarm, global, or local) | [optional]

### Return type

[**\Swagger\Client\Model\Network**](../Model/Network.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkList**
> \Swagger\Client\Model\Network[] networkList($filters)

List networks

Returns a list of networks. For details on the format, see the [network inspect endpoint](#operation/NetworkInspect).  Note that it uses a different, smaller representation of a network than inspecting a single network. For example, the list of containers attached to the network is not propagated in API versions 1.28 and up.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = "filters_example"; // string | JSON encoded value of the filters (a `map[string][]string`) to process on the networks list.  Available filters:  - `driver=<driver-name>` Matches a network's driver. - `id=<network-id>` Matches all or part of a network ID. - `label=<key>` or `label=<key>=<value>` of a network label. - `name=<network-name>` Matches all or part of a network name. - `scope=[\"swarm\"|\"global\"|\"local\"]` Filters networks by scope (`swarm`, `global`, or `local`). - `type=[\"custom\"|\"builtin\"]` Filters networks by type. The `custom` keyword returns all user-defined networks.

try {
    $result = $apiInstance->networkList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | **string**| JSON encoded value of the filters (a &#x60;map[string][]string&#x60;) to process on the networks list.  Available filters:  - &#x60;driver&#x3D;&lt;driver-name&gt;&#x60; Matches a network&#39;s driver. - &#x60;id&#x3D;&lt;network-id&gt;&#x60; Matches all or part of a network ID. - &#x60;label&#x3D;&lt;key&gt;&#x60; or &#x60;label&#x3D;&lt;key&gt;&#x3D;&lt;value&gt;&#x60; of a network label. - &#x60;name&#x3D;&lt;network-name&gt;&#x60; Matches all or part of a network name. - &#x60;scope&#x3D;[\&quot;swarm\&quot;|\&quot;global\&quot;|\&quot;local\&quot;]&#x60; Filters networks by scope (&#x60;swarm&#x60;, &#x60;global&#x60;, or &#x60;local&#x60;). - &#x60;type&#x3D;[\&quot;custom\&quot;|\&quot;builtin\&quot;]&#x60; Filters networks by type. The &#x60;custom&#x60; keyword returns all user-defined networks. | [optional]

### Return type

[**\Swagger\Client\Model\Network[]**](../Model/Network.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkPrune**
> \Swagger\Client\Model\NetworkPruneResponse networkPrune($filters)

Delete unused networks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = "filters_example"; // string | Filters to process on the prune list, encoded as JSON (a `map[string][]string`).  Available filters: - `until=<timestamp>` Prune networks created before this timestamp. The `<timestamp>` can be Unix timestamps, date formatted timestamps, or Go duration strings (e.g. `10m`, `1h30m`) computed relative to the daemon machine’s time. - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune networks with (or without, in case `label!=...` is used) the specified labels.

try {
    $result = $apiInstance->networkPrune($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkPrune: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | **string**| Filters to process on the prune list, encoded as JSON (a &#x60;map[string][]string&#x60;).  Available filters: - &#x60;until&#x3D;&lt;timestamp&gt;&#x60; Prune networks created before this timestamp. The &#x60;&lt;timestamp&gt;&#x60; can be Unix timestamps, date formatted timestamps, or Go duration strings (e.g. &#x60;10m&#x60;, &#x60;1h30m&#x60;) computed relative to the daemon machine’s time. - &#x60;label&#x60; (&#x60;label&#x3D;&lt;key&gt;&#x60;, &#x60;label&#x3D;&lt;key&gt;&#x3D;&lt;value&gt;&#x60;, &#x60;label!&#x3D;&lt;key&gt;&#x60;, or &#x60;label!&#x3D;&lt;key&gt;&#x3D;&lt;value&gt;&#x60;) Prune networks with (or without, in case &#x60;label!&#x3D;...&#x60; is used) the specified labels. | [optional]

### Return type

[**\Swagger\Client\Model\NetworkPruneResponse**](../Model/NetworkPruneResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

