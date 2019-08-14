# Secuconnect\Client\LoyaltyStoregroupsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addStoreGroup**](LoyaltyStoregroupsApi.md#addStoreGroup) | **POST** /Loyalty/Storegroups | POST Loyalty/Storegroups
[**getAll**](LoyaltyStoregroupsApi.md#getAll) | **GET** /Loyalty/StoreGroups | GET Loyalty/StoreGroups
[**getOne**](LoyaltyStoregroupsApi.md#getOne) | **GET** /Loyalty/StoreGroups/{loyaltyStoreGroupId} | GET Loyalty/StoreGroups/{loyaltyStoreGroupId}
[**removeStoreGroup**](LoyaltyStoregroupsApi.md#removeStoreGroup) | **DELETE** /Loyalty/StoreGroups/{loyaltyStoreGroupId} | DELETE Loyalty/StoreGroups/{loyaltyStoreGroupId}
[**updateStoreGroup**](LoyaltyStoregroupsApi.md#updateStoreGroup) | **PUT** /Loyalty/StoreGroups/{loyaltyStoreGroupId} | PUT Loyalty/StoreGroups/{loyaltyStoreGroupId}

# **addStoreGroup**
> \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel addStoreGroup($body)

POST Loyalty/Storegroups

Add new loyalty store group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyStoregroupsApi();
$body = new \Secuconnect\Client\Model\LoyaltyStoregroupsDTO(); // \Secuconnect\Client\Model\LoyaltyStoregroupsDTO | Loyalty store group properties

try {
    $result = $api_instance->addStoreGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyStoregroupsApi->addStoreGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\LoyaltyStoregroupsDTO**](../Model/LoyaltyStoregroupsDTO.md)| Loyalty store group properties |

### Return type

[**\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel**](../Model/LoyaltyStoregroupsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Secuconnect\Client\Model\LoyaltyStoregroupsList getAll($count, $offset, $fields, $q, $sort)

GET Loyalty/StoreGroups

Get a list of loyalty store groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyStoregroupsApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \"*\" for any number of characters  *                       - wildcard \"?\" for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                   Property names can be nested like \"prop1.prop2\".  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->getAll($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyStoregroupsApi->getAll: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\LoyaltyStoregroupsList**](../Model/LoyaltyStoregroupsList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel getOne($loyalty_store_group_id)

GET Loyalty/StoreGroups/{loyaltyStoreGroupId}

Get loyalty store group for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyStoregroupsApi();
$loyalty_store_group_id = "loyalty_store_group_id_example"; // string | loyalty store group id

try {
    $result = $api_instance->getOne($loyalty_store_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyStoregroupsApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_store_group_id** | **string**| loyalty store group id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel**](../Model/LoyaltyStoregroupsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeStoreGroup**
> \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel[] removeStoreGroup($loyalty_store_group_id)

DELETE Loyalty/StoreGroups/{loyaltyStoreGroupId}

Remove loyalty store group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyStoregroupsApi();
$loyalty_store_group_id = "loyalty_store_group_id_example"; // string | Loyalty store group id

try {
    $result = $api_instance->removeStoreGroup($loyalty_store_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyStoregroupsApi->removeStoreGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_store_group_id** | **string**| Loyalty store group id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel[]**](../Model/LoyaltyStoregroupsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoreGroup**
> \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel updateStoreGroup($loyalty_store_group_id, $body)

PUT Loyalty/StoreGroups/{loyaltyStoreGroupId}

Update loyalty store group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyStoregroupsApi();
$loyalty_store_group_id = "loyalty_store_group_id_example"; // string | Loyalty store group id
$body = new \Secuconnect\Client\Model\LoyaltyStoregroupsDTO(); // \Secuconnect\Client\Model\LoyaltyStoregroupsDTO | Loyalty store group properties

try {
    $result = $api_instance->updateStoreGroup($loyalty_store_group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyStoregroupsApi->updateStoreGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_store_group_id** | **string**| Loyalty store group id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyStoregroupsDTO**](../Model/LoyaltyStoregroupsDTO.md)| Loyalty store group properties |

### Return type

[**\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel**](../Model/LoyaltyStoregroupsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

