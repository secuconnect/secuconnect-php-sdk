# PaymentContractsProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object of payment container | [optional] 
**id** | **string** | Id of payment container | [optional] 
**parent** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Payment container contract | [optional] 
**demo** | **bool** | Is this a demo contract | [optional] 
**allow_cloning** | **bool** | Allow to create sub-contracts | [optional] 
**sepa_mandate_inform** | **string** | Inform the customer about the created sepa mandate | [optional] [default to 'never']
**created** | [**\DateTime**](\DateTime.md) | Created at date | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | Updated at date | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


