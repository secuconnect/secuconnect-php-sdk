# Secuconnect\Client\LoyaltyCustomersApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomer**](LoyaltyCustomersApi.md#addCustomer) | **POST** /Loyalty/Customers | POST Loyalty/Customers
[**assignPaymentContainer**](LoyaltyCustomersApi.md#assignPaymentContainer) | **POST** /Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId} | POST Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
[**checkForDuplicates**](LoyaltyCustomersApi.md#checkForDuplicates) | **POST** /Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/ | POST Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/
[**getAll**](LoyaltyCustomersApi.md#getAll) | **GET** /Loyalty/Customers | GET Loyalty/Customers
[**getOne**](LoyaltyCustomersApi.md#getOne) | **GET** /Loyalty/Customers/{loyaltyCustomerId} | GET Loyalty/Customers/{loyaltyCustomerId}
[**removeAssignedPaymentContainer**](LoyaltyCustomersApi.md#removeAssignedPaymentContainer) | **DELETE** /Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId} | DELETE Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
[**removeCustomer**](LoyaltyCustomersApi.md#removeCustomer) | **DELETE** /Loyalty/Customers/{loyaltyCustomerId} | DELETE Loyalty/Customers/{loyaltyCustomerId}
[**updateCustomer**](LoyaltyCustomersApi.md#updateCustomer) | **PUT** /Loyalty/Customers/{loyaltyCustomerId} | PUT Loyalty/Customers/{loyaltyCustomerId}

# **addCustomer**
> \Secuconnect\Client\Model\LoyaltyCustomersProductModel addCustomer($body)

POST Loyalty/Customers

Add loyalty customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCustomersApi();
$body = new \Secuconnect\Client\Model\LoyaltyCustomersDTO(); // \Secuconnect\Client\Model\LoyaltyCustomersDTO | loyalty Customer container properties

try {
    $result = $api_instance->addCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCustomersApi->addCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\LoyaltyCustomersDTO**](../Model/LoyaltyCustomersDTO.md)| loyalty Customer container properties |

### Return type

[**\Secuconnect\Client\Model\LoyaltyCustomersProductModel**](../Model/LoyaltyCustomersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignPaymentContainer**
> \Secuconnect\Client\Model\LoyaltyCustomersProductModel assignPaymentContainer($loyalty_customer_id, $loyalty_payment_container_id)

POST Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}

Assigns LoyaltyPaymentContainer to customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCustomersApi();
$loyalty_customer_id = "loyalty_customer_id_example"; // string | Loyalty customer id
$loyalty_payment_container_id = "loyalty_payment_container_id_example"; // string | LoyaltyPaymentContainer id

try {
    $result = $api_instance->assignPaymentContainer($loyalty_customer_id, $loyalty_payment_container_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCustomersApi->assignPaymentContainer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_customer_id** | **string**| Loyalty customer id | [required]
 **loyalty_payment_container_id** | **string**| LoyaltyPaymentContainer id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyCustomersProductModel**](../Model/LoyaltyCustomersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkForDuplicates**
> object checkForDuplicates($loyalty_customer_id)

POST Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/

check if there are duplicated customers for a given merchant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCustomersApi();
$loyalty_customer_id = "loyalty_customer_id_example"; // string | Loyalty customer id

try {
    $result = $api_instance->checkForDuplicates($loyalty_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCustomersApi->checkForDuplicates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_customer_id** | **string**| Loyalty customer id | [required]

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Secuconnect\Client\Model\LoyaltyCustomersList getAll($count, $offset, $fields, $q, $sort)

GET Loyalty/Customers

Get a list of loyalty customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCustomersApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \"*\" for any number of characters  *                       - wildcard \"?\" for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                   Property names can be nested like \"prop1.prop2\".  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->getAll($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCustomersApi->getAll: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\LoyaltyCustomersList**](../Model/LoyaltyCustomersList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Secuconnect\Client\Model\LoyaltyCustomersProductModel getOne($loyalty_customer_id)

GET Loyalty/Customers/{loyaltyCustomerId}

Get loyalty customer for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCustomersApi();
$loyalty_customer_id = "loyalty_customer_id_example"; // string | Search one loyalty customer by provided id

try {
    $result = $api_instance->getOne($loyalty_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCustomersApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_customer_id** | **string**| Search one loyalty customer by provided id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyCustomersProductModel**](../Model/LoyaltyCustomersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAssignedPaymentContainer**
> \Secuconnect\Client\Model\LoyaltyCustomersProductModel removeAssignedPaymentContainer($loyalty_customer_id, $loyalty_payment_container_id)

DELETE Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}

Removes an assigned LoyaltyPaymentContainer from customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCustomersApi();
$loyalty_customer_id = "loyalty_customer_id_example"; // string | Loyalty customer id
$loyalty_payment_container_id = "loyalty_payment_container_id_example"; // string | LoyaltyPaymentContainer id

try {
    $result = $api_instance->removeAssignedPaymentContainer($loyalty_customer_id, $loyalty_payment_container_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCustomersApi->removeAssignedPaymentContainer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_customer_id** | **string**| Loyalty customer id | [required]
 **loyalty_payment_container_id** | **string**| LoyaltyPaymentContainer id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyCustomersProductModel**](../Model/LoyaltyCustomersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeCustomer**
> \Secuconnect\Client\Model\LoyaltyCustomersRemoved removeCustomer($loyalty_customer_id)

DELETE Loyalty/Customers/{loyaltyCustomerId}

Remove assigned loyalty customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCustomersApi();
$loyalty_customer_id = "loyalty_customer_id_example"; // string | Loyalty customer id

try {
    $result = $api_instance->removeCustomer($loyalty_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCustomersApi->removeCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_customer_id** | **string**| Loyalty customer id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyCustomersRemoved**](../Model/LoyaltyCustomersRemoved.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \Secuconnect\Client\Model\LoyaltyCustomersProductModel updateCustomer($loyalty_customer_id, $body)

PUT Loyalty/Customers/{loyaltyCustomerId}

Function to update customer's data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyCustomersApi();
$loyalty_customer_id = "loyalty_customer_id_example"; // string | loyalty Customer Id CUS_XXX
$body = new \Secuconnect\Client\Model\LoyaltyCustomersDTO(); // \Secuconnect\Client\Model\LoyaltyCustomersDTO | loyalty Customer container properties

try {
    $result = $api_instance->updateCustomer($loyalty_customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_customer_id** | **string**| loyalty Customer Id CUS_XXX | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyCustomersDTO**](../Model/LoyaltyCustomersDTO.md)| loyalty Customer container properties |

### Return type

[**\Secuconnect\Client\Model\LoyaltyCustomersProductModel**](../Model/LoyaltyCustomersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

