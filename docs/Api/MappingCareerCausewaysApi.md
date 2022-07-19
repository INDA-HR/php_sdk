# OpenAPI\Client\MappingCareerCausewaysApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**careerRecommendationPOST()**](MappingCareerCausewaysApi.md#careerRecommendationPOST) | **POST** /hr/v2/resume/career/occupation/recommendation/ | Career Recommendation
[**occupationActivitiesComparisonPOST()**](MappingCareerCausewaysApi.md#occupationActivitiesComparisonPOST) | **POST** /hr/v2/resume/career/occupation/activities/comparison/ | Occupation Activities Comparison
[**occupationSkillComparisonPOST()**](MappingCareerCausewaysApi.md#occupationSkillComparisonPOST) | **POST** /hr/v2/resume/career/occupation/skills/comparison/ | Occupation Skill Comparison
[**upskillingSimulatorPOST()**](MappingCareerCausewaysApi.md#upskillingSimulatorPOST) | **POST** /hr/v2/resume/career/simulator/upskilling/ | Upskilling simulator


## `careerRecommendationPOST()`

```php
careerRecommendationPOST($career_transition_request, $lang, $min_score): \OpenAPI\Client\Model\TransitionRecommendations
```

Career Recommendation

This method provides an ordered list of recommended jobs transition, given an origin occupation. First, the algorithm  calculates the ESCO occupation that best matches the input job title. The ESCO match is provided  only if the match score is higher than `min_score`.  Viability, salary, and automation risk define the transition recommendations, and the user can select them by the *TransitionType* field: - `viable`: the algorithm recommends all similar occupations, ordered by similarity. No other considerations are made. - `desirable`: the algorithm recommends all similar occupations that offer comparable or higher pay levels. - `safe_desirable`: the algorithm recommends the subset of roles that will likely reduce    a worker's exposure to automation risk among the `desirable` transition.   - `strictly_safe_desirable`: the algorithm recommends among the `desirable` transition, the subset of roles with    lower automation risk and higher prevalence of bottleneck tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MappingCareerCausewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$career_transition_request = {"OriginOccupation":"data analyst","TransitionType":"viable"}; // \OpenAPI\Client\Model\CareerTransitionRequest
$lang = 'it'; // string | Output language.
$min_score = 0.2; // float | Minimum similarity score for ESCO mapping.

try {
    $result = $apiInstance->careerRecommendationPOST($career_transition_request, $lang, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingCareerCausewaysApi->careerRecommendationPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **career_transition_request** | [**\OpenAPI\Client\Model\CareerTransitionRequest**](../Model/CareerTransitionRequest.md)|  |
 **lang** | **string**| Output language. | [optional] [default to &#39;it&#39;]
 **min_score** | **float**| Minimum similarity score for ESCO mapping. | [optional] [default to 0.2]

### Return type

[**\OpenAPI\Client\Model\TransitionRecommendations**](../Model/TransitionRecommendations.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `occupationActivitiesComparisonPOST()`

```php
occupationActivitiesComparisonPOST($work_activity_comparison_request, $lang, $min_score): \OpenAPI\Client\Model\WorkActivityComparison
```

Occupation Activities Comparison

This method provides a detailed comparison of the principal activities of the origin and destination occupation.  For each activity, the method shows the gap between the two occupations.   The activity comparison is based n the skill ESCO level. It ranges from one to three,  and it is related to the specificity of the activity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MappingCareerCausewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_activity_comparison_request = {"OriginOccupation":"data analyst","DestinationOccupation":"data scientist","ESCOLevel":1}; // \OpenAPI\Client\Model\WorkActivityComparisonRequest
$lang = 'it'; // string | Output language.
$min_score = 0.2; // float | Minimum similarity score for ESCO mapping.

try {
    $result = $apiInstance->occupationActivitiesComparisonPOST($work_activity_comparison_request, $lang, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingCareerCausewaysApi->occupationActivitiesComparisonPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_activity_comparison_request** | [**\OpenAPI\Client\Model\WorkActivityComparisonRequest**](../Model/WorkActivityComparisonRequest.md)|  |
 **lang** | **string**| Output language. | [optional] [default to &#39;it&#39;]
 **min_score** | **float**| Minimum similarity score for ESCO mapping. | [optional] [default to 0.2]

### Return type

[**\OpenAPI\Client\Model\WorkActivityComparison**](../Model/WorkActivityComparison.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `occupationSkillComparisonPOST()`

```php
occupationSkillComparisonPOST($occupation_skills_comparison_request, $lang, $min_score): \OpenAPI\Client\Model\OccupationsSkillsComparison
```

Occupation Skill Comparison

This method provides a detailed comparison of the skills of the origin and destination occupations.  Such comparison helps compare the skill gaps among the occupations. Each skill of the origin occupation  is mapped to the most similar skill of the destination occupation. The mapping is one to one.   Skills are split in: - `essential`: only the most relevant skills for such occupation are considered according to ESCO Classification; - `optional`: both essential and optional skills are considered according to ESCO Classification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MappingCareerCausewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$occupation_skills_comparison_request = {"OriginOccupation":"data analyst","DestinationOccupation":"data scientist","SkillMatch":"essential"}; // \OpenAPI\Client\Model\OccupationSkillsComparisonRequest
$lang = 'it'; // string | Output language.
$min_score = 0.2; // float | Minimum similarity score for ESCO mapping.

try {
    $result = $apiInstance->occupationSkillComparisonPOST($occupation_skills_comparison_request, $lang, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingCareerCausewaysApi->occupationSkillComparisonPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **occupation_skills_comparison_request** | [**\OpenAPI\Client\Model\OccupationSkillsComparisonRequest**](../Model/OccupationSkillsComparisonRequest.md)|  |
 **lang** | **string**| Output language. | [optional] [default to &#39;it&#39;]
 **min_score** | **float**| Minimum similarity score for ESCO mapping. | [optional] [default to 0.2]

### Return type

[**\OpenAPI\Client\Model\OccupationsSkillsComparison**](../Model/OccupationsSkillsComparison.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upskillingSimulatorPOST()`

```php
upskillingSimulatorPOST($upskilling_request, $lang, $min_score): \OpenAPI\Client\Model\Upskilling
```

Upskilling simulator

Learning and getting new skills usually leads to new job opportunities. Given an origin occupation and a list of acquired skills,  this method provides an updated ordered list of recommended jobs transition based on your occupation skills and your acquired skills.  First, the algorithm  calculates the ESCO occupation that best matches the input job title and ESCO skills that best fits the input skills list.  The ESCO match is provided  only if the match score is higher than `min_score`.    Viability, salary, and automation risk define the transition recommendations, and the user can select them by the *TransitionType* field: - `viable`: the algorithm recommends all similar occupations, ordered by similarity. No other considerations are made; - `desirable`: the algorithm recommends all similar occupations that offer comparable or higher pay levels; - `safe_desirable`: the algorithm recommends the subset of roles that will likely reduce     a worker's exposure to automation risk among the `desirable` transition;   - `strictly_safe_desirable`: the algorithm recommends among the `desirable` transition, the subset of roles with     lower automation risk and higher prevalence of bottleneck tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MappingCareerCausewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upskilling_request = {"OriginOccupation":"data analyst","TransitionType":"viable","Skills":["big data","python"]}; // \OpenAPI\Client\Model\UpskillingRequest
$lang = 'it'; // string | Output language.
$min_score = 0.2; // float | Minimum similarity score for ESCO mapping.

try {
    $result = $apiInstance->upskillingSimulatorPOST($upskilling_request, $lang, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingCareerCausewaysApi->upskillingSimulatorPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upskilling_request** | [**\OpenAPI\Client\Model\UpskillingRequest**](../Model/UpskillingRequest.md)|  |
 **lang** | **string**| Output language. | [optional] [default to &#39;it&#39;]
 **min_score** | **float**| Minimum similarity score for ESCO mapping. | [optional] [default to 0.2]

### Return type

[**\OpenAPI\Client\Model\Upskilling**](../Model/Upskilling.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
