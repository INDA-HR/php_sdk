# OpenAPI\Client\SkillsApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**similarSkillsGET()**](SkillsApi.md#similarSkillsGET) | **GET** /hr/v2/skills/similar/semantic/ | Similar Skills |
| [**skillsClassificationPOST()**](SkillsApi.md#skillsClassificationPOST) | **POST** /hr/v2/skills/classification/ | Skills Classification |


## `similarSkillsGET()`

```php
similarSkillsGET($query, $size, $min_score, $src_lang, $dst_lang): \OpenAPI\Client\Model\SimilarEntitiesResponse
```

Similar Skills

This method returns the *size* most similar skills found in the knowledge base with respect to the input *skill*.  The similarity of each result to the input skill is rated with a score between <code style='color: #333333; opacity: 0.9'>0</code> (minimum similarity) and <code style='color: #333333; opacity: 0.9'>1</code> (maximum similarity). This method can be used to perform a *keyword expansion*: expanding a skill with its synonyms or semantically similar skills may be useful, for instance, to improve a job description or to perform a more flexible search with respect to a traditional word match or boolean search system.  This method returns a dictionary with keys *Hits* (the number of skills returned) and *Out*, which is a list of dictionaries with two keys: the first key (*Term*) contains the proposed skill, while the second one (*Score*)  contains its similarity score, as described above. The parameter *min_score* set the threshold for the similarity score, below which the output skills are discarded; its default value is <code style='color: #333333; opacity: 0.9'>0.5</code>.  Note that the number of retrieved similar skills may be smaller than *size* when the minimum score is larger than zero or when the searched skill is particularly uncommon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Input skill to be analyzed
$size = 5; // int | Number of similar skills to return.
$min_score = 0.5; // float | Minimum pertinence score.
$src_lang = 'src_lang_example'; // string | Optional. Language of the input skills.If missing, the detected language is assumed as `src_lang`.
$dst_lang = 'dst_lang_example'; // string | Optional. Language of the input skills.If missing, the detected language is assumed as `src_lang`.

try {
    $result = $apiInstance->similarSkillsGET($query, $size, $min_score, $src_lang, $dst_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillsApi->similarSkillsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Input skill to be analyzed | |
| **size** | **int**| Number of similar skills to return. | [optional] [default to 5] |
| **min_score** | **float**| Minimum pertinence score. | [optional] [default to 0.5] |
| **src_lang** | **string**| Optional. Language of the input skills.If missing, the detected language is assumed as &#x60;src_lang&#x60;. | [optional] |
| **dst_lang** | **string**| Optional. Language of the input skills.If missing, the detected language is assumed as &#x60;src_lang&#x60;. | [optional] |

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

## `skillsClassificationPOST()`

```php
skillsClassificationPOST($skills_classification_request, $src_lang): \OpenAPI\Client\Model\SkillsClassificationResponse
```

Skills Classification

This method returns a label associated to each given skill among the following: <code style='color: #333333; opacity: 0.9'>hard</code>, <code style='color: #333333; opacity: 0.9'>IT</code>, <code style='color: #333333; opacity: 0.9'>soft</code> and <code style='color: #333333; opacity: 0.9'>language</code>.  The request is structured according two main fields: *lang* and *skills*.  The *lang* field allows users to set the main language to which the skills to classify belong.  The *skills* field is merely the list of terms for which users want to find the closest category among the aforementioned ones. Please note that if a term is not recognized as a skill, it will be absent from the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skills_classification_request = {"Skills":["microsoft office","flexibility","chinese cuisine","bulgarian"]}; // \OpenAPI\Client\Model\SkillsClassificationRequest
$src_lang = 'src_lang_example'; // string | Language of the input skills.

try {
    $result = $apiInstance->skillsClassificationPOST($skills_classification_request, $src_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillsApi->skillsClassificationPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skills_classification_request** | [**\OpenAPI\Client\Model\SkillsClassificationRequest**](../Model/SkillsClassificationRequest.md)|  | |
| **src_lang** | **string**| Language of the input skills. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SkillsClassificationResponse**](../Model/SkillsClassificationResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
