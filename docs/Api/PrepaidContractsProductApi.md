# Secuconnect\Client\PrepaidContractsProductApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mappingZvt**](PrepaidContractsProductApi.md#mappingZvt) | **POST** /Prepaid/Contracts/{prepaidContractId}/mappingZvt | POST Prepaid/Contracts/null/mappingZvt


# **mappingZvt**
> \Secuconnect\Client\Model\PrepaidMappingZvt mappingZvt($prepaid_contract_id, $body)

POST Prepaid/Contracts/null/mappingZvt

Gets prepaid item id from product id which is configured in prepaid contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PrepaidContractsProductApi();
$prepaid_contract_id = "prepaid_contract_id_example"; // string | Prepaid contract id
$body = new \Secuconnect\Client\Model\PrepaidZvtDTO(); // \Secuconnect\Client\Model\PrepaidZvtDTO | Prepaid transaction input properties

try {
    $result = $api_instance->mappingZvt($prepaid_contract_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaidContractsProductApi->mappingZvt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepaid_contract_id** | **string**| Prepaid contract id |
 **body** | [**\Secuconnect\Client\Model\PrepaidZvtDTO**](../Model/PrepaidZvtDTO.md)| Prepaid transaction input properties | [optional]

### Return type

[**\Secuconnect\Client\Model\PrepaidMappingZvt**](../Model/PrepaidMappingZvt.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

