<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * SmartRoutingsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartRoutingsApi
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
     * @return SmartRoutingsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addRouting
     *
     * POST Smart/Routings
     *
     * @param \Secuconnect\Client\Model\SmartRoutingsDTO $body Smart routing properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     */
    public function addRouting($body)
    {
        list($response) = $this->addRoutingWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addRoutingWithHttpInfo
     *
     * POST Smart/Routings
     *
     * @param \Secuconnect\Client\Model\SmartRoutingsDTO $body Smart routing properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addRoutingWithHttpInfo($body)
    {
        // parse inputs
        $resourcePath = "/Smart/Routings";
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
                    '\Secuconnect\Client\Model\SmartRoutingsProductModel',
                    '/Smart/Routings'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartRoutingsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartRoutingsProductModel', $e->getResponseHeaders());
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
     * Operation assignDeviceToRouting
     *
     * POST Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartRoutingPriority $body Smart routing assignment properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     */
    public function assignDeviceToRouting($smart_routing_id, $smart_device_id, $body)
    {
        list($response) = $this->assignDeviceToRoutingWithHttpInfo($smart_routing_id, $smart_device_id, $body);
        return $response;
    }

    /**
     * Operation assignDeviceToRoutingWithHttpInfo
     *
     * POST Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartRoutingPriority $body Smart routing assignment properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function assignDeviceToRoutingWithHttpInfo($smart_routing_id, $smart_device_id, $body)
    {
        // verify the required parameter 'smart_routing_id' is set
        if ($smart_routing_id === null || (is_array($smart_routing_id) && count($smart_routing_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_routing_id when calling assignDeviceToRouting'
            );
        }
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null || (is_array($smart_device_id) && count($smart_device_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_device_id when calling assignDeviceToRouting'
            );
        }
        // parse inputs
        $resourcePath = "/Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}";
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
        if ($smart_routing_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartRoutingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_routing_id),
                $resourcePath
            );
        }
        // path params
        if ($smart_device_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartDeviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_device_id),
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
                    '\Secuconnect\Client\Model\SmartRoutingsProductModel',
                    '/Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartRoutingsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartRoutingsProductModel', $e->getResponseHeaders());
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
     * GET Smart/Routings
     *
     * @param int $count The number of items to return. 
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \&quot;*\&quot; for any number of characters  *                       - wildcard \&quot;?\&quot; for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by &#x27;AND&#x27;, &#x27;OR&#x27;, &#x27;NOT&#x27; operators and parenthesis &#x27;(&#x27;, &#x27;)&#x27; for grouping.  *                   Property names can be nested like \&quot;prop1.prop2\&quot;.  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * 
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#x27;asc&#x27;, or descending &#x27;dsc&#x27; order. 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartRoutingsList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Smart/Routings
     *
     * @param int $count The number of items to return. 
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \&quot;*\&quot; for any number of characters  *                       - wildcard \&quot;?\&quot; for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by &#x27;AND&#x27;, &#x27;OR&#x27;, &#x27;NOT&#x27; operators and parenthesis &#x27;(&#x27;, &#x27;)&#x27; for grouping.  *                   Property names can be nested like \&quot;prop1.prop2\&quot;.  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * 
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#x27;asc&#x27;, or descending &#x27;dsc&#x27; order. 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartRoutingsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/Smart/Routings";
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
                    '\Secuconnect\Client\Model\SmartRoutingsList',
                    '/Smart/Routings'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartRoutingsList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartRoutingsList', $e->getResponseHeaders());
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
     * GET Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     */
    public function getOne($smart_routing_id)
    {
        list($response) = $this->getOneWithHttpInfo($smart_routing_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($smart_routing_id)
    {
        // verify the required parameter 'smart_routing_id' is set
        if ($smart_routing_id === null || (is_array($smart_routing_id) && count($smart_routing_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_routing_id when calling getOne'
            );
        }
        // parse inputs
        $resourcePath = "/Smart/Routings/{smartRoutingId}";
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
        if ($smart_routing_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartRoutingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_routing_id),
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
                    '\Secuconnect\Client\Model\SmartRoutingsProductModel',
                    '/Smart/Routings/{smartRoutingId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartRoutingsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartRoutingsProductModel', $e->getResponseHeaders());
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
     * Operation removeRouting
     *
     * DELETE Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel[]
     */
    public function removeRouting($smart_routing_id)
    {
        list($response) = $this->removeRoutingWithHttpInfo($smart_routing_id);
        return $response;
    }

    /**
     * Operation removeRoutingWithHttpInfo
     *
     * DELETE Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function removeRoutingWithHttpInfo($smart_routing_id)
    {
        // verify the required parameter 'smart_routing_id' is set
        if ($smart_routing_id === null || (is_array($smart_routing_id) && count($smart_routing_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_routing_id when calling removeRouting'
            );
        }
        // parse inputs
        $resourcePath = "/Smart/Routings/{smartRoutingId}";
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
        if ($smart_routing_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartRoutingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_routing_id),
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
                    '\Secuconnect\Client\Model\SmartRoutingsProductModel[]',
                    '/Smart/Routings/{smartRoutingId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartRoutingsProductModel[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartRoutingsProductModel[]', $e->getResponseHeaders());
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
     * Operation removeSmartRoutingAssignment
     *
     * DELETE Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param string $smart_device_id Smart device id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     */
    public function removeSmartRoutingAssignment($smart_routing_id, $smart_device_id)
    {
        list($response) = $this->removeSmartRoutingAssignmentWithHttpInfo($smart_routing_id, $smart_device_id);
        return $response;
    }

    /**
     * Operation removeSmartRoutingAssignmentWithHttpInfo
     *
     * DELETE Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param string $smart_device_id Smart device id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeSmartRoutingAssignmentWithHttpInfo($smart_routing_id, $smart_device_id)
    {
        // verify the required parameter 'smart_routing_id' is set
        if ($smart_routing_id === null || (is_array($smart_routing_id) && count($smart_routing_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_routing_id when calling removeSmartRoutingAssignment'
            );
        }
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null || (is_array($smart_device_id) && count($smart_device_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_device_id when calling removeSmartRoutingAssignment'
            );
        }
        // parse inputs
        $resourcePath = "/Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}";
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
        if ($smart_routing_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartRoutingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_routing_id),
                $resourcePath
            );
        }
        // path params
        if ($smart_device_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartDeviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_device_id),
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
                    '\Secuconnect\Client\Model\SmartRoutingsProductModel',
                    '/Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartRoutingsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartRoutingsProductModel', $e->getResponseHeaders());
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
     * Operation updateRouting
     *
     * PUT Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param \Secuconnect\Client\Model\SmartRoutingsDTO $body Smart routing properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     */
    public function updateRouting($smart_routing_id, $body)
    {
        list($response) = $this->updateRoutingWithHttpInfo($smart_routing_id, $body);
        return $response;
    }

    /**
     * Operation updateRoutingWithHttpInfo
     *
     * PUT Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param \Secuconnect\Client\Model\SmartRoutingsDTO $body Smart routing properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateRoutingWithHttpInfo($smart_routing_id, $body)
    {
        // verify the required parameter 'smart_routing_id' is set
        if ($smart_routing_id === null || (is_array($smart_routing_id) && count($smart_routing_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_routing_id when calling updateRouting'
            );
        }
        // parse inputs
        $resourcePath = "/Smart/Routings/{smartRoutingId}";
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
        if ($smart_routing_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartRoutingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_routing_id),
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
                    '\Secuconnect\Client\Model\SmartRoutingsProductModel',
                    '/Smart/Routings/{smartRoutingId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartRoutingsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartRoutingsProductModel', $e->getResponseHeaders());
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
