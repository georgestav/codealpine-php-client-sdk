# OpenAPI\Client\UsersApi

All URIs are relative to http://localhost:3045.

Method | HTTP request | Description
------------- | ------------- | -------------
[**userControllerUpdate()**](UsersApi.md#userControllerUpdate) | **PATCH** /api/user/{id} | 


## `userControllerUpdate()`

```php
userControllerUpdate($id, $body): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$body = new \stdClass; // object

try {
    $result = $apiInstance->userControllerUpdate($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userControllerUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
