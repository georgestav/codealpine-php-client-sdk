# OpenAPI\Client\ClimbingQuestionnaireApi

All URIs are relative to http://localhost:3045.

Method | HTTP request | Description
------------- | ------------- | -------------
[**climbingQuestionnaireControllerFindAll()**](ClimbingQuestionnaireApi.md#climbingQuestionnaireControllerFindAll) | **GET** /api/v1/climbing-questionnaire/all/{withQuestions} | 
[**climbingQuestionnaireControllerFindForUser()**](ClimbingQuestionnaireApi.md#climbingQuestionnaireControllerFindForUser) | **GET** /api/v1/climbing-questionnaire/user | 
[**climbingQuestionnaireControllerFindOne()**](ClimbingQuestionnaireApi.md#climbingQuestionnaireControllerFindOne) | **GET** /api/v1/climbing-questionnaire/{id}/{withQuestions} | 
[**climbingQuestionnaireControllerGetAnalysisMessage()**](ClimbingQuestionnaireApi.md#climbingQuestionnaireControllerGetAnalysisMessage) | **POST** /api/v1/climbing-questionnaire/analysis/{questionnaire} | 
[**climbingQuestionnaireControllerSaveUserQuestionnaire()**](ClimbingQuestionnaireApi.md#climbingQuestionnaireControllerSaveUserQuestionnaire) | **POST** /api/v1/climbing-questionnaire/save-answers | 


## `climbingQuestionnaireControllerFindAll()`

```php
climbingQuestionnaireControllerFindAll($with_questions): \OpenAPI\Client\Model\ClimbingQuestionnaire[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClimbingQuestionnaireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$with_questions = 'with_questions_example'; // string

try {
    $result = $apiInstance->climbingQuestionnaireControllerFindAll($with_questions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimbingQuestionnaireApi->climbingQuestionnaireControllerFindAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with_questions** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ClimbingQuestionnaire[]**](../Model/ClimbingQuestionnaire.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `climbingQuestionnaireControllerFindForUser()`

```php
climbingQuestionnaireControllerFindForUser($authorization): \OpenAPI\Client\Model\ClimbingQuestionnaire[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClimbingQuestionnaireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string

try {
    $result = $apiInstance->climbingQuestionnaireControllerFindForUser($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimbingQuestionnaireApi->climbingQuestionnaireControllerFindForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ClimbingQuestionnaire[]**](../Model/ClimbingQuestionnaire.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `climbingQuestionnaireControllerFindOne()`

```php
climbingQuestionnaireControllerFindOne($id, $with_questions): \OpenAPI\Client\Model\ClimbingQuestionnaire
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClimbingQuestionnaireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$with_questions = 'with_questions_example'; // string

try {
    $result = $apiInstance->climbingQuestionnaireControllerFindOne($id, $with_questions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimbingQuestionnaireApi->climbingQuestionnaireControllerFindOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **with_questions** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ClimbingQuestionnaire**](../Model/ClimbingQuestionnaire.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `climbingQuestionnaireControllerGetAnalysisMessage()`

```php
climbingQuestionnaireControllerGetAnalysisMessage($questionnaire)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClimbingQuestionnaireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$questionnaire = 3.4; // float

try {
    $apiInstance->climbingQuestionnaireControllerGetAnalysisMessage($questionnaire);
} catch (Exception $e) {
    echo 'Exception when calling ClimbingQuestionnaireApi->climbingQuestionnaireControllerGetAnalysisMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire** | **float**|  |

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

## `climbingQuestionnaireControllerSaveUserQuestionnaire()`

```php
climbingQuestionnaireControllerSaveUserQuestionnaire($authorization)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClimbingQuestionnaireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string

try {
    $apiInstance->climbingQuestionnaireControllerSaveUserQuestionnaire($authorization);
} catch (Exception $e) {
    echo 'Exception when calling ClimbingQuestionnaireApi->climbingQuestionnaireControllerSaveUserQuestionnaire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

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
