<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * PaymentCustomersApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentCustomersApi
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
     * @return PaymentCustomersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation paymentCustomersGet
     *
     * GET Payment/Customers
     *
     * @param int $count The number of items to return. 
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \&quot;*\&quot; for any number of characters  *                       - wildcard \&quot;?\&quot; for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by &#x27;AND&#x27;, &#x27;OR&#x27;, &#x27;NOT&#x27; operators and parenthesis &#x27;(&#x27;, &#x27;)&#x27; for grouping.  *                   Property names can be nested like \&quot;prop1.prop2\&quot;.  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * 
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#x27;asc&#x27;, or descending &#x27;dsc&#x27; order. 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentCustomersList
     */
    public function paymentCustomersGet($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->paymentCustomersGetWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation paymentCustomersGetWithHttpInfo
     *
     * GET Payment/Customers
     *
     * @param int $count The number of items to return. 
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \&quot;*\&quot; for any number of characters  *                       - wildcard \&quot;?\&quot; for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by &#x27;AND&#x27;, &#x27;OR&#x27;, &#x27;NOT&#x27; operators and parenthesis &#x27;(&#x27;, &#x27;)&#x27; for grouping.  *                   Property names can be nested like \&quot;prop1.prop2\&quot;.  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * 
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#x27;asc&#x27;, or descending &#x27;dsc&#x27; order. 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentCustomersList, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentCustomersGetWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/Payment/Customers";
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
                    '\Secuconnect\Client\Model\PaymentCustomersList',
                    '/Payment/Customers'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentCustomersList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentCustomersList', $e->getResponseHeaders());
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
     * Operation paymentCustomersGetById
     *
     * GET Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     */
    public function paymentCustomersGetById($payment_customer_id)
    {
        list($response) = $this->paymentCustomersGetByIdWithHttpInfo($payment_customer_id);
        return $response;
    }

    /**
     * Operation paymentCustomersGetByIdWithHttpInfo
     *
     * GET Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentCustomersGetByIdWithHttpInfo($payment_customer_id)
    {
        // verify the required parameter 'payment_customer_id' is set
        if ($payment_customer_id === null || (is_array($payment_customer_id) && count($payment_customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_customer_id when calling paymentCustomersGetById'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Customers/{paymentCustomerId}";
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
        if ($payment_customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentCustomerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_customer_id),
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
                    '\Secuconnect\Client\Model\PaymentCustomersProductModel',
                    '/Payment/Customers/{paymentCustomerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentCustomersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentCustomersProductModel', $e->getResponseHeaders());
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
     * Operation paymentCustomersIdDelete
     *
     * DELETE Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel[]
     */
    public function paymentCustomersIdDelete($payment_customer_id)
    {
        list($response) = $this->paymentCustomersIdDeleteWithHttpInfo($payment_customer_id);
        return $response;
    }

    /**
     * Operation paymentCustomersIdDeleteWithHttpInfo
     *
     * DELETE Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentCustomersProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentCustomersIdDeleteWithHttpInfo($payment_customer_id)
    {
        // verify the required parameter 'payment_customer_id' is set
        if ($payment_customer_id === null || (is_array($payment_customer_id) && count($payment_customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_customer_id when calling paymentCustomersIdDelete'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Customers/{paymentCustomerId}";
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
        if ($payment_customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentCustomerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_customer_id),
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
                    '\Secuconnect\Client\Model\PaymentCustomersProductModel[]',
                    '/Payment/Customers/{paymentCustomerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentCustomersProductModel[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentCustomersProductModel[]', $e->getResponseHeaders());
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
     * Operation paymentCustomersIdPut
     *
     * PUT Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @param \Secuconnect\Client\Model\PaymentCustomersDTO $body Payment customer properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     */
    public function paymentCustomersIdPut($payment_customer_id, $body)
    {
        list($response) = $this->paymentCustomersIdPutWithHttpInfo($payment_customer_id, $body);
        return $response;
    }

    /**
     * Operation paymentCustomersIdPutWithHttpInfo
     *
     * PUT Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @param \Secuconnect\Client\Model\PaymentCustomersDTO $body Payment customer properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentCustomersIdPutWithHttpInfo($payment_customer_id, $body)
    {
        // verify the required parameter 'payment_customer_id' is set
        if ($payment_customer_id === null || (is_array($payment_customer_id) && count($payment_customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_customer_id when calling paymentCustomersIdPut'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Customers/{paymentCustomerId}";
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
        if ($payment_customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentCustomerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_customer_id),
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
                    '\Secuconnect\Client\Model\PaymentCustomersProductModel',
                    '/Payment/Customers/{paymentCustomerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentCustomersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentCustomersProductModel', $e->getResponseHeaders());
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
     * Operation paymentCustomersPost
     *
     * POST Payment/Customers
     *
     * @param \Secuconnect\Client\Model\PaymentCustomersDTO $body Payment customer properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     */
    public function paymentCustomersPost($body)
    {
        list($response) = $this->paymentCustomersPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation paymentCustomersPostWithHttpInfo
     *
     * POST Payment/Customers
     *
     * @param \Secuconnect\Client\Model\PaymentCustomersDTO $body Payment customer properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentCustomersPostWithHttpInfo($body)
    {
        // parse inputs
        $resourcePath = "/Payment/Customers";
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
                    '\Secuconnect\Client\Model\PaymentCustomersProductModel',
                    '/Payment/Customers'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentCustomersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentCustomersProductModel', $e->getResponseHeaders());
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
