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
     * POST Payment/Contracts/{paymentContractId}/clone
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTOClone $body Payment contract clone properties 
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
     * POST Payment/Contracts/{paymentContractId}/clone
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTOClone $body Payment contract clone properties 
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
     * GET Payment/Contracts
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.   Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending. 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContractsList
     */
    public function paymentContractsGet($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->paymentContractsGetWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation paymentContractsGetWithHttpInfo
     *
     * GET Payment/Contracts
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.   Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending. 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContractsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContractsGetWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
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
     * GET Payment/Contracts/{paymentContractId}
     *
     * @param string $payment_contract_id Search one by provided id (required)
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
     * GET Payment/Contracts/{paymentContractId}
     *
     * @param string $payment_contract_id Search one by provided id (required)
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
     * Operation paymentContractsIdDelete
     *
     * DELETE Payment/Contracts/{paymentContractId}
     *
     * @param string $payment_contract_id Payment contract id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel[]
     */
    public function paymentContractsIdDelete($payment_contract_id)
    {
        list($response) = $this->paymentContractsIdDeleteWithHttpInfo($payment_contract_id);
        return $response;
    }

    /**
     * Operation paymentContractsIdDeleteWithHttpInfo
     *
     * DELETE Payment/Contracts/{paymentContractId}
     *
     * @param string $payment_contract_id Payment contract id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContractsProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContractsIdDeleteWithHttpInfo($payment_contract_id)
    {
        // verify the required parameter 'payment_contract_id' is set
        if ($payment_contract_id === null || (is_array($payment_contract_id) && count($payment_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling paymentContractsIdDelete'
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
                    'DELETE',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\PaymentContractsProductModel[]',
                    '/Payment/Contracts/{paymentContractId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContractsProductModel[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContractsProductModel[]', $e->getResponseHeaders());
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
     * GET Payment/Contracts/{paymentContractId}/paymentMethods
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\StringList
     */
    public function paymentContractsIdPaymentMethodsGet($payment_contract_id)
    {
        list($response) = $this->paymentContractsIdPaymentMethodsGetWithHttpInfo($payment_contract_id);
        return $response;
    }

    /**
     * Operation paymentContractsIdPaymentMethodsGetWithHttpInfo
     *
     * GET Payment/Contracts/{paymentContractId}/paymentMethods
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\StringList, HTTP status code, HTTP response headers (array of strings)
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
                    '\Secuconnect\Client\Model\StringList',
                    '/Payment/Contracts/{paymentContractId}/paymentMethods'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\StringList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\StringList', $e->getResponseHeaders());
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
     * Operation paymentContractsIdPut
     *
     * PUT Payment/Contracts/{paymentContractId}
     *
     * @param string $payment_contract_id Payment contract id (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTO $body Payment contracts properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     */
    public function paymentContractsIdPut($payment_contract_id, $body)
    {
        list($response) = $this->paymentContractsIdPutWithHttpInfo($payment_contract_id, $body);
        return $response;
    }

    /**
     * Operation paymentContractsIdPutWithHttpInfo
     *
     * PUT Payment/Contracts/{paymentContractId}
     *
     * @param string $payment_contract_id Payment contract id (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTO $body Payment contracts properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContractsIdPutWithHttpInfo($payment_contract_id, $body)
    {
        // verify the required parameter 'payment_contract_id' is set
        if ($payment_contract_id === null || (is_array($payment_contract_id) && count($payment_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling paymentContractsIdPut'
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
                    'PUT',
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
     * Operation paymentContractsPost
     *
     * POST Payment/Contracts
     *
     * @param \Secuconnect\Client\Model\PaymentContractsDTO $body Payment contracts properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     */
    public function paymentContractsPost($body)
    {
        list($response) = $this->paymentContractsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation paymentContractsPostWithHttpInfo
     *
     * POST Payment/Contracts
     *
     * @param \Secuconnect\Client\Model\PaymentContractsDTO $body Payment contracts properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContractsPostWithHttpInfo($body)
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
                    '\Secuconnect\Client\Model\PaymentContractsProductModel',
                    '/Payment/Contracts'
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
     * Operation requestId
     *
     * POST Payment/Contracts/{paymentContractId}/requestId
     *
     * @param string $payment_contract_id Contract identifier of the parent (required)
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
     * POST Payment/Contracts/{paymentContractId}/requestId
     *
     * @param string $payment_contract_id Contract identifier of the parent (required)
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
     * POST Payment/Contracts/{paymentContractId}/revokeAccrual
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
     * POST Payment/Contracts/{paymentContractId}/revokeAccrual
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
}
