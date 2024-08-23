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

## [2.53.0] - 2024-08-23
[2.53.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.52.0...2.53.0

- *new element*: `aiia` in `CrowdFundingDataOpenAmountInsideCancelPeriod` and `CrowdFundingDataDetails`
- *new element*: `status` in `SmartDevicesDTO` and `SmartDevicesProductModel`
- *new endpoint*: `SmartDevicesApi->GetSecubaseConfig()`
- *changed element type*: `cardnumber` changed from `integer` to `string` in `LoyaltyMerchantcardsDTOCsc`, `LoyaltyMerchantcardsDTOValidateMerchantCard`, `LoyaltyMerchantcardsDTOCheckPasscode`, `LoyaltyMerchantcardsDTOResetPasscode` and `LoyaltyMerchantcardsDTOCardBalanceReceipt`
- *new param*: `targetMerchantCardId` in `LoyaltyMerchantCardsApi->executeTransaction()`

### Added
- `Model.DeviceStatus`
- `Model.SmartDevicesGetSecubaseConfigDTO`
- `Model.SmartDevicesSecubaseConfig`
- `Model.SmartDevicesSecubaseConfigApp`

### Changed
- `.gitattributes`
- `.gitignore`
- `LICENSE`
- `Api.LoyaltyMerchantCardsApi`
- `Api.SmartDevicesApi`
- `Model.LoyaltyMerchantcardsDTOCardBalanceReceipt`
- `Model.LoyaltyMerchantcardsDTOCheckPasscode`
- `Model.LoyaltyMerchantcardsDTOCsc`
- `Model.LoyaltyMerchantcardsDTOResetPasscode`
- `Model.LoyaltyMerchantcardsDTOValidateMerchantCard`
- `Model.SmartDevicesDTO`
- `Model.SmartDevicesProductModel`
- `phpunit.xml.dist`


## [2.53.0] - 2024-07-30
[2.53.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.52.0...2.53.0

- *new element*: `aiia` in `CrowdFundingDataOpenAmountInsideCancelPeriod` and `CrowdFundingDataDetails`

### Changed
- `Model.CrowdFundingDataDetails`
- `Model.CrowdFundingDataOpenAmountInsideCancelPeriod`


## [2.52.0] - 2024-07-15
[2.52.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.51.0...2.52.0

- *new element*: `expiry_date` and `customer_assignment_date` in `LoyaltyMerchantcardsProductModel`

### Added
- `Model.PaymentTransactionStatus`

### Changed
- `.gitattributes`
- `.gitignore`
- `LICENSE`
- `Model.LoyaltyMerchantcardsProductModel`
- `phpunit.xml.dist`


## [2.51.0] - 2024-06-24
[2.51.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.50.0...2.51.0

- *new element*: `cash_balance`, `bonus_balance` and `zvt_cardgroup` in `LoyaltyMerchantcardsCardBalanceReceipt`
- *new element*: `cleared`, `clearing_information`, `trans_id`, `purpose` and `additional_data` in `LoyaltyTransactionsProductModel`
- *new element*: `anoymize` in `LoyaltyCustomersDTO`
- *new element*: `expiry_date` and  `additional_data` in `LoyaltyMerchantcardsDTO`
- *changed element type*: `merchant` changed from `LoyaltyTransactionsDTOMerchant` to `GeneralMerchantsProductModel` in `LoyaltyTransactionsProductModel`
- *changed element type*: `cardgroup` changed from `LoyaltyTransactionsDTOCardgroup` to `LoyaltyCardgroupsProductModel` in `LoyaltyTransactionsProductModel`
- *changed element type*: `store` changed from `LoyaltyTransactionsDTOStore` to `GeneralStoresProductModel` in `LoyaltyTransactionsProductModel`
- *changed element type*: `merchantcard` changed from `LoyaltyTransactionsDTOMerchantcard` to `LoyaltyMerchantcardsProductModel` in `LoyaltyTransactionsProductModel`
- *changed element type*: `card` changed from `LoyaltyTransactionsDTOCard` to `LoyaltyCardsProductModel` in `LoyaltyTransactionsProductModel`
- *changed element type*: `parents` and `children` changed from `LoyaltyTransactionsDTORelatedTransactions` to `LoyaltyTransactionsRelatedTransactions` in `LoyaltyTransactionsProductModel`
- *removed param*: `merchant`, `card`, `created_by_merchant` and `used_by_merchant` in `LoyaltyMerchantcardsDTO`

### Added
- `Model.LoyaltyTransactionsRelatedTransactions`

### Changed
- `.gitattributes`
- `.gitignore`
- `LICENSE`
- `Model.LoyaltyCustomersDTO`
- `Model.LoyaltyMerchantcardsCardBalanceReceipt`
- `Model.LoyaltyMerchantcardsDTO`
- `Model.LoyaltyTransactionsProductModel`
- `phpunit.xml.dist`

### Removed
- `Model.LoyaltyTransactionsDTOCard`
- `Model.LoyaltyTransactionsDTOCardgroup`
- `Model.LoyaltyTransactionsDTOMerchant`
- `Model.LoyaltyTransactionsDTOMerchantcard`
- `Model.LoyaltyTransactionsDTORelatedTransactions`
- `Model.LoyaltyTransactionsDTOStore`


## [2.50.0] - 2024-06-05
[2.50.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.49.0...2.50.0

- *removed endpoint*: `PaymentTransactions.getShippingUrl()`
- *renamed endpoint*: `CardprocessingInvoicesApi` was renamed to `CardProcessingInvoicesApi`
- *new element*: `additional_data` in `LoyaltyMerchantcardsDTOTransaction`
- *changed element type*: `cardnumber` changed from `integer` to `string` in `LoyaltyMerchantcardsDTOTransaction`
- *changed element type*: `ref_type_id` changed from `integer` to `string` in `LoyaltyTransactionsDTORelatedTransactions`
- *changed element type*: `card_scheme` from enum to `string` in `PaymentContractsDTORequestIdAdditionalDataCreateCard`

### Changed
- `Api.CardprocessingInvoicesApi`
- `Api.PaymentTransactionsApi`
- `Model.CardprocessingInvoicesList`
- `Model.CardprocessingInvoicesProductModel`
- `Model.LoyaltyMerchantcardsDTOTransaction`
- `Model.LoyaltyTransactionsDTORelatedTransactions`
- `Model.PaymentContractsDTORequestIdAdditionalDataCreateCard`

### Removed
- `Model.PaymentTransactionsShippingUrl`


## [2.49.0] - 2024-05-10
[2.49.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.48.0...2.49.0

### Added
- `Model.LoyaltyMerchantcardsLockReasons`
- `Model.LoyaltyMerchantcardsLockStatus`

### Changed
- `.gitattributes`
- `.gitignore`
- `LICENSE`
- `Api.LoyaltyMerchantCardsApi`
- `Model.LoyaltyMerchantcardsDTOCsc`
- `Model.LoyaltyMerchantcardsDTOLock`
- `phpunit.xml.dist`


## [2.49.0] - 2024-04-29
[2.49.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.48.0...2.49.0

- *renamed endpoint* `CardprocessingTransactionsApi` was renamed to `CardProcessingTransactionsApi`

### Changed
- `Api.CardprocessingTransactionsApi`
- `Api.PrepaidReportsApi`
- `Api.PrepaidSalesApi`
- `Model.AvailableCountry`
- `Model.CardprocessingTransactionsList`
- `Model.CardprocessingTransactionsProductModel`
- `Model.PrepaidReportsDTO`
- `Model.PrepaidReportsList`
- `Model.PrepaidReportsProductModel`
- `Model.PrepaidSalesItem`
- `Model.PrepaidSalesList`
- `Model.PrepaidSalesProductDTO`
- `Model.PrepaidSalesProductModel`
- `Model.PrepaidSalesSmartDevice`
- `Model.ReceiptType`


## [2.48.0] - 2024-04-18
[2.48.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.47.0...2.48.0

- *new request element*: `expand` was added to all `getOne()` endpoints

### Changed
- `Api.CardprocessingInvoicesApi`
- `Api.CardprocessingTransactionsApi`
- `Api.GeneralContractsApi`
- `Api.GeneralMerchantsApi`
- `Api.GeneralStoresApi`
- `Api.LoyaltyCardGroupsApi`
- `Api.LoyaltyCardsApi`
- `Api.LoyaltyCustomersApi`
- `Api.LoyaltyMerchantCardsApi`
- `Api.LoyaltyTransactionsApi`
- `Api.PaymentContainersApi`
- `Api.PaymentContractsApi`
- `Api.PaymentCustomersApi`
- `Api.PaymentInvoicesApi`
- `Api.PaymentMandatesApi`
- `Api.PaymentPayoutsApi`
- `Api.PaymentPlansApi`
- `Api.PaymentSubscriptionsApi`
- `Api.PaymentTransactionsApi`
- `Api.PrepaidItemsApi`
- `Api.PrepaidReportsApi`
- `Api.PrepaidSalesApi`
- `Api.ServicesIdentRequestsApi`
- `Api.ServicesIdentResultsApi`
- `Api.SmartDevicesApi`
- `Api.SmartRoutingsApi`
- `Api.SmartTemplatesApi`
- `Api.SmartTransactionsApi`
- `Model.ItemGroup`
- `Model.PrepaidItemsBaseProductModel`
- `Model.PrepaidItemsList`
- `Model.PrepaidItemsProductModel`


## [2.47.0] - 2024-04-16
[2.47.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.46.0...2.47.0

- *changed response type*: `PrepaidContractsApi.mappingZvt()` changed from `PrepaidMappingZvt` to `PrepaidMappingZvtResponse`, which inherit from the `PrepaidMappingZvt` (like before) or returns the `ResultBoolean` object
- *changed element type*: `product_id` changed from `int` to `string` in `PrepaidZvtDTO`
- *new request element*: `expand` was added to all `getAll()` endpoints
- *changed element type*: `parent` was changed from `ParentModel` to `GeneralMerchantsProductModel` in `GeneralMerchantsProductModel`
- *changed element type*: `acceptance_points` was changed from `BaseProductModel[]` to `GeneralMerchantsProductModel[]` in `GeneralMerchantsProductModel`

### Added
- `Model.PrepaidMappingZvtResponse`

### Changed
- `Api.CardprocessingInvoicesApi`
- `Api.CardprocessingTransactionsApi`
- `Api.GeneralContractsApi`
- `Api.GeneralMerchantsApi`
- `Api.GeneralStoresApi`
- `Api.LoyaltyCardGroupsApi`
- `Api.LoyaltyCardsApi`
- `Api.LoyaltyCustomersApi`
- `Api.LoyaltyMerchantCardsApi`
- `Api.LoyaltyTransactionsApi`
- `Api.PaymentContainersApi`
- `Api.PaymentContractsApi`
- `Api.PaymentCustomersApi`
- `Api.PaymentInvoicesApi`
- `Api.PaymentMandatesApi`
- `Api.PaymentPayoutsApi`
- `Api.PaymentPlansApi`
- `Api.PaymentSubscriptionsApi`
- `Api.PaymentTransactionsApi`
- `Api.PrepaidContractsApi`
- `Api.PrepaidItemsApi`
- `Api.PrepaidReportsApi`
- `Api.PrepaidSalesApi`
- `Api.ServicesIdentRequestsApi`
- `Api.ServicesIdentResultsApi`
- `Api.SmartDevicesApi`
- `Api.SmartRoutingsApi`
- `Api.SmartTemplatesApi`
- `Api.SmartTransactionsApi`
- `Model.GeneralMerchantsProductModel`
- `Model.PrepaidMappingZvt`
- `Model.PrepaidMappingZvtItem`
- `Model.PrepaidZvtDTO`
- `Model.ResultBoolean`
- `lib/ObjectSerializer.php`


## [2.46.0] - 2024-04-10
[2.46.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.45.0...2.46.0

- *removed element*: `age` and `days_until_birthday` were removed from `LoyaltyCustomersDTO` as they are ignored by the API.
- *renamed endpoint* `LoyaltyMerchantcardsApi` was renamed to `LoyaltyMerchantCardsApi`
- *removed request param*: the param `body` was removed for `LoyaltyMerchantCardsApi.unlock()`
- *changed type*: the type of the element `reason` was changed from `string` to `int` in `LoyaltyMerchantcardsDTOLock`

### Changed
- `Api.LoyaltyMerchantcardsApi`
- `Model.LoyaltyCustomersDTO`
- `Model.LoyaltyMerchantcardsCardBalanceReceipt`
- `Model.LoyaltyMerchantcardsDTO`
- `Model.LoyaltyMerchantcardsDTOCardBalanceReceipt`
- `Model.LoyaltyMerchantcardsDTOCheckPasscode`
- `Model.LoyaltyMerchantcardsDTOCreateMerchantcards`
- `Model.LoyaltyMerchantcardsDTOCsc`
- `Model.LoyaltyMerchantcardsDTOCustomer`
- `Model.LoyaltyMerchantcardsDTOLock`
- `Model.LoyaltyMerchantcardsDTONewPasscode`
- `Model.LoyaltyMerchantcardsDTOPaymentContainer`
- `Model.LoyaltyMerchantcardsDTOResetPasscode`
- `Model.LoyaltyMerchantcardsDTOTransaction`
- `Model.LoyaltyMerchantcardsDTOValidateMerchantCard`
- `Model.LoyaltyMerchantcardsList`
- `Model.LoyaltyMerchantcardsProductModel`
- `Model.LoyaltyMerchantcardsProductWithReceiptModel`
- `Model.LoyaltyMerchantcardsValidateMerchantCard`
- `Model.VirtualTerminalDataModel`


## [2.45.0] - 2024-04-09
[2.45.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.44.0...2.45.0

- **Important note:** As of end of April 2024 you cannot create Payment Containers with type `credit_card` anymore.
  Your application needs to create these Payment Containers implicitly with `POST /Smart/Transactions/{id}/prepare/{method}`.
  If your application uses the deprecated way, you are demanded to revise your integration.
  With the sole exception of bank account details for payouts (outgoing bank transfers), we recommend to use the implicit creation as described above everywhere in your application.
- *fixed endpoint*: changed request parameter `general_contract_id` from `ProductInstanceID` to `string` in `GeneralContractsApi.getTransferBalance()`
- *fixed endpoint*: changed response model of `GeneralContractsApi.getTransferBalance()`
- *renamed endpoint*: from `LoyaltyCardgroupsApi` to `LoyaltyCardGroupsApi`
- *changed param type*: from `SmartTransactionsPrepare` to `SmartTransactionsStart` (which extends the `SmartTransactionsPrepare`) in `SmartTransactionsApi.startTransaction()`
- *new element* `vlh` added to  `SmartDevicesProducts`

### Added
- `Model.SmartDeviceProductsVlh`
- `Model.SmartTransactionsStart`

### Changed
- `Api.GeneralContractsApi`
- `Api.LoyaltyCardgroupsApi`
- `Api.LoyaltyTransactionsApi`
- `Api.SmartTransactionsApi`
- `Model.GeneralContractsTransferBalanceModel`
- `Model.LoyaltyCardgroupsDTO`
- `Model.LoyaltyCardgroupsDTOCheckPasscodeEnabled`
- `Model.LoyaltyCardgroupsList`
- `Model.LoyaltyCardgroupsProductModel`
- `Model.LoyaltyCardgroupsUpdateDTO`
- `Model.LoyaltyTransactionsDTOCard`
- `Model.LoyaltyTransactionsDTOCardgroup`
- `Model.LoyaltyTransactionsDTOMerchant`
- `Model.LoyaltyTransactionsDTOMerchantcard`
- `Model.LoyaltyTransactionsDTORelatedTransactions`
- `Model.LoyaltyTransactionsDTOStore`
- `Model.LoyaltyTransactionsList`
- `Model.LoyaltyTransactionsProductModel`
- `Model.PaymentContainersDTO`
- `Model.SmartDevicesProducts`
- `Model.SmartTransactionPaymentContainerDTO`

### Removed
- `Model.GeneralContractsTransferBalanceModelBalances`


## [2.44.0] - 2024-03-15
[2.44.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.43.0...2.44.0

- *removed endpoint*: `LoyaltyCardgroupsApi.getCardgroupsByMerchantId()`
- *changed param type*: The param `body` changed from `LoyaltyCardgroupsDTO` to `LoyaltyCardgroupsUpdateDTO` in `LoyaltyCardgroupsApi.updateCardGroup()`
- *changed name*: renamed`ServicesIdentrequestsApi` to `ServicesIdentRequestsApi`
- *changed name*: renamed`ServicesIdentresultsApi` to `ServicesIdentResultsApi`
- *changed name*: renamed`ServicesUploadidentsApi` to `ServicesUploadIdentsApi`
- *new endpoint*: `SmartDevicesApi.getDevicePinConfig()`
- *new endpoint*: `SmartDevicesApi.updateDevicePin()`
- *changed element type*: `pin` changed from `int` to `string` in `CardPin`
- *removed element*: `display_name_raw` and `stock_warn_limit` in `LoyaltyCardgroupsDTO`
- *changed element type*: `merchant` changed from `LoyaltyCardgroupsDTOMerchant` to `string` in `LoyaltyCardgroupsDTO`
- *changed element type*: `merchant` changed from `LoyaltyCardgroupsDTOMerchant` to `GeneralMerchantsProductModel` in `LoyaltyCardgroupsProductModel`
- *changed element type*: `stock_warn_limit` changed from `string` to `int` in `LoyaltyCardgroupsProductModel`
- *new element*: `balance_limit`, `balance_expiry`, `cancel_selected` and `description` in `LoyaltyCardgroupsProductModel`

### Added
- `Model.GetSmartDevicePinConfig`
- `Model.GetSmartDevicePinConfigMerchant`
- `Model.GetSmartDevicePinConfigSmartDevice`
- `Model.GetSmartDevicePinConfigStore`
- `Model.LoyaltyCardgroupsUpdateDTO`
- `Model.UpdateSmartDevicePin`

### Changed
- `Api.LoyaltyCardgroupsApi`
- `Api.LoyaltyCardsApi`
- `Api.LoyaltyCustomersApi`
- `Api.LoyaltyMerchantcardsApi`
- `Api.ServicesIdentrequestsApi`
- `Api.ServicesIdentresultsApi`
- `Api.ServicesUploadidentsApi`
- `Api.SmartDevicesApi`
- `Model.CardPin`
- `Model.IdentDocument`
- `Model.IdentProviderValue`
- `Model.IdentificationProcess`
- `Model.IdentrequestPerson`
- `Model.IdentrequestRedirectUrls`
- `Model.IdentresultPerson`
- `Model.LoyaltyCardgroupsDTO`
- `Model.LoyaltyCardgroupsDTOCheckPasscodeEnabled`
- `Model.LoyaltyCardgroupsProductModel`
- `Model.LoyaltyCardsDTOAccount`
- `Model.LoyaltyCardsList`
- `Model.LoyaltyCardsProductModel`
- `Model.LoyaltyCustomersDTO`
- `Model.LoyaltyCustomersList`
- `Model.LoyaltyCustomersPaymentContainerModel`
- `Model.LoyaltyCustomersProductModel`
- `Model.ProductExceptionPayload`
- `Model.ResultBoolean`
- `Model.ServicesIdentrequestsProductModel`
- `Model.ServicesIdentresultsProductModel`

### Removed
- `Model.LoyaltyCardgroupsDTOMerchant`


## [2.43.0] - 2024-02-27
[2.43.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.42.0...2.43.0

- *fixed bug*: invalid regex in `PaymentTransactionCancelDTO` [#45](https://github.com/secuconnect/secuconnect-php-sdk/issues/45)
- *fixed bug*: added file check for avoid error on setting curl option on enabled debugging in `ApiClient`
- *fixed bug*: reworked `ObjectSerializer->deserialize()` method a little bit to solve mapping issues in `LoyaltyTransactions`
- *changed response type*: `PaymentTransactionsApi->capture()` changed from `PaymentTransactionsProductModel[] ` to `PaymentTransactionsProductModel`

### Changed
- `Api.GeneralContractsApi`
- `Api.LoyaltyMerchantcardsApi`
- `Api.PaymentContractsApi`
- `Api.PaymentMandatesApi`
- `Api.PaymentTransactionsApi`
- `Model.PaymentTransactionCancelDTO`
- `lib/ObjectSerializer.php`


## [2.42.0] - 2023-12-18
[2.42.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.41.0...2.42.0

- *new endpoint*: `capture` in `PaymentTransactionsApi`
- *new element*: `documents` in `PaymentTransactionsProductModel`

### Added
- `Model.PaymentTransactionsCaptureDTO`
- `Model.PaymentTransactionsProductModelDocuments`

### Changed
- `Api.PaymentTransactionsApi`
- `Model.PaymentTransactionsProductModel`
- `Model.SmartTransactionsBasketProduct`


## [2.41.0] - 2023-11-06
[2.41.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.40.0...2.41.0

- *new examples*: `GeneralContractsFindResponse`, `GeneralContractsResourceResponse`, `GeneralContractsGetTransferBalancesResponse`, `GeneralContractsGetAvailablePaymentMethodsRequest`, `GeneralContractsGetAvailablePaymentMethodsResponse`, `GeneralContractsGetIframeOptionsResponse`, `GeneralContractsSetPaymentLinkOptionsRequest` and `GeneralContractsGetCurrenciesResponse` in `GeneralContractsApi`
- *new examples*: `GeneralStoresFindResponse`, `GeneralStoresCreateRequest`, `GeneralStoresResourceResponse` and `GeneralStoresUpdateRequest` in `GeneralStoresApi`
- *removed endpoint*: `GeneralStoresApi->checkIn()`
- *new element*: `application_context.shop_details` in `SmartTransactionsProductModel`
- *new element*: `transmitted_to_bank` in `PaymentTransactionsProductModel`

### Added
- `Model.SmartTransactionsApplicationContextShopDetails`

### Changed
- `.gitattributes`
- `.gitignore`
- `LICENSE`
- `Api.GeneralContractsApi`
- `Api.GeneralStoresApi`
- `Model.DayTime`
- `Model.GeneralStoresDTO`
- `Model.GeneralStoresList`
- `Model.GeneralStoresProductModel`
- `Model.PaymentTransactionsProductModel`
- `Model.SmartTransactionsApplicationContext`
- `phpunit.xml.dist`

### Removed
- `Model.GeneralStoresDTOType`


## [2.40.0] - 2023-10-17
[2.40.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.39.0...2.40.0

- *changed element type*: `legal_details` changed from `GeneralMerchantsLegalDetails` to `GeneralMerchantsLegalDetailsDTO` in `GeneralMerchantsPublicDataDTO`
- *renamed element*: `merchant_urls` renamed to `urls` in `GeneralMerchantsPublicDataDTO`
- *changed element type*: `cycle_executions` changed from `BillingCyclesItem` to `CycleExecutions` in `PaymentSubscriptionsProductModelBillingCycles`
- *changed default value*: `status` changed from `"active"` to `null` in `PaymentPlansProductModel` and `PaymentPlansDTO`

### Added
- `Model.CycleExecutions`
- `Model.GeneralMerchantsLegalDetailsDTO`

### Changed
- `Api.GeneralMerchantsApi`
- `Api.PaymentPlansApi`
- `Api.PaymentSubscriptionsApi`
- `Model.AddressComponents`
- `Model.BillingCyclesItem`
- `Model.GeneralMerchantsLegalDetails`
- `Model.GeneralMerchantsList`
- `Model.GeneralMerchantsProductModel`
- `Model.GeneralMerchantsPublicDataCompany`
- `Model.GeneralMerchantsPublicDataDTO`
- `Model.GeneralMerchantsUrls`
- `Model.GeneralMerchantsUser`
- `Model.GeneralMerchantsUserEmail`
- `Model.MerchantCategoryDataModel`
- `Model.PaymentPlanInterval`
- `Model.PaymentPlansDTO`
- `Model.PaymentPlansProductModel`
- `Model.PaymentSubscriptionsProductModel`
- `Model.PaymentSubscriptionsProductModelBillingCycles`


## [2.39.0] - 2023-09-26
[2.39.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.38.0...2.39.0

- *new element*: `currency` in `PaymentInvoicesProductModel`
- *new element*: `contract` in `PaymentTransactionsProductModel`
- *changed element*: `result` allows now boolean values too in `PaymentCrowdFundingData`

### Changed
- `Api.PaymentPayoutsApi`
- `Api.PaymentSecupayPayoutApi`
- `Model.DocumentLink`
- `Model.PaymentCrowdFundingData`
- `Model.PaymentInvoicesList`
- `Model.PaymentInvoicesProductModel`
- `Model.PaymentPayoutsProductModel`
- `Model.PaymentTransactionsProductModel`
- `Model.SecupayPayoutDTO`
- `Model.SecupayPayoutListItem`
- `Model.SecupayPayoutProductModel`
- `Model.SecupayPayoutWithoutCustomerDTO`
- `Model.SecupayTransactionListItem`


## [2.38.0] - 2023-09-20
[2.38.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.37.0...2.38.0

- documentation updates
- *new element*: `apiv2_products` in `GetAvailablePaymentMethodsDTO`
- *new element*: `deposited_amount`, `deducted_amount` and `result` in `PaymentCrowdFundingData`
- *new element*: `description` and `description_raw` in `PaymentTransactionsProductModel
- *fixed endpoint*: wrong endpoint url in `GeneralMerchantsApi.getMerchantCategories()`
- *changed response type*: `GeneralContractsApi.getAvailableCurrencies()` changed from `AvailableCurrencies` to `string[]`
- *changed response type*: `PaymentContractsApi.paymentContractsIdPaymentMethodsGet()` changed from `StringList` to `string[]`
- *removed element*: `total_amount` and `total_count` in `CrowdFundingDataDetails`
- *removed model*: `AvailableCurrencies`
- *removed model*: `StringList`

### Changed
- `Api.CardprocessingInvoicesApi`
- `Api.CardprocessingTransactionsApi`
- `Api.DocumentUploadsApi`
- `Api.GeneralContractsApi`
- `Api.GeneralMerchantsApi`
- `Api.GeneralStoresApi`
- `Api.LoyaltyCardgroupsApi`
- `Api.LoyaltyCardsApi`
- `Api.LoyaltyCustomersApi`
- `Api.LoyaltyMerchantcardsApi`
- `Api.LoyaltyTransactionsApi`
- `Api.PaymentContainersApi`
- `Api.PaymentContractsApi`
- `Api.PaymentCustomersApi`
- `Api.PaymentInvoicesApi`
- `Api.PaymentMandatesApi`
- `Api.PaymentPayoutsApi`
- `Api.PaymentPlansApi`
- `Api.PaymentSecupayCreditcardsApi`
- `Api.PaymentSecupayDebitsApi`
- `Api.PaymentSecupayInvoicesApi`
- `Api.PaymentSecupayPayoutApi`
- `Api.PaymentSecupayPrepaysApi`
- `Api.PaymentSecupaySofortApi`
- `Api.PaymentSubscriptionsApi`
- `Api.PaymentTransactionsApi`
- `Api.PrepaidContractsApi`
- `Api.PrepaidItemsApi`
- `Api.PrepaidReportsApi`
- `Api.PrepaidSalesApi`
- `Api.PublicWebsiteApi`
- `Api.ServicesIdentrequestsApi`
- `Api.ServicesIdentresultsApi`
- `Api.ServicesUploadidentsApi`
- `Api.SmartDevicesApi`
- `Api.SmartRoutingsApi`
- `Api.SmartTemplatesApi`
- `Api.SmartTransactionsApi`
- `Model.BankAccountDescriptor`
- `Model.Contact`
- `Model.CreditCardDescriptor`
- `Model.CrowdFundingDataDetails`
- `Model.CrowdFundingDataOpenAmount`
- `Model.CrowdFundingDataOpenAmountInsideCancelPeriod`
- `Model.CrowdFundingDataOpenAmountOutsideCancellationPeriod`
- `Model.GetAvailablePaymentMethodsDTO`
- `Model.InvitedBy`
- `Model.LoyaltyMerchantcardsProductModel`
- `Model.MandateDTO`
- `Model.MandateProductModel`
- `Model.MoneyAmount`
- `Model.OneOfPaymentContainersDTOModelPrivate`
- `Model.OneOfSmartTransactionsDeliveryOptionsModel`
- `Model.PayPalDescriptor`
- `Model.PaymentCancelResultDetails`
- `Model.PaymentContainerMandate`
- `Model.PaymentContainersDTO`
- `Model.PaymentContainersDTOCustomer`
- `Model.PaymentContainersList`
- `Model.PaymentContainersProductModel`
- `Model.PaymentContext`
- `Model.PaymentContractsDTOClone`
- `Model.PaymentContractsDTOIFrameOpts`
- `Model.PaymentContractsDTORequestId`
- `Model.PaymentContractsProductModel`
- `Model.PaymentCrowdFundingData`
- `Model.PaymentCustomersDTO`
- `Model.PaymentCustomersList`
- `Model.PaymentCustomersProductModel`
- `Model.PaymentInformation`
- `Model.PaymentInstructions`
- `Model.PaymentMethodBreakdown`
- `Model.PaymentTransactionCancelDTO`
- `Model.PaymentTransactionsCheckStatus`
- `Model.PaymentTransactionsIncreaseAmountDTO`
- `Model.PaymentTransactionsProductModel`
- `Model.PaymentTransactionsShippingUrl`
- `Model.ProductExceptionPayload`
- `Model.ProductInstanceID`
- `Model.SecupayBaseBasketItem`
- `Model.SecupayBasketItem`
- `Model.SecupayRedirectUrl`
- `Model.SecupayTransactionProductDTO`
- `Model.SecupayTransactionProductDTOExperience`
- `Model.SecupayTransactionProductDTOSubscription`
- `Model.SecupayTransactionProductModel`
- `Model.SecupayTransactionProductModelUsedPaymentInstrument`
- `Model.SecupayTransactionSetShippingInformationDTO`
- `Model.SmartTransactionPaymentContainerDTO`
- `Model.SmartTransactionPaymentCustomerDTO`
- `Model.SmartTransactionsApplicationContext`
- `Model.SmartTransactionsApplicationContextIframeOpts`
- `Model.SmartTransactionsApplicationContextLocks`
- `Model.SmartTransactionsApplicationContextReturnUrls`
- `Model.SmartTransactionsBaseProduct`
- `Model.SmartTransactionsBasket`
- `Model.SmartTransactionsBasketInfo`
- `Model.SmartTransactionsBasketProduct`
- `Model.SmartTransactionsBasketProductGroup`
- `Model.SmartTransactionsBonusProducts`
- `Model.SmartTransactionsCheckin`
- `Model.SmartTransactionsCheckoutLinks`
- `Model.SmartTransactionsCollectionModel`
- `Model.SmartTransactionsCommunication`
- `Model.SmartTransactionsContainer`
- `Model.SmartTransactionsDTO`
- `Model.SmartTransactionsIdent`
- `Model.SmartTransactionsMerchant`
- `Model.SmartTransactionsPaymentLinks`
- `Model.SmartTransactionsPreTransactionModel`
- `Model.SmartTransactionsPrepaidSalesDetails`
- `Model.SmartTransactionsPrepare`
- `Model.SmartTransactionsPrepareCallbackUrls`
- `Model.SmartTransactionsProductModel`
- `Model.SmartTransactionsReceipt`
- `Model.SmartTransactionsReceiptValue`
- `Model.SmartTransactionsShippingModel`
- `Model.SmartTransactionsSubBasketProduct`
- `Model.SmartTransactionsTimeSlot`
- `Model.UploadMandateDTO`
- `Model.UploadMandateProductModel`

### Removed
- `Model.AvailableCurrencies`
- `Model.StringList`


## [2.37.0] - 2023-08-30
[2.37.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.36.0...2.37.0

- *new element*: `payment_config` in `IframeOptions`
- *fix*: loading `DefaultConfiguration` was incorrect in the `Authenticator` class
- *improvement*: generic handling of multiple response formats (oneOf) in `ObjectSerializer` 

### Added
- `Model.ApplepayPaymentConfig`
- `Model.GooglepayPaymentConfig`
- `Model.IframeOptionsPaymentConfig`

### Changed
- `.gitignore`
- `lib/ApiClient.php`
- `lib/Authentication/Authenticator.php`
- `lib/HeaderSelector.php`
- `Model.IframeOptions`
- `lib/ObjectSerializer.php`


## [2.36.0] - 2023-08-29
[2.36.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.35.0...2.36.0

- *new element*: `project_name` in `GeneralAccountsAssignModelAssignment`
- *new endpoint*: `GeneralMerchantsApi->getMerchantCategories()`
- *new endpoint*: `PaymentTransactionsApi->getPaymentInstructionsForPaymentTransaction()`
- *new endpoint*: `PaymentTransactionsApi->getPaymentInstructionsForSmartTransaction()`
- *new endpoint*: `PaymentReportsApi->createReport()`
- *new endpoint*: `PaymentSalesApi->confirm()`
- *changed response object*: from `SecupayPayoutProductModel` to `SecupayPayoutWithoutCustomerResponse` in `PaymentSecupaypayoutApi`
- *changed element*: from `Payout_list` to `payout_list` in `SecupayPayoutDTO`
- *new element*: `trans_id` in `SecupayPayoutListItem`

### Added
- `Model.MerchantCategoryDataModel`
- `Model.PaymentTransactionsInstructionsModel`
- `Model.PrepaidReportsDTO`
- `Model.SecupayPayoutWithoutCustomerResponse`

### Changed
- `Api.GeneralMerchantsApi`
- `Api.PaymentSecupayPayoutApi`
- `Api.PaymentTransactionsApi`
- `Api.PrepaidReportsApi`
- `Api.PrepaidSalesApi`
- `Model.Address`
- `Model.AddressComponents`
- `Model.Aggregate`
- `Model.AggregationResult`
- `Model.AggregationTimeResult`
- `Model.ApplePayDescriptor`
- `Model.ApplePayDescriptorHeader`
- `Model.AssignedBy`
- `Model.AvailableCountry`
- `Model.AvailableCurrencies`
- `Model.BackgroundImageOption`
- `Model.BankAccountDescriptor`
- `Model.BaseProductModel`
- `Model.BillingCyclesItem`
- `Model.CardPin`
- `Model.CardprocessingInvoicesList`
- `Model.CardprocessingInvoicesProductModel`
- `Model.CardprocessingTransactionsList`
- `Model.CardprocessingTransactionsProductModel`
- `Model.CheckoutConfiguration`
- `Model.CheckoutConfigurationNotifications`
- `Model.ClientIdValue`
- `Model.ClientSecretValue`
- `Model.Contact`
- `Model.ContactData`
- `Model.CreatedField`
- `Model.CreditCardDescriptor`
- `Model.CrowdFundingDataDetails`
- `Model.CrowdFundingDataOpenAmount`
- `Model.CrowdFundingDataOpenAmountInsideCancelPeriod`
- `Model.CrowdFundingDataOpenAmountOutsideCancellationPeriod`
- `Model.Currency`
- `Model.DayTime`
- `Model.DocumentLink`
- `Model.DocumentUploadsBaseProductModel`
- `Model.DocumentUploadsDTOContent`
- `Model.DocumentUploadsProductModel`
- `Model.DocumentUploadsProductModelWithContent`
- `Model.EanOrGtin`
- `Model.FileToUpload`
- `Model.GeneralContractsDTO`
- `Model.GeneralContractsList`
- `Model.GeneralContractsProductModel`
- `Model.GeneralContractsTransferBalanceModel`
- `Model.GeneralContractsTransferBalanceModelBalances`
- `Model.GeneralMerchantsLegalDetails`
- `Model.GeneralMerchantsList`
- `Model.GeneralMerchantsProductModel`
- `Model.GeneralMerchantsPublicDataCompany`
- `Model.GeneralMerchantsPublicDataDTO`
- `Model.GeneralMerchantsPublicDataModel`
- `Model.GeneralMerchantsUrls`
- `Model.GeneralMerchantsUser`
- `Model.GeneralMerchantsUserEmail`
- `Model.GeneralStoresDTO`
- `Model.GeneralStoresDTOReason`
- `Model.GeneralStoresDTOType`
- `Model.GeneralStoresList`
- `Model.GeneralStoresProductModel`
- `Model.GeoAddress`
- `Model.GeoAddressGeometry`
- `Model.GetAvailablePaymentMethodsDTO`
- `Model.GooglePayDescriptor`
- `Model.GooglePayDescriptorIntermediateSigningKey`
- `Model.IdentDocument`
- `Model.IdentDocumentData`
- `Model.IdentProviderValue`
- `Model.IdentTypeValue`
- `Model.IdentificationCustomData`
- `Model.IdentificationProcess`
- `Model.IdentrequestPerson`
- `Model.IdentrequestPersonDTO`
- `Model.IdentrequestRedirectUrls`
- `Model.IdentresultPerson`
- `Model.IframeOptions`
- `Model.InvitedBy`
- `Model.IsoCountryCode`
- `Model.IsoDate`
- `Model.IsoDateTime`
- `Model.ItemGroup`
- `Model.ListResponse`
- `Model.LoyaltyCardgroupsDTO`
- `Model.LoyaltyCardgroupsDTOCheckPasscodeEnabled`
- `Model.LoyaltyCardgroupsDTOMerchant`
- `Model.LoyaltyCardgroupsList`
- `Model.LoyaltyCardgroupsProductModel`
- `Model.LoyaltyCardsDTOAccount`
- `Model.LoyaltyCardsList`
- `Model.LoyaltyCardsProductModel`
- `Model.LoyaltyCustomersDTO`
- `Model.LoyaltyCustomersList`
- `Model.LoyaltyCustomersPaymentContainerModel`
- `Model.LoyaltyCustomersProductModel`
- `Model.LoyaltyMerchantcardsCardBalanceReceipt`
- `Model.LoyaltyMerchantcardsDTO`
- `Model.LoyaltyMerchantcardsDTOCardBalanceReceipt`
- `Model.LoyaltyMerchantcardsDTOCheckPasscode`
- `Model.LoyaltyMerchantcardsDTOCreateMerchantcards`
- `Model.LoyaltyMerchantcardsDTOCsc`
- `Model.LoyaltyMerchantcardsDTOCustomer`
- `Model.LoyaltyMerchantcardsDTOLock`
- `Model.LoyaltyMerchantcardsDTONewPasscode`
- `Model.LoyaltyMerchantcardsDTOPaymentContainer`
- `Model.LoyaltyMerchantcardsDTOResetPasscode`
- `Model.LoyaltyMerchantcardsDTOTransaction`
- `Model.LoyaltyMerchantcardsDTOValidateMerchantCard`
- `Model.LoyaltyMerchantcardsList`
- `Model.LoyaltyMerchantcardsProductModel`
- `Model.LoyaltyMerchantcardsProductWithReceiptModel`
- `Model.LoyaltyMerchantcardsValidateMerchantCard`
- `Model.LoyaltyTransactionsDTOCard`
- `Model.LoyaltyTransactionsDTOCardgroup`
- `Model.LoyaltyTransactionsDTOMerchant`
- `Model.LoyaltyTransactionsDTOMerchantcard`
- `Model.LoyaltyTransactionsDTORelatedTransactions`
- `Model.LoyaltyTransactionsDTOStore`
- `Model.LoyaltyTransactionsList`
- `Model.LoyaltyTransactionsProductModel`
- `Model.MandateDTO`
- `Model.MandateProductModel`
- `Model.MoneyAmount`
- `Model.ObjectId`
- `Model.ObjectType`
- `Model.OpenHours`
- `Model.ParentModel`
- `Model.ParentObj`
- `Model.PayPalDescriptor`
- `Model.PaymentCancelResult`
- `Model.PaymentCancelResultDetails`
- `Model.PaymentContainerMandate`
- `Model.PaymentContainersDTO`
- `Model.PaymentContainersDTOCustomer`
- `Model.PaymentContainersList`
- `Model.PaymentContainersProductModel`
- `Model.PaymentContext`
- `Model.PaymentContractsDTOClone`
- `Model.PaymentContractsDTOIFrameOpts`
- `Model.PaymentContractsDTORequestId`
- `Model.PaymentContractsDTORequestIdAdditionalData`
- `Model.PaymentContractsDTORequestIdAdditionalDataCreateCard`
- `Model.PaymentContractsList`
- `Model.PaymentContractsProductModel`
- `Model.PaymentContractsRequestIdResult`
- `Model.PaymentCrowdFundingData`
- `Model.PaymentCustomersDTO`
- `Model.PaymentCustomersList`
- `Model.PaymentCustomersProductModel`
- `Model.PaymentInformation`
- `Model.PaymentInstructions`
- `Model.PaymentInvoicesList`
- `Model.PaymentInvoicesProductModel`
- `Model.PaymentLinkOptions`
- `Model.PaymentMandatesDTO`
- `Model.PaymentMandatesList`
- `Model.PaymentMandatesProductModel`
- `Model.PaymentMethodBreakdown`
- `Model.PaymentPayoutsList`
- `Model.PaymentPayoutsProductModel`
- `Model.PaymentPlanInterval`
- `Model.PaymentPlansDTO`
- `Model.PaymentPlansList`
- `Model.PaymentPlansProductModel`
- `Model.PaymentSubscriptionsList`
- `Model.PaymentSubscriptionsProductModel`
- `Model.PaymentSubscriptionsProductModelBillingCycles`
- `Model.PaymentTransactionCancelDTO`
- `Model.PaymentTransactionsCheckStatus`
- `Model.PaymentTransactionsIncreaseAmountDTO`
- `Model.PaymentTransactionsList`
- `Model.PaymentTransactionsProductModel`
- `Model.PaymentTransactionsProductModelCustomer`
- `Model.PaymentTransactionsProductModelDetails`
- `Model.PaymentTransactionsShippingUrl`
- `Model.PrepaidItemsBaseProductModel`
- `Model.PrepaidItemsList`
- `Model.PrepaidItemsProductModel`
- `Model.PrepaidMappingZvt`
- `Model.PrepaidMappingZvtItem`
- `Model.PrepaidReportsList`
- `Model.PrepaidReportsProductModel`
- `Model.PrepaidSalesItem`
- `Model.PrepaidSalesList`
- `Model.PrepaidSalesProductDTO`
- `Model.PrepaidSalesProductModel`
- `Model.PrepaidSalesSmartDevice`
- `Model.PrepaidZvtDTO`
- `Model.ProductExceptionPayload`
- `Model.ProductInstanceID`
- `Model.ProductInstanceUID`
- `Model.ReceiptType`
- `Model.ReceiptTypeValue`
- `Model.ReceiptValue`
- `Model.ResultBoolean`
- `Model.SecupayBaseBasketItem`
- `Model.SecupayBasketItem`
- `Model.SecupayPayoutDTO`
- `Model.SecupayPayoutDTOOptData`
- `Model.SecupayPayoutListItem`
- `Model.SecupayPayoutProductModel`
- `Model.SecupayPayoutWithoutCustomerDTO`
- `Model.SecupayRedirectUrl`
- `Model.SecupaySubTransactionProductModel`
- `Model.SecupayTransactionCancelDTO`
- `Model.SecupayTransactionCaptureDTO`
- `Model.SecupayTransactionDTOExternalInvoicePdf`
- `Model.SecupayTransactionExternalInvoicePdf`
- `Model.SecupayTransactionExternalInvoicePdfDocument`
- `Model.SecupayTransactionListItem`
- `Model.SecupayTransactionProductDTO`
- `Model.SecupayTransactionProductDTOExperience`
- `Model.SecupayTransactionProductDTOOptData`
- `Model.SecupayTransactionProductDTOSubscription`
- `Model.SecupayTransactionProductModel`
- `Model.SecupayTransactionProductModelUsedPaymentInstrument`
- `Model.SecupayTransactionReverseAccrualDTO`
- `Model.SecupayTransactionSetShippingInformationDTO`
- `Model.SecupayTransactionUpdateBasketDTO`
- `Model.ServicesIdentrequestsList`
- `Model.ServicesIdentrequestsProductDTO`
- `Model.ServicesIdentrequestsProductModel`
- `Model.ServicesIdentresultsList`
- `Model.ServicesIdentresultsProductModel`
- `Model.SmartDeviceProductsCollect`
- `Model.SmartDeviceProductsEasycredit`
- `Model.SmartDeviceProductsEnabled`
- `Model.SmartDeviceProductsEnabledWithTid`
- `Model.SmartDeviceProductsLoyalty`
- `Model.SmartDeviceProductsPrepaid`
- `Model.SmartDeviceProductsVtm`
- `Model.SmartDeviceProductsWebterminalConfig`
- `Model.SmartDeviceProductsWebterminalConfigAllowedActions`
- `Model.SmartDeviceUserPin`
- `Model.SmartDevicesDTO`
- `Model.SmartDevicesDevice`
- `Model.SmartDevicesList`
- `Model.SmartDevicesProductModel`
- `Model.SmartDevicesProducts`
- `Model.SmartRoutingPriority`
- `Model.SmartRoutingsAssign`
- `Model.SmartRoutingsDTO`
- `Model.SmartRoutingsList`
- `Model.SmartRoutingsProductModel`
- `Model.SmartTemplatesComponentModel`
- `Model.SmartTemplatesElementModel`
- `Model.SmartTemplatesList`
- `Model.SmartTemplatesProductModel`
- `Model.SmartTransactionPaymentContainerDTO`
- `Model.SmartTransactionPaymentCustomerDTO`
- `Model.SmartTransactionsApplicationContext`
- `Model.SmartTransactionsApplicationContextIframeOpts`
- `Model.SmartTransactionsApplicationContextLocks`
- `Model.SmartTransactionsApplicationContextReturnUrls`
- `Model.SmartTransactionsBaseProduct`
- `Model.SmartTransactionsBasket`
- `Model.SmartTransactionsBasketInfo`
- `Model.SmartTransactionsBasketProduct`
- `Model.SmartTransactionsBasketProductGroup`
- `Model.SmartTransactionsBonusProducts`
- `Model.SmartTransactionsCheckin`
- `Model.SmartTransactionsCheckoutLinks`
- `Model.SmartTransactionsCollectionModel`
- `Model.SmartTransactionsCommunication`
- `Model.SmartTransactionsContainer`
- `Model.SmartTransactionsDTO`
- `Model.SmartTransactionsIdent`
- `Model.SmartTransactionsList`
- `Model.SmartTransactionsMerchant`
- `Model.SmartTransactionsPaymentLinks`
- `Model.SmartTransactionsPreTransactionModel`
- `Model.SmartTransactionsPrepaidSalesDetails`
- `Model.SmartTransactionsPrepare`
- `Model.SmartTransactionsPrepareCallbackUrls`
- `Model.SmartTransactionsProductModel`
- `Model.SmartTransactionsReceipt`
- `Model.SmartTransactionsReceiptValue`
- `Model.SmartTransactionsSetDeliveryModel`
- `Model.SmartTransactionsShippingModel`
- `Model.SmartTransactionsSubBasketProduct`
- `Model.SmartTransactionsTimeSlot`
- `Model.Store`
- `Model.StringList`
- `Model.TaxRate`
- `Model.ThirdPartyConfigurationDTO`
- `Model.ThirdPartyConfigurationProductModel`
- `Model.ThirdPartyEnvironment`
- `Model.ThirdPartyEnvironmentDTO`
- `Model.ThirdPartyEnvironmentSettings`
- `Model.ThirdPartyEnvironmentSettingsDTO`
- `Model.UpdatedField`
- `Model.UploadMandateDTO`
- `Model.UploadMandateProductModel`
- `Model.UploadidentsProductDTO`
- `Model.UploadidentsProductModel`
- `Model.UserAddressData`
- `Model.UserData`
- `Model.ValueField`
- `Model.VirtualTerminalDataModel`


## [2.35.0] - 2023-07-27
[2.35.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.34.0...2.35.0

- *fixed endpoint*: `SmartDevicesApi->getRouting()` used a wrong url 

### Changed
- `Api.SmartDevicesApi`


## [2.34.0] - 2023-07-19
[2.34.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.33.0...2.34.0

- *new element*: `description` in `GeneralContractsProductModel`
- *new element*: `notes`, `invoice_reference`, `tid`, `merchant_category` and `account_statement_text` in `PaymentContractsDTORequestId`

### Changed
- `Model.GeneralContractsProductModel`
- `Model.PaymentContractsDTORequestId`


## [2.33.0] - 2023-07-19
[2.33.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.32.1...2.33.0

- *new endpoint*: `DocumentUploadsApi->download()`
- *new endpoint*: `DocumentUploadsApi->getOne()`
- *new endpoint*: `GeneralMerchantsApi->updatePublicData()`

### Added
- `Model.DocumentUploadsProductModelWithContent`
- `Model.GeneralMerchantsPublicDataDTO`

### Changed
- `Api.DocumentUploadsApi`
- `Api.GeneralMerchantsApi`
- `Model.DocumentUploadsDTOContent`
- `Model.DocumentUploadsProductModel`


## [2.32.1] - 2023-07-13
[2.32.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.32.0...2.32.1

### Added
- `Model.GooglePayDescriptorIntermediateSigningKey`

### Changed
- `Model.GooglePayDescriptor`
- `Model.OneOfPaymentContainersDTOModelPrivate`


## [2.32.0] - 2023-06-06
[2.32.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.31.0...2.32.0

- *new endpoint*: `GeneralContractsApi->addPaymentLinkConfiguration()`
- *new endpoint*: `GeneralContractsApi->addThirdPartyConfiguration()`
- *new endpoint*: `GeneralContractsApi->getAvailableCurrencies()`
- *new endpoint*: `GeneralContractsApi->getIframeOptions()`
- *new endpoint*: `GeneralContractsApi->getThirdPartyConfiguration()`
- *new endpoint*: `GeneralContractsApi->patchContract()`
- *new endpoint*: `GeneralContractsApi->patchThirdPartyConfiguration()`
- *new endpoint*: `GeneralContractsApi->removeThirdPartyConfiguration()`
- *new endpoint*: `GeneralContractsApi->updateContract()`
- *new endpoint*: `GeneralContractsApi->updateThirdPartyConfiguration()`
- *new endpoint*: `PaymentMandatesApi`
- *new element*: `paypal_configuration`, `easycredit_configuration` and `checkout_configuration` in `GeneralContractsProductModel`
- *changed element type*: `merchant` changed from `ProductInstanceUID` to `GeneralMerchantsProductModel` in `GeneralContractsProductModel`

### Added
- `Api.PaymentMandatesApi`
- `Model.AvailableCurrencies`
- `Model.CheckoutConfiguration`
- `Model.CheckoutConfigurationNotifications`
- `Model.ClientIdValue`
- `Model.ClientSecretValue`
- `Model.GeneralContractsDTO`
- `Model.IframeOptions`
- `Model.IsoDate`
- `Model.PaymentMandatesDTO`
- `Model.PaymentMandatesList`
- `Model.PaymentMandatesProductModel`
- `Model.ThirdPartyConfigurationDTO`
- `Model.ThirdPartyConfigurationProductModel`
- `Model.ThirdPartyEnvironment`
- `Model.ThirdPartyEnvironmentDTO`
- `Model.ThirdPartyEnvironmentSettings`
- `Model.ThirdPartyEnvironmentSettingsDTO`

### Changed
- `Api.GeneralContractsApi`
- `Api.PaymentContractsApi`
- `Model.GeneralContractsProductModel`
- `Model.GeneralContractsTransferBalanceModel`
- `Model.GeneralContractsTransferBalanceModelBalances`
- `Model.PaymentLinkOptions`


## [2.31.0] - 2023-06-01
[2.31.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.30.2...2.31.0

- *new endpoint*: `GeneralContractsApi->getTransferBalance()`
- *new endpoint*: `PaymentTransactionsApi->assignTransferBalance()`
- *new element*: `acceptance_points` and `two_fa` in `GeneralMerchantsProductModel`
- *new element*: `forename`, `surname`, `project_name` and `email` in `GeneralMerchantsUser`
- *new element*: `identcase` and `assignment` in `ServicesIdentrequestsProductModel`
- *renamed element*: `provider` to `provider_id` in `IdentrequestPerson`
- *renamed element*: `redirect_url` to `redirect_urls` in `ServicesIdentrequestsProductDTO` and `ServicesIdentrequestsProductModel`
- *changed element type*: `provider` and `type` changed from enum to `string` in `ServicesIdentrequestsProductDTO` and `ServicesIdentrequestsProductModel`
- *changed element type*: `contract` changed from `ProductInstanceUID` to `BaseProductModel`  in `ServicesIdentrequestsProductModel`
- *removed element*: `object` and `id` in `GeneralMerchantsUser`
- *removed parent class*: `Contact` from `IdentrequestPersonDTO`

### Added
- `Model.GeneralContractsTransferBalanceModel`
- `Model.GeneralContractsTransferBalanceModelBalances`
- `Model.GeneralMerchantsUserEmail`
- `Model.IdentProviderValue`
- `Model.IdentTypeValue`
- `Model.ListResponse`

### Changed
- `Api.GeneralContractsApi`
- `Api.PaymentTransactionsApi`
- `Model.GeneralMerchantsProductModel`
- `Model.GeneralMerchantsUser`
- `Model.IdentrequestPerson`
- `Model.IdentrequestPersonDTO`
- `Model.InvitedBy`
- `Model.ServicesIdentrequestsProductDTO`
- `Model.ServicesIdentrequestsProductModel`


## [2.30.2] - 2023-06-01
[2.30.2]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.30.1...2.30.2

documentation fixes

### Changed
- ``Api.CardprocessingInvoicesApi``
- ``Api.CardprocessingTransactionsApi``
- ``Api.GeneralContractsApi``
- ``Api.GeneralMerchantsApi``
- ``Api.GeneralStoresApi``
- ``Api.LoyaltyCardgroupsApi``
- ``Api.LoyaltyCardsApi``
- ``Api.LoyaltyCustomersApi``
- ``Api.LoyaltyMerchantcardsApi``
- ``Api.LoyaltyTransactionsApi``
- ``Api.PaymentContainersApi``
- ``Api.PaymentContractsApi``
- ``Api.PaymentCustomersApi``
- ``Api.PaymentInvoicesApi``
- ``Api.PaymentPayoutsApi``
- ``Api.PaymentPlansApi``
- ``Api.PaymentSubscriptionsApi``
- ``Api.PaymentTransactionsApi``
- ``Api.PrepaidItemsApi``
- ``Api.PrepaidReportsApi``
- ``Api.PrepaidSalesApi``
- ``Api.ServicesIdentrequestsApi``
- ``Api.ServicesIdentresultsApi``
- ``Api.SmartDevicesApi``
- ``Api.SmartRoutingsApi``
- ``Api.SmartTemplatesApi``
- ``Api.SmartTransactionsApi``
- ``Model.ModelInterface``
- ``Model.PrepaidItemsProductModel``


## [2.30.1] - 2023-06-01
[2.30.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.30.0...2.30.1

small fixes and some style changes

### Changed
- `lib/ApiException.php`
- `Model.ModelInterface`
- `Model.OneOfPaymentContainersDTOModelPrivate`
- `Model.OneOfSmartTransactionsDeliveryOptionsModel`
- `Model.PaymentContractsDTORequestIdAdditionalDataCreateCard`
- `Model.ServicesIdentrequestsProductDTO`
- `Model.ServicesIdentrequestsProductModel`
- `lib/ObjectSerializer.php`



## [2.30.0] - 2023-05-26
[2.30.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.19.0...2.30.0

This is only a maintenance release. The next release will be a new major version.

### Changed
- **BREAKING:** require PHP 8.0 or higher
- **BREAKING:** support ``psr/cache`` version 1.x, 2.x and 3.x
- **BREAKING:** support ``psr/log`` version 1.x, 2.x and 3.x
- support ``phpunit/phpunit`` version 10.x too


## [2.19.0] - 2023-02-23
[2.19.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.18.0...2.19.0

### Added
- `Api.PaymentTransactionsApi.checkStatus()`
- `Model.PaymentTransactionCancelDTO` element `reduce_amount_by`
- `Model.PaymentTransactionsCheckStatus`
- `Model.SecupayTransactionCancelDTO` element `reduce_amount_by`

### Fixed
- `Model.PaymentTransactionsProductModelDetails` renamed element `status_text_simple` to `status_simple_text`


## [2.18.0] - 2023-01-11
[2.18.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.17.0...2.18.0

### Added
- `Api.PrepaidReportsApi`
- `Model.PrepaidReportsList`
- `Model.PrepaidReportsProductModel`

### Changed

### Removed


## [2.17.0] - 2022-12-19
[2.17.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.16.0...2.17.0

### Added
- `Api.PaymentSecupayPayoutApi.paymentSecupaypayoutWithoutCustomerPost()`
- `Api.PrepaidSalesApi.getAll()`
- `Api.PrepaidSalesApi.getOne()`
- `Api.SmartTransactionsApi.abortTransaction()`
- `Api.SmartTransactionsApi.updatePaymentContainer()`
- `Model.Aggregate`
- `Model.AggregationResult`
- `Model.AggregationTimeResult`
- `Model.ApplePayDescriptorHeader`
- `Model.PaymentContainersDTO` element `merchant_id`
- `Model.PaymentContractsDTOClone` element `contract_id`
- `Model.PaymentContractsDTORequestId` element `contract_id`, `payment_data`, `url_push`, `additional_data`
- `Model.PaymentContractsDTORequestIdAdditionalData`
- `Model.PaymentContractsDTORequestIdAdditionalDataCreateCard`
- `Model.PaymentPlansDTO` element `merchant_id`
- `Model.PrepaidSalesList`
- `Model.SecupayPayoutListItem`
- `Model.SecupayPayoutWithoutCustomerDTO`
- `Model.SmartTransactionPaymentContainerDTO` element `merchant_id`

#### element `aggregate`, `meta`, `validate`, `scroll_expire`, `scroll_id` and `preset` added to the `getAll()` methods
- `Api.CardprocessingInvoicesApi`
- `Api.CardprocessingTransactionsApi`
- `Api.GeneralContractsApi`
- `Api.GeneralMerchantsApi`
- `Api.GeneralStoresApi`
- `Api.LoyaltyCardgroupsApi`
- `Api.LoyaltyCardsApi`
- `Api.LoyaltyCustomersApi`
- `Api.LoyaltyMerchantcardsApi`
- `Api.LoyaltyTransactionsApi`
- `Api.PaymentContainersApi`
- `Api.PaymentContractsApi`
- `Api.PaymentCustomersApi`
- `Api.PaymentInvoicesApi`
- `Api.PaymentPayoutsApi`
- `Api.PaymentPlansApi`
- `Api.PaymentSecupayPayoutApi`
- `Api.PaymentSubscriptionsApi`
- `Api.PaymentTransactionsApi`
- `Api.PrepaidItemsApi`
- `Api.PrepaidSalesApi`
- `Api.ServicesIdentrequestsApi`
- `Api.ServicesIdentresultsApi`
- `Api.SmartDevicesApi`
- `Api.SmartRoutingsApi`
- `Api.SmartTemplatesApi`
- `Api.SmartTransactionsApi`
- `Model.CardprocessingInvoicesList`
- `Model.CardprocessingInvoicesProductModel`
- `Model.CardprocessingTransactionsList`
- `Model.CardprocessingTransactionsProductModel`
- `Model.GeneralContractsList`
- `Model.GeneralContractsProductModel`
- `Model.GeneralMerchantsList`
- `Model.GeneralMerchantsProductModel`
- `Model.GeneralStoresList`
- `Model.GeneralStoresProductModel`
- `Model.LoyaltyCardgroupsList`
- `Model.LoyaltyCardgroupsProductModel`
- `Model.LoyaltyCardsList`
- `Model.LoyaltyCardsProductModel`
- `Model.LoyaltyCustomersList`
- `Model.LoyaltyCustomersProductModel`
- `Model.LoyaltyMerchantcardsList`
- `Model.LoyaltyMerchantcardsProductModel`
- `Model.LoyaltyTransactionsList`
- `Model.LoyaltyTransactionsProductModel`
- `Model.PaymentContainersList`
- `Model.PaymentContainersProductModel`
- `Model.PaymentContractsList`
- `Model.PaymentContractsProductModel`
- `Model.PaymentCustomersList`
- `Model.PaymentCustomersProductModel`
- `Model.PaymentInvoicesList`
- `Model.PaymentInvoicesProductModel`
- `Model.PaymentPayoutsList`
- `Model.PaymentPayoutsProductModel`
- `Model.PaymentPlansList`
- `Model.PaymentPlansProductModel`
- `Model.PaymentSubscriptionsList`
- `Model.PaymentSubscriptionsProductModel`
- `Model.PaymentTransactionsList`
- `Model.PaymentTransactionsProductModel`
- `Model.PrepaidItemsList`
- `Model.PrepaidItemsProductModel`
- `Model.PrepaidSalesProductModel`
- `Model.ServicesIdentrequestsList`
- `Model.ServicesIdentrequestsProductModel`
- `Model.ServicesIdentresultsList`
- `Model.ServicesIdentresultsProductModel`
- `Model.SmartDevicesList`
- `Model.SmartDevicesProductModel`
- `Model.SmartRoutingsList`
- `Model.SmartRoutingsProductModel`
- `Model.SmartTemplatesList`
- `Model.SmartTemplatesProductModel`
- `Model.SmartTransactionsList`
- `Model.SmartTransactionsProductModel`

### Changed
- `Model.ApplePayDescriptor` element `header` from `object` to `ApplePayDescriptorHeader`
- `Model.SmartTransactionPaymentContainerDTO` element `customer` from `PaymentContainersDTOCustomer` to `BaseProductModel`

### Removed
- `Api.PaymentContainersApi.paymentContainersIdAssignSecondaryIdDelete()`
- `Api.PaymentContainersApi.paymentContainersIdAssignSecondaryIdPost()`
- `Model.ACC_ID`
- `Model.ACC_Object`
- `Model.MRC_ID`
- `Model.MRC_Object`
- `Model.PCO_ID`
- `Model.PCO_Object`
- `Model.PIG_ID`
- `Model.PIG_Object`



## [2.16.0] - 2022-11-17
[2.16.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.15.0...2.16.0

### Added
- `Api.CardprocessingInvoicesApi`
- `Api.CardprocessingTransactionsApi`
- `Api.GeneralContractsApi.getAvailablePaymentMethodsForTransaction()`
- `Api.PaymentInvoicesApi`
- `Api.PaymentPayoutsApi`
- `Model.ACC_ID`
- `Model.ACC_Object`
- `Model.CardprocessingInvoicesList`
- `Model.CardprocessingInvoicesProductModel`
- `Model.CardprocessingTransactionsList`
- `Model.CardprocessingTransactionsProductModel`
- `Model.DocumentLink`
- `Model.ParentObj` element `ref_type_raw` and `hierarchy`
- `Model.PaymentInvoicesList`
- `Model.PaymentInvoicesProductModel`
- `Model.PaymentPayoutsList`
- `Model.PaymentPayoutsProductModel`
- `Model.PaymentTransactionsProductModel` element `related_transactions`, `subscription`, `completion_date`, `incoming_payment_purpose`, `incoming_payment_iban`, `incoming_payment_bic`, `order_id`
- `Model.SecupayPayoutProductModel` element `payment_id`
- `Model.SmartDeviceProductsCollect`
- `Model.SmartDeviceProductsEasycredit`
- `Model.SmartDeviceProductsEnabledWithTid`
- `Model.SmartDeviceProductsLoyalty`
- `Model.SmartDeviceProductsVtm`
- `Model.SmartDeviceProductsWebterminalConfig`
- `Model.SmartDeviceProductsWebterminalConfigAllowedActions`
- `Model.SmartDeviceProductsPrepaid` element `endofday`, `password` and `simulate`
- `Model.SmartDevicesProductModel` element `updated` and `connection_type`
- `Model.SmartDevicesProducts` element `support`, `bonroll`, `bvb` and `easycredit`

### Changed
- `Model.IdentificationProcess` element `identificatontime` renamed to `identificationtime`
- `Model.SmartDeviceProductsPrepaid` extends now from `Model.SmartDeviceProductsEnabledWithTid`
- `Model.SmartDevicesProducts` element `collect` from `Model.SmartDeviceProductsEnabled` to `Model.SmartDeviceProductsCollect`
- `Model.SmartDevicesProducts` element `loyalty` from `Model.SmartDeviceProductsEnabled` to `Model.SmartDeviceProductsLoyalty`
- `Model.SmartDevicesProducts` element `smart` and `cashreg` from `Model.SmartDeviceProductsEnabled` to `Model.SmartDeviceProductsEnabledWithTid`
- `Model.SmartDevicesProducts` element `vtm` from `Model.SmartDeviceProductsEnabled` to `Model.SmartDeviceProductsVtm`

### Removed
- `Model.ParentObj` element `relation_type`
- `Model.SmartDeviceProductsPrepaid` element `simulate_force`
- `Model.SmartDevicesProducts` element `showcase`
- .swagger-codegen/VERSION


## [2.15.0] - 2022-09-30
[2.15.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.14.0...2.15.0

### Added
- `Model.SmartTemplatesElementModel` element `order`
- `Model.SmartTemplatesComponentModel` element `order`
- `Model.SmartTemplatesElementModel` element `name`
- `Model.SmartTemplatesElementModel` element `property`
- `Model.SmartTemplatesElementModel` element `elements`
- `Model.PaymentInstructions` element `interest`
- `Model.PaymentInstructions` element `total_value`
- `Model.PaymentInstructions` element `number_of_installments`
- `Model.PaymentInstructions` element `installment`
- `Model.PaymentInstructions` element `last_installment`


### Removed
- `Model.SmartTemplatesElementModel` element `id`
- `Model.SmartTemplatesElementModel` element `accordion_elements`
- `Model.SmartTemplatesElementModel` element `form_elements`
- `Model.SmartTemplatesComponentModel` element `id`
- `Model.SmartTemplatesAccordionModel`
- `Model.SmartTemplatesFormModel`


## [2.14.0] - 2022-07-15
[2.14.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.13.0...2.14.0

### Added
- `Api.GeneralContractsApi.terminate()`
- `Model.PaymentContext` element `accrual`
- `Model.Contact` element `name`
- `Model.LoyaltyCustomersDTO` element `consent_for_communication`
- `Model.MRC_ID`
- `Model.MRC_Object`
- `Model.PCO_ID`
- `Model.PCO_Object`
- `Model.PIG_ID`
- `Model.PIG_Object`
- `Model.PrepaidItemsBaseProductModel`
- `Model.PrepaidItemsProductModel` element `enabled`

### Changed
- removed support for PHP 5.6 and PHP 7.0
- renamed class `PrepaidContractsProductApi` to `PrepaidContractsApi` to unify the namings
- renamed class `PrepaidSalesProductApi` to `PrepaidSalesApi` to unify the namings
- renamed class `ServicesUploadidentsProductApi` to `ServicesUploadidentsApi` to unify the namings
- `Model.PrepaidItemsProductModel` extends `PrepaidItemsBaseProductModel`

### Fixed
- fixed and cleaned up tests
- removed models from changelog of a previous release wasn't removed

### Removed
- `Model.Disabled`
- `Model.PaymentTransactionsInstructions`
- `Model.RawMerchantcardId`


## [2.13.0] - 2022-06-20
[2.13.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.12.1...2.13.0

### Deprecated
- `Model.LoyaltyMerchantcardsDTOCreateMerchantcards` element `assign` and `contract` 

### Added
- `Model.ApplePayDescriptor`
- `Model.GooglePayDescriptor`
- `Model.LoyaltyMerchantcardsDTOCustomer`
- `Model.LoyaltyMerchantcardsDTOCreateMerchantcards` element `customer`
- `Model.PaymentContainersProductModel` element `merchant`
- `Model.PayPalDescriptor`
- `Model.SmartTransactionPaymentContainerDTO`
- `Model.SmartTransactionPaymentCustomerDTO`

### Changed
- `Model.LoyaltyMerchantcardsDTOCardsAmount` renamed to `Model.LoyaltyMerchantcardsDTOCreateMerchantcards`
- `Model.SmartTransactionsDTO` element `customer` from `Model.PaymentCustomersProductModel` to `Model.SmartTransactionPaymentCustomerDTO`
- `Model.SmartTransactionsDTO` element `container` from `Model.ProductInstanceUID` to `Model.SmartTransactionPaymentContainerDTO`
- `Model.SmartTransactionsDTO` element `shipping_address` from `Model.PaymentCustomersProductModel` to `Model.SmartTransactionPaymentCustomerDTO`
- `Model.SmartTransactionsPrepare` element `customer` from `Model.ProductInstanceUID` to `Model.SmartTransactionPaymentCustomerDTO`
- `Model.SmartTransactionsPrepare` element `container` from `Model.ProductInstanceUID` to `Model.SmartTransactionPaymentContainerDTO`

### Fixed
- `Model.LoyaltyTransactionsProductModel` element `last_changee` renamed to `last_change`
- typos in descriptions

### Removed
- `Model.GeneralMerchantsDTO`
- `Model.LoyaltyCustomersContactDTO`
- `Model.PaymentTransactionsCancelList`
- `Model.ResultAlwaysTrue`
- `Model.ResultTrueOrFalse`
- `Model.SmartTransactionsPrepare` element `device_source`, `is_demo`, `is_paypal_basic`, `mode` and `method` 
- `Model.SmartTransactionPreparePayloadDataModel`


## [2.12.1] - 2022-03-28
[2.12.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.12.0...2.12.1

### Fixed

- `Api.PaymentTransactionsApi.updateShippingInformation()` missing body parameter


## [2.12.0] - 2022-02-28
[2.12.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.11.0...2.12.0

### Added
- `Api.PaymentTransactionsApi.increaseAmount()`
- `Model.PaymentTransactionsIncreaseAmountDTO`
- `Model.SmartTransactionsProductModel` element `subscription`
- `Model.SmartTransactionsBasketProduct` element `plan_id`
- `Model.SmartTransactionsBasketProduct` element `start_at`
- `Model.SmartTransactionsApplicationContextReturnUrls` element `url_push`

### Fixed

- docblock comment by @krsriq in [PR #19](https://github.com/secuconnect/secuconnect-php-sdk/pull/19)


## [2.11.0] - 2022-01-25
[2.11.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.10.0...2.11.0

### Added
- `Api.PaymentTransactionsApi.getCrowdFundingData()`
- `Api.PaymentTransactionsApi.updateShippingInformation()`
- `Api.PublicWebsiteApi.availableCountries()`
- `Model.AvailableCountry`
- `Model.CrowdFundingDataDetails`
- `Model.CrowdFundingDataOpenAmount`
- `Model.CrowdFundingDataOpenAmountInsideCancelPeriod`
- `Model.CrowdFundingDataOpenAmountOutsideCancellationPeriod`
- `Model.PaymentContext` element `creditcard_schemes`
- `Model.PaymentCrowdFundingData`
- `Model.PaymentMethodBreakdown`
- `Model.SecupayTransactionSetShippingInformationDTO` element `shipped_at` and `order_id`
- `Model.SmartTemplatesElementModel` element `form_elements`
- `Model.SmartTemplatesFormElementModel`
- `Model.SmartTransactionsApplicationContext` element `language`

### Fixed
- Some broken tests


## [2.10.0] - 2021-09-29
[2.10.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.9.0...2.10.0

### Added
- `Api.ServicesIdentrequestsApi`
- `Api.ServicesIdentresultsApi`
- `Model.ContactData`
- `Model.IdentDocument`
- `Model.IdentDocumentData`
- `Model.IdentificationCustomData`
- `Model.IdentificationProcess`
- `Model.IdentrequestPerson`
- `Model.IdentrequestPersonDTO`
- `Model.IdentrequestRedirectUrls`
- `Model.IdentresultPerson`
- `Model.ServicesIdentrequestsList`
- `Model.ServicesIdentrequestsProductDTO`
- `Model.ServicesIdentrequestsProductModel`
- `Model.ServicesIdentresultsList`
- `Model.ServicesIdentresultsProductModel`
- `Model.UserAddressData`
- `Model.UserData`
- `Model.ValueField`
- `Model.PaymentContractsDTORequestId` element `identrequest`
- `Model.PaymentContractsDTORequestId` element `signed_contract`


## [2.9.0] - 2021-09-13
[2.9.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/2.8.2...2.9.0

**This will be the last version with PHP 5.6 support.**

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
