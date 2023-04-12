# OpenAPI\Client\NavigationLinksApi

All URIs are relative to http://localhost:3045.

Method | HTTP request | Description
------------- | ------------- | -------------
[**navlinksControllerV1Create()**](NavigationLinksApi.md#navlinksControllerV1Create) | **POST** /api/v1/navlinks | 
[**navlinksControllerV1FindAll()**](NavigationLinksApi.md#navlinksControllerV1FindAll) | **GET** /api/v1/navlinks | 
[**navlinksControllerV1FindOne()**](NavigationLinksApi.md#navlinksControllerV1FindOne) | **GET** /api/v1/navlinks/{id} | 
[**navlinksControllerV1Remove()**](NavigationLinksApi.md#navlinksControllerV1Remove) | **DELETE** /api/v1/navlinks/{id} | 
[**navlinksControllerV1Update()**](NavigationLinksApi.md#navlinksControllerV1Update) | **PATCH** /api/v1/navlinks/{id} | 


## `navlinksControllerV1Create()`

```php
navlinksControllerV1Create($create_navlink_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NavigationLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_navlink_dto = new \OpenAPI\Client\Model\CreateNavlinkDto(); // \OpenAPI\Client\Model\CreateNavlinkDto

try {
    $apiInstance->navlinksControllerV1Create($create_navlink_dto);
} catch (Exception $e) {
    echo 'Exception when calling NavigationLinksApi->navlinksControllerV1Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_navlink_dto** | [**\OpenAPI\Client\Model\CreateNavlinkDto**](../Model/CreateNavlinkDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `navlinksControllerV1FindAll()`

```php
navlinksControllerV1FindAll()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NavigationLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->navlinksControllerV1FindAll();
} catch (Exception $e) {
    echo 'Exception when calling NavigationLinksApi->navlinksControllerV1FindAll: ', $e->getMessage(), PHP_EOL;
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

## `navlinksControllerV1FindOne()`

```php
navlinksControllerV1FindOne($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NavigationLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->navlinksControllerV1FindOne($id);
} catch (Exception $e) {
    echo 'Exception when calling NavigationLinksApi->navlinksControllerV1FindOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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

## `navlinksControllerV1Remove()`

```php
navlinksControllerV1Remove($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NavigationLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->navlinksControllerV1Remove($id);
} catch (Exception $e) {
    echo 'Exception when calling NavigationLinksApi->navlinksControllerV1Remove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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

## `navlinksControllerV1Update()`

```php
navlinksControllerV1Update($id, $update_navlink_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NavigationLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$update_navlink_dto = new \OpenAPI\Client\Model\UpdateNavlinkDto(); // \OpenAPI\Client\Model\UpdateNavlinkDto

try {
    $apiInstance->navlinksControllerV1Update($id, $update_navlink_dto);
} catch (Exception $e) {
    echo 'Exception when calling NavigationLinksApi->navlinksControllerV1Update: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **update_navlink_dto** | [**\OpenAPI\Client\Model\UpdateNavlinkDto**](../Model/UpdateNavlinkDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
