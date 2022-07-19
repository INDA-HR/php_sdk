# # OptionalEscoJobtitleMatchCategorized

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | This field shows the ESCO code. | [optional]
**preferred_label** | **string** | This field shows the preferred label according with the ESCO classification. | [optional]
**description** | **string** | This field shows the description according with the ESCO classification. | [optional]
**language** | **string** | This field shows the language. | [optional]
**score** | **float** | This field shows the similarity score calculate by the model. | [optional]
**occupation_hierarchy** | [**\OpenAPI\Client\Model\OccupationHierarchy**](OccupationHierarchy.md) |  | [optional]
**industries** | [**\OpenAPI\Client\Model\Industries[]**](Industries.md) | This field shows the top three industries related with the occupation. | [optional]
**job_functions** | [**\OpenAPI\Client\Model\Jobfunctions[]**](Jobfunctions.md) | This field shows the top three job functions related with the occupation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
