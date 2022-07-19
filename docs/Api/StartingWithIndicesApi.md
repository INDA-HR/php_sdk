# OpenAPI\Client\StartingWithIndicesApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**mostRecentResumesGET()**](StartingWithIndicesApi.md#mostRecentResumesGET) | **GET** /hr/v2/index/{indexname}/resumes/latest/ | Most Recent Resumes
[**statsIndexGET()**](StartingWithIndicesApi.md#statsIndexGET) | **GET** /hr/v2/index/{indexname}/stats/ | Stats Index


## `mostRecentResumesGET()`

```php
mostRecentResumesGET($indexname, $sort_by, $sort_order, $size): \OpenAPI\Client\Model\MostRecentResponse
```

Most Recent Resumes

Returns the *size* documents into the index *indexname* sorted by the field *sort_by* in the order *sort_order*. In the response, *Hits* indicates the number of documents retrieved, while *Total* indicates the number of documents in the index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StartingWithIndicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$sort_by = 'CreationDate'; // string | The field the results will be sorted by. Available options: <code style='color: #333333; opacity: 0.9'>\"CreationDate\"</code>, <code style='color: #333333; opacity: 0.9'>\"LastModified\"</code>
$sort_order = 'desc'; // string | The sort_order option can have the following values: <code style='color: #333333; opacity: 0.9'>\"asc\"</code>, <code style='color: #333333; opacity: 0.9'>\"desc\"</code>. The former will sort in ascending order, the latter in descending order.
$size = 20; // int | Number of resumes to be returned

try {
    $result = $apiInstance->mostRecentResumesGET($indexname, $sort_by, $sort_order, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StartingWithIndicesApi->mostRecentResumesGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **sort_by** | **string**| The field the results will be sorted by. Available options: &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;\&quot;CreationDate\&quot;&lt;/code&gt;, &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;\&quot;LastModified\&quot;&lt;/code&gt; | [optional] [default to &#39;CreationDate&#39;]
 **sort_order** | **string**| The sort_order option can have the following values: &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;\&quot;asc\&quot;&lt;/code&gt;, &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;\&quot;desc\&quot;&lt;/code&gt;. The former will sort in ascending order, the latter in descending order. | [optional] [default to &#39;desc&#39;]
 **size** | **int**| Number of resumes to be returned | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\MostRecentResponse**](../Model/MostRecentResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statsIndexGET()`

```php
statsIndexGET($indexname, $doc_type): \OpenAPI\Client\Model\StatsIndex
```

Stats Index

This method returns the number of documents present in *indexname*,  grouped by document types. To fetch information about a specific document type, please use the *doc_type* query parameter; allowed values are: + <code style='color: #333333; opacity: 0.9'>resume</code> for [resumes](https://api.inda.ai/hr/docs/v2/#tag/Resume-Management); + <code style='color: #333333; opacity: 0.9'>job-ad</code> for [job adverts](https://api.inda.ai/hr/docs/v2/#tag/JobAd-Management); + <code style='color: #333333; opacity: 0.9'>application</code> for [applications](https://api.inda.ai/hr/docs/v2/#tag/Application-Management).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StartingWithIndicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$doc_type = 'doc_type_example'; // string

try {
    $result = $apiInstance->statsIndexGET($indexname, $doc_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StartingWithIndicesApi->statsIndexGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **doc_type** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\StatsIndex**](../Model/StatsIndex.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
