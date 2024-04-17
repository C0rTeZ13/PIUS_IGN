# OpenAPI\Client\NewsApi

All URIs are relative to http://a0872478.xsph.ru/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**newsIdDelete()**](NewsApi.md#newsIdDelete) | **DELETE** /news/{id} | Удалить новость |
| [**newsIdGet()**](NewsApi.md#newsIdGet) | **GET** /news/{id} | Получить последние 10 новостей |
| [**newsIdPut()**](NewsApi.md#newsIdPut) | **PUT** /news/{id} | Обновить новость |
| [**newsPost()**](NewsApi.md#newsPost) | **POST** /news | Добавить новость |


## `newsIdDelete()`

```php
newsIdDelete($id, $acctoken): \OpenAPI\Client\Model\NewsPost201Response
```

Удалить новость

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID новости
$acctoken = 'acctoken_example'; // string | Токен доступа

try {
    $result = $apiInstance->newsIdDelete($id, $acctoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->newsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID новости | |
| **acctoken** | **string**| Токен доступа | |

### Return type

[**\OpenAPI\Client\Model\NewsPost201Response**](../Model/NewsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newsIdGet()`

```php
newsIdGet($id, $acctoken): \OpenAPI\Client\Model\NewsIdDelete200ResponseInner[]
```

Получить последние 10 новостей

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID новости
$acctoken = 'acctoken_example'; // string | Токен доступа

try {
    $result = $apiInstance->newsIdGet($id, $acctoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->newsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID новости | |
| **acctoken** | **string**| Токен доступа | |

### Return type

[**\OpenAPI\Client\Model\NewsIdDelete200ResponseInner[]**](../Model/NewsIdDelete200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newsIdPut()`

```php
newsIdPut($id, $acctoken, $news_post_request): \OpenAPI\Client\Model\NewsPost201Response
```

Обновить новость

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID новости
$acctoken = 'acctoken_example'; // string | Токен доступа
$news_post_request = new \OpenAPI\Client\Model\NewsPostRequest(); // \OpenAPI\Client\Model\NewsPostRequest

try {
    $result = $apiInstance->newsIdPut($id, $acctoken, $news_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->newsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID новости | |
| **acctoken** | **string**| Токен доступа | |
| **news_post_request** | [**\OpenAPI\Client\Model\NewsPostRequest**](../Model/NewsPostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NewsPost201Response**](../Model/NewsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newsPost()`

```php
newsPost($acctoken, $news_post_request): \OpenAPI\Client\Model\NewsPost201Response
```

Добавить новость

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acctoken = 'acctoken_example'; // string | Токен доступа
$news_post_request = new \OpenAPI\Client\Model\NewsPostRequest(); // \OpenAPI\Client\Model\NewsPostRequest

try {
    $result = $apiInstance->newsPost($acctoken, $news_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->newsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **acctoken** | **string**| Токен доступа | |
| **news_post_request** | [**\OpenAPI\Client\Model\NewsPostRequest**](../Model/NewsPostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NewsPost201Response**](../Model/NewsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
