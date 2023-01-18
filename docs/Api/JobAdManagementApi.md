# OpenAPI\Client\JobAdManagementApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addJobadPOST()**](JobAdManagementApi.md#addJobadPOST) | **POST** /hr/v2/index/{indexname}/jobad/ | Add JobAd |
| [**deleteJobadDELETE()**](JobAdManagementApi.md#deleteJobadDELETE) | **DELETE** /hr/v2/index/{indexname}/jobad/{jobad_id}/ | Delete JobAd |
| [**getJobadGET()**](JobAdManagementApi.md#getJobadGET) | **GET** /hr/v2/index/{indexname}/jobad/{jobad_id}/ | Get JobAd |
| [**getJobadsGET()**](JobAdManagementApi.md#getJobadsGET) | **GET** /hr/v2/index/{indexname}/jobads/ | Get JobAds |
| [**patchJobadPATCH()**](JobAdManagementApi.md#patchJobadPATCH) | **PATCH** /hr/v2/index/{indexname}/jobad/{jobad_id}/ | Patch JobAd |


## `addJobadPOST()`

```php
addJobadPOST($indexname, $job_ad_request, $src_lang, $dst_lang, $jobad_id): \OpenAPI\Client\Model\JobAdIDResponse
```

Add JobAd

This method adds a job advertisement to *indexname* and assigns it a *JobAdID* (namely, a Unique Universal ID or UUID4). This method requires an application/json as content type body.  On the right, we provide an example of input structure; further details are available in dedicated sections.  Note that it is mandatory for users to have previously added information about the employer through the  [Add Company](https://api.inda.ai/hr/docs/v2/#operation/add_company__POST) method; the returned *ID* is the required *EmployerID* of job advertisement data. Obviously, one may skip this step if employer company data already exists.  Furthermore, also *Skills* is a required field, since it is necessary to perform the  [Match Resume](https://api.inda.ai/hr/docs/v2/#operation/match_resumes__POST).  Users may leverage the [Extract Skills from JobAd](https://api.inda.ai/hr/docs/v2/#operation/extract_skills_from_jobad__POST) method and allow INDA to automatically extract skills by analyzing the job advertisement data. It is **highly recommended** to validate the retrieved skills before injecting them to *Add JobAd* requests.  Entities among skills, job titles and languages are automatically mapped by INDAto the adopted knowledge base, so that users can leverage on standardized values.Original values and entity IDs are available in *Details.RawValues* and *Details.Code*, respectively.

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
$job_ad_request = new \OpenAPI\Client\Model\JobAdRequest(); // \OpenAPI\Client\Model\JobAdRequest
$src_lang = 'src_lang_example'; // string | Job Description language. If left empty each section's language will detected automatically.
$dst_lang = 'dst_lang_example'; // string | Extracted entities destination language. If left empty is assumed to be equal to the Job Description language.
$jobad_id = 'jobad_id_example'; // string

try {
    $result = $apiInstance->addJobadPOST($indexname, $job_ad_request, $src_lang, $dst_lang, $jobad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdManagementApi->addJobadPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **job_ad_request** | [**\OpenAPI\Client\Model\JobAdRequest**](../Model/JobAdRequest.md)|  | |
| **src_lang** | **string**| Job Description language. If left empty each section&#39;s language will detected automatically. | [optional] |
| **dst_lang** | **string**| Extracted entities destination language. If left empty is assumed to be equal to the Job Description language. | [optional] |
| **jobad_id** | **string**|  | [optional] |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **jobad_id** | **string**|  | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **jobad_id** | **string**|  | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **cache** | **bool**| Optional. Whether the search results should be cached or not. | [optional] [default to true] |
| **cache_time** | **int**| Optional. Seconds.Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;false&lt;/code&gt;. | [optional] [default to 300] |
| **offset** | **int**| Optional. Number of documents to skip. Ignored if *cache* is &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;true&lt;/code&gt;. | [optional] [default to 0] |
| **search_id** | **string**| Both the initial search request and each subsequent scroll request returns a *SearchID*. The *SearchID* may or may not  change between requests; however, only the most recently received *SearchID* should be used. Other query parameters are uselesswhen *SearchID* is used. | [optional] |
| **size** | **int**| Optional. Number of documents to return. | [optional] [default to 50] |

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
patchJobadPATCH($indexname, $jobad_id, $patch_job_ad_request, $src_lang): \OpenAPI\Client\Model\PatchJobAdResponse
```

Patch JobAd

This method updates the information related to the job advertisement stored with id *job_ad_id*.  This method accepts an application/json body with the same structure as [Add JobAd](https://api.inda.ai/hr/docs/v2/#operation/add_jobad__POST), however in this case all fields are optional.  Fields that contain differences between the corresponding original ones are substituted, while new fields are added. Bear in mind that lists are considered as singular value, therefore to modify an entry in a list it is necessary to insert the full list.  Entities among skills, job titles and languages are automatically mapped by INDAto the adopted knowledge base, so that users can leverage on standardized values.Original values and entity IDs are available in *Details.RawValues* and *Details.Code*, respectively.

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
$patch_job_ad_request = new \OpenAPI\Client\Model\PatchJobAdRequest(); // \OpenAPI\Client\Model\PatchJobAdRequest
$src_lang = 'src_lang_example'; // string | Job Description language. If left empty each section's language will detected automatically.

try {
    $result = $apiInstance->patchJobadPATCH($indexname, $jobad_id, $patch_job_ad_request, $src_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdManagementApi->patchJobadPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **jobad_id** | **string**|  | |
| **patch_job_ad_request** | [**\OpenAPI\Client\Model\PatchJobAdRequest**](../Model/PatchJobAdRequest.md)|  | |
| **src_lang** | **string**| Job Description language. If left empty each section&#39;s language will detected automatically. | [optional] |

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
