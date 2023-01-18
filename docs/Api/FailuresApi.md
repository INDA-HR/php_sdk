# OpenAPI\Client\FailuresApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFailuresGET()**](FailuresApi.md#getFailuresGET) | **GET** /hr/v2/index/{indexname}/failures/ | Get Failures |


## `getFailuresGET()`

```php
getFailuresGET($indexname, $import_id, $resume_id, $jobad_id, $doc_type): \OpenAPI\Client\Model\IndexedDocumentFailuresResponse
```

Get Failures

This method returns a list of documents that failed to be uploaded to *indexname*.  Note that the optional query parameters (see the schema below) allow to narrow the search to a specific item or import.  Users may also indicate a *doc_type* of interest, and retrieve just the failed documents of that type.   Allowed values for the *doc_type* parameter are: + <code style='color: #333333; opacity: 0.9'>resume</code> for [resumes](https://api.inda.ai/hr/docs/v2/#tag/Resume-Management); + <code style='color: #333333; opacity: 0.9'>job-ad</code> for [job adverts](https://api.inda.ai/hr/docs/v2/#tag/JobAd-Management); + <code style='color: #333333; opacity: 0.9'>application</code> for [applications](https://api.inda.ai/hr/docs/v2/#tag/Application-Management).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FailuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$import_id = 'import_id_example'; // string
$resume_id = 'resume_id_example'; // string
$jobad_id = 'jobad_id_example'; // string
$doc_type = 'doc_type_example'; // string

try {
    $result = $apiInstance->getFailuresGET($indexname, $import_id, $resume_id, $jobad_id, $doc_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FailuresApi->getFailuresGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **import_id** | **string**|  | [optional] |
| **resume_id** | **string**|  | [optional] |
| **jobad_id** | **string**|  | [optional] |
| **doc_type** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IndexedDocumentFailuresResponse**](../Model/IndexedDocumentFailuresResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
