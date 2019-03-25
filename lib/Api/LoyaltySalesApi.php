<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * LoyaltySalesApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltySalesApi
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
     * @return LoyaltySalesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCardgroupsByMerchantId
     *
     * GET Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID
     *
     * @param string $general_merchant_id Search by provided id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]
     */
    public function getCardgroupsByMerchantId($general_merchant_id)
    {
        list($response) = $this->getCardgroupsByMerchantIdWithHttpInfo($general_merchant_id);
        return $response;
    }

    /**
     * Operation getCardgroupsByMerchantIdWithHttpInfo
     *
     * GET Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID
     *
     * @param string $general_merchant_id Search by provided id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCardgroupsByMerchantIdWithHttpInfo($general_merchant_id)
    {
        // verify the required parameter 'general_merchant_id' is set
        if ($general_merchant_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $general_merchant_id when calling getCardgroupsByMerchantId');
        }
        // parse inputs
        $resourcePath = "/Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($general_merchant_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalMerchantId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_merchant_id),
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
                    '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]',
                    '/Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]', $e->getResponseHeaders());
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
     * Operation getVirtualTerminalIdByStoreId
     *
     * GET Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore
     *
     * @param string $general_stores_id DECODED store id (required)
     * @throws ApiException on non-2xx response
     * @return object
     */
    public function getVirtualTerminalIdByStoreId($general_stores_id)
    {
        list($response) = $this->getVirtualTerminalIdByStoreIdWithHttpInfo($general_stores_id);
        return $response;
    }

    /**
     * Operation getVirtualTerminalIdByStoreIdWithHttpInfo
     *
     * GET Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore
     *
     * @param string $general_stores_id DECODED store id (required)
     * @throws ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVirtualTerminalIdByStoreIdWithHttpInfo($general_stores_id)
    {
        // verify the required parameter 'general_stores_id' is set
        if ($general_stores_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $general_stores_id when calling getVirtualTerminalIdByStoreId');
        }
        // parse inputs
        $resourcePath = "/Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($general_stores_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalStoresId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_stores_id),
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
                    'object',
                    '/Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
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
