# OpenAPI\Client\NotificationsApi

All URIs are relative to http://localhost:3045.

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationControllerCreate()**](NotificationsApi.md#notificationControllerCreate) | **POST** /api/v1/notification | 
[**notificationControllerFindAll()**](NotificationsApi.md#notificationControllerFindAll) | **GET** /api/v1/notification | 
[**notificationControllerFindOne()**](NotificationsApi.md#notificationControllerFindOne) | **GET** /api/v1/notification/{id} | 
[**notificationControllerRemove()**](NotificationsApi.md#notificationControllerRemove) | **DELETE** /api/v1/notification/{id} | 
[**notificationControllerUpdate()**](NotificationsApi.md#notificationControllerUpdate) | **PATCH** /api/v1/notification/{id} | 


## `notificationControllerCreate()`

```php
notificationControllerCreate($create_notification_dto): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_notification_dto = new \OpenAPI\Client\Model\CreateNotificationDto(); // \OpenAPI\Client\Model\CreateNotificationDto

try {
    $result = $apiInstance->notificationControllerCreate($create_notification_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationControllerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_notification_dto** | [**\OpenAPI\Client\Model\CreateNotificationDto**](../Model/CreateNotificationDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationControllerFindAll()`

```php
notificationControllerFindAll(): \OpenAPI\Client\Model\Notification[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->notificationControllerFindAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationControllerFindAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Notification[]**](../Model/Notification.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationControllerFindOne()`

```php
notificationControllerFindOne($id): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->notificationControllerFindOne($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationControllerFindOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationControllerRemove()`

```php
notificationControllerRemove($id): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->notificationControllerRemove($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationControllerRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationControllerUpdate()`

```php
notificationControllerUpdate($id, $update_notification_dto): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$update_notification_dto = new \OpenAPI\Client\Model\UpdateNotificationDto(); // \OpenAPI\Client\Model\UpdateNotificationDto

try {
    $result = $apiInstance->notificationControllerUpdate($id, $update_notification_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationControllerUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **update_notification_dto** | [**\OpenAPI\Client\Model\UpdateNotificationDto**](../Model/UpdateNotificationDto.md)|  |

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
