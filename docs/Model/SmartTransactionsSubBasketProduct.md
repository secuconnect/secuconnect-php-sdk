# SmartTransactionsSubBasketProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Product id | [optional] 
**parent** | **int** | Parent | [optional] 
**item_type** | **string** | Category of item | [optional] 
**desc** | **string** | Description of the sub-basket product | [optional] 
**article_number** | **string** | Article number | [optional] 
**serial_number** | **string** | The serialnumber of the scanned posa card | [optional] 
**ean** | **string** | international article number | [optional] 
**quantity** | **int** | Quantity | [optional] 
**price_one** | **int** | Price one | [optional] 
**sum** | **int** |  | [optional] 
**tax** | **int** | Tax | [optional] 
**reference_id** | **string** | The reference_id must be unique, it&#39;s Referring to the reference_id of SmartTransactionsBasketProduct [example: SmartTransactionsBasketProduct-&gt;reference_id is 1000 then all SmartTransactionsSubBasketProduct must have unique reference_id like 1000.1, 1000.2 etc.] | [optional] 
**contract_id** | **string** | contract id | [optional] 
**group** | [**\Secuconnect\Client\Model\SmartTransactionsBasketProductGroup[]**](SmartTransactionsBasketProductGroup.md) | Group | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


