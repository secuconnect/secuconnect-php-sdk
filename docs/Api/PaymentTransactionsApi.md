# Secuconnect\Client\PaymentTransactionsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentTransactionsGet**](PaymentTransactionsApi.md#paymentTransactionsGet) | **GET** /Payment/Transactions | GET Payment/Transactions
[**paymentTransactionsGetById**](PaymentTransactionsApi.md#paymentTransactionsGetById) | **GET** /Payment/Transactions/{paymentTransactionId} | GET Payment/Transactions/{paymentTransactionId}
[**paymentTransactionsIdCancelPost**](PaymentTransactionsApi.md#paymentTransactionsIdCancelPost) | **POST** /Payment/Transactions/{paymentTransactionId}/cancel | POST Payment/Transactions/{paymentTransactionId}/cancel
[**paymentTransactionsIdShippingUrlGet**](PaymentTransactionsApi.md#paymentTransactionsIdShippingUrlGet) | **GET** /Payment/Transactions/{paymentTransactionId}/ShippingUrl | GET Payment/Transactions/{paymentTransactionId}/ShippingUrl
[**revokeAccrual**](PaymentTransactionsApi.md#revokeAccrual) | **POST** /Payment/Transactions/{paymentTransactionId}/revokeAccrual | POST Payment/Transactions/{paymentTransactionId}/revokeAccrual


# **paymentTransactionsGet**
> \Secuconnect\Client\Model\PaymentTransactionsList paymentTransactionsGet($count, $offset, $fields, $q, $sort)

GET Payment/Transactions

Get a list of payment transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentTransactionsApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \"*\" for any number of characters  *                      - wildcard \"?\" for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                  Property names can be nested like \"prop1.prop2\".  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->paymentTransactionsGet($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->paymentTransactionsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\PaymentTransactionsList**](../Model/PaymentTransactionsList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentTransactionsGetById**
> \Secuconnect\Client\Model\PaymentTransactionsProductModel paymentTransactionsGetById($payment_transaction_id)

GET Payment/Transactions/{paymentTransactionId}

Get all payment transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentTransactionsApi();
$payment_transaction_id = "payment_transaction_id_example"; // string | Payment transaction id

try {
    $result = $api_instance->paymentTransactionsGetById($payment_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->paymentTransactionsGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_transaction_id** | **string**| Payment transaction id |

### Return type

[**\Secuconnect\Client\Model\PaymentTransactionsProductModel**](../Model/PaymentTransactionsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentTransactionsIdCancelPost**
> \Secuconnect\Client\Model\PaymentTransactionsCancelList[] paymentTransactionsIdCancelPost($payment_transaction_id)

POST Payment/Transactions/{paymentTransactionId}/cancel

Cancel a payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentTransactionsApi();
$payment_transaction_id = "payment_transaction_id_example"; // string | Payment transaction id

try {
    $result = $api_instance->paymentTransactionsIdCancelPost($payment_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->paymentTransactionsIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_transaction_id** | **string**| Payment transaction id |

### Return type

[**\Secuconnect\Client\Model\PaymentTransactionsCancelList[]**](../Model/PaymentTransactionsCancelList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentTransactionsIdShippingUrlGet**
> \Secuconnect\Client\Model\PaymentTransactionsShippingUrl paymentTransactionsIdShippingUrlGet($payment_transaction_id)

GET Payment/Transactions/{paymentTransactionId}/ShippingUrl

Get the url where you can fill the shipping information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentTransactionsApi();
$payment_transaction_id = "payment_transaction_id_example"; // string | Payment transaction id

try {
    $result = $api_instance->paymentTransactionsIdShippingUrlGet($payment_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->paymentTransactionsIdShippingUrlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_transaction_id** | **string**| Payment transaction id |

### Return type

[**\Secuconnect\Client\Model\PaymentTransactionsShippingUrl**](../Model/PaymentTransactionsShippingUrl.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeAccrual**
> \Secuconnect\Client\Model\SecupayTransactionProductModel revokeAccrual($payment_transaction_id, $body)

POST Payment/Transactions/{paymentTransactionId}/revokeAccrual

Revoke the accrual flag of a payment transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentTransactionsApi();
$payment_transaction_id = "payment_transaction_id_example"; // string | Payment transaction id
$body = NULL; // object | Reverse accrual input properties

try {
    $result = $api_instance->revokeAccrual($payment_transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->revokeAccrual: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_transaction_id** | **string**| Payment transaction id |
 **body** | **object**| Reverse accrual input properties | [optional]

### Return type

[**\Secuconnect\Client\Model\SecupayTransactionProductModel**](../Model/SecupayTransactionProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

