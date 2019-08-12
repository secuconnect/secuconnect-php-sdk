# SecupayPayoutProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Product name | 
**id** | **string** | ID of instance | 
**trans_id** | **int** | ID of transaction | 
**status** | **string** | Transaction status | 
**amount** | **int** | Total amount of transaction lit&#39;s items | 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | 
**purpose** | **string** | The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer. | 
**order_id** | **string** | Specifying an order number. Depending on the contract setting, this must be unique for each payment. | 
**transaction_status** | **string** | Transaction status (number) | 
**transaction_list** | [**\Secuconnect\Client\Model\SecupayTransactionListItem[]**](SecupayTransactionListItem.md) | A list of transaction items | 
**transfer_purpose** | **string** | The purpose the payer needs to use for his transfer | 
**transfer_account** | [**\Secuconnect\Client\Model\PaymentInformation**](PaymentInformation.md) | The bank account the payer needs to use for his transfer | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


