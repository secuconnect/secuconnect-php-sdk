# Secuconnect\Client\PaymentCustomersApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentCustomersGet**](PaymentCustomersApi.md#paymentCustomersGet) | **GET** /Payment/Customers | GET Payment/Customers
[**paymentCustomersGetById**](PaymentCustomersApi.md#paymentCustomersGetById) | **GET** /Payment/Customers/{paymentCustomerId} | GET Payment/Customers/{paymentCustomerId}
[**paymentCustomersIdDelete**](PaymentCustomersApi.md#paymentCustomersIdDelete) | **DELETE** /Payment/Customers/{paymentCustomerId} | DELETE Payment/Customers/{paymentCustomerId}
[**paymentCustomersIdPut**](PaymentCustomersApi.md#paymentCustomersIdPut) | **PUT** /Payment/Customers/{paymentCustomerId} | PUT Payment/Customers/{paymentCustomerId}
[**paymentCustomersPost**](PaymentCustomersApi.md#paymentCustomersPost) | **POST** /Payment/Customers | POST Payment/Customers

# **paymentCustomersGet**
> \Secuconnect\Client\Model\PaymentCustomersList paymentCustomersGet($count, $offset, $fields, $q, $sort)

GET Payment/Customers

Get a list of payment customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentCustomersApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \"*\" for any number of characters  *                       - wildcard \"?\" for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                   Property names can be nested like \"prop1.prop2\".  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->paymentCustomersGet($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentCustomersApi->paymentCustomersGet: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\PaymentCustomersList**](../Model/PaymentCustomersList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomersGetById**
> \Secuconnect\Client\Model\PaymentCustomersProductModel paymentCustomersGetById($payment_customer_id)

GET Payment/Customers/{paymentCustomerId}

Get all payment customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentCustomersApi();
$payment_customer_id = "payment_customer_id_example"; // string | Payment customer id

try {
    $result = $api_instance->paymentCustomersGetById($payment_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentCustomersApi->paymentCustomersGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_customer_id** | **string**| Payment customer id | [required]

### Return type

[**\Secuconnect\Client\Model\PaymentCustomersProductModel**](../Model/PaymentCustomersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomersIdDelete**
> \Secuconnect\Client\Model\PaymentCustomersProductModel[] paymentCustomersIdDelete($payment_customer_id)

DELETE Payment/Customers/{paymentCustomerId}

Delete payment customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentCustomersApi();
$payment_customer_id = "payment_customer_id_example"; // string | Payment customer id

try {
    $result = $api_instance->paymentCustomersIdDelete($payment_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentCustomersApi->paymentCustomersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_customer_id** | **string**| Payment customer id | [required]

### Return type

[**\Secuconnect\Client\Model\PaymentCustomersProductModel[]**](../Model/PaymentCustomersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomersIdPut**
> \Secuconnect\Client\Model\PaymentCustomersProductModel paymentCustomersIdPut($payment_customer_id, $body)

PUT Payment/Customers/{paymentCustomerId}

Update payment customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentCustomersApi();
$payment_customer_id = "payment_customer_id_example"; // string | Payment customer id
$body = new \Secuconnect\Client\Model\PaymentCustomersDTO(); // \Secuconnect\Client\Model\PaymentCustomersDTO | Payment customer properties

try {
    $result = $api_instance->paymentCustomersIdPut($payment_customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentCustomersApi->paymentCustomersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_customer_id** | **string**| Payment customer id | [required]
 **body** | [**\Secuconnect\Client\Model\PaymentCustomersDTO**](../Model/PaymentCustomersDTO.md)| Payment customer properties |

### Return type

[**\Secuconnect\Client\Model\PaymentCustomersProductModel**](../Model/PaymentCustomersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomersPost**
> \Secuconnect\Client\Model\PaymentCustomersProductModel paymentCustomersPost($body)

POST Payment/Customers

Add new customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentCustomersApi();
$body = new \Secuconnect\Client\Model\PaymentCustomersDTO(); // \Secuconnect\Client\Model\PaymentCustomersDTO | Payment customer properties

try {
    $result = $api_instance->paymentCustomersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentCustomersApi->paymentCustomersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\PaymentCustomersDTO**](../Model/PaymentCustomersDTO.md)| Payment customer properties |

### Return type

[**\Secuconnect\Client\Model\PaymentCustomersProductModel**](../Model/PaymentCustomersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

