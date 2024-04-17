# OpenAPI\Client\CanteenApi

All URIs are relative to http://a0872478.xsph.ru/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**canteenGet()**](CanteenApi.md#canteenGet) | **GET** /canteen | Получить все блюда |
| [**canteenIdDelete()**](CanteenApi.md#canteenIdDelete) | **DELETE** /canteen/{id} | Удалить блюдо |
| [**canteenIdPut()**](CanteenApi.md#canteenIdPut) | **PUT** /canteen/{id} | Обновить блюдо |
| [**canteenPost()**](CanteenApi.md#canteenPost) | **POST** /canteen | Добавить блюдо |


## `canteenGet()`

```php
canteenGet($acctoken): \OpenAPI\Client\Model\CanteenGet200ResponseInner[]
```

Получить все блюда

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CanteenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acctoken = 'acctoken_example'; // string | Токен доступа

try {
    $result = $apiInstance->canteenGet($acctoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CanteenApi->canteenGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **acctoken** | **string**| Токен доступа | |

### Return type

[**\OpenAPI\Client\Model\CanteenGet200ResponseInner[]**](../Model/CanteenGet200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canteenIdDelete()`

```php
canteenIdDelete($id, $acctoken): \OpenAPI\Client\Model\NewsPost201Response
```

Удалить блюдо

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CanteenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID блюда
$acctoken = 'acctoken_example'; // string | Токен доступа

try {
    $result = $apiInstance->canteenIdDelete($id, $acctoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CanteenApi->canteenIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID блюда | |
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

## `canteenIdPut()`

```php
canteenIdPut($id, $acctoken, $canteen_get_request): \OpenAPI\Client\Model\NewsPost201Response
```

Обновить блюдо

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CanteenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID блюда
$acctoken = 'acctoken_example'; // string | Токен доступа
$canteen_get_request = new \OpenAPI\Client\Model\CanteenGetRequest(); // \OpenAPI\Client\Model\CanteenGetRequest

try {
    $result = $apiInstance->canteenIdPut($id, $acctoken, $canteen_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CanteenApi->canteenIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID блюда | |
| **acctoken** | **string**| Токен доступа | |
| **canteen_get_request** | [**\OpenAPI\Client\Model\CanteenGetRequest**](../Model/CanteenGetRequest.md)|  | |

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

## `canteenPost()`

```php
canteenPost($acctoken, $canteen_get_request): \OpenAPI\Client\Model\NewsPost201Response
```

Добавить блюдо

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CanteenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acctoken = 'acctoken_example'; // string | Токен доступа
$canteen_get_request = new \OpenAPI\Client\Model\CanteenGetRequest(); // \OpenAPI\Client\Model\CanteenGetRequest

try {
    $result = $apiInstance->canteenPost($acctoken, $canteen_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CanteenApi->canteenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **acctoken** | **string**| Токен доступа | |
| **canteen_get_request** | [**\OpenAPI\Client\Model\CanteenGetRequest**](../Model/CanteenGetRequest.md)|  | |

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
