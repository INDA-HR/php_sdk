# OpenAPI\Client\ResumeToResumesApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**similarResumesPOST()**](ResumeToResumesApi.md#similarResumesPOST) | **POST** /hr/v2/index/{indexname}/resumes/matching/resume/{resume_id}/ | Similar Resumes |


## `similarResumesPOST()`

```php
similarResumesPOST($indexname, $resume_id, $similar_docs_search_query, $size, $offset, $min_score, $dst_lang): \OpenAPI\Client\Model\FoundDocsResponse
```

Similar Resumes

Setting as arguments the number *size* of documents to be retrieved and the number *offset* to be skipped, this method returns similar documents to resume *resume_id* in the index *indexname*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeToResumesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$similar_docs_search_query = new \OpenAPI\Client\Model\SimilarDocsSearchQuery(); // \OpenAPI\Client\Model\SimilarDocsSearchQuery
$size = 5; // int | Number of documents to return.
$offset = 0; // int | Number of documents to skip.
$min_score = 0; // float | Optional. Minimum pertinence score.
$dst_lang = array('dst_lang_example'); // string[] | Results languages. If left empty then the results will not be filtered by language and the they will contain multi-language results.

try {
    $result = $apiInstance->similarResumesPOST($indexname, $resume_id, $similar_docs_search_query, $size, $offset, $min_score, $dst_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeToResumesApi->similarResumesPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **resume_id** | **string**|  | |
| **similar_docs_search_query** | [**\OpenAPI\Client\Model\SimilarDocsSearchQuery**](../Model/SimilarDocsSearchQuery.md)|  | |
| **size** | **int**| Number of documents to return. | [optional] [default to 5] |
| **offset** | **int**| Number of documents to skip. | [optional] [default to 0] |
| **min_score** | **float**| Optional. Minimum pertinence score. | [optional] [default to 0] |
| **dst_lang** | [**string[]**](../Model/string.md)| Results languages. If left empty then the results will not be filtered by language and the they will contain multi-language results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FoundDocsResponse**](../Model/FoundDocsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
