<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;

/**
 * SmartDevicesApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesApi
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
     * @return SmartDevicesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addDevice
     *
     * POST Smart/Devices
     *
     * @param \Secuconnect\Client\Model\SmartDevicesDTO $smart_device_properties Smart device properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     */
    public function addDevice($smart_device_properties)
    {
        list($response) = $this->addDeviceWithHttpInfo($smart_device_properties);
        return $response;
    }

    /**
     * Operation addDeviceWithHttpInfo
     *
     * POST Smart/Devices
     *
     * @param \Secuconnect\Client\Model\SmartDevicesDTO $smart_device_properties Smart device properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addDeviceWithHttpInfo($smart_device_properties)
    {
        // verify the required parameter 'smart_device_properties' is set
        if ($smart_device_properties === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_properties when calling addDevice');
        }
        // parse inputs
        $resourcePath = "/Smart/Devices";
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
        if (isset($smart_device_properties)) {
            $_tempBody = $smart_device_properties;
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
                    '\Secuconnect\Client\Model\SmartDevicesProductModel',
                    '/Smart/Devices'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartDevicesProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartDevicesProductModel', $e->getResponseHeaders());
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
     * Operation createPrepaidTid
     *
     * POST Smart/Devices/{smartDeviceId}/CreatePrepaidTid
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDevicesDTOPrepaidTid $prepaid_tid_properties Prepaid tid properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     */
    public function createPrepaidTid($smart_device_id, $prepaid_tid_properties)
    {
        list($response) = $this->createPrepaidTidWithHttpInfo($smart_device_id, $prepaid_tid_properties);
        return $response;
    }

    /**
     * Operation createPrepaidTidWithHttpInfo
     *
     * POST Smart/Devices/{smartDeviceId}/CreatePrepaidTid
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDevicesDTOPrepaidTid $prepaid_tid_properties Prepaid tid properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPrepaidTidWithHttpInfo($smart_device_id, $prepaid_tid_properties)
    {
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_id when calling createPrepaidTid');
        }
        // verify the required parameter 'prepaid_tid_properties' is set
        if ($prepaid_tid_properties === null) {
            throw new \InvalidArgumentException('Missing the required parameter $prepaid_tid_properties when calling createPrepaidTid');
        }
        // parse inputs
        $resourcePath = "/Smart/Devices/{smartDeviceId}/CreatePrepaidTid";
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
        if ($smart_device_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartDeviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_device_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($prepaid_tid_properties)) {
            $_tempBody = $prepaid_tid_properties;
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
                    '\Secuconnect\Client\Model\SmartDevicesProductModel',
                    '/Smart/Devices/{smartDeviceId}/CreatePrepaidTid'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartDevicesProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartDevicesProductModel', $e->getResponseHeaders());
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
     * Operation createVirtualDevice
     *
     * POST Smart/Devices/{smartDeviceId}/CreateVirtualDevice
     *
     * @param string $smart_device_id Smart device id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     */
    public function createVirtualDevice($smart_device_id)
    {
        list($response) = $this->createVirtualDeviceWithHttpInfo($smart_device_id);
        return $response;
    }

    /**
     * Operation createVirtualDeviceWithHttpInfo
     *
     * POST Smart/Devices/{smartDeviceId}/CreateVirtualDevice
     *
     * @param string $smart_device_id Smart device id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function createVirtualDeviceWithHttpInfo($smart_device_id)
    {
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_id when calling createVirtualDevice');
        }
        // parse inputs
        $resourcePath = "/Smart/Devices/{smartDeviceId}/CreateVirtualDevice";
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\SmartDevicesProductModel',
                    '/Smart/Devices/{smartDeviceId}/CreateVirtualDevice'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartDevicesProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartDevicesProductModel', $e->getResponseHeaders());
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
     * GET Smart/Devices
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartDevicesList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Smart/Devices
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartDevicesList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/Smart/Devices";
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
                    '\Secuconnect\Client\Model\SmartDevicesList',
                    '/Smart/Devices'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartDevicesList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartDevicesList', $e->getResponseHeaders());
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
     * GET Smart/Devices/{smartDeviceId}
     *
     * @param string $smart_device_id Smart device id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     */
    public function getOne($smart_device_id)
    {
        list($response) = $this->getOneWithHttpInfo($smart_device_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Smart/Devices/{smartDeviceId}
     *
     * @param string $smart_device_id Smart device id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($smart_device_id)
    {
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_id when calling getOne');
        }
        // parse inputs
        $resourcePath = "/Smart/Devices/{smartDeviceId}";
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
                    'GET',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\SmartDevicesProductModel',
                    '/Smart/Devices/{smartDeviceId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartDevicesProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartDevicesProductModel', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }

    /**
     * Operation getRouting
     *
     * GET Smart/Devices/{smartDeviceId}/routing/type/{type}
     *
     * @param string $smart_device_id Smart device id (required)
     * @param string $type Payment type (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartDevicesList1
     */
    public function getRouting($smart_device_id, $type)
    {
        list($response) = $this->getRoutingWithHttpInfo($smart_device_id, $type);
        return $response;
    }

    /**
     * Operation getRoutingWithHttpInfo
     *
     * GET Smart/Devices/{smartDeviceId}/routing/type/{type}
     *
     * @param string $smart_device_id Smart device id (required)
     * @param string $type Payment type (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartDevicesList1, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoutingWithHttpInfo($smart_device_id, $type)
    {
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_id when calling getRouting');
        }
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling getRouting');
        }
        // parse inputs
        $resourcePath = "/Smart/Devices/{smartDeviceId}/routing/type/{type}";
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
        if ($smart_device_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartDeviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_device_id),
                $resourcePath
            );
        }
        // path params
        if ($type !== null) {
            $resourcePath = str_replace(
                "{" . "type" . "}",
                $this->apiClient->getSerializer()->toPathValue($type),
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
                    '\Secuconnect\Client\Model\SmartDevicesList1',
                    '/Smart/Devices/{smartDeviceId}/routing/type/{type}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartDevicesList1', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartDevicesList1', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }

    /**
     * Operation getSecubaseConfig
     *
     * POST Smart/Devices/{smartDeviceId}/GetSecubaseConfig
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDevicesDTOSecubaseConfig $secubase_config_properties Secubase config properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartDevicesSecubaseConfig
     */
    public function getSecubaseConfig($smart_device_id, $secubase_config_properties)
    {
        list($response) = $this->getSecubaseConfigWithHttpInfo($smart_device_id, $secubase_config_properties);
        return $response;
    }

    /**
     * Operation getSecubaseConfigWithHttpInfo
     *
     * POST Smart/Devices/{smartDeviceId}/GetSecubaseConfig
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDevicesDTOSecubaseConfig $secubase_config_properties Secubase config properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartDevicesSecubaseConfig, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSecubaseConfigWithHttpInfo($smart_device_id, $secubase_config_properties)
    {
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_id when calling getSecubaseConfig');
        }
        // verify the required parameter 'secubase_config_properties' is set
        if ($secubase_config_properties === null) {
            throw new \InvalidArgumentException('Missing the required parameter $secubase_config_properties when calling getSecubaseConfig');
        }
        // parse inputs
        $resourcePath = "/Smart/Devices/{smartDeviceId}/GetSecubaseConfig";
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
        if ($smart_device_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartDeviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_device_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($secubase_config_properties)) {
            $_tempBody = $secubase_config_properties;
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
                    '\Secuconnect\Client\Model\SmartDevicesSecubaseConfig',
                    '/Smart/Devices/{smartDeviceId}/GetSecubaseConfig'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartDevicesSecubaseConfig', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartDevicesSecubaseConfig', $e->getResponseHeaders());
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
     * Operation updateDevice
     *
     * PUT Smart/Devices/{smartDeviceId}
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDevicesDTO $smart_device_properties Smart device properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     */
    public function updateDevice($smart_device_id, $smart_device_properties)
    {
        list($response) = $this->updateDeviceWithHttpInfo($smart_device_id, $smart_device_properties);
        return $response;
    }

    /**
     * Operation updateDeviceWithHttpInfo
     *
     * PUT Smart/Devices/{smartDeviceId}
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDevicesDTO $smart_device_properties Smart device properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDeviceWithHttpInfo($smart_device_id, $smart_device_properties)
    {
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_id when calling updateDevice');
        }
        // verify the required parameter 'smart_device_properties' is set
        if ($smart_device_properties === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_properties when calling updateDevice');
        }
        // parse inputs
        $resourcePath = "/Smart/Devices/{smartDeviceId}";
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
        if ($smart_device_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartDeviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_device_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($smart_device_properties)) {
            $_tempBody = $smart_device_properties;
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
                    '\Secuconnect\Client\Model\SmartDevicesProductModel',
                    '/Smart/Devices/{smartDeviceId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartDevicesProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartDevicesProductModel', $e->getResponseHeaders());
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
     * Operation updatePin
     *
     * PUT /Smart/Devices/smartDeviceId/pin/
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDeviceUserPin $smart_device_properties Smart device properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     */
    public function updatePin($smart_device_id, $smart_device_properties)
    {
        list($response) = $this->updatePinWithHttpInfo($smart_device_id, $smart_device_properties);
        return $response;
    }

    /**
     * Operation updatePinWithHttpInfo
     *
     * PUT /Smart/Devices/smartDeviceId/pin/
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDeviceUserPin $smart_device_properties Smart device properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePinWithHttpInfo($smart_device_id, $smart_device_properties)
    {
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_id when calling updatePin');
        }
        // verify the required parameter 'smart_device_properties' is set
        if ($smart_device_properties === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_properties when calling updatePin');
        }
        // parse inputs
        $resourcePath = "/Smart/Devices/smartDeviceId/pin";
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
        if ($smart_device_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartDeviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_device_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($smart_device_properties)) {
            $_tempBody = $smart_device_properties;
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
                    '\Secuconnect\Client\Model\SmartDevicesProductModel',
                    '/Smart/Devices/smartDeviceId/pin'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartDevicesProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartDevicesProductModel', $e->getResponseHeaders());
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
