# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost:3045.

Method | HTTP request | Description
------------- | ------------- | -------------
[**appControllerGetInfo()**](DefaultApi.md#appControllerGetInfo) | **GET** /api | 


## `appControllerGetInfo()`

```php
appControllerGetInfo()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerGetInfo();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerGetInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
