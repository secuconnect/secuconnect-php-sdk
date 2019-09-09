# SmartTransactionsProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Object of smart transaction | 
**id** | **string** | Id of smart transaction | 
**status** | **string** | Status of smart transaction | 
**merchant** | [**\Secuconnect\Client\Model\SmartTransactionsMerchant**](SmartTransactionsMerchant.md) | Merchant | 
**contract** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Contract | 
**provider_contract** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Provider contract | 
**customer** | [**\Secuconnect\Client\Model\PaymentCustomersProductModel**](PaymentCustomersProductModel.md) | Customer | 
**shipping_address** | [**\Secuconnect\Client\Model\PaymentCustomersProductModel**](PaymentCustomersProductModel.md) | Customers delivery address | 
**container** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Payment Container | 
**checkin** | [**\Secuconnect\Client\Model\SmartTransactionsCheckin**](SmartTransactionsCheckin.md) | Check in | 
**merchant_ref** | **string** | Merchant reference | 
**transaction_ref** | **string** | Transaction reference | 
**store** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Store | 
**device_source** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Device source | 
**device_destination** | [**\Secuconnect\Client\Model\ProductInstanceUID**](ProductInstanceUID.md) | Device destination | 
**created** | **string** | Created at date | 
**updated** | **string** | Updated at date | 
**receipt_number** | **int** | Receipt number | 
**receipt** | [**\Secuconnect\Client\Model\SmartTransactionsReceipt[]**](SmartTransactionsReceipt.md) | Receipt | 
**receipt_merchant** | [**\Secuconnect\Client\Model\SmartTransactionsReceipt[]**](SmartTransactionsReceipt.md) | Receipt merchant | 
**receipt_merchant_print** | **bool** | Receipt merchant print | 
**basket_info** | [**\Secuconnect\Client\Model\SmartTransactionsBasketInfo**](SmartTransactionsBasketInfo.md) | Basket info | 
**basket** | [**\Secuconnect\Client\Model\SmartTransactionsBasket**](SmartTransactionsBasket.md) | Basket | 
**idents** | [**\Secuconnect\Client\Model\SmartTransactionsIdent[]**](SmartTransactionsIdent.md) | Idents | 
**tax_rate** | **int** | Tax rate | 
**tax_amount** | **int** | Tax amount | 
**cashier** | **string** | Cashier | 
**market** | **string** | Market | 
**order_option** | **string** | Order option | 
**pickup_options** | [**\Secuconnect\Client\Model\SmartTransactionsPickupOptions**](SmartTransactionsPickupOptions.md) | Pickup options | 
**shipment_details** | [**\Secuconnect\Client\Model\SmartTransactionsShipmentDetails**](SmartTransactionsShipmentDetails.md) | Shipment details | 
**product** | **string** | Product | 
**trans_id** | **int** | Transaction id | 
**payment_method** | **string** | Payment method | 
**transactions** | [**\Secuconnect\Client\Model\PaymentTransactionsProductModel[]**](PaymentTransactionsProductModel.md) | Payment Transactions | 
**last_visited_page** | **string** | Last visited page | 
**is_demo** | **bool** | Demo payment | 
**checkout_links** | [**\Secuconnect\Client\Model\SmartTransactionsCheckoutLinks**](SmartTransactionsCheckoutLinks.md) | Checkout Links | 
**iframe_url** | **string** | IFrame URL | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


