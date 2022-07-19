# OpenAPI\Client\JobAdToResumesApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**matchResumesEvidenceFromIndexedJobadPOST()**](JobAdToResumesApi.md#matchResumesEvidenceFromIndexedJobadPOST) | **POST** /hr/v2/index/{indexname}/resumes/matching/jobad/{jobad_id}/evidence/ | Match Resumes Evidence from indexed JobAd
[**matchResumesEvidencePOST()**](JobAdToResumesApi.md#matchResumesEvidencePOST) | **POST** /hr/v2/index/{indexname}/resumes/matching/jobad/evidence/ | Match Resumes Evidence
[**matchResumesFromIndexedJobadPOST()**](JobAdToResumesApi.md#matchResumesFromIndexedJobadPOST) | **POST** /hr/v2/index/{indexname}/resumes/matching/jobad/{jobad_id}/ | Match Resumes from indexed JobAd
[**matchResumesPOST()**](JobAdToResumesApi.md#matchResumesPOST) | **POST** /hr/v2/index/{indexname}/resumes/matching/jobad/ | Match Resumes


## `matchResumesEvidenceFromIndexedJobadPOST()`

```php
matchResumesEvidenceFromIndexedJobadPOST($indexname, $jobad_id, $base_resume_matching_evidence_query): \OpenAPI\Client\Model\MatchResumeEvidenceResponse
```

Match Resumes Evidence from indexed JobAd

This method can be used for a registerd job advert; it is analogous to the The [Match Resume Evidence](https://api.inda.ai/hr/docs/v2/#operation/match_resumes_evidence__POST) method, but it takes in input the ID of the job advert instead of its JSON.  Please refer to the [Match Resumes Evidence](https://api.inda.ai/hr/docs/v2/#operation/match_resumes_evidence__POST) description for further details on the method and on its output.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdToResumesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = 'jobad_id_example'; // string
$base_resume_matching_evidence_query = {"ResumeIDs":["fc61f6df-8925-41e2-b1e9-612fe65ee374","fc61f6db-9527-71e7-c1e6-478fe65ee745"]}; // \OpenAPI\Client\Model\BaseResumeMatchingEvidenceQuery

try {
    $result = $apiInstance->matchResumesEvidenceFromIndexedJobadPOST($indexname, $jobad_id, $base_resume_matching_evidence_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdToResumesApi->matchResumesEvidenceFromIndexedJobadPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | **string**|  |
 **base_resume_matching_evidence_query** | [**\OpenAPI\Client\Model\BaseResumeMatchingEvidenceQuery**](../Model/BaseResumeMatchingEvidenceQuery.md)|  |

### Return type

[**\OpenAPI\Client\Model\MatchResumeEvidenceResponse**](../Model/MatchResumeEvidenceResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `matchResumesEvidencePOST()`

```php
matchResumesEvidencePOST($indexname, $resume_matching_evidence_query): \OpenAPI\Client\Model\MatchResumeEvidenceResponse
```

Match Resumes Evidence

This method provides details about the score of a list of resumes according to the matching with a given job advert.  The method should be used after the call of [Match Resumes](https://api.inda.ai/hr/docs/v2/#operation/match_resumes__POST) or [Match Resumes from indexed JobAd](https://api.inda.ai/hr/docs/v2/#operation/match_resumes_from_indexed_jobad__POST), on a *ResumeID* or a set of *ResumeID*s returned by one of these methods, in order to obtain the evidence of the matching score.  The relevant information for the matching evidence is the same described in the [Match Resumes](https://api.inda.ai/hr/docs/v2/#operation/match_resumes__POST) method.  For each *ResumeID*, the method returns + A global matching score between all the job titles specified in the job advert and the resume job titles + A detail for each job title in the job advert, containing a matching score for this specified job title and a list of entities found in the resumes which are semantically related to the specified job title + A global matching scores between the required skills specified in the job advert and the resume skills + A detail for each required skill in the job advert, containing a matching score for this specified skill and a list of entities found in the resumes which are semantically related to the specified skill + An analogous information for the preferred skills specified in the job advert, if present. + A matching score between the [EQF level](https://en.wikipedia.org/wiki/European_Qualifications_Framework) of the candidate and the required and preferred EQF (if any) + A matching score between the experience of the candidate and the required and preferred experience (if any)  Any *ResumeID* not corresponding to an available resume in the index *indexname* will be ignored.  Note that the [Match Resumes Evidence from indexed JobAd](https://api.inda.ai/hr/docs/v2/#operation/match_resumes_evidence_from_indexed_jobad__POST), method can be used for a job advert which has been already indexed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdToResumesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_matching_evidence_query = {"JobAd":{"Data":{"JobTitle":{"Value":"Software Engineer","Details":{"Category":"IT","Weight":1,"Language":"en"}},"JobDescription":{"CompanyDescription":{"Title":{"Value":"Company Description"},"Content":{"Value":"TestCompany is a software house..."},"Details":{"Weight":0.1,"Language":"en"}},"PositionDescription":{"Title":{"Value":"Job Position"},"Content":{"Value":"We are looking for a skilled Software Engineer who..."}},"PositionRequirements":{"Title":{"Value":"Job Requirements"},"Content":{"Value":"- Passion for solving complex problems.\n- Knowledge of algorithms and data structures.\n..."}}},"JobLocations":[{"City":{"Value":"Turin"},"Country":{"Value":"Italy"},"CountryCode":{"Value":"IT"},"Region":{"Value":"Piedmont"}}],"RemoteWorking":{"Type":{"Value":"HYBRID","Details":{"IsPossible":true,"IsMandatory":false}}},"Experience":{"Duration":{"Required":{"Value":720},"Preferred":{"Value":180}},"Seniority":{"Required":{"Value":"2"}}},"Education":{"Required":{"Title":{"Value":"Bachelor's degree in Computer Science"},"EducationLevelCode":{"Value":{"EQF":6}}},"Preferred":{"Title":{"Value":"Master's degree in Computer Science"},"EducationLevelCode":{"Value":{"EQF":7}}}},"Skills":{"Required":[{"Value":"Analyzing information","Details":{"Weight":0.76,"Category":"hard"}},{"Value":"Teamwork","Details":{"Weight":0.745,"Category":"soft"}},{"Value":"Software design","Details":{"Weight":0.742,"Category":"IT"}}]},"RelatedJobTitles":[{"Value":"Software Developer","Details":{"Weight":0.937}}],"EmployerID":"6733b4be-9d3f-4aac-b1b1-a484ca43eda0","NumberOfOpenings":{"Value":2},"Link":{"URL":{"Value":"https://inrecruiting.intervieweb.it/app.php?CSRFToken=2947e9b2615e30d5&module=CompanyAnnounces&IdAnnuncio=102512"}},"AdvertisementSites":[{"Label":{"Value":"LinkedIn"},"URL":{"Value":"https://www.linkedin.com/jobs/view/php-developer-at-new-york-23415417368"}}],"Salary":{"Amount":{"Value":34000},"Currency":{"Value":"USD"},"Frequency":{"Value":"YEARLY"},"Type":{"Value":"GROSS"}},"Benefits":[{"Value":"vouchers"},{"Value":"pc"},{"Value":"phone"}],"ExpirationDate":{"Value":"2021-05-25T14:30:00"}},"Metadata":{"Language":"en"}},"ResumeIDs":["fc61f6df-8925-41e2-b1e9-612fe65ee374","fc61f6db-9527-71e7-c1e6-478fe65ee745"]}; // \OpenAPI\Client\Model\ResumeMatchingEvidenceQuery

try {
    $result = $apiInstance->matchResumesEvidencePOST($indexname, $resume_matching_evidence_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdToResumesApi->matchResumesEvidencePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_matching_evidence_query** | [**\OpenAPI\Client\Model\ResumeMatchingEvidenceQuery**](../Model/ResumeMatchingEvidenceQuery.md)|  |

### Return type

[**\OpenAPI\Client\Model\MatchResumeEvidenceResponse**](../Model/MatchResumeEvidenceResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `matchResumesFromIndexedJobadPOST()`

```php
matchResumesFromIndexedJobadPOST($indexname, $jobad_id, $base_resume_matching_query, $size, $min_score, $resume_langs, $only_applicants): \OpenAPI\Client\Model\SearchResumeMatchResponse
```

Match Resumes from indexed JobAd

This method performs a search among the resumes in index *indexname* to find the best matching for a given job advert.  The method can be used for any job advert which has been already added in the index. Note that, unless the parameter *only_applicants* is set to <code style='color: #333333; opacity: 0.9'>false</code>, only the resumes registered to the job advert will be considered in the search.  Note also that the [Match Resumes](https://api.inda.ai/hr/docs/v2/#operation/match_resumes__POST) method should be used for a job advert which has not not yet been indexed.  Please refer to the [Match Resumes](https://api.inda.ai/hr/docs/v2/#operation/match_resumes__POST) method for details on the relevant information used for the matching, on the suggested filters, and on the output.  The [Match Resumes Evidence from indexed JobAd](https://api.inda.ai/hr/docs/v2/#operation/match_resumes_evidence_from_indexed_jobad__POST) method can be used to obtain the evidence of the matching score.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdToResumesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = 'jobad_id_example'; // string
$base_resume_matching_query = new \OpenAPI\Client\Model\BaseResumeMatchingQuery(); // \OpenAPI\Client\Model\BaseResumeMatchingQuery
$size = 20; // int | Optional. Number of documents to return.
$min_score = 0; // float | Optional. Minimum pertinence score.
$resume_langs = array('resume_langs_example'); // string[] | Languages of the Resumes. Defaults to the JobAd language.
$only_applicants = true; // bool | If true, it narrows the search to the resumes registered to the job advert.

try {
    $result = $apiInstance->matchResumesFromIndexedJobadPOST($indexname, $jobad_id, $base_resume_matching_query, $size, $min_score, $resume_langs, $only_applicants);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdToResumesApi->matchResumesFromIndexedJobadPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | **string**|  |
 **base_resume_matching_query** | [**\OpenAPI\Client\Model\BaseResumeMatchingQuery**](../Model/BaseResumeMatchingQuery.md)|  |
 **size** | **int**| Optional. Number of documents to return. | [optional] [default to 20]
 **min_score** | **float**| Optional. Minimum pertinence score. | [optional] [default to 0]
 **resume_langs** | [**string[]**](../Model/string.md)| Languages of the Resumes. Defaults to the JobAd language. | [optional]
 **only_applicants** | **bool**| If true, it narrows the search to the resumes registered to the job advert. | [optional] [default to true]

### Return type

[**\OpenAPI\Client\Model\SearchResumeMatchResponse**](../Model/SearchResumeMatchResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `matchResumesPOST()`

```php
matchResumesPOST($indexname, $resume_matching_query, $size, $min_score, $resume_langs): \OpenAPI\Client\Model\SearchResumeMatchResponse
```

Match Resumes

This method performs a search among the resumes in index *indexname* to find the best matchings for a given job advert.  The method should be used after the json of the job advert has been completely formed, but before the job advert is added in the index. We strongly recommend the use of the method [Match Resumes from indexed JobAd](https://api.inda.ai/hr/docs/v2/#operation/match_resumes_from_indexed_jobad__POST),  for a job advert which has been already indexed, as it allows to focus on the resumes who registered to the  job advert.   Note also that the [JobAd Knowledge Extraction](https://api.inda.ai/hr/docs/v2/#tag/JobAd-Knowledge-Extraction) methods can be used to enrich the job advert JSON with relevant information. The following information is particularly relevant and should be present in the job advert to obtain an accurate matching:  + The main job title  + Related job titles (if any)  + The required skills  + The preferred skills (if any)  Other relevant information -- e.g., required and preferred duration, required and preferred [EQF level](https://en.wikipedia.org/wiki/European_Qualifications_Framework)  -- is retrieved from the job advert JSON and contributes to the pertinence score of each resume, provided that the index contains a sufficient number of resumes with that information.  Optionally, a list of [*query filters*](https://api.inda.ai/hr/docs/v2/#tag/Query-Filters) (*QueryFilters*) can be provided to narrow the query. We strongly encourage use of query filters to reduce computation time and improve the result accuracy. For instance, the following filters may be used: + Filter on the last update date (*Metadata.LastModified*) + Filter on the [EQF level](https://en.wikipedia.org/wiki/European_Qualifications_Framework) (*Data.ProfileSummary.HighestEducationLevelCode.Value.EQF*) + Filter on the duration (*Data.ProfileSummary.WorkExperiencesTotalDuration.Value*) + Filter on the applicant address, if this is a relevant information  The Mandatory requirements specified within the *JobAd* (subfields of a *required* field) narrow the search to the suitable resumes, provided that the index contains a sufficient number of candidates with the information required to filter; if a requirement specified in the *JobAd* involves the same field associated to a filter specified in *QueryFilters*, the latter overrides the former.   Furthermore, in order to tackle the bias problem, INDA automatically ignores specific fields (such as name, gender, age and nationality) during the initial processing of each resume data. We are constantly working on reduce the bias in original data so that INDA results may be as fair as possible.   The method returns a list of JSON documents, each of which contains a resume that represents a job advert applicant; the resumes are sorted according to a pertinence score (*Score*) determined on the basis of the matching level in terms of the relevant information discussed above that are specified in the job advert. Please refer to the response sample on the right for further details on the output.  The [Match Resumes Evidence](https://api.inda.ai/hr/docs/v2/#operation/match_resumes_evidence__POST) method can be used to obtain the evidence of the matching score.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdToResumesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_matching_query = new \OpenAPI\Client\Model\ResumeMatchingQuery(); // \OpenAPI\Client\Model\ResumeMatchingQuery
$size = 20; // int | Optional. Number of documents to return.
$min_score = 0; // float | Optional. Minimum pertinence score.
$resume_langs = array('resume_langs_example'); // string[] | Languages of the Resumes. Defaults to the JobAd language.

try {
    $result = $apiInstance->matchResumesPOST($indexname, $resume_matching_query, $size, $min_score, $resume_langs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdToResumesApi->matchResumesPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_matching_query** | [**\OpenAPI\Client\Model\ResumeMatchingQuery**](../Model/ResumeMatchingQuery.md)|  |
 **size** | **int**| Optional. Number of documents to return. | [optional] [default to 20]
 **min_score** | **float**| Optional. Minimum pertinence score. | [optional] [default to 0]
 **resume_langs** | [**string[]**](../Model/string.md)| Languages of the Resumes. Defaults to the JobAd language. | [optional]

### Return type

[**\OpenAPI\Client\Model\SearchResumeMatchResponse**](../Model/SearchResumeMatchResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
