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


## [0.5.7.1] - 2019-03-29

**Release candidate**

Release candidate of the swagger generated PHP-SDK for the secuconnect API.

- Fix revoke accrual call


## [0.5.6] - 2019-03-25

**Release candidate**

Release candidate of the swagger generated PHP-SDK for the secuconnect API.

- Fix missing accrual call
- Fix handling of Access-Token if the cached token is invalid
- Fix delete cache item
- Fix error handling: Every API method should now return a ProductExceptionPayload in case of an API error from the seuconnect API
- Remove unused models: SecupayTransactionProductModelRedirectUrl, SecupayTransactionProductDTORedirectUrl and PaymentTransactionsProductModelMerchant


## [0.5.5] - 2019-03-21

**Release candidate**

Release candidate of the swagger generated PHP-SDK for the secuconnect API.

- Fix SmartTransactionsProductModel and there relations


## [0.5.4] - 2019-03-13

**Release candidate**

Release candidate of the swagger generated PHP-SDK for the secuconnect API.

- Fix SmartTransactionsProductModel


## [0.5.3] - 2019-03-12

**Release candidate**

Release candidate of the swagger generated PHP-SDK for the secuconnect API.

- Fix STOMP (autoload, connection, ...)
- Fix links in "docs/README.md"


## [0.5.2] - 2019-03-11

**Release candidate**

Release candidate of the swagger generated PHP-SDK for the secuconnect API.

- Fix STOMP


## [0.5.1] - 2019-03-01

**Release candidate**

Release candidate of the swagger generated PHP-SDK for the secuconnect API.

- Cosmetics
- Bug fix for Authenticator::authenticateByDevice()


## [0.5.0] - 2019-02-28

**Release candidate**

Release candidate of the swagger generated PHP-SDK for the secuconnect API.

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
