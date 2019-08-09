<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * SmartTransactionsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsApi
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
     * @return SmartTransactionsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addTransaction
     *
     * POST Smart/Transactions
     *
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $smart_transaction_properties Smart transaction properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function addTransaction($smart_transaction_properties)
    {
        list($response) = $this->addTransactionWithHttpInfo($smart_transaction_properties);
        return $response;
    }

    /**
     * Operation addTransactionWithHttpInfo
     *
     * POST Smart/Transactions
     *
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $smart_transaction_properties Smart transaction properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addTransactionWithHttpInfo($smart_transaction_properties)
    {
        // verify the required parameter 'smart_transaction_properties' is set
        if ($smart_transaction_properties === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_transaction_properties when calling addTransaction');
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions";
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
        if (isset($smart_transaction_properties)) {
            $_tempBody = $smart_transaction_properties;
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
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation cancelTransaction
     *
     * POST Smart/Transactions/{smartTransactionId}/cancel
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function cancelTransaction($smart_transaction_id)
    {
        list($response) = $this->cancelTransactionWithHttpInfo($smart_transaction_id);
        return $response;
    }

    /**
     * Operation cancelTransactionWithHttpInfo
     *
     * POST Smart/Transactions/{smartTransactionId}/cancel
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelTransactionWithHttpInfo($smart_transaction_id)
    {
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_transaction_id when calling cancelTransaction');
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/cancel";
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
        if ($smart_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
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
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartTransactionId}/cancel'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation cancelTrx
     *
     * POST Smart/Transactions/{smartTransactionId}/canceltrx
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function cancelTrx($smart_transaction_id)
    {
        list($response) = $this->cancelTrxWithHttpInfo($smart_transaction_id);
        return $response;
    }

    /**
     * Operation cancelTrxWithHttpInfo
     *
     * POST Smart/Transactions/{smartTransactionId}/canceltrx
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelTrxWithHttpInfo($smart_transaction_id)
    {
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_transaction_id when calling cancelTrx');
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/canceltrx";
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
        if ($smart_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
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
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartTransactionId}/canceltrx'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation diagnose
     *
     * POST Smart/Transactions/{smartDeviceId}/diagnosis
     *
     * @param string $smart_device_id Smart device id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function diagnose($smart_device_id)
    {
        list($response) = $this->diagnoseWithHttpInfo($smart_device_id);
        return $response;
    }

    /**
     * Operation diagnoseWithHttpInfo
     *
     * POST Smart/Transactions/{smartDeviceId}/diagnosis
     *
     * @param string $smart_device_id Smart device id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function diagnoseWithHttpInfo($smart_device_id)
    {
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_id when calling diagnose');
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartDeviceId}/diagnosis";
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
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartDeviceId}/diagnosis'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
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
     * GET Smart/Transactions
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Smart/Transactions
     *
     * @param int $count The number of items to return. (optional)
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). (optional)
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 (optional)
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                  A condition may contain:  *                      - wildcard \&quot;*\&quot; for any number of characters  *                      - wildcard \&quot;?\&quot; for one character  *                      - ranges in the form [value TO value]  *  *                  Single expressions may combined by &#39;AND&#39;, &#39;OR&#39;, &#39;NOT&#39; operators and parenthesis &#39;(&#39;, &#39;)&#39; for grouping.  *                  Property names can be nested like \&quot;prop1.prop2\&quot;.  *                  Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * (optional)
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#39;asc&#39;, or descending &#39;dsc&#39; order. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/Smart/Transactions";
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
                    '\Secuconnect\Client\Model\SmartTransactionsList',
                    '/Smart/Transactions'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsList', $e->getResponseHeaders());
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
     * GET Smart/Transactions/{smartTransactionId}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function getOne($smart_transaction_id)
    {
        list($response) = $this->getOneWithHttpInfo($smart_transaction_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Smart/Transactions/{smartTransactionId}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($smart_transaction_id)
    {
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_transaction_id when calling getOne');
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}";
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
        if ($smart_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
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
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartTransactionId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation preTransaction
     *
     * POST Smart/Transactions/{smartTransactionId}/preTransaction
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsPreTransactionModel
     */
    public function preTransaction($smart_transaction_id)
    {
        list($response) = $this->preTransactionWithHttpInfo($smart_transaction_id);
        return $response;
    }

    /**
     * Operation preTransactionWithHttpInfo
     *
     * POST Smart/Transactions/{smartTransactionId}/preTransaction
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsPreTransactionModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function preTransactionWithHttpInfo($smart_transaction_id)
    {
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_transaction_id when calling preTransaction');
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/preTransaction";
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
        if ($smart_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
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
                    '\Secuconnect\Client\Model\SmartTransactionsPreTransactionModel',
                    '/Smart/Transactions/{smartTransactionId}/preTransaction'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsPreTransactionModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsPreTransactionModel', $e->getResponseHeaders());
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
     * Operation prepare
     *
     * POST Smart/Transactions/stx_xxx/prepare/{paymentMethod}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param string $payment_method Payment method (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepare $body Information which customer and container will be used to this operation (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function prepare($smart_transaction_id, $payment_method, $body)
    {
        list($response) = $this->prepareWithHttpInfo($smart_transaction_id, $payment_method, $body);
        return $response;
    }

    /**
     * Operation prepareWithHttpInfo
     *
     * POST Smart/Transactions/stx_xxx/prepare/{paymentMethod}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param string $payment_method Payment method (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepare $body Information which customer and container will be used to this operation (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function prepareWithHttpInfo($smart_transaction_id, $payment_method, $body)
    {
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_transaction_id when calling prepare');
        }
        // verify the required parameter 'payment_method' is set
        if ($payment_method === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_method when calling prepare');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling prepare');
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/prepare/{paymentMethod}";
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
        if ($smart_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
                $resourcePath
            );
        }
        // path params
        if ($payment_method !== null) {
            $resourcePath = str_replace(
                "{" . "paymentMethod" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_method),
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
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartTransactionId}/prepare/{paymentMethod}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation startEndOfDayReport
     *
     * POST Smart/Transactions/{smartDeviceId}/endOfDay
     *
     * @param string $smart_device_id Smart device id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function startEndOfDayReport($smart_device_id)
    {
        list($response) = $this->startEndOfDayReportWithHttpInfo($smart_device_id);
        return $response;
    }

    /**
     * Operation startEndOfDayReportWithHttpInfo
     *
     * POST Smart/Transactions/{smartDeviceId}/endOfDay
     *
     * @param string $smart_device_id Smart device id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function startEndOfDayReportWithHttpInfo($smart_device_id)
    {
        // verify the required parameter 'smart_device_id' is set
        if ($smart_device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_device_id when calling startEndOfDayReport');
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartDeviceId}/endOfDay";
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
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartDeviceId}/endOfDay'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation startTransaction
     *
     * POST Smart/Transactions/{smartTransactionId}/start/{paymentMethod}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param string $payment_method Payment method (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function startTransaction($smart_transaction_id, $payment_method)
    {
        list($response) = $this->startTransactionWithHttpInfo($smart_transaction_id, $payment_method);
        return $response;
    }

    /**
     * Operation startTransactionWithHttpInfo
     *
     * POST Smart/Transactions/{smartTransactionId}/start/{paymentMethod}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param string $payment_method Payment method (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function startTransactionWithHttpInfo($smart_transaction_id, $payment_method)
    {
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_transaction_id when calling startTransaction');
        }
        // verify the required parameter 'payment_method' is set
        if ($payment_method === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_method when calling startTransaction');
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/start/{paymentMethod}";
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
        if ($smart_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
                $resourcePath
            );
        }
        // path params
        if ($payment_method !== null) {
            $resourcePath = str_replace(
                "{" . "paymentMethod" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_method),
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
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartTransactionId}/start/{paymentMethod}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation updateTransaction
     *
     * PUT Smart/Transactions/{smartTransactionId}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $smart_transaction_properties Smart transaction properties (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function updateTransaction($smart_transaction_id, $smart_transaction_properties)
    {
        list($response) = $this->updateTransactionWithHttpInfo($smart_transaction_id, $smart_transaction_properties);
        return $response;
    }

    /**
     * Operation updateTransactionWithHttpInfo
     *
     * PUT Smart/Transactions/{smartTransactionId}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $smart_transaction_properties Smart transaction properties (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateTransactionWithHttpInfo($smart_transaction_id, $smart_transaction_properties)
    {
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_transaction_id when calling updateTransaction');
        }
        // verify the required parameter 'smart_transaction_properties' is set
        if ($smart_transaction_properties === null) {
            throw new \InvalidArgumentException('Missing the required parameter $smart_transaction_properties when calling updateTransaction');
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}";
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
        if ($smart_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "smartTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($smart_transaction_properties)) {
            $_tempBody = $smart_transaction_properties;
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
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartTransactionId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
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
