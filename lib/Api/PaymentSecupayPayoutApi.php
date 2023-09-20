<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * PaymentSecupayPayoutApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentSecupayPayoutApi
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
     * @return PaymentSecupayPayoutApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getSecupaypayout
     *
     * Read Payment Secupaypayout
     *
     * @param string $payment_payout_id Payment payout id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayPayoutProductModel
     */
    public function getSecupaypayout($payment_payout_id)
    {
        list($response) = $this->getSecupaypayoutWithHttpInfo($payment_payout_id);
        return $response;
    }

    /**
     * Operation getSecupaypayoutWithHttpInfo
     *
     * Read Payment Secupaypayout
     *
     * @param string $payment_payout_id Payment payout id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayPayoutProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSecupaypayoutWithHttpInfo($payment_payout_id)
    {
        // verify the required parameter 'payment_payout_id' is set
        if ($payment_payout_id === null || (is_array($payment_payout_id) && count($payment_payout_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_payout_id when calling getSecupaypayout'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Secupaypayout/{paymentPayoutId}";
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
        if ($payment_payout_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentPayoutId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_payout_id),
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
                    '\Secuconnect\Client\Model\SecupayPayoutProductModel',
                    '/Payment/Secupaypayout/{paymentPayoutId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayPayoutProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayPayoutProductModel', $e->getResponseHeaders());
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
     * Operation paymentSecupaypayoutPost
     *
     * Create Payment Secupaypayout
     *
     * @param \Secuconnect\Client\Model\SecupayPayoutDTO $body Payout payment transaction input properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayPayoutProductModel
     */
    public function paymentSecupaypayoutPost($body)
    {
        list($response) = $this->paymentSecupaypayoutPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation paymentSecupaypayoutPostWithHttpInfo
     *
     * Create Payment Secupaypayout
     *
     * @param \Secuconnect\Client\Model\SecupayPayoutDTO $body Payout payment transaction input properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayPayoutProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentSecupaypayoutPostWithHttpInfo($body)
    {
        // parse inputs
        $resourcePath = "/Payment/Secupaypayout";
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
                    '\Secuconnect\Client\Model\SecupayPayoutProductModel',
                    '/Payment/Secupaypayout'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayPayoutProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayPayoutProductModel', $e->getResponseHeaders());
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
     * Operation paymentSecupaypayoutWithoutCustomerPost
     *
     * Start a payout transaction
     *
     * @param \Secuconnect\Client\Model\SecupayPayoutWithoutCustomerDTO $body Payout payment transaction input properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayPayoutWithoutCustomerResponse
     */
    public function paymentSecupaypayoutWithoutCustomerPost($body)
    {
        list($response) = $this->paymentSecupaypayoutWithoutCustomerPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation paymentSecupaypayoutWithoutCustomerPostWithHttpInfo
     *
     * Start a payout transaction
     *
     * @param \Secuconnect\Client\Model\SecupayPayoutWithoutCustomerDTO $body Payout payment transaction input properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayPayoutWithoutCustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentSecupaypayoutWithoutCustomerPostWithHttpInfo($body)
    {
        // parse inputs
        $resourcePath = "/Payment/Secupaypayout/me/PayoutWithoutCustomer";
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
                    '\Secuconnect\Client\Model\SecupayPayoutWithoutCustomerResponse',
                    '/Payment/Secupaypayout/me/PayoutWithoutCustomer'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayPayoutWithoutCustomerResponse', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayPayoutWithoutCustomerResponse', $e->getResponseHeaders());
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
