# Secuconnect\Client\LoyaltySalesApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCardgroupsByMerchantId**](LoyaltySalesApi.md#getCardgroupsByMerchantId) | **GET** /Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID | GET Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID
[**getVirtualTerminalIdByStoreId**](LoyaltySalesApi.md#getVirtualTerminalIdByStoreId) | **GET** /Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore | GET Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore


# **getCardgroupsByMerchantId**
> \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[] getCardgroupsByMerchantId($general_merchant_id)

GET Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID

Get cardgroups by merchant id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltySalesApi();
$general_merchant_id = "general_merchant_id_example"; // string | Search by provided id

try {
    $result = $api_instance->getCardgroupsByMerchantId($general_merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltySalesApi->getCardgroupsByMerchantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **general_merchant_id** | **string**| Search by provided id |

### Return type

[**\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]**](../Model/LoyaltyCardgroupsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVirtualTerminalIdByStoreId**
> object getVirtualTerminalIdByStoreId($general_stores_id)

GET Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore

Get DECODED virtual terminal id by DECODED store id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltySalesApi();
$general_stores_id = "general_stores_id_example"; // string | DECODED store id

try {
    $result = $api_instance->getVirtualTerminalIdByStoreId($general_stores_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltySalesApi->getVirtualTerminalIdByStoreId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **general_stores_id** | **string**| DECODED store id |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

