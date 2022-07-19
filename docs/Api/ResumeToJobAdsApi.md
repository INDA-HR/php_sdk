# OpenAPI\Client\ResumeToJobAdsApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**matchJobadsEvidenceFromIndexedResumePOST()**](ResumeToJobAdsApi.md#matchJobadsEvidenceFromIndexedResumePOST) | **POST** /hr/v2/index/{indexname}/jobads/matching/resume/{resume_id}/evidence/ | Match JobAds Evidence from indexed Resume
[**matchJobadsEvidencePOST()**](ResumeToJobAdsApi.md#matchJobadsEvidencePOST) | **POST** /hr/v2/index/{indexname}/jobads/matching/resume/evidence/ | Match JobAds Evidence
[**matchJobadsFromIndexedResumePOST()**](ResumeToJobAdsApi.md#matchJobadsFromIndexedResumePOST) | **POST** /hr/v2/index/{indexname}/jobads/matching/resume/{resume_id}/ | Match JobAds from indexed Resume
[**matchJobadsPOST()**](ResumeToJobAdsApi.md#matchJobadsPOST) | **POST** /hr/v2/index/{indexname}/jobads/matching/resume/ | Match JobAds


## `matchJobadsEvidenceFromIndexedResumePOST()`

```php
matchJobadsEvidenceFromIndexedResumePOST($indexname, $resume_id, $base_jobad_matching_evidence_query): \OpenAPI\Client\Model\MatchJobAdEvidenceResponse
```

Match JobAds Evidence from indexed Resume

This method can be used for a registered resume; it is analogous to the The [Match JobAds Evidence](https://api.inda.ai/hr/docs/v2/#operation/match_jobads_evidence__POST) method, but it takes in input the ID of the resume instead of its JSON.  Please refer to the [Match JobAds Evidence](https://api.inda.ai/hr/docs/v2/#operation/match_jobads_evidence__POST) description for further details on the method and on its output.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeToJobAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$base_jobad_matching_evidence_query = new \OpenAPI\Client\Model\BaseJobadMatchingEvidenceQuery(); // \OpenAPI\Client\Model\BaseJobadMatchingEvidenceQuery

try {
    $result = $apiInstance->matchJobadsEvidenceFromIndexedResumePOST($indexname, $resume_id, $base_jobad_matching_evidence_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeToJobAdsApi->matchJobadsEvidenceFromIndexedResumePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **base_jobad_matching_evidence_query** | [**\OpenAPI\Client\Model\BaseJobadMatchingEvidenceQuery**](../Model/BaseJobadMatchingEvidenceQuery.md)|  |

### Return type

[**\OpenAPI\Client\Model\MatchJobAdEvidenceResponse**](../Model/MatchJobAdEvidenceResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `matchJobadsEvidencePOST()`

```php
matchJobadsEvidencePOST($indexname, $jobad_matching_evidence_query): \OpenAPI\Client\Model\MatchJobAdEvidenceResponse
```

Match JobAds Evidence

This method provides details about the score of a list of job adverts according to the matching with a given resume.  The method should be used after the call of [Match JobAds](https://api.inda.ai/hr/docs/v2/#operation/match_jobads__POST) or [Match JobAds from indexed Resume](https://api.inda.ai/hr/docs/v2/#operation/match_jobads_from_indexed_resume__POST), on a *JobadID* or a set of *JobadID*s returned by one of these methods, in order to obtain the evidence of the matching score.  The relevant information for the matching evidence is the same described in the [Match JobAds](https://api.inda.ai/hr/docs/v2/#operation/match_jobads__POST) method.  For each *JobAdID*, the method returns + A global matching score between all the job titles specified in the job advert and the resume job titles + A detail for each job title in the job advert, containing a matching score for this specified job title and a list of entities found in the resume which are semantically related to the specified job title + A global matching scores between the required skills specified in the job advert and the resume skills + A detail for each required skill in the job advert, containing a matching score for this specified skill and a list of entities found in the resume which are semantically related to the specified skill + An analogous information for the preferred skills specified in the job advert, if present. + A matching score between the [EQF level](https://en.wikipedia.org/wiki/European_Qualifications_Framework) of the candidate and the required and preferred EQF (if any) + A matching score between the total work experiences duration of the candidate and the required and preferred JobAd experience (if any)  Any *JobAdID* not corresponding to an available job advert in the index *indexname* will be ignored.  Note that the [Match JobAds Evidence from indexed Resume](https://api.inda.ai/hr/docs/v2/#operation/match_jobads_evidence_from_indexed_resume__POST), method can be used for a resume which has been already indexed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeToJobAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_matching_evidence_query = new \OpenAPI\Client\Model\JobadMatchingEvidenceQuery(); // \OpenAPI\Client\Model\JobadMatchingEvidenceQuery

try {
    $result = $apiInstance->matchJobadsEvidencePOST($indexname, $jobad_matching_evidence_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeToJobAdsApi->matchJobadsEvidencePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_matching_evidence_query** | [**\OpenAPI\Client\Model\JobadMatchingEvidenceQuery**](../Model/JobadMatchingEvidenceQuery.md)|  |

### Return type

[**\OpenAPI\Client\Model\MatchJobAdEvidenceResponse**](../Model/MatchJobAdEvidenceResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `matchJobadsFromIndexedResumePOST()`

```php
matchJobadsFromIndexedResumePOST($indexname, $resume_id, $base_jobad_matching_query, $size, $min_score, $jobad_langs): \OpenAPI\Client\Model\SearchJobAdMatchResponse
```

Match JobAds from indexed Resume

This method performs a search among the job adverts in index *indexname* to find the best matches for a given resume already registered in INDA. To perform the search starting from the resume of a candidate not yet registered in INDA, please use the [Match JobAds](https://api.inda.ai/hr/docs/v2/#operation/match_jobads__POST), method.  The method can be used, for instance, in the career page in order to guide the candidate to the best matching with their resume. The method can also be used -- via scheduled execution over a pool of resumes -- to generate for each applicant a feed of  suggested job positions which are relevant for them, in order to improve candidate engagement.  Skills and job titles are particularly relevant and should be present in the resume to obtain an accurate matching. Other relevant information -- e.g., experience duration, [EQF level](https://en.wikipedia.org/wiki/European_Qualifications_Framework)  -- is retrieved from the resume and contributes to the pertinence score of each job adverts, provided that the index contains a sufficient number of job adverts with that information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeToJobAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$base_jobad_matching_query = new \OpenAPI\Client\Model\BaseJobadMatchingQuery(); // \OpenAPI\Client\Model\BaseJobadMatchingQuery
$size = 5; // int | Optional. Number of documents to return.
$min_score = 0; // float | Optional. Minimum pertinence score.
$jobad_langs = array('jobad_langs_example'); // string[] | Languages of the JobAds. Defaults to the Resume language.

try {
    $result = $apiInstance->matchJobadsFromIndexedResumePOST($indexname, $resume_id, $base_jobad_matching_query, $size, $min_score, $jobad_langs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeToJobAdsApi->matchJobadsFromIndexedResumePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **base_jobad_matching_query** | [**\OpenAPI\Client\Model\BaseJobadMatchingQuery**](../Model/BaseJobadMatchingQuery.md)|  |
 **size** | **int**| Optional. Number of documents to return. | [optional] [default to 5]
 **min_score** | **float**| Optional. Minimum pertinence score. | [optional] [default to 0]
 **jobad_langs** | [**string[]**](../Model/string.md)| Languages of the JobAds. Defaults to the Resume language. | [optional]

### Return type

[**\OpenAPI\Client\Model\SearchJobAdMatchResponse**](../Model/SearchJobAdMatchResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `matchJobadsPOST()`

```php
matchJobadsPOST($indexname, $jobad_matching_query, $size, $min_score, $jobad_langs): \OpenAPI\Client\Model\SearchJobAdMatchResponse
```

Match JobAds

This method performs a search among the job adverts in index *indexname* to find the best matches for a given resume. To perform the search starting from a resume already registered in INDA, we suggest to use the [Match JobAds from indexed Resume](https://api.inda.ai/hr/docs/v2/#operation/match_jobads_from_indexed_resume__POST), method.  The method can be used, for instance, in the career page in order to guide the candidate to the best matching with their resume. The method can also be used -- via scheduled execution over a pool of resumes -- to generate for each candidate a feed of  suggested job positions which are relevant for them, in order to improve candidate engagement.  Skills and job titles are particularly relevant and should be present in the resume to obtain an accurate matching. Other relevant information -- e.g., experience duration, [EQF level](https://en.wikipedia.org/wiki/European_Qualifications_Framework)  -- is retrieved from the resume and contributes to the pertinence score of each job adverts, provided that the index contains a sufficient number of job adverts with that information.  Optionally, a list of [*query filters*](https://api.inda.ai/hr/docs/v2/#tag/Query-Filters) (*QueryFilters*) can be provided to narrow the query. We strongly encourage use of query_filters to reduce computation time and improve the result accuracy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeToJobAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_matching_query = new \OpenAPI\Client\Model\JobadMatchingQuery(); // \OpenAPI\Client\Model\JobadMatchingQuery
$size = 5; // int | Optional. Number of documents to return.
$min_score = 0; // float | Optional. Minimum pertinence score.
$jobad_langs = array('jobad_langs_example'); // string[] | Languages of the JobAds. Defaults to the Resume language.

try {
    $result = $apiInstance->matchJobadsPOST($indexname, $jobad_matching_query, $size, $min_score, $jobad_langs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeToJobAdsApi->matchJobadsPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_matching_query** | [**\OpenAPI\Client\Model\JobadMatchingQuery**](../Model/JobadMatchingQuery.md)|  |
 **size** | **int**| Optional. Number of documents to return. | [optional] [default to 5]
 **min_score** | **float**| Optional. Minimum pertinence score. | [optional] [default to 0]
 **jobad_langs** | [**string[]**](../Model/string.md)| Languages of the JobAds. Defaults to the Resume language. | [optional]

### Return type

[**\OpenAPI\Client\Model\SearchJobAdMatchResponse**](../Model/SearchJobAdMatchResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
