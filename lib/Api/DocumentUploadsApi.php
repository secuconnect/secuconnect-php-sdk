<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;

/**
 * DocumentUploadsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentUploadsApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     */
    public function __construct(ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return DocumentUploadsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation documentUploadsPost
     *
     * POST Document/Uploads
     *
     * @param \Secuconnect\Client\Model\DocumentUploadsDTOContent $content Content (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\DocumentUploadsBaseProductModel
     */
    public function documentUploadsPost($content)
    {
        list($response) = $this->documentUploadsPostWithHttpInfo($content);
        return $response;
    }

    /**
     * Operation documentUploadsPostWithHttpInfo
     *
     * POST Document/Uploads
     *
     * @param \Secuconnect\Client\Model\DocumentUploadsDTOContent $content Content (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\DocumentUploadsBaseProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function documentUploadsPostWithHttpInfo($content)
    {
        // verify the required parameter 'content' is set
        if ($content === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content when calling documentUploadsPost');
        }
        // parse inputs
        $resourcePath = "/Document/Uploads";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // body params
        $_tempBody = null;
        if (isset($content)) {
            $_tempBody = $content;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        for ($retries = 0; ; $retries++) {
            
            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
            }
            
            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\DocumentUploadsBaseProductModel',
                    '/Document/Uploads'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\DocumentUploadsBaseProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\DocumentUploadsBaseProductModel', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                    case 401:
                        if ($retries < 1) {
                            Authenticator::reauthenticate();
                            continue;
                        }
                    default:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }

    /**
     * Operation documentUploadsmultipartPost
     *
     * POST Document/Uploads
     *
     * @param \SplFileObject $file_to_upload File to upload (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\DocumentUploadsProductModel
     */
    public function documentUploadsmultipartPost($file_to_upload)
    {
        list($response) = $this->documentUploadsmultipartPostWithHttpInfo($file_to_upload);
        return $response;
    }

    /**
     * Operation documentUploadsmultipartPostWithHttpInfo
     *
     * POST Document/Uploads
     *
     * @param \SplFileObject $file_to_upload File to upload (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\DocumentUploadsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function documentUploadsmultipartPostWithHttpInfo($file_to_upload)
    {
        // verify the required parameter 'file_to_upload' is set
        if ($file_to_upload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_to_upload when calling documentUploadsmultipartPost');
        }
        // parse inputs
        $resourcePath = "/Document/Uploads?multipart";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // form params
        if ($file_to_upload !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['fileToUpload'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($file_to_upload));
            } else {
                $formParams['fileToUpload'] = '@' . $this->apiClient->getSerializer()->toFormValue($file_to_upload);
            }
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        for ($retries = 0; ; $retries++) {
            
            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
            }
            
            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\DocumentUploadsProductModel',
                    '/Document/Uploads?multipart'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\DocumentUploadsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\DocumentUploadsProductModel', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                    case 401:
                        if ($retries < 1) {
                            Authenticator::reauthenticate();
                            continue;
                        }
                    default:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }
}
