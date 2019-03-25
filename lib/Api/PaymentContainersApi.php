<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;

/**
 * PaymentContainersApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContainersApi
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
     * @return PaymentContainersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation paymentContainersGet
     *
     * GET Payment/Containers
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContainersList
     */
    public function paymentContainersGet($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->paymentContainersGetWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation paymentContainersGetWithHttpInfo
     *
     * GET Payment/Containers
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContainersList, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContainersGetWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/Payment/Containers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
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
                    '\Secuconnect\Client\Model\PaymentContainersList',
                    '/Payment/Containers'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContainersList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContainersList', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }

    /**
     * Operation paymentContainersGetById
     *
     * GET Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Search one by provided id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     */
    public function paymentContainersGetById($payment_container_id)
    {
        list($response) = $this->paymentContainersGetByIdWithHttpInfo($payment_container_id);
        return $response;
    }

    /**
     * Operation paymentContainersGetByIdWithHttpInfo
     *
     * GET Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Search one by provided id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContainersGetByIdWithHttpInfo($payment_container_id)
    {
        // verify the required parameter 'payment_container_id' is set
        if ($payment_container_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_container_id when calling paymentContainersGetById');
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}";
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
        if ($payment_container_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContainerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_container_id),
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
                    '\Secuconnect\Client\Model\PaymentContainersProductModel',
                    '/Payment/Containers/{paymentContainerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContainersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContainersProductModel', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }

    /**
     * Operation paymentContainersIdAssignSecondaryIdDelete
     *
     * DELETE Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param string $secondary_payment_container_id Id for which container is currently assigned to (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel[]
     */
    public function paymentContainersIdAssignSecondaryIdDelete($payment_container_id, $secondary_payment_container_id)
    {
        list($response) = $this->paymentContainersIdAssignSecondaryIdDeleteWithHttpInfo($payment_container_id, $secondary_payment_container_id);
        return $response;
    }

    /**
     * Operation paymentContainersIdAssignSecondaryIdDeleteWithHttpInfo
     *
     * DELETE Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param string $secondary_payment_container_id Id for which container is currently assigned to (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContainersIdAssignSecondaryIdDeleteWithHttpInfo($payment_container_id, $secondary_payment_container_id)
    {
        // verify the required parameter 'payment_container_id' is set
        if ($payment_container_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_container_id when calling paymentContainersIdAssignSecondaryIdDelete');
        }
        // verify the required parameter 'secondary_payment_container_id' is set
        if ($secondary_payment_container_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $secondary_payment_container_id when calling paymentContainersIdAssignSecondaryIdDelete');
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}";
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
        if ($payment_container_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContainerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_container_id),
                $resourcePath
            );
        }
        // path params
        if ($secondary_payment_container_id !== null) {
            $resourcePath = str_replace(
                "{" . "secondaryPaymentContainerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($secondary_payment_container_id),
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
                    '\Secuconnect\Client\Model\PaymentContainersProductModel[]',
                    '/Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContainersProductModel[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContainersProductModel[]', $e->getResponseHeaders());
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
     * Operation paymentContainersIdAssignSecondaryIdPost
     *
     * POST Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param string $secondary_payment_container_id Id to which container will be assigned (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     */
    public function paymentContainersIdAssignSecondaryIdPost($payment_container_id, $secondary_payment_container_id)
    {
        list($response) = $this->paymentContainersIdAssignSecondaryIdPostWithHttpInfo($payment_container_id, $secondary_payment_container_id);
        return $response;
    }

    /**
     * Operation paymentContainersIdAssignSecondaryIdPostWithHttpInfo
     *
     * POST Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param string $secondary_payment_container_id Id to which container will be assigned (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContainersIdAssignSecondaryIdPostWithHttpInfo($payment_container_id, $secondary_payment_container_id)
    {
        // verify the required parameter 'payment_container_id' is set
        if ($payment_container_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_container_id when calling paymentContainersIdAssignSecondaryIdPost');
        }
        // verify the required parameter 'secondary_payment_container_id' is set
        if ($secondary_payment_container_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $secondary_payment_container_id when calling paymentContainersIdAssignSecondaryIdPost');
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}";
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
        if ($payment_container_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContainerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_container_id),
                $resourcePath
            );
        }
        // path params
        if ($secondary_payment_container_id !== null) {
            $resourcePath = str_replace(
                "{" . "secondaryPaymentContainerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($secondary_payment_container_id),
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
                    '\Secuconnect\Client\Model\PaymentContainersProductModel',
                    '/Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContainersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContainersProductModel', $e->getResponseHeaders());
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
     * Operation paymentContainersIdDelete
     *
     * DELETE Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel[]
     */
    public function paymentContainersIdDelete($payment_container_id)
    {
        list($response) = $this->paymentContainersIdDeleteWithHttpInfo($payment_container_id);
        return $response;
    }

    /**
     * Operation paymentContainersIdDeleteWithHttpInfo
     *
     * DELETE Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContainersIdDeleteWithHttpInfo($payment_container_id)
    {
        // verify the required parameter 'payment_container_id' is set
        if ($payment_container_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_container_id when calling paymentContainersIdDelete');
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}";
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
        if ($payment_container_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContainerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_container_id),
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
                    '\Secuconnect\Client\Model\PaymentContainersProductModel[]',
                    '/Payment/Containers/{paymentContainerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContainersProductModel[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContainersProductModel[]', $e->getResponseHeaders());
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
     * Operation paymentContainersIdPut
     *
     * PUT Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     */
    public function paymentContainersIdPut($payment_container_id, $body)
    {
        list($response) = $this->paymentContainersIdPutWithHttpInfo($payment_container_id, $body);
        return $response;
    }

    /**
     * Operation paymentContainersIdPutWithHttpInfo
     *
     * PUT Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContainersIdPutWithHttpInfo($payment_container_id, $body)
    {
        // verify the required parameter 'payment_container_id' is set
        if ($payment_container_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_container_id when calling paymentContainersIdPut');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling paymentContainersIdPut');
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}";
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
        if ($payment_container_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentContainerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_container_id),
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
                    '\Secuconnect\Client\Model\PaymentContainersProductModel',
                    '/Payment/Containers/{paymentContainerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContainersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContainersProductModel', $e->getResponseHeaders());
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
     * Operation paymentContainersPost
     *
     * POST Payment/Containers
     *
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     */
    public function paymentContainersPost($body)
    {
        list($response) = $this->paymentContainersPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation paymentContainersPostWithHttpInfo
     *
     * POST Payment/Containers
     *
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContainersPostWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling paymentContainersPost');
        }
        // parse inputs
        $resourcePath = "/Payment/Containers";
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
                    '\Secuconnect\Client\Model\PaymentContainersProductModel',
                    '/Payment/Containers'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContainersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContainersProductModel', $e->getResponseHeaders());
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
