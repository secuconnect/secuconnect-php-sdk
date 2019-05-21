# SecupayPayoutDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**demo** | **bool** | demo env value | [optional] 
**redirect_url** | [**\Secuconnect\Client\Model\SecupayRedirectUrl**](SecupayRedirectUrl.md) | A list of redirect urls used for the payment checkout page | [optional] 
**contract** | **string** | Contract ID | [optional] 
**customer** | **string** | Payment customer ID | [optional] 
**opt_data** | [**\Secuconnect\Client\Model\SecupayPayoutDTOOptData**](SecupayPayoutDTOOptData.md) |  | [optional] 
**amount** | **int** | Total amount of transaction lit&#39;s items | [optional] 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | [optional] 
**purpose** | **string** | The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer. | [optional] 
**order_id** | **string** | Specifying an order number. Depending on the contract setting, this must be unique for each payment. | [optional] 
**transaction_list** | [**\Secuconnect\Client\Model\SecupayTransactionListItem[]**](SecupayTransactionListItem.md) | A list of transaction items | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


