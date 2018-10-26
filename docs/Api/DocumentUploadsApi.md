# Secuconnect\Client\DocumentUploadsApi

All URIs are relative to *https://connect-testing.secupay-ag.de/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentUploadsPost**](DocumentUploadsApi.md#documentUploadsPost) | **POST** /Document/Uploads | POST Document/Uploads
[**documentUploadsmultipartPost**](DocumentUploadsApi.md#documentUploadsmultipartPost) | **POST** /Document/Uploads?multipart | POST Document/Uploads


# **documentUploadsPost**
> \Secuconnect\Client\Model\DocumentUploadsBaseProductModel documentUploadsPost($content)

POST Document/Uploads

Store uploaded file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\DocumentUploadsApi();
$content = new \Secuconnect\Client\Model\DocumentUploadsDTOContent(); // \Secuconnect\Client\Model\DocumentUploadsDTOContent | Content

try {
    $result = $api_instance->documentUploadsPost($content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentUploadsApi->documentUploadsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content** | [**\Secuconnect\Client\Model\DocumentUploadsDTOContent**](../Model/DocumentUploadsDTOContent.md)| Content |

### Return type

[**\Secuconnect\Client\Model\DocumentUploadsBaseProductModel**](../Model/DocumentUploadsBaseProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentUploadsmultipartPost**
> \Secuconnect\Client\Model\DocumentUploadsProductModel documentUploadsmultipartPost($file_to_upload)

POST Document/Uploads

Store uploaded file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth_token
Secuconnect\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Secuconnect\Client\Api\DocumentUploadsApi();
$file_to_upload = "/path/to/file.txt"; // \SplFileObject | File to upload

try {
    $result = $api_instance->documentUploadsmultipartPost($file_to_upload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentUploadsApi->documentUploadsmultipartPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_to_upload** | **\SplFileObject**| File to upload |

### Return type

[**\Secuconnect\Client\Model\DocumentUploadsProductModel**](../Model/DocumentUploadsProductModel.md)

### Authorization

[oauth_token](../../README.md#oauth_token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

