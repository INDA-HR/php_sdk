# OpenAPI\Client\KeywordsSearchApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**keywordsAutocompleteGET()**](KeywordsSearchApi.md#keywordsAutocompleteGET) | **GET** /hr/v2/keywords/search/autocomplete/ | Keywords Autocomplete |
| [**similarWordsInResumePOST()**](KeywordsSearchApi.md#similarWordsInResumePOST) | **POST** /hr/v2/index/{indexname}/resume/{resume_id}/keywords/search/semantic/ | Similar Words in Resume |
| [**similarWordsPOST()**](KeywordsSearchApi.md#similarWordsPOST) | **POST** /hr/v2/keywords/search/semantic/ | Similar Words |


## `keywordsAutocompleteGET()`

```php
keywordsAutocompleteGET($term): \OpenAPI\Client\Model\AutocompleteResponse
```

Keywords Autocomplete

This method performs token autocompletion, based on a INDA dictionary, i.e., a large dictionary specialized to recruiting domain. An example of application is to improve the user experience of a recruiter who is writing search keywords for candidate screening.  The *term* to be completed (see *query parameters* below) must contain at least *2* characters. The output contains a list of possible complete terms sorted with respect to the frequency in INDA dictionary (the list is associated with the key *candidates*, as shown in the example on the right).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeywordsSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$term = 'term_example'; // string | Token to be completed

try {
    $result = $apiInstance->keywordsAutocompleteGET($term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordsSearchApi->keywordsAutocompleteGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **term** | **string**| Token to be completed | |

### Return type

[**\OpenAPI\Client\Model\AutocompleteResponse**](../Model/AutocompleteResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `similarWordsInResumePOST()`

```php
similarWordsInResumePOST($indexname, $resume_id, $similar_words_query, $size, $src_lang): \OpenAPI\Client\Model\KeywordsResponse
```

Similar Words in Resume

This method works as the method [Similar Words](https://api.inda.ai/hr/docs/v2/#operation/similar_words__POST), but it is restricted to the words contained in the resume *resume_id*.  It could be used, for instance, to inspect a document found via [Search Resumes](https://api.inda.ai/hr/docs/v2/#operation/search_resumes__POST) in order to have better insights on the most similar words in the document to each query term used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeywordsSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$similar_words_query = {"QueryTerms":[{"Term":"marketing","Language":"en"},{"Term":"metalmeccanico","Language":"it"}]}; // \OpenAPI\Client\Model\SimilarWordsQuery
$size = 3; // int | Number of elements to be returned, must be greater than <code style='color: #333333; opacity: 0.9'>0</code> and smaller or equal to <code style='color: #333333; opacity: 0.9'>5</code>.
$src_lang = 'src_lang_example'; // string | Queries language. If left empty each query's language will detected automatically, if not it is not explicitly set into the request body.

try {
    $result = $apiInstance->similarWordsInResumePOST($indexname, $resume_id, $similar_words_query, $size, $src_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordsSearchApi->similarWordsInResumePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **resume_id** | **string**|  | |
| **similar_words_query** | [**\OpenAPI\Client\Model\SimilarWordsQuery**](../Model/SimilarWordsQuery.md)|  | |
| **size** | **int**| Number of elements to be returned, must be greater than &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;0&lt;/code&gt; and smaller or equal to &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;5&lt;/code&gt;. | [optional] [default to 3] |
| **src_lang** | **string**| Queries language. If left empty each query&#39;s language will detected automatically, if not it is not explicitly set into the request body. | [optional] |

### Return type

[**\OpenAPI\Client\Model\KeywordsResponse**](../Model/KeywordsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `similarWordsPOST()`

```php
similarWordsPOST($similar_words_query, $size, $src_lang): \OpenAPI\Client\Model\KeywordsResponse
```

Similar Words

Given a list of *query* terms, this method returns, for each term, the *size* most similar words found in vocabulary. The similarity of each result to the corresponding query term is rated with a score between <code style='color: #333333; opacity: 0.9'>0</code> (minimum similarity) and <code style='color: #333333; opacity: 0.9'>1</code> (maximum similarity).  This method can be used to perform a **keyword expansion**: expanding a query word with its synonyms or semantically similar words allows a more flexible search with respect to a traditional word match or boolean search system. Note that each element of *query terms* is considered independently from the others.  This method returns a dictionary with keys *Hits* (the number of *query terms* found in vocabulary), *OutOfVocabulary* (the number of query terms not found in vocabulary), and *Out*, which is a list of dictionaries with two keys: the first key (*Query*) contains the query term, while the second one (*Results*) contains a list of dictionaries, one for each similar word. Each dictionary contains the word retrieved (*Term*) and its *Score* representing the similarity with the searched word, ranging from <code style='color: #333333; opacity: 0.9'>0</code> (minimum similarity) to <code style='color: #333333; opacity: 0.9'>1</code> (maximum similarity).  If all searched words are out of vocabulary, an error is raised.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeywordsSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$similar_words_query = {"QueryTerms":[{"Term":"marketing","Language":"en"},{"Term":"metalmeccanico","Language":"it"}]}; // \OpenAPI\Client\Model\SimilarWordsQuery
$size = 3; // int | Number of elements to be returned, must be greater than <code style='color: #333333; opacity: 0.9'>0</code> and smaller or equal to <code style='color: #333333; opacity: 0.9'>5</code>.
$src_lang = 'src_lang_example'; // string | Queries language. If left empty each query's language will detected automatically, if not it is not explicitly set into the request body.

try {
    $result = $apiInstance->similarWordsPOST($similar_words_query, $size, $src_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordsSearchApi->similarWordsPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **similar_words_query** | [**\OpenAPI\Client\Model\SimilarWordsQuery**](../Model/SimilarWordsQuery.md)|  | |
| **size** | **int**| Number of elements to be returned, must be greater than &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;0&lt;/code&gt; and smaller or equal to &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;5&lt;/code&gt;. | [optional] [default to 3] |
| **src_lang** | **string**| Queries language. If left empty each query&#39;s language will detected automatically, if not it is not explicitly set into the request body. | [optional] |

### Return type

[**\OpenAPI\Client\Model\KeywordsResponse**](../Model/KeywordsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
