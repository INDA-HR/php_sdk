# OpenAPI\Client\ResumeImportApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**awsImportPOST()**](ResumeImportApi.md#awsImportPOST) | **POST** /hr/v2/index/{indexname}/resumes/import/aws/ | Aws Import
[**importStatusGET()**](ResumeImportApi.md#importStatusGET) | **GET** /hr/v2/index/{indexname}/resumes/import/aws/status/ | Import Status


## `awsImportPOST()`

```php
awsImportPOST($indexname, $docs_import_item_request): \OpenAPI\Client\Model\ImportResponse
```

Aws Import

This method imports a collection of *Files* from a *Bucket* on Amazon S3 Storage Service into the INDA index  *indexname*.  *Intervieweb* customers do not need any  *Credentials*, because their files are already in the [In-recruiting](https://www.in-recruiting.com/en/) cloud. For other users, we strongly recommend creating *ad-hoc credentials* with *read-only* rights. These credentials will not be stored by us anyway in any form.  The array of *Files* should contain a collection of resumes. Each file must have an *URL*, which is the file path inside the *Bucket*, an *InternalID* (i.e., an unique identifier used by the user internal system), and a *Resume*, which contains all the structured data to be imported in INDA. The *Resume* field has the same structure used in [Add Resume](https://api.inda.ai/hr/docs/v2/#operation/add_resume__POST), without the fields *Attachments.CV.File* (the file binary) and  *Attachments.CV.FileExt* (the file extension). The *Resume* data in the request will not be validated in input, but rather later during the request preprocessing.  The list of documents in the response accounts for documents that were successfully validated and downloaded from the *Bucket*. Note that these documents will be processed in the background before they can be uploaded to *indexname* and this may cause some small changes in the list of documents actually uploaded.  The response contains (*i*) a *Stats* field which provides a brief overview of the number of *Sent* and *Queued* documents, (*ii*) a list of queued *Resumes* with an INDA *ResumeID* and its user *InternalID*, and (*iii*) a list of *Errors* raised during the preprocessing stage.  In order to obtain updated information on the import progress and on the failures that might happen during the import process, the user can use the *import_id* through the following methods: + [Get Failures](https://api.inda.ai/hr/docs/v2/#operation/get_failures__GET) + [Import Status](https://api.inda.ai/hr/docs/v2/#operation/import_status__GET)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$docs_import_item_request = {"Bucket":"test.mycompany.it","Files":[{"Resume":{"Data":{"JobTitle":{"Details":{"IsValidated":true,"Score":0.75},"Value":"back-end developer"},"PersonalInfo":{"PersonName":{"GivenName":{"Details":{"IsValidated":true},"Value":"John"},"FamilyName":{"Details":{"IsValidated":true},"Value":"Doe"},"FormattedName":{"Details":{"IsValidated":true},"Value":"John Doe"}},"Birthdate":{"Details":{"IsValidated":true},"Value":"1990-11-01"},"Age":{"Details":{"IsValidated":true},"Value":28}},"ContactInfo":{"PhoneNumbers":[{"Number":{"Details":{"IsValidated":true},"Value":{"CountryCode":"IT","CountryDialling":"39","DialNumber":"0000000000"}}},{"Number":{"Details":{"IsValidated":true},"Value":{"CountryCode":"IT","CountryDialling":"39","DialNumber":"1111111111"}}}],"EmailAddresses":[{"Address":{"Details":{"IsValidated":true},"Value":"johndoe@gmail.com"}}],"Links":[{"URL":{"Details":{"IsValidated":true},"Value":"http://linkedin.com/profile/JohnDoe90"},"Label":{"Details":{"IsValidated":true},"Value":"LinkedIn"}},{"URL":{"Details":{"IsValidated":true},"Value":"http://facebook.com/profile/JohnnyDoevo"},"Label":{"Details":{"IsValidated":true},"Value":"Facebook"}}]},"PersonLocation":{"PermanentLocation":{"City":{"Details":{"IsValidated":true},"Value":"Anytown"},"Country":{"Details":{"IsValidated":true},"Value":"Usa"},"GeoCoordinates":{"Details":{"IsValidated":true},"Value":{"Lat":45.0,"Lon":-15.0}},"CountryCode":{"Details":{"IsValidated":true},"Value":"US"},"PostalCode":{"Details":{"IsValidated":true},"Value":"10155"},"StreetAddress":{"Details":{"IsValidated":true},"Value":"Main Street, 3"},"County":{"Details":{"IsValidated":true},"Value":"Bestcounty"},"Region":{"Details":{"IsValidated":true},"Value":"Topregion"}}},"EducationExperiences":[{"EducationTitle":{"Details":{"IsValidated":true},"Value":"high school degree"},"FieldOfStudy":{"Details":{"IsValidated":true},"Value":"engineering"},"EducationLevelCode":{"Details":{"IsValidated":true},"Value":{"EQF":5}},"StartDate":{"Details":{"IsValidated":true},"Value":"2007-09-20"},"EndDate":{"Details":{"IsValidated":true},"Value":"2011-06-11"},"Duration":{"Details":{"IsValidated":true},"Value":500},"Location":{"City":{"Details":{"IsValidated":true},"Value":"Anytown"},"Country":{"Details":{"IsValidated":true},"Value":"USA"},"GeoCoordinates":{"Details":{"IsValidated":true},"Value":{"Lat":45.0,"Lon":-15.0}}},"Organization":{"OrganizationName":{"Details":{"IsValidated":true},"Value":"Generic High School"}}}],"WorkExperiences":[{"PositionTitle":{"Details":{"IsValidated":true,"Score":0.75},"Value":"generic work"},"StartDate":{"Details":{"IsValidated":true},"Value":"2011-09-01"},"EndDate":{"Details":{"IsValidated":true},"Value":"2012-09-12"},"Duration":{"Details":{"IsValidated":true},"Value":300},"Location":{"City":{"Details":{"IsValidated":true},"Value":"Anytown"},"Country":{"Details":{"IsValidated":true},"Value":"Italy"},"GeoCoordinates":{"Details":{"IsValidated":true},"Value":{"Lat":45.0,"Lon":-15.0}}},"Employer":{"OrganizationName":{"Details":{"IsValidated":true},"Value":"Serramenti"}}},{"PositionTitle":{"Details":{"IsValidated":true,"Score":0.75},"Value":"generic work"},"StartDate":{"Details":{"IsValidated":true},"Value":"2012-10-27"},"EndDate":{"Details":{"IsValidated":true},"Value":"2015-06-16"},"Duration":{"Details":{"IsValidated":true},"Value":600},"Location":{"City":{"Details":{"IsValidated":true},"Value":"Anytown"},"Country":{"Details":{"IsValidated":true},"Value":"Anycountry"},"GeoCoordinates":{"Details":{"IsValidated":true},"Value":{"Lat":45.0,"Lon":-15.0}}},"Employer":{"OrganizationName":{"Details":{"IsValidated":true},"Value":"Generic company"}}}],"Skills":[{"Details":{"Category":"IT","IsValidated":true,"TextPositions":[{"Start":42,"End":56}],"Score":0.97},"Value":"programmazione"},{"Details":{"Category":"IT","IsValidated":true,"TextPositions":[{"Start":59,"End":61}],"Score":0.9},"Value":"C#"}],"JobTitles":[{"Details":{"IsValidated":true,"TextPositions":[{"Start":21,"End":39}],"Score":0.95},"Value":"back-end developer"}],"Languages":[{"Details":{"IsValidated":true,"ProficiencyLevelCode":{"CEFR":{"Writing":"A2","Reading":"B2","Listening":"B1","SpokenInteraction":"B1","SpokenProduction":"B1"}}},"Value":"italian"},{"Details":{"IsValidated":true,"IsPrimary":true},"Value":"english"}]},"Attachments":{"CV":{"Language":"en","Filename":"John_Doe_CV.pdf"},"Pic":{"File":"<base64 of picture>","FileExt":"<extension of picture>"}}},"URL":"1680/candidati/cv/JohnDoeCV.pdf","InternalID":35660},"etc.."]}; // \OpenAPI\Client\Model\DocsImportItemRequest

try {
    $result = $apiInstance->awsImportPOST($indexname, $docs_import_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeImportApi->awsImportPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **docs_import_item_request** | [**\OpenAPI\Client\Model\DocsImportItemRequest**](../Model/DocsImportItemRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ImportResponse**](../Model/ImportResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importStatusGET()`

```php
importStatusGET($indexname, $import_id): \OpenAPI\Client\Model\ImportStatus
```

Import Status

This method returns the status of the import corresponding to the *import_id* indicated as query parameter (see the schema below). The status value may be one of the following: + *Pending*: the import is in INDA process queues; + *Running*: the import has begun; INDA is processeing the associated resumes; + *Completed*: the import is finished.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$import_id = 'import_id_example'; // string

try {
    $result = $apiInstance->importStatusGET($indexname, $import_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeImportApi->importStatusGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **import_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ImportStatus**](../Model/ImportStatus.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
