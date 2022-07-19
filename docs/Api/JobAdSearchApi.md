# OpenAPI\Client\JobAdSearchApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fullTextSearchOnJobadsPOST()**](JobAdSearchApi.md#fullTextSearchOnJobadsPOST) | **POST** /hr/v2/index/{indexname}/jobads/search/full-text/ | Full-Text Search on JobAds
[**searchApplicationsPOST()**](JobAdSearchApi.md#searchApplicationsPOST) | **POST** /hr/v2/index/{indexname}/resume/{resume_id}/applications/jobads/search/ | Search Applications


## `fullTextSearchOnJobadsPOST()`

```php
fullTextSearchOnJobadsPOST($indexname, $default_operator, $cache, $cache_time, $size, $offset, $min_score, $search_id, $job_ad_full_text_search): \OpenAPI\Client\Model\FoundJobAdsResponse
```

Full-Text Search on JobAds

This is the most common way to search a text document through the job advertisements stored in the index *indexname*.  This function takes as input a list of objects containing the terms you wish to search for, please consider that tokens (individual words) grouped together in the same *QueryTerms* element will be queried separately in an **OR** clause, whereas different *QueryTerms* elements will be joined by an **AND** clause. To put it in words, the query will retrieve documents that match at least one word from each element in *QueryTerms*.  This behaviour can be modified in one of two ways:  + The **default_operator** query parameter, which defaults to OR, can be set to AND in order to only find documents that contain ALL of the tokens in a given *query_terms* element. + The **\"** (double quotes) operator, which can be used to wrap strings made up of multiple tokens in order to find documents that contain those words exactly in the order they are presented (sentence match). Remember to escape double quotes in your JSON inputs with a backslash.  Each *QueryTerms* element can be negated with the parameter **Exclude** set to *true*. This is equivalent to setting it in a **NOT** clause.  It's also possible to use wildcards to perform jolly searches, the supported wildcards are:  + \\*: Can be used to match any number of characters in the middle (ad\\*ment) or at the end (doc\\*) of a word. + ?: Can be used to match a single character in any position (?xample).  All queries are case-insensitive and have some amount of fuzziness by default, meaning that typos and character transpositions will be included in the matches. Additionally, filters can be added to form boolean queries on indexed fields. For a comprehensive list and explanation of filters, see the [*Query Filters*](https://api.inda.ai/hr/docs/v2/#tag/Query-Filters) section, the structure is the same.  Query parameters are used to specify the *offset* and *size* of the search. The method uses *cache* = <code style='color: #333333; opacity: 0.9'>true</code> by default, meaning that it will cache automatically each search for *cache_time* seconds. When caching is active, *offset* is ignored; in order to navigate or scroll the entire search response (in chunks of size *size*, as specified in the first search), this method should be used through the *search_id*. When *search_id* is provided, other query parameters are ignored, except *cache_time*.  The use of caching is highly recommended to improve the performances.  Note that a new *search_id* is provided for every scroll. Search IDs are not unique but it is strongly recommended to update the *search_id* at every call of this method with the *SearchID* of the last response. If the *SearchID* is missing or equal to <code style='color: #333333; opacity: 0.9'>null</code>, the scroll has ended.  Beware that the scroll can ONLY go forward in the search cache because it is meant to review large searches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$default_operator = 'OR'; // string | Optional. Change this to *AND* if you wish documents to match ALLof the tokens in a single query_terms element.
$cache = true; // bool | Optional. Whether the search results should be cached or not.
$cache_time = 300; // int | Optional. Seconds. Ignored if *cache* is <code style='color: #333333; opacity: 0.9'>false</code>.
$size = 50; // int | Optional. Number of documents to return.
$offset = 0; // int | Optional. Number of documents to skip. Ignored if *cache* is <code style='color: #333333; opacity: 0.9'>true</code>.
$min_score = 0; // float | Optional. Minimum pertinence score.
$search_id = 'search_id_example'; // string | Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used.
$job_ad_full_text_search = new \OpenAPI\Client\Model\JobAdFullTextSearch(); // \OpenAPI\Client\Model\JobAdFullTextSearch

try {
    $result = $apiInstance->fullTextSearchOnJobadsPOST($indexname, $default_operator, $cache, $cache_time, $size, $offset, $min_score, $search_id, $job_ad_full_text_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdSearchApi->fullTextSearchOnJobadsPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **default_operator** | **string**| Optional. Change this to *AND* if you wish documents to match ALLof the tokens in a single query_terms element. | [optional] [default to &#39;OR&#39;]
 **cache** | **bool**| Optional. Whether the search results should be cached or not. | [optional] [default to true]
 **cache_time** | **int**| Optional. Seconds. Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;false&lt;/code&gt;. | [optional] [default to 300]
 **size** | **int**| Optional. Number of documents to return. | [optional] [default to 50]
 **offset** | **int**| Optional. Number of documents to skip. Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;true&lt;/code&gt;. | [optional] [default to 0]
 **min_score** | **float**| Optional. Minimum pertinence score. | [optional] [default to 0]
 **search_id** | **string**| Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used. | [optional]
 **job_ad_full_text_search** | [**\OpenAPI\Client\Model\JobAdFullTextSearch**](../Model/JobAdFullTextSearch.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FoundJobAdsResponse**](../Model/FoundJobAdsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchApplicationsPOST()`

```php
searchApplicationsPOST($indexname, $resume_id, $cache_time, $size, $search_id, $job_ad_search_query): \OpenAPI\Client\Model\FoundJobAdsResponse
```

Search Applications

This method is meant to return those job advertisements that the resume of ID *resume_id* have applied to, if they respect the given query.  Users may specify [query filters](https://api.inda.ai/hr/docs/v2/#tag/Query-Filters) to apply on both [Applications](https://api.inda.ai/hr/docs/v2/#tag/Application-Management) and [JobAds](https://api.inda.ai/hr/docs/v2/#tag/JobAd-Management) indexed fields.  Query parameters are used to specify the *cache_time* and *size* of the search. The method will automatically cache each search for *cache_time* seconds. In order to navigate or scroll the entire search response (in chunks of size *size*, as specified in the first search), this method should be used through the *search_id*. When *search_id* is provided, other query parameters are ignored, except *cache_time*.  Note that a new *search_id* is provided for every scroll. Search IDs are not unique but it is strongly recommended to update the *search_id* at every call of this method with the *SearchID* of the last response. If the *SearchID* is missing or equal to <code style='color: #333333; opacity: 0.9'>null</code>, the scroll has ended.  Beware that the scroll can ONLY go forward in the search cache because it is meant to review large searches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$cache_time = 300; // int | Optional. Seconds.
$size = 50; // int | Optional. Number of documents to return.
$search_id = 'search_id_example'; // string | Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used.
$job_ad_search_query = new \OpenAPI\Client\Model\JobAdSearchQuery(); // \OpenAPI\Client\Model\JobAdSearchQuery

try {
    $result = $apiInstance->searchApplicationsPOST($indexname, $resume_id, $cache_time, $size, $search_id, $job_ad_search_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdSearchApi->searchApplicationsPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **cache_time** | **int**| Optional. Seconds. | [optional] [default to 300]
 **size** | **int**| Optional. Number of documents to return. | [optional] [default to 50]
 **search_id** | **string**| Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used. | [optional]
 **job_ad_search_query** | [**\OpenAPI\Client\Model\JobAdSearchQuery**](../Model/JobAdSearchQuery.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FoundJobAdsResponse**](../Model/FoundJobAdsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
