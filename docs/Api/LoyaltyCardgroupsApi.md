# Secuconnect\Client\LoyaltyCardgroupsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCardGroup**](LoyaltyCardgroupsApi.md#addCardGroup) | **POST** /Loyalty/Cardgroups | POST Loyalty/Cardgroups
[**checkPassCodeEnabled**](LoyaltyCardgroupsApi.md#checkPassCodeEnabled) | **POST** /Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled | POST Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled
[**getAll**](LoyaltyCardgroupsApi.md#getAll) | **GET** /Loyalty/Cardgroups | GET Loyalty/Cardgroups
[**getOne**](LoyaltyCardgroupsApi.md#getOne) | **GET** /Loyalty/Cardgroups/{loyaltyCardGroupId} | GET Loyalty/Cardgroups/{loyaltyCardGroupId}
[**updateCardGroup**](LoyaltyCardgroupsApi.md#updateCardGroup) | **PUT** /Loyalty/Cardgroups/{loyaltyCardGroupId} | PUT Loyalty/Cardgroups/{loyaltyCardGroupId}


# **addCardGroup**
> \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel addCardGroup($body)

POST Loyalty/Cardgroups

Add loyalty card group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCardgroupsApi();
$body = new \Secuconnect\Client\Model\LoyaltyCardgroupsDTO(); // \Secuconnect\Client\Model\LoyaltyCardgroupsDTO | Loyalty card group properties

try {
    $result = $api_instance->addCardGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardgroupsApi->addCardGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\LoyaltyCardgroupsDTO**](../Model/LoyaltyCardgroupsDTO.md)| Loyalty card group properties |

### Return type

[**\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel**](../Model/LoyaltyCardgroupsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkPassCodeEnabled**
> object checkPassCodeEnabled($loyalty_card_group_id, $body)

POST Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled

Check whether passcode check is enabled

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCardgroupsApi();
$loyalty_card_group_id = "loyalty_card_group_id_example"; // string | Loyalty card group id
$body = new \Secuconnect\Client\Model\LoyaltyCardgroupsDTOCheckPasscodeEnabled(); // \Secuconnect\Client\Model\LoyaltyCardgroupsDTOCheckPasscodeEnabled | Check passcode details

try {
    $result = $api_instance->checkPassCodeEnabled($loyalty_card_group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardgroupsApi->checkPassCodeEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_card_group_id** | **string**| Loyalty card group id |
 **body** | [**\Secuconnect\Client\Model\LoyaltyCardgroupsDTOCheckPasscodeEnabled**](../Model/LoyaltyCardgroupsDTOCheckPasscodeEnabled.md)| Check passcode details | [optional]

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Secuconnect\Client\Model\LoyaltyCardgroupsList getAll($count, $offset, $fields, $q, $sort)

GET Loyalty/Cardgroups

Get a list of loyalty card groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCardgroupsApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \"*\" for any number of characters  *                      - wildcard \"?\" for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                  Property names can be nested like \"prop1.prop2\".  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->getAll($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardgroupsApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of items to return. | [optional]
 **offset** | **int**| The position within the whole result set to start returning items (First element is at 0). | [optional]
 **fields** | **string**| List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 | [optional]
 **q** | **string**| A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * | [optional]
 **sort** | **string**| String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. | [optional]

### Return type

[**\Secuconnect\Client\Model\LoyaltyCardgroupsList**](../Model/LoyaltyCardgroupsList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel getOne($loyalty_card_group_id)

GET Loyalty/Cardgroups/{loyaltyCardGroupId}

Get loyalty card group for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCardgroupsApi();
$loyalty_card_group_id = "loyalty_card_group_id_example"; // string | Search one by provided id

try {
    $result = $api_instance->getOne($loyalty_card_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardgroupsApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_card_group_id** | **string**| Search one by provided id |

### Return type

[**\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel**](../Model/LoyaltyCardgroupsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCardGroup**
> \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel updateCardGroup($loyalty_card_group_id, $body)

PUT Loyalty/Cardgroups/{loyaltyCardGroupId}

Update loyalty card group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCardgroupsApi();
$loyalty_card_group_id = "loyalty_card_group_id_example"; // string | Loyalty card group id
$body = new \Secuconnect\Client\Model\LoyaltyCardgroupsDTO(); // \Secuconnect\Client\Model\LoyaltyCardgroupsDTO | Loyalty card group properties

try {
    $result = $api_instance->updateCardGroup($loyalty_card_group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardgroupsApi->updateCardGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_card_group_id** | **string**| Loyalty card group id |
 **body** | [**\Secuconnect\Client\Model\LoyaltyCardgroupsDTO**](../Model/LoyaltyCardgroupsDTO.md)| Loyalty card group properties |

### Return type

[**\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel**](../Model/LoyaltyCardgroupsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

