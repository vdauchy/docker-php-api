# ConfigSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | User-defined name of the config. | [optional] 
**labels** | **map[string,string]** | User-defined key/value metadata. | [optional] 
**data** | **string** | Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5)) config data. | [optional] 
**templating** | [**\Swagger\Client\Model\Driver**](Driver.md) | Templating driver, if applicable  Templating controls whether and how to evaluate the config payload as a template. If no driver is set, no templating is used. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


