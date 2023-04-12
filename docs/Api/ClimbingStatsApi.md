# OpenAPI\Client\ClimbingStatsApi

All URIs are relative to http://localhost:3045.

Method | HTTP request | Description
------------- | ------------- | -------------
[**climbingStatsControllerGetUserProfile()**](ClimbingStatsApi.md#climbingStatsControllerGetUserProfile) | **GET** /api/v1/climbing-stats/user/assessment | 
[**climbingStatsControllerGetUserStats()**](ClimbingStatsApi.md#climbingStatsControllerGetUserStats) | **POST** /api/v1/climbing-stats/user | 


## `climbingStatsControllerGetUserProfile()`

```php
climbingStatsControllerGetUserProfile($authorization): object[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClimbingStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string

try {
    $result = $apiInstance->climbingStatsControllerGetUserProfile($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimbingStatsApi->climbingStatsControllerGetUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `climbingStatsControllerGetUserStats()`

```php
climbingStatsControllerGetUserStats($authorization): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClimbingStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string

try {
    $result = $apiInstance->climbingStatsControllerGetUserStats($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimbingStatsApi->climbingStatsControllerGetUserStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
