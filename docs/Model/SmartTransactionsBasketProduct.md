# SmartTransactionsBasketProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Product id | 
**parent** | **int** | Parent | 
**item_type** | **string** | Category of item | 
**desc** | **string** | Desc | 
**article_number** | **string** | Article number | 
**serial_number** | **string** | The serialnumber of the scanned posa card | 
**ean** | **string** | international article number | 
**quantity** | **int** | Quantity | 
**price_one** | **int** | Price one | 
**sum** | **int** | it is the value of the sum of the product with all items in sub_basket | 
**tax** | **int** | Tax | 
**reference_id** | **string** | The reference_id must be unique, it&#39;s a Reference for to the reference_id of SmartTransactionsSubBasketProduct [example: SmartTransactionsBasketProduct-&gt;reference_id is 1000 then all SmartTransactionsSubBasketProduct must have unique reference_id like 1000.1, 1000.2 etc.] | 
**contract_id** | **string** | contract id | 
**group** | [**\Secuconnect\Client\Model\SmartTransactionsBasketProductGroup[]**](SmartTransactionsBasketProductGroup.md) | Group | 
**sub_basket** | [**\Secuconnect\Client\Model\SmartTransactionsSubBasketProduct[]**](SmartTransactionsSubBasketProduct.md) | sub basket Product | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


