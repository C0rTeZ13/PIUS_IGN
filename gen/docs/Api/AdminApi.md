# OpenAPI\Client\AdminApi

All URIs are relative to http://a0872478.xsph.ru/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminPost()**](AdminApi.md#adminPost) | **POST** /admin | Проверить является ли пользователь админом |


## `adminPost()`

```php
adminPost($admin_post_request): \OpenAPI\Client\Model\AdminPost201Response
```

Проверить является ли пользователь админом

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$admin_post_request = new \OpenAPI\Client\Model\AdminPostRequest(); // \OpenAPI\Client\Model\AdminPostRequest

try {
    $result = $apiInstance->adminPost($admin_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **admin_post_request** | [**\OpenAPI\Client\Model\AdminPostRequest**](../Model/AdminPostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdminPost201Response**](../Model/AdminPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
