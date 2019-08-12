# SecupayBasketItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_type** | **string** | Category of item | [default to 'article']
**article_number** | **string** | Article number of item | 
**quantity** | **int** | Quantity of articles in item | 
**name** | **string** | Descriptive name of item | 
**model** | **string** | Model of item | 
**ean** | **string** | EAN, European Article Number | 
**tax** | **string** | Applicable tax in percentages | 
**total** | **int** | Total price | 
**price** | **int** | Price of single article, if item is of article category | 
**apikey** | **string** | Special param for stakeholder payments | 
**transaction_hash** | **string** | Special param for payout payments | 
**contract_id** | **string** | Contract id - Special param for stakeholder payments | 
**reference_id** | **string** | Reference id - must be unique for the entire basket | 
**sub_basket** | [**\Secuconnect\Client\Model\SecupayBasketItem[]**](SecupayBasketItem.md) | Mixed-Basket: All basket items for one merchant. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


