# OpenAPI\Client\AuthenticationApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**logInPOST()**](AuthenticationApi.md#logInPOST) | **POST** /hr/v2/auth/login/ | Log In


## `logInPOST()`

```php
logInPOST($login_data): \OpenAPI\Client\Model\TokenResponse
```

Log In

This method allows a user to log into the service and receive access credentials in the form of a bearer token. The token expires after  *ExpiresIn* seconds, as detailed in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_data = {"Tenant":"user","Password":"example","Email":"user@example.com"}; // \OpenAPI\Client\Model\LoginData

try {
    $result = $apiInstance->logInPOST($login_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->logInPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_data** | [**\OpenAPI\Client\Model\LoginData**](../Model/LoginData.md)|  |

### Return type

[**\OpenAPI\Client\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
