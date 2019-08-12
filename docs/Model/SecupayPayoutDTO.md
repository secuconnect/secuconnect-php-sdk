# SecupayPayoutDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**demo** | **bool** | demo env value | 
**redirect_url** | [**\Secuconnect\Client\Model\SecupayRedirectUrl**](SecupayRedirectUrl.md) | A list of redirect urls used for the payment checkout page | 
**contract** | **string** | Contract ID | 
**customer** | **string** | Payment customer ID | 
**opt_data** | [**\Secuconnect\Client\Model\SecupayPayoutDTOOptData**](SecupayPayoutDTOOptData.md) |  | 
**amount** | **int** | Total amount of transaction lit&#39;s items | 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | 
**purpose** | **string** | The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer. | 
**order_id** | **string** | Specifying an order number. Depending on the contract setting, this must be unique for each payment. | 
**transaction_list** | [**\Secuconnect\Client\Model\SecupayTransactionListItem[]**](SecupayTransactionListItem.md) | A list of transaction items | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


