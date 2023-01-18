# OpenAPI\Client\ESCOApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**escoOccupationsHierarchyGET()**](ESCOApi.md#escoOccupationsHierarchyGET) | **GET** /hr/v2/occupations/similar/esco/hierarchy/ | ESCO Occupations Hierarchy |
| [**escoSkillsHierarchyGET()**](ESCOApi.md#escoSkillsHierarchyGET) | **GET** /hr/v2/skills/similar/esco/hierarchy/ | ESCO Skills Hierarchy |
| [**fromDescriptionToEscoOccupationsPOST()**](ESCOApi.md#fromDescriptionToEscoOccupationsPOST) | **POST** /hr/v2/occupations/description/match/esco/ | From description to ESCO Occupations |
| [**fromDescriptionToEscoSkillsPOST()**](ESCOApi.md#fromDescriptionToEscoSkillsPOST) | **POST** /hr/v2/skills/description/match/esco/ | From description to ESCO Skills |
| [**mappingEscoGET()**](ESCOApi.md#mappingEscoGET) | **GET** /hr/v2/occupations/mapping/esco/ | Mapping ESCO |
| [**mappingIscoGET()**](ESCOApi.md#mappingIscoGET) | **GET** /hr/v2/occupations/mapping/isco/ | Mapping ISCO |
| [**mappingIstatCp2011GET()**](ESCOApi.md#mappingIstatCp2011GET) | **GET** /hr/v2/occupations/mapping/istat/ | Mapping ISTAT-CP2011 |
| [**mappingOnetGET()**](ESCOApi.md#mappingOnetGET) | **GET** /hr/v2/occupations/mapping/onet/ | Mapping O*NET |
| [**similarEscoOccupationsGET()**](ESCOApi.md#similarEscoOccupationsGET) | **GET** /hr/v2/occupations/similar/esco/ | Similar ESCO Occupations |
| [**similarEscoSkillsGET()**](ESCOApi.md#similarEscoSkillsGET) | **GET** /hr/v2/skills/similar/esco/ | Similar ESCO Skills |


## `escoOccupationsHierarchyGET()`

```php
escoOccupationsHierarchyGET($query, $dst_lang): \OpenAPI\Client\Model\MostSimilarJobtitleResponseCategorized
```

ESCO Occupations Hierarchy

This method provides the most similar ESCO job title given a *jobtitle* (that could be a word or a sentence in several languages), its hierarchy classification according with ISCO classification, and the top three industries and job functions where the occupation is distributed.  More details about ESCO occupations hierarchy are showed [here](https://ec.europa.eu/esco/portal/occupation).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ESCOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | It could be any word or sentence in several languages.
$dst_lang = 'it'; // string | Language of the similar ESCO occupations.

try {
    $result = $apiInstance->escoOccupationsHierarchyGET($query, $dst_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESCOApi->escoOccupationsHierarchyGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| It could be any word or sentence in several languages. | |
| **dst_lang** | **string**| Language of the similar ESCO occupations. | [optional] [default to &#39;it&#39;] |

### Return type

[**\OpenAPI\Client\Model\MostSimilarJobtitleResponseCategorized**](../Model/MostSimilarJobtitleResponseCategorized.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `escoSkillsHierarchyGET()`

```php
escoSkillsHierarchyGET($query, $dst_lang): \OpenAPI\Client\Model\MostSimilarSkillResponseCategorized
```

ESCO Skills Hierarchy

This method provides the most similar ESCO skills given a *query* (representing a skill) that could be a word or a sentence in several languages; also its hierarchy classification according with ESCO is returned.  More details about ESCO skills hierarchy are showed [here](https://ec.europa.eu/esco/portal/skill).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ESCOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | A word or a brief sentence in several languages.
$dst_lang = 'it'; // string | Language of the similar ESCO skills.

try {
    $result = $apiInstance->escoSkillsHierarchyGET($query, $dst_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESCOApi->escoSkillsHierarchyGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| A word or a brief sentence in several languages. | |
| **dst_lang** | **string**| Language of the similar ESCO skills. | [optional] [default to &#39;it&#39;] |

### Return type

[**\OpenAPI\Client\Model\MostSimilarSkillResponseCategorized**](../Model/MostSimilarSkillResponseCategorized.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fromDescriptionToEscoOccupationsPOST()`

```php
fromDescriptionToEscoOccupationsPOST($description_input, $dst_lang, $size, $min_score): \OpenAPI\Client\Model\EscoJobtitleResponse
```

From description to ESCO Occupations

This method provides the list of n most affine ESCO occupations given a sentence or a long description. For each returned occupation, the service provides also a list of the main related skills according to ESCO classification.  More details about ESCO occupations are showed [here](https://ec.europa.eu/esco/portal/occupation).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ESCOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_input = {"Description":"<text>"}; // \OpenAPI\Client\Model\DescriptionInput
$dst_lang = 'it'; // string | Language of the similar ESCO occupations.
$size = 1; // int | The maximum number of similar ESCO occupations retrieved by the algorithm.
$min_score = 0.2; // float | Minimum score of the similar ESCO occupations with respect to the job title queried by the user.

try {
    $result = $apiInstance->fromDescriptionToEscoOccupationsPOST($description_input, $dst_lang, $size, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESCOApi->fromDescriptionToEscoOccupationsPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **description_input** | [**\OpenAPI\Client\Model\DescriptionInput**](../Model/DescriptionInput.md)|  | |
| **dst_lang** | **string**| Language of the similar ESCO occupations. | [optional] [default to &#39;it&#39;] |
| **size** | **int**| The maximum number of similar ESCO occupations retrieved by the algorithm. | [optional] [default to 1] |
| **min_score** | **float**| Minimum score of the similar ESCO occupations with respect to the job title queried by the user. | [optional] [default to 0.2] |

### Return type

[**\OpenAPI\Client\Model\EscoJobtitleResponse**](../Model/EscoJobtitleResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fromDescriptionToEscoSkillsPOST()`

```php
fromDescriptionToEscoSkillsPOST($description_input, $dst_lang, $size, $min_score): \OpenAPI\Client\Model\EscoSkillResponse
```

From description to ESCO Skills

This method provides the list of n most affine ESCO skills given a sentence or a long description. For each returned skill, the service provides also a list of the main occupations where the skill is mandatory according to ESCO classification.  More details about ESCO skills are showed [here](https://ec.europa.eu/esco/portal/skill).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ESCOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_input = {"Description":"<text>"}; // \OpenAPI\Client\Model\DescriptionInput
$dst_lang = 'it'; // string | Language of the similar ESCO skills.
$size = 1; // int | The maximum number of similar ESCO skills retrieved by the algorithm.
$min_score = 0.2; // float | Minimum score of the similar ESCO skills with respect to the skill queried by the user.

try {
    $result = $apiInstance->fromDescriptionToEscoSkillsPOST($description_input, $dst_lang, $size, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESCOApi->fromDescriptionToEscoSkillsPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **description_input** | [**\OpenAPI\Client\Model\DescriptionInput**](../Model/DescriptionInput.md)|  | |
| **dst_lang** | **string**| Language of the similar ESCO skills. | [optional] [default to &#39;it&#39;] |
| **size** | **int**| The maximum number of similar ESCO skills retrieved by the algorithm. | [optional] [default to 1] |
| **min_score** | **float**| Minimum score of the similar ESCO skills with respect to the skill queried by the user. | [optional] [default to 0.2] |

### Return type

[**\OpenAPI\Client\Model\EscoSkillResponse**](../Model/EscoSkillResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mappingEscoGET()`

```php
mappingEscoGET($code): \OpenAPI\Client\Model\ClassificationMappingEscoResponse
```

Mapping ESCO

This method provides the mapping from a [ESCO](https://ec.europa.eu/esco/portal) occupation code to: - [ISCO](https://www.ilo.org/public/english/bureau/stat/isco/) occupation codes; - [O*NET](https://www.onetonline.org/) occupation codes; - [ISTAT-CP2011](http://professioni.istat.it/cp2011/) occupation codes;  All requests are displayed in English.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ESCOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | [ESCO code](https://ec.europa.eu/esco/portal/occupation).

try {
    $result = $apiInstance->mappingEscoGET($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESCOApi->mappingEscoGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| [ESCO code](https://ec.europa.eu/esco/portal/occupation). | |

### Return type

[**\OpenAPI\Client\Model\ClassificationMappingEscoResponse**](../Model/ClassificationMappingEscoResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mappingIscoGET()`

```php
mappingIscoGET($code): \OpenAPI\Client\Model\ClassificationMappingIscoResponse
```

Mapping ISCO

This method provides the mapping from a [ISCO](https://www.ilo.org/public/english/bureau/stat/isco/) occupation code to: - [ESCO](https://ec.europa.eu/esco/portal) occupation codes; - [O*NET](https://www.onetonline.org/) occupation codes; - [ISTAT-CP2011](http://professioni.istat.it/cp2011/) occupation codes;  All requests are displayed in English.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ESCOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | [ISCO code](https://www.ilo.org/public/english/bureau/stat/isco/).

try {
    $result = $apiInstance->mappingIscoGET($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESCOApi->mappingIscoGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| [ISCO code](https://www.ilo.org/public/english/bureau/stat/isco/). | |

### Return type

[**\OpenAPI\Client\Model\ClassificationMappingIscoResponse**](../Model/ClassificationMappingIscoResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mappingIstatCp2011GET()`

```php
mappingIstatCp2011GET($code): \OpenAPI\Client\Model\ClassificationMappingIstatResponse
```

Mapping ISTAT-CP2011

This method provides the mapping from a [ISTAT-CP2011](http://professioni.istat.it/cp2011/) occupation code to: - [ESCO](https://ec.europa.eu/esco/portal) occupation codes; - [O*NET](https://www.onetonline.org/) occupation codes; - [ISCO](https://www.ilo.org/public/english/bureau/stat/isco/) occupation codes;  All requests are displayed in English.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ESCOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | [ISTAT code](http://professioni.istat.it/cp2011/).

try {
    $result = $apiInstance->mappingIstatCp2011GET($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESCOApi->mappingIstatCp2011GET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| [ISTAT code](http://professioni.istat.it/cp2011/). | |

### Return type

[**\OpenAPI\Client\Model\ClassificationMappingIstatResponse**](../Model/ClassificationMappingIstatResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mappingOnetGET()`

```php
mappingOnetGET($code): \OpenAPI\Client\Model\ClassificationMappingOnetResponse
```

Mapping O*NET

This method provides the mapping from a [O*NET](https://www.onetonline.org/) occupation code to: - [ESCO](https://ec.europa.eu/esco/portal) occupation codes; - [ISTAT-CP2011](http://professioni.istat.it/cp2011/) occupation codes; - [ISCO](https://www.ilo.org/public/english/bureau/stat/isco/) occupation codes;  All requests are displayed in English.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ESCOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | [O*NET code](https://www.onetonline.org/).

try {
    $result = $apiInstance->mappingOnetGET($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESCOApi->mappingOnetGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| [O*NET code](https://www.onetonline.org/). | |

### Return type

[**\OpenAPI\Client\Model\ClassificationMappingOnetResponse**](../Model/ClassificationMappingOnetResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `similarEscoOccupationsGET()`

```php
similarEscoOccupationsGET($query, $dst_lang, $size, $min_score): \OpenAPI\Client\Model\EscoJobtitleResponse
```

Similar ESCO Occupations

This method provides the list of n most similar ESCO occupations given a *jobtitle*. For each returned occupation, the service provides also a list of the main related skills according to ESCO classification.  More details about ESCO occupations are showed [here](https://ec.europa.eu/esco/portal/occupation).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ESCOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | A word or a brief sentence in several languages.
$dst_lang = 'it'; // string | Language of the similar ESCO occupations.
$size = 1; // int | The maximum number of similar ESCO occupations retrieved by the algorithm.
$min_score = 0.2; // float | Minimum score of the similar ESCO occupations with respect to the job title queried by the user.

try {
    $result = $apiInstance->similarEscoOccupationsGET($query, $dst_lang, $size, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESCOApi->similarEscoOccupationsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| A word or a brief sentence in several languages. | |
| **dst_lang** | **string**| Language of the similar ESCO occupations. | [optional] [default to &#39;it&#39;] |
| **size** | **int**| The maximum number of similar ESCO occupations retrieved by the algorithm. | [optional] [default to 1] |
| **min_score** | **float**| Minimum score of the similar ESCO occupations with respect to the job title queried by the user. | [optional] [default to 0.2] |

### Return type

[**\OpenAPI\Client\Model\EscoJobtitleResponse**](../Model/EscoJobtitleResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `similarEscoSkillsGET()`

```php
similarEscoSkillsGET($query, $dst_lang, $size, $min_score): \OpenAPI\Client\Model\EscoSkillResponse
```

Similar ESCO Skills

This method provides the list of n most similar ESCO skills given a *skill*. For each returned skill, the service provides also a list of the main occupations where the skill is mandatory according to ESCO classification.  More details about ESCO skills are showed [here](https://ec.europa.eu/esco/portal/skill).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ESCOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | A word or a brief sentence in several languages.
$dst_lang = 'it'; // string | Language of the similar ESCO skills.
$size = 1; // int | The maximum number of similar ESCO skills retrieved by the algorithm.
$min_score = 0.2; // float | Minimum score of the similar ESCO skills with respect to the skill queried by the user.

try {
    $result = $apiInstance->similarEscoSkillsGET($query, $dst_lang, $size, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESCOApi->similarEscoSkillsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| A word or a brief sentence in several languages. | |
| **dst_lang** | **string**| Language of the similar ESCO skills. | [optional] [default to &#39;it&#39;] |
| **size** | **int**| The maximum number of similar ESCO skills retrieved by the algorithm. | [optional] [default to 1] |
| **min_score** | **float**| Minimum score of the similar ESCO skills with respect to the skill queried by the user. | [optional] [default to 0.2] |

### Return type

[**\OpenAPI\Client\Model\EscoSkillResponse**](../Model/EscoSkillResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
