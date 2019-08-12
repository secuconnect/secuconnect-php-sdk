# Secuconnect\Client\SmartRoutingsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRouting**](SmartRoutingsApi.md#addRouting) | **POST** /Smart/Routings | POST Smart/Routings
[**assignDeviceToRouting**](SmartRoutingsApi.md#assignDeviceToRouting) | **POST** /Smart/Routings/{smartRoutingId}/assign/{smartDeviceId} | POST Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
[**getAll**](SmartRoutingsApi.md#getAll) | **GET** /Smart/Routings | GET Smart/Routings
[**getOne**](SmartRoutingsApi.md#getOne) | **GET** /Smart/Routings/{smartRoutingId} | GET Smart/Routings/{smartRoutingId}
[**removeRouting**](SmartRoutingsApi.md#removeRouting) | **DELETE** /Smart/Routings/{smartRoutingId} | DELETE Smart/Routings/{smartRoutingId}
[**removeSmartRoutingAssignment**](SmartRoutingsApi.md#removeSmartRoutingAssignment) | **DELETE** /Smart/Routings/{smartRoutingId}/assign/{smartDeviceId} | DELETE Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
[**updateRouting**](SmartRoutingsApi.md#updateRouting) | **PUT** /Smart/Routings/{smartRoutingId} | PUT Smart/Routings/{smartRoutingId}

# **addRouting**
> \Secuconnect\Client\Model\SmartRoutingsProductModel addRouting($body)

POST Smart/Routings

Create new smart routing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartRoutingsApi();
$body = new \Secuconnect\Client\Model\SmartRoutingsDTO(); // \Secuconnect\Client\Model\SmartRoutingsDTO | Smart routing properties

try {
    $result = $api_instance->addRouting($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRoutingsApi->addRouting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\SmartRoutingsDTO**](../Model/SmartRoutingsDTO.md)| Smart routing properties |

### Return type

[**\Secuconnect\Client\Model\SmartRoutingsProductModel**](../Model/SmartRoutingsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignDeviceToRouting**
> \Secuconnect\Client\Model\SmartRoutingsProductModel assignDeviceToRouting($smart_routing_id, $smart_device_id, $body)

POST Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}

Assign the specific smart device to the specific smart routing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartRoutingsApi();
$smart_routing_id = "smart_routing_id_example"; // string | Smart routing id
$smart_device_id = "smart_device_id_example"; // string | Smart device id
$body = new \Secuconnect\Client\Model\SmartRoutingPriority(); // \Secuconnect\Client\Model\SmartRoutingPriority | Smart routing assignment properties

try {
    $result = $api_instance->assignDeviceToRouting($smart_routing_id, $smart_device_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRoutingsApi->assignDeviceToRouting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_routing_id** | **string**| Smart routing id | [required]
 **smart_device_id** | **string**| Smart device id | [required]
 **body** | [**\Secuconnect\Client\Model\SmartRoutingPriority**](../Model/SmartRoutingPriority.md)| Smart routing assignment properties |

### Return type

[**\Secuconnect\Client\Model\SmartRoutingsProductModel**](../Model/SmartRoutingsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Secuconnect\Client\Model\SmartRoutingsList getAll($count, $offset, $fields, $q, $sort)

GET Smart/Routings

Get a list of smart routings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartRoutingsApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \"*\" for any number of characters  *                       - wildcard \"?\" for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                   Property names can be nested like \"prop1.prop2\".  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->getAll($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRoutingsApi->getAll: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\SmartRoutingsList**](../Model/SmartRoutingsList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Secuconnect\Client\Model\SmartRoutingsProductModel getOne($smart_routing_id)

GET Smart/Routings/{smartRoutingId}

Get one smart routing for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartRoutingsApi();
$smart_routing_id = "smart_routing_id_example"; // string | Smart routing id

try {
    $result = $api_instance->getOne($smart_routing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRoutingsApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_routing_id** | **string**| Smart routing id | [required]

### Return type

[**\Secuconnect\Client\Model\SmartRoutingsProductModel**](../Model/SmartRoutingsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeRouting**
> \Secuconnect\Client\Model\SmartRoutingsProductModel[] removeRouting($smart_routing_id)

DELETE Smart/Routings/{smartRoutingId}

Remove specific smart roting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartRoutingsApi();
$smart_routing_id = "smart_routing_id_example"; // string | Smart routing id

try {
    $result = $api_instance->removeRouting($smart_routing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRoutingsApi->removeRouting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_routing_id** | **string**| Smart routing id | [required]

### Return type

[**\Secuconnect\Client\Model\SmartRoutingsProductModel[]**](../Model/SmartRoutingsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeSmartRoutingAssignment**
> \Secuconnect\Client\Model\SmartRoutingsProductModel removeSmartRoutingAssignment($smart_routing_id, $smart_device_id)

DELETE Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}

Remove smart routing assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartRoutingsApi();
$smart_routing_id = "smart_routing_id_example"; // string | Smart routing id
$smart_device_id = "smart_device_id_example"; // string | Smart device id

try {
    $result = $api_instance->removeSmartRoutingAssignment($smart_routing_id, $smart_device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRoutingsApi->removeSmartRoutingAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_routing_id** | **string**| Smart routing id | [required]
 **smart_device_id** | **string**| Smart device id | [required]

### Return type

[**\Secuconnect\Client\Model\SmartRoutingsProductModel**](../Model/SmartRoutingsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRouting**
> \Secuconnect\Client\Model\SmartRoutingsProductModel updateRouting($smart_routing_id, $body)

PUT Smart/Routings/{smartRoutingId}

Update specific smart routing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartRoutingsApi();
$smart_routing_id = "smart_routing_id_example"; // string | Smart routing id
$body = new \Secuconnect\Client\Model\SmartRoutingsDTO(); // \Secuconnect\Client\Model\SmartRoutingsDTO | Smart routing properties

try {
    $result = $api_instance->updateRouting($smart_routing_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRoutingsApi->updateRouting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_routing_id** | **string**| Smart routing id | [required]
 **body** | [**\Secuconnect\Client\Model\SmartRoutingsDTO**](../Model/SmartRoutingsDTO.md)| Smart routing properties |

### Return type

[**\Secuconnect\Client\Model\SmartRoutingsProductModel**](../Model/SmartRoutingsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

