# OpenAPI\Client\ApplicationManagementApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addApplicationPOST()**](ApplicationManagementApi.md#addApplicationPOST) | **POST** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/ | Add Application
[**addApplicationStagePOST()**](ApplicationManagementApi.md#addApplicationStagePOST) | **POST** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/hiring-pipeline/stage/ | Add Application Stage
[**applicationStatusGET()**](ApplicationManagementApi.md#applicationStatusGET) | **GET** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/status/ | Application Status
[**applyPOST()**](ApplicationManagementApi.md#applyPOST) | **POST** /hr/v2/index/{indexname}/jobad/{jobad_id}/apply/ | Apply
[**deleteApplicantsDELETE()**](ApplicationManagementApi.md#deleteApplicantsDELETE) | **DELETE** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resumes/ | Delete Applicants
[**deleteApplicationDELETE()**](ApplicationManagementApi.md#deleteApplicationDELETE) | **DELETE** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/ | Delete Application
[**deleteApplicationStageDELETE()**](ApplicationManagementApi.md#deleteApplicationStageDELETE) | **DELETE** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/hiring-pipeline/stage/ | Delete Application Stage
[**deleteApplicationsDELETE()**](ApplicationManagementApi.md#deleteApplicationsDELETE) | **DELETE** /hr/v2/index/{indexname}/resume/{resume_id}/applications/jobads/ | Delete Applications
[**getApplicantsGET()**](ApplicationManagementApi.md#getApplicantsGET) | **GET** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resumes/ | Get Applicants
[**getApplicationGET()**](ApplicationManagementApi.md#getApplicationGET) | **GET** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/ | Get Application
[**getApplicationsGET()**](ApplicationManagementApi.md#getApplicationsGET) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/applications/jobads/ | Get Applications
[**patchApplicationPATCH()**](ApplicationManagementApi.md#patchApplicationPATCH) | **PATCH** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/ | Patch Application


## `addApplicationPOST()`

```php
addApplicationPOST($indexname, $jobad_id, $resume_id, $base_application_request): \OpenAPI\Client\Model\ApplicationIDResponse
```

Add Application

This method stores on *indexname* the application made by the applicant *resume_id* to the job advertisement *jobad_id*.  It is assumed that both the resume and the job advertisement involved have been previously added to *indexname* by  the appropriate methods.  On the right, we provide an example of input structure; further details are available in dedicated sections.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString
$resume_id = 'resume_id_example'; // string
$base_application_request = {"Data":{"Objective":{"Value":"PHP developer looking for a position at a small independent company."},"ProfessionalSummary":{"Value":"Software engineer with 3+ years experience and a particular interest for solving complex problems."},"DesiredSalary":{"Amount":{"Value":34000},"Currency":{"Value":"USD"},"Frequency":{"Value":"YEARLY"},"Type":{"Value":"GROSS"}},"DesiredBenefits":[{"Value":"vouchers"},{"Value":"pc"},{"Value":"phone"}],"OriginLinks":[{"Label":{"Value":"LinkedIn"},"URL":{"Value":"https://www.linkedin.com/jobs/view/php-developer-at-new-york-23415417368"}}]},"HiringDetails":{"ApplicationDate":"2021-04-12","HiringPipeline":[{"Date":"2021-04-12T09:20:23","Status":"APPLIED"}]}}; // \OpenAPI\Client\Model\BaseApplicationRequest

try {
    $result = $apiInstance->addApplicationPOST($indexname, $jobad_id, $resume_id, $base_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->addApplicationPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | [**AnyOfStringString**](../Model/.md)|  |
 **resume_id** | **string**|  |
 **base_application_request** | [**\OpenAPI\Client\Model\BaseApplicationRequest**](../Model/BaseApplicationRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApplicationIDResponse**](../Model/ApplicationIDResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addApplicationStagePOST()`

```php
addApplicationStagePOST($indexname, $resume_id, $jobad_id, $application_status_request): \OpenAPI\Client\Model\ApplicationIDResponse
```

Add Application Stage

This method updates the applicant hiring pipeline by adding a new stage according to the requested values.  The supported stages for the hiring pipelines are: <code style='color: #333333; opacity: 0.9'>APPLIED</code>, <code style='color: #333333; opacity: 0.9'>SOURCED</code>, <code style='color: #333333; opacity: 0.9'>SCREEN</code>, <code style='color: #333333; opacity: 0.9'>INTERVIEW</code>, <code style='color: #333333; opacity: 0.9'>EVALUATION</code>, <code style='color: #333333; opacity: 0.9'>OFFER</code>, <code style='color: #333333; opacity: 0.9'>HIRED</code>, <code style='color: #333333; opacity: 0.9'>DISQUALIFIED</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString
$application_status_request = {"Date":"2021-04-23T16:10:03","Status":"INTERVIEW"}; // \OpenAPI\Client\Model\ApplicationStatusRequest

try {
    $result = $apiInstance->addApplicationStagePOST($indexname, $resume_id, $jobad_id, $application_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->addApplicationStagePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **jobad_id** | [**AnyOfStringString**](../Model/.md)|  |
 **application_status_request** | [**\OpenAPI\Client\Model\ApplicationStatusRequest**](../Model/ApplicationStatusRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApplicationIDResponse**](../Model/ApplicationIDResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationStatusGET()`

```php
applicationStatusGET($indexname, $jobad_id, $resume_id): \OpenAPI\Client\Model\ApplicationResponsesStatus
```

Application Status

This method returns the status of an application, which can be any of the following: + *Processing*: the application is in INDA process queue; + *Available*: the application is in the index and is available to the user; + *Duplicate*: the application was a duplicate, refer to the indicated pair  (*ResumeID*, *JobAdID*) to retrieve the already indexed one; + *Failed*: the processing of the input failed; + *Missing*: none of the previous; the pair (*ResumeID*, *JobAdID*) may be wrong or corresponding to a deleted application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->applicationStatusGET($indexname, $jobad_id, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->applicationStatusGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | [**AnyOfStringString**](../Model/.md)|  |
 **resume_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ApplicationResponsesStatus**](../Model/ApplicationResponsesStatus.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applyPOST()`

```php
applyPOST($indexname, $jobad_id, $apply_item_request, $resume_id): \OpenAPI\Client\Model\ApplicationIDResponse
```

Apply

This method adds a candidate resume to *indexname* and registers their application to *jobad_id*.  In an asynchronous fashion, the resume to be processed is added to the server's task queue and the assigned *ResumeID*  is returned immediately; when its processing is successfully completed and the resume is effectively added to  *indexname*, the pipeline continues with the candidate request to apply to the job advertisement identified by  *jobad_id*.  Under the hood, this method performs: + [Add Resume](https://api.inda.ai/hr/docs/v2/#operation/add_resume__POST)  + [Add Application](https://api.inda.ai/hr/docs/v2/#operation/add_application__POST)  Note that the document may not successfully conclude the processing pipeline (e.g., it may be discarded because duplicate of one of the documents already present in the *indexname*), and thus it may not be actually added to the index. The same may happen while processing the application request.  In order to verify the resume and the application status, the user can use the *ResumeID* and the *JobAdID* through  the following methods: + [Resume Status](https://api.inda.ai/hr/docs/v2/#operation/resume_status__GET) + [Application Status](https://api.inda.ai/hr/docs/v2/#operation/application_status__GET) + [Get Failures](https://api.inda.ai/hr/docs/v2/#operation/get_failures__GET)  On the right, we provide an example of input structure; further details are available in dedicated sections.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString
$apply_item_request = new \OpenAPI\Client\Model\ApplyItemRequest(); // \OpenAPI\Client\Model\ApplyItemRequest
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->applyPOST($indexname, $jobad_id, $apply_item_request, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->applyPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | [**AnyOfStringString**](../Model/.md)|  |
 **apply_item_request** | [**\OpenAPI\Client\Model\ApplyItemRequest**](../Model/ApplyItemRequest.md)|  |
 **resume_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApplicationIDResponse**](../Model/ApplicationIDResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApplicantsDELETE()`

```php
deleteApplicantsDELETE($indexname, $jobad_id): \OpenAPI\Client\Model\DeleteCandidatesResponse
```

Delete Applicants

This method removes all the applicants associated with *jobad_id* from the index *indexname*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString

try {
    $result = $apiInstance->deleteApplicantsDELETE($indexname, $jobad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->deleteApplicantsDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | [**AnyOfStringString**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\DeleteCandidatesResponse**](../Model/DeleteCandidatesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApplicationDELETE()`

```php
deleteApplicationDELETE($indexname, $jobad_id, $resume_id): \OpenAPI\Client\Model\DeleteApplicationResponse
```

Delete Application

This method removes the application associated with *jobad_id* and *resume_id* from the index *indexname*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->deleteApplicationDELETE($indexname, $jobad_id, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->deleteApplicationDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | [**AnyOfStringString**](../Model/.md)|  |
 **resume_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DeleteApplicationResponse**](../Model/DeleteApplicationResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApplicationStageDELETE()`

```php
deleteApplicationStageDELETE($indexname, $jobad_id, $resume_id, $status, $date): \OpenAPI\Client\Model\ApplicationIDResponse
```

Delete Application Stage

This method updates the applicant hiring pipeline by deleting a previously stored stage according to the requested  values.  The supported stages for the hiring pipelines are: <code style='color: #333333; opacity: 0.9'>APPLIED</code>, <code style='color: #333333; opacity: 0.9'>SOURCED</code>, <code style='color: #333333; opacity: 0.9'>SCREEN</code>, <code style='color: #333333; opacity: 0.9'>INTERVIEW</code>, <code style='color: #333333; opacity: 0.9'>EVALUATION</code>, <code style='color: #333333; opacity: 0.9'>OFFER</code>, <code style='color: #333333; opacity: 0.9'>HIRED</code>, <code style='color: #333333; opacity: 0.9'>DISQUALIFIED</code>.  Note that all the stages matching *status* and *date* (if present) query parameters will be removed from the  hiring pipeline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString
$resume_id = 'resume_id_example'; // string
$status = 'status_example'; // string | The status describes the hiring pipeline level. The statuses are: <code style='color: #333333; opacity: 0.9'>APPLIED</code>, <code style='color: #333333; opacity: 0.9'>SOURCED</code>, <code style='color: #333333; opacity: 0.9'>SCREEN</code>, <code style='color: #333333; opacity: 0.9'>INTERVIEW</code>, <code style='color: #333333; opacity: 0.9'>EVALUATION</code>, <code style='color: #333333; opacity: 0.9'>OFFER</code>, <code style='color: #333333; opacity: 0.9'>HIRED</code>, <code style='color: #333333; opacity: 0.9'>DISQUALIFIED</code>.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date in which the status changed.

try {
    $result = $apiInstance->deleteApplicationStageDELETE($indexname, $jobad_id, $resume_id, $status, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->deleteApplicationStageDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | [**AnyOfStringString**](../Model/.md)|  |
 **resume_id** | **string**|  |
 **status** | **string**| The status describes the hiring pipeline level. The statuses are: &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;APPLIED&lt;/code&gt;, &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;SOURCED&lt;/code&gt;, &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;SCREEN&lt;/code&gt;, &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;INTERVIEW&lt;/code&gt;, &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;EVALUATION&lt;/code&gt;, &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;OFFER&lt;/code&gt;, &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;HIRED&lt;/code&gt;, &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;DISQUALIFIED&lt;/code&gt;. |
 **date** | **\DateTime**| The date in which the status changed. | [optional]

### Return type

[**\OpenAPI\Client\Model\ApplicationIDResponse**](../Model/ApplicationIDResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApplicationsDELETE()`

```php
deleteApplicationsDELETE($indexname, $resume_id): \OpenAPI\Client\Model\DeleteApplicationsResponse
```

Delete Applications

This method removes all the applications associated with *resume_id* from the index *indexname*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->deleteApplicationsDELETE($indexname, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->deleteApplicationsDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DeleteApplicationsResponse**](../Model/DeleteApplicationsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicantsGET()`

```php
getApplicantsGET($indexname, $jobad_id, $cache, $cache_time, $offset, $search_id, $size): \OpenAPI\Client\Model\GetCandidatesResponse
```

Get Applicants

This method returns a list of UUID4 associated to applicants of the job advertisement with id *jobad_id* stored in the index *indexname*.  Query parameters are used to specify the *offset* and *size* of the search. The method uses *cache* = <code style='color: #333333; opacity: 0.9'>true</code> by default, meaning that it will cache automatically each search for *cache_time* seconds. When caching is active, *offset* is ignored; in order to navigate or scroll the entire search response (in chunks of size *size*, as specified in the first search), this method should be used through the *search_id*. When *search_id* is provided, other query parameters are ignored, except *cache_time*.  The use of caching is highly recommended to improve the performances.  Note that a new *search_id* is provided for every scroll. Search IDs are not unique but it is strongly recommended to update the *search_id* at every call of this method with the *SearchID* of the last response. If the *SearchID* is missing or equal to <code style='color: #333333; opacity: 0.9'>null</code>, the scroll has ended.  Beware that the scroll can ONLY go forward in the search cache because it is meant to review large searches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString
$cache = true; // bool | Optional. Whether the search results should be cached or not.
$cache_time = 300; // int | Optional. Seconds.Ignored if *cache* is <code style='color: #333333; opacity: 0.9'>false</code>.
$offset = 0; // int | Optional. Number of documents to skip. Ignored if *cache* is <code style='color: #333333; opacity: 0.9'>true</code>.
$search_id = 'search_id_example'; // string | Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used.
$size = 50; // int | Optional. Number of documents to return.

try {
    $result = $apiInstance->getApplicantsGET($indexname, $jobad_id, $cache, $cache_time, $offset, $search_id, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->getApplicantsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | [**AnyOfStringString**](../Model/.md)|  |
 **cache** | **bool**| Optional. Whether the search results should be cached or not. | [optional] [default to true]
 **cache_time** | **int**| Optional. Seconds.Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;false&lt;/code&gt;. | [optional] [default to 300]
 **offset** | **int**| Optional. Number of documents to skip. Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;true&lt;/code&gt;. | [optional] [default to 0]
 **search_id** | **string**| Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used. | [optional]
 **size** | **int**| Optional. Number of documents to return. | [optional] [default to 50]

### Return type

[**\OpenAPI\Client\Model\GetCandidatesResponse**](../Model/GetCandidatesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationGET()`

```php
getApplicationGET($indexname, $resume_id, $jobad_id): \OpenAPI\Client\Model\GetApplicationResponse
```

Get Application

This method returns the information related to the application stored with ids *resume_id* and *jobad_id* in the index *indexname*.  As reported in the schema below, the method has two different response schemas: + a *Status* response is returned when the application or the related [resume](https://api.inda.ai/hr/docs/v2/#tag/Resume-Management) is still in the processing queue, if the processing failed, or if the requested application has never been stored (e.g., resume processing failed when using [Apply](https://api.inda.ai/hr/docs/v2/#operation/apply__POST) method); + a *GetApplicationResponse* response is returned if the application has been successfully processed and inserted in the index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString

try {
    $result = $apiInstance->getApplicationGET($indexname, $resume_id, $jobad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->getApplicationGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **jobad_id** | [**AnyOfStringString**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\GetApplicationResponse**](../Model/GetApplicationResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationsGET()`

```php
getApplicationsGET($indexname, $resume_id, $cache, $cache_time, $offset, $search_id, $size): \OpenAPI\Client\Model\GetApplicationsResponse
```

Get Applications

This method returns a list of UUID4 associated to those job advertisements that have the resume of id *resume_id* as applicant. Both resumes and job advertisements are stored in the *index* indexname.  Query parameters are used to specify the *offset* and *size* of the search. The method uses *cache* = <code style='color: #333333; opacity: 0.9'>true</code> by default, meaning that it will cache automatically each search for *cache_time* seconds. When caching is active, *offset* is ignored; in order to navigate or scroll the entire search response (in chunks of size *size*, as specified in the first search), this method should be used through the *search_id*. When *search_id* is provided, other query parameters are ignored, except *cache_time*.  The use of caching is highly recommended to improve the performances.  Note that a new *search_id* is provided for every scroll. Search IDs are not unique but it is strongly recommended to update the *search_id* at every call of this method with the *SearchID* of the last response.  Beware that the scroll can ONLY go forward in the search cache because it is meant to review large searches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$cache = true; // bool | Optional. Whether the search results should be cached or not.
$cache_time = 300; // int | Optional. Seconds.
$offset = 0; // int | Optional. Number of documents to skip. Ignored if *cache* is <code style='color: #333333; opacity: 0.9'>true</code>.
$search_id = 'search_id_example'; // string | Both the initial search request and each subsequent scroll request returns a *search_id*. The *search_id* may or may not  change between requests; however, only the most recently received *search_id* should be used.
$size = 50; // int | Optional. Number of documents to return.

try {
    $result = $apiInstance->getApplicationsGET($indexname, $resume_id, $cache, $cache_time, $offset, $search_id, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->getApplicationsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **cache** | **bool**| Optional. Whether the search results should be cached or not. | [optional] [default to true]
 **cache_time** | **int**| Optional. Seconds. | [optional] [default to 300]
 **offset** | **int**| Optional. Number of documents to skip. Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;true&lt;/code&gt;. | [optional] [default to 0]
 **search_id** | **string**| Both the initial search request and each subsequent scroll request returns a *search_id*. The *search_id* may or may not  change between requests; however, only the most recently received *search_id* should be used. | [optional]
 **size** | **int**| Optional. Number of documents to return. | [optional] [default to 50]

### Return type

[**\OpenAPI\Client\Model\GetApplicationsResponse**](../Model/GetApplicationsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchApplicationPATCH()`

```php
patchApplicationPATCH($indexname, $jobad_id, $resume_id, $patch_application_request): \OpenAPI\Client\Model\PatchApplicationResponse
```

Patch Application

This method updates the information related to the application stored with id *resume_id* and *jobad_id*.  This method accepts an application/json body with the same structure as [Add Application](https://api.inda.ai/hr/docs/v2/#operation/add_application__POST) however in this case all fields are optional. Fields that contain differences between the corresponding original ones are substituted, while new fields are added. Bear in mind that lists are considered as singular value, therefore to modify an entry in a list it is necessary to insert the full list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString
$resume_id = 'resume_id_example'; // string
$patch_application_request = {"Data":{"ProfessionalSummary":{"Value":"PHP developer with 3+ years experience."},"DesiredBenefits":[{"Value":"vouchers"},{"Value":"pc"}]}}; // \OpenAPI\Client\Model\PatchApplicationRequest

try {
    $result = $apiInstance->patchApplicationPATCH($indexname, $jobad_id, $resume_id, $patch_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->patchApplicationPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **jobad_id** | [**AnyOfStringString**](../Model/.md)|  |
 **resume_id** | **string**|  |
 **patch_application_request** | [**\OpenAPI\Client\Model\PatchApplicationRequest**](../Model/PatchApplicationRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PatchApplicationResponse**](../Model/PatchApplicationResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
