# PaymentContractsDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant** | **string** | Contracts Merchant | [optional] 
**internal_reference** | **string** | The internal user id | [optional] 
**contract_id** | **string** | Contracts id | [optional] 
**demo** | **string** | Is this a demo contract | [optional] 
**debit_product_id** | **string** | Contract debit product id | [optional] 
**prepay_product_id** | **string** | Contracts prepay product id | [optional] 
**invoice_product_id** | **string** | Contracts invoice product id | [optional] 
**creditcard_product_id** | **string** | Contracts credit card product id | [optional] 
**url_push** | **string** | An URL where your service listen for push notifications of the secuconnect service | [optional] 
**allow_transactions** | **bool** | Should allow transactions? | [optional] 
**allow_cloning** | **bool** | Should allow cloning? | [optional] 
**unique_order_id** | **bool** | Bool, default FALSE. If TRUE, an error message will be thrown if you try to create a new payment transaction with the same order_id of an previous transaction. | [optional] 
**scoring** | **bool** | Bool, default TRUE. If FALSE, the customer scoring is disabled for your payment contract | [optional] 
**sepa_mandate_inform** | **string** | Enum [on_transaction, on_container, never], default “never” Option to send automatically an information to the customer when a new SEPA-mandate was created. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


