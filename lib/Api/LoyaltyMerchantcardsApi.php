<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * LoyaltyMerchantcardsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsApi
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
     * @return LoyaltyMerchantcardsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addMerchantCard
     *
     * POST Loyalty/MerchantCards
     *
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO $body Loyalty merchant card properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function addMerchantCard($body)
    {
        list($response) = $this->addMerchantCardWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addMerchantCardWithHttpInfo
     *
     * POST Loyalty/MerchantCards
     *
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO $body Loyalty merchant card properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addMerchantCardWithHttpInfo($body)
    {
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards";
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel',
                    '/Loyalty/MerchantCards'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $e->getResponseHeaders());
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
     * Operation cardBalanceReceipt
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/getCardBalanceReceipt
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardBalanceReceipt $body Information about card &amp; current terminal 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsCardBalanceReceipt
     */
    public function cardBalanceReceipt($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->cardBalanceReceiptWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation cardBalanceReceiptWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/getCardBalanceReceipt
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardBalanceReceipt $body Information about card &amp; current terminal 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsCardBalanceReceipt, HTTP status code, HTTP response headers (array of strings)
     */
    public function cardBalanceReceiptWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling cardBalanceReceipt'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/getCardBalanceReceipt";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsCardBalanceReceipt',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/getCardBalanceReceipt'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsCardBalanceReceipt', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsCardBalanceReceipt', $e->getResponseHeaders());
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
     * Operation checkCsc
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCsc $body Information about card 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ResultBoolean
     */
    public function checkCsc($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->checkCscWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation checkCscWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCsc $body Information about card 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkCscWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling checkCsc'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc'
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
     * Operation checkPassCode
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode $body Information about card 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ResultBoolean
     */
    public function checkPassCode($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->checkPassCodeWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation checkPassCodeWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode $body Information about card 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkPassCodeWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling checkPassCode'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode'
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
     * Operation createMerchantcards
     *
     * POST Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}
     *
     * @param string $general_merchant_id General merchant id (required)
     * @param string $loyalty_cardgroup_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount $body Cards amount 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel[]
     */
    public function createMerchantcards($general_merchant_id, $loyalty_cardgroup_id, $body)
    {
        list($response) = $this->createMerchantcardsWithHttpInfo($general_merchant_id, $loyalty_cardgroup_id, $body);
        return $response;
    }

    /**
     * Operation createMerchantcardsWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}
     *
     * @param string $general_merchant_id General merchant id (required)
     * @param string $loyalty_cardgroup_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount $body Cards amount 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function createMerchantcardsWithHttpInfo($general_merchant_id, $loyalty_cardgroup_id, $body)
    {
        // verify the required parameter 'general_merchant_id' is set
        if ($general_merchant_id === null || (is_array($general_merchant_id) && count($general_merchant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_merchant_id when calling createMerchantcards'
            );
        }
        // verify the required parameter 'loyalty_cardgroup_id' is set
        if ($loyalty_cardgroup_id === null || (is_array($loyalty_cardgroup_id) && count($loyalty_cardgroup_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_cardgroup_id when calling createMerchantcards'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}";
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
        if ($general_merchant_id !== null) {
            $resourcePath = str_replace(
                "{" . "generalMerchantId" . "}",
                $this->apiClient->getSerializer()->toPathValue($general_merchant_id),
                $resourcePath
            );
        }
        // path params
        if ($loyalty_cardgroup_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyCardgroupId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_cardgroup_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel[]',
                    '/Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel[]', $e->getResponseHeaders());
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
     * Operation executeTransaction
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction $body Transaction properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel
     */
    public function executeTransaction($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->executeTransactionWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation executeTransactionWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction $body Transaction properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function executeTransactionWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling executeTransaction'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel', $e->getResponseHeaders());
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
     * GET Loyalty/MerchantCards
     *
     * @param int $count The number of items to return. 
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \&quot;*\&quot; for any number of characters  *                       - wildcard \&quot;?\&quot; for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by &#x27;AND&#x27;, &#x27;OR&#x27;, &#x27;NOT&#x27; operators and parenthesis &#x27;(&#x27;, &#x27;)&#x27; for grouping.  *                   Property names can be nested like \&quot;prop1.prop2\&quot;.  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * 
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#x27;asc&#x27;, or descending &#x27;dsc&#x27; order. 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Loyalty/MerchantCards
     *
     * @param int $count The number of items to return. 
     * @param int $offset The position within the whole result set to start returning items (First element is at 0). 
     * @param string $fields List of fields to include in the result. Nested properties can be accessed with this notation: prop1.prop2  Example: prop3,prop1.prop2 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form property:condition.  *                   A condition may contain:  *                       - wildcard \&quot;*\&quot; for any number of characters  *                       - wildcard \&quot;?\&quot; for one character  *                       - ranges in the form [value TO value]  *  *                   Single expressions may combined by &#x27;AND&#x27;, &#x27;OR&#x27;, &#x27;NOT&#x27; operators and parenthesis &#x27;(&#x27;, &#x27;)&#x27; for grouping.  *                   Property names can be nested like \&quot;prop1.prop2\&quot;.  *                   Example: (NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])  * 
     * @param string $sort String with comma separated pairs of field:order (e.g. contact.surname:asc,contact.comapnyname:desc). Result set will be sorted by included fields, in ascending &#x27;asc&#x27;, or descending &#x27;dsc&#x27; order. 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards";
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsList',
                    '/Loyalty/MerchantCards'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsList', $e->getResponseHeaders());
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
     * Operation getLock
     *
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock
     */
    public function getLock($loyalty_merchant_card_id)
    {
        list($response) = $this->getLockWithHttpInfo($loyalty_merchant_card_id);
        return $response;
    }

    /**
     * Operation getLockWithHttpInfo
     *
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLockWithHttpInfo($loyalty_merchant_card_id)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling getLock'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock', $e->getResponseHeaders());
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
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}
     *
     * @param string $loyalty_merchant_card_id Search one by provided id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function getOne($loyalty_merchant_card_id)
    {
        list($response) = $this->getOneWithHttpInfo($loyalty_merchant_card_id);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}
     *
     * @param string $loyalty_merchant_card_id Search one by provided id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($loyalty_merchant_card_id)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling getOne'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $e->getResponseHeaders());
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
     * Operation getVirtualTerminalData
     *
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}
     *
     * @param string $loyalty_merchant_card_id Merchant card id (required)
     * @param string $loyalty_merchant_id Merchant id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\VirtualTerminalDataModel
     */
    public function getVirtualTerminalData($loyalty_merchant_card_id, $loyalty_merchant_id)
    {
        list($response) = $this->getVirtualTerminalDataWithHttpInfo($loyalty_merchant_card_id, $loyalty_merchant_id);
        return $response;
    }

    /**
     * Operation getVirtualTerminalDataWithHttpInfo
     *
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}
     *
     * @param string $loyalty_merchant_card_id Merchant card id (required)
     * @param string $loyalty_merchant_id Merchant id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\VirtualTerminalDataModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVirtualTerminalDataWithHttpInfo($loyalty_merchant_card_id, $loyalty_merchant_id)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling getVirtualTerminalData'
            );
        }
        // verify the required parameter 'loyalty_merchant_id' is set
        if ($loyalty_merchant_id === null || (is_array($loyalty_merchant_id) && count($loyalty_merchant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_id when calling getVirtualTerminalData'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
                $resourcePath
            );
        }
        // path params
        if ($loyalty_merchant_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_id),
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
                    '\Secuconnect\Client\Model\VirtualTerminalDataModel',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\VirtualTerminalDataModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\VirtualTerminalDataModel', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                    case 201:
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
     * Operation lock
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body Information about lock 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function lock($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->lockWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation lockWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body Information about lock 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function lockWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling lock'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $e->getResponseHeaders());
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
     * Operation newPassCode
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode $body Information about card 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ResultBoolean
     */
    public function newPassCode($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->newPassCodeWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation newPassCodeWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode $body Information about card 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function newPassCodeWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling newPassCode'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode'
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
     * Operation registerCustomer
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body Loyalty customer properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function registerCustomer($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->registerCustomerWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation registerCustomerWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body Loyalty customer properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function registerCustomerWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling registerCustomer'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $e->getResponseHeaders());
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
     * Operation removeMerchantCard
     *
     * DELETE Loyalty/MerchantCards/{loyaltyMerchantCardId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function removeMerchantCard($loyalty_merchant_card_id)
    {
        list($response) = $this->removeMerchantCardWithHttpInfo($loyalty_merchant_card_id);
        return $response;
    }

    /**
     * Operation removeMerchantCardWithHttpInfo
     *
     * DELETE Loyalty/MerchantCards/{loyaltyMerchantCardId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeMerchantCardWithHttpInfo($loyalty_merchant_card_id)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling removeMerchantCard'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $e->getResponseHeaders());
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
     * Operation resetPassCode
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode $body Information about card 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ResultBoolean
     */
    public function resetPassCode($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->resetPassCodeWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation resetPassCodeWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode $body Information about card 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function resetPassCodeWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling resetPassCode'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode'
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
     * Operation setCustomer
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function setCustomer($loyalty_merchant_card_id, $loyalty_customer_id)
    {
        list($response) = $this->setCustomerWithHttpInfo($loyalty_merchant_card_id, $loyalty_customer_id);
        return $response;
    }

    /**
     * Operation setCustomerWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function setCustomerWithHttpInfo($loyalty_merchant_card_id, $loyalty_customer_id)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling setCustomer'
            );
        }
        // verify the required parameter 'loyalty_customer_id' is set
        if ($loyalty_customer_id === null || (is_array($loyalty_customer_id) && count($loyalty_customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_customer_id when calling setCustomer'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
                $resourcePath
            );
        }
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $e->getResponseHeaders());
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
     * Operation unlock
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body Information about unlock 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function unlock($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->unlockWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation unlockWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body Information about unlock 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function unlockWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling unlock'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $e->getResponseHeaders());
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
     * Operation updateCardGroupOfMerchantCard
     *
     * PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function updateCardGroupOfMerchantCard($loyalty_merchant_card_id, $loyalty_card_group_id)
    {
        list($response) = $this->updateCardGroupOfMerchantCardWithHttpInfo($loyalty_merchant_card_id, $loyalty_card_group_id);
        return $response;
    }

    /**
     * Operation updateCardGroupOfMerchantCardWithHttpInfo
     *
     * PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCardGroupOfMerchantCardWithHttpInfo($loyalty_merchant_card_id, $loyalty_card_group_id)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling updateCardGroupOfMerchantCard'
            );
        }
        // verify the required parameter 'loyalty_card_group_id' is set
        if ($loyalty_card_group_id === null || (is_array($loyalty_card_group_id) && count($loyalty_card_group_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_card_group_id when calling updateCardGroupOfMerchantCard'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
                $resourcePath
            );
        }
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
                    'PUT',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $e->getResponseHeaders());
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
     * Operation updateMerchantCard
     *
     * PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO $body Loyalty merchant card properties 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function updateMerchantCard($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->updateMerchantCardWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation updateMerchantCardWithHttpInfo
     *
     * PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO $body Loyalty merchant card properties 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMerchantCardWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling updateMerchantCard'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel', $e->getResponseHeaders());
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
     * Operation validateMerchantCard
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard $body Information about card 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard
     */
    public function validateMerchantCard($loyalty_merchant_card_id, $body)
    {
        list($response) = $this->validateMerchantCardWithHttpInfo($loyalty_merchant_card_id, $body);
        return $response;
    }

    /**
     * Operation validateMerchantCardWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard $body Information about card 
     * @throws ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard, HTTP status code, HTTP response headers (array of strings)
     */
    public function validateMerchantCardWithHttpInfo($loyalty_merchant_card_id, $body)
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if ($loyalty_merchant_card_id === null || (is_array($loyalty_merchant_card_id) && count($loyalty_merchant_card_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling validateMerchantCard'
            );
        }
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard";
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
        if ($loyalty_merchant_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "loyaltyMerchantCardId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    '\Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard',
                    '/Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard', $e->getResponseHeaders());
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
