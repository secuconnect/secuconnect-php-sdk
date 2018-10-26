# LoyaltyMerchantcardsProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object of loyalty merchant card | [optional] 
**id** | **string** | Id of loyalty merchant card | [optional] 
**card** | [**\Secuconnect\Client\Model\LoyaltyCardsProductModel**](LoyaltyCardsProductModel.md) | Id of loyalty store group | [optional] 
**merchant** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Current merchant id | [optional] 
**created_for_merchant** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Merchant id, that loyalty merchant card object was created for | [optional] 
**created_for_store** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Store id, that loyalty merchant card object was created for | [optional] 
**customer** | [**\Secuconnect\Client\Model\LoyaltyCustomersProductModel**](LoyaltyCustomersProductModel.md) | Loyalty merchant card customer | [optional] 
**cardgroup** | [**\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel**](LoyaltyCardgroupsProductModel.md) | Loyalty merchant card card group | [optional] 
**payment_container** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOPaymentContainer**](LoyaltyMerchantcardsDTOPaymentContainer.md) | Loyalty merchant card payment container | [optional] 
**balance** | **int** | Loyalty merchant card balance | [optional] 
**points** | **int** | Loyalty merchant card points | [optional] 
**bonus_balance** | **int** | Loyalty merchant card bonus balance | [optional] 
**cash_balance** | **int** | Loyalty merchant card cash balance | [optional] 
**stock_status** | **string** | Loyalty merchant card stock status | [optional] 
**lock_status** | **string** | Loyalty merchant card lock status | [optional] 
**last_usage** | [**\DateTime**](\DateTime.md) | Loyalty merchant card last usage | [optional] 
**last_charge** | [**\DateTime**](\DateTime.md) | Loyalty merchant card last charge | [optional] 
**is_base_card** | **bool** | Information whether loyalty merchant card is base card | [optional] 
**passcode** | **int** | Loyalty merchant card passcode | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


