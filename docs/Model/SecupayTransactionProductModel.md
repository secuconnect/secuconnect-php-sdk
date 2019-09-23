# SecupayTransactionProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Product name | 
**id** | **string** | ID of instance | 
**trans_id** | **int** | Transaction identifier | 
**status** | **string** | Transaction status | 
**amount** | **int** | Total amount of payment in cents (or the smallest cash unit of the relevant currency) | 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | 
**purpose** | **string** | The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer. | 
**order_id** | **string** | Specifying an order number. Depending on the contract setting, this must be unique for each payment. | 
**basket** | [**\Secuconnect\Client\Model\SecupayBasketItem[]**](SecupayBasketItem.md) | A list of items that are being purchased. | 
**transaction_status** | **string** | Transaction status (number) | 
**accrual** | **bool** | Indicates whether the payment is locked for pay-out (TRUE) or not (FALSE). Standard value here is FALSE. | 
**payment_action** | **string** | Specifies whether a pre-authorization (\&quot;authorization\&quot;) or instant payment ( \&quot;sale\&quot;) is to be performed. Standard value here is \&quot;sale\&quot;. The collection of the pre-authorized payment is made with the \&quot;capture\&quot; command. | 
**transfer_purpose** | **string** | The purpose the payer needs to use for his transfer | 
**transfer_account** | [**\Secuconnect\Client\Model\PaymentInformation**](PaymentInformation.md) | The bank account the payer needs to use for his transfer | 
**customer** | [**\Secuconnect\Client\Model\PaymentCustomersProductModel**](PaymentCustomersProductModel.md) | The customer object | 
**used_payment_instrument** | [**\Secuconnect\Client\Model\SecupayTransactionProductModelUsedPaymentInstrument**](SecupayTransactionProductModelUsedPaymentInstrument.md) |  | 
**redirect_url** | [**\Secuconnect\Client\Model\SecupayRedirectUrl**](SecupayRedirectUrl.md) | A list of redirect urls used for the payment checkout page | 
**iframe_url** | **string** | The url of the payment checkout iframe | 
**subscription** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTOSubscription**](SecupayTransactionProductDTOSubscription.md) |  | 
**container** | [**\Secuconnect\Client\Model\PaymentContainersProductModel**](PaymentContainersProductModel.md) | The container object | 
**sub_transactions** | [**\Secuconnect\Client\Model\SecupaySubTransactionProductModel[]**](SecupaySubTransactionProductModel.md) | A list of sub-transactions (for mixed basket) | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


