# Secuconnect\Client\PrepaidSalesProductApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSale**](PrepaidSalesProductApi.md#addSale) | **POST** /Prepaid/Sales | POST Prepaid/Sales

# **addSale**
> \Secuconnect\Client\Model\PrepaidSalesProductModel addSale($body)

POST Prepaid/Sales

Create new prepaid transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PrepaidSalesProductApi();
$body = new \Secuconnect\Client\Model\PrepaidSalesProductDTO(); // \Secuconnect\Client\Model\PrepaidSalesProductDTO | Prepaid transaction input properties

try {
    $result = $api_instance->addSale($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaidSalesProductApi->addSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\PrepaidSalesProductDTO**](../Model/PrepaidSalesProductDTO.md)| Prepaid transaction input properties |

### Return type

[**\Secuconnect\Client\Model\PrepaidSalesProductModel**](../Model/PrepaidSalesProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

