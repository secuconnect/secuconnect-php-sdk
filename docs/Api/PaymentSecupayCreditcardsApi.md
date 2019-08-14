# Secuconnect\Client\PaymentSecupayCreditcardsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignExternalInvoicePdf**](PaymentSecupayCreditcardsApi.md#assignExternalInvoicePdf) | **POST** /Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId} | POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
[**cancelPaymentTransactionById**](PaymentSecupayCreditcardsApi.md#cancelPaymentTransactionById) | **POST** /Payment/{paymentMethod}/{paymentId}/cancel | POST Payment/{paymentMethod}/{paymentId}/cancel
[**capturePaymentTransactionById**](PaymentSecupayCreditcardsApi.md#capturePaymentTransactionById) | **POST** /Payment/{paymentMethod}/{paymentId}/capture | POST Payment/{paymentMethod}/{paymentId}/capture
[**paymentSecupayCreditcardsCancelById**](PaymentSecupayCreditcardsApi.md#paymentSecupayCreditcardsCancelById) | **POST** /Payment/Secupaycreditcards/{paymentCreditCardsId}/cancel | POST Payment/Secupaycreditcards/{paymentCreditCardsId}/cancel
[**paymentSecupayCreditcardsGetById**](PaymentSecupayCreditcardsApi.md#paymentSecupayCreditcardsGetById) | **GET** /Payment/Secupaycreditcards/{paymentCreditCardsId} | GET Payment/Secupaycreditcards/{paymentCreditCardsId}
[**paymentSecupaycreditcardsPost**](PaymentSecupayCreditcardsApi.md#paymentSecupaycreditcardsPost) | **POST** /Payment/Secupaycreditcards | POST Payment/Secupaycreditcards
[**reverseAccrualByPaymentId**](PaymentSecupayCreditcardsApi.md#reverseAccrualByPaymentId) | **PUT** /Payment/{paymentMethod}/{paymentId}/accrual | PUT Payment/{paymentMethod}/{paymentId}/accrual
[**setShippingInformationByPaymentId**](PaymentSecupayCreditcardsApi.md#setShippingInformationByPaymentId) | **PUT** /Payment/{paymentMethod}/{paymentId}/shippingInformation | PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
[**updateBasketByPaymentId**](PaymentSecupayCreditcardsApi.md#updateBasketByPaymentId) | **PUT** /Payment/{paymentMethod}/{paymentId}/basket | PUT Payment/{paymentMethod}/{paymentId}/basket

# **assignExternalInvoicePdf**
> \Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf assignExternalInvoicePdf($payment_method, $payment_id, $document_id, $body)

POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}

Assign external invoice pdf

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$payment_method = "payment_method_example"; // string | Payment method (secupaydebits, secupayprepays, secupayinvoices, ...)
$payment_id = "payment_id_example"; // string | Payment id
$document_id = "document_id_example"; // string | Document id
$body = new \Secuconnect\Client\Model\SecupayTransactionDTOExternalInvoicePdf(); // \Secuconnect\Client\Model\SecupayTransactionDTOExternalInvoicePdf | Request body for assigning external invoice pdf

try {
    $result = $api_instance->assignExternalInvoicePdf($payment_method, $payment_id, $document_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->assignExternalInvoicePdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method** | **string**| Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) | [required]
 **payment_id** | **string**| Payment id | [required]
 **document_id** | **string**| Document id | [required]
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionDTOExternalInvoicePdf**](../Model/SecupayTransactionDTOExternalInvoicePdf.md)| Request body for assigning external invoice pdf |

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf**](../Model/SecupayTransactionExternalInvoicePdf.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelPaymentTransactionById**
> object cancelPaymentTransactionById($payment_method, $payment_id, $body)

POST Payment/{paymentMethod}/{paymentId}/cancel

Function to cancel the payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$payment_method = "payment_method_example"; // string | Payment method (secupaydebits, secupayprepays, secupayinvoices, ...)
$payment_id = "payment_id_example"; // string | Payment id
$body = new \Secuconnect\Client\Model\SecupayTransactionCancelDTO(); // \Secuconnect\Client\Model\SecupayTransactionCancelDTO | Cancel payment transaction input properties

try {
    $result = $api_instance->cancelPaymentTransactionById($payment_method, $payment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->cancelPaymentTransactionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method** | **string**| Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) | [required]
 **payment_id** | **string**| Payment id | [required]
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionCancelDTO**](../Model/SecupayTransactionCancelDTO.md)| Cancel payment transaction input properties |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **capturePaymentTransactionById**
> \Secuconnect\Client\Model\SecupayTransactionProductModel capturePaymentTransactionById($payment_method, $payment_id, $body)

POST Payment/{paymentMethod}/{paymentId}/capture

Function to cancel the payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$payment_method = "payment_method_example"; // string | Payment method (secupaydebits, secupayprepays, secupayinvoices, ...)
$payment_id = "payment_id_example"; // string | Payment id
$body = new \Secuconnect\Client\Model\SecupayTransactionCaptureDTO(); // \Secuconnect\Client\Model\SecupayTransactionCaptureDTO | Capture payment transaction input properties

try {
    $result = $api_instance->capturePaymentTransactionById($payment_method, $payment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->capturePaymentTransactionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method** | **string**| Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) | [required]
 **payment_id** | **string**| Payment id | [required]
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionCaptureDTO**](../Model/SecupayTransactionCaptureDTO.md)| Capture payment transaction input properties |

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentSecupayCreditcardsCancelById**
> object paymentSecupayCreditcardsCancelById($payment_credit_cards_id)

POST Payment/Secupaycreditcards/{paymentCreditCardsId}/cancel

DEPRECATED: use cancelPaymentTransactionById

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$payment_credit_cards_id = "payment_credit_cards_id_example"; // string | Payment credit cards id

try {
    $result = $api_instance->paymentSecupayCreditcardsCancelById($payment_credit_cards_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->paymentSecupayCreditcardsCancelById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_credit_cards_id** | **string**| Payment credit cards id |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentSecupayCreditcardsGetById**
> \Secuconnect\Client\Model\SecupayTransactionProductModel paymentSecupayCreditcardsGetById($payment_credit_cards_id)

GET Payment/Secupaycreditcards/{paymentCreditCardsId}

Get the details of a payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$payment_credit_cards_id = "payment_credit_cards_id_example"; // string | Payment credit cards id

try {
    $result = $api_instance->paymentSecupayCreditcardsGetById($payment_credit_cards_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->paymentSecupayCreditcardsGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_credit_cards_id** | **string**| Payment credit cards id | [required]

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentSecupaycreditcardsPost**
> \Secuconnect\Client\Model\SecupayTransactionProductModel paymentSecupaycreditcardsPost($body)

POST Payment/Secupaycreditcards

Start a credit card payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$body = new \Secuconnect\Client\Model\SecupayTransactionProductDTO(); // \Secuconnect\Client\Model\SecupayTransactionProductDTO | Credit card payment transaction input properties

try {
    $result = $api_instance->paymentSecupaycreditcardsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->paymentSecupaycreditcardsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTO**](../Model/SecupayTransactionProductDTO.md)| Credit card payment transaction input properties |

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reverseAccrualByPaymentId**
> \Secuconnect\Client\Model\SecupayTransactionProductModel reverseAccrualByPaymentId($payment_method, $payment_id, $body)

PUT Payment/{paymentMethod}/{paymentId}/accrual

Update the accrual flag of an existing payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$payment_method = "payment_method_example"; // string | Payment method (secupaydebits, secupayprepays, secupayinvoices, ...)
$payment_id = "payment_id_example"; // string | Payment id
$body = new \Secuconnect\Client\Model\SecupayTransactionReverseAccrualDTO(); // \Secuconnect\Client\Model\SecupayTransactionReverseAccrualDTO | Reverse accrual input properties

try {
    $result = $api_instance->reverseAccrualByPaymentId($payment_method, $payment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->reverseAccrualByPaymentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method** | **string**| Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) | [required]
 **payment_id** | **string**| Payment id | [required]
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionReverseAccrualDTO**](../Model/SecupayTransactionReverseAccrualDTO.md)| Reverse accrual input properties |

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setShippingInformationByPaymentId**
> \Secuconnect\Client\Model\SecupayTransactionProductModel setShippingInformationByPaymentId($payment_method, $payment_id, $body)

PUT Payment/{paymentMethod}/{paymentId}/shippingInformation

Update the accrual flag of an existing payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$payment_method = "payment_method_example"; // string | Payment method (secupaydebits, secupayprepays, secupayinvoices, ...)
$payment_id = "payment_id_example"; // string | Payment id
$body = new \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO(); // \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO | Shipping information propertie

try {
    $result = $api_instance->setShippingInformationByPaymentId($payment_method, $payment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->setShippingInformationByPaymentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method** | **string**| Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) | [required]
 **payment_id** | **string**| Payment id | [required]
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO**](../Model/SecupayTransactionSetShippingInformationDTO.md)| Shipping information propertie |

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBasketByPaymentId**
> \Secuconnect\Client\Model\SecupayTransactionProductModel updateBasketByPaymentId($payment_method, $payment_id, $body)

PUT Payment/{paymentMethod}/{paymentId}/basket

Update a basket of an existing payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$payment_method = "payment_method_example"; // string | Payment method (secupaydebits, secupayprepays, secupayinvoices, ...)
$payment_id = "payment_id_example"; // string | Payment id
$body = new \Secuconnect\Client\Model\SecupayTransactionUpdateBasketDTO(); // \Secuconnect\Client\Model\SecupayTransactionUpdateBasketDTO | Update basket input properties

try {
    $result = $api_instance->updateBasketByPaymentId($payment_method, $payment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->updateBasketByPaymentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method** | **string**| Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) | [required]
 **payment_id** | **string**| Payment id | [required]
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionUpdateBasketDTO**](../Model/SecupayTransactionUpdateBasketDTO.md)| Update basket input properties |

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

