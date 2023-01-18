# OpenAPI\Client\UtilitiesApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clearIndexCacheDELETE()**](UtilitiesApi.md#clearIndexCacheDELETE) | **DELETE** /hr/v2/index/{indexname}/cache/ | Clear Index Cache |
| [**healthStatusGET()**](UtilitiesApi.md#healthStatusGET) | **GET** /hr/v2/ | Health Status |


## `clearIndexCacheDELETE()`

```php
clearIndexCacheDELETE($indexname, $clean_failures, $clean_imports, $clean_queues, $clean_fielddata, $clean_queries, $clean_requests, $wait_for_completion): \OpenAPI\Client\Model\IndexCacheDeletionResponse
```

Clear Index Cache

This method clears all standard and monitoring caches for given index. The *query parameters* allow to choose which caches should be cleared and to choose whether or not the method should wait to respond until the processing is completed.   The following caches can be cleared: + **Failed Documents**: Deletes all entries of failed documents cached for the index. + **Import statuses**: Deletes all entries of import statuses cached for the index. + **Tasks Queue**: Deletes tracking of all jobs scheduled to be performed on the index. WARNING: Does not delete the jobs themselves and does not prevent other jobs to be queued. + **Field data**: Deletes all field data on the index that are still cached. + **Queries Cache**: Deletes all queries performed on the index that are still cached. + **Requests Cache**: Deletes all requests performed on the index that are still cached.  *NOTE: Use only as a debug option!*

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$clean_failures = true; // bool | Whether or not the document failures should be cleaned.
$clean_imports = true; // bool | Whether or not the import statuses should be cleaned.
$clean_queues = true; // bool | Whether or not the queue should be cleaned.It cannot stop running tasks or prevent new tasks to be queued.
$clean_fielddata = true; // bool | Whether or not the fields cache should be cleaned.
$clean_queries = true; // bool | Whether or not the queries cache should be cleaned.
$clean_requests = true; // bool | Whether or not the requests cache should be cleaned.
$wait_for_completion = true; // bool | Whether or not the method should wait to responduntil the processing is completed.

try {
    $result = $apiInstance->clearIndexCacheDELETE($indexname, $clean_failures, $clean_imports, $clean_queues, $clean_fielddata, $clean_queries, $clean_requests, $wait_for_completion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->clearIndexCacheDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **clean_failures** | **bool**| Whether or not the document failures should be cleaned. | [optional] [default to true] |
| **clean_imports** | **bool**| Whether or not the import statuses should be cleaned. | [optional] [default to true] |
| **clean_queues** | **bool**| Whether or not the queue should be cleaned.It cannot stop running tasks or prevent new tasks to be queued. | [optional] [default to true] |
| **clean_fielddata** | **bool**| Whether or not the fields cache should be cleaned. | [optional] [default to true] |
| **clean_queries** | **bool**| Whether or not the queries cache should be cleaned. | [optional] [default to true] |
| **clean_requests** | **bool**| Whether or not the requests cache should be cleaned. | [optional] [default to true] |
| **wait_for_completion** | **bool**| Whether or not the method should wait to responduntil the processing is completed. | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\IndexCacheDeletionResponse**](../Model/IndexCacheDeletionResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `healthStatusGET()`

```php
healthStatusGET(): \OpenAPI\Client\Model\Check
```

Health Status

This method checks whether the service is up and running.  Returns the *status* of the service: <code style='color: #333333; opacity: 0.9'>green</code>, <code style='color: #333333; opacity: 0.9'>yellow</code> or <code style='color: #333333; opacity: 0.9'>red</code>.  A <code style='color: #333333; opacity: 0.9'>yellow</code> status means that at least the 80% of the services are available, <code style='color: #333333; opacity: 0.9'>red</code> that something is definitely not working properly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->healthStatusGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->healthStatusGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Check**](../Model/Check.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
