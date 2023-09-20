<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * GeneralContractsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralContractsApi
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
     * @return GeneralContractsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addPaymentLinkConfiguration
     *
     * Set Payment Link configuration
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\PaymentLinkOptions $body body 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralContractsProductModel
     */
    public function addPaymentLinkConfiguration($general_contract_id, $body)
    {
        list($response) = $this->addPaymentLinkConfigurationWithHttpInfo($general_contract_id, $body);
        return $response;
    }

    /**
     * Operation addPaymentLinkConfigurationWithHttpInfo
     *
     * Set Payment Link configuration
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\PaymentLinkOptions $body 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\GeneralContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addPaymentLinkConfigurationWithHttpInfo($general_contract_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling addPaymentLinkConfiguration'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/savePaymentLinkConfiguration";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    '\Secuconnect\Client\Model\GeneralContractsProductModel',
                    '/General/Contracts/{generalContractId}/savePaymentLinkConfiguration'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralContractsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralContractsProductModel', $e->getResponseHeaders());
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
     * Operation addThirdPartyConfiguration
     *
     * Set third party configuration
     *
     * @param string $general_contract_id General contract id (required)
     * @param \Secuconnect\Client\Model\ThirdPartyConfigurationDTO $body body 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ThirdPartyConfigurationProductModel
     */
    public function addThirdPartyConfiguration($general_contract_id, $body)
    {
        list($response) = $this->addThirdPartyConfigurationWithHttpInfo($general_contract_id, $body);
        return $response;
    }

    /**
     * Operation addThirdPartyConfigurationWithHttpInfo
     *
     * Set third party configuration
     *
     * @param string $general_contract_id General contract id (required)
     * @param \Secuconnect\Client\Model\ThirdPartyConfigurationDTO $body 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ThirdPartyConfigurationProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addThirdPartyConfigurationWithHttpInfo($general_contract_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling addThirdPartyConfiguration'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/ThirdPartyConfiguration";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel',
                    '/General/Contracts/{generalContractId}/ThirdPartyConfiguration'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel', $e->getResponseHeaders());
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
     * Find General Contracts
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result, all others will be filtered out. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;desc&#x60; descending. 
     * @param \Secuconnect\Client\Model\Aggregate $aggregate Aggregation summarizes your data. 
     * @param string $meta return field definitions 
     * @param float $validate Check syntax of a query string 
     * @param string $scroll_expire How long it should keep the “search context” alive? 
     * @param string $scroll_id Identifier of a previous search context. 
     * @param string $preset Query presets 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralContractsList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null, $aggregate = null, $meta = null, $validate = null, $scroll_expire = null, $scroll_id = null, $preset = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort, $aggregate, $meta, $validate, $scroll_expire, $scroll_id, $preset);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * Find General Contracts
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result, all others will be filtered out. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;desc&#x60; descending. 
     * @param \Secuconnect\Client\Model\Aggregate $aggregate Aggregation summarizes your data. 
     * @param string $meta return field definitions 
     * @param float $validate Check syntax of a query string 
     * @param string $scroll_expire How long it should keep the “search context” alive? 
     * @param string $scroll_id Identifier of a previous search context. 
     * @param string $preset Query presets 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\GeneralContractsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null, $aggregate = null, $meta = null, $validate = null, $scroll_expire = null, $scroll_id = null, $preset = null)
    {
        // parse inputs
        $resourcePath = "/General/Contracts";
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
                    '\Secuconnect\Client\Model\GeneralContractsList',
                    '/General/Contracts'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralContractsList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralContractsList', $e->getResponseHeaders());
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
     * Operation getAvailableCurrencies
     *
     * Get currencies
     *
     * @param string $general_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return string[]
     */
    public function getAvailableCurrencies($general_contract_id)
    {
        list($response) = $this->getAvailableCurrenciesWithHttpInfo($general_contract_id);
        return $response;
    }

    /**
     * Operation getAvailableCurrenciesWithHttpInfo
     *
     * Get currencies
     *
     * @param string $general_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAvailableCurrenciesWithHttpInfo($general_contract_id)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getAvailableCurrencies'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/AvailableCurrencies";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    'string[]',
                    '/General/Contracts/{generalContractId}/AvailableCurrencies'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
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
     * Operation getAvailablePaymentMethods
     *
     * Get payment methods
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body body 
     * @throws ApiException on non-2xx response
     * @return string[]
     */
    public function getAvailablePaymentMethods($general_contract_id, $body)
    {
        list($response) = $this->getAvailablePaymentMethodsWithHttpInfo($general_contract_id, $body);
        return $response;
    }

    /**
     * Operation getAvailablePaymentMethodsWithHttpInfo
     *
     * Get payment methods
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body 
     * @throws ApiException on non-2xx response
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAvailablePaymentMethodsWithHttpInfo($general_contract_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getAvailablePaymentMethods'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/getAvailablePaymentMethods";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    'string[]',
                    '/General/Contracts/{generalContractId}/getAvailablePaymentMethods'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
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
     * Operation getAvailablePaymentMethodsForTransaction
     *
     * Get available payment methods for Smart Transaction
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param string $smart_transaction_id Smart Transaction identifier (required)
     * @param \Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body body 
     * @throws ApiException on non-2xx response
     * @return string[]
     */
    public function getAvailablePaymentMethodsForTransaction($general_contract_id, $smart_transaction_id, $body)
    {
        list($response) = $this->getAvailablePaymentMethodsForTransactionWithHttpInfo($general_contract_id, $smart_transaction_id, $body);
        return $response;
    }

    /**
     * Operation getAvailablePaymentMethodsForTransactionWithHttpInfo
     *
     * Get available payment methods for Smart Transaction
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param string $smart_transaction_id Smart Transaction identifier (required)
     * @param \Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body 
     * @throws ApiException on non-2xx response
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAvailablePaymentMethodsForTransactionWithHttpInfo($general_contract_id, $smart_transaction_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getAvailablePaymentMethodsForTransaction'
            );
        }
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null || (is_array($smart_transaction_id) && count($smart_transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling getAvailablePaymentMethodsForTransaction'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/getAvailablePaymentMethods/{smartTransactionId}";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
                $resourcePath
            );
        }
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
                    'string[]',
                    '/General/Contracts/{generalContractId}/getAvailablePaymentMethods/{smartTransactionId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
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
     * Operation getIframeOptions
     *
     * Get iframe options
     *
     * @param string $general_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\IframeOptions
     */
    public function getIframeOptions($general_contract_id)
    {
        list($response) = $this->getIframeOptionsWithHttpInfo($general_contract_id);
        return $response;
    }

    /**
     * Operation getIframeOptionsWithHttpInfo
     *
     * Get iframe options
     *
     * @param string $general_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\IframeOptions, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIframeOptionsWithHttpInfo($general_contract_id)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getIframeOptions'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/IframeOptions";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    '\Secuconnect\Client\Model\IframeOptions',
                    '/General/Contracts/{generalContractId}/IframeOptions'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\IframeOptions', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\IframeOptions', $e->getResponseHeaders());
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
     * Read General Contract
     *
     * @param string $general_contract_id General contract id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralContractsProductModel
     */
    public function getOne($general_contract_id)
    {
        list($response) = $this->getOneWithHttpInfo($general_contract_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * Read General Contract
     *
     * @param string $general_contract_id General contract id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\GeneralContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($general_contract_id)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getOne'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    '\Secuconnect\Client\Model\GeneralContractsProductModel',
                    '/General/Contracts/{generalContractId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralContractsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralContractsProductModel', $e->getResponseHeaders());
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
     * Operation getThirdPartyConfiguration
     *
     * Get third party configuration
     *
     * @param string $general_contract_id General contract id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ThirdPartyConfigurationProductModel
     */
    public function getThirdPartyConfiguration($general_contract_id)
    {
        list($response) = $this->getThirdPartyConfigurationWithHttpInfo($general_contract_id);
        return $response;
    }

    /**
     * Operation getThirdPartyConfigurationWithHttpInfo
     *
     * Get third party configuration
     *
     * @param string $general_contract_id General contract id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ThirdPartyConfigurationProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getThirdPartyConfigurationWithHttpInfo($general_contract_id)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getThirdPartyConfiguration'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/ThirdPartyConfiguration";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel',
                    '/General/Contracts/{generalContractId}/ThirdPartyConfiguration'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel', $e->getResponseHeaders());
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
     * Operation getTransferBalance
     *
     * Get balance from bank transfer
     *
     * @param \Secuconnect\Client\Model\ProductInstanceID $general_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralContractsTransferBalanceModel
     */
    public function getTransferBalance($general_contract_id)
    {
        list($response) = $this->getTransferBalanceWithHttpInfo($general_contract_id);
        return $response;
    }

    /**
     * Operation getTransferBalanceWithHttpInfo
     *
     * Get balance from bank transfer
     *
     * @param \Secuconnect\Client\Model\ProductInstanceID $general_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\GeneralContractsTransferBalanceModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransferBalanceWithHttpInfo($general_contract_id)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getTransferBalance'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/transferBalance";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    '\Secuconnect\Client\Model\GeneralContractsTransferBalanceModel',
                    '/General/Contracts/{generalContractId}/transferBalance'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralContractsTransferBalanceModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralContractsTransferBalanceModel', $e->getResponseHeaders());
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
     * Operation patchContract
     *
     * Update General Contract partially
     *
     * @param string $general_contract_id General contract id (required)
     * @param \Secuconnect\Client\Model\GeneralContractsDTO $body body 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralContractsProductModel
     */
    public function patchContract($general_contract_id, $body)
    {
        list($response) = $this->patchContractWithHttpInfo($general_contract_id, $body);
        return $response;
    }

    /**
     * Operation patchContractWithHttpInfo
     *
     * Update General Contract partially
     *
     * @param string $general_contract_id General contract id (required)
     * @param \Secuconnect\Client\Model\GeneralContractsDTO $body 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\GeneralContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchContractWithHttpInfo($general_contract_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling patchContract'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    'PATCH',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\GeneralContractsProductModel',
                    '/General/Contracts/{generalContractId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralContractsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralContractsProductModel', $e->getResponseHeaders());
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
     * Operation patchThirdPartyConfiguration
     *
     * Update third party configuration partially
     *
     * @param string $general_contract_id General contract id (required)
     * @param \Secuconnect\Client\Model\ThirdPartyConfigurationDTO $body body 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ThirdPartyConfigurationProductModel
     */
    public function patchThirdPartyConfiguration($general_contract_id, $body)
    {
        list($response) = $this->patchThirdPartyConfigurationWithHttpInfo($general_contract_id, $body);
        return $response;
    }

    /**
     * Operation patchThirdPartyConfigurationWithHttpInfo
     *
     * Update third party configuration partially
     *
     * @param string $general_contract_id General contract id (required)
     * @param \Secuconnect\Client\Model\ThirdPartyConfigurationDTO $body 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ThirdPartyConfigurationProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchThirdPartyConfigurationWithHttpInfo($general_contract_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling patchThirdPartyConfiguration'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/ThirdPartyConfiguration";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    'PATCH',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel',
                    '/General/Contracts/{generalContractId}/ThirdPartyConfiguration'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel', $e->getResponseHeaders());
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
     * Operation removeThirdPartyConfiguration
     *
     * Delete third party configuration
     *
     * @param string $general_contract_id General contract id (required)
     * @param string $third_party_name Third party name (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ThirdPartyConfigurationProductModel
     */
    public function removeThirdPartyConfiguration($general_contract_id, $third_party_name)
    {
        list($response) = $this->removeThirdPartyConfigurationWithHttpInfo($general_contract_id, $third_party_name);
        return $response;
    }

    /**
     * Operation removeThirdPartyConfigurationWithHttpInfo
     *
     * Delete third party configuration
     *
     * @param string $general_contract_id General contract id (required)
     * @param string $third_party_name Third party name (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ThirdPartyConfigurationProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeThirdPartyConfigurationWithHttpInfo($general_contract_id, $third_party_name)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling removeThirdPartyConfiguration'
            );
        }
        // verify the required parameter 'third_party_name' is set
        if ($third_party_name === null || (is_array($third_party_name) && count($third_party_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $third_party_name when calling removeThirdPartyConfiguration'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/ThirdPartyConfiguration/{thirdPartyName}";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
                $resourcePath
            );
        }
        // path params
        if ($third_party_name !== null) {
            $resourcePath = str_replace(
                "{" . "thirdPartyName" . "}",
                $this->apiClient->getSerializer()->toPathValue($third_party_name),
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
                    '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel',
                    '/General/Contracts/{generalContractId}/ThirdPartyConfiguration/{thirdPartyName}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel', $e->getResponseHeaders());
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
     * Operation revokeAccrual
     *
     * Revoke all accruals
     *
     * @param string $general_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return void
     */
    public function revokeAccrual($general_contract_id)
    {
        $this->revokeAccrualWithHttpInfo($general_contract_id);
    }

    /**
     * Operation revokeAccrualWithHttpInfo
     *
     * Revoke all accruals
     *
     * @param string $general_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function revokeAccrualWithHttpInfo($general_contract_id)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling revokeAccrual'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/revokeAccrual";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    null,
                    '/General/Contracts/{generalContractId}/revokeAccrual'
                );

                return [null, $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
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
     * Operation terminate
     *
     * Terminate contract
     *
     * @param string $general_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ResultBoolean
     */
    public function terminate($general_contract_id)
    {
        list($response) = $this->terminateWithHttpInfo($general_contract_id);
        return $response;
    }

    /**
     * Operation terminateWithHttpInfo
     *
     * Terminate contract
     *
     * @param string $general_contract_id Contract identifier (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function terminateWithHttpInfo($general_contract_id)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling terminate'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/terminate";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    '\Secuconnect\Client\Model\ResultBoolean',
                    '/General/Contracts/{generalContractId}/terminate'
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
     * Operation updateBankAccount
     *
     * Update bank account
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $body body 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ResultBoolean
     */
    public function updateBankAccount($general_contract_id, $body)
    {
        list($response) = $this->updateBankAccountWithHttpInfo($general_contract_id, $body);
        return $response;
    }

    /**
     * Operation updateBankAccountWithHttpInfo
     *
     * Update bank account
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $body 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBankAccountWithHttpInfo($general_contract_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling updateBankAccount'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/updateBankAccount";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    '/General/Contracts/{generalContractId}/updateBankAccount'
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
     * Operation updateContract
     *
     * Update General Contract
     *
     * @param string $general_contract_id General contract id (required)
     * @param \Secuconnect\Client\Model\GeneralContractsDTO $body body 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralContractsProductModel
     */
    public function updateContract($general_contract_id, $body)
    {
        list($response) = $this->updateContractWithHttpInfo($general_contract_id, $body);
        return $response;
    }

    /**
     * Operation updateContractWithHttpInfo
     *
     * Update General Contract
     *
     * @param string $general_contract_id General contract id (required)
     * @param \Secuconnect\Client\Model\GeneralContractsDTO $body 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\GeneralContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateContractWithHttpInfo($general_contract_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling updateContract'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    '\Secuconnect\Client\Model\GeneralContractsProductModel',
                    '/General/Contracts/{generalContractId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralContractsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralContractsProductModel', $e->getResponseHeaders());
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
     * Operation updateThirdPartyConfiguration
     *
     * Update third party configuration
     *
     * @param string $general_contract_id General contract id (required)
     * @param \Secuconnect\Client\Model\ThirdPartyConfigurationDTO $body body 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ThirdPartyConfigurationProductModel
     */
    public function updateThirdPartyConfiguration($general_contract_id, $body)
    {
        list($response) = $this->updateThirdPartyConfigurationWithHttpInfo($general_contract_id, $body);
        return $response;
    }

    /**
     * Operation updateThirdPartyConfigurationWithHttpInfo
     *
     * Update third party configuration
     *
     * @param string $general_contract_id General contract id (required)
     * @param \Secuconnect\Client\Model\ThirdPartyConfigurationDTO $body 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ThirdPartyConfigurationProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateThirdPartyConfigurationWithHttpInfo($general_contract_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null || (is_array($general_contract_id) && count($general_contract_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling updateThirdPartyConfiguration'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/ThirdPartyConfiguration";
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
        if ($general_contract_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalContractId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel',
                    '/General/Contracts/{generalContractId}/ThirdPartyConfiguration'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ThirdPartyConfigurationProductModel', $e->getResponseHeaders());
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
