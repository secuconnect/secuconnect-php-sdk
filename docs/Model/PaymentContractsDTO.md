# PaymentContractsDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant** | **string** | Contracts Merchant | [optional] 
**internal_reference** | **string** | The internal user id | [optional] 
**contract_id** | **string** | Contracts id | [optional] 
**demo** | **string** | Is this a demo contract | [optional] 
**url_push** | **string** | An URL where your service listen for push notifications of the secuconnect service | [optional] 
**unique_order_id** | **bool** | Bool, default FALSE. If TRUE, an error message will be thrown if you try to create a new payment transaction with the same order_id of an previous transaction. | [optional] 
**scoring** | **bool** | Bool, default TRUE. If FALSE, the customer scoring is disabled for your payment contract | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


