# OpenAPI\Client\UniversitiesApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUniversityGET()**](UniversitiesApi.md#getUniversityGET) | **GET** /hr/v2/university/{university_id}/ | Get University
[**universityAutocompleteGET()**](UniversitiesApi.md#universityAutocompleteGET) | **GET** /hr/v2/university/name/search/autocomplete/ | University Autocomplete


## `getUniversityGET()`

```php
getUniversityGET($university_id, $minimal): \OpenAPI\Client\Model\GetUniversityResponse
```

Get University

This method retrieves the *university'* full data through a UUID *university_id*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UniversitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$university_id = 'university_id_example'; // string
$minimal = false; // bool | If set to True the API returns only the Overview of the University.

try {
    $result = $apiInstance->getUniversityGET($university_id, $minimal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniversitiesApi->getUniversityGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **university_id** | **string**|  |
 **minimal** | **bool**| If set to True the API returns only the Overview of the University. | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\GetUniversityResponse**](../Model/GetUniversityResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `universityAutocompleteGET()`

```php
universityAutocompleteGET($term, $size, $token_order, $fuzzy, $city, $country, $country_code, $lat, $lon, $pivot, $include_branches): \OpenAPI\Client\Model\UniversityAutocompleteResponse
```

University Autocomplete

This method performs an autocomplete search based on the best matching *universities'* official name, alternative name  and acronym. It returns a minimal set of data for each *university* and its *ID*, which it is meant to be used as  *university_id* to retrieve the full data through the [Get University](https://api.inda.ai/hr/docs/v2/#operation/get_university__GET) method.  You can personalize both the autocomplete algorithm used to retrieve the list *universities* and the location search  filters. The latter allows to perform searches on both the *university'* headquarter and branches geo location. At least one of the two should match the user geo location query in order to show the *university* into the result  response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UniversitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$term = 'term_example'; // string | Token to be completed
$size = 10; // int | Response size.
$token_order = 'any'; // string | Whether to autocomplete the term in a sequential way or not. The default *any* value guarantees good performances as well as flexible results.
$fuzzy = false; // bool | Fuzzy search. If *True* performs a fuzzy search with max edits set to 2.
$city = array('city_example'); // string[] | Generally performing better using original language queries.
$country = array('country_example'); // string[] | Generally performing better using english queries.
$country_code = array('country_code_example'); // string[] | Standard upper case Country Codes.
$lat = 3.4; // float
$lon = 3.4; // float
$pivot = 30; // int | When results are *pivot* kilometers away from *origin*, which is the geo point corresponding to the tuple *(lat, lon)*, have score 0.5.
$include_branches = true; // bool | Whether to include *University*'s branches in the location filtering or not.

try {
    $result = $apiInstance->universityAutocompleteGET($term, $size, $token_order, $fuzzy, $city, $country, $country_code, $lat, $lon, $pivot, $include_branches);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniversitiesApi->universityAutocompleteGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term** | **string**| Token to be completed |
 **size** | **int**| Response size. | [optional] [default to 10]
 **token_order** | **string**| Whether to autocomplete the term in a sequential way or not. The default *any* value guarantees good performances as well as flexible results. | [optional] [default to &#39;any&#39;]
 **fuzzy** | **bool**| Fuzzy search. If *True* performs a fuzzy search with max edits set to 2. | [optional] [default to false]
 **city** | [**string[]**](../Model/string.md)| Generally performing better using original language queries. | [optional]
 **country** | [**string[]**](../Model/string.md)| Generally performing better using english queries. | [optional]
 **country_code** | [**string[]**](../Model/string.md)| Standard upper case Country Codes. | [optional]
 **lat** | **float**|  | [optional]
 **lon** | **float**|  | [optional]
 **pivot** | **int**| When results are *pivot* kilometers away from *origin*, which is the geo point corresponding to the tuple *(lat, lon)*, have score 0.5. | [optional] [default to 30]
 **include_branches** | **bool**| Whether to include *University*&#39;s branches in the location filtering or not. | [optional] [default to true]

### Return type

[**\OpenAPI\Client\Model\UniversityAutocompleteResponse**](../Model/UniversityAutocompleteResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
