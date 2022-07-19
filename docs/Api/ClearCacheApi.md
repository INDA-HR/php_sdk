# OpenAPI\Client\ClearCacheApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearSearchResultsDELETE()**](ClearCacheApi.md#clearSearchResultsDELETE) | **DELETE** /hr/v2/index/{indexname}/resumes/search/scroll/ | Clear Search Results


## `clearSearchResultsDELETE()`

```php
clearSearchResultsDELETE($indexname, $search_id): \OpenAPI\Client\Model\CacheDeletion
```

Clear Search Results

This method deletes the *SearchID* and the cache previously (and eventually) created by all those API calls that have a *SearchID* key in their response. They include: + [Full-Text Search on Resumes](https://api.inda.ai/hr/docs/v2/#operation/full-text_search_on_resumes__POST) + [Full-Text Search on JobAds](https://api.inda.ai/hr/docs/v2/#operation/full-text_search_on_jobads__POST) + [Search Resumes](https://api.inda.ai/hr/docs/v2/#operation/search_resumes__POST) + [Search Applicants](https://api.inda.ai/hr/docs/v2/#operation/search_applicants__POST) + [Search Applications](https://api.inda.ai/hr/docs/v2/#operation/search_applications__POST) + [Get JobAds](https://api.inda.ai/hr/docs/v2/#operation/get_jobads__GET) + [Get Applicants](https://api.inda.ai/hr/docs/v2/#operation/get_applicants__GET) + [Get Applications](https://api.inda.ai/hr/docs/v2/#operation/get_applications__GET)  When a user leaves a search page linked to INDA API, it is a good practice to delete the search cache using this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClearCacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$search_id = 'search_id_example'; // string

try {
    $result = $apiInstance->clearSearchResultsDELETE($indexname, $search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClearCacheApi->clearSearchResultsDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **search_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\CacheDeletion**](../Model/CacheDeletion.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
