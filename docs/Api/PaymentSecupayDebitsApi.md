# Secuconnect\Client\PaymentSecupayDebitsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentSecupayDebitsCancelById**](PaymentSecupayDebitsApi.md#paymentSecupayDebitsCancelById) | **POST** Payment/Secupaydebits/{hash}/cancel | 
[**paymentSecupayDebitsGetById**](PaymentSecupayDebitsApi.md#paymentSecupayDebitsGetById) | **GET** Payment/Secupaydebits/{hash} | 
[**paymentSecupaydebitsPost**](PaymentSecupayDebitsApi.md#paymentSecupaydebitsPost) | **POST** Payment/Secupaydebits | 


# **paymentSecupayDebitsCancelById**
> object paymentSecupayDebitsCancelById($hash)



Function to cancel the transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayDebitsApi();
$hash = "hash_example"; // string | Transaction hash

try {
    $result = $api_instance->paymentSecupayDebitsCancelById($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayDebitsApi->paymentSecupayDebitsCancelById: ', $e->getMessage(), PHP_EOL;
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

# **paymentSecupayDebitsGetById**
> \Secuconnect\Client\Model\SecupayTransactionProductModel paymentSecupayDebitsGetById($hash)



Get the details of a payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayDebitsApi();
$hash = "hash_example"; // string | Payment transaction ID

try {
    $result = $api_instance->paymentSecupayDebitsGetById($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayDebitsApi->paymentSecupayDebitsGetById: ', $e->getMessage(), PHP_EOL;
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

# **paymentSecupaydebitsPost**
> \Secuconnect\Client\Model\SecupayTransactionProductModel paymentSecupaydebitsPost($body)



Start a debit payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayDebitsApi();
$body = new \Secuconnect\Client\Model\SecupayTransactionProductDTO(); // \Secuconnect\Client\Model\SecupayTransactionProductDTO | Debit payment transaction input properties

try {
    $result = $api_instance->paymentSecupaydebitsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayDebitsApi->paymentSecupaydebitsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTO**](../Model/SecupayTransactionProductDTO.md)| Debit payment transaction input properties | [optional]

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

