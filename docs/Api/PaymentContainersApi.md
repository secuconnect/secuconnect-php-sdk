# Secuconnect\Client\PaymentContainersApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentContainersGet**](PaymentContainersApi.md#paymentContainersGet) | **GET** Payment/Containers | 
[**paymentContainersGetById**](PaymentContainersApi.md#paymentContainersGetById) | **GET** Payment/Containers/{id} | 
[**paymentContainersIdAssignSecondaryIdDelete**](PaymentContainersApi.md#paymentContainersIdAssignSecondaryIdDelete) | **DELETE** Payment/Containers/{id}/assign/{secondary-id} | 
[**paymentContainersIdAssignSecondaryIdPost**](PaymentContainersApi.md#paymentContainersIdAssignSecondaryIdPost) | **POST** Payment/Containers/{id}/assign/{secondary-id} | 
[**paymentContainersIdDelete**](PaymentContainersApi.md#paymentContainersIdDelete) | **DELETE** Payment/Containers/{id} | 
[**paymentContainersIdPut**](PaymentContainersApi.md#paymentContainersIdPut) | **PUT** Payment/Containers/{id} | 
[**paymentContainersPost**](PaymentContainersApi.md#paymentContainersPost) | **POST** Payment/Containers | 


# **paymentContainersGet**
> \Secuconnect\Client\Model\InlineResponse200 paymentContainersGet($count, $offset, $fields, $q, $sort)



Get a list of payment containers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContainersApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                      A condition may contain:  *                          - wildcard \"*\" for any number of characters  *                          - wildcard \"?\" for one character  *                          - ranges in the form [value TO value]  *  *                     Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                     Property names can be nested like \"prop1.prop2\".  *                     Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])                           *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->paymentContainersGet($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContainersApi->paymentContainersGet: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContainersGetById**
> \Secuconnect\Client\Model\PaymentContainersProductModel paymentContainersGetById($id)



Get all payment containers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContainersApi();
$id = "id_example"; // string | Search one by provided id

try {
    $result = $api_instance->paymentContainersGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContainersApi->paymentContainersGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Search one by provided id |

### Return type

[**\Secuconnect\Client\Model\PaymentContainersProductModel**](../Model/PaymentContainersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContainersIdAssignSecondaryIdDelete**
> \Secuconnect\Client\Model\PaymentContainersProductModel[] paymentContainersIdAssignSecondaryIdDelete($id, $secondary_id)



Removes an existing payment container assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContainersApi();
$id = "id_example"; // string | Payment container id
$secondary_id = "secondary_id_example"; // string | Id for which container is currently assigned to

try {
    $result = $api_instance->paymentContainersIdAssignSecondaryIdDelete($id, $secondary_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContainersApi->paymentContainersIdAssignSecondaryIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment container id |
 **secondary_id** | **string**| Id for which container is currently assigned to |

### Return type

[**\Secuconnect\Client\Model\PaymentContainersProductModel[]**](../Model/PaymentContainersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContainersIdAssignSecondaryIdPost**
> \Secuconnect\Client\Model\PaymentContainersProductModel paymentContainersIdAssignSecondaryIdPost($id, $secondary_id)



Assign an existing payment container to ...

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContainersApi();
$id = "id_example"; // string | Payment container id
$secondary_id = "secondary_id_example"; // string | Id to which container will be assigned

try {
    $result = $api_instance->paymentContainersIdAssignSecondaryIdPost($id, $secondary_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContainersApi->paymentContainersIdAssignSecondaryIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment container id |
 **secondary_id** | **string**| Id to which container will be assigned |

### Return type

[**\Secuconnect\Client\Model\PaymentContainersProductModel**](../Model/PaymentContainersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContainersIdDelete**
> \Secuconnect\Client\Model\PaymentContainersProductModel[] paymentContainersIdDelete($id)



Delete payment container

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContainersApi();
$id = "id_example"; // string | Payment container id

try {
    $result = $api_instance->paymentContainersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContainersApi->paymentContainersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment container id |

### Return type

[**\Secuconnect\Client\Model\PaymentContainersProductModel[]**](../Model/PaymentContainersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContainersIdPut**
> \Secuconnect\Client\Model\PaymentContainersProductModel paymentContainersIdPut($id, $body)



Update payment container

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContainersApi();
$id = "id_example"; // string | Payment container id
$body = new \Secuconnect\Client\Model\PaymentContainersDTO(); // \Secuconnect\Client\Model\PaymentContainersDTO | Payment container properties

try {
    $result = $api_instance->paymentContainersIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContainersApi->paymentContainersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment container id |
 **body** | [**\Secuconnect\Client\Model\PaymentContainersDTO**](../Model/PaymentContainersDTO.md)| Payment container properties |

### Return type

[**\Secuconnect\Client\Model\PaymentContainersProductModel**](../Model/PaymentContainersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentContainersPost**
> \Secuconnect\Client\Model\PaymentContainersProductModel paymentContainersPost($body)



Add new containers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\PaymentContainersApi();
$body = new \Secuconnect\Client\Model\PaymentContainersDTO(); // \Secuconnect\Client\Model\PaymentContainersDTO | Payment container properties

try {
    $result = $api_instance->paymentContainersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentContainersApi->paymentContainersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\PaymentContainersDTO**](../Model/PaymentContainersDTO.md)| Payment container properties |

### Return type

[**\Secuconnect\Client\Model\PaymentContainersProductModel**](../Model/PaymentContainersProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

