# SecupayBasketItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_type** | **string** | Category of item | [optional] [default to 'article']
**article_number** | **string** | Article number of item | [optional] 
**quantity** | **int** | Quantity of articles in item | [optional] 
**name** | **string** | Descriptive name of item | [optional] 
**model** | **string** | Model of item | [optional] 
**ean** | **string** | EAN, European Article Number | [optional] 
**tax** | **string** | Applicable tax in percentages | [optional] 
**total** | **int** | Total price | [optional] 
**price** | **int** | Price of single article, if item is of article category | [optional] 
**apikey** | **string** | Special param for stakeholder payments | [optional] 
**transaction_hash** | **string** | Special param for payout payments | [optional] 
**contract_id** | **string** | Contract id - Special param for stakeholder payments | [optional] 
**reference_id** | **string** | Reference id - must be unique for the entire basket | [optional] 
**sub_basket** | [**\Secuconnect\Client\Model\SecupayBasketItem[]**](SecupayBasketItem.md) | Mixed-Basket: All basket items for one merchant. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


