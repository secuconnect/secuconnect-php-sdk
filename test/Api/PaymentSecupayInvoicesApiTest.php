<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\PaymentCustomersProductModel;
use Secuconnect\Client\Model\PaymentInformation;
use Secuconnect\Client\Model\SecupayBasketItem;
use Secuconnect\Client\Model\SecupayTransactionProductModel;

/**
 * Class PaymentSecupayInvoicesApiTest
 */
class PaymentSecupayInvoicesApiTest extends TestCase
{
    /**
     * @var PaymentSecupayInvoicesApi
     */
    private $api;

    /**
     * @var SecuconnectObjects
     */
    private static $secuconnectObjects;

    /**
     * @var string
     */
    private static $invoiceTransactionId;

    /**
     * @var string
     */
    private static $customerId;

    /**
     * @var int
     */
    private static $amount;

    /**
     * @var string
     */
    private static $currency;

    /**
     * @var string
     */
    private static $purpose;

    /**
     * @var string
     */
    private static $orderId;

    /**
     * @var bool
     */
    private static $accrual;

    /**
     * @var SecupayBasketItem[]
     */
    private static $basket;

    /**
     * Setup before running any test cases
     *
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        self::$secuconnectObjects = SecuconnectObjects::getInstance();
        self::$customerId = self::$secuconnectObjects->getCustomer()->getId();
        self::$amount = 6324;
        self::$currency = 'EUR';
        self::$purpose = 'for what text';
        self::$orderId = 'ZZZZZZ';
        self::$accrual = true;
        self::$basket = self::$secuconnectObjects->getBasket();
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->api = self::$secuconnectObjects->getApi();
        $this->api = new PaymentSecupayInvoicesApi();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
        $this->api = null;
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
        self::$secuconnectObjects = null;
        self::$customerId = null;
        self::$amount = null;
        self::$currency = null;
        self::$purpose = null;
        self::$orderId = null;
        self::$accrual = null;
        self::$basket = null;
    }

    /**
     * Test case for paymentSecupayinvoicesPost
     *
     * @throws ApiException
     */
    public function testPaymentSecupayinvoicesPost()
    {
        $invoiceData = [
            'customer' => self::$customerId,
            'amount' => self::$amount,
            'currency' => self::$currency,
            'purpose' => self::$purpose,
            'order_id' => self::$orderId,
            'accrual' => self::$accrual,
            'basket' => self::$basket
        ];

        try {
            $response = $this->api->paymentSecupayinvoicesPost($invoiceData);
            self::$invoiceTransactionId = $response->getId();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$invoiceTransactionId);
        $this->assertInstanceOf(SecupayTransactionProductModel::class, $response);
        $this->assertEquals('payment.secupayinvoices', $response->getObject());
        $this->assertEquals(self::$invoiceTransactionId, $response->getId());
        $this->assertNotEmpty($response->getTransId());
        $this->assertNotEmpty($response->getStatus());
        $this->assertEquals(self::$amount, $response->getAmount());
        $this->assertEquals(self::$currency, $response->getCurrency());
        $this->assertEquals(self::$purpose, $response->getPurpose());
        $this->assertEquals(self::$orderId, $response->getOrderId());

        for ($i = 0; $i < 3; ++$i) {
            $this->assertEquals(self::$basket[$i], $response->getBasket()[$i]);
            $this->assertEquals(self::$basket[$i]->getItemType(), $response->getBasket()[$i]->getItemType());
            $this->assertEquals(self::$basket[$i]->getArticleNumber(), $response->getBasket()[$i]->getArticleNumber());
            $this->assertEquals(self::$basket[$i]->getQuantity(), $response->getBasket()[$i]->getQuantity());
            $this->assertEquals(self::$basket[$i]->getName(), $response->getBasket()[$i]->getName());
            $this->assertEquals(self::$basket[$i]->getModel(), $response->getBasket()[$i]->getModel());
            $this->assertEquals(self::$basket[$i]->getEan(), $response->getBasket()[$i]->getEan());
            $this->assertEquals(self::$basket[$i]->getTax(), $response->getBasket()[$i]->getTax());
            $this->assertEquals(self::$basket[$i]->getTotal(), $response->getBasket()[$i]->getTotal());
            $this->assertEquals(self::$basket[$i]->getPrice(), $response->getBasket()[$i]->getPrice());
            $this->assertEquals(self::$basket[$i]->getApikey(), $response->getBasket()[$i]->getApikey());
            $this->assertEquals(self::$basket[$i]->getTransactionHash(), $response->getBasket()[$i]->getTransactionHash());
            $this->assertEquals(self::$basket[$i]->getContractId(), $response->getBasket()[$i]->getContractId());
        }

        $this->assertEquals(self::$accrual, $response->getAccrual());
        $this->assertEquals('sale', $response->getPaymentAction());
        $this->assertNotEmpty($response->getTransferPurpose());
        $this->assertInstanceOf(PaymentInformation::class, $response->getTransferAccount());
        $this->assertNotEmpty($response->getTransferAccount()->getIban());
        $this->assertNotEmpty($response->getTransferAccount()->getBic());
        $this->assertNotEmpty($response->getTransferAccount()->getOwner());
        $this->assertInstanceOf(PaymentCustomersProductModel::class, $response->getCustomer());
        $this->assertNotEmpty($response->getCustomer());
        $this->assertEquals('payment.customers', $response->getCustomer()->getObject());
        $this->assertEquals(self::$customerId, $response->getCustomer()->getId());
        $this->assertNotEmpty($response->getCustomer()->getContract());
        $this->assertEquals('payment.contracts', $response->getCustomer()->getContract()->getObject());
        $this->assertNotEmpty($response->getCustomer()->getContract()->getId());
        $this->assertNotEmpty($response->getCustomer()->getCreated());
        $this->assertNotEmpty($response->getRedirectUrl());
        $this->assertNotEmpty($response->getRedirectUrl()->getIframeUrl());
        $this->assertNotEmpty($response->getRedirectUrl()->getUrlSuccess());
        $this->assertNotEmpty($response->getRedirectUrl()->getUrlFailure());
        $this->assertNotEmpty($response->getIframeUrl());
    }

    /**
     * Test case for paymentSecupayinvoicesHashGet
     *
     * @throws ApiException
     */
    public function testPaymentSecupayInvoicesGetById()
    {
        try {
            $response = $this->api->paymentSecupayInvoicesGetById(self::$invoiceTransactionId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$invoiceTransactionId);
        $this->assertInstanceOf(SecupayTransactionProductModel::class, $response);
        $this->assertEquals('payment.secupayinvoices', $response->getObject());
        $this->assertEquals(self::$invoiceTransactionId, $response->getId());
        $this->assertNotEmpty($response->getTransId());
        $this->assertNotEmpty($response->getStatus());
        $this->assertEquals(self::$amount, $response->getAmount());
        $this->assertEquals(self::$currency, $response->getCurrency());
        $this->assertEquals(self::$purpose, $response->getPurpose());
        $this->assertEquals(self::$orderId, $response->getOrderId());

        for ($i = 0; $i < 3; ++$i) {
            $this->assertEquals(self::$basket[$i], $response->getBasket()[$i]);
            $this->assertEquals(self::$basket[$i]->getItemType(), $response->getBasket()[$i]->getItemType());
            $this->assertEquals(self::$basket[$i]->getArticleNumber(), $response->getBasket()[$i]->getArticleNumber());
            $this->assertEquals(self::$basket[$i]->getQuantity(), $response->getBasket()[$i]->getQuantity());
            $this->assertEquals(self::$basket[$i]->getName(), $response->getBasket()[$i]->getName());
            $this->assertEquals(self::$basket[$i]->getModel(), $response->getBasket()[$i]->getModel());
            $this->assertEquals(self::$basket[$i]->getEan(), $response->getBasket()[$i]->getEan());
            $this->assertEquals(self::$basket[$i]->getTax(), $response->getBasket()[$i]->getTax());
            $this->assertEquals(self::$basket[$i]->getTotal(), $response->getBasket()[$i]->getTotal());
            $this->assertEquals(self::$basket[$i]->getPrice(), $response->getBasket()[$i]->getPrice());
            $this->assertEquals(self::$basket[$i]->getApikey(), $response->getBasket()[$i]->getApikey());
            $this->assertEquals(self::$basket[$i]->getTransactionHash(), $response->getBasket()[$i]->getTransactionHash());
            $this->assertEquals(self::$basket[$i]->getContractId(), $response->getBasket()[$i]->getContractId());
        }

        $this->assertEquals(self::$accrual, $response->getAccrual());
        $this->assertEquals('sale', $response->getPaymentAction());
        $this->assertNotEmpty($response->getTransferPurpose());
        $this->assertInstanceOf(PaymentInformation::class, $response->getTransferAccount());
        $this->assertNotEmpty($response->getTransferAccount()->getIban());
        $this->assertNotEmpty($response->getTransferAccount()->getBic());
        $this->assertNotEmpty($response->getTransferAccount()->getOwner());
        $this->assertInstanceOf(PaymentCustomersProductModel::class, $response->getCustomer());
        $this->assertNotEmpty($response->getCustomer());
        $this->assertEquals('payment.customers', $response->getCustomer()->getObject());
        $this->assertEquals(self::$customerId, $response->getCustomer()->getId());
        $this->assertNotEmpty($response->getCustomer()->getContract());
        $this->assertEquals('payment.contracts', $response->getCustomer()->getContract()->getObject());
        $this->assertNotEmpty($response->getCustomer()->getContract()->getId());
        $this->assertNotEmpty($response->getCustomer()->getCreated());
        $this->assertNotEmpty($response->getRedirectUrl());
        $this->assertNotEmpty($response->getRedirectUrl()->getIframeUrl());
        $this->assertNotEmpty($response->getRedirectUrl()->getUrlSuccess());
        $this->assertNotEmpty($response->getRedirectUrl()->getUrlFailure());
    }

    /**
     * Test case for paymentSecupayinvoicesHashCancelPost
     *
     * @group ignore
     * @throws ApiException
     */
    public function testPaymentSecupayinvoicesCancelById()
    {
        try {
            $response = $this->api->paymentSecupayInvoicesCancelById(self::$invoiceTransactionId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertTrue($response['result']);
        $this->assertTrue($response['demo']);
    }
}
