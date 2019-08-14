# Secuconnect\Client\LoyaltyCardsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignUser**](LoyaltyCardsApi.md#assignUser) | **POST** /Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId} | POST Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}
[**getAll**](LoyaltyCardsApi.md#getAll) | **GET** /Loyalty/Cards | GET Loyalty/Cards
[**getOne**](LoyaltyCardsApi.md#getOne) | **GET** /Loyalty/Cards/{loyaltyCardId} | GET Loyalty/Cards/{loyaltyCardId}
[**removeAssignedUser**](LoyaltyCardsApi.md#removeAssignedUser) | **DELETE** /Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId} | DELETE Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}

# **assignUser**
> object assignUser($loyalty_card_id, $general_account_id, $loyalty_card_pin)

POST Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}

Assign loyalty card to specific user account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCardsApi();
$loyalty_card_id = "loyalty_card_id_example"; // string | Loyalty card id
$general_account_id = "general_account_id_example"; // string | General account id
$loyalty_card_pin = NULL; // object | Loyalty card pin for the specific card

try {
    $result = $api_instance->assignUser($loyalty_card_id, $general_account_id, $loyalty_card_pin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardsApi->assignUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_card_id** | **string**| Loyalty card id | [required]
 **general_account_id** | **string**| General account id | [required]
 **body** | [**\Secuconnect\Client\Model\CardPin**](../Model/CardPin.md)| Loyalty card pin for the specific card |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Secuconnect\Client\Model\LoyaltyCardsList getAll($count, $offset, $fields, $q, $sort)

GET Loyalty/Cards

Get a list of loyalty cards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCardsApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \"*\" for any number of characters  *                       - wildcard \"?\" for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                   Property names can be nested like \"prop1.prop2\".  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->getAll($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardsApi->getAll: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\LoyaltyCardsList**](../Model/LoyaltyCardsList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Secuconnect\Client\Model\LoyaltyCardsProductModel getOne($loyalty_card_id)

GET Loyalty/Cards/{loyaltyCardId}

Get loyalty card for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCardsApi();
$loyalty_card_id = "loyalty_card_id_example"; // string | Search one loyalty card by provided id

try {
    $result = $api_instance->getOne($loyalty_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardsApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_card_id** | **string**| Search one loyalty card by provided id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyCardsProductModel**](../Model/LoyaltyCardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAssignedUser**
> object removeAssignedUser($loyalty_card_id, $general_account_id)

DELETE Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}

Remove assigned loyalty card from specific user account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCardsApi();
$loyalty_card_id = "loyalty_card_id_example"; // string | Loyalty card id
$general_account_id = "general_account_id_example"; // string | General account id

try {
    $result = $api_instance->removeAssignedUser($loyalty_card_id, $general_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardsApi->removeAssignedUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_card_id** | **string**| Loyalty card id | [required]
 **general_account_id** | **string**| General account id | [required]

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

