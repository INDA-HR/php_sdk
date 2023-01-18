# OpenAPI\Client\CustomizationsApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customizeResumesPOST()**](CustomizationsApi.md#customizeResumesPOST) | **POST** /hr/v2/index/{indexname}/resumes/customize/ | Customize Resumes |
| [**getResumeCustomizationsGET()**](CustomizationsApi.md#getResumeCustomizationsGET) | **GET** /hr/v2/index/{indexname}/resumes/mapping/ | Get Resume Customizations |


## `customizeResumesPOST()`

```php
customizeResumesPOST($indexname, $custom_fields): \OpenAPI\Client\Model\CustomizedFields
```

Customize Resumes

It is possible to customize the resume structure to add fields of various types to it. These can be useful to store user information or to use refined filters in queries.  Fields can be added at anytime but **they cannot be removed** and **field types cannot be changed**! This API call accepts a list of items under *Fields*, each item has the following properties:  + **Field**: Dot-notation position of the desired field in the items. + **Type**: One of the field types described below. + **Params**: Each field type accepts different parameters and they are explained in the code blocks below it.  **String types**  The family of types for long text and singular keywords.  + *keyword*: A short string value supporting only exact-match term queries  ``` {   \"Boost\": Optional[float]          # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[str]        # Items where this field is missing or null will be indexed with this value instead } ```  + *text*: Long varied sentences and pieces of text; tokenized and analyzed, it supports complex and generic match queries  ``` {   \"Boost\": Optional[float]          # Multiplicative score boost when executing queries on this field, defaults to 1.0 } ```  + *constant_keyword*: A keyword value that must be the same in all documents where it's present  ``` {   \"Value\": Optional[str]      # The value to assign to this field in documents, it will default to the value of the first indexed document if not provided } ```  + *wildcard*: Similar to keyword values, but optimized to support wildcard queries with glob-like patterns  ``` {   \"NullValue\": Optional[str]       # Items where this field is missing or null will be indexed with this value instead } ```  **Numbers**  Numeric types used to express amounts.  + *long*: Long (64bits) integer.  ``` {   \"Boost\": Optional[float]            # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[int]          # Items where this field is missing or null will be indexed with this value instead   \"Coerce\": Optional[bool]            # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true   \"IgnoreMalformed\": Optional[bool]   # Whether malformed and uncastable values should be ignored or throw an exception, which is the default } ```  + *integer*: Normal (32bits) integer.  ``` {   \"Boost\": Optional[float]            # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[int]          # Items where this field is missing or null will be indexed with this value instead   \"Coerce\": Optional[bool]            # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true   \"IgnoreMalformed\": Optional[bool]   # Whether malformed and uncastable values should be ignored or throw an exception, which is the default } ```  + *short*: Short (16bits) integer.  ``` {   \"Boost\": Optional[float]            # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[int]          # Items where this field is missing or null will be indexed with this value instead   \"Coerce\": Optional[bool]            # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true   \"IgnoreMalformed\": Optional[bool]   # Whether malformed and uncastable values should be ignored or throw an exception, which is the default } ```  + *byte*: Single byte (8bits) integer.  ``` {   \"Boost\": Optional[float]            # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[int]          # Items where this field is missing or null will be indexed with this value instead   \"Coerce\": Optional[bool]            # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true   \"IgnoreMalformed\": Optional[bool]   # Whether malformed and uncastable values should be ignored or throw an exception, which is the default } ```  + *double*: Double precision (64bits) floating point number.  ``` {   \"Boost\": Optional[float]                # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[float]            # Items where this field is missing or null will be indexed with this value instead   \"Coerce\": Optional[bool]                # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true   \"IgnoreMalformed\": Optional[bool]       # Whether malformed and uncastable values should be ignored or throw an exception, which is the default } ```  + *float*: Single precision (32bits) floating point number.  ``` {   \"Boost\": Optional[float]                # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[float]            # Items where this field is missing or null will be indexed with this value instead   \"Coerce\": Optional[bool]                # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true   \"IgnoreMalformed\": Optional[bool]       # Whether malformed and uncastable values should be ignored or throw an exception, which is the default } ```  + *half_float*: Half precision (16bits) floating point number.  ``` {   \"Boost\": Optional[float]                # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[float]            # Items where this field is missing or null will be indexed with this value instead   \"Coerce\": Optional[bool]                # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true   \"IgnoreMalformed\": Optional[bool]       # Whether malformed and uncastable values should be ignored or throw an exception, which is the default } ```  + *scaled_float*: A floating point number backed by a long integer, scaled by a fixed double factor.  ``` {   \"ScalingFactor\": float                  # Scaling factor   \"Boost\": Optional[float]                # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[int]              # Items where this field is missing or null will be indexed with this value instead   \"Coerce\": Optional[bool]                # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true   \"IgnoreMalformed\": Optional[bool]       # Whether malformed and uncastable values should be ignored or throw an exception, which is the default } ```  **Objects and relational types**  Representations of data structures, i.e. lists and maps/dictionaries.  + *object*: A JSON object.  ``` {   \"Dynamic\": Optional[bool]   # Whether the mapping for this object can be further modified in the future, defaults to true (and you should leave it like that) } ```  + *flattened*: An entire JSON object as a single field value.  ``` {   \"Dynamic\": Optional[bool]   # Whether the mapping for this object can be further modified in the future, defaults to true (and you should leave it like that)   \"Boost\": Optional[float]    # Multiplicative score boost when executing queries on this field and its subfields, defaults to 1.0 } ```  + *nested*: A JSON object that preserves the relationship between its subfields.  ``` {   \"Dynamic\": Optional[bool]   # Whether the mapping for this object can be further modified in the future, defaults to true (and you should leave it like that) } ```  **Range types**  Fields defined as ranges of values.  + *integer_range*: A range of integers (32bits).  ``` {   \"Boost\": Optional[float]                # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"Coerce\": Optional[bool]                # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true } ```  + *long_range*: A range of long (64bits) integers.  ``` {   \"Boost\": Optional[float]                # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"Coerce\": Optional[bool]                # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true } ```  + *float_range*: A range of standard precision (32bits) floating point numbers.  ``` {   \"Boost\": Optional[float]                # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"Coerce\": Optional[bool]                # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true } ```  + *double_range*: A range of double precision (64bits) floating point numbers.  ``` {   \"Boost\": Optional[float]                # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"Coerce\": Optional[bool]                # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true } ```  + *date_range*: A range of dates, using ISO 8601 standard ([YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[ms]+[HH:MM]).  ``` {   \"Boost\": Optional[float]                # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"Coerce\": Optional[bool]                # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true } ```  + *ip_range*: A range of IP addresses.  ``` {   \"Boost\": Optional[float]                # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"Coerce\": Optional[bool]                # Whether ambiguous values should be cast to the required field type, e.g.: str(\"20\") to int(20), defaults to true } ```  **Spatial data types**  + *geo_point*: Latitude and longitude points, each field must be a map/dictionary containing \"lat\" (latitude) and \"lon\" (longitude) properties, expressed with signed floating point values.  ``` {   \"IgnoreMalformed\": Optional[bool]          # Whether malformed and values should be ignored or throw an exception, which is the default   \"NullValue\": Optional[geo_point]           # Items where this field is missing or null will be indexed with this value instead } ```  + *point*: Arbitrary cartesian points, each field must be a map/dictionary containing \"x\" and \"y\" properties, expressed with signed floating point values.  ``` {   \"IgnoreMalformed\": Optional[bool]          # Whether malformed and values should be ignored or throw an exception, which is the default   \"NullValue\": Optional[point]               # Items where this field is missing or null will be indexed with this value instead } ```  **Other types**  + *binary*: Binary value encoded as a Base64 string.  + *boolean*: true and false values.  ``` {   \"Boost\": Optional[float]          # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[bool]      # Items where this field is missing or null will be indexed with this value instead } ```  + *date*: Date type, using ISO 8601 standard ([YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[ms]+[HH:MM]).  ``` {   \"Boost\": Optional[float]              # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"Format\": Optional[str]               # Date format, if different from ISO 8601 (which is the default), we STRONGLY recommend to leave this untouched   \"Locale\": Optional[str]               # Locale to use for dates names or abbreviations, defaults to index locale if present or host locale otherwise   \"IgnoreMalformed\": Optional[bool]     # If true, malformed dates are ignored. If false they throw an exception. Defaults to false.   \"NullValue\": Optional[date]           # Items where this field is missing or null will be indexed with this value instead } ```  + *alias*: Defines an alias for an existing field.  ``` {   \"Path\": str          # Dot-notation position of the field the alias refers to } ```  + *ip*: IPv4 and IPv6 addresses.  ``` {   \"Boost\": Optional[float]          # Multiplicative score boost when executing queries on this field, defaults to 1.0   \"NullValue\": Optional[ip]         # Items where this field is missing or null will be indexed with this value instead } ```  + *histogram*: Pre-aggregated numerical values.  + *dense_vector*: Records dense vectors of float values.  ``` {   \"Dims\": int          # The dimensionality of the vector, up to a maximum of 512 } ```  + *rank_feature*: Records a numeric feature to boost hits at query time.  ``` {   \"PositiveScoreImpact\": Optional[bool]          # Determines whether the rank_feature value affects score positively or negatively, defaults to true (positive) } ```  + *rank_features*: Records multiple named numeric features to boost hits at query time.  ``` {   \"PositiveScoreImpact\": Optional[bool]          # Determines whether the rank_feature value affects score positively or negatively, defaults to true (positive) } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$custom_fields = {"Fields":[{"Field":"Data.PersonLocation.PermanentLocation.home_network","Type":"ip","Params":{"NullValue":"127.0.0.1"}},{"Field":"Data.metrics.evaluation","Type":"rank_features"},{"Field":"Data.metrics.score","Type":"scaled_float","Params":{"ScalingFactor":3.728}}]}; // \OpenAPI\Client\Model\CustomFields

try {
    $result = $apiInstance->customizeResumesPOST($indexname, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomizationsApi->customizeResumesPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |
| **custom_fields** | [**\OpenAPI\Client\Model\CustomFields**](../Model/CustomFields.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomizedFields**](../Model/CustomizedFields.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResumeCustomizationsGET()`

```php
getResumeCustomizationsGET($indexname): \OpenAPI\Client\Model\MappingResponse
```

Get Resume Customizations

A function to retrieve previously customized mappings from indices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string

try {
    $result = $apiInstance->getResumeCustomizationsGET($indexname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomizationsApi->getResumeCustomizationsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indexname** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MappingResponse**](../Model/MappingResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
