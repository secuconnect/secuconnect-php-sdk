# Secuconnect\Client\PaymentSecupayCreditcardsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentSecupayCreditcardsCancelById**](PaymentSecupayCreditcardsApi.md#paymentSecupayCreditcardsCancelById) | **POST** Payment/Secupaycreditcards/{hash}/cancel | 
[**paymentSecupayCreditcardsGetById**](PaymentSecupayCreditcardsApi.md#paymentSecupayCreditcardsGetById) | **GET** Payment/Secupaycreditcards/{hash} | 
[**paymentSecupaycreditcardsPost**](PaymentSecupayCreditcardsApi.md#paymentSecupaycreditcardsPost) | **POST** Payment/Secupaycreditcards | 


# **paymentSecupayCreditcardsCancelById**
> object paymentSecupayCreditcardsCancelById($hash)



Function to cancel the transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$hash = "hash_example"; // string | Transaction hash

try {
    $result = $api_instance->paymentSecupayCreditcardsCancelById($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->paymentSecupayCreditcardsCancelById: ', $e->getMessage(), PHP_EOL;
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

# **paymentSecupayCreditcardsGetById**
> \Secuconnect\Client\Model\SecupayTransactionProductModel paymentSecupayCreditcardsGetById($hash)



Get the details of a payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayCreditcardsApi();
$hash = "hash_example"; // string | Payment transaction ID

try {
    $result = $api_instance->paymentSecupayCreditcardsGetById($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayCreditcardsApi->paymentSecupayCreditcardsGetById: ', $e->getMessage(), PHP_EOL;
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

# **paymentSecupaycreditcardsPost**
> \Secuconnect\Client\Model\SecupayTransactionProductModel paymentSecupaycreditcardsPost($body)



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
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTO**](../Model/SecupayTransactionProductDTO.md)| Credit card payment transaction input properties | [optional]

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

