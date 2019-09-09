# Secuconnect\Client\GeneralMerchantsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAll**](GeneralMerchantsApi.md#getAll) | **GET** /General/Merchants | GET General/Merchants
[**getOne**](GeneralMerchantsApi.md#getOne) | **GET** /General/Merchants/{generalMerchantId} | GET General/Merchants/{generalMerchantId}
[**updateMerchant**](GeneralMerchantsApi.md#updateMerchant) | **PUT** /General/Merchants/{generalMerchantId} | PUT General/Merchants/{generalMerchantId}


# **getAll**
> \Secuconnect\Client\Model\GeneralMerchantsList getAll($count, $offset, $fields, $q, $sort)

GET General/Merchants

Get a list of general merchants

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\GeneralMerchantsApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \"*\" for any number of characters  *                       - wildcard \"?\" for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                   Property names can be nested like \"prop1.prop2\".  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->getAll($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralMerchantsApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of items to return. |
 **offset** | **int**| The position within the whole result set to start returning items (First element is at 0). |
 **fields** | **string**| List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 |
 **q** | **string**| A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \&quot;*\&quot; for any number of characters  *                       - wildcard \&quot;?\&quot; for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by &#x27;AND&#x27;, &#x27;OR&#x27;, &#x27;NOT&#x27; operators and parenthesis &#x27;(&#x27;, &#x27;)&#x27; for grouping.  *                   Property names can be nested like \&quot;prop1.prop2\&quot;.  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * |
 **sort** | **string**| String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#x27;asc&#x27;, or descending &#x27;dsc&#x27; order. |

### Return type

[**\Secuconnect\Client\Model\GeneralMerchantsList**](../Model/GeneralMerchantsList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Secuconnect\Client\Model\GeneralMerchantsProductModel getOne($general_merchant_id)

GET General/Merchants/{generalMerchantId}

Get one general merchant for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\GeneralMerchantsApi();
$general_merchant_id = "general_merchant_id_example"; // string | General merchant id

try {
    $result = $api_instance->getOne($general_merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralMerchantsApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **general_merchant_id** | **string**| General merchant id | [required]

### Return type

[**\Secuconnect\Client\Model\GeneralMerchantsProductModel**](../Model/GeneralMerchantsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMerchant**
> \Secuconnect\Client\Model\GeneralMerchantsProductModel updateMerchant($general_merchant_id, $body)

PUT General/Merchants/{generalMerchantId}

Update general merchant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\GeneralMerchantsApi();
$general_merchant_id = "general_merchant_id_example"; // string | General merchant id
$body = new \Secuconnect\Client\Model\GeneralMerchantsDTO(); // \Secuconnect\Client\Model\GeneralMerchantsDTO | General merchant properties

try {
    $result = $api_instance->updateMerchant($general_merchant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralMerchantsApi->updateMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **general_merchant_id** | **string**| General merchant id | [required]
 **body** | [**\Secuconnect\Client\Model\GeneralMerchantsDTO**](../Model/GeneralMerchantsDTO.md)| General merchant properties |

### Return type

[**\Secuconnect\Client\Model\GeneralMerchantsProductModel**](../Model/GeneralMerchantsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

