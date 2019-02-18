# SecupayPayoutProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Product name | [optional] 
**id** | **string** | ID of instance | [optional] 
**trans_id** | **int** | ID of transaction | [optional] 
**status** | **string** | Transaction status | [optional] 
**amount** | **int** | Total amount of transaction lit&#39;s items | [optional] 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | [optional] 
**purpose** | **string** | The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer. | [optional] 
**order_id** | **string** | Specifying an order number. Depending on the contract setting, this must be unique for each payment. | [optional] 
**transaction_status** | **string** | Transaction status (number) | [optional] 
**transaction_list** | [**\Secuconnect\Client\Model\SecupayTransactionListItem[]**](SecupayTransactionListItem.md) | A list of transaction items | [optional] 
**transfer_purpose** | **string** | The purpose the payer needs to use for his transfer | [optional] 
**transfer_account** | [**\Secuconnect\Client\Model\PaymentInformation**](PaymentInformation.md) | The bank account the payer needs to use for his transfer | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


