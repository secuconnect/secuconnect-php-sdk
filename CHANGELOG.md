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


## [2.0.0] - 2020-05-11

### Added

- `Api.SmartTransactionsApi.startTransaction()`: added parameter `body`
- `Model.Address`: added element `additional_address_data`
- `Model.GeneralStoresProductModel`: added element `store_name`
- `Model.PaymentTransactionsProductModel`: added elements `parents` and `account_owner`
- `Model.PaymentContainersDTO`: added element `customer_id`
- `Model.SmartTransactionsReceiptValue`: added element `decoration`
- `Model.SmartTransactionsBonusProducts`: added element `serial_number`


### Changed

- The `body` parameter is now always a required parameter in the API calls, but you set it to `null` if you do not need it.
- `Api.GeneralStoresApi`: changed response declarations from `object` to `ResultBoolean`
- `Api.LoyaltyCardsApi.assignUser()`: changed input parameter from `object` to `CardPin`
- `Api.LoyaltyCardsApi`: changed response declarations from `object` to `ResultBoolean`
- `Api.LoyaltyCustomersApi.checkForDuplicates()`: changed response declaration from `object` to `CustomersWithoutMerchantcardAndDuplicatedCustomers`
- `Api.LoyaltyMerchantcardsApi`: changed response declarations from `object` to `ResultBoolean`
- `Api.PaymentContractsApi.paymentContractsIdPaymentMethodsGet()`: changed response declaration from `string[]` to `StringList`
- `Api.PaymentSecupayCreditcardsApi.cancelPaymentTransactionById()`: changed response declaration from `object` to `PaymentCancelResult`
- `Api.PaymentSecupayDebitsApi.cancelPaymentTransactionById()`: changed response declaration from `object` to `PaymentCancelResult`
- `Api.PaymentSecupayInvoicesApi.cancelPaymentTransactionById()`: changed response declaration from `object` to `PaymentCancelResult`
- `Api.PaymentSecupayPrepaysApi.cancelPaymentTransactionById()`: changed response declaration from `object` to `PaymentCancelResult`
- `Api.PaymentSecupaySofortApi.cancelPaymentTransactionById()`: changed response declaration from `object` to `PaymentCancelResult`
- `Api.SmartDevicesApi`: replaced `SmartDevicesList1` with `SmartDevicesList`
- `Model.PaymentContainersDTO`: replaced `PaymentContainersDTOPrivate` with `OneOfPaymentContainersDTOModelPrivate`
- `Model.SecupayPayoutDTO`: changed parameter `customer` from string to `PaymentCustomersProductModel`


### Fixed

- `Model.SmartTransactionsPrepare`: fixed type declaration of element `callback_urls`
- `Model.GeneralStoresProductModel`: fixed type declaration of element `geometry`
- `Model.BankAccountDescriptor`: wrong element `pan` was removed, instead of this we have now the model `CreditCardDescriptor`


### Removed

- `Api.GeneralMerchantsApi`: call `updateMerchant` was removed
- `Api.LoyaltySalesApi`: call `getVirtualTerminalIdByStoreId` was removed
- `Api.PaymentSecupayCreditcardsApi`: call `paymentSecupayCreditcardsCancelById` was removed
- `Api.PaymentSecupayDebitsApi`: call `paymentSecupayDebitsCancelById` was removed
- `Api.PaymentSecupayInvoicesApi`: call `paymentSecupayInvoicesCancelById` was removed
- `Api.PaymentSecupayPrepaysApi`: call `paymentSecupayPrepaysCancelById` was removed
- `Api.PaymentTransactionsApi.revokeAccrual()`: parameter `body` was removed
- `Model.PaymentContainersDTOPrivate` was removed
- `Model.SmartDevicesList1` was removed
- `Model.VirtualTerminalData` was removed
- `Model.SecupaySubTransactionProductModel`: elements `amount`, `transaction_status`, `status`, `currency` were removed
- `Model.SecupayPayoutDTO`: element `demo` was removed
- `Model.ReceiptTypeValue`: element `type` was removed


## [1.3.0] - 2020-03-04

### Changed

- Making stomp dependencies optional (as they only needed for cash registers)


## [1.2.0] - 2019-10-01

### Added

- Added a new request parameter "container_id to the model "PaymentTransactionCancelDTO"

### Fixed

- Fixed type of the parameter "geometry" and "category" in "GeneralStoresProductModel"


## [1.1.0] - 2019-09-26

### Added

- Added two new request parameter ("name" and "merchant") to the model "GeneralStoresDTO"


## [1.0.1] - 2019-09-23

### Fixed

- Added missing response parameter "subscription" in "SecupayTransactionProductModel"


## [1.0.0] - 2019-09-09

### Added

- PaymentContractsDTORequestId: parameter "create_first_store" and "store_name"
- PaymentContractsRequestIdResult: parameter "merchant" and "store"
- SmartDevicesProductModel: parameter "contract"
- SmartTransactionsPrepare: some internal parameter
- SmartTransactionsProductModel: parameter "iframe_url"

### Changed

- **[BREAKING\]** PaymentContractsRequestIdResult: parameter "contract" is now a instance of "ProductInstanceUID" instead of "PaymentContractsProductModel"

### Removed

- GeneralMerchantsApi: addMerchants() and related calls
- PaymentTransactionsApi: deprecated functions
  - paymentTransactionsIdCancelPost()
  - paymentTransactionsGet()
  - paymentTransactionsGetById()
  - paymentTransactionsIdShippingUrlGet()
- PrepaidSalesProductApi: deprecated functions
  - prepaidSalesPost()


## [0.8.0] - 2019-08-14

### Added

- Added "mandate" field to SecupayTransactionProductModel
- Added "contract" field to SmartDevicesDTO

### Changed

- \Secuconnect\Client\Api\SmartTransactionsApi::prepare has now 3 parameter ($smart_transaction_id, $payment_method, $body)


## [0.7.2] - 2019-06-28

### Added

- Added "pan" field to BankAccountDescriptor which is used in SecupayTransactionProductModelUsedPaymentInstrument (as a temporary solution to get the truncated pan of a used credit card)


## [0.7.1] - 2019-05-21

### Fixed

- Fixed SecupayPayoutApi models


## [0.7.0] - 2019-05-15

### Added

- Added PaymentSecupaySofortApi

### Changed

- Renamed operation "prepaidContractsMeMappingZvtPost" to "mappingZvt" and corrected the input parameters
- The default cache directory is now defined as an absolute path


## [0.6.2] - 2019-04-17

### Added

- Added "accrual" to "PaymentTransactionsProductModel"
- Added "sub_transactions" to "SecupayTransactionProductModel"


## [0.6.1] - 2019-04-04

### Fixed

- Fix payment transaction cancel call


## [0.6.0] - 2019-04-01

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

### Fixed

- Fix revoke accrual call


## [0.5.6] - 2019-03-25

### Fixed

- Fix missing accrual call
- Fix handling of Access-Token if the cached token is invalid
- Fix delete cache item
- Fix error handling: Every API method should now return a ProductExceptionPayload in case of an API error from the seuconnect API


### Removed

- Remove unused models: SecupayTransactionProductModelRedirectUrl, SecupayTransactionProductDTORedirectUrl and PaymentTransactionsProductModelMerchant


## [0.5.5] - 2019-03-21

- Fix SmartTransactionsProductModel and there relations


## [0.5.4] - 2019-03-13

- Fix SmartTransactionsProductModel


## [0.5.3] - 2019-03-12

- Fix STOMP (autoload, connection, ...)
- Fix links in "docs/README.md"


## [0.5.2] - 2019-03-11

- Fix STOMP


## [0.5.1] - 2019-03-01

- Cosmetics
- Bug fix for Authenticator::authenticateByDevice()


## [0.5.0] - 2019-02-28

- Authenticator was refactored: Please use on of the following methods to authenticate:
    - Authenticator::authenticateByApplicationUser()
    - Authenticator::authenticateByClientCredentials()
    - Authenticator::authenticateByDevice()
    - Authenticator::authenticateByRefreshToken()
- ImitationDevicePrinter will now also print a phone number to validate the user code.
- API function update
- Bug fixes


## [0.4.0] - 2019-02-18

**Developer Preview**

Beta version of the swagger generated PHP-SDK for the secuconnect API.

- Stomp client changed
- Date format changed to string
- API function update
- Bug fixes


## [0.3.0] - 2018-11-08

**Developer Preview**

Beta version of the swagger generated PHP-SDK for the secuconnect API.

- Stomp client added


## [0.2.0] - 2018-10-26

**Developer Preview**

Beta version of the swagger generated PHP-SDK for the secuconnect API.


## [0.1.0] - 2018-04-23

**Developer Preview**

Beta version of the swagger generated PHP-SDK for the secuconnect API.




[0.1.0]:https://github.com/secuconnect/secuconnect-php-sdk/releases/tag/v0.1.0
[0.2.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.1.0...0.2.0
[0.3.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.2.0...0.3.0
[0.4.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.3.0...0.4.0
[0.5.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.4.0...0.5.0
[0.5.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.0...0.5.1
[0.5.2]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.1...0.5.2
[0.5.3]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.2...0.5.3
[0.5.4]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.3...0.5.4
[0.5.5]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.4...0.5.5
[0.5.6]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.5...0.5.6
[0.5.7.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.6...0.5.7.1
[0.6.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.5.7.1...0.6.0
[0.6.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.6.0...0.6.1
[0.6.2]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.6.1...0.6.2
[0.7.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.6.2...0.7.0
[0.7.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.7.0...0.7.1
[0.7.2]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.7.1...0.7.2
[0.8.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.7.2...0.8.0
[1.0.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/0.8.0...1.0.0
[1.0.1]:https://github.com/secuconnect/secuconnect-php-sdk/compare/1.0.0...1.0.1
[1.1.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/1.0.1...1.1.0
[1.2.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/1.1.0...1.2.0
[1.3.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/1.2.0...1.3.0
[2.0.0]:https://github.com/secuconnect/secuconnect-php-sdk/compare/1.3.0...2.0.0
