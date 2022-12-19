<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * LoyaltyCustomersApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCustomersApi
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
     * @return LoyaltyCustomersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addCustomer
     *
     * POST Loyalty/Customers
     *
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     */
    public function addCustomer($body)
    {
        list($response) = $this->addCustomerWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addCustomerWithHttpInfo
     *
     * POST Loyalty/Customers
     *
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addCustomerWithHttpInfo($body)
    {
        // parse inputs
        $resourcePath = "/Loyalty/Customers";
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
                    '\Secuconnect\Client\Model\LoyaltyCustomersProductModel',
                    '/Loyalty/Customers'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCustomersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCustomersProductModel', $e->getResponseHeaders());
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
     * Operation assignPaymentContainer
     *
     * POST Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @param string $loyalty_payment_container_id LoyaltyPaymentContainer id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     */
    public function assignPaymentContainer($loyalty_customer_id, $loyalty_payment_container_id)
    {
        list($response) = $this->assignPaymentContainerWithHttpInfo($loyalty_customer_id, $loyalty_payment_container_id);
        return $response;
    }

    /**
     * Operation assignPaymentContainerWithHttpInfo
     *
     * POST Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @param string $loyalty_payment_container_id LoyaltyPaymentContainer id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function assignPaymentContainerWithHttpInfo($loyalty_customer_id, $loyalty_payment_container_id)
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if ($loyalty_customer_id === null || (is_array($loyalty_customer_id) && count($loyalty_customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_customer_id when calling assignPaymentContainer'
            );
        }
        // verify the required parameter 'loyalty_payment_container_id' is set
        if ($loyalty_payment_container_id === null || (is_array($loyalty_payment_container_id) && count($loyalty_payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_payment_container_id when calling assignPaymentContainer'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}";
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
        if ($loyalty_customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyCustomerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_customer_id),
                $resourcePath
            );
        }
        // path params
        if ($loyalty_payment_container_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyPaymentContainerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_payment_container_id),
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
                    '\Secuconnect\Client\Model\LoyaltyCustomersProductModel',
                    '/Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCustomersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCustomersProductModel', $e->getResponseHeaders());
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
     * Operation getAll
     *
     * GET Loyalty/Customers
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending. 
     * @param \Secuconnect\Client\Model\Aggregate $aggregate Aggregation summarizes your data. 
     * @param string $meta return field definitions 
     * @param float $validate Check syntax of a query string 
     * @param string $scroll_expire How long it should keep the “search context” alive? 
     * @param string $scroll_id Identifier of a previous search context 
     * @param string $preset Query presets 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCustomersList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null, $aggregate = null, $meta = null, $validate = null, $scroll_expire = null, $scroll_id = null, $preset = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort, $aggregate, $meta, $validate, $scroll_expire, $scroll_id, $preset);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Loyalty/Customers
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending. 
     * @param \Secuconnect\Client\Model\Aggregate $aggregate Aggregation summarizes your data. 
     * @param string $meta return field definitions 
     * @param float $validate Check syntax of a query string 
     * @param string $scroll_expire How long it should keep the “search context” alive? 
     * @param string $scroll_id Identifier of a previous search context 
     * @param string $preset Query presets 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null, $aggregate = null, $meta = null, $validate = null, $scroll_expire = null, $scroll_id = null, $preset = null)
    {
        // parse inputs
        $resourcePath = "/Loyalty/Customers";
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
                    '\Secuconnect\Client\Model\LoyaltyCustomersList',
                    '/Loyalty/Customers'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCustomersList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCustomersList', $e->getResponseHeaders());
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
     * GET Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id Search one loyalty customer by provided id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     */
    public function getOne($loyalty_customer_id)
    {
        list($response) = $this->getOneWithHttpInfo($loyalty_customer_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id Search one loyalty customer by provided id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($loyalty_customer_id)
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if ($loyalty_customer_id === null || (is_array($loyalty_customer_id) && count($loyalty_customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_customer_id when calling getOne'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}";
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
        if ($loyalty_customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyCustomerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_customer_id),
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
                    '\Secuconnect\Client\Model\LoyaltyCustomersProductModel',
                    '/Loyalty/Customers/{loyaltyCustomerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCustomersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCustomersProductModel', $e->getResponseHeaders());
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
     * Operation removeAssignedPaymentContainer
     *
     * DELETE Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @param string $loyalty_payment_container_id LoyaltyPaymentContainer id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     */
    public function removeAssignedPaymentContainer($loyalty_customer_id, $loyalty_payment_container_id)
    {
        list($response) = $this->removeAssignedPaymentContainerWithHttpInfo($loyalty_customer_id, $loyalty_payment_container_id);
        return $response;
    }

    /**
     * Operation removeAssignedPaymentContainerWithHttpInfo
     *
     * DELETE Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @param string $loyalty_payment_container_id LoyaltyPaymentContainer id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeAssignedPaymentContainerWithHttpInfo($loyalty_customer_id, $loyalty_payment_container_id)
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if ($loyalty_customer_id === null || (is_array($loyalty_customer_id) && count($loyalty_customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_customer_id when calling removeAssignedPaymentContainer'
            );
        }
        // verify the required parameter 'loyalty_payment_container_id' is set
        if ($loyalty_payment_container_id === null || (is_array($loyalty_payment_container_id) && count($loyalty_payment_container_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_payment_container_id when calling removeAssignedPaymentContainer'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}";
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
        if ($loyalty_customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyCustomerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_customer_id),
                $resourcePath
            );
        }
        // path params
        if ($loyalty_payment_container_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyPaymentContainerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_payment_container_id),
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
                    '\Secuconnect\Client\Model\LoyaltyCustomersProductModel',
                    '/Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCustomersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCustomersProductModel', $e->getResponseHeaders());
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
     * Operation updateCustomer
     *
     * PUT Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id loyalty Customer Id CUS_XXX (required)
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     */
    public function updateCustomer($loyalty_customer_id, $body)
    {
        list($response) = $this->updateCustomerWithHttpInfo($loyalty_customer_id, $body);
        return $response;
    }

    /**
     * Operation updateCustomerWithHttpInfo
     *
     * PUT Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id loyalty Customer Id CUS_XXX (required)
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCustomerWithHttpInfo($loyalty_customer_id, $body)
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if ($loyalty_customer_id === null || (is_array($loyalty_customer_id) && count($loyalty_customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_customer_id when calling updateCustomer'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}";
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
        if ($loyalty_customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyCustomerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_customer_id),
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
                    '\Secuconnect\Client\Model\LoyaltyCustomersProductModel',
                    '/Loyalty/Customers/{loyaltyCustomerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCustomersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCustomersProductModel', $e->getResponseHeaders());
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
