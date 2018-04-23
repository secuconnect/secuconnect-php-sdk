# Secuconnect\Client\PaymentSecupayPrepaysApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentSecupayPrepaysCancelById**](PaymentSecupayPrepaysApi.md#paymentSecupayPrepaysCancelById) | **POST** Payment/Secupayprepays/{hash}/cancel | 
[**paymentSecupayPrepaysGetById**](PaymentSecupayPrepaysApi.md#paymentSecupayPrepaysGetById) | **GET** Payment/Secupayprepays/{hash} | 
[**paymentSecupayprepaysPost**](PaymentSecupayPrepaysApi.md#paymentSecupayprepaysPost) | **POST** Payment/Secupayprepays | 


# **paymentSecupayPrepaysCancelById**
> object paymentSecupayPrepaysCancelById($hash)



Function to cancel the transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayPrepaysApi();
$hash = "hash_example"; // string | Transaction hash

try {
    $result = $api_instance->paymentSecupayPrepaysCancelById($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayPrepaysApi->paymentSecupayPrepaysCancelById: ', $e->getMessage(), PHP_EOL;
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

# **paymentSecupayPrepaysGetById**
> \Secuconnect\Client\Model\SecupayTransactionProductModel paymentSecupayPrepaysGetById($hash)



Get the details of a payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayPrepaysApi();
$hash = "hash_example"; // string | Payment transaction ID

try {
    $result = $api_instance->paymentSecupayPrepaysGetById($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayPrepaysApi->paymentSecupayPrepaysGetById: ', $e->getMessage(), PHP_EOL;
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

# **paymentSecupayprepaysPost**
> \Secuconnect\Client\Model\SecupayTransactionProductModel paymentSecupayprepaysPost($body)



Start a prepay payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayPrepaysApi();
$body = new \Secuconnect\Client\Model\SecupayTransactionProductDTO(); // \Secuconnect\Client\Model\SecupayTransactionProductDTO | Prepay payment transaction input properties

try {
    $result = $api_instance->paymentSecupayprepaysPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayPrepaysApi->paymentSecupayprepaysPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\SecupayTransactionProductDTO**](../Model/SecupayTransactionProductDTO.md)| Prepay payment transaction input properties | [optional]

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

