<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

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
     * Operation mandate
     *
     * POST Payment/Containers/<id>/mandate
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\MandateDTO $body Get an B2B mandate form properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\MandateProductModel
     */
    public function mandate($payment_container_id, $body)
    {
        list($response) = $this->mandateWithHttpInfo($payment_container_id, $body);
        return $response;
    }

    /**
     * Operation mandateWithHttpInfo
     *
     * POST Payment/Containers/<id>/mandate
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\MandateDTO $body Get an B2B mandate form properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\MandateProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function mandateWithHttpInfo($payment_container_id, $body)
    {
        // verify the required parameter 'payment_container_id' is set
        if ($payment_container_id === null || (is_array($payment_container_id) && count($payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling mandate'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}/mandate";
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\MandateProductModel',
                    '/Payment/Containers/{paymentContainerId}/mandate'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\MandateProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\MandateProductModel', $e->getResponseHeaders());
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
     * Operation paymentContainersGet
     *
     * GET Payment/Containers
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.    Example: &#x60;customer.name:Meier&#x60;    A condition may contain:   * &#x60;?&#x60; as wildcard for one character;   * &#x60;*&#x60; as wildcard for any number of characters.    You can also use value ranges in the form &#x60;[min TO max]&#x60;.    Example: &#x60;customer.age:[30 TO 40]&#x60;    You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.    Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.     Options for order:   * &#x60;asc&#x60; ascending;   * &#x60;dsc&#x60; descending. 
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
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.    Example: &#x60;customer.name:Meier&#x60;    A condition may contain:   * &#x60;?&#x60; as wildcard for one character;   * &#x60;*&#x60; as wildcard for any number of characters.    You can also use value ranges in the form &#x60;[min TO max]&#x60;.    Example: &#x60;customer.age:[30 TO 40]&#x60;    You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.    Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.     Options for order:   * &#x60;asc&#x60; ascending;   * &#x60;dsc&#x60; descending. 
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
        if ($payment_container_id === null || (is_array($payment_container_id) && count($payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersGetById'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}";
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
        if ($payment_container_id === null || (is_array($payment_container_id) && count($payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersIdAssignSecondaryIdDelete'
            );
        }
        // verify the required parameter 'secondary_payment_container_id' is set
        if ($secondary_payment_container_id === null || (is_array($secondary_payment_container_id) && count($secondary_payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $secondary_payment_container_id when calling paymentContainersIdAssignSecondaryIdDelete'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}";
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
        if ($payment_container_id === null || (is_array($payment_container_id) && count($payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersIdAssignSecondaryIdPost'
            );
        }
        // verify the required parameter 'secondary_payment_container_id' is set
        if ($secondary_payment_container_id === null || (is_array($secondary_payment_container_id) && count($secondary_payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $secondary_payment_container_id when calling paymentContainersIdAssignSecondaryIdPost'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}";
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
        if ($payment_container_id === null || (is_array($payment_container_id) && count($payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersIdDelete'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}";
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
     * Operation paymentContainersIdPut
     *
     * PUT Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties 
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
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContainersIdPutWithHttpInfo($payment_container_id, $body)
    {
        // verify the required parameter 'payment_container_id' is set
        if ($payment_container_id === null || (is_array($payment_container_id) && count($payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersIdPut'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}";
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
     * Operation paymentContainersPost
     *
     * POST Payment/Containers
     *
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties 
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
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContainersPostWithHttpInfo($body)
    {
        // parse inputs
        $resourcePath = "/Payment/Containers";
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
     * Operation uploadMandate
     *
     * POST Payment/Containers/<id>/Uploadmandate
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\UploadMandateDTO $body Signed B2B mandate properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\UploadMandateProductModel
     */
    public function uploadMandate($payment_container_id, $body)
    {
        list($response) = $this->uploadMandateWithHttpInfo($payment_container_id, $body);
        return $response;
    }

    /**
     * Operation uploadMandateWithHttpInfo
     *
     * POST Payment/Containers/<id>/Uploadmandate
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\UploadMandateDTO $body Signed B2B mandate properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\UploadMandateProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadMandateWithHttpInfo($payment_container_id, $body)
    {
        // verify the required parameter 'payment_container_id' is set
        if ($payment_container_id === null || (is_array($payment_container_id) && count($payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling uploadMandate'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}/Uploadmandate";
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\UploadMandateProductModel',
                    '/Payment/Containers/{paymentContainerId}/Uploadmandate'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\UploadMandateProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\UploadMandateProductModel', $e->getResponseHeaders());
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
