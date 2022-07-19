# OpenAPI\Client\ResumeManagementApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addResumePOST()**](ResumeManagementApi.md#addResumePOST) | **POST** /hr/v2/index/{indexname}/resume/ | Add Resume
[**deletePicDELETE()**](ResumeManagementApi.md#deletePicDELETE) | **DELETE** /hr/v2/index/{indexname}/resume/{resume_id}/pic/ | Delete Pic
[**deleteResumeDELETE()**](ResumeManagementApi.md#deleteResumeDELETE) | **DELETE** /hr/v2/index/{indexname}/resume/{resume_id}/ | Delete Resume
[**getCvGET()**](ResumeManagementApi.md#getCvGET) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/document/ | Get CV
[**getCvTextGET()**](ResumeManagementApi.md#getCvTextGET) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/text/ | Get CV Text
[**getPicGET()**](ResumeManagementApi.md#getPicGET) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/pic/ | Get Pic
[**getResumeGET()**](ResumeManagementApi.md#getResumeGET) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/ | Get Resume
[**patchResumePATCH()**](ResumeManagementApi.md#patchResumePATCH) | **PATCH** /hr/v2/index/{indexname}/resume/{resume_id}/ | Patch Resume
[**resumeStatusGET()**](ResumeManagementApi.md#resumeStatusGET) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/status/ | Resume Status
[**updatePicPUT()**](ResumeManagementApi.md#updatePicPUT) | **PUT** /hr/v2/index/{indexname}/resume/{resume_id}/pic/ | Update Pic
[**updateResumePUT()**](ResumeManagementApi.md#updateResumePUT) | **PUT** /hr/v2/index/{indexname}/resume/{resume_id}/ | Update Resume


## `addResumePOST()`

```php
addResumePOST($indexname, $file_item_request, $sync, $resume_id): \OpenAPI\Client\Model\ItemIdResponse
```

Add Resume

This method adds a resume to *indexname* and assigns it a *resume_id* (namely, a Unique Universal ID or UUID4).  On the right, we provide an example of input structure that corresponds to the result of the method [Parse Resume](https://api.inda.ai/hr/docs/v2/#operation/parse_resume__POST). However, the input structure is customizable. Further details can be found in the [Resume Model](https://api.inda.ai/hr/docs/v2/#tag/Resume) section.  This method adds the resume to be processed to the server's task queue and return immediately the *resume_id*. Note that the document may not successfully conclude the processing pipeline (e.g., it may be discarded because duplicate of one of the documents already present in the *indexname*), and thus it may not be actually added to the index.  In order to verify the resume status, the user can use the *resume_id* through the following methods: + [Resume Status](https://api.inda.ai/hr/docs/v2/#operation/resume_status__GET) + [Get Failures](https://api.inda.ai/hr/docs/v2/#operation/get_failures__GET)  For a synchronous approach, use the *sync* query parameter: if set to *true*, the resume is processed immediately. However, for standard usage in production environments, we recommend relying on the asynchronous strategy by ignoring  this parameter, in order to reduce the response times (due to the heterogeneity of resumes, the response time of each  resume processing can vary substantially among different documents).  Please note that, for user's convenience, the [API credits requests](https://api.inda.ai/hr/docs/v2/#tag/Credits-Management) assume that the  synchronous approach is named as *Add Resume Sync*, so that it can be easily distinguished from the asynchronous  *Add Resume*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$file_item_request = new \OpenAPI\Client\Model\FileItemRequest(); // \OpenAPI\Client\Model\FileItemRequest
$sync = false; // bool | Optional. Whether to wait for the resume processing or not.
$resume_id = 'resume_id_example'; // string | Optional. ID to use for the resume. Already existing IDs will cause a 409 error.

try {
    $result = $apiInstance->addResumePOST($indexname, $file_item_request, $sync, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->addResumePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **file_item_request** | [**\OpenAPI\Client\Model\FileItemRequest**](../Model/FileItemRequest.md)|  |
 **sync** | **bool**| Optional. Whether to wait for the resume processing or not. | [optional] [default to false]
 **resume_id** | **string**| Optional. ID to use for the resume. Already existing IDs will cause a 409 error. | [optional]

### Return type

[**\OpenAPI\Client\Model\ItemIdResponse**](../Model/ItemIdResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePicDELETE()`

```php
deletePicDELETE($indexname, $resume_id): \OpenAPI\Client\Model\DeleteItemResponse
```

Delete Pic

This method deletes the profile picture associated with the resume *resume_id* and sets its profile picture to the default one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->deletePicDELETE($indexname, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->deletePicDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DeleteItemResponse**](../Model/DeleteItemResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResumeDELETE()`

```php
deleteResumeDELETE($indexname, $resume_id): \OpenAPI\Client\Model\DeleteItemResponse
```

Delete Resume

This method deletes the resume associated with *resume_id* from the index *indexname*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->deleteResumeDELETE($indexname, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->deleteResumeDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DeleteItemResponse**](../Model/DeleteItemResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvGET()`

```php
getCvGET($indexname, $resume_id): \OpenAPI\Client\Model\BinaryItemResponse
```

Get CV

This method returns the Base64 encoding and the extension of the document associated  with the resume *resume_id*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->getCvGET($indexname, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->getCvGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\BinaryItemResponse**](../Model/BinaryItemResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvTextGET()`

```php
getCvTextGET($indexname, $resume_id): \OpenAPI\Client\Model\DocumentTextResponse
```

Get CV Text

This method returns the text of the document associated with the resume *resume_id*. Note that this method merely returns the text, since the extraction has occurred during the add/update of the resume.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->getCvTextGET($indexname, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->getCvTextGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DocumentTextResponse**](../Model/DocumentTextResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPicGET()`

```php
getPicGET($indexname, $resume_id): \OpenAPI\Client\Model\BinaryPicResponse
```

Get Pic

This method returns the Base64 encoding and the extension of the profile picture associated with the resume *resume_id*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->getPicGET($indexname, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->getPicGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\BinaryPicResponse**](../Model/BinaryPicResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResumeGET()`

```php
getResumeGET($indexname, $resume_id): \OpenAPI\Client\Model\GetItemResponse
```

Get Resume

This method returns the information related to the resume stored with id *resume_id* in the index *indexname*.  As reported in the schema below, the method has two different response schemas: + a *4xx* response is returned when the resume is still in the processing queue, if the processing failed, or if its *resume_id* has never been seen; + a *200* response is returned if the resume has been successfully processed and inserted in the index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->getResumeGET($indexname, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->getResumeGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetItemResponse**](../Model/GetItemResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchResumePATCH()`

```php
patchResumePATCH($indexname, $resume_id, $patch_item_request): \OpenAPI\Client\Model\PatchItemResponse
```

Patch Resume

This method updates the information related to the resume stored with id *resume_id*.  This method accepts an application/json body with the same structure as [Add Resume](https://api.inda.ai/hr/docs/v2/#operation/add_resume__POST), however in this case all fields are optional. Fields that contain differences between the corresponding original ones are substituted, while new fields are added. Bear in mind that lists are considered as singular value, therefore to modify an entry in a list it is necessary to insert the full list.  Note that this method only modifies the information; in order to change the attached file, please refer to the method [Update Resume](https://api.inda.ai/hr/docs/v2/#operation/update_resume__PUT).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$patch_item_request = new \OpenAPI\Client\Model\PatchItemRequest(); // \OpenAPI\Client\Model\PatchItemRequest

try {
    $result = $apiInstance->patchResumePATCH($indexname, $resume_id, $patch_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->patchResumePATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **patch_item_request** | [**\OpenAPI\Client\Model\PatchItemRequest**](../Model/PatchItemRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PatchItemResponse**](../Model/PatchItemResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resumeStatusGET()`

```php
resumeStatusGET($indexname, $resume_id): \OpenAPI\Client\Model\ResumeResponsesStatus
```

Resume Status

This method returns the status of a resume, which can be any of the following: + *Processing*: the resume is in INDA process queues; + *Available*: the resume is in the index and is available to the user; + *Duplicate*: the resume was a duplicate, refer to the indicated *DuplicateID* to retrieve the already  indexed one; + *Failed*: the processing of the input failed; + *Missing*: none of the previous; the *resume_id* may be wrong or corresponding to a deleted resume.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string

try {
    $result = $apiInstance->resumeStatusGET($indexname, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->resumeStatusGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ResumeResponsesStatus**](../Model/ResumeResponsesStatus.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePicPUT()`

```php
updatePicPUT($indexname, $resume_id, $update_pic_request): \OpenAPI\Client\Model\PatchItemResponse
```

Update Pic

This method updates the profile picture associated with the resume *resume_id*.  The supported extensions are <code style='color: #333333; opacity: 0.9'>png</code>, <code style='color: #333333; opacity: 0.9'>jpg</code>, <code style='color: #333333; opacity: 0.9'>jpeg</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$update_pic_request = {"Attachments":{"Pic":{"File":"<binary of picture>","FileExt":"<extension of picture>"}}}; // \OpenAPI\Client\Model\UpdatePicRequest

try {
    $result = $apiInstance->updatePicPUT($indexname, $resume_id, $update_pic_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->updatePicPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **update_pic_request** | [**\OpenAPI\Client\Model\UpdatePicRequest**](../Model/UpdatePicRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PatchItemResponse**](../Model/PatchItemResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateResumePUT()`

```php
updateResumePUT($indexname, $resume_id, $update_item_request): \OpenAPI\Client\Model\BaseItemIdResponse
```

Update Resume

This method updates both the information and the CV file (*Data.Attachments.CV.File*) related to the resume stored with  id *resume_id*.  This method manages to update the structured data in the same way [Patch Resume](https://api.inda.ai/hr/docs/v2/#operation/patch_resume__PATCH) does as well as  updating the corresponding CV file. It verifies if the file is duplicate with respect to the data already present into the *indexname*. If it finds a  possible duplicate with the same *resume_id* (if one is reuploading the same CV file) it proceeds updating the  structured data, skipping the file update, while it manages to completely delete the item *resume_id* if the file is  found on *indexname* but associated with a resume with different *resume_id*.  The method will enqueue the task and immediately return a response in an asynchronous fashion. In order to verify the  *resume_id* status one could rely on: + [Resume Status](https://api.inda.ai/hr/docs/v2/#operation/resume_status__GET) + [Get Failures](https://api.inda.ai/hr/docs/v2/#operation/get_failures__GET)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$update_item_request = new \OpenAPI\Client\Model\UpdateItemRequest(); // \OpenAPI\Client\Model\UpdateItemRequest

try {
    $result = $apiInstance->updateResumePUT($indexname, $resume_id, $update_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeManagementApi->updateResumePUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **update_item_request** | [**\OpenAPI\Client\Model\UpdateItemRequest**](../Model/UpdateItemRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BaseItemIdResponse**](../Model/BaseItemIdResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
