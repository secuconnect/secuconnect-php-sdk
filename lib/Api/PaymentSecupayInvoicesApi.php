<?php

namespace Secuconnect\Client\Api;

use \Secuconnect\Client\ApiClient;
use \Secuconnect\Client\ApiException;
use \Secuconnect\Client\Configuration;
use \Secuconnect\Client\ObjectSerializer;

/**
 * PaymentSecupayInvoicesApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentSecupayInvoicesApi
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
     * @return PaymentSecupayInvoicesApi
     */
    public function setApiClient(\Secuconnect\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation assignExternalInvoicePdf
     *
     * POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param string $document_id Document id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionDTOExternalInvoicePdf $body Request body for assigning external invoice pdf (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf
     */
    public function assignExternalInvoicePdf($payment_method, $payment_id, $document_id, $body)
    {
        list($response) = $this->assignExternalInvoicePdfWithHttpInfo($payment_method, $payment_id, $document_id, $body);
        return $response;
    }

    /**
     * Operation assignExternalInvoicePdfWithHttpInfo
     *
     * POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param string $document_id Document id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionDTOExternalInvoicePdf $body Request body for assigning external invoice pdf (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf, HTTP status code, HTTP response headers (array of strings)
     */
    public function assignExternalInvoicePdfWithHttpInfo($payment_method, $payment_id, $document_id, $body)
    {
        // verify the required parameter 'payment_method' is set
        if ($payment_method === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_method when calling assignExternalInvoicePdf');
        }
        // verify the required parameter 'payment_id' is set
        if ($payment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_id when calling assignExternalInvoicePdf');
        }
        // verify the required parameter 'document_id' is set
        if ($document_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $document_id when calling assignExternalInvoicePdf');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling assignExternalInvoicePdf');
        }
        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}";
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
        if ($payment_method !== null) {
            $resourcePath = str_replace(
                "{" . "paymentMethod" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_method),
                $resourcePath
            );
        }
        // path params
        if ($payment_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_id),
                $resourcePath
            );
        }
        // path params
        if ($document_id !== null) {
            $resourcePath = str_replace(
                "{" . "documentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($document_id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf',
                '/Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf', $e->getResponseHeaders());
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
     * Operation cancelPaymentTransactionById
     *
     * POST Payment/{paymentMethod}/{paymentId}/cancel
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionCancelDTO $body Cancel payment transaction input properties (optional)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return object
     */
    public function cancelPaymentTransactionById($payment_method, $payment_id, $body = null)
    {
        list($response) = $this->cancelPaymentTransactionByIdWithHttpInfo($payment_method, $payment_id, $body);
        return $response;
    }

    /**
     * Operation cancelPaymentTransactionByIdWithHttpInfo
     *
     * POST Payment/{paymentMethod}/{paymentId}/cancel
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionCancelDTO $body Cancel payment transaction input properties (optional)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelPaymentTransactionByIdWithHttpInfo($payment_method, $payment_id, $body = null)
    {
        // verify the required parameter 'payment_method' is set
        if ($payment_method === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_method when calling cancelPaymentTransactionById');
        }
        // verify the required parameter 'payment_id' is set
        if ($payment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_id when calling cancelPaymentTransactionById');
        }
        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/cancel";
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
        if ($payment_method !== null) {
            $resourcePath = str_replace(
                "{" . "paymentMethod" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_method),
                $resourcePath
            );
        }
        // path params
        if ($payment_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/Payment/{paymentMethod}/{paymentId}/cancel'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
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
     * Operation capturePaymentTransactionById
     *
     * POST Payment/{paymentMethod}/{paymentId}/capture
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionCaptureDTO $body Capture payment transaction input properties (optional)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function capturePaymentTransactionById($payment_method, $payment_id, $body = null)
    {
        list($response) = $this->capturePaymentTransactionByIdWithHttpInfo($payment_method, $payment_id, $body);
        return $response;
    }

    /**
     * Operation capturePaymentTransactionByIdWithHttpInfo
     *
     * POST Payment/{paymentMethod}/{paymentId}/capture
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionCaptureDTO $body Capture payment transaction input properties (optional)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function capturePaymentTransactionByIdWithHttpInfo($payment_method, $payment_id, $body = null)
    {
        // verify the required parameter 'payment_method' is set
        if ($payment_method === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_method when calling capturePaymentTransactionById');
        }
        // verify the required parameter 'payment_id' is set
        if ($payment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_id when calling capturePaymentTransactionById');
        }
        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/capture";
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
        if ($payment_method !== null) {
            $resourcePath = str_replace(
                "{" . "paymentMethod" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_method),
                $resourcePath
            );
        }
        // path params
        if ($payment_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                '/Payment/{paymentMethod}/{paymentId}/capture'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
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
     * Operation paymentSecupayInvoicesCancelById
     *
     * POST Payment/Secupayinvoices/{paymentInvoiceId}/cancel
     *
     * @param string $payment_invoice_id Payment invoice id (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return object
     */
    public function paymentSecupayInvoicesCancelById($payment_invoice_id)
    {
        list($response) = $this->paymentSecupayInvoicesCancelByIdWithHttpInfo($payment_invoice_id);
        return $response;
    }

    /**
     * Operation paymentSecupayInvoicesCancelByIdWithHttpInfo
     *
     * POST Payment/Secupayinvoices/{paymentInvoiceId}/cancel
     *
     * @param string $payment_invoice_id Payment invoice id (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentSecupayInvoicesCancelByIdWithHttpInfo($payment_invoice_id)
    {
        // verify the required parameter 'payment_invoice_id' is set
        if ($payment_invoice_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_invoice_id when calling paymentSecupayInvoicesCancelById');
        }
        // parse inputs
        $resourcePath = "/Payment/Secupayinvoices/{paymentInvoiceId}/cancel";
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
        if ($payment_invoice_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentInvoiceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_invoice_id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/Payment/Secupayinvoices/{paymentInvoiceId}/cancel'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
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
     * Operation paymentSecupayInvoicesGetById
     *
     * GET Payment/Secupayinvoices/{paymentInvoiceId}
     *
     * @param string $payment_invoice_id Payment transaction ID (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function paymentSecupayInvoicesGetById($payment_invoice_id)
    {
        list($response) = $this->paymentSecupayInvoicesGetByIdWithHttpInfo($payment_invoice_id);
        return $response;
    }

    /**
     * Operation paymentSecupayInvoicesGetByIdWithHttpInfo
     *
     * GET Payment/Secupayinvoices/{paymentInvoiceId}
     *
     * @param string $payment_invoice_id Payment transaction ID (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentSecupayInvoicesGetByIdWithHttpInfo($payment_invoice_id)
    {
        // verify the required parameter 'payment_invoice_id' is set
        if ($payment_invoice_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_invoice_id when calling paymentSecupayInvoicesGetById');
        }
        // parse inputs
        $resourcePath = "/Payment/Secupayinvoices/{paymentInvoiceId}";
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
        if ($payment_invoice_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentInvoiceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_invoice_id),
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
                '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                '/Payment/Secupayinvoices/{paymentInvoiceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
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
     * Operation paymentSecupayinvoicesPost
     *
     * POST Payment/Secupayinvoices
     *
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTO $body Invoice payment transaction input properties (optional)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function paymentSecupayinvoicesPost($body = null)
    {
        list($response) = $this->paymentSecupayinvoicesPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation paymentSecupayinvoicesPostWithHttpInfo
     *
     * POST Payment/Secupayinvoices
     *
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTO $body Invoice payment transaction input properties (optional)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentSecupayinvoicesPostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/Payment/Secupayinvoices";
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
                '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                '/Payment/Secupayinvoices'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
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
     * Operation reverseAccrualByPaymentId
     *
     * PUT Payment/{paymentMethod}/{paymentId}/accrual
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionReverseAccrualDTO $body Reverse accrual input properties (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function reverseAccrualByPaymentId($payment_method, $payment_id, $body)
    {
        list($response) = $this->reverseAccrualByPaymentIdWithHttpInfo($payment_method, $payment_id, $body);
        return $response;
    }

    /**
     * Operation reverseAccrualByPaymentIdWithHttpInfo
     *
     * PUT Payment/{paymentMethod}/{paymentId}/accrual
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionReverseAccrualDTO $body Reverse accrual input properties (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function reverseAccrualByPaymentIdWithHttpInfo($payment_method, $payment_id, $body)
    {
        // verify the required parameter 'payment_method' is set
        if ($payment_method === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_method when calling reverseAccrualByPaymentId');
        }
        // verify the required parameter 'payment_id' is set
        if ($payment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_id when calling reverseAccrualByPaymentId');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling reverseAccrualByPaymentId');
        }
        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/accrual";
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
        if ($payment_method !== null) {
            $resourcePath = str_replace(
                "{" . "paymentMethod" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_method),
                $resourcePath
            );
        }
        // path params
        if ($payment_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_id),
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
                '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                '/Payment/{paymentMethod}/{paymentId}/accrual'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
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
     * Operation setShippingInformationByPaymentId
     *
     * PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO $body Shipping information properties (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function setShippingInformationByPaymentId($payment_method, $payment_id, $body)
    {
        list($response) = $this->setShippingInformationByPaymentIdWithHttpInfo($payment_method, $payment_id, $body);
        return $response;
    }

    /**
     * Operation setShippingInformationByPaymentIdWithHttpInfo
     *
     * PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO $body Shipping information properties (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function setShippingInformationByPaymentIdWithHttpInfo($payment_method, $payment_id, $body)
    {
        // verify the required parameter 'payment_method' is set
        if ($payment_method === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_method when calling setShippingInformationByPaymentId');
        }
        // verify the required parameter 'payment_id' is set
        if ($payment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_id when calling setShippingInformationByPaymentId');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling setShippingInformationByPaymentId');
        }
        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/shippingInformation";
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
        if ($payment_method !== null) {
            $resourcePath = str_replace(
                "{" . "paymentMethod" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_method),
                $resourcePath
            );
        }
        // path params
        if ($payment_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_id),
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
                '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                '/Payment/{paymentMethod}/{paymentId}/shippingInformation'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
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
     * Operation updateBasketByPaymentId
     *
     * PUT Payment/{paymentMethod}/{paymentId}/basket
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionUpdateBasketDTO $body Update basket input properties (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function updateBasketByPaymentId($payment_method, $payment_id, $body)
    {
        list($response) = $this->updateBasketByPaymentIdWithHttpInfo($payment_method, $payment_id, $body);
        return $response;
    }

    /**
     * Operation updateBasketByPaymentIdWithHttpInfo
     *
     * PUT Payment/{paymentMethod}/{paymentId}/basket
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionUpdateBasketDTO $body Update basket input properties (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBasketByPaymentIdWithHttpInfo($payment_method, $payment_id, $body)
    {
        // verify the required parameter 'payment_method' is set
        if ($payment_method === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_method when calling updateBasketByPaymentId');
        }
        // verify the required parameter 'payment_id' is set
        if ($payment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_id when calling updateBasketByPaymentId');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateBasketByPaymentId');
        }
        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/basket";
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
        if ($payment_method !== null) {
            $resourcePath = str_replace(
                "{" . "paymentMethod" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_method),
                $resourcePath
            );
        }
        // path params
        if ($payment_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_id),
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
                '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                '/Payment/{paymentMethod}/{paymentId}/basket'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
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
