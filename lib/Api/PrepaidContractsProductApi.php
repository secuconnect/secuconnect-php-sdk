<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;

/**
 * PrepaidContractsProductApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrepaidContractsProductApi
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
     * @return PrepaidContractsProductApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation prepaidContractsMeMappingZvtPost
     *
     * POST Prepaid/Contracts/null/mappingZvt
     *
     * @param \Secuconnect\Client\Model\PrepaidZvtDTO $body Prepaid transaction input properties (optional)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PrepaidMappingZvt
     */
    public function prepaidContractsMeMappingZvtPost($body = null)
    {
        list($response) = $this->prepaidContractsMeMappingZvtPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation prepaidContractsMeMappingZvtPostWithHttpInfo
     *
     * POST Prepaid/Contracts/null/mappingZvt
     *
     * @param \Secuconnect\Client\Model\PrepaidZvtDTO $body Prepaid transaction input properties (optional)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PrepaidMappingZvt, HTTP status code, HTTP response headers (array of strings)
     */
    public function prepaidContractsMeMappingZvtPostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/Prepaid/Contracts/me/mappingZvt";
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
                    '\Secuconnect\Client\Model\PrepaidMappingZvt',
                    '/Prepaid/Contracts/me/mappingZvt'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PrepaidMappingZvt', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PrepaidMappingZvt', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }
}
