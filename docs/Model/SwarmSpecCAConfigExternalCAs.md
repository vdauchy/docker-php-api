# # SwarmSpecCAConfigExternalCAs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**protocol** | **string** | Protocol for communication with the external CA (currently only &#x60;cfssl&#x60; is supported). | [optional] [default to 'cfssl']
**url** | **string** | URL where certificate signing requests should be sent. | [optional]
**options** | **array<string,string>** | An object with key/value pairs that are interpreted as protocol-specific options for the external CA driver. | [optional]
**ca_cert** | **string** | The root CA certificate (in PEM format) this external CA uses to issue TLS certificates (assumed to be to the current swarm root CA certificate if not provided). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
