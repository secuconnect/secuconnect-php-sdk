<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * LoyaltyCardgroupsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCardgroupsApi
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
     * @return LoyaltyCardgroupsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addCardGroup
     *
     * POST Loyalty/Cardgroups
     *
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body Loyalty card group properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
     */
    public function addCardGroup($body)
    {
        list($response) = $this->addCardGroupWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addCardGroupWithHttpInfo
     *
     * POST Loyalty/Cardgroups
     *
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body Loyalty card group properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addCardGroupWithHttpInfo($body)
    {
        // parse inputs
        $resourcePath = "/Loyalty/Cardgroups";
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
                    '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel',
                    '/Loyalty/Cardgroups'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel', $e->getResponseHeaders());
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
     * Operation checkPassCodeEnabled
     *
     * POST Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled
     *
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTOCheckPasscodeEnabled $body Check passcode details 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ResultBoolean
     */
    public function checkPassCodeEnabled($loyalty_card_group_id, $body)
    {
        list($response) = $this->checkPassCodeEnabledWithHttpInfo($loyalty_card_group_id, $body);
        return $response;
    }

    /**
     * Operation checkPassCodeEnabledWithHttpInfo
     *
     * POST Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled
     *
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTOCheckPasscodeEnabled $body Check passcode details 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkPassCodeEnabledWithHttpInfo($loyalty_card_group_id, $body)
    {
        // verify the required parameter 'loyalty_card_group_id' is set
        if ($loyalty_card_group_id === null || (is_array($loyalty_card_group_id) && count($loyalty_card_group_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_card_group_id when calling checkPassCodeEnabled'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled";
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
        if ($loyalty_card_group_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyCardGroupId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_card_group_id),
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
                    '\Secuconnect\Client\Model\ResultBoolean',
                    '/Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\ResultBoolean', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ResultBoolean', $e->getResponseHeaders());
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
     * GET Loyalty/Cardgroups
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending. 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Loyalty/Cardgroups
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending. 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/Loyalty/Cardgroups";
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
                    '\Secuconnect\Client\Model\LoyaltyCardgroupsList',
                    '/Loyalty/Cardgroups'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCardgroupsList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCardgroupsList', $e->getResponseHeaders());
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
     * Operation getCardgroupsByMerchantId
     *
     * GET Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID
     *
     * @param string $general_merchant_id Search by provided id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]
     */
    public function getCardgroupsByMerchantId($general_merchant_id)
    {
        list($response) = $this->getCardgroupsByMerchantIdWithHttpInfo($general_merchant_id);
        return $response;
    }

    /**
     * Operation getCardgroupsByMerchantIdWithHttpInfo
     *
     * GET Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID
     *
     * @param string $general_merchant_id Search by provided id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCardgroupsByMerchantIdWithHttpInfo($general_merchant_id)
    {
        // verify the required parameter 'general_merchant_id' is set
        if ($general_merchant_id === null || (is_array($general_merchant_id) && count($general_merchant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_merchant_id when calling getCardgroupsByMerchantId'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID";
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
        if ($general_merchant_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalMerchantId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_merchant_id),
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
                    '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]',
                    '/Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]', $e->getResponseHeaders());
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
     * GET Loyalty/Cardgroups/{loyaltyCardGroupId}
     *
     * @param string $loyalty_card_group_id Search one by provided id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
     */
    public function getOne($loyalty_card_group_id)
    {
        list($response) = $this->getOneWithHttpInfo($loyalty_card_group_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Loyalty/Cardgroups/{loyaltyCardGroupId}
     *
     * @param string $loyalty_card_group_id Search one by provided id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($loyalty_card_group_id)
    {
        // verify the required parameter 'loyalty_card_group_id' is set
        if ($loyalty_card_group_id === null || (is_array($loyalty_card_group_id) && count($loyalty_card_group_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_card_group_id when calling getOne'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/Cardgroups/{loyaltyCardGroupId}";
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
        if ($loyalty_card_group_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyCardGroupId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_card_group_id),
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
                    '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel',
                    '/Loyalty/Cardgroups/{loyaltyCardGroupId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel', $e->getResponseHeaders());
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
     * Operation updateCardGroup
     *
     * PUT Loyalty/Cardgroups/{loyaltyCardGroupId}
     *
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body Loyalty card group properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
     */
    public function updateCardGroup($loyalty_card_group_id, $body)
    {
        list($response) = $this->updateCardGroupWithHttpInfo($loyalty_card_group_id, $body);
        return $response;
    }

    /**
     * Operation updateCardGroupWithHttpInfo
     *
     * PUT Loyalty/Cardgroups/{loyaltyCardGroupId}
     *
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body Loyalty card group properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCardGroupWithHttpInfo($loyalty_card_group_id, $body)
    {
        // verify the required parameter 'loyalty_card_group_id' is set
        if ($loyalty_card_group_id === null || (is_array($loyalty_card_group_id) && count($loyalty_card_group_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_card_group_id when calling updateCardGroup'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/Cardgroups/{loyaltyCardGroupId}";
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
        if ($loyalty_card_group_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyCardGroupId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_card_group_id),
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
                    '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel',
                    '/Loyalty/Cardgroups/{loyaltyCardGroupId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel', $e->getResponseHeaders());
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
