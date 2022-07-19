# OpenAPI\Client\FeedbackApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**infoExtractionFeedbackPOST()**](FeedbackApi.md#infoExtractionFeedbackPOST) | **POST** /hr/v2/feedback/index/{indexname}/resume/{resume_id}/parse/data/ | Info Extraction Feedback
[**semanticSearchFeedbackPOST()**](FeedbackApi.md#semanticSearchFeedbackPOST) | **POST** /hr/v2/feedback/index/{indexname}/resume/{resume_id}/search/semantic/ | Semantic Search Feedback


## `infoExtractionFeedbackPOST()`

```php
infoExtractionFeedbackPOST($indexname, $resume_id, $feedback_info_item): \OpenAPI\Client\Model\FeedbackResponse
```

Info Extraction Feedback

This method collects the feedback for the Information Extraction ([Parse Resume](https://api.inda.ai/hr/docs/v2/#operation/parse_resume__POST) method) on the document associated to *resume_id* on the index *indexname*.  Note that *resume_id* is generally the ID returned by the [Add Resume](https://api.inda.ai/hr/docs/v2/#operation/add_resume__POST) method. However, if the user does not make use of resume/index management services, he can still use the information extraction feedback simply by generating a *resume_id* (UUID4 format).  The method requires an application/json as content type body. This json is an object which contains two elements: + The first element *ParseResumeOutput* is the json provided by [Parse Resume](https://api.inda.ai/hr/docs/v2/#operation/parse_resume__POST) method + The second element *OutputCorrected* is a json with structure and content corresponding to the desired output for the Information Extraction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$feedback_info_item = {"ParseResumeOutput":{"Data":{"JobTitle":{"Details":{"IsValidated":false,"Score":0.75},"Value":"back-end developer"},"PersonalInfo":{"PersonName":{"GivenName":{"Details":{"IsValidated":false},"Value":"John"},"FamilyName":{"Details":{"IsValidated":false},"Value":"Doe"},"FormattedName":{"Details":{"IsValidated":false},"Value":"John Doe"}},"Birthdate":{"Details":{"IsValidated":false},"Value":"1990-11-01"},"Age":{"Details":{"IsValidated":false},"Value":28}},"ContactInfo":{"PhoneNumbers":[{"Number":{"Details":{"IsValidated":false},"Value":{"CountryCode":"IT","CountryDialling":"39","DialNumber":"0000000000"}}},{"Number":{"Details":{"IsValidated":false},"Value":{"CountryCode":"IT","CountryDialling":"39","DialNumber":"1111111111"}}}],"EmailAddresses":[{"Address":{"Details":{"IsValidated":false},"Value":"johndoe@gmail.com"}}],"Links":[{"URL":{"Details":{"IsValidated":false},"Value":"http://linkedin.com/profile/JohnDoe90"},"Label":{"Details":{"IsValidated":false},"Value":"LinkedIn"}},{"URL":{"Details":{"IsValidated":false},"Value":"http://facebook.com/profile/JohnnyDoevo"},"Label":{"Details":{"IsValidated":false},"Value":"Facebook"}}]},"PersonLocation":{"PermanentLocation":{"City":{"Details":{"IsValidated":false},"Value":"Anytown"},"Country":{"Details":{"IsValidated":false},"Value":"Usa"},"GeoCoordinates":{"Details":{"IsValidated":false},"Value":{"Lat":45.0,"Lon":-15.0}},"CountryCode":{"Details":{"IsValidated":false},"Value":"US"},"PostalCode":{"Details":{"IsValidated":false},"Value":"10155"},"StreetAddress":{"Details":{"IsValidated":false},"Value":"Main Street, 3"},"County":{"Details":{"IsValidated":false},"Value":"Bestcounty"},"Region":{"Details":{"IsValidated":false},"Value":"Topregion"}}},"EducationExperiences":[{"EducationTitle":{"Details":{"IsValidated":false},"Value":"high school degree"},"FieldOfStudy":{"Details":{"IsValidated":false},"Value":"engineering"},"EducationLevelCode":{"Details":{"IsValidated":false},"Value":{"EQF":5}},"StartDate":{"Details":{"IsValidated":false},"Value":"2007-09-20"},"EndDate":{"Details":{"IsValidated":false},"Value":"2011-06-11"},"Duration":{"Details":{"IsValidated":false},"Value":500},"Location":{"City":{"Details":{"IsValidated":false},"Value":"Anytown"},"Country":{"Details":{"IsValidated":false},"Value":"USA"},"GeoCoordinates":{"Details":{"IsValidated":false},"Value":{"Lat":45.0,"Lon":-15.0}}},"Organization":{"OrganizationName":{"Details":{"IsValidated":false},"Value":"Generic High School"}}}],"WorkExperiences":[{"PositionTitle":{"Details":{"IsValidated":false,"Score":0.75},"Value":"generic work"},"StartDate":{"Details":{"IsValidated":false},"Value":"2011-09-01"},"EndDate":{"Details":{"IsValidated":false},"Value":"2012-09-12"},"Duration":{"Details":{"IsValidated":false},"Value":300},"Location":{"City":{"Details":{"IsValidated":false},"Value":"Anytown"},"Country":{"Details":{"IsValidated":false},"Value":"Italy"},"GeoCoordinates":{"Details":{"IsValidated":false},"Value":{"Lat":45.0,"Lon":-15.0}}},"Employer":{"OrganizationName":{"Details":{"IsValidated":false},"Value":"Serramenti"}}},{"PositionTitle":{"Details":{"IsValidated":false,"Score":0.75},"Value":"generic work"},"StartDate":{"Details":{"IsValidated":false},"Value":"2012-10-27"},"EndDate":{"Details":{"IsValidated":false},"Value":"2015-06-16"},"Duration":{"Details":{"IsValidated":false},"Value":600},"Location":{"City":{"Details":{"IsValidated":false},"Value":"Anytown"},"Country":{"Details":{"IsValidated":false},"Value":"Anycountry"},"GeoCoordinates":{"Details":{"IsValidated":false},"Value":{"Lat":45.0,"Lon":-15.0}}},"Employer":{"OrganizationName":{"Details":{"IsValidated":false},"Value":"Generic company"}}}],"ProfileSummary":{"HighestEducationLevelCode":{"Details":{"IsValidated":false},"Value":{"EQF":5}},"HighestEducationTitle":{"Details":{"IsValidated":false},"Value":"high school degree"},"EducationExperiencesCount":{"Details":{"IsValidated":false},"Value":1},"EducationExperiencesTotalDuration":{"Details":{"IsValidated":false},"Value":500},"EducationExperiencesAverageDuration":{"Details":{"IsValidated":false},"Value":500},"WorkExperiencesCount":{"Details":{"IsValidated":false},"Value":2},"WorkExperiencesTotalDuration":{"Details":{"IsValidated":false},"Value":900},"WorkExperiencesAverageDuration":{"Details":{"IsValidated":false},"Value":365}},"Skills":[{"Details":{"Category":"IT","IsValidated":false,"TextPositions":[{"Start":42,"End":56}],"Score":0.97},"Value":"programmazione"},{"Details":{"Category":"IT","IsValidated":false,"TextPositions":[{"Start":59,"End":61}],"Score":0.9},"Value":"C#"}],"JobTitles":[{"Details":{"IsValidated":false,"TextPositions":[{"Start":21,"End":39}],"Score":0.95},"Value":"back-end developer"}],"Languages":[{"Details":{"IsValidated":false,"ProficiencyLevelCode":{"CEFR":{"Writing":"A2","Reading":"B2","Listening":"B1","SpokenInteraction":"B1","SpokenProduction":"B1"}}},"Value":"italian"},{"Details":{"IsValidated":false,"IsPrimary":true},"Value":"english"}]},"Attachments":{"CV":{"Language":"en","Filename":"John_Doe_CV.pdf","FileExt":"<extension of document>"}}},"OutputCorrected":{"Data":{"JobTitle":{"Details":{"IsValidated":false,"Score":0.75},"Value":"back-end developer"},"PersonalInfo":{"PersonName":{"GivenName":{"Details":{"IsValidated":false},"Value":"John"},"FamilyName":{"Details":{"IsValidated":false},"Value":"Doe"},"FormattedName":{"Details":{"IsValidated":false},"Value":"John Doe"}},"Birthdate":{"Details":{"IsValidated":false},"Value":"1990-11-01"},"Age":{"Details":{"IsValidated":false},"Value":28}},"ContactInfo":{"PhoneNumbers":[{"Number":{"Details":{"IsValidated":false},"Value":{"CountryCode":"IT","CountryDialling":"39","DialNumber":"0000000000"}}},{"Number":{"Details":{"IsValidated":false},"Value":{"CountryCode":"IT","CountryDialling":"39","DialNumber":"1111111111"}}}],"EmailAddresses":[{"Address":{"Details":{"IsValidated":false},"Value":"johndoe@gmail.com"}}],"Links":[{"URL":{"Details":{"IsValidated":false},"Value":"http://linkedin.com/profile/JohnDoe90"},"Label":{"Details":{"IsValidated":false},"Value":"LinkedIn"}},{"URL":{"Details":{"IsValidated":false},"Value":"http://facebook.com/profile/JohnnyDoevo"},"Label":{"Details":{"IsValidated":false},"Value":"Facebook"}}]},"PersonLocation":{"PermanentLocation":{"City":{"Details":{"IsValidated":false},"Value":"Anytown"},"Country":{"Details":{"IsValidated":false},"Value":"Usa"},"GeoCoordinates":{"Details":{"IsValidated":false},"Value":{"Lat":45.0,"Lon":-15.0}},"CountryCode":{"Details":{"IsValidated":false},"Value":"US"},"PostalCode":{"Details":{"IsValidated":false},"Value":"10155"},"StreetAddress":{"Details":{"IsValidated":false},"Value":"Main Street, 3"},"County":{"Details":{"IsValidated":false},"Value":"Bestcounty"},"Region":{"Details":{"IsValidated":false},"Value":"Topregion"}}},"EducationExperiences":[{"EducationTitle":{"Details":{"IsValidated":false},"Value":"high school degree"},"FieldOfStudy":{"Details":{"IsValidated":false},"Value":"engineering"},"EducationLevelCode":{"Details":{"IsValidated":false},"Value":{"EQF":5}},"StartDate":{"Details":{"IsValidated":false},"Value":"2007-09-20"},"EndDate":{"Details":{"IsValidated":false},"Value":"2011-06-11"},"Duration":{"Details":{"IsValidated":false},"Value":500},"Location":{"City":{"Details":{"IsValidated":false},"Value":"Anytown"},"Country":{"Details":{"IsValidated":false},"Value":"USA"},"GeoCoordinates":{"Details":{"IsValidated":false},"Value":{"Lat":45.0,"Lon":-15.0}}},"Organization":{"OrganizationName":{"Details":{"IsValidated":false},"Value":"Generic High School"}}}],"WorkExperiences":[{"PositionTitle":{"Details":{"IsValidated":false,"Score":0.75},"Value":"generic work"},"StartDate":{"Details":{"IsValidated":false},"Value":"2011-09-01"},"EndDate":{"Details":{"IsValidated":false},"Value":"2012-09-12"},"Duration":{"Details":{"IsValidated":false},"Value":300},"Location":{"City":{"Details":{"IsValidated":false},"Value":"Anytown"},"Country":{"Details":{"IsValidated":false},"Value":"Italy"},"GeoCoordinates":{"Details":{"IsValidated":false},"Value":{"Lat":45.0,"Lon":-15.0}}},"Employer":{"OrganizationName":{"Details":{"IsValidated":false},"Value":"Serramenti"}}},{"PositionTitle":{"Details":{"IsValidated":false,"Score":0.75},"Value":"generic work"},"StartDate":{"Details":{"IsValidated":false},"Value":"2012-10-27"},"EndDate":{"Details":{"IsValidated":false},"Value":"2015-06-16"},"Duration":{"Details":{"IsValidated":false},"Value":600},"Location":{"City":{"Details":{"IsValidated":false},"Value":"Anytown"},"Country":{"Details":{"IsValidated":false},"Value":"Anycountry"},"GeoCoordinates":{"Details":{"IsValidated":false},"Value":{"Lat":45.0,"Lon":-15.0}}},"Employer":{"OrganizationName":{"Details":{"IsValidated":false},"Value":"Generic company"}}}],"ProfileSummary":{"HighestEducationLevelCode":{"Details":{"IsValidated":false},"Value":{"EQF":5}},"HighestEducationTitle":{"Details":{"IsValidated":false},"Value":"high school degree"},"EducationExperiencesCount":{"Details":{"IsValidated":false},"Value":1},"EducationExperiencesTotalDuration":{"Details":{"IsValidated":false},"Value":500},"EducationExperiencesAverageDuration":{"Details":{"IsValidated":false},"Value":500},"WorkExperiencesCount":{"Details":{"IsValidated":false},"Value":2},"WorkExperiencesTotalDuration":{"Details":{"IsValidated":false},"Value":900},"WorkExperiencesAverageDuration":{"Details":{"IsValidated":false},"Value":365}},"Skills":[{"Details":{"Category":"IT","IsValidated":false,"TextPositions":[{"Start":42,"End":56}],"Score":0.97},"Value":"programmazione"},{"Details":{"Category":"IT","IsValidated":false,"TextPositions":[{"Start":59,"End":61}],"Score":0.9},"Value":"C#"}],"JobTitles":[{"Details":{"IsValidated":false,"TextPositions":[{"Start":21,"End":39}],"Score":0.95},"Value":"back-end developer"}],"Languages":[{"Details":{"IsValidated":false,"ProficiencyLevelCode":{"CEFR":{"Writing":"A2","Reading":"B2","Listening":"B1","SpokenInteraction":"B1","SpokenProduction":"B1"}}},"Value":"italian"},{"Details":{"IsValidated":false,"IsPrimary":true},"Value":"english"}]},"Attachments":{"CV":{"Language":"it","Filename":"John_Doe_CV.pdf","FileExt":"<extension of document>"}}}}; // \OpenAPI\Client\Model\FeedbackInfoItem

try {
    $result = $apiInstance->infoExtractionFeedbackPOST($indexname, $resume_id, $feedback_info_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->infoExtractionFeedbackPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **feedback_info_item** | [**\OpenAPI\Client\Model\FeedbackInfoItem**](../Model/FeedbackInfoItem.md)|  |

### Return type

[**\OpenAPI\Client\Model\FeedbackResponse**](../Model/FeedbackResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `semanticSearchFeedbackPOST()`

```php
semanticSearchFeedbackPOST($indexname, $resume_id, $semantic_feedback_request): \OpenAPI\Client\Model\FeedbackResponse
```

Semantic Search Feedback

This method collects the feedback the Semantic Search ([Search Resumes](https://api.inda.ai/hr/docs/v2/#operation/search_resumes__POST) method) on the document associated to *resume_id* on the index *indexname*. Note that *resume_id* is the ID returned by the [Add Resume](https://api.inda.ai/hr/docs/v2/#operation/add_resume__POST) method.  The method requires an application/json as content type body. This json is an object which contains the following elements (see also the schema below and the example on the right): + A list of *QueryTerms* and *Weights* used to perform the [Search Resumes](https://api.inda.ai/hr/docs/v2/#operation/search_resumes__POST). + The rank of the item in the [Search Resumes](https://api.inda.ai/hr/docs/v2/#operation/search_resumes__POST) output. + The feedback field: The allowed values are <code style='color: #333333; opacity: 0.9'>0</code>, <code style='color: #333333; opacity: 0.9'>1</code>, and <code style='color: #333333; opacity: 0.9'>-1</code>. <code style='color: #333333; opacity: 0.9'>0</code> indicates that the rank is agreeable (i.e., it is not far from the rank expected by the user); <code style='color: #333333; opacity: 0.9'>1</code> indicates that the rank should have been significantly larger; <code style='color: #333333; opacity: 0.9'>-1</code> indicates that the rank should have been significantly smaller. + Optionally, the outcome of the [Search Resumes Evidence](https://api.inda.ai/hr/docs/v2/#operation/search_resumes_evidence__POST) call might be provided to improve log readability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$resume_id = 'resume_id_example'; // string
$semantic_feedback_request = {"Terms":[{"Term":"produzione","Weight":0.3},{"Term":"metalli","Weight":0.8}],"Rank":12,"Feedback":-1,"Evidence":[{"Term":"tubature","Score":0.918},{"Term":"valvole","Score":0.915},{"Term":"idraulico","Score":0.7912}]}; // \OpenAPI\Client\Model\SemanticFeedbackRequest

try {
    $result = $apiInstance->semanticSearchFeedbackPOST($indexname, $resume_id, $semantic_feedback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->semanticSearchFeedbackPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexname** | **string**|  |
 **resume_id** | **string**|  |
 **semantic_feedback_request** | [**\OpenAPI\Client\Model\SemanticFeedbackRequest**](../Model/SemanticFeedbackRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\FeedbackResponse**](../Model/FeedbackResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
