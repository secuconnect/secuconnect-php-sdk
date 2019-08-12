# Secuconnect\Client\SmartTransactionsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTransaction**](SmartTransactionsApi.md#addTransaction) | **POST** /Smart/Transactions | POST Smart/Transactions
[**cancelTransaction**](SmartTransactionsApi.md#cancelTransaction) | **POST** /Smart/Transactions/{smartTransactionId}/cancel | POST Smart/Transactions/{smartTransactionId}/cancel
[**cancelTrx**](SmartTransactionsApi.md#cancelTrx) | **POST** /Smart/Transactions/{smartTransactionId}/canceltrx | POST Smart/Transactions/{smartTransactionId}/canceltrx
[**diagnose**](SmartTransactionsApi.md#diagnose) | **POST** /Smart/Transactions/{smartDeviceId}/diagnosis | POST Smart/Transactions/{smartDeviceId}/diagnosis
[**getAll**](SmartTransactionsApi.md#getAll) | **GET** /Smart/Transactions | GET Smart/Transactions
[**getOne**](SmartTransactionsApi.md#getOne) | **GET** /Smart/Transactions/{smartTransactionId} | GET Smart/Transactions/{smartTransactionId}
[**preTransaction**](SmartTransactionsApi.md#preTransaction) | **POST** /Smart/Transactions/{smartTransactionId}/preTransaction | POST Smart/Transactions/{smartTransactionId}/preTransaction
[**prepare**](SmartTransactionsApi.md#prepare) | **POST** /Smart/Transactions/{smartTransactionId}/prepare | POST Smart/Transactions/stx_xxx/prepare
[**startEndOfDayReport**](SmartTransactionsApi.md#startEndOfDayReport) | **POST** /Smart/Transactions/{smartDeviceId}/endOfDay | POST Smart/Transactions/{smartDeviceId}/endOfDay
[**startTransaction**](SmartTransactionsApi.md#startTransaction) | **POST** /Smart/Transactions/{smartTransactionId}/start/{paymentMethod} | POST Smart/Transactions/{smartTransactionId}/start/{paymentMethod}
[**updateTransaction**](SmartTransactionsApi.md#updateTransaction) | **PUT** /Smart/Transactions/{smartTransactionId} | PUT Smart/Transactions/{smartTransactionId}

# **addTransaction**
> \Secuconnect\Client\Model\SmartTransactionsProductModel addTransaction($body)

POST Smart/Transactions

Create new smart transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$body = new \Secuconnect\Client\Model\SmartTransactionsDTO(); // \Secuconnect\Client\Model\SmartTransactionsDTO | Smart transaction properties

try {
    $result = $api_instance->addTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->addTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\SmartTransactionsDTO**](../Model/SmartTransactionsDTO.md)| Smart transaction properties |

### Return type

[**\Secuconnect\Client\Model\SmartTransactionsProductModel**](../Model/SmartTransactionsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelTransaction**
> \Secuconnect\Client\Model\SmartTransactionsProductModel cancelTransaction($smart_transaction_id)

POST Smart/Transactions/{smartTransactionId}/cancel

Method to cancel the transaction with given idn

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$smart_transaction_id = "smart_transaction_id_example"; // string | Smart transaction id

try {
    $result = $api_instance->cancelTransaction($smart_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->cancelTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_transaction_id** | **string**| Smart transaction id | [required]

### Return type

[**\Secuconnect\Client\Model\SmartTransactionsProductModel**](../Model/SmartTransactionsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelTrx**
> \Secuconnect\Client\Model\SmartTransactionsProductModel cancelTrx($smart_transaction_id)

POST Smart/Transactions/{smartTransactionId}/canceltrx

Starts Cancel 'Cash' transaction on Terminal with 'receipt_number' ('Beleg-Nr.')

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$smart_transaction_id = "smart_transaction_id_example"; // string | Smart transaction id

try {
    $result = $api_instance->cancelTrx($smart_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->cancelTrx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_transaction_id** | **string**| Smart transaction id | [required]

### Return type

[**\Secuconnect\Client\Model\SmartTransactionsProductModel**](../Model/SmartTransactionsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diagnose**
> \Secuconnect\Client\Model\SmartTransactionsProductModel diagnose($smart_device_id)

POST Smart/Transactions/{smartDeviceId}/diagnosis

Starts extended Diagnose on Terminal, this method is normally called by SDK's from cash register

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$smart_device_id = "smart_device_id_example"; // string | Smart device id

try {
    $result = $api_instance->diagnose($smart_device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->diagnose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_device_id** | **string**| Smart device id | [required]

### Return type

[**\Secuconnect\Client\Model\SmartTransactionsProductModel**](../Model/SmartTransactionsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Secuconnect\Client\Model\SmartTransactionsList getAll($count, $offset, $fields, $q, $sort)

GET Smart/Transactions

Get a list of smart transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \"*\" for any number of characters  *                       - wildcard \"?\" for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                   Property names can be nested like \"prop1.prop2\".  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->getAll($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->getAll: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\SmartTransactionsList**](../Model/SmartTransactionsList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Secuconnect\Client\Model\SmartTransactionsProductModel getOne($smart_transaction_id)

GET Smart/Transactions/{smartTransactionId}

Get one smart transaction for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$smart_transaction_id = "smart_transaction_id_example"; // string | Smart transaction id

try {
    $result = $api_instance->getOne($smart_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_transaction_id** | **string**| Smart transaction id | [required]

### Return type

[**\Secuconnect\Client\Model\SmartTransactionsProductModel**](../Model/SmartTransactionsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preTransaction**
> \Secuconnect\Client\Model\SmartTransactionsPreTransactionModel preTransaction($smart_transaction_id)

POST Smart/Transactions/{smartTransactionId}/preTransaction

Function that checks balance of merchantcard from ident and if possible creates bonus product items for basket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$smart_transaction_id = "smart_transaction_id_example"; // string | Smart transaction id

try {
    $result = $api_instance->preTransaction($smart_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->preTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_transaction_id** | **string**| Smart transaction id | [required]

### Return type

[**\Secuconnect\Client\Model\SmartTransactionsPreTransactionModel**](../Model/SmartTransactionsPreTransactionModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prepare**
> \Secuconnect\Client\Model\SmartTransactionsProductModel prepare($smart_transaction_id, $body)

POST Smart/Transactions/stx_xxx/prepare

Create and score payment transaction assigned to given smart transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$smart_transaction_id = "smart_transaction_id_example"; // string | Smart transaction id
$body = new \Secuconnect\Client\Model\SmartTransactionsPrepare(); // \Secuconnect\Client\Model\SmartTransactionsPrepare | Information which customer and container will be used to this operation

try {
    $result = $api_instance->prepare($smart_transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->prepare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_transaction_id** | **string**| Smart transaction id | [required]
 **body** | [**\Secuconnect\Client\Model\SmartTransactionsPrepare**](../Model/SmartTransactionsPrepare.md)| Information which customer and container will be used to this operation |

### Return type

[**\Secuconnect\Client\Model\SmartTransactionsProductModel**](../Model/SmartTransactionsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startEndOfDayReport**
> \Secuconnect\Client\Model\SmartTransactionsProductModel startEndOfDayReport($smart_device_id)

POST Smart/Transactions/{smartDeviceId}/endOfDay

Starts End of Day Report on Terminal, this method is normally called by SDK's from cash register

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$smart_device_id = "smart_device_id_example"; // string | Smart device id

try {
    $result = $api_instance->startEndOfDayReport($smart_device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->startEndOfDayReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_device_id** | **string**| Smart device id | [required]

### Return type

[**\Secuconnect\Client\Model\SmartTransactionsProductModel**](../Model/SmartTransactionsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startTransaction**
> \Secuconnect\Client\Model\SmartTransactionsProductModel startTransaction($smart_transaction_id, $payment_method)

POST Smart/Transactions/{smartTransactionId}/start/{paymentMethod}

Start smart transaction with given payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$smart_transaction_id = "smart_transaction_id_example"; // string | Smart transaction id
$payment_method = "payment_method_example"; // string | Payment method

try {
    $result = $api_instance->startTransaction($smart_transaction_id, $payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->startTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_transaction_id** | **string**| Smart transaction id | [required]
 **payment_method** | **string**| Payment method | [required]

### Return type

[**\Secuconnect\Client\Model\SmartTransactionsProductModel**](../Model/SmartTransactionsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransaction**
> \Secuconnect\Client\Model\SmartTransactionsProductModel updateTransaction($smart_transaction_id, $body)

PUT Smart/Transactions/{smartTransactionId}

Update smart transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartTransactionsApi();
$smart_transaction_id = "smart_transaction_id_example"; // string | Smart transaction id
$body = new \Secuconnect\Client\Model\SmartTransactionsDTO(); // \Secuconnect\Client\Model\SmartTransactionsDTO | Smart transaction properties

try {
    $result = $api_instance->updateTransaction($smart_transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartTransactionsApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_transaction_id** | **string**| Smart transaction id | [required]
 **body** | [**\Secuconnect\Client\Model\SmartTransactionsDTO**](../Model/SmartTransactionsDTO.md)| Smart transaction properties |

### Return type

[**\Secuconnect\Client\Model\SmartTransactionsProductModel**](../Model/SmartTransactionsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

