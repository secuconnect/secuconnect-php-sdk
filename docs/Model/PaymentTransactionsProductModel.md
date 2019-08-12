# PaymentTransactionsProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object of payment transaction | 
**id** | **string** | Id of payment transaction | 
**merchant** | [**\Secuconnect\Client\Model\GeneralMerchantsProductModel**](GeneralMerchantsProductModel.md) | Merchant information | 
**store** | [**\Secuconnect\Client\Model\GeneralStoresProductModel**](GeneralStoresProductModel.md) | Merchants store information | 
**trans_id** | **int** | Transaction identifier | 
**product_id** | **int** | Product identifier | 
**product** | **string** | Product type | 
**product_raw** | **string** | the name of the payment product | 
**zahlungsmittel_id** | **int** | The internal id of the stored payment instrument. | 
**contract_id** | **int** | Contract identifier | 
**amount** | **int** | Total amount of payment in cents (or the smallest cash unit of the relevant currency) | 
**currency** | **string** | ISO 4217 code of currency, eg EUR for Euro. | 
**created** | **string** | Created at date | 
**updated** | **string** | Updated at date | 
**status** | **int** | Transaction status ID | 
**status_text** | **string** | Transaction status description | 
**incoming_payment_date** | **string** | Date when the payment was received | 
**details** | [**\Secuconnect\Client\Model\PaymentTransactionsProductModelDetails**](PaymentTransactionsProductModelDetails.md) |  | 
**customer** | [**\Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer**](PaymentTransactionsProductModelCustomer.md) |  | 
**tid** | **string** | Terminal-ID | 
**payment_data** | **string** | Data of the used payment instrument | 
**store_name** | **string** | Store name | 
**payout_date** | **string** | Date when the payout was created | 
**invoice_number** | **string** | Invoice number (from merchant) | 
**transaction_hash** | **string** | Payment-ID | 
**reference_id** | **string** | Reference ID | 
**accrual** | **bool** | Accrual Flag | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


