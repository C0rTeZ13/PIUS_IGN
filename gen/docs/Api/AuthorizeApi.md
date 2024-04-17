# OpenAPI\Client\AuthorizeApi

All URIs are relative to http://a0872478.xsph.ru/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authtorizePost()**](AuthorizeApi.md#authtorizePost) | **POST** /authtorize | Войти в ОРИОКС |


## `authtorizePost()`

```php
authtorizePost($authtorize_post_request): \OpenAPI\Client\Model\AuthtorizePost201Response
```

Войти в ОРИОКС

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authtorize_post_request = new \OpenAPI\Client\Model\AuthtorizePostRequest(); // \OpenAPI\Client\Model\AuthtorizePostRequest

try {
    $result = $apiInstance->authtorizePost($authtorize_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizeApi->authtorizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authtorize_post_request** | [**\OpenAPI\Client\Model\AuthtorizePostRequest**](../Model/AuthtorizePostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AuthtorizePost201Response**](../Model/AuthtorizePost201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
