# Secuconnect\Client\PaymentContractsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callClone**](PaymentContractsApi.md#callClone) | **POST** /Payment/Contracts/{paymentContractId}/clone | POST Payment/Contracts/{paymentContractId}/clone
[**paymentContractsGet**](PaymentContractsApi.md#paymentContractsGet) | **GET** /Payment/Contracts | GET Payment/Contracts
[**paymentContractsGetById**](PaymentContractsApi.md#paymentContractsGetById) | **GET** /Payment/Contracts/{paymentContractId} | GET Payment/Contracts/{paymentContractId}
[**paymentContractsIdDelete**](PaymentContractsApi.md#paymentContractsIdDelete) | **DELETE** /Payment/Contracts/{paymentContractId} | DELETE Payment/Contracts/{paymentContractId}
[**paymentContractsIdPaymentMethodsGet**](PaymentContractsApi.md#paymentContractsIdPaymentMethodsGet) | **GET** /Payment/Contracts/{paymentContractId}/paymentMethods | GET Payment/Contracts/{paymentContractId}/paymentMethods
[**paymentContractsIdPut**](PaymentContractsApi.md#paymentContractsIdPut) | **PUT** /Payment/Contracts/{paymentContractId} | PUT Payment/Contracts/{paymentContractId}
[**paymentContractsPost**](PaymentContractsApi.md#paymentContractsPost) | **POST** /Payment/Contracts | POST Payment/Contracts
[**requestId**](PaymentContractsApi.md#requestId) | **POST** /Payment/Contracts/{paymentContractId}/requestId | POST Payment/Contracts/{paymentContractId}/requestId

# **callClone**
> \Secuconnect\Client\Model\PaymentContractsProductModel callClone($payment_contract_id, $body)

POST Payment/Contracts/{paymentContractId}/clone

Clone an existing payment contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$payment_contract_id = "payment_contract_id_example"; // string | Contract identifier
$body = new \Secuconnect\Client\Model\PaymentContractsDTOClone(); // \Secuconnect\Client\Model\PaymentContractsDTOClone | Payment contract clone properties

try {
    $result = $api_instance->callClone($payment_contract_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->callClone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_contract_id** | **string**| Contract identifier | [required]
 **body** | [**\Secuconnect\Client\Model\PaymentContractsDTOClone**](../Model/PaymentContractsDTOClone.md)| Payment contract clone properties |

### Return type

[**\Secuconnect\Client\Model\PaymentContractsProductModel**](../Model/PaymentContractsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsGet**
> \Secuconnect\Client\Model\PaymentContractsList paymentContractsGet($count, $offset, $fields, $q, $sort)

GET Payment/Contracts

Get a list of payment contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \"*\" for any number of characters  *                       - wildcard \"?\" for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                   Property names can be nested like \"prop1.prop2\".  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->paymentContractsGet($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\PaymentContractsList**](../Model/PaymentContractsList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsGetById**
> \Secuconnect\Client\Model\PaymentContractsProductModel paymentContractsGetById($payment_contract_id)

GET Payment/Contracts/{paymentContractId}

Get all payment contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$payment_contract_id = "payment_contract_id_example"; // string | Search one by provided id

try {
    $result = $api_instance->paymentContractsGetById($payment_contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_contract_id** | **string**| Search one by provided id | [required]

### Return type

[**\Secuconnect\Client\Model\PaymentContractsProductModel**](../Model/PaymentContractsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsIdDelete**
> \Secuconnect\Client\Model\PaymentContractsProductModel[] paymentContractsIdDelete($payment_contract_id)

DELETE Payment/Contracts/{paymentContractId}

Delete payment contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$payment_contract_id = "payment_contract_id_example"; // string | Payment contract id

try {
    $result = $api_instance->paymentContractsIdDelete($payment_contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_contract_id** | **string**| Payment contract id | [required]

### Return type

[**\Secuconnect\Client\Model\PaymentContractsProductModel[]**](../Model/PaymentContractsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsIdPaymentMethodsGet**
> string[] paymentContractsIdPaymentMethodsGet($payment_contract_id)

GET Payment/Contracts/{paymentContractId}/paymentMethods

Get available payment methods for given contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$payment_contract_id = "payment_contract_id_example"; // string | Contract identifier

try {
    $result = $api_instance->paymentContractsIdPaymentMethodsGet($payment_contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsIdPaymentMethodsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_contract_id** | **string**| Contract identifier | [required]

### Return type

**string[]**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsIdPut**
> \Secuconnect\Client\Model\PaymentContractsProductModel paymentContractsIdPut($payment_contract_id, $body)

PUT Payment/Contracts/{paymentContractId}

Update payment contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$payment_contract_id = "payment_contract_id_example"; // string | Payment contract id
$body = new \Secuconnect\Client\Model\PaymentContractsDTO(); // \Secuconnect\Client\Model\PaymentContractsDTO | Payment contracts properties

try {
    $result = $api_instance->paymentContractsIdPut($payment_contract_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_contract_id** | **string**| Payment contract id | [required]
 **body** | [**\Secuconnect\Client\Model\PaymentContractsDTO**](../Model/PaymentContractsDTO.md)| Payment contracts properties |

### Return type

[**\Secuconnect\Client\Model\PaymentContractsProductModel**](../Model/PaymentContractsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsPost**
> \Secuconnect\Client\Model\PaymentContractsProductModel paymentContractsPost($body)

POST Payment/Contracts

Add new contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$body = new \Secuconnect\Client\Model\PaymentContractsDTO(); // \Secuconnect\Client\Model\PaymentContractsDTO | Payment contracts properties

try {
    $result = $api_instance->paymentContractsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\PaymentContractsDTO**](../Model/PaymentContractsDTO.md)| Payment contracts properties |

### Return type

[**\Secuconnect\Client\Model\PaymentContractsProductModel**](../Model/PaymentContractsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestId**
> \Secuconnect\Client\Model\PaymentContractsRequestIdResult requestId($payment_contract_id, $body)

POST Payment/Contracts/{paymentContractId}/requestId

This method clones your payment contract, so that you can use this to separate the merchants of your marketplace. (Needs to be activated))

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$payment_contract_id = "payment_contract_id_example"; // string | Contract identifier of the parent
$body = new \Secuconnect\Client\Model\PaymentContractsDTORequestId(); // \Secuconnect\Client\Model\PaymentContractsDTORequestId | Payment contract request id properties

try {
    $result = $api_instance->requestId($payment_contract_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->requestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_contract_id** | **string**| Contract identifier of the parent | [required]
 **body** | [**\Secuconnect\Client\Model\PaymentContractsDTORequestId**](../Model/PaymentContractsDTORequestId.md)| Payment contract request id properties |

### Return type

[**\Secuconnect\Client\Model\PaymentContractsRequestIdResult**](../Model/PaymentContractsRequestIdResult.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

