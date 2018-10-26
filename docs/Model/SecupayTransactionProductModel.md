# SecupayTransactionProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Product name | [optional] 
**id** | **string** | ID of instance | [optional] 
**trans_id** | **int** | Transaction identifier | [optional] 
**status** | **string** | Transaction status | [optional] 
**amount** | **int** | Total amount of payment in cents (or the smallest cash unit of the relevant currency) | [optional] 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | [optional] 
**purpose** | **string** | The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer. | [optional] 
**order_id** | **string** | Specifying an order number. Depending on the contract setting, this must be unique for each payment. | [optional] 
**basket** | [**\Secuconnect\Client\Model\SecupayBasketItem[]**](SecupayBasketItem.md) | A list of items that are being purchased. | [optional] 
**transaction_status** | **string** | Transaction status (number) | [optional] 
**accrual** | **bool** | Indicates whether the payment is locked for pay-out (TRUE) or not (FALSE). Standard value here is FALSE. | [optional] 
**payment_action** | **string** | Specifies whether a pre-authorization (\&quot;authorization\&quot;) or instant payment ( \&quot;sale\&quot;) is to be performed. Standard value here is \&quot;sale\&quot;. The collection of the pre-authorized payment is made with the \&quot;capture\&quot; command. | [optional] 
**transfer_purpose** | **string** | The purpose the payer needs to use for his transfer | [optional] 
**transfer_account** | [**\Secuconnect\Client\Model\PaymentInformation**](PaymentInformation.md) | The bank account the payer needs to use for his transfer | [optional] 
**customer** | [**\Secuconnect\Client\Model\PaymentCustomersProductModel**](PaymentCustomersProductModel.md) | The customer object | [optional] 
**used_payment_instrument** | [**\Secuconnect\Client\Model\SecupayTransactionProductModelUsedPaymentInstrument**](SecupayTransactionProductModelUsedPaymentInstrument.md) |  | [optional] 
**redirect_url** | [**\Secuconnect\Client\Model\SecupayTransactionProductModelRedirectUrl**](SecupayTransactionProductModelRedirectUrl.md) |  | [optional] 
**iframe_url** | **string** | The url of the payment checkout iframe | [optional] 
**container** | [**\Secuconnect\Client\Model\PaymentContainersProductModel**](PaymentContainersProductModel.md) | The container object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


