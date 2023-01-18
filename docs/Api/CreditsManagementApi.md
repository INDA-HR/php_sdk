# OpenAPI\Client\CreditsManagementApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchCreditsPOST()**](CreditsManagementApi.md#searchCreditsPOST) | **POST** /hr/v2/index/{indexname}/credits/ | Search Credits |


## `searchCreditsPOST()`

```php
searchCreditsPOST($indexname, $search_credits_request): \OpenAPI\Client\Model\IndexCreditsInfo
```

Search Credits

Returns the available credits and the history of the API calls already made for the purchased services belonging to *indexname*.  This method will accept an application/json body with optional fields, which allow users to filter or aggregate data according to their needs.  In principle, API call names are the ones shown in this documentation; refer to each method section for additional  details and/or possible changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CreditsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$search_credits_request = {"Info":["suite","history"],"History":{"APICalls":["Parse Resume","Add Resume","Delete Resume"],"Datetime":{"Begin":"2020-02-05","End":"2020-02-28"},"GroupBy":["api_calls","advanced"],"Detail":true,"Advanced":true,"Price":true}}; // \OpenAPI\Client\Model\SearchCreditsRequest

try {
    $result = $apiInstance->searchCreditsPOST($indexname, $search_credits_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsManagementApi->searchCreditsPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **search_credits_request** | [**\OpenAPI\Client\Model\SearchCreditsRequest**](../Model/SearchCreditsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IndexCreditsInfo**](../Model/IndexCreditsInfo.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
