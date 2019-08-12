# SecupayTransactionProductDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Total amount of payment in cents (or the smallest cash unit of the relevant currency) | 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | 
**purpose** | **string** | The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer. | 
**order_id** | **string** | Specifying an order number. Depending on the contract setting, this must be unique for each payment. | 
**basket** | [**\Secuconnect\Client\Model\SecupayBasketItem[]**](SecupayBasketItem.md) | A list of items that are being purchased. | 
**accrual** | **bool** | Indicates whether the payment is locked for pay-out (TRUE) or not (FALSE). Standard value here is FALSE. | 
**payment_action** | **string** | Specifies whether a pre-authorization (\&quot;authorization\&quot;) or instant payment (\&quot;sale\&quot;) is to be performed. Standard value here is \&quot;sale\&quot;. The collection of the pre-authorized payment is made with the \&quot;capture\&quot; command. | 
**customer** | [**\Secuconnect\Client\Model\PaymentCustomersProductModel**](PaymentCustomersProductModel.md) | The customer object | 
**redirect_url** | [**\Secuconnect\Client\Model\SecupayRedirectUrl**](SecupayRedirectUrl.md) | A list of redirect urls used for the payment checkout page | 
**contract** | **string** | Contract id | 
**container** | **string** | Container id | 
**opt_data** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTOOptData**](SecupayTransactionProductDTOOptData.md) |  | 
**subscription** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTOSubscription**](SecupayTransactionProductDTOSubscription.md) |  | 
**demo** | **bool** | Demo | 
**experience** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTOExperience**](SecupayTransactionProductDTOExperience.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


