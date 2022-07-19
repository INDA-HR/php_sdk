# OpenAPI\Client\OccupationsApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**similarJobtitlesGET()**](OccupationsApi.md#similarJobtitlesGET) | **GET** /hr/v2/occupations/similar/semantic/ | Similar JobTitles


## `similarJobtitlesGET()`

```php
similarJobtitlesGET($query, $size, $min_score, $lang): \OpenAPI\Client\Model\SimilarEntitiesResponse
```

Similar JobTitles

This method returns the *size* most similar job titles found in the knowledge base with respect to the input *jobtitle*.  The similarity of each result to the input job title is rated with a score between <code style='color: #333333; opacity: 0.9'>0</code> (minimum similarity) and <code style='color: #333333; opacity: 0.9'>1</code> (maximum similarity). This method can be used to perform a *keyword expansion*: expanding a job title with its synonyms or semantically similar job titles may be useful, for instance, to improve a job description or to perform a more flexible search with respect to a traditional word match or boolean search system.  This method returns a dictionary with keys *Hits* (the number of job titles returned) and *Out*, which is a list of dictionaries with two keys: the first key (*Term*) contains the proposed job title, while the second one (*Score*)  contains its similarity score, as described above. The parameter *min_score* set the threshold for the similarity score, below which the output skills are discarded; its default value is <code style='color: #333333; opacity: 0.9'>0.5</code>.  Note that the number of retrieved similar job titles may be smaller than *size* when the minimum score is larger than  <code style='color: #333333; opacity: 0.9'>0</code> or when the searched job title is particularly uncommon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OccupationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Input job title to be analyzed
$size = 10; // int | Number of similar job titles to return.
$min_score = 0.5; // float | Minimum pertinence score.
$lang = 'it'; // string | Language of the jobtitle.

try {
    $result = $apiInstance->similarJobtitlesGET($query, $size, $min_score, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationsApi->similarJobtitlesGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Input job title to be analyzed |
 **size** | **int**| Number of similar job titles to return. | [optional] [default to 10]
 **min_score** | **float**| Minimum pertinence score. | [optional] [default to 0.5]
 **lang** | **string**| Language of the jobtitle. | [optional] [default to &#39;it&#39;]

### Return type

[**\OpenAPI\Client\Model\SimilarEntitiesResponse**](../Model/SimilarEntitiesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
