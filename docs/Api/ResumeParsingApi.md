# OpenAPI\Client\ResumeParsingApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**anonymizeCvPOST()**](ResumeParsingApi.md#anonymizeCvPOST) | **POST** /hr/v2/parse/resume/anonymize/ | Anonymize CV
[**bulkMapEntityPOST()**](ResumeParsingApi.md#bulkMapEntityPOST) | **POST** /hr/v2/keywords/bulk/map/entity/ | Bulk Map Entity
[**mapEntityPOST()**](ResumeParsingApi.md#mapEntityPOST) | **POST** /hr/v2/keywords/map/entity/ | Map Entity
[**parseResumePOST()**](ResumeParsingApi.md#parseResumePOST) | **POST** /hr/v2/parse/resume/data/ | Parse Resume
[**textExtractionPOST()**](ResumeParsingApi.md#textExtractionPOST) | **POST** /hr/v2/parse/resume/text/ | Text Extraction


## `anonymizeCvPOST()`

```php
anonymizeCvPOST($base_file_doc, $src_lang): \OpenAPI\Client\Model\DocumentAnonymizationResponse
```

Anonymize CV

This method allows you to anonymize a CV/resume (only textual documents, not scanned documents or images) by  covering the main sensitive information in the document. Output is always a PDF file containing an anonymized copy of the source document.  Masked entities are: <code style='color: #333333; opacity: 0.9'>given name</code>, <code style='color: #333333; opacity: 0.9'>family name</code>, <code style='color: #333333; opacity: 0.9'>birthdate</code>, <code style='color: #333333; opacity: 0.9'>telephone numbers</code>, <code style='color: #333333; opacity: 0.9'>emails</code>, <code style='color: #333333; opacity: 0.9'>links</code>, <code style='color: #333333; opacity: 0.9'>gender</code>, <code style='color: #333333; opacity: 0.9'>nationality</code>, <code style='color: #333333; opacity: 0.9'>profile picture</code>.  Supported extensions: <code style='color: #333333; opacity: 0.9'>pdf</code>, <code style='color: #333333; opacity: 0.9'>doc</code>, <code style='color: #333333; opacity: 0.9'>docx</code>, <code style='color: #333333; opacity: 0.9'>odt</code>, <code style='color: #333333; opacity: 0.9'>txt</code>, <code style='color: #333333; opacity: 0.9'>html</code>, <code style='color: #333333; opacity: 0.9'>pptx</code>, <code style='color: #333333; opacity: 0.9'>rtf</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_file_doc = {"File":"<binary of document>","FileExt":"<extension of document>"}; // \OpenAPI\Client\Model\BaseFileDoc
$src_lang = 'src_lang_example'; // string | Language to use to interpret the text. If missing, language detection is performed.

try {
    $result = $apiInstance->anonymizeCvPOST($base_file_doc, $src_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeParsingApi->anonymizeCvPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base_file_doc** | [**\OpenAPI\Client\Model\BaseFileDoc**](../Model/BaseFileDoc.md)|  |
 **src_lang** | **string**| Language to use to interpret the text. If missing, language detection is performed. | [optional]

### Return type

[**\OpenAPI\Client\Model\DocumentAnonymizationResponse**](../Model/DocumentAnonymizationResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkMapEntityPOST()`

```php
bulkMapEntityPOST($multi_entity_input): \OpenAPI\Client\Model\MultiEntityMapping
```

Bulk Map Entity

This method wraps the [Map Entity](https://api.inda.ai/hr/docs/v2/#operation/map_entity__POST) method and allows a user to send all the entities to be mapped in one API call, e.g., for pagination purposes. Note that the request does not raise any Validation Error on the input data but instead it returns all the errors in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$multi_entity_input = {"Entities":[{"EntityID":"id1","Entity":{"InputString":"Università di Torino","InputLanguage":"it","EntityType":"Data.EducationExperiences.Organization.OrganizationName","AllowedOutputs":[{"ID":"id0","Value":"Università degli Studi di Milano"},{"ID":"id1","Value":"Università degli Studi di Torino"}],"OutputLanguage":"it"}},{"EntityID":"id2","Entity":{"InputString":"Università di Torino","InputLanguage":"it","EntityType":"Data.EducationExperiences.Organization.OrganizationName","AllowedOutputs":[{"ID":"id0","Value":"Università degli Studi di Milano"},{"ID":"id1","Value":"Università degli Studi di Torino"}],"OutputLanguage":"it"}}]}; // \OpenAPI\Client\Model\MultiEntityInput

try {
    $result = $apiInstance->bulkMapEntityPOST($multi_entity_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeParsingApi->bulkMapEntityPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **multi_entity_input** | [**\OpenAPI\Client\Model\MultiEntityInput**](../Model/MultiEntityInput.md)|  |

### Return type

[**\OpenAPI\Client\Model\MultiEntityMapping**](../Model/MultiEntityMapping.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mapEntityPOST()`

```php
mapEntityPOST($entity_input): \OpenAPI\Client\Model\EntityMapping
```

Map Entity

This method maps an input string (ideally an entity extracted with the [Parse Resume](https://api.inda.ai/hr/docs/v2/#operation/parse_resume__POST) method) to the most similar string among a list of strings chosen by the user *(AllowedOutputs)*.  Note that, after a best match has been identified, it is actually presented as output only when it passes a *similarity check*, which takes into account the similarity of this best match with the input string, but also the similarity of the other elements of *allowed outputs* with the input string (namely, if many allowed outputs have a comparable similarity level, the *similarity check* is not passed, because there is not a clear winner). When the severity check is passed, the *id* of the best match is given in output (see the payload and response examples on the right); otherwise, an empty string is returned instead of the *id*. The severity of the similarity check can be controlled via the *severity* parameter, which takes value between <code style='color: #333333; opacity: 0.9'>0</code> and <code style='color: #333333; opacity: 0.9'>1</code>: a user who prefers to obtain the best match also when there is not guarantee it actually corresponds to the input string should set *severity* to a low value (i.e., close to <code style='color: #333333; opacity: 0.9'>0</code>); vice versa, a user who prefers to have a response only when there is a high confidence in the correspondence should set *severity* to a large value (i.e., close to <code style='color: #333333; opacity: 0.9'>1</code>); an intermediate value (such as the default value <code style='color: #333333; opacity: 0.9'>0.5</code>) is appropriate in many situations.  The method has been specialized for different entity types, and for each of them it performs an analysis optimized over the specific type. The currently supported entity types are <code style='color: #333333; opacity: 0.9'>Data.EducationExperiences.Organization.OrganizationName</code> and <code style='color: #333333; opacity: 0.9'>Data.EducationExperiences.EducationTitle</code>. If the entity type is a string that does not match any of the supported entity types, the mapping is performed using a non-specialized method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_input = {"InputString":"Università di Torino","InputLanguage":"it","EntityType":"Data.EducationExperiences.Organization.OrganizationName","AllowedOutputs":[{"ID":"id0","Value":"Università degli Studi di Milano"},{"ID":"id1","Value":"Università degli Studi di Torino"}],"OutputLanguage":"it"}; // \OpenAPI\Client\Model\EntityInput

try {
    $result = $apiInstance->mapEntityPOST($entity_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeParsingApi->mapEntityPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_input** | [**\OpenAPI\Client\Model\EntityInput**](../Model/EntityInput.md)|  |

### Return type

[**\OpenAPI\Client\Model\EntityMapping**](../Model/EntityMapping.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parseResumePOST()`

```php
parseResumePOST($base_file, $src_lang, $dst_lang, $graphics): \OpenAPI\Client\Model\ExtractionItem
```

Parse Resume

This method performs the *Information Extraction* from a resume, i.e., it recognizes the *named entities* contained in a given resume and reconstructs the relations between them, returning a structured information in the form of a json file. The method requires in input the *binary* and the *extension* of the file and automatically performs many steps: (*i*) Document Layout Analysis, (*ii*) Optical Character Recognition (if the input document is an image), (*iii*) Text Extraction, (*iv*) Named Entity Recognition, (*v*) Relation Extraction, and, finally, (*vi*) Face Recognition (which is carried out to identify, if present, the candidate photo).  The information provided in the output (see the schema below and the example on the right) can be used as structured data input for the [Add Resume](https://api.inda.ai/hr/docs/v2/#operation/add_resume__POST) method (some adjustments may be required).  The allowed file extensions are  <code style='color: #333333; opacity: 0.9'>pdf</code>, <code style='color: #333333; opacity: 0.9'>doc</code>, <code style='color: #333333; opacity: 0.9'>docx</code>, <code style='color: #333333; opacity: 0.9'>odt</code>, <code style='color: #333333; opacity: 0.9'>txt</code>, <code style='color: #333333; opacity: 0.9'>html</code>, <code style='color: #333333; opacity: 0.9'>pptx</code>, <code style='color: #333333; opacity: 0.9'>rtf</code>, <code style='color: #333333; opacity: 0.9'>jpg</code>, <code style='color: #333333; opacity: 0.9'>jpeg</code>, <code style='color: #333333; opacity: 0.9'>png</code>, <code style='color: #333333; opacity: 0.9'>tif</code>, <code style='color: #333333; opacity: 0.9'>tiff</code> .  Please consider to use the [Info Extraction Feedback](https://api.inda.ai/hr/docs/v2/#operation/info_extraction_feedback__POST) to inform us about differences  between user's expectations and the actual data provided as output by INDA engine. It is very useful to improve our algorithms' performances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_file = {"File":"<base64 of document>","FileExt":"<extension of document>"}; // \OpenAPI\Client\Model\BaseFile
$src_lang = 'src_lang_example'; // string | Optional. Language to use to extract data from the *Attachment.CV.File*.If missing, the detected language from the input file text is assumed as `src_lang`.
$dst_lang = 'dst_lang_example'; // string | Optional. Destination language in which the following *Data* entities are translated: *Skills*, *WorkExperiences.Skills*, *JobTitles*, *WorkExperiences.PositionTitle* and *Languages*.If missing, the input or detected `src_lang` is assumed as `dst_lang`.
$graphics = false; // bool | Whether to read skill graphs such as bars, pie charts, and symbols.

try {
    $result = $apiInstance->parseResumePOST($base_file, $src_lang, $dst_lang, $graphics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeParsingApi->parseResumePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base_file** | [**\OpenAPI\Client\Model\BaseFile**](../Model/BaseFile.md)|  |
 **src_lang** | **string**| Optional. Language to use to extract data from the *Attachment.CV.File*.If missing, the detected language from the input file text is assumed as &#x60;src_lang&#x60;. | [optional]
 **dst_lang** | **string**| Optional. Destination language in which the following *Data* entities are translated: *Skills*, *WorkExperiences.Skills*, *JobTitles*, *WorkExperiences.PositionTitle* and *Languages*.If missing, the input or detected &#x60;src_lang&#x60; is assumed as &#x60;dst_lang&#x60;. | [optional]
 **graphics** | **bool**| Whether to read skill graphs such as bars, pie charts, and symbols. | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\ExtractionItem**](../Model/ExtractionItem.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `textExtractionPOST()`

```php
textExtractionPOST($base_file): \OpenAPI\Client\Model\TextResponse
```

Text Extraction

This method extracts the text from a resume by performing the first steps of [Parse Resume](https://api.inda.ai/hr/docs/v2/#operation/parse_resume__POST). In particular, the method requires in input the *binary* and the *extension* of the file and automatically performs (*i*) Document Layout Analysis, (*ii*) Optical Character Recognition (if the input document is an image), and (*iii*) Text Extraction.  The allowed file extensions are  <code style='color: #333333; opacity: 0.9'>pdf</code>, <code style='color: #333333; opacity: 0.9'>doc</code>, <code style='color: #333333; opacity: 0.9'>docx</code>, <code style='color: #333333; opacity: 0.9'>odt</code>, <code style='color: #333333; opacity: 0.9'>txt</code>, <code style='color: #333333; opacity: 0.9'>html</code>, <code style='color: #333333; opacity: 0.9'>pptx</code>, <code style='color: #333333; opacity: 0.9'>rtf</code>, <code style='color: #333333; opacity: 0.9'>jpg</code>, <code style='color: #333333; opacity: 0.9'>jpeg</code>, <code style='color: #333333; opacity: 0.9'>png</code>, <code style='color: #333333; opacity: 0.9'>tif</code>, <code style='color: #333333; opacity: 0.9'>tiff</code> .

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResumeParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_file = {"File":"<binary of document>","FileExt":"<extension of document>"}; // \OpenAPI\Client\Model\BaseFile

try {
    $result = $apiInstance->textExtractionPOST($base_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResumeParsingApi->textExtractionPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base_file** | [**\OpenAPI\Client\Model\BaseFile**](../Model/BaseFile.md)|  |

### Return type

[**\OpenAPI\Client\Model\TextResponse**](../Model/TextResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
