# Change Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased] - YYYY-MM-DD

### Security

### Deprecated

### Added

### Changed

### Fixed

### Removed


## [2.9.0] - 2021-09-13
[2.9.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.8.2...2.9.0

### Added
- Support for PHP 8.0 and 8.1:
  - the required dependency `psr/cache` is now supported up to the upcoming version `3.*`
  - the required dependency `psr/log` is now supported up to the upcoming version `3.*`
  - the required dev-dependency `phpunit/phpunit` is now supported up to the upcoming version `10.*`

### Changed
- `Api.PaymentPlansApi.paymentPlansApiInterfacePatchPlans()` was renamed to `paymentPlansPatch()`
- `Api.PaymentPlansApi.paymentPlansApiInterfaceUpdatePlans()` was renamed to `paymentPlansPut()`

### Removed
- `Api.GeneralStoresApi.assignGoogleKey()`
- `Api.LoyaltyCustomersApi.checkForDuplicates()`
- `Api.LoyaltyCustomersApi.removeCustomer()`
- `Api.LoyaltyMerchantcardsApi.addMerchantCard()`
- `Api.LoyaltyMerchantcardsApi.removeMerchantCard()`
- `Api.PaymentContractsApi.paymentContractsIdDelete()`
- `Api.PaymentContractsApi.paymentContractsIdPut()`
- `Api.PaymentContractsApi.paymentContractsPost()`
- `Model.CustomersWithoutMerchantcardAndDuplicatedCustomers`
- `Model.LoyaltyCustomersRemoved`
- `Model.PaymentContractsDTO`


## [2.8.2] - 2021-08-13
[2.8.2]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.8.1...2.8.2

### Added
- `Api.GeneralContractsApi.updateBankAccount()`
- `Api.PaymentContractsApi.updateBankAccount()`


## [2.8.1] - 2021-07-12
[2.8.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.8.0...2.8.1

### Added
- `Model.GeneralContractsProductModel` element `approved`
- `Model.PaymentContractsProductModel` element `approved`


## [2.8.0] - 2021-06-04
[2.8.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.7.0...2.8.0

### Security

- Update dependencies to the latest versions.

### Added

- `Api.GeneralContractsApi.revokeAccrualCall()`
- `Api.PaymentContractsApi.revokeAccrualCall()`
- `Model.GeneralContractsProductModel` element `id_old`

## [2.7.0] - 2021-05-03
[2.7.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.5.0...2.7.0

### Added

- `Api.GeneralMerchantsApi.getPublicData()`
- `Api.SmartTemplatesApi`
- `Model.BackgroundImageOption`
- `Model.GeneralContractsProductModel` element `payment_link_options`
- `Model.GeneralMerchantsPublicDataCompany`
- `Model.GeneralMerchantsPublicDataModel`
- `Model.PaymentContext`
- `Model.PaymentInstructions`
- `Model.PaymentLinkOptions`
- `Model.SmartTemplatesAccordionItemModel`
- `Model.SmartTemplatesComponentModel`
- `Model.SmartTemplatesElementModel`
- `Model.SmartTemplatesList`
- `Model.SmartTemplatesProductModel`
- `Model.SmartTransactionsDTO` element `payment_context`
- `Model.SmartTransactionsPaymentLinks` element `paypal` and `sofort`
- `Model.SmartTransactionsProductModel` element `payment_instructions` and `payment_context`

### Fixed

- `ObjectSerializer` to convert `OneOfSmartTransactionsDeliveryOptionsModel` and `PaymentInstructions` correctly


## 2.6.0 - SKIPPED


## [2.5.0] - 2021-03-15
[2.5.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.4.0...2.5.0

### Added
- `Api.PaymentPlansApi`
- `Api.PaymentSubscriptionsApi`
- `Model.BillingCyclesItem`
- `Model.PaymentPlanInterval`
- `Model.PaymentPlansDTO`
- `Model.PaymentPlansList`
- `Model.PaymentPlansProductModel`
- `Model.PaymentSubscriptionsList`
- `Model.PaymentSubscriptionsProductModel`
- `Model.PaymentSubscriptionsProductModelBillingCycles`
- `Model.SmartTransactionsContainer`
- `Model.SecupayBaseBasketItem` element `plan_id` and `start_at`
- `Model.SecupayTransactionCaptureDTO` element `shipping_information`
- `Model.SmartTransactionsApplicationContext` element `checkout_template`

### Changed
- `Api.GeneralContractsApi` method `getAvailablePaymentMethods` returns a list of `string`
- `Model.PaymentCancelResult` element `result` is an instance of `PaymentCancelResultDetails`
- `Model.SecupayTransactionUpdateBasketDTO` element `contract` is an instance of `PaymentContractsProductModel`
- `Model.SecupayTransactionCancelDTO` element `contract` is an instance of `PaymentContractsProductModel`
- `Model.SecupayTransactionCaptureDTO` element `contract` is an instance of `PaymentContractsProductModel`
- `Model.SmartTransactionsProductModel` element `container` is an instance of `SmartTransactionsContainer`

### Fixed
- `Model.GeoAddress` element `address_components` is a List of `AddressComponents`


## [2.4.0] - 2020-12-11
[2.4.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.3.0...2.4.0

### Added

- `Api.PaymentTransactionsApi.getPaymentTransactionsOldFormat()`
- `Model.SmartTransactionsDTO` element `application_context`
- `Model.SmartTransactionsDTO` element `communications`
- `Model.SmartTransactionsProductModel` element `application_context`
- `Model.SmartTransactionsProductModel` element `communications`
- `Model.SmartTransactionsProductModel` element `payment_links`
- `Model.SmartTransactionsProductModel` element `prepaid_sales`
- `Model.PaymentContractsDTORequestId` element `payout_purpose`

### Fixed

- `Model.GeneralMerchantsProductModel` element `id_old` is an instance of `Integer` instead of `String`
- `Model.GeneralMerchantsProductModel` element `legal_details` is a List of `GeneralMerchantsLegalDetails`
- `Model.GeneralMerchantsProductModel` element `urls` is a List of `GeneralMerchantsUrls`

### Removed

- `Model.SmartTransactionsDTO` element `status`, `receipt` and `receipt_number`
- `Model.SmartTransactionsCheckoutLinks` element `url_success`, `url_failure`, `url_abort` and `url_error` (moved to `application_context.return_urls`)


## [2.3.0] - 2020-09-14
[2.3.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.2.0...2.3.0

### Added

- `Api.PaymentContainersApi.mandate()`
- `ApiPaymentContainersApi..uploadMandate()`
- `Model.MandateDTO`
- `Model.MandateProductModel`
- `Model.SmartTransactionsPrepare` element `device_source`
- `Model.UploadMandateDTO`
- `Model.UploadMandateProductModel`

### Fixed

- `Model.SmartTransactionsDTO` element `device_source` is now an instance of `ProductInstanceUID` instead of `string`


## [2.2.0] - 2020-09-04
[2.2.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.1.0...2.2.0

### Added

- `Api.LoyaltyCardgroupsApi.getCardgroupsByMerchantId()`
- `Api.PaymentTransactionsApi.addTransaction()`
- `Api.SmartTransactionsApi.setDelivery()`
- `Model.GeneralStoresProductModel` element `acceptance_point`
- `Model.OneOfSmartTransactionsDeliveryOptionsModel`
- `Model.PaymentContractsProductModel` element `pay_in_account`
- `Model.SecupayTransactionProductDTO` element `payment_methods`
- `Model.SecupayTransactionProductModel ` element `payment_id`
- `Model.SmartDevicesDTO` element `device` and `tid`
- `MModel.SmartDevicesProductModel` element `tid` and `refresh`
- `Model.SmartTransactionsCollectionModel`
- `Model.SmartTransactionsDTO` element `intent` and `delivery_options`
- `Model.SmartTransactionsProductModel ` element `delivery_options`
- `Model.SmartTransactionsSetDeliveryModel`
- `Model.SmartTransactionsShippingModel`
- `Model.SmartTransactionsTimeSlot`

### Changed

- `Printer.ImitationDevicePrinter.printUserCode()` returns a new text
- The dev-dependency `phpunit/phpunit` can be installed in version 5.7 or newer.

### Fixed

- Fixed some api tests

### Removed

- `Api.LoyaltySalesApi`
- `Api.LoyaltyStoregroupsApi`
- `Api.SmartDevicesApi`
- `Model.GeneralMerchantsCheckoutOptions`
- `Model.GeneralMerchantsCheckoutOptionsCollection`
- `Model.GeneralMerchantsCheckoutOptionsCollectionSmartDevices`
- `Model.GeneralMerchantsDTO` element `checkout_options`
- `Model.GeneralMerchantsProductModel ` element `checkout_options`
- `Model.LoyaltyDTOStore `
- `Model.LoyaltyStoregroupsDTO`
- `Model.LoyaltyStoregroupsDTOStoresAddressComponents`
- `Model.LoyaltyStoregroupsList`
- `Model.LoyaltyStoregroupsProductModel `
- `Model.SmartDevicesDTO` element `terminal`
- `Model.SmartDevicesDTOPrepaidTid`
- `Model.SmartDevicesDTOSecubaseConfig `
- `Model.SmartDevicesSecubaseConfig`
- `Model.SmartDevicesSecubaseConfigLogging `
- `Model.SmartDevicesSecubaseConfigLoggingFileNet`
- `Model.SmartTransactionsBasket` element `texts`
- `Model.SmartTransactionsBasketText`
- `Model.SmartTransactionsPickupOptions`
- `Model.SmartTransactionsDTO` element `order_option`
- `Model.SmartTransactionsProductModel ` elements `order_option`, `pickup_options` and `shipment_details`
- `Model.GeneralMerchantsCheckoutOptionsShipping`
- `Model.SmartTransactionsShipmentDetails`
- `Model.LoyaltyDTOMerchant`
- `Model.Store` element `name_raw`


## [2.1.0] - 2020-05-12
[2.1.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.0.0...2.1.0

### Added

- `Api.LoyaltyMerchantcardsApi.cardBalanceReceipt()`
- `Api.LoyaltyTransactionsApi`
- `Api.ServicesUploadidentsProductApi`
- `Model.LoyaltyMerchantcardsProductWithReceiptModel` element `trans_id` and `amount`

### Fixed

- `Api.LoyaltyCustomersApi` fixed response declaration from `null[]` to `string[]`
- `Model.SecupayTransactionProductModelUsedPaymentInstrument` fixed response declaration from `BankAccountDescriptor` to `OneOfPaymentContainersDTOModelPrivate`


## [2.0.0] - 2020-05-11
[2.0.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/1.3.0...2.0.0

### Added

- `Api.SmartTransactionsApi.startTransaction()` parameter `body`
- `Model.Address` element `additional_address_data`
- `Model.GeneralStoresProductModel` element `store_name`
- `Model.PaymentTransactionsProductModel` element `parents` and `account_owner`
- `Model.PaymentContainersDTO` element `customer_id`
- `Model.SmartTransactionsReceiptValue` element `decoration`
- `Model.SmartTransactionsBonusProducts` element `serial_number`

### Changed

- The `body` parameter is now always a required parameter in the API calls, but you set it to `null` if you do not need it.
- `Api.GeneralStoresApi` changed response declarations from `object` to `ResultBoolean`
- `Api.LoyaltyCardsApi.assignUser()` changed input parameter from `object` to `CardPin`
- `Api.LoyaltyCardsApi` changed response declarations from `object` to `ResultBoolean`
- `Api.LoyaltyCustomersApi.checkForDuplicates()` changed response declaration from `object` to `CustomersWithoutMerchantcardAndDuplicatedCustomers`
- `Api.LoyaltyMerchantcardsApi` changed response declarations from `object` to `ResultBoolean`
- `Api.PaymentContractsApi.paymentContractsIdPaymentMethodsGet()` changed response declaration from `string[]` to `StringList`
- `Api.PaymentSecupayCreditcardsApi.cancelPaymentTransactionById()` changed response declaration from `object` to `PaymentCancelResult`
- `Api.PaymentSecupayDebitsApi.cancelPaymentTransactionById()` changed response declaration from `object` to `PaymentCancelResult`
- `Api.PaymentSecupayInvoicesApi.cancelPaymentTransactionById()` changed response declaration from `object` to `PaymentCancelResult`
- `Api.PaymentSecupayPrepaysApi.cancelPaymentTransactionById()` changed response declaration from `object` to `PaymentCancelResult`
- `Api.PaymentSecupaySofortApi.cancelPaymentTransactionById()` changed response declaration from `object` to `PaymentCancelResult`
- `Api.SmartDevicesApi` replaced `SmartDevicesList1` with `SmartDevicesList`
- `Model.PaymentContainersDTO` replaced `PaymentContainersDTOPrivate` with `OneOfPaymentContainersDTOModelPrivate`
- `Model.SecupayPayoutDTO` changed parameter `customer` from string to `PaymentCustomersProductModel`

### Fixed

- `Model.SmartTransactionsPrepare` fixed type declaration of element `callback_urls`
- `Model.GeneralStoresProductModel` fixed type declaration of element `geometry`
- `Model.BankAccountDescriptor` wrong element `pan` was removed, instead of this we have now the model `CreditCardDescriptor`

### Removed

- `Api.GeneralMerchantsApi.updateMerchant()`
- `Api.LoyaltySalesAp.getVirtualTerminalIdByStoreId()`
- `Api.PaymentSecupayCreditcardsApi.paymentSecupayCreditcardsCancelById()`
- `Api.PaymentSecupayDebitsApi.paymentSecupayDebitsCancelById()`
- `Api.PaymentSecupayInvoicesApi.paymentSecupayInvoicesCancelById()`
- `Api.PaymentSecupayPrepaysApi.paymentSecupayPrepaysCancelById()`
- `Api.PaymentTransactionsApi.revokeAccrual()` parameter `body`
- `Model.PaymentContainersDTOPrivate`
- `Model.SmartDevicesList1`
- `Model.VirtualTerminalData`
- `Model.SecupaySubTransactionProductModel` elements `amount`, `transaction_status`, `status`, `currency` were removed
- `Model.SecupayPayoutDTO` element `demo`
- `Model.ReceiptTypeValue` element `type`


## [1.3.0] - 2020-03-04
[1.3.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/1.2.0...1.3.0

### Changed

- Making stomp dependencies optional (as they only needed for cash registers)


## [1.2.0] - 2019-10-01
[1.2.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/1.1.0...1.2.0

### Added

- Added a new request parameter "container_id to the model "PaymentTransactionCancelDTO"

### Fixed

- Fixed type of the parameter "geometry" and "category" in "GeneralStoresProductModel"


## [1.1.0] - 2019-09-26
[1.1.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/1.0.1...1.1.0

### Added

- Added two new request parameter ("name" and "merchant") to the model "GeneralStoresDTO"


## [1.0.1] - 2019-09-23
[1.0.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/1.0.0...1.0.1

### Fixed

- Added missing response parameter "subscription" in "SecupayTransactionProductModel"


## [1.0.0] - 2019-09-09
[1.0.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.8.0...1.0.0

### Added

- `PaymentContractsDTORequestId` parameter `create_first_store` and `store_name`
- `PaymentContractsRequestIdResult` parameter `merchant` and `store`
- `SmartDevicesProductModel` parameter `contract`
- `SmartTransactionsPrepare` some internal parameter
- `SmartTransactionsProductModel` parameter `iframe_url`

### Changed

- **[BREAKING\]** `PaymentContractsRequestIdResult` parameter `contract` is now a instance of `ProductInstanceUID` instead of `PaymentContractsProductModel`

### Removed

- `GeneralMerchantsApi.addMerchants()`
- `PaymentTransactionsApi` deprecated functions
  - `paymentTransactionsIdCancelPost()`
  - `paymentTransactionsGet()`
  - `paymentTransactionsGetById()`
  - `paymentTransactionsIdShippingUrlGet()`
- `PrepaidSalesProductApi` deprecated functions
  - `prepaidSalesPost()`


## [0.8.0] - 2019-08-14
[0.8.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.7.2...0.8.0

### Added

- Added "mandate" field to SecupayTransactionProductModel
- Added "contract" field to SmartDevicesDTO

### Changed

- \Secuconnect\Client\Api\SmartTransactionsApi::prepare has now 3 parameter ($smart_transaction_id, $payment_method, $body)


## [0.7.2] - 2019-06-28
[0.7.2]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.7.1...0.7.2

### Added

- Added "pan" field to BankAccountDescriptor which is used in SecupayTransactionProductModelUsedPaymentInstrument (as a temporary solution to get the truncated pan of a used credit card)


## [0.7.1] - 2019-05-21
[0.7.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.7.0...0.7.1

### Fixed

- Fixed SecupayPayoutApi models


## [0.7.0] - 2019-05-15
[0.7.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.6.2...0.7.0

### Added

- Added PaymentSecupaySofortApi

### Changed

- Renamed operation "prepaidContractsMeMappingZvtPost" to "mappingZvt" and corrected the input parameters
- The default cache directory is now defined as an absolute path


## [0.6.2] - 2019-04-17
[0.6.2]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.6.1...0.6.2

### Added

- Added "accrual" to "PaymentTransactionsProductModel"
- Added "sub_transactions" to "SecupayTransactionProductModel"


## [0.6.1] - 2019-04-04
[0.6.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.6.0...0.6.1

### Fixed

- Fix payment transaction cancel call


## [0.6.0] - 2019-04-01
[0.6.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.7.1...0.6.0

### Changed

#### LoyaltyMerchantcardsApi

- Removed an unused Endpoint

#### PaymentTransactionsApi

- Renamed Operation "paymentTransactionsIdCancelPost" to "cancel"
- Renamed Operation "paymentTransactionsGet" to "getAll"
- Renamed Operation "paymentTransactionsGetById" to "getOne"
- Renamed Operation "paymentTransactionsIdShippingUrlGet" to "getShippingUrl"

#### PrepaidSalesProductApi

- Renamed Operation "prepaidSalesPost" to "addSale"

#### SmartDevicesApi

- Fixed endpoint description for "updatePin"

#### SmartRoutingsApi

- Added Smart.Routings endpoints


## [0.5.7.1] - 2019-03-29
[0.5.7.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.6...0.5.7.1

### Fixed

- Fix revoke accrual call


## [0.5.6] - 2019-03-25
[0.5.6]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.5...0.5.6

### Fixed

- Fix missing accrual call
- Fix handling of Access-Token if the cached token is invalid
- Fix delete cache item
- Fix error handling: Every API method should now return a ProductExceptionPayload in case of an API error from the seuconnect API


### Removed

- Remove unused models: SecupayTransactionProductModelRedirectUrl, SecupayTransactionProductDTORedirectUrl and PaymentTransactionsProductModelMerchant


## [0.5.5] - 2019-03-21
[0.5.5]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.4...0.5.5

- Fix SmartTransactionsProductModel and there relations


## [0.5.4] - 2019-03-13
[0.5.4]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.3...0.5.4

- Fix SmartTransactionsProductModel


## [0.5.3] - 2019-03-12
[0.5.3]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.2...0.5.3

- Fix STOMP (autoload, connection, ...)
- Fix links in "docs/README.md"


## [0.5.2] - 2019-03-11
[0.5.2]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.1...0.5.2

- Fix STOMP


## [0.5.1] - 2019-03-01
[0.5.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.0...0.5.1

- Cosmetics
- Bug fix for Authenticator::authenticateByDevice()


## [0.5.0] - 2019-02-28
[0.5.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.4.0...0.5.0

- Authenticator was refactored: Please use on of the following methods to authenticate:
    - Authenticator::authenticateByApplicationUser()
    - Authenticator::authenticateByClientCredentials()
    - Authenticator::authenticateByDevice()
    - Authenticator::authenticateByRefreshToken()
- ImitationDevicePrinter will now also print a phone number to validate the user code.
- API function update
- Bug fixes


## [0.4.0] - 2019-02-18
[0.4.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.3.0...0.4.0

**Developer Preview**

Beta version of the swagger generated PHP-SDK for the secuconnect API.

- Stomp client changed
- Date format changed to string
- API function update
- Bug fixes


## [0.3.0] - 2018-11-08
[0.3.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.2.0...0.3.0

**Developer Preview**

Beta version of the swagger generated PHP-SDK for the secuconnect API.

- Stomp client added


## [0.2.0] - 2018-10-26
[0.2.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.1.0...0.2.0

**Developer Preview**

Beta version of the swagger generated PHP-SDK for the secuconnect API.


## [0.1.0] - 2018-04-23
[0.1.0]:https://github.com/secuconnect/secuconnect-php-sdk/releases/tag/v0.1.0

**Developer Preview**

Beta version of the swagger generated PHP-SDK for the secuconnect API.
