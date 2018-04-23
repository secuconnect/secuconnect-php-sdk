# Secuconnect\Client\PaymentSecupayInvoicesApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentSecupayInvoicesCancelById**](PaymentSecupayInvoicesApi.md#paymentSecupayInvoicesCancelById) | **POST** Payment/Secupayinvoices/{hash}/cancel | 
[**paymentSecupayInvoicesGetById**](PaymentSecupayInvoicesApi.md#paymentSecupayInvoicesGetById) | **GET** Payment/Secupayinvoices/{hash} | 
[**paymentSecupayinvoicesPost**](PaymentSecupayInvoicesApi.md#paymentSecupayinvoicesPost) | **POST** Payment/Secupayinvoices | 


# **paymentSecupayInvoicesCancelById**
> object paymentSecupayInvoicesCancelById($hash)



Function to cancel the transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayInvoicesApi();
$hash = "hash_example"; // string | Transaction hash

try {
    $result = $api_instance->paymentSecupayInvoicesCancelById($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayInvoicesApi->paymentSecupayInvoicesCancelById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Transaction hash |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentSecupayInvoicesGetById**
> \Secuconnect\Client\Model\SecupayTransactionProductModel paymentSecupayInvoicesGetById($hash)



Get the details of a payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayInvoicesApi();
$hash = "hash_example"; // string | Payment transaction ID

try {
    $result = $api_instance->paymentSecupayInvoicesGetById($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayInvoicesApi->paymentSecupayInvoicesGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Payment transaction ID |

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentSecupayinvoicesPost**
> \Secuconnect\Client\Model\SecupayTransactionProductModel paymentSecupayinvoicesPost($body)



Start a invoice payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayInvoicesApi();
$body = new \Secuconnect\Client\Model\SecupayTransactionProductDTO(); // \Secuconnect\Client\Model\SecupayTransactionProductDTO | Invoice payment transaction input properties

try {
    $result = $api_instance->paymentSecupayinvoicesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayInvoicesApi->paymentSecupayinvoicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTO**](../Model/SecupayTransactionProductDTO.md)| Invoice payment transaction input properties | [optional]

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

