# Secuconnect\Client\LoyaltyMerchantcardsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMerchantCard**](LoyaltyMerchantcardsApi.md#addMerchantCard) | **POST** /Loyalty/MerchantCards | POST Loyalty/MerchantCards
[**checkCsc**](LoyaltyMerchantcardsApi.md#checkCsc) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc
[**checkPassCode**](LoyaltyMerchantcardsApi.md#checkPassCode) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode
[**createMerchantcards**](LoyaltyMerchantcardsApi.md#createMerchantcards) | **POST** /Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId} | POST Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}
[**executeTransaction**](LoyaltyMerchantcardsApi.md#executeTransaction) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction
[**getAll**](LoyaltyMerchantcardsApi.md#getAll) | **GET** /Loyalty/MerchantCards | GET Loyalty/MerchantCards
[**getLock**](LoyaltyMerchantcardsApi.md#getLock) | **GET** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock | GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
[**getOne**](LoyaltyMerchantcardsApi.md#getOne) | **GET** /Loyalty/MerchantCards/{loyaltyMerchantCardId} | GET Loyalty/MerchantCards/{loyaltyMerchantCardId}
[**getVirtualTerminalData**](LoyaltyMerchantcardsApi.md#getVirtualTerminalData) | **GET** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId} | GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}
[**lock**](LoyaltyMerchantcardsApi.md#lock) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
[**newPassCode**](LoyaltyMerchantcardsApi.md#newPassCode) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode
[**registerCustomer**](LoyaltyMerchantcardsApi.md#registerCustomer) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer
[**removeMerchantCard**](LoyaltyMerchantcardsApi.md#removeMerchantCard) | **DELETE** /Loyalty/MerchantCards/{loyaltyMerchantCardId} | DELETE Loyalty/MerchantCards/{loyaltyMerchantCardId}
[**resetPassCode**](LoyaltyMerchantcardsApi.md#resetPassCode) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode
[**setCustomer**](LoyaltyMerchantcardsApi.md#setCustomer) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId} | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}
[**unlock**](LoyaltyMerchantcardsApi.md#unlock) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock
[**updateCardGroupOfMerchantCard**](LoyaltyMerchantcardsApi.md#updateCardGroupOfMerchantCard) | **PUT** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId} | PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}
[**updateMerchantCard**](LoyaltyMerchantcardsApi.md#updateMerchantCard) | **PUT** /Loyalty/MerchantCards/{loyaltyMerchantCardId} | PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}
[**validateMerchantCard**](LoyaltyMerchantcardsApi.md#validateMerchantCard) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard

# **addMerchantCard**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel addMerchantCard($body)

POST Loyalty/MerchantCards

Add new loyalty merchant card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO | Loyalty merchant card properties

try {
    $result = $api_instance->addMerchantCard($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->addMerchantCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTO**](../Model/LoyaltyMerchantcardsDTO.md)| Loyalty merchant card properties |

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel**](../Model/LoyaltyMerchantcardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkCsc**
> object checkCsc($loyalty_merchant_card_id, $body)

POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc

Check CSC

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCsc(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCsc | Information about card

try {
    $result = $api_instance->checkCsc($loyalty_merchant_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->checkCsc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCsc**](../Model/LoyaltyMerchantcardsDTOCsc.md)| Information about card |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkPassCode**
> object checkPassCode($loyalty_merchant_card_id, $body)

POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode

Function to check the Passcode card with cardnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode | Information about card

try {
    $result = $api_instance->checkPassCode($loyalty_merchant_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->checkPassCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode**](../Model/LoyaltyMerchantcardsDTOCheckPasscode.md)| Information about card |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMerchantcards**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel[] createMerchantcards($general_merchant_id, $loyalty_cardgroup_id, $body)

POST Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}

Function to create multiple merchantcards for given merchant with given cardgroup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$general_merchant_id = "general_merchant_id_example"; // string | General merchant id
$loyalty_cardgroup_id = "loyalty_cardgroup_id_example"; // string | Loyalty card group id
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount | Cards amount

try {
    $result = $api_instance->createMerchantcards($general_merchant_id, $loyalty_cardgroup_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->createMerchantcards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **general_merchant_id** | **string**| General merchant id | [required]
 **loyalty_cardgroup_id** | **string**| Loyalty card group id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount**](../Model/LoyaltyMerchantcardsDTOCardsAmount.md)| Cards amount |

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel[]**](../Model/LoyaltyMerchantcardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeTransaction**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel executeTransaction($loyalty_merchant_card_id, $body)

POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction

Execute transaction from SDK

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction | Transaction properties

try {
    $result = $api_instance->executeTransaction($loyalty_merchant_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->executeTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction**](../Model/LoyaltyMerchantcardsDTOTransaction.md)| Transaction properties |

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel**](../Model/LoyaltyMerchantcardsProductWithReceiptModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsList getAll($count, $offset, $fields, $q, $sort)

GET Loyalty/MerchantCards

Get a list of loyalty merchant cards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$count = 56; // int | The number of items to return.
$offset = 56; // int | The position within the whole result set to start returning items (First element is at 0).
$fields = "fields_example"; // string | List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2
$q = "q_example"; // string | A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \"*\" for any number of characters  *                       - wildcard \"?\" for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by 'AND', 'OR', 'NOT' operators and parenthesis '(', ')' for grouping.  *                   Property names can be nested like \"prop1.prop2\".  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  *
$sort = "sort_example"; // string | String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending 'asc', or descending 'dsc' order.

try {
    $result = $api_instance->getAll($count, $offset, $fields, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->getAll: ', $e->getMessage(), PHP_EOL;
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

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsList**](../Model/LoyaltyMerchantcardsList.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLock**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock getLock($loyalty_merchant_card_id)

GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock

Get loyalty merchant card lock information for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id

try {
    $result = $api_instance->getLock($loyalty_merchant_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->getLock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock**](../Model/LoyaltyMerchantcardsDTOLock.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel getOne($loyalty_merchant_card_id)

GET Loyalty/MerchantCards/{loyaltyMerchantCardId}

Get loyalty merchant card for a specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Search one by provided id

try {
    $result = $api_instance->getOne($loyalty_merchant_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Search one by provided id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel**](../Model/LoyaltyMerchantcardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVirtualTerminalData**
> \Secuconnect\Client\Model\VirtualTerminalData getVirtualTerminalData($loyalty_merchant_card_id, $loyalty_merchant_id)

GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}

Get virtual terminal data for merchant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Merchant card id
$loyalty_merchant_id = "loyalty_merchant_id_example"; // string | Merchant id

try {
    $result = $api_instance->getVirtualTerminalData($loyalty_merchant_card_id, $loyalty_merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->getVirtualTerminalData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Merchant card id | [required]
 **loyalty_merchant_id** | **string**| Merchant id | [required]

### Return type

[**\Secuconnect\Client\Model\VirtualTerminalData**](../Model/VirtualTerminalData.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lock**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel lock($loyalty_merchant_card_id, $body)

POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock

Lock merchant card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock | Information about lock

try {
    $result = $api_instance->lock($loyalty_merchant_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->lock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock**](../Model/LoyaltyMerchantcardsDTOLock.md)| Information about lock |

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel**](../Model/LoyaltyMerchantcardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newPassCode**
> object newPassCode($loyalty_merchant_card_id, $body)

POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode

Function to save new given passcode for given merchantcard identified by cardnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode | Information about card

try {
    $result = $api_instance->newPassCode($loyalty_merchant_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->newPassCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode**](../Model/LoyaltyMerchantcardsDTONewPasscode.md)| Information about card |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerCustomer**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel registerCustomer($loyalty_merchant_card_id, $body)

POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer

Register new customer for a card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$body = new \Secuconnect\Client\Model\LoyaltyCustomersDTO(); // \Secuconnect\Client\Model\LoyaltyCustomersDTO | Loyalty customer properties

try {
    $result = $api_instance->registerCustomer($loyalty_merchant_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->registerCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyCustomersDTO**](../Model/LoyaltyCustomersDTO.md)| Loyalty customer properties |

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel**](../Model/LoyaltyMerchantcardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeMerchantCard**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel removeMerchantCard($loyalty_merchant_card_id)

DELETE Loyalty/MerchantCards/{loyaltyMerchantCardId}

Delete loyalty merchant card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id

try {
    $result = $api_instance->removeMerchantCard($loyalty_merchant_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->removeMerchantCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel**](../Model/LoyaltyMerchantcardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPassCode**
> object resetPassCode($loyalty_merchant_card_id, $body)

POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode

Function to reset a passcode for given merchantcard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode | Information about card

try {
    $result = $api_instance->resetPassCode($loyalty_merchant_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->resetPassCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode**](../Model/LoyaltyMerchantcardsDTOResetPasscode.md)| Information about card |

### Return type

**object**

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCustomer**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel setCustomer($loyalty_merchant_card_id, $loyalty_customer_id)

POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}

Set loyalty customer for a loyalty merchant card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$loyalty_customer_id = "loyalty_customer_id_example"; // string | Loyalty customer id

try {
    $result = $api_instance->setCustomer($loyalty_merchant_card_id, $loyalty_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->setCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **loyalty_customer_id** | **string**| Loyalty customer id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel**](../Model/LoyaltyMerchantcardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlock**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel unlock($loyalty_merchant_card_id, $body)

POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock

Unlock merchant card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock | Information about unlock

try {
    $result = $api_instance->unlock($loyalty_merchant_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->unlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock**](../Model/LoyaltyMerchantcardsDTOLock.md)| Information about unlock |

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel**](../Model/LoyaltyMerchantcardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCardGroupOfMerchantCard**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel updateCardGroupOfMerchantCard($loyalty_merchant_card_id, $loyalty_card_group_id)

PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}

Update loyalty card group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$loyalty_card_group_id = "loyalty_card_group_id_example"; // string | Loyalty card group id

try {
    $result = $api_instance->updateCardGroupOfMerchantCard($loyalty_merchant_card_id, $loyalty_card_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->updateCardGroupOfMerchantCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **loyalty_card_group_id** | **string**| Loyalty card group id | [required]

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel**](../Model/LoyaltyMerchantcardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMerchantCard**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel updateMerchantCard($loyalty_merchant_card_id, $body)

PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}

Update loyalty merchant card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO | Loyalty merchant card properties

try {
    $result = $api_instance->updateMerchantCard($loyalty_merchant_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->updateMerchantCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTO**](../Model/LoyaltyMerchantcardsDTO.md)| Loyalty merchant card properties |

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel**](../Model/LoyaltyMerchantcardsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateMerchantCard**
> \Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard validateMerchantCard($loyalty_merchant_card_id, $body)

POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard

Function to check the merchant card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\LoyaltyMerchantcardsApi();
$loyalty_merchant_card_id = "loyalty_merchant_card_id_example"; // string | Loyalty merchant card id
$body = new \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard(); // \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard | Information about card

try {
    $result = $api_instance->validateMerchantCard($loyalty_merchant_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyMerchantcardsApi->validateMerchantCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_merchant_card_id** | **string**| Loyalty merchant card id | [required]
 **body** | [**\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard**](../Model/LoyaltyMerchantcardsDTOValidateMerchantCard.md)| Information about card |

### Return type

[**\Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard**](../Model/LoyaltyMerchantcardsValidateMerchantCard.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

