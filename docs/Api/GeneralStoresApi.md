# Secuconnect\Client\GeneralStoresApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addStore**](GeneralStoresApi.md#addStore) | **POST** /General/Stores | POST General/Stores
[**assignGoogleKey**](GeneralStoresApi.md#assignGoogleKey) | **POST** /General/Stores/{generalStoreId}/assign/{googleKey} | POST General/Stores/{generalStoreId}/assign/{googleKey}
[**checkIn**](GeneralStoresApi.md#checkIn) | **POST** /General/Stores/{generalStoreId}/checkin | POST General/Stores/{generalStoreId}/checkin
[**getAll**](GeneralStoresApi.md#getAll) | **GET** /General/Stores | GET General/Stores
[**getOne**](GeneralStoresApi.md#getOne) | **GET** /General/Stores/{generalStoreId} | GET General/Stores/{generalStoreId}
[**setDefault**](GeneralStoresApi.md#setDefault) | **POST** /General/Stores/{generalStoreId}/setDefault | POST General/Stores/{generalStoreId}/setDefault
[**updateStore**](GeneralStoresApi.md#updateStore) | **PUT** /General/Stores/{generalStoreId} | PUT General/Stores/{generalStoreId}

# **addStore**
> \Secuconnect\Client\Model\GeneralStoresProductModel addStore($body)

POST General/Stores

Create general store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\GeneralStoresApi();
$body = new \Secuconnect\Client\Model\GeneralStoresDTO(); // \Secuconnect\Client\Model\GeneralStoresDTO | General store properties

try {
    $result = $api_instance->addStore($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralStoresApi->addStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\GeneralStoresDTO**](../Model/GeneralStoresDTO.md)| General store properties |

### Return type

[**\Secuconnect\Client\Model\GeneralStoresProductModel**](../Model/GeneralStoresProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignGoogleKey**
> object assignGoogleKey($general_store_id, $google_key)

POST General/Stores/{generalStoreId}/assign/{googleKey}

Assign some object to general store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\GeneralStoresApi();
$general_store_id = "general_store_id_example"; // string | General store id
$google_key = "google_key_example"; // string | Google key

try {
    $result = $api_instance->assignGoogleKey($general_store_id, $google_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralStoresApi->assignGoogleKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **general_store_id** | **string**| General store id | [required]
 **google_key** | **string**| Google key | [required]

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkIn**
> object checkIn($general_store_id, $body)

POST General/Stores/{generalStoreId}/checkin

Check in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\GeneralStoresApi();
$general_store_id = "general_store_id_example"; // string | General store id
$body = new \Secuconnect\Client\Model\GeneralStoresDTOType(); // \Secuconnect\Client\Model\GeneralStoresDTOType | General store properties

try {
    $result = $api_instance->checkIn($general_store_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralStoresApi->checkIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **general_store_id** | **string**| General store id | [required]
 **body** | [**\Secuconnect\Client\Model\GeneralStoresDTOType**](../Model/GeneralStoresDTOType.md)| General store properties |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Secuconnect\Client\Model\GeneralStoresList getAll($count, $offset, $fields, $q, $sort)

GET General/Stores

Get a list of general stores

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\GeneralStoresApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \"*\" for any number of characters  *                       - wildcard \"?\" for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                   Property names can be nested like \"prop1.prop2\".  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->getAll($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralStoresApi->getAll: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\GeneralStoresList**](../Model/GeneralStoresList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Secuconnect\Client\Model\GeneralStoresProductModel getOne($general_store_id)

GET General/Stores/{generalStoreId}

Get one general store for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\GeneralStoresApi();
$general_store_id = "general_store_id_example"; // string | General store id

try {
    $result = $api_instance->getOne($general_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralStoresApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **general_store_id** | **string**| General store id | [required]

### Return type

[**\Secuconnect\Client\Model\GeneralStoresProductModel**](../Model/GeneralStoresProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDefault**
> object setDefault($general_store_id, $body)

POST General/Stores/{generalStoreId}/setDefault

Set default flag on general store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\GeneralStoresApi();
$general_store_id = "general_store_id_example"; // string | General store id
$body = new \Secuconnect\Client\Model\GeneralStoresDTOReason(); // \Secuconnect\Client\Model\GeneralStoresDTOReason | Reason

try {
    $result = $api_instance->setDefault($general_store_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralStoresApi->setDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **general_store_id** | **string**| General store id | [required]
 **body** | [**\Secuconnect\Client\Model\GeneralStoresDTOReason**](../Model/GeneralStoresDTOReason.md)| Reason |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStore**
> \Secuconnect\Client\Model\GeneralStoresProductModel updateStore($general_store_id, $body)

PUT General/Stores/{generalStoreId}

Update general store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\GeneralStoresApi();
$general_store_id = "general_store_id_example"; // string | General store id
$body = new \Secuconnect\Client\Model\GeneralStoresDTO(); // \Secuconnect\Client\Model\GeneralStoresDTO | General store properties

try {
    $result = $api_instance->updateStore($general_store_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralStoresApi->updateStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **general_store_id** | **string**| General store id | [required]
 **body** | [**\Secuconnect\Client\Model\GeneralStoresDTO**](../Model/GeneralStoresDTO.md)| General store properties |

### Return type

[**\Secuconnect\Client\Model\GeneralStoresProductModel**](../Model/GeneralStoresProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

