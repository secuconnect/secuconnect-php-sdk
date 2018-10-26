# SmartTransactionsProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object of smart transaction | [optional] 
**id** | **string** | Id of smart transaction | [optional] 
**status** | **string** | Status of smart transaction | [optional] 
**merchant** | [**\Secuconnect\Client\Model\SmartTransactionsMerchant**](SmartTransactionsMerchant.md) | Merchant | [optional] 
**contract** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Contract | [optional] 
**marketplace_contract** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Marketplace contract | [optional] 
**customer** | [**\Secuconnect\Client\Model\LoyaltyCustomersProductModel**](LoyaltyCustomersProductModel.md) | Customer | [optional] 
**checkin** | [**\Secuconnect\Client\Model\SmartTransactionsCheckin**](SmartTransactionsCheckin.md) | Check in | [optional] 
**merchant_ref** | **string** | Merchant ref | [optional] 
**transaction_ref** | **string** | Transaction ref | [optional] 
**store** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Store | [optional] 
**device_source** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Device source | [optional] 
**device_destination** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Device destination | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Created at date | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | Updated at date | [optional] 
**receipt_number** | **int** | Receipt number | [optional] 
**receipt** | [**\Secuconnect\Client\Model\SmartTransactionsReceipt[]**](SmartTransactionsReceipt.md) | Receipt | [optional] 
**receipt_merchant** | **string** | Receipt merchant | [optional] 
**receipt_merchant_print** | **bool** | Receipt merchant print | [optional] 
**basket_info** | [**\Secuconnect\Client\Model\SmartTransactionsBasketInfo**](SmartTransactionsBasketInfo.md) | Basket info | [optional] 
**basket** | [**\Secuconnect\Client\Model\SmartTransactionsBasket**](SmartTransactionsBasket.md) | Basket | [optional] 
**idents** | [**\Secuconnect\Client\Model\SmartTransactionsIdent[]**](SmartTransactionsIdent.md) | Idents | [optional] 
**tax_rate** | **int** | Tax rate | [optional] 
**tax_amount** | **int** | Tax amount | [optional] 
**cashier** | **string** | Cashier | [optional] 
**market** | **string** | Market | [optional] 
**order_option** | **string** | Order option | [optional] 
**pickup_options** | [**\Secuconnect\Client\Model\SmartTransactionsPickupOptions**](SmartTransactionsPickupOptions.md) | Pickup options | [optional] 
**product** | **string** | Product | [optional] 
**trans_id** | **int** | Transaction id | [optional] 
**payment_method** | **string** | Payment method | [optional] 
**transactions** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Transactions | [optional] 
**last_visited_page** | **string** | Last visited page | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


