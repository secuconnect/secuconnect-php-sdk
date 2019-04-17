# PaymentTransactionsProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object of payment transaction | [optional] 
**id** | **string** | Id of payment transaction | [optional] 
**merchant** | [**\Secuconnect\Client\Model\GeneralMerchantsProductModel**](GeneralMerchantsProductModel.md) | Merchant information | [optional] 
**store** | [**\Secuconnect\Client\Model\GeneralStoresProductModel**](GeneralStoresProductModel.md) | Merchants store information | [optional] 
**trans_id** | **int** | Transaction identifier | [optional] 
**product_id** | **int** | Product identifier | [optional] 
**product** | **string** | Product type | [optional] 
**product_raw** | **string** | the name of the payment product | [optional] 
**zahlungsmittel_id** | **int** | The internal id of the stored payment instrument. | [optional] 
**contract_id** | **int** | Contract identifier | [optional] 
**amount** | **int** | Total amount of payment in cents (or the smallest cash unit of the relevant currency) | [optional] 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | [optional] 
**created** | **string** | Created at date | [optional] 
**updated** | **string** | Updated at date | [optional] 
**status** | **int** | Transaction status ID | [optional] 
**status_text** | **string** | Transaction status description | [optional] 
**incoming_payment_date** | **string** | Date when the payment was received | [optional] 
**details** | [**\Secuconnect\Client\Model\PaymentTransactionsProductModelDetails**](PaymentTransactionsProductModelDetails.md) |  | [optional] 
**customer** | [**\Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer**](PaymentTransactionsProductModelCustomer.md) |  | [optional] 
**tid** | **string** | Terminal-ID | [optional] 
**payment_data** | **string** | Data of the used payment instrument | [optional] 
**store_name** | **string** | Store name | [optional] 
**payout_date** | **string** | Date when the payout was created | [optional] 
**invoice_number** | **string** | Invoice number (from merchant) | [optional] 
**transaction_hash** | **string** | Payment-ID | [optional] 
**reference_id** | **string** | Reference ID | [optional] 
**accrual** | **bool** | Accrual Flag | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


