# # SemanticHistoryBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_calls** | **string[]** | Optional. List of events whose history data has to be returned. | [optional]
**datetime** | [**\OpenAPI\Client\Model\DateBody**](DateBody.md) |  | [optional]
**group_by** | **string[]** | Optional. List of terms according to which history data has to be aggregated. The allowed terms are *advanced* and *api_calls*; the aggregtion order is the same of the list items. A *Count* value is returned for each aggregation, as well as a *Prices* value if *Price* is set to *true*. | [optional]
**scroll_id** | **string** | Optional. A scroll ID is provided if more data is available; this ID has to be passed in the next request to get further data. | [optional]
**detail** | **bool** | Optional. If *false*, just the count of the events respecting the filters is returned. Please note that if *Detail* is *true* and the *GroupBy* filter is used, just the last 100 events are provided. | [optional] [default to true]
**advanced** | **bool** | Optional. According to its value, *true* or *false* respectively, just the *advanced* or *not advanced* events are taken into account for the response. If not set, events related to both types are returned. | [optional]
**price** | **bool** | Optional. If *true*, the total amount of credits spent per each service is returned. Please note that these values are returned in a *Prices* section if *GroupBy* is not set, otherwise they are injected in the *GroupBy* response. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
