# OpenAPI\Client\CompanyManagementApi

All URIs are relative to https://api.inda.ai.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCompanyPOST()**](CompanyManagementApi.md#addCompanyPOST) | **POST** /hr/v2/company/ | Add Company
[**companyAutocompleteGET()**](CompanyManagementApi.md#companyAutocompleteGET) | **GET** /hr/v2/company/name/search/autocomplete/ | Company Autocomplete
[**getCompanyGET()**](CompanyManagementApi.md#getCompanyGET) | **GET** /hr/v2/company/{company_id}/ | Get Company
[**patchCompanyPATCH()**](CompanyManagementApi.md#patchCompanyPATCH) | **PATCH** /hr/v2/company/{company_id}/ | Patch Company


## `addCompanyPOST()`

```php
addCompanyPOST($company_request): \OpenAPI\Client\Model\CompanyIDResponse
```

Add Company

This method adds a company to a shared database and assigns it a *CompanyID* (namely, a Unique Universal ID or UUID4). This method requires an application/json as content type body.  On the right, we provide an example of input structure; further details are available in dedicated sections.  After successfully adding the company to INDA, this method returns the assigned *CompanyID*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompanyManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_request = {"Data":{"Name":{"Value":"TestCompany"},"Description":{"Value":"TestCompany is a multinational technology company..."},"Headquarters":[{"Name":{"Value":"Torino HQ"},"Location":{"City":{"Value":"Torino"},"Country":{"Value":"Italy"}}}],"Industries":[{"Value":"96"},{"Value":"4"}],"Founded":{"Value":"2021"},"Link":{"URL":{"Value":"https://www.testcompany.com"}},"Services":[{"Name":{"Value":"TestServiceName"},"Description":{"Value":"TestServiceDescription..."},"Sector":{"Value":"IT"}}],"RelatedCompanies":[{"CompanyID":"9c977f2f-932b-4245-b121-aec8084c8dc2","Relation":{"Value":"OWNER"}}]}}; // \OpenAPI\Client\Model\CompanyRequest

try {
    $result = $apiInstance->addCompanyPOST($company_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyManagementApi->addCompanyPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_request** | [**\OpenAPI\Client\Model\CompanyRequest**](../Model/CompanyRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\CompanyIDResponse**](../Model/CompanyIDResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyAutocompleteGET()`

```php
companyAutocompleteGET($term, $size, $token_order, $fuzzy): \OpenAPI\Client\Model\CompanyAutocompleteResponse
```

Company Autocomplete

This method performs company name autocompletion, based on INDA database of companies.  It helps users to explore the aforementioned database and search for companies data.  The *term* to be completed (see *query parameters* below) must contain at least *2* characters, and it is meant to match the *Name* of a company.  The output contains a list of names related to stored companies, along with their IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompanyManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$term = 'term_example'; // string | Token to be completed
$size = 10; // int | Response size.
$token_order = 'any'; // string | Whether to autocomplete the term in a sequential way or not. The default *any* value guarantees good performances as well as flexible results.
$fuzzy = false; // bool | Fuzzy search. If *True* performs a fuzzy search with max edits set to 2.

try {
    $result = $apiInstance->companyAutocompleteGET($term, $size, $token_order, $fuzzy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyManagementApi->companyAutocompleteGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term** | **string**| Token to be completed |
 **size** | **int**| Response size. | [optional] [default to 10]
 **token_order** | **string**| Whether to autocomplete the term in a sequential way or not. The default *any* value guarantees good performances as well as flexible results. | [optional] [default to &#39;any&#39;]
 **fuzzy** | **bool**| Fuzzy search. If *True* performs a fuzzy search with max edits set to 2. | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\CompanyAutocompleteResponse**](../Model/CompanyAutocompleteResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyGET()`

```php
getCompanyGET($company_id): \OpenAPI\Client\Model\GetCompanyResponse
```

Get Company

This method returns the information related to the company stored with id *company_id*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompanyManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->getCompanyGET($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyManagementApi->getCompanyGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetCompanyResponse**](../Model/GetCompanyResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCompanyPATCH()`

```php
patchCompanyPATCH($company_id, $patch_company_request): \OpenAPI\Client\Model\PatchCompanyResponse
```

Patch Company

This method updates the information related to the company stored with id *company_id*.  This method accepts an application/json body with the same structure as [Add Company](https://api.inda.ai/hr/docs/v2/#operation/add_company__POST), however in this case all fields are optional. Fields that contain differences between the corresponding original ones are substituted, while new fields are added. Bear in mind that lists are considered as singular value, therefore to modify an entry in a list it is necessary to insert the full list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompanyManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$patch_company_request = {"Data":{"Headquarters":[{"Name":{"Value":"Torino HQ"},"Location":{"City":{"Value":"Torino"},"Country":{"Value":"Italy"}}},{"Name":{"Value":"New York HQ"},"Location":{"City":{"Value":"New York"},"Country":{"Value":"USA"}}}],"Founded":{"Value":"2020"}}}; // \OpenAPI\Client\Model\PatchCompanyRequest

try {
    $result = $apiInstance->patchCompanyPATCH($company_id, $patch_company_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyManagementApi->patchCompanyPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**|  |
 **patch_company_request** | [**\OpenAPI\Client\Model\PatchCompanyRequest**](../Model/PatchCompanyRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PatchCompanyResponse**](../Model/PatchCompanyResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
