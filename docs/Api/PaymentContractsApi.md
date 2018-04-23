# Secuconnect\Client\PaymentContractsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentContractsGet**](PaymentContractsApi.md#paymentContractsGet) | **GET** Payment/Contracts | 
[**paymentContractsGetById**](PaymentContractsApi.md#paymentContractsGetById) | **GET** Payment/Contracts/{id} | 
[**paymentContractsIdClonePost**](PaymentContractsApi.md#paymentContractsIdClonePost) | **POST** Payment/Contracts/{id}/clone | 
[**paymentContractsIdDelete**](PaymentContractsApi.md#paymentContractsIdDelete) | **DELETE** Payment/Contracts/{id} | 
[**paymentContractsIdPaymentMethodsGet**](PaymentContractsApi.md#paymentContractsIdPaymentMethodsGet) | **GET** Payment/Contracts/{id}/PaymentMethods | 
[**paymentContractsIdPut**](PaymentContractsApi.md#paymentContractsIdPut) | **PUT** Payment/Contracts/{id} | 
[**paymentContractsIdRequestIdPost**](PaymentContractsApi.md#paymentContractsIdRequestIdPost) | **POST** Payment/Contracts/{id}/RequestId | 
[**paymentContractsPost**](PaymentContractsApi.md#paymentContractsPost) | **POST** Payment/Contracts | 


# **paymentContractsGet**
> \Secuconnect\Client\Model\InlineResponse2001 paymentContractsGet($count, $offset, $fields, $q, $sort)



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
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                      A condition may contain:  *                          - wildcard \"*\" for any number of characters  *                          - wildcard \"?\" for one character  *                          - ranges in the form [value TO value]  *  *                     Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                     Property names can be nested like \"prop1.prop2\".  *                     Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])                           *
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
 **count** | **int**| The number of items to return. | [optional]
 **offset** | **int**| The position within the whole result set to start returning items (First element is at 0). | [optional]
 **fields** | **string**| List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 | [optional]
 **q** | **string**| A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                      A condition may contain:  *                          - wildcard \&quot;*\&quot; for any number of characters  *                          - wildcard \&quot;?\&quot; for one character  *                          - ranges in the form [value TO value]  *  *                     Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                     Property names can be nested like \&quot;prop1.prop2\&quot;.  *                     Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])                           * | [optional]
 **sort** | **string**| String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. | [optional]

### Return type

[**\Secuconnect\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsGetById**
> \Secuconnect\Client\Model\PaymentContractsProductModel paymentContractsGetById($id)



Get all payment contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$id = "id_example"; // string | Search one by provided id

try {
    $result = $api_instance->paymentContractsGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Search one by provided id |

### Return type

[**\Secuconnect\Client\Model\PaymentContractsProductModel**](../Model/PaymentContractsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsIdClonePost**
> \Secuconnect\Client\Model\PaymentContractsProductModel paymentContractsIdClonePost($id)



Clone an existing payment contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$id = "id_example"; // string | Contract identifier

try {
    $result = $api_instance->paymentContractsIdClonePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsIdClonePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contract identifier |

### Return type

[**\Secuconnect\Client\Model\PaymentContractsProductModel**](../Model/PaymentContractsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsIdDelete**
> \Secuconnect\Client\Model\PaymentContractsProductModel[] paymentContractsIdDelete($id)



Delete payment contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$id = "id_example"; // string | Payment contract id

try {
    $result = $api_instance->paymentContractsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment contract id |

### Return type

[**\Secuconnect\Client\Model\PaymentContractsProductModel[]**](../Model/PaymentContractsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsIdPaymentMethodsGet**
> string[] paymentContractsIdPaymentMethodsGet($id)



Get available payment methods for given contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$id = "id_example"; // string | Contract identifier

try {
    $result = $api_instance->paymentContractsIdPaymentMethodsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsIdPaymentMethodsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contract identifier |

### Return type

**string[]**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsIdPut**
> \Secuconnect\Client\Model\PaymentContractsProductModel paymentContractsIdPut($id, $body)



Update payment contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$id = "id_example"; // string | Payment contract id
$body = new \Secuconnect\Client\Model\PaymentContractsDTO(); // \Secuconnect\Client\Model\PaymentContractsDTO | Payment contract properties

try {
    $result = $api_instance->paymentContractsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment contract id |
 **body** | [**\Secuconnect\Client\Model\PaymentContractsDTO**](../Model/PaymentContractsDTO.md)| Payment contract properties |

### Return type

[**\Secuconnect\Client\Model\PaymentContractsProductModel**](../Model/PaymentContractsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsIdRequestIdPost**
> \Secuconnect\Client\Model\InlineResponse2002 paymentContractsIdRequestIdPost($id)



This method clones your payment contract, so that you can use this to separate the merchants of your marketplace. (Needs to be activated))

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContractsApi();
$id = "id_example"; // string | Contract identifier

try {
    $result = $api_instance->paymentContractsIdRequestIdPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContractsApi->paymentContractsIdRequestIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contract identifier |

### Return type

[**\Secuconnect\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContractsPost**
> \Secuconnect\Client\Model\PaymentContractsProductModel paymentContractsPost($body)



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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
