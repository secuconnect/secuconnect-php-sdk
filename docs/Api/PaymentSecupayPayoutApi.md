# Secuconnect\Client\PaymentSecupayPayoutApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSecupaypayout**](PaymentSecupayPayoutApi.md#getSecupaypayout) | **GET** /Payment/Secupaypayout/{paymentPayoutId} | GET Payment/Secupaypayout/{paymentPayoutId}
[**paymentSecupaypayoutPost**](PaymentSecupayPayoutApi.md#paymentSecupaypayoutPost) | **POST** /Payment/Secupaypayout | POST Payment/Secupaypayout


# **getSecupaypayout**
> \Secuconnect\Client\Model\SecupayPayoutProductModel getSecupaypayout($payment_payout_id)

GET Payment/Secupaypayout/{paymentPayoutId}

Get the details of a payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayPayoutApi();
$payment_payout_id = "payment_payout_id_example"; // string | Payment payout id

try {
    $result = $api_instance->getSecupaypayout($payment_payout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayPayoutApi->getSecupaypayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_payout_id** | **string**| Payment payout id |

### Return type

[**\Secuconnect\Client\Model\SecupayPayoutProductModel**](../Model/SecupayPayoutProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentSecupaypayoutPost**
> \Secuconnect\Client\Model\SecupayPayoutProductModel paymentSecupaypayoutPost($body)

POST Payment/Secupaypayout

Start a payout transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentSecupayPayoutApi();
$body = new \Secuconnect\Client\Model\SecupayPayoutDTO(); // \Secuconnect\Client\Model\SecupayPayoutDTO | Payout payment transaction input properties

try {
    $result = $api_instance->paymentSecupaypayoutPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSecupayPayoutApi->paymentSecupaypayoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\SecupayPayoutDTO**](../Model/SecupayPayoutDTO.md)| Payout payment transaction input properties | [optional]

### Return type

[**\Secuconnect\Client\Model\SecupayPayoutProductModel**](../Model/SecupayPayoutProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

