# PaymentTransactionsProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object of payment transaction | [optional] 
**id** | **string** | Id of payment transaction | [optional] 
**merchant** | [**\Secuconnect\Client\Model\PaymentTransactionsProductModelMerchant**](PaymentTransactionsProductModelMerchant.md) |  | [optional] 
**trans_id** | **int** | Transaction identifier | [optional] 
**product_id** | **int** | Product identifier | [optional] 
**product** | **string** | Product type | [optional] 
**product_raw** | **string** | the name of the payment product | [optional] 
**zahlungsmittel_id** | **int** | The internal id of the stored payment instrument. | [optional] 
**contract_id** | **int** | Contract identifier | [optional] 
**amount** | **int** | Total amount of payment in cents (or the smallest cash unit of the relevant currency) | [optional] 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Created at date | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | Updated at date | [optional] 
**status** | **int** | WTF?? | [optional] 
**status_text** | **string** | Transaction status | [optional] 
**details** | [**\Secuconnect\Client\Model\PaymentTransactionsProductModelDetails**](PaymentTransactionsProductModelDetails.md) |  | [optional] 
**customer** | [**\Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer**](PaymentTransactionsProductModelCustomer.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


