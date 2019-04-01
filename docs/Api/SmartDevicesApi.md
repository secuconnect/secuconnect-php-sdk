# Secuconnect\Client\SmartDevicesApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDevice**](SmartDevicesApi.md#addDevice) | **POST** /Smart/Devices | POST Smart/Devices
[**createPrepaidTid**](SmartDevicesApi.md#createPrepaidTid) | **POST** /Smart/Devices/{smartDeviceId}/createPrepaidTid | POST Smart/Devices/{smartDeviceId}/createPrepaidTid
[**createVirtualDevice**](SmartDevicesApi.md#createVirtualDevice) | **POST** /Smart/Devices/{smartDeviceId}/createVirtualDevice | POST Smart/Devices/{smartDeviceId}/createVirtualDevice
[**getAll**](SmartDevicesApi.md#getAll) | **GET** /Smart/Devices | GET Smart/Devices
[**getOne**](SmartDevicesApi.md#getOne) | **GET** /Smart/Devices/{smartDeviceId} | GET Smart/Devices/{smartDeviceId}
[**getRouting**](SmartDevicesApi.md#getRouting) | **GET** /Smart/Devices/{smartDeviceId}/routing/type/{type} | GET Smart/Devices/{smartDeviceId}/routing/type/{type}
[**getSecubaseConfig**](SmartDevicesApi.md#getSecubaseConfig) | **POST** /Smart/Devices/{smartDeviceId}/getSecubaseConfig | POST Smart/Devices/{smartDeviceId}/getSecubaseConfig
[**updateDevice**](SmartDevicesApi.md#updateDevice) | **PUT** /Smart/Devices/{smartDeviceId} | PUT Smart/Devices/{smartDeviceId}
[**updatePin**](SmartDevicesApi.md#updatePin) | **PUT** /Smart/Devices/{smartDeviceId}/pin | PUT /Smart/Devices/{smartDeviceId}/pin


# **addDevice**
> \Secuconnect\Client\Model\SmartDevicesProductModel addDevice($smart_device_properties)

POST Smart/Devices

Create new smart device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartDevicesApi();
$smart_device_properties = new \Secuconnect\Client\Model\SmartDevicesDTO(); // \Secuconnect\Client\Model\SmartDevicesDTO | Smart device properties

try {
    $result = $api_instance->addDevice($smart_device_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartDevicesApi->addDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_device_properties** | [**\Secuconnect\Client\Model\SmartDevicesDTO**](../Model/SmartDevicesDTO.md)| Smart device properties |

### Return type

[**\Secuconnect\Client\Model\SmartDevicesProductModel**](../Model/SmartDevicesProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrepaidTid**
> \Secuconnect\Client\Model\SmartDevicesProductModel createPrepaidTid($smart_device_id, $prepaid_tid_properties)

POST Smart/Devices/{smartDeviceId}/createPrepaidTid

Create prepaid tid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartDevicesApi();
$smart_device_id = "smart_device_id_example"; // string | Smart device id
$prepaid_tid_properties = new \Secuconnect\Client\Model\SmartDevicesDTOPrepaidTid(); // \Secuconnect\Client\Model\SmartDevicesDTOPrepaidTid | Prepaid tid properties

try {
    $result = $api_instance->createPrepaidTid($smart_device_id, $prepaid_tid_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartDevicesApi->createPrepaidTid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_device_id** | **string**| Smart device id |
 **prepaid_tid_properties** | [**\Secuconnect\Client\Model\SmartDevicesDTOPrepaidTid**](../Model/SmartDevicesDTOPrepaidTid.md)| Prepaid tid properties |

### Return type

[**\Secuconnect\Client\Model\SmartDevicesProductModel**](../Model/SmartDevicesProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVirtualDevice**
> \Secuconnect\Client\Model\SmartDevicesProductModel createVirtualDevice($smart_device_id)

POST Smart/Devices/{smartDeviceId}/createVirtualDevice

Create virtual device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartDevicesApi();
$smart_device_id = "smart_device_id_example"; // string | Smart device id

try {
    $result = $api_instance->createVirtualDevice($smart_device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartDevicesApi->createVirtualDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_device_id** | **string**| Smart device id |

### Return type

[**\Secuconnect\Client\Model\SmartDevicesProductModel**](../Model/SmartDevicesProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Secuconnect\Client\Model\SmartDevicesList getAll($count, $offset, $fields, $q, $sort)

GET Smart/Devices

Get a list of smart devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartDevicesApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \"*\" for any number of characters  *                      - wildcard \"?\" for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                  Property names can be nested like \"prop1.prop2\".  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->getAll($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartDevicesApi->getAll: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\SmartDevicesList**](../Model/SmartDevicesList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Secuconnect\Client\Model\SmartDevicesProductModel getOne($smart_device_id)

GET Smart/Devices/{smartDeviceId}

Get one smart device for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartDevicesApi();
$smart_device_id = "smart_device_id_example"; // string | Smart device id

try {
    $result = $api_instance->getOne($smart_device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartDevicesApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_device_id** | **string**| Smart device id |

### Return type

[**\Secuconnect\Client\Model\SmartDevicesProductModel**](../Model/SmartDevicesProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRouting**
> \Secuconnect\Client\Model\SmartDevicesList1 getRouting($smart_device_id, $type)

GET Smart/Devices/{smartDeviceId}/routing/type/{type}

Get single routing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartDevicesApi();
$smart_device_id = "smart_device_id_example"; // string | Smart device id
$type = "type_example"; // string | Payment type

try {
    $result = $api_instance->getRouting($smart_device_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartDevicesApi->getRouting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_device_id** | **string**| Smart device id |
 **type** | **string**| Payment type |

### Return type

[**\Secuconnect\Client\Model\SmartDevicesList1**](../Model/SmartDevicesList1.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSecubaseConfig**
> \Secuconnect\Client\Model\SmartDevicesSecubaseConfig getSecubaseConfig($smart_device_id, $secubase_config_properties)

POST Smart/Devices/{smartDeviceId}/getSecubaseConfig

Get secubase config

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartDevicesApi();
$smart_device_id = "smart_device_id_example"; // string | Smart device id
$secubase_config_properties = new \Secuconnect\Client\Model\SmartDevicesDTOSecubaseConfig(); // \Secuconnect\Client\Model\SmartDevicesDTOSecubaseConfig | Secubase config properties

try {
    $result = $api_instance->getSecubaseConfig($smart_device_id, $secubase_config_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartDevicesApi->getSecubaseConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_device_id** | **string**| Smart device id |
 **secubase_config_properties** | [**\Secuconnect\Client\Model\SmartDevicesDTOSecubaseConfig**](../Model/SmartDevicesDTOSecubaseConfig.md)| Secubase config properties |

### Return type

[**\Secuconnect\Client\Model\SmartDevicesSecubaseConfig**](../Model/SmartDevicesSecubaseConfig.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDevice**
> \Secuconnect\Client\Model\SmartDevicesProductModel updateDevice($smart_device_id, $smart_device_properties)

PUT Smart/Devices/{smartDeviceId}

Update smart device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartDevicesApi();
$smart_device_id = "smart_device_id_example"; // string | Smart device id
$smart_device_properties = new \Secuconnect\Client\Model\SmartDevicesDTO(); // \Secuconnect\Client\Model\SmartDevicesDTO | Smart device properties

try {
    $result = $api_instance->updateDevice($smart_device_id, $smart_device_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartDevicesApi->updateDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_device_id** | **string**| Smart device id |
 **smart_device_properties** | [**\Secuconnect\Client\Model\SmartDevicesDTO**](../Model/SmartDevicesDTO.md)| Smart device properties |

### Return type

[**\Secuconnect\Client\Model\SmartDevicesProductModel**](../Model/SmartDevicesProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePin**
> \Secuconnect\Client\Model\SmartDevicesProductModel updatePin($smart_device_id, $smart_device_properties)

PUT /Smart/Devices/{smartDeviceId}/pin

Create new smart device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\SmartDevicesApi();
$smart_device_id = "smart_device_id_example"; // string | Smart device id
$smart_device_properties = new \Secuconnect\Client\Model\SmartDeviceUserPin(); // \Secuconnect\Client\Model\SmartDeviceUserPin | Smart device properties

try {
    $result = $api_instance->updatePin($smart_device_id, $smart_device_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartDevicesApi->updatePin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_device_id** | **string**| Smart device id |
 **smart_device_properties** | [**\Secuconnect\Client\Model\SmartDeviceUserPin**](../Model/SmartDeviceUserPin.md)| Smart device properties |

### Return type

[**\Secuconnect\Client\Model\SmartDevicesProductModel**](../Model/SmartDevicesProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

