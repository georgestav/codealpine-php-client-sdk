# OpenAPIClient-php

The codealpine API description


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost:3045*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ClimbingQuestionnaireApi* | [**climbingQuestionnaireControllerFindAll**](docs/Api/ClimbingQuestionnaireApi.md#climbingquestionnairecontrollerfindall) | **GET** /api/v1/climbing-questionnaire/all/{withQuestions} | 
*ClimbingQuestionnaireApi* | [**climbingQuestionnaireControllerFindForUser**](docs/Api/ClimbingQuestionnaireApi.md#climbingquestionnairecontrollerfindforuser) | **GET** /api/v1/climbing-questionnaire/user | 
*ClimbingQuestionnaireApi* | [**climbingQuestionnaireControllerFindOne**](docs/Api/ClimbingQuestionnaireApi.md#climbingquestionnairecontrollerfindone) | **GET** /api/v1/climbing-questionnaire/{id}/{withQuestions} | 
*ClimbingQuestionnaireApi* | [**climbingQuestionnaireControllerGetAnalysisMessage**](docs/Api/ClimbingQuestionnaireApi.md#climbingquestionnairecontrollergetanalysismessage) | **POST** /api/v1/climbing-questionnaire/analysis/{questionnaire} | 
*ClimbingQuestionnaireApi* | [**climbingQuestionnaireControllerSaveUserQuestionnaire**](docs/Api/ClimbingQuestionnaireApi.md#climbingquestionnairecontrollersaveuserquestionnaire) | **POST** /api/v1/climbing-questionnaire/save-answers | 
*ClimbingStatsApi* | [**climbingStatsControllerGetUserProfile**](docs/Api/ClimbingStatsApi.md#climbingstatscontrollergetuserprofile) | **GET** /api/v1/climbing-stats/user/assessment | 
*ClimbingStatsApi* | [**climbingStatsControllerGetUserStats**](docs/Api/ClimbingStatsApi.md#climbingstatscontrollergetuserstats) | **POST** /api/v1/climbing-stats/user | 
*DefaultApi* | [**appControllerGetInfo**](docs/Api/DefaultApi.md#appcontrollergetinfo) | **GET** /api | 
*NavigationLinksApi* | [**navlinksControllerV1Create**](docs/Api/NavigationLinksApi.md#navlinkscontrollerv1create) | **POST** /api/v1/navlinks | 
*NavigationLinksApi* | [**navlinksControllerV1FindAll**](docs/Api/NavigationLinksApi.md#navlinkscontrollerv1findall) | **GET** /api/v1/navlinks | 
*NavigationLinksApi* | [**navlinksControllerV1FindOne**](docs/Api/NavigationLinksApi.md#navlinkscontrollerv1findone) | **GET** /api/v1/navlinks/{id} | 
*NavigationLinksApi* | [**navlinksControllerV1Remove**](docs/Api/NavigationLinksApi.md#navlinkscontrollerv1remove) | **DELETE** /api/v1/navlinks/{id} | 
*NavigationLinksApi* | [**navlinksControllerV1Update**](docs/Api/NavigationLinksApi.md#navlinkscontrollerv1update) | **PATCH** /api/v1/navlinks/{id} | 
*NotificationsApi* | [**notificationControllerCreate**](docs/Api/NotificationsApi.md#notificationcontrollercreate) | **POST** /api/v1/notification | 
*NotificationsApi* | [**notificationControllerFindAll**](docs/Api/NotificationsApi.md#notificationcontrollerfindall) | **GET** /api/v1/notification | 
*NotificationsApi* | [**notificationControllerFindOne**](docs/Api/NotificationsApi.md#notificationcontrollerfindone) | **GET** /api/v1/notification/{id} | 
*NotificationsApi* | [**notificationControllerRemove**](docs/Api/NotificationsApi.md#notificationcontrollerremove) | **DELETE** /api/v1/notification/{id} | 
*NotificationsApi* | [**notificationControllerUpdate**](docs/Api/NotificationsApi.md#notificationcontrollerupdate) | **PATCH** /api/v1/notification/{id} | 
*UsersApi* | [**userControllerUpdate**](docs/Api/UsersApi.md#usercontrollerupdate) | **PATCH** /api/user/{id} | 

## Models

- [ClimbingProvidedAnswers](docs/Model/ClimbingProvidedAnswers.md)
- [ClimbingQuestion](docs/Model/ClimbingQuestion.md)
- [ClimbingQuestionnaire](docs/Model/ClimbingQuestionnaire.md)
- [ClimbingQuestionnaireAnalysis](docs/Model/ClimbingQuestionnaireAnalysis.md)
- [ClimbingQuestionnaireUser](docs/Model/ClimbingQuestionnaireUser.md)
- [CreateNavlinkDto](docs/Model/CreateNavlinkDto.md)
- [CreateNotificationDto](docs/Model/CreateNotificationDto.md)
- [Notification](docs/Model/Notification.md)
- [UpdateNavlinkDto](docs/Model/UpdateNavlinkDto.md)
- [UpdateNotificationDto](docs/Model/UpdateNotificationDto.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
