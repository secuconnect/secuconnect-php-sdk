<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;

/**
 * GeneralStoresApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralStoresApi
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
     * @return GeneralStoresApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addStore
     *
     * POST General/Stores
     *
     * @param \Secuconnect\Client\Model\GeneralStoresDTO $body General store properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralStoresProductModel
     */
    public function addStore($body)
    {
        list($response) = $this->addStoreWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addStoreWithHttpInfo
     *
     * POST General/Stores
     *
     * @param \Secuconnect\Client\Model\GeneralStoresDTO $body General store properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\GeneralStoresProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addStoreWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addStore');
        }
        // parse inputs
        $resourcePath = "/General/Stores";
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
                    '\Secuconnect\Client\Model\GeneralStoresProductModel',
                    '/General/Stores'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralStoresProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralStoresProductModel', $e->getResponseHeaders());
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
     * Operation assignGoogleKey
     *
     * POST General/Stores/{generalStoreId}/assign/{googleKey}
     *
     * @param string $general_store_id General store id (required)
     * @param string $google_key Google key (required)
     * @throws ApiException on non-2xx response
     * @return object
     */
    public function assignGoogleKey($general_store_id, $google_key)
    {
        list($response) = $this->assignGoogleKeyWithHttpInfo($general_store_id, $google_key);
        return $response;
    }

    /**
     * Operation assignGoogleKeyWithHttpInfo
     *
     * POST General/Stores/{generalStoreId}/assign/{googleKey}
     *
     * @param string $general_store_id General store id (required)
     * @param string $google_key Google key (required)
     * @throws ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function assignGoogleKeyWithHttpInfo($general_store_id, $google_key)
    {
        // verify the required parameter 'general_store_id' is set
        if ($general_store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $general_store_id when calling assignGoogleKey');
        }
        // verify the required parameter 'google_key' is set
        if ($google_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $google_key when calling assignGoogleKey');
        }
        // parse inputs
        $resourcePath = "/General/Stores/{generalStoreId}/assign/{googleKey}";
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
        if ($general_store_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalStoreId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_store_id),
                $resourcePath
            );
        }
        // path params
        if ($google_key !== null) {
            $resourcePath = str_replace(
                "{" . "googleKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($google_key),
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
                    '/General/Stores/{generalStoreId}/assign/{googleKey}'
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
     * Operation checkIn
     *
     * POST General/Stores/{generalStoreId}/checkin
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTOType $body Type (required)
     * @throws ApiException on non-2xx response
     * @return object
     */
    public function checkIn($general_store_id, $body)
    {
        list($response) = $this->checkInWithHttpInfo($general_store_id, $body);
        return $response;
    }

    /**
     * Operation checkInWithHttpInfo
     *
     * POST General/Stores/{generalStoreId}/checkin
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTOType $body Type (required)
     * @throws ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkInWithHttpInfo($general_store_id, $body)
    {
        // verify the required parameter 'general_store_id' is set
        if ($general_store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $general_store_id when calling checkIn');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling checkIn');
        }
        // parse inputs
        $resourcePath = "/General/Stores/{generalStoreId}/checkin";
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
        if ($general_store_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalStoreId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_store_id),
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
                    'object',
                    '/General/Stores/{generalStoreId}/checkin'
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
     * GET General/Stores
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralStoresList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET General/Stores
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\GeneralStoresList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/General/Stores";
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
                    '\Secuconnect\Client\Model\GeneralStoresList',
                    '/General/Stores'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralStoresList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralStoresList', $e->getResponseHeaders());
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
     * GET General/Stores/{generalStoreId}
     *
     * @param string $general_store_id General store id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralStoresProductModel
     */
    public function getOne($general_store_id)
    {
        list($response) = $this->getOneWithHttpInfo($general_store_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET General/Stores/{generalStoreId}
     *
     * @param string $general_store_id General store id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\GeneralStoresProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($general_store_id)
    {
        // verify the required parameter 'general_store_id' is set
        if ($general_store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $general_store_id when calling getOne');
        }
        // parse inputs
        $resourcePath = "/General/Stores/{generalStoreId}";
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
        if ($general_store_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalStoreId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_store_id),
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
                    '\Secuconnect\Client\Model\GeneralStoresProductModel',
                    '/General/Stores/{generalStoreId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralStoresProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralStoresProductModel', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }

    /**
     * Operation setDefault
     *
     * POST General/Stores/{generalStoreId}/setDefault
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTOReason $body Reason (optional)
     * @throws ApiException on non-2xx response
     * @return object
     */
    public function setDefault($general_store_id, $body = null)
    {
        list($response) = $this->setDefaultWithHttpInfo($general_store_id, $body);
        return $response;
    }

    /**
     * Operation setDefaultWithHttpInfo
     *
     * POST General/Stores/{generalStoreId}/setDefault
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTOReason $body Reason (optional)
     * @throws ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function setDefaultWithHttpInfo($general_store_id, $body = null)
    {
        // verify the required parameter 'general_store_id' is set
        if ($general_store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $general_store_id when calling setDefault');
        }
        // parse inputs
        $resourcePath = "/General/Stores/{generalStoreId}/setDefault";
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
        if ($general_store_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalStoreId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_store_id),
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
                    'object',
                    '/General/Stores/{generalStoreId}/setDefault'
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
     * Operation updateStore
     *
     * PUT General/Stores/{generalStoreId}
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTO $body General store properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralStoresProductModel
     */
    public function updateStore($general_store_id, $body)
    {
        list($response) = $this->updateStoreWithHttpInfo($general_store_id, $body);
        return $response;
    }

    /**
     * Operation updateStoreWithHttpInfo
     *
     * PUT General/Stores/{generalStoreId}
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTO $body General store properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\GeneralStoresProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateStoreWithHttpInfo($general_store_id, $body)
    {
        // verify the required parameter 'general_store_id' is set
        if ($general_store_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $general_store_id when calling updateStore');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateStore');
        }
        // parse inputs
        $resourcePath = "/General/Stores/{generalStoreId}";
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
        if ($general_store_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalStoreId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_store_id),
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
                    '\Secuconnect\Client\Model\GeneralStoresProductModel',
                    '/General/Stores/{generalStoreId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralStoresProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralStoresProductModel', $e->getResponseHeaders());
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
