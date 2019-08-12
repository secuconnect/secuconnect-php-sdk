# LoyaltyMerchantcardsProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object of loyalty merchant card | 
**id** | **string** | Id of loyalty merchant card | 
**card** | [**\Secuconnect\Client\Model\LoyaltyCardsProductModel**](LoyaltyCardsProductModel.md) | Id of loyalty store group | 
**merchant** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Current merchant id | 
**created_for_merchant** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Merchant id, that loyalty merchant card object was created for | 
**created_for_store** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Store id, that loyalty merchant card object was created for | 
**customer** | [**\Secuconnect\Client\Model\LoyaltyCustomersProductModel**](LoyaltyCustomersProductModel.md) | Loyalty merchant card customer | 
**cardgroup** | [**\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel**](LoyaltyCardgroupsProductModel.md) | Loyalty merchant card card group | 
**payment_container** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOPaymentContainer**](LoyaltyMerchantcardsDTOPaymentContainer.md) | Loyalty merchant card payment container | 
**balance** | **int** | Loyalty merchant card balance | 
**points** | **int** | Loyalty merchant card points | 
**bonus_balance** | **int** | Loyalty merchant card bonus balance | 
**cash_balance** | **int** | Loyalty merchant card cash balance | 
**stock_status** | **string** | Loyalty merchant card stock status | 
**lock_status** | **string** | Loyalty merchant card lock status | 
**last_usage** | **string** | Loyalty merchant card last usage | 
**last_charge** | **string** | Loyalty merchant card last charge | 
**is_base_card** | **bool** | Information whether loyalty merchant card is base card | 
**passcode** | **int** | Loyalty merchant card passcode | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


