<?php

namespace Secuconnect\Client\Api;

use \Secuconnect\Client\ApiClient;
use \Secuconnect\Client\ApiException;
use \Secuconnect\Client\Configuration;
use \Secuconnect\Client\ObjectSerializer;

/**
 * LoyaltyStoregroupsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyStoregroupsApi
{
    /**
     * API Client
     *
     * @var \Secuconnect\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Secuconnect\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Secuconnect\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Secuconnect\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Secuconnect\Client\ApiClient $apiClient set the API client
     *
     * @return LoyaltyStoregroupsApi
     */
    public function setApiClient(\Secuconnect\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addStoreGroup
     *
     * POST Loyalty/Storegroups
     *
     * @param \Secuconnect\Client\Model\LoyaltyStoregroupsDTO $body Loyalty store group properties (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel
     */
    public function addStoreGroup($body)
    {
        list($response) = $this->addStoreGroupWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addStoreGroupWithHttpInfo
     *
     * POST Loyalty/Storegroups
     *
     * @param \Secuconnect\Client\Model\LoyaltyStoregroupsDTO $body Loyalty store group properties (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addStoreGroupWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addStoreGroup');
        }
        // parse inputs
        $resourcePath = "/Loyalty/Storegroups";
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
                '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel',
                '/Loyalty/Storegroups'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAll
     *
     * GET Loyalty/StoreGroups
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyStoregroupsList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Loyalty/StoreGroups
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyStoregroupsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/Loyalty/StoreGroups";
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
                '\Secuconnect\Client\Model\LoyaltyStoregroupsList',
                '/Loyalty/StoreGroups'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyStoregroupsList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyStoregroupsList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOne
     *
     * GET Loyalty/StoreGroups/{loyaltyStoreGroupId}
     *
     * @param string $loyalty_store_group_id loyalty store group id (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel
     */
    public function getOne($loyalty_store_group_id)
    {
        list($response) = $this->getOneWithHttpInfo($loyalty_store_group_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Loyalty/StoreGroups/{loyaltyStoreGroupId}
     *
     * @param string $loyalty_store_group_id loyalty store group id (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($loyalty_store_group_id)
    {
        // verify the required parameter 'loyalty_store_group_id' is set
        if ($loyalty_store_group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_store_group_id when calling getOne');
        }
        // parse inputs
        $resourcePath = "/Loyalty/StoreGroups/{loyaltyStoreGroupId}";
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
        if ($loyalty_store_group_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyStoreGroupId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_store_group_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
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
                '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel',
                '/Loyalty/StoreGroups/{loyaltyStoreGroupId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation removeStoreGroup
     *
     * DELETE Loyalty/StoreGroups/{loyaltyStoreGroupId}
     *
     * @param string $loyalty_store_group_id Loyalty store group id (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel[]
     */
    public function removeStoreGroup($loyalty_store_group_id)
    {
        list($response) = $this->removeStoreGroupWithHttpInfo($loyalty_store_group_id);
        return $response;
    }

    /**
     * Operation removeStoreGroupWithHttpInfo
     *
     * DELETE Loyalty/StoreGroups/{loyaltyStoreGroupId}
     *
     * @param string $loyalty_store_group_id Loyalty store group id (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function removeStoreGroupWithHttpInfo($loyalty_store_group_id)
    {
        // verify the required parameter 'loyalty_store_group_id' is set
        if ($loyalty_store_group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_store_group_id when calling removeStoreGroup');
        }
        // parse inputs
        $resourcePath = "/Loyalty/StoreGroups/{loyaltyStoreGroupId}";
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
        if ($loyalty_store_group_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyStoreGroupId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_store_group_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
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
                '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel[]',
                '/Loyalty/StoreGroups/{loyaltyStoreGroupId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateStoreGroup
     *
     * PUT Loyalty/StoreGroups/{loyaltyStoreGroupId}
     *
     * @param string $loyalty_store_group_id Loyalty store group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyStoregroupsDTO $body Loyalty store group properties (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel
     */
    public function updateStoreGroup($loyalty_store_group_id, $body)
    {
        list($response) = $this->updateStoreGroupWithHttpInfo($loyalty_store_group_id, $body);
        return $response;
    }

    /**
     * Operation updateStoreGroupWithHttpInfo
     *
     * PUT Loyalty/StoreGroups/{loyaltyStoreGroupId}
     *
     * @param string $loyalty_store_group_id Loyalty store group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyStoregroupsDTO $body Loyalty store group properties (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyStoregroupsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateStoreGroupWithHttpInfo($loyalty_store_group_id, $body)
    {
        // verify the required parameter 'loyalty_store_group_id' is set
        if ($loyalty_store_group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loyalty_store_group_id when calling updateStoreGroup');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateStoreGroup');
        }
        // parse inputs
        $resourcePath = "/Loyalty/StoreGroups/{loyaltyStoreGroupId}";
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
        if ($loyalty_store_group_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyStoreGroupId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_store_group_id),
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
                '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel',
                '/Loyalty/StoreGroups/{loyaltyStoreGroupId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyStoregroupsProductModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
