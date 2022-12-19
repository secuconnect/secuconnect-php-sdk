<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * PaymentTransactionsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentTransactionsApi
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
     * @return PaymentTransactionsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addTransaction
     *
     * POST Payment/Transactions
     *
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTO $body Create payment transaction input properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function addTransaction($body)
    {
        list($response) = $this->addTransactionWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addTransactionWithHttpInfo
     *
     * POST Payment/Transactions
     *
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTO $body Create payment transaction input properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addTransactionWithHttpInfo($body)
    {
        // parse inputs
        $resourcePath = "/Payment/Transactions";
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
                    '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                    '/Payment/Transactions'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
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
     * Operation cancel
     *
     * POST Payment/Transactions/{paymentTransactionId}/cancel
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @param \Secuconnect\Client\Model\PaymentTransactionCancelDTO $body Cancel payment transaction input properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel[]
     */
    public function cancel($payment_transaction_id, $body)
    {
        list($response) = $this->cancelWithHttpInfo($payment_transaction_id, $body);
        return $response;
    }

    /**
     * Operation cancelWithHttpInfo
     *
     * POST Payment/Transactions/{paymentTransactionId}/cancel
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @param \Secuconnect\Client\Model\PaymentTransactionCancelDTO $body Cancel payment transaction input properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelWithHttpInfo($payment_transaction_id, $body)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null || (is_array($payment_transaction_id) && count($payment_transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling cancel'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/cancel";
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
        if ($payment_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    '\Secuconnect\Client\Model\PaymentTransactionsProductModel[]',
                    '/Payment/Transactions/{paymentTransactionId}/cancel'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsProductModel[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsProductModel[]', $e->getResponseHeaders());
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
     * GET Payment/Transactions
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
     * @return \Secuconnect\Client\Model\PaymentTransactionsList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null, $aggregate = null, $meta = null, $validate = null, $scroll_expire = null, $scroll_id = null, $preset = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort, $aggregate, $meta, $validate, $scroll_expire, $scroll_id, $preset);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Payment/Transactions
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
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null, $aggregate = null, $meta = null, $validate = null, $scroll_expire = null, $scroll_id = null, $preset = null)
    {
        // parse inputs
        $resourcePath = "/Payment/Transactions";
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
                    '\Secuconnect\Client\Model\PaymentTransactionsList',
                    '/Payment/Transactions'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsList', $e->getResponseHeaders());
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
     * Operation getCrowdFundingData
     *
     * GET Payment/Transactions/me/CrowdFundingData/{generalMerchantId}
     *
     * @param string $general_merchant_id Merchant ID (MRC_...) (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentCrowdFundingData
     */
    public function getCrowdFundingData($general_merchant_id)
    {
        list($response) = $this->getCrowdFundingDataWithHttpInfo($general_merchant_id);
        return $response;
    }

    /**
     * Operation getCrowdFundingDataWithHttpInfo
     *
     * GET Payment/Transactions/me/CrowdFundingData/{generalMerchantId}
     *
     * @param string $general_merchant_id Merchant ID (MRC_...) (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentCrowdFundingData, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCrowdFundingDataWithHttpInfo($general_merchant_id)
    {
        // verify the required parameter 'general_merchant_id' is set
        if ($general_merchant_id === null || (is_array($general_merchant_id) && count($general_merchant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_merchant_id when calling getCrowdFundingData'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/me/CrowdFundingData/{generalMerchantId}";
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
                    '\Secuconnect\Client\Model\PaymentCrowdFundingData',
                    '/Payment/Transactions/me/CrowdFundingData/{generalMerchantId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentCrowdFundingData', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentCrowdFundingData', $e->getResponseHeaders());
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
     * GET Payment/Transactions/{paymentTransactionId}
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel
     */
    public function getOne($payment_transaction_id)
    {
        list($response) = $this->getOneWithHttpInfo($payment_transaction_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Payment/Transactions/{paymentTransactionId}
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($payment_transaction_id)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null || (is_array($payment_transaction_id) && count($payment_transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling getOne'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}";
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
        if ($payment_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    '\Secuconnect\Client\Model\PaymentTransactionsProductModel',
                    '/Payment/Transactions/{paymentTransactionId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation getPaymentTransactionsOldFormat
     *
     * GET Payment/Transactions/{paymentTransactionId}/OldFormat
     *
     * @param string $payment_transaction_id Payment ID (PCI_...) or hash (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function getPaymentTransactionsOldFormat($payment_transaction_id)
    {
        list($response) = $this->getPaymentTransactionsOldFormatWithHttpInfo($payment_transaction_id);
        return $response;
    }

    /**
     * Operation getPaymentTransactionsOldFormatWithHttpInfo
     *
     * GET Payment/Transactions/{paymentTransactionId}/OldFormat
     *
     * @param string $payment_transaction_id Payment ID (PCI_...) or hash (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentTransactionsOldFormatWithHttpInfo($payment_transaction_id)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null || (is_array($payment_transaction_id) && count($payment_transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling getPaymentTransactionsOldFormat'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/OldFormat";
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
        if ($payment_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                    '/Payment/Transactions/{paymentTransactionId}/OldFormat'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
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
     * Operation getShippingUrl
     *
     * GET Payment/Transactions/{paymentTransactionId}/shippingUrl
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentTransactionsShippingUrl
     */
    public function getShippingUrl($payment_transaction_id)
    {
        list($response) = $this->getShippingUrlWithHttpInfo($payment_transaction_id);
        return $response;
    }

    /**
     * Operation getShippingUrlWithHttpInfo
     *
     * GET Payment/Transactions/{paymentTransactionId}/shippingUrl
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsShippingUrl, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShippingUrlWithHttpInfo($payment_transaction_id)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null || (is_array($payment_transaction_id) && count($payment_transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling getShippingUrl'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/shippingUrl";
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
        if ($payment_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    '\Secuconnect\Client\Model\PaymentTransactionsShippingUrl',
                    '/Payment/Transactions/{paymentTransactionId}/shippingUrl'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsShippingUrl', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsShippingUrl', $e->getResponseHeaders());
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
     * Operation increaseAmount
     *
     * POST Payment/Transactions/{paymentTransactionId}/IncreaseAmount
     *
     * @param string $payment_transaction_id Payment ID (PCI_...) (required)
     * @param \Secuconnect\Client\Model\PaymentTransactionsIncreaseAmountDTO $body increase amount input params 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel
     */
    public function increaseAmount($payment_transaction_id, $body)
    {
        list($response) = $this->increaseAmountWithHttpInfo($payment_transaction_id, $body);
        return $response;
    }

    /**
     * Operation increaseAmountWithHttpInfo
     *
     * POST Payment/Transactions/{paymentTransactionId}/IncreaseAmount
     *
     * @param string $payment_transaction_id Payment ID (PCI_...) (required)
     * @param \Secuconnect\Client\Model\PaymentTransactionsIncreaseAmountDTO $body increase amount input params 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function increaseAmountWithHttpInfo($payment_transaction_id, $body)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null || (is_array($payment_transaction_id) && count($payment_transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling increaseAmount'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/IncreaseAmount";
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
        if ($payment_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    '\Secuconnect\Client\Model\PaymentTransactionsProductModel',
                    '/Payment/Transactions/{paymentTransactionId}/IncreaseAmount'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsProductModel', $e->getResponseHeaders());
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
     * POST Payment/Transactions/{paymentTransactionId}/revokeAccrual
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel
     */
    public function revokeAccrual($payment_transaction_id)
    {
        list($response) = $this->revokeAccrualWithHttpInfo($payment_transaction_id);
        return $response;
    }

    /**
     * Operation revokeAccrualWithHttpInfo
     *
     * POST Payment/Transactions/{paymentTransactionId}/revokeAccrual
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function revokeAccrualWithHttpInfo($payment_transaction_id)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null || (is_array($payment_transaction_id) && count($payment_transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling revokeAccrual'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/revokeAccrual";
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
        if ($payment_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    '\Secuconnect\Client\Model\PaymentTransactionsProductModel',
                    '/Payment/Transactions/{paymentTransactionId}/revokeAccrual'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation updateShippingInformation
     *
     * PUT Payment/Transactions/{paymentTransactionId}/ShippingInformation
     *
     * @param string $payment_transaction_id Payment ID (PCI_...) or hash (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO $body Update shipping information input properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ResultBoolean
     */
    public function updateShippingInformation($payment_transaction_id, $body)
    {
        list($response) = $this->updateShippingInformationWithHttpInfo($payment_transaction_id, $body);
        return $response;
    }

    /**
     * Operation updateShippingInformationWithHttpInfo
     *
     * PUT Payment/Transactions/{paymentTransactionId}/ShippingInformation
     *
     * @param string $payment_transaction_id Payment ID (PCI_...) or hash (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO $body Update shipping information input properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateShippingInformationWithHttpInfo($payment_transaction_id, $body)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null || (is_array($payment_transaction_id) && count($payment_transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling updateShippingInformation'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/ShippingInformation";
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
        if ($payment_transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentTransactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    '\Secuconnect\Client\Model\ResultBoolean',
                    '/Payment/Transactions/{paymentTransactionId}/ShippingInformation'
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
}
