# SecupayTransactionProductDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Total amount of payment in cents (or the smallest cash unit of the relevant currency) | [optional] 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | [optional] 
**purpose** | **string** | The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer. | [optional] 
**order_id** | **string** | Specifying an order number. Depending on the contract setting, this must be unique for each payment. | [optional] 
**basket** | [**\Secuconnect\Client\Model\SecupayBasketItem[]**](SecupayBasketItem.md) | A list of items that are being purchased. | [optional] 
**accrual** | **bool** | Indicates whether the payment is locked for pay-out (TRUE) or not (FALSE). Standard value here is FALSE. | [optional] 
**payment_action** | **string** | Specifies whether a pre-authorization (\&quot;authorization\&quot;) or instant payment (\&quot;sale\&quot;) is to be performed. Standard value here is \&quot;sale\&quot;. The collection of the pre-authorized payment is made with the \&quot;capture\&quot; command. | [optional] 
**customer** | [**\Secuconnect\Client\Model\PaymentCustomersProductModel**](PaymentCustomersProductModel.md) | The customer object | [optional] 
**redirect_url** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTORedirectUrl**](SecupayTransactionProductDTORedirectUrl.md) |  | [optional] 
**contract** | **string** | Contract id | [optional] 
**container** | **string** | Container id | [optional] 
**opt_data** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTOOptData**](SecupayTransactionProductDTOOptData.md) |  | [optional] 
**subscription** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTOSubscription**](SecupayTransactionProductDTOSubscription.md) |  | [optional] 
**demo** | **bool** | Demo | [optional] 
**experience** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTOExperience**](SecupayTransactionProductDTOExperience.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


