# OpenAPI\Client\JobAdManagementApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addJobadPOST()**](JobAdManagementApi.md#addJobadPOST) | **POST** /hr/v2/index/{indexname}/jobad/ | Add JobAd
[**deleteJobadDELETE()**](JobAdManagementApi.md#deleteJobadDELETE) | **DELETE** /hr/v2/index/{indexname}/jobad/{jobad_id}/ | Delete JobAd
[**getJobadGET()**](JobAdManagementApi.md#getJobadGET) | **GET** /hr/v2/index/{indexname}/jobad/{jobad_id}/ | Get JobAd
[**getJobadsGET()**](JobAdManagementApi.md#getJobadsGET) | **GET** /hr/v2/index/{indexname}/jobads/ | Get JobAds
[**patchJobadPATCH()**](JobAdManagementApi.md#patchJobadPATCH) | **PATCH** /hr/v2/index/{indexname}/jobad/{jobad_id}/ | Patch JobAd


## `addJobadPOST()`

```php
addJobadPOST($indexname, $job_ad_request, $jobad_id): \OpenAPI\Client\Model\JobAdIDResponse
```

Add JobAd

This method adds a job advertisement to *indexname* and assigns it a *JobAdID* (namely, a Unique Universal ID or UUID4). This method requires an application/json as content type body.  On the right, we provide an example of input structure; further details are available in dedicated sections.  Note that it is mandatory for users to have previously added information about the employer through the  [Add Company](https://api.inda.ai/hr/docs/v2/#operation/add_company__POST) method; the returned *ID* is the required *EmployerID* of job advertisement data. Obviously, one may skip this step if employer company data already exists.  Furthermore, also *Skills* is a required field, since it is necessary to perform the  [Match Resume](https://api.inda.ai/hr/docs/v2/#operation/match_resumes__POST).  Users may leverage the [Extract Skills from JobAd](https://api.inda.ai/hr/docs/v2/#operation/extract_skills_from_jobad__POST) method and allow INDA to automatically extract skills by analyzing the job advertisement data. It is **highly recommended** to validate the retrieved skills before injecting them to *Add JobAd* requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$job_ad_request = {"Data":{"JobTitle":{"Value":"Software Engineer","Details":{"Category":"IT","Weight":1,"Language":"en"}},"JobDescription":{"CompanyDescription":{"Title":{"Value":"Company Description"},"Content":{"Value":"TestCompany is a software house..."},"Details":{"Weight":0.1,"Language":"en"}},"PositionDescription":{"Title":{"Value":"Job Position"},"Content":{"Value":"We are looking for a skilled Software Engineer who..."}},"PositionRequirements":{"Title":{"Value":"Job Requirements"},"Content":{"Value":"- Passion for solving complex problems.\n- Knowledge of algorithms and data structures.\n..."}}},"JobLocations":[{"City":{"Value":"Turin"},"Country":{"Value":"Italy"},"CountryCode":{"Value":"IT"},"Region":{"Value":"Piedmont"}}],"RemoteWorking":{"Type":{"Value":"HYBRID","Details":{"IsPossible":true,"IsMandatory":false}}},"Experience":{"Seniority":{"Required":{"Value":"2"}}},"Education":{"Required":{"Title":{"Value":"Bachelor's degree in Computer Science"},"EducationLevelCode":{"Value":{"EQF":6}}},"Preferred":{"Title":{"Value":"Master's degree in Computer Science"},"EducationLevelCode":{"Value":{"EQF":7}}}},"Skills":{"Required":[{"Value":"Analyzing information","Details":{"Weight":0.76,"Category":"hard"}},{"Value":"Teamwork","Details":{"Weight":0.745,"Category":"soft"}},{"Value":"Software design","Details":{"Weight":0.742,"Category":"IT"}}]},"RelatedJobTitles":[{"Value":"Software Developer","Details":{"Weight":0.937}}],"EmployerID":"6733b4be-9d3f-4aac-b1b1-a484ca43eda0","NumberOfOpenings":{"Value":2},"Link":{"URL":{"Value":"https://inrecruiting.intervieweb.it/app.php?CSRFToken=2947e9b2615e30d5&module=CompanyAnnounces&IdAnnuncio=102512"}},"AdvertisementSites":[{"Label":{"Value":"LinkedIn"},"URL":{"Value":"https://www.linkedin.com/jobs/view/php-developer-at-new-york-23415417368"}}],"Salary":{"Amount":{"Value":34000},"Currency":{"Value":"USD"},"Frequency":{"Value":"YEARLY"},"Type":{"Value":"GROSS"}},"Benefits":[{"Value":"vouchers"},{"Value":"pc"},{"Value":"phone"}],"ExpirationDate":{"Value":"2021-05-25T14:30:00"}},"Metadata":{"Language":"en"}}; // \OpenAPI\Client\Model\JobAdRequest
$jobad_id = 'jobad_id_example'; // string

try {
    $result = $apiInstance->addJobadPOST($indexname, $job_ad_request, $jobad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdManagementApi->addJobadPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **job_ad_request** | [**\OpenAPI\Client\Model\JobAdRequest**](../Model/JobAdRequest.md)|  |
 **jobad_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\JobAdIDResponse**](../Model/JobAdIDResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteJobadDELETE()`

```php
deleteJobadDELETE($indexname, $jobad_id): \OpenAPI\Client\Model\DeleteJobAdResponse
```

Delete JobAd

This method removes the job advertisement associated with *jobad_id* from the index *indexname*.  Note that when a job advertisement is deleted, the same happens to all its related applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = 'jobad_id_example'; // string

try {
    $result = $apiInstance->deleteJobadDELETE($indexname, $jobad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdManagementApi->deleteJobadDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DeleteJobAdResponse**](../Model/DeleteJobAdResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobadGET()`

```php
getJobadGET($indexname, $jobad_id): \OpenAPI\Client\Model\GetJobAdResponse
```

Get JobAd

This method returns the information related to the job advertisement stored with id *jobad_id* in the index *indexname*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = 'jobad_id_example'; // string

try {
    $result = $apiInstance->getJobadGET($indexname, $jobad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdManagementApi->getJobadGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetJobAdResponse**](../Model/GetJobAdResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobadsGET()`

```php
getJobadsGET($indexname, $cache, $cache_time, $offset, $search_id, $size): \OpenAPI\Client\Model\GetJobAdsResponse
```

Get JobAds

This method returns a list of UUID4 associated to the job advertisements stored in the index *indexname*.  Query parameters are used to specify the *offset* and *size* of the search. The method uses *cache* = <code style='color: #333333; opacity: 0.9'>true</code> by default, meaning that it will cache automatically each search for *cache_time* seconds. When caching is active, *offset* is ignored; in order to navigate or scroll the entire search response (in chunks of size *size*, as specified in the first search), this method should be used through the *search_id*. When *search_id* is provided, other query parameters are ignored, except *cache_time*.  The use of caching is highly recommended to improve the performances.  Note that a new *search_id* is provided for every scroll. Search IDs are not unique but it is strongly recommended to update the *search_id* at every call of this method with the *SearchID* of the last response. If the *SearchID* is missing or equal to <code style='color: #333333; opacity: 0.9'>null</code>, the scroll has ended.  Beware that the scroll can ONLY go forward in the search cache because it is meant to review large searches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$cache = true; // bool | Optional. Whether the search results should be cached or not.
$cache_time = 300; // int | Optional. Seconds.Ignored if *cache* is <code style='color: #333333; opacity: 0.9'>false</code>.
$offset = 0; // int | Optional. Number of documents to skip. Ignored if *cache* is <code style='color: #333333; opacity: 0.9'>true</code>.
$search_id = 'search_id_example'; // string | Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used. Other query parameters are uselesswhen *SearchID* is used.
$size = 50; // int | Optional. Number of documents to return.

try {
    $result = $apiInstance->getJobadsGET($indexname, $cache, $cache_time, $offset, $search_id, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdManagementApi->getJobadsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **cache** | **bool**| Optional. Whether the search results should be cached or not. | [optional] [default to true]
 **cache_time** | **int**| Optional. Seconds.Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;false&lt;/code&gt;. | [optional] [default to 300]
 **offset** | **int**| Optional. Number of documents to skip. Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;true&lt;/code&gt;. | [optional] [default to 0]
 **search_id** | **string**| Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used. Other query parameters are uselesswhen *SearchID* is used. | [optional]
 **size** | **int**| Optional. Number of documents to return. | [optional] [default to 50]

### Return type

[**\OpenAPI\Client\Model\GetJobAdsResponse**](../Model/GetJobAdsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchJobadPATCH()`

```php
patchJobadPATCH($indexname, $jobad_id, $patch_job_ad_request): \OpenAPI\Client\Model\PatchJobAdResponse
```

Patch JobAd

This method updates the information related to the job advertisement stored with id *job_ad_id*.  This method accepts an application/json body with the same structure as [Add JobAd](https://api.inda.ai/hr/docs/v2/#operation/add_jobad__POST), however in this case all fields are optional.  Fields that contain differences between the corresponding original ones are substituted, while new fields are added. Bear in mind that lists are considered as singular value, therefore to modify an entry in a list it is necessary to insert the full list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = 'jobad_id_example'; // string
$patch_job_ad_request = {"Data":{"JobDescription":{"PositionDescription":{"Content":{"Value":"We are looking for a Software Developer who..."}}},"Experience":{"Duration":{"Required":{"Value":300}},"Seniority":{"Required":{"Value":"3"}}},"NumberOfOpenings":{"Value":1},"Benefits":[{"Value":"vouchers"},{"Value":"pc"}],"ExpirationDate":{"Value":"2021-06-25T00:00:00"}}}; // \OpenAPI\Client\Model\PatchJobAdRequest

try {
    $result = $apiInstance->patchJobadPATCH($indexname, $jobad_id, $patch_job_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdManagementApi->patchJobadPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | **string**|  |
 **patch_job_ad_request** | [**\OpenAPI\Client\Model\PatchJobAdRequest**](../Model/PatchJobAdRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PatchJobAdResponse**](../Model/PatchJobAdResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
