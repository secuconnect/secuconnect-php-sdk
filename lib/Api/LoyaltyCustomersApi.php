<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;

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
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties (required)
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
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addCustomerWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addCustomer');
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers";
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
        if ($loyalty_customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_customer_id when calling assignPaymentContainer');
        }
        // verify the required parameter 'loyalty_payment_container_id' is set
        if ($loyalty_payment_container_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_payment_container_id when calling assignPaymentContainer');
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}";
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
     * Operation checkForDuplicates
     *
     * POST Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @throws ApiException on non-2xx response
     * @return object
     */
    public function checkForDuplicates($loyalty_customer_id)
    {
        list($response) = $this->checkForDuplicatesWithHttpInfo($loyalty_customer_id);
        return $response;
    }

    /**
     * Operation checkForDuplicatesWithHttpInfo
     *
     * POST Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @throws ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkForDuplicatesWithHttpInfo($loyalty_customer_id)
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if ($loyalty_customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_customer_id when calling checkForDuplicates');
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/";
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    'object',
                    '/Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/'
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
     * Operation getAll
     *
     * GET Loyalty/Customers
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCustomersList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Loyalty/Customers
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/Loyalty/Customers";
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
        if ($loyalty_customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_customer_id when calling getOne');
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}";
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
        if ($loyalty_customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_customer_id when calling removeAssignedPaymentContainer');
        }
        // verify the required parameter 'loyalty_payment_container_id' is set
        if ($loyalty_payment_container_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_payment_container_id when calling removeAssignedPaymentContainer');
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}";
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
     * Operation removeCustomer
     *
     * DELETE Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCustomersRemoved
     */
    public function removeCustomer($loyalty_customer_id)
    {
        list($response) = $this->removeCustomerWithHttpInfo($loyalty_customer_id);
        return $response;
    }

    /**
     * Operation removeCustomerWithHttpInfo
     *
     * DELETE Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersRemoved, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeCustomerWithHttpInfo($loyalty_customer_id)
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if ($loyalty_customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_customer_id when calling removeCustomer');
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}";
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
                    'DELETE',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\LoyaltyCustomersRemoved',
                    '/Loyalty/Customers/{loyaltyCustomerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCustomersRemoved', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCustomersRemoved', $e->getResponseHeaders());
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
     * Operation updateCustomer
     *
     * PUT Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id loyalty Customer Id CUS_XXX (required)
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties (required)
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
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCustomerWithHttpInfo($loyalty_customer_id, $body)
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if ($loyalty_customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_customer_id when calling updateCustomer');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateCustomer');
        }
        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}";
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
