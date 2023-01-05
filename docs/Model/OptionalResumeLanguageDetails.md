# # OptionalResumeLanguageDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text_positions** | [**\OpenAPI\Client\Model\TextPosition[]**](TextPosition.md) |  | [optional]
**raw_value** | **string** |  | [optional]
**raw_values** | [**\OpenAPI\Client\Model\TextDetails[]**](TextDetails.md) |  | [optional]
**is_validated** | **bool** |  | [optional] [default to false]
**entity_type** | **string** |  | [optional]
**proficiency_level** | **string** | A descriptive language proficiency level. E.g.: &#39;Good&#39;, &#39;Excellent&#39;. | [optional]
**category** | **string** |  | [optional]
**code** | **array<string,string>** | &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;Details.RawValues&lt;/code&gt; may be mapped to several knowledge bases&#39; entities.The &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;Value&lt;/code&gt; field is the label of the main knowledge base entity to which they are mapped.The main knowledge base can be the default one - named &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;INDA&lt;/code&gt; - or the tenant&#39;s own taxonomy - named after the tenant itself.This object contains details about the destination entities: each field name is a knowledge base name and its value is the ID which identifies the destination entity in that knowledge base. | [optional]
**language_code** | **string** | ISO 639 language code. | [optional]
**proficiency_level_code** | [**\OpenAPI\Client\Model\ProficiencyLevelCode**](ProficiencyLevelCode.md) |  | [optional]
**is_primary** | **bool** | Whether the language is primary or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
