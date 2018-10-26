# PaymentContractsDTOClone

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project** | **string** | Name of the project (must be unique) | [optional] 
**payment_data** | [**\Secuconnect\Client\Model\PaymentInformation**](PaymentInformation.md) | Merchants bank account for the payout | [optional] 
**payin_account** | **bool** | Pay in account | [optional] [default to false]
**allow_transactions** | **bool** | DEPRECATED: Should allow transactions for this sub-contract? | [optional] 
**url_push** | **string** | The default URL where your service listen for push notifications of the secuconnect service | [optional] 
**debit_product_id** | **string** | DEPRECATED: Contract debit product id | [optional] 
**prepay_product_id** | **string** | DEPRECATED: Contracts prepay product id | [optional] 
**invoice_product_id** | **string** | DEPRECATED: Contracts invoice product id | [optional] 
**creditcard_product_id** | **string** | DEPRECATED: Contracts credit card product id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


