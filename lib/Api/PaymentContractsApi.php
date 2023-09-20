<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * PaymentContractsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsApi
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
     * @return PaymentContractsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation callClone
     *
     * Clone contract
     *
     * @param string $payment_contract_id Payment Contract ID (&#x60;PCR_...&#x60;) or General Contract ID (&#x60;GCR_...&#x60;) of master contract (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTOClone $body New Payment Contract 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     */
    public function callClone($payment_contract_id, $body)
    {
        list($response) = $this->callCloneWithHttpInfo($payment_contract_id, $body);
        return $response;
    }

    /**
     * Operation callCloneWithHttpInfo
     *
     * Clone contract
     *
     * @param string $payment_contract_id Payment Contract ID (&#x60;PCR_...&#x60;) or General Contract ID (&#x60;GCR_...&#x60;) of master contract (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTOClone $body New Payment Contract 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function callCloneWithHttpInfo($payment_contract_id, $body)
    {
        // verify the required parameter 'payment_contract_id' is set
        if ($payment_contract_id === null || (is_array($payment_contract_id) && count($payment_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling callClone'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}/clone";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($payment_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
                $resourcePath
            );
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
                    '\Secuconnect\Client\Model\PaymentContractsProductModel',
                    '/Payment/Contracts/{paymentContractId}/clone'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContractsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContractsProductModel', $e->getResponseHeaders());
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
     * Operation paymentContractsGet
     *
     * Find Payment Contracts
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result, all others will be filtered out. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;desc&#x60; descending. 
     * @param \Secuconnect\Client\Model\Aggregate $aggregate Aggregation summarizes your data. 
     * @param string $meta return field definitions 
     * @param float $validate Check syntax of a query string 
     * @param string $scroll_expire How long it should keep the “search context” alive? 
     * @param string $scroll_id Identifier of a previous search context. 
     * @param string $preset Query presets 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContractsList
     */
    public function paymentContractsGet($count = null, $offset = null, $fields = null, $q = null, $sort = null, $aggregate = null, $meta = null, $validate = null, $scroll_expire = null, $scroll_id = null, $preset = null)
    {
        list($response) = $this->paymentContractsGetWithHttpInfo($count, $offset, $fields, $q, $sort, $aggregate, $meta, $validate, $scroll_expire, $scroll_id, $preset);
        return $response;
    }

    /**
     * Operation paymentContractsGetWithHttpInfo
     *
     * Find Payment Contracts
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result, all others will be filtered out. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;desc&#x60; descending. 
     * @param \Secuconnect\Client\Model\Aggregate $aggregate Aggregation summarizes your data. 
     * @param string $meta return field definitions 
     * @param float $validate Check syntax of a query string 
     * @param string $scroll_expire How long it should keep the “search context” alive? 
     * @param string $scroll_id Identifier of a previous search context. 
     * @param string $preset Query presets 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContractsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContractsGetWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null, $aggregate = null, $meta = null, $validate = null, $scroll_expire = null, $scroll_id = null, $preset = null)
    {
        // parse inputs
        $resourcePath = "/Payment/Contracts";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // query params
        if ($q !== null) {
            $queryParams['q'] = $this->apiClient->getSerializer()->toQueryValue($q);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($aggregate !== null) {
            $queryParams['aggregate'] = $this->apiClient->getSerializer()->toQueryValue($aggregate);
        }
        // query params
        if ($meta !== null) {
            $queryParams['meta'] = $this->apiClient->getSerializer()->toQueryValue($meta);
        }
        // query params
        if ($validate !== null) {
            $queryParams['validate'] = $this->apiClient->getSerializer()->toQueryValue($validate);
        }
        // query params
        if ($scroll_expire !== null) {
            $queryParams['scroll_expire'] = $this->apiClient->getSerializer()->toQueryValue($scroll_expire);
        }
        // query params
        if ($scroll_id !== null) {
            $queryParams['scroll_id'] = $this->apiClient->getSerializer()->toQueryValue($scroll_id);
        }
        // query params
        if ($preset !== null) {
            $queryParams['preset'] = $this->apiClient->getSerializer()->toQueryValue($preset);
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
                    '\Secuconnect\Client\Model\PaymentContractsList',
                    '/Payment/Contracts'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContractsList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContractsList', $e->getResponseHeaders());
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
     * Operation paymentContractsGetById
     *
     * Read Payment Contract
     *
     * @param string $payment_contract_id Payment Contract ID (&#x60;PCR_...&#x60;) or General Contract ID (&#x60;GCR_...&#x60;) (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     */
    public function paymentContractsGetById($payment_contract_id)
    {
        list($response) = $this->paymentContractsGetByIdWithHttpInfo($payment_contract_id);
        return $response;
    }

    /**
     * Operation paymentContractsGetByIdWithHttpInfo
     *
     * Read Payment Contract
     *
     * @param string $payment_contract_id Payment Contract ID (&#x60;PCR_...&#x60;) or General Contract ID (&#x60;GCR_...&#x60;) (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContractsGetByIdWithHttpInfo($payment_contract_id)
    {
        // verify the required parameter 'payment_contract_id' is set
        if ($payment_contract_id === null || (is_array($payment_contract_id) && count($payment_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling paymentContractsGetById'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}";
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
        if ($payment_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
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
                    '\Secuconnect\Client\Model\PaymentContractsProductModel',
                    '/Payment/Contracts/{paymentContractId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContractsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContractsProductModel', $e->getResponseHeaders());
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
     * Operation paymentContractsIdPaymentMethodsGet
     *
     * Get available payment methods
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return string[]
     */
    public function paymentContractsIdPaymentMethodsGet($payment_contract_id)
    {
        list($response) = $this->paymentContractsIdPaymentMethodsGetWithHttpInfo($payment_contract_id);
        return $response;
    }

    /**
     * Operation paymentContractsIdPaymentMethodsGetWithHttpInfo
     *
     * Get available payment methods
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContractsIdPaymentMethodsGetWithHttpInfo($payment_contract_id)
    {
        // verify the required parameter 'payment_contract_id' is set
        if ($payment_contract_id === null || (is_array($payment_contract_id) && count($payment_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling paymentContractsIdPaymentMethodsGet'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}/paymentMethods";
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
        if ($payment_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
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
                    'string[]',
                    '/Payment/Contracts/{paymentContractId}/paymentMethods'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
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
     * Operation requestId
     *
     * Clone contract and request identification
     *
     * @param string $payment_contract_id Payment Contract ID (&#x60;PCR_...&#x60;) or General Contract ID (&#x60;GCR_...&#x60;) of master contract (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTORequestId $body Payment contract request id properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContractsRequestIdResult
     */
    public function requestId($payment_contract_id, $body)
    {
        list($response) = $this->requestIdWithHttpInfo($payment_contract_id, $body);
        return $response;
    }

    /**
     * Operation requestIdWithHttpInfo
     *
     * Clone contract and request identification
     *
     * @param string $payment_contract_id Payment Contract ID (&#x60;PCR_...&#x60;) or General Contract ID (&#x60;GCR_...&#x60;) of master contract (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTORequestId $body Payment contract request id properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContractsRequestIdResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function requestIdWithHttpInfo($payment_contract_id, $body)
    {
        // verify the required parameter 'payment_contract_id' is set
        if ($payment_contract_id === null || (is_array($payment_contract_id) && count($payment_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling requestId'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}/requestId";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($payment_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
                $resourcePath
            );
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
                    '\Secuconnect\Client\Model\PaymentContractsRequestIdResult',
                    '/Payment/Contracts/{paymentContractId}/requestId'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContractsRequestIdResult', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContractsRequestIdResult', $e->getResponseHeaders());
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
     * Operation revokeAccrual
     *
     * Revoke all accruals
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return void
     */
    public function revokeAccrual($payment_contract_id)
    {
        $this->revokeAccrualWithHttpInfo($payment_contract_id);
    }

    /**
     * Operation revokeAccrualWithHttpInfo
     *
     * Revoke all accruals
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function revokeAccrualWithHttpInfo($payment_contract_id)
    {
        // verify the required parameter 'payment_contract_id' is set
        if ($payment_contract_id === null || (is_array($payment_contract_id) && count($payment_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling revokeAccrual'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}/revokeAccrual";
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
        if ($payment_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    null,
                    '/Payment/Contracts/{paymentContractId}/revokeAccrual'
                );

                return [null, $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
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
     * Operation updateBankAccount
     *
     * Change bank account
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $body body 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ResultBoolean
     */
    public function updateBankAccount($payment_contract_id, $body)
    {
        list($response) = $this->updateBankAccountWithHttpInfo($payment_contract_id, $body);
        return $response;
    }

    /**
     * Operation updateBankAccountWithHttpInfo
     *
     * Change bank account
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $body 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBankAccountWithHttpInfo($payment_contract_id, $body)
    {
        // verify the required parameter 'payment_contract_id' is set
        if ($payment_contract_id === null || (is_array($payment_contract_id) && count($payment_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling updateBankAccount'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}/updateBankAccount";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($payment_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
                $resourcePath
            );
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
                    '\Secuconnect\Client\Model\ResultBoolean',
                    '/Payment/Contracts/{paymentContractId}/updateBankAccount'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\ResultBoolean', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ResultBoolean', $e->getResponseHeaders());
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
