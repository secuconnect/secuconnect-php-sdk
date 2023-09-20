<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

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
     * Operation documentUploadsMultipartPost
     *
     * Upload File / multipart MIME
     *
     * @param \Secuconnect\Client\Model\FileToUpload $body Input data format 
     * @param string $multipart multipart 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\DocumentUploadsProductModel
     */
    public function documentUploadsMultipartPost($body, $multipart = null)
    {
        list($response) = $this->documentUploadsMultipartPostWithHttpInfo($body, $multipart);
        return $response;
    }

    /**
     * Operation documentUploadsMultipartPostWithHttpInfo
     *
     * Upload File / multipart MIME
     *
     * @param \Secuconnect\Client\Model\FileToUpload $body Input data format 
     * @param string $multipart 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\DocumentUploadsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function documentUploadsMultipartPostWithHttpInfo($body, $multipart = null)
    {
        // parse inputs
        $resourcePath = "/Document/Uploads?multipart";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($multipart !== null) {
            $queryParams['multipart'] = $this->apiClient->getSerializer()->toQueryValue($multipart);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
                            continue 2;
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
     * Operation documentUploadsPost
     *
     * Upload File / JSON
     *
     * @param \Secuconnect\Client\Model\DocumentUploadsDTOContent $body Content 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\DocumentUploadsBaseProductModel
     */
    public function documentUploadsPost($body)
    {
        list($response) = $this->documentUploadsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation documentUploadsPostWithHttpInfo
     *
     * Upload File / JSON
     *
     * @param \Secuconnect\Client\Model\DocumentUploadsDTOContent $body Content 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\DocumentUploadsBaseProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function documentUploadsPostWithHttpInfo($body)
    {
        // parse inputs
        $resourcePath = "/Document/Uploads";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
                            continue 2;
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
     * Operation download
     *
     * Download uploaded file
     *
     * @param string $document_uploads_id Document Uploads ID (required)
     * @throws ApiException on non-2xx response
     * @return string
     */
    public function download($document_uploads_id)
    {
        list($response) = $this->downloadWithHttpInfo($document_uploads_id);
        return $response;
    }

    /**
     * Operation downloadWithHttpInfo
     *
     * Download uploaded file
     *
     * @param string $document_uploads_id Document Uploads ID (required)
     * @throws ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadWithHttpInfo($document_uploads_id)
    {
        // verify the required parameter 'document_uploads_id' is set
        if ($document_uploads_id === null || (is_array($document_uploads_id) && count($document_uploads_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $document_uploads_id when calling download'
            );
        }
        // parse inputs
        $resourcePath = "/Document/Uploads/{documentUploadsId}/Download";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', '*/*']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($document_uploads_id !== null) {
            $resourcePath = str_replace(
                "{" . "documentUploadsId" . "}",
                $this->apiClient->getSerializer()->toPathValue($document_uploads_id),
                $resourcePath
            );
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
                    'GET',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    'string',
                    '/Document/Uploads/{documentUploadsId}/Download'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                    case 401:
                        if ($retries < 1) {
                            Authenticator::reauthenticate();
                            continue 2;
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
     * Operation getOne
     *
     * Read Document Upload
     *
     * @param string $document_uploads_id Document Uploads ID (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\DocumentUploadsProductModelWithContent
     */
    public function getOne($document_uploads_id)
    {
        list($response) = $this->getOneWithHttpInfo($document_uploads_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * Read Document Upload
     *
     * @param string $document_uploads_id Document Uploads ID (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\DocumentUploadsProductModelWithContent, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($document_uploads_id)
    {
        // verify the required parameter 'document_uploads_id' is set
        if ($document_uploads_id === null || (is_array($document_uploads_id) && count($document_uploads_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $document_uploads_id when calling getOne'
            );
        }
        // parse inputs
        $resourcePath = "/Document/Uploads/{documentUploadsId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($document_uploads_id !== null) {
            $resourcePath = str_replace(
                "{" . "documentUploadsId" . "}",
                $this->apiClient->getSerializer()->toPathValue($document_uploads_id),
                $resourcePath
            );
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
                    'GET',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\DocumentUploadsProductModelWithContent',
                    '/Document/Uploads/{documentUploadsId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\DocumentUploadsProductModelWithContent', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\DocumentUploadsProductModelWithContent', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                    case 401:
                        if ($retries < 1) {
                            Authenticator::reauthenticate();
                            continue 2;
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
