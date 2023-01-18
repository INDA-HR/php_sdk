# OpenAPI\Client\ResumeSearchApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fullTextSearchOnResumesPOST()**](ResumeSearchApi.md#fullTextSearchOnResumesPOST) | **POST** /hr/v2/index/{indexname}/resumes/search/full-text/ | Full-Text Search on Resumes |
| [**searchApplicantsPOST()**](ResumeSearchApi.md#searchApplicantsPOST) | **POST** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resumes/search/ | Search Applicants |
| [**searchResumesEvidencePOST()**](ResumeSearchApi.md#searchResumesEvidencePOST) | **POST** /hr/v2/index/{indexname}/resumes/search/semantic/evidence/ | Search Resumes Evidence |
| [**searchResumesPOST()**](ResumeSearchApi.md#searchResumesPOST) | **POST** /hr/v2/index/{indexname}/resumes/search/semantic/ | Search Resumes |


## `fullTextSearchOnResumesPOST()`

```php
fullTextSearchOnResumesPOST($indexname, $default_operator, $cache, $cache_time, $size, $offset, $min_score, $search_id, $traditional_docs_search_query): \OpenAPI\Client\Model\FoundDocsResponse
```

Full-Text Search on Resumes

This is the most common way to search a text document through the resumes stored in the index *indexname*. This function takes as input a list of objects containing the terms you wish to search for, please consider that tokens (individual words) grouped together in the same *QueryTerms* element will be queried separately in an **OR** clause, whereas different *QueryTerms* elements will be joined by an **AND** clause. To put it in words, the query will retrieve documents that match at least one word from each element in *QueryTerms*.  This behaviour can be modified in one of two ways:  + The **default_operator** query parameter, which defaults to OR, can be set to AND in order to only find documents that contain ALL of the tokens in a given *QueryTerms* element. + The **\"** (double quotes) operator, which can be used to wrap strings made up of multiple tokens in order to find documents that contain those words exactly in the order they are presented (sentence match). Remember to escape double quotes in your JSON inputs with a backslash.  Each *QueryTerms* element can be negated with the parameter **Exclude** set to *true*. This is equivalent to setting it in a **NOT** clause.  It's also possible to use wildcards to perform jolly searches, the supported wildcards are:  + \\*: Can be used to match any number of characters in the middle (ad\\*ment) or at the end (doc\\*) of a word. + ?: Can be used to match a single character in any position (?xample).  All queries are case-insensitive and have some amount of fuzziness by default, meaning that typos and character transpositions will be included in the matches. Additionally, filters can be added to form boolean queries on indexed fields. For a comprehensive list and explanation of filters, see the [*Query Filters*](https://api.inda.ai/hr/docs/v2/#tag/Query-Filters) section, the structure is the same.  The method returns a list of JSON documents, each of which contains a resume; the resumes are sorted according to a **pertinence score** determined by their relevance to the used query terms.  Query parameters are used to specify the *offset*, *size* and *min_score* of the search. The method uses *cache* = <code style='color: #333333; opacity: 0.9'>true</code> by default, meaning that it will cache automatically each search for *cache_time* seconds. When caching is active, *offset* is ignored because it's meant navigate the entire search response (in chunks of size *size*) through the *search_id*. The use of caching is highly recommended to improve the performance. Note that a new *search_id* is provided for every scroll. Search IDs are not unique but it is strongly recommended to update the *search_id* at every call of this method with the *SearchID* of the last response. If the *SearchID* is missing or equal to <code style='color: #333333; opacity: 0.9'>null</code>, the scroll has ended.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeSearchApi(
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
$traditional_docs_search_query = new \OpenAPI\Client\Model\TraditionalDocsSearchQuery(); // \OpenAPI\Client\Model\TraditionalDocsSearchQuery

try {
    $result = $apiInstance->fullTextSearchOnResumesPOST($indexname, $default_operator, $cache, $cache_time, $size, $offset, $min_score, $search_id, $traditional_docs_search_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeSearchApi->fullTextSearchOnResumesPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **default_operator** | **string**| Optional. Change this to *AND* if you wish documents to match ALLof the tokens in a single query_terms element. | [optional] [default to &#39;OR&#39;] |
| **cache** | **bool**| Optional. Whether the search results should be cached or not. | [optional] [default to true] |
| **cache_time** | **int**| Optional. Seconds. Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;false&lt;/code&gt;. | [optional] [default to 300] |
| **size** | **int**| Optional. Number of documents to return. | [optional] [default to 50] |
| **offset** | **int**| Optional. Number of documents to skip. Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;true&lt;/code&gt;. | [optional] [default to 0] |
| **min_score** | **float**| Optional. Minimum pertinence score. | [optional] [default to 0] |
| **search_id** | **string**| Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used. | [optional] |
| **traditional_docs_search_query** | [**\OpenAPI\Client\Model\TraditionalDocsSearchQuery**](../Model/TraditionalDocsSearchQuery.md)|  | [optional] |

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

## `searchApplicantsPOST()`

```php
searchApplicantsPOST($indexname, $jobad_id, $cache_time, $size, $search_id, $candidate_search_query): \OpenAPI\Client\Model\FoundCandidatesResponse
```

Search Applicants

This method is meant to return those applicants (i.e., resumes) of the job advert with ID *jobad_id* that respect the given query.  Users may specify [query filters](https://api.inda.ai/hr/docs/v2/#tag/Query-Filters) to apply on both [Applications](https://api.inda.ai/hr/docs/v2/#tag/Application-Management) and [Resumes](https://api.inda.ai/hr/docs/v2/#tag/Resume-Management) indexed fields.  Query parameters are used to specify the *cache_time* and *size* of the search. The method will automatically cache each search for *cache_time* seconds. In order to navigate or scroll the entire search response (in chunks of size *size*, as specified in the first search), this method should be used through the *search_id*. When *search_id* is provided, other query parameters are ignored, except *cache_time*.  Note that a new *search_id* is provided for every scroll. Search IDs are not unique but it is strongly recommended to update the *search_id* at every call of this method with the *SearchID* of the last response. If the *SearchID* is missing or equal to <code style='color: #333333; opacity: 0.9'>null</code>, the scroll has ended.  Beware that the scroll can ONLY go forward in the search cache because it is meant to review large searches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = new \OpenAPI\Client\Model\JobadId(); // JobadId
$cache_time = 300; // int | Optional. Seconds.
$size = 50; // int | Optional. Number of documents to return.
$search_id = 'search_id_example'; // string | Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used.
$candidate_search_query = new \OpenAPI\Client\Model\CandidateSearchQuery(); // \OpenAPI\Client\Model\CandidateSearchQuery

try {
    $result = $apiInstance->searchApplicantsPOST($indexname, $jobad_id, $cache_time, $size, $search_id, $candidate_search_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeSearchApi->searchApplicantsPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **jobad_id** | [**JobadId**](../Model/.md)|  | |
| **cache_time** | **int**| Optional. Seconds. | [optional] [default to 300] |
| **size** | **int**| Optional. Number of documents to return. | [optional] [default to 50] |
| **search_id** | **string**| Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used. | [optional] |
| **candidate_search_query** | [**\OpenAPI\Client\Model\CandidateSearchQuery**](../Model/CandidateSearchQuery.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FoundCandidatesResponse**](../Model/FoundCandidatesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchResumesEvidencePOST()`

```php
searchResumesEvidencePOST($indexname, $evidence_request, $size, $src_lang): \OpenAPI\Client\Model\SearchEvidence[]
```

Search Resumes Evidence

Provides evidence for [Search Resumes](https://api.inda.ai/hr/docs/v2/#operation/search_resumes__POST) by returning the *size* most relevant words in each resume *resume_id* (listed into the list *resume_ids*) with respect to the *QueryTerms*. Note that -- unlike in the Related Words methods ([Similar Words](https://api.inda.ai/hr/docs/v2/#operation/similar_words__POST) and [Similar Words In Doc](https://api.inda.ai/hr/docs/v2/#operation/similar_words_in_resume__POST)) -- the elements of *QueryTerms* are combined together. Hence, the output minimizes the distance from all query terms simultaneously.  It returns a list of objects each containing the resume *resume_id* (*ID*) and a list of *Terms*.  Any *resume_id* not corresponding to an available resume in the index *indexname* will be ignored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$evidence_request = {"QueryTerms":[{"Term":"marketing","Weight":0.3},{"Term":"machine learning","Weight":0.8}],"ResumeIDs":["a9f9ebe8-a01c-4be5-9ae8-e67bc5c643be","23db1bf4-c103-4193-826b-924dff3e1bec"]}; // \OpenAPI\Client\Model\EvidenceRequest
$size = 3; // int | Number of elements to be returned, must be greater than <code style='color: #333333; opacity: 0.9'>0</code> and smaller or equal to <code style='color: #333333; opacity: 0.9'>5</code>.
$src_lang = 'src_lang_example'; // string | Queries language. If left empty each query's language will detected automatically, if not it is not explicitly set into the request body.

try {
    $result = $apiInstance->searchResumesEvidencePOST($indexname, $evidence_request, $size, $src_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeSearchApi->searchResumesEvidencePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **evidence_request** | [**\OpenAPI\Client\Model\EvidenceRequest**](../Model/EvidenceRequest.md)|  | |
| **size** | **int**| Number of elements to be returned, must be greater than &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;0&lt;/code&gt; and smaller or equal to &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;5&lt;/code&gt;. | [optional] [default to 3] |
| **src_lang** | **string**| Queries language. If left empty each query&#39;s language will detected automatically, if not it is not explicitly set into the request body. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SearchEvidence[]**](../Model/SearchEvidence.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchResumesPOST()`

```php
searchResumesPOST($indexname, $cache, $cache_time, $size, $offset, $min_score, $search_id, $src_lang, $dst_lang, $docs_search_query): \OpenAPI\Client\Model\FoundDocsResponse
```

Search Resumes

This method performs a semantic search of resumes in index *indexname* according to the given query.  Compared with traditional search engines, *INDA Semantic Search* enables users to search in a pool of resumes in a more flexible way: search results are not limited to term matches but they include all resumes that are semantically close to the query.  Furthermore, in order to tackle the bias problem, INDA automatically ignores specific fields (such as name, gender, age and nationality) during the initial processing of each candidate data. We are constantly working on reduce the bias in original data so that INDA results may be as fair as possible.  The semantic search can be complemented with a traditional filter-based search through the [filters](https://api.inda.ai/hr/docs/v2/#tag/Search) built inside the *QueryFilters* field.  The desired query must be specified in the application/json content type body (see the example on the right). The elements of *QueryTerms* are mandatory and each of them must be associated with a weight between <code style='color: #333333; opacity: 0.9'>0</code> and <code style='color: #333333; opacity: 0.9'>1</code>, which determines the importance of the term in the search.  The method returns a list of JSON documents, each of which contains a resume; the resumes are sorted according to a **pertinence score** determined on the basis of their semantic similarity with the query terms. Note that each resume is evaluated based on the semantic similarity with respect to all query terms (where each query term is weighted according to its *weight*).  Query parameters are used to specify the *offset*, *size* and *min_score* of the search. The method uses *cache* = <code style='color: #333333; opacity: 0.9'>true</code> by default, meaning that it will cache automatically each search for *cache_time* seconds. When caching is active, *offset* is ignored because to navigate the entire search response (in chunks of size *size*) through the *search_id*. The use of caching is highly recommended to improve the performance. Search IDs are not unique but it is strongly recommended to update the *search_id* at every call of this method with the *SearchID* of the last response. If the *SearchID* is missing or equal to <code style='color: #333333; opacity: 0.9'>null</code>, the scroll has ended.  Please consider to use the [Semantic Search Feedback](https://api.inda.ai/hr/docs/v2/#operation/semantic_search_feedback__POST) to evaluate the provided ranking  of resumes. It is very useful to improve our algorithms' performances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$cache = true; // bool | Optional. Whether the search results should be cached or not.
$cache_time = 300; // int | Optional. Seconds. Ignored if *cache* is <code style='color: #333333; opacity: 0.9'>false</code>.
$size = 50; // int | Optional. Number of documents to return.
$offset = 0; // int | Optional. Number of documents to skip. Ignored if *cache* is <code style='color: #333333; opacity: 0.9'>true</code>.
$min_score = 0; // float | Optional. Minimum pertinence score.
$search_id = 'search_id_example'; // string | Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used.
$src_lang = 'src_lang_example'; // string | Queries language. If left empty each query's language will detected automatically, if not it is not explicitly set into the request body.
$dst_lang = array('dst_lang_example'); // string[] | Results languages. If left empty then the results will not be filtered by language and the they will contain multi-language results.
$docs_search_query = new \OpenAPI\Client\Model\DocsSearchQuery(); // \OpenAPI\Client\Model\DocsSearchQuery

try {
    $result = $apiInstance->searchResumesPOST($indexname, $cache, $cache_time, $size, $offset, $min_score, $search_id, $src_lang, $dst_lang, $docs_search_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeSearchApi->searchResumesPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **cache** | **bool**| Optional. Whether the search results should be cached or not. | [optional] [default to true] |
| **cache_time** | **int**| Optional. Seconds. Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;false&lt;/code&gt;. | [optional] [default to 300] |
| **size** | **int**| Optional. Number of documents to return. | [optional] [default to 50] |
| **offset** | **int**| Optional. Number of documents to skip. Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;true&lt;/code&gt;. | [optional] [default to 0] |
| **min_score** | **float**| Optional. Minimum pertinence score. | [optional] [default to 0] |
| **search_id** | **string**| Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used. | [optional] |
| **src_lang** | **string**| Queries language. If left empty each query&#39;s language will detected automatically, if not it is not explicitly set into the request body. | [optional] |
| **dst_lang** | [**string[]**](../Model/string.md)| Results languages. If left empty then the results will not be filtered by language and the they will contain multi-language results. | [optional] |
| **docs_search_query** | [**\OpenAPI\Client\Model\DocsSearchQuery**](../Model/DocsSearchQuery.md)|  | [optional] |

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
