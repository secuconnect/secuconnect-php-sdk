<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\PaymentCustomersProductModel;
use Secuconnect\Client\Model\SecupayBasketItem;
use Secuconnect\Client\Model\SecupayTransactionProductDTO;
use Secuconnect\Client\Model\SecupayTransactionProductModel;

/**
 * Class PaymentSecupayCreditcardsApiTest
 */
class PaymentSecupayCreditcardsApiTest extends TestCase
{
    /**
     * @var PaymentSecupayCreditcardsApi
     */
    private $api;

    /**
     * @var SecuconnectObjects
     */
    private static $secuconnectObjects;

    /**
     * @var string
     */
    private static $creditCardTransactionId;

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
        parent::setUpBeforeClass();
        self::$secuconnectObjects = SecuconnectObjects::getInstance();
        self::$customerId = self::$secuconnectObjects->getCustomer()->getId();
        self::$amount = 6324;
        self::$currency = 'EUR';
        self::$orderId = 'ZZZZZZ';
        self::$accrual = true;
        self::$basket = self::$secuconnectObjects->getBasket();
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        parent::setUp();
        $this->api = new PaymentSecupayCreditcardsApi();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
        $this->api = null;
        parent::tearDown();
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
        self::$secuconnectObjects = null;
        self::$creditCardTransactionId = null;
        self::$customerId = null;
        self::$amount = null;
        self::$currency = null;
        self::$orderId = null;
        self::$accrual = null;
        self::$basket = null;
        parent::tearDownAfterClass();
    }

    /**
     * Test case for paymentSecupaycreditcardsPost
     *
     * @throws ApiException
     */
    public function testPaymentSecupaycreditcardsPost()
    {
        $creditCardData = [
            'customer' => self::$customerId,
            'amount' => self::$amount,
            'currency' => self::$currency,
            'order_id' => self::$orderId,
            'accrual' => self::$accrual,
            'basket' => self::$basket
        ];

        try {
            $response = $this->api->paymentSecupaycreditcardsPost(new SecupayTransactionProductDTO($creditCardData));
            self::$creditCardTransactionId = $response->getId();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$creditCardTransactionId);
        $this->assertInstanceOf(SecupayTransactionProductModel::class, $response);
        $this->assertEquals('payment.secupaycreditcards', $response->getObject());
        $this->assertEquals(self::$creditCardTransactionId, $response->getId());
        $this->assertNotEmpty($response->getTransId());
        $this->assertNotEmpty($response->getStatus());
        $this->assertEquals(self::$amount, $response->getAmount());
        $this->assertEquals(self::$currency, $response->getCurrency());
        $this->assertEquals('', $response->getPurpose());
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

        $this->assertEquals(1, $response->getTransactionStatus());
        $this->assertEquals(self::$accrual, $response->getAccrual());
        $this->assertEquals('sale', $response->getPaymentAction());
        $this->assertNotEmpty($response->getCustomer());
        $this->assertEquals('payment.customers', $response->getCustomer()->getObject());
        $this->assertEquals(self::$customerId, $response->getCustomer()->getId());
        $this->assertNotEmpty($response->getCustomer()->getCreated());
        $this->assertNotEmpty($response->getRedirectUrl());
        $this->assertNotEmpty($response->getRedirectUrl()->getIframeUrl());
        $this->assertNotEmpty($response->getRedirectUrl()->getUrlSuccess());
        $this->assertNotEmpty($response->getRedirectUrl()->getUrlFailure());
        $this->assertNotEmpty($response->getIframeUrl());
    }

    /**
     * Test case for paymentSecupaycreditcardsHashGet
     *
     * @throws ApiException
     */
    public function testPaymentSecupayCreditcardsGetById()
    {
        if (isset(self::$creditCardTransactionId) && !empty(self::$creditCardTransactionId)) {
            try {
                $response = $this->api->paymentSecupayCreditcardsGetById(self::$creditCardTransactionId);
            } catch (ApiException $e) {
                print_r($e->getResponseBody());
                throw $e;
            }

            $this->assertInstanceOf(SecupayTransactionProductModel::class, $response);
            $this->assertEquals('payment.secupaycreditcards', $response->getObject());
            $this->assertEquals(self::$creditCardTransactionId, $response->getId());
            $this->assertNotEmpty($response->getTransId());
            $this->assertNotEmpty($response->getStatus());
            $this->assertEquals(self::$amount, $response->getAmount());
            $this->assertEquals(self::$currency, $response->getCurrency());
            $this->assertEmpty($response->getPurpose());
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

            $this->assertEquals(1, $response->getTransactionStatus());
            $this->assertEquals(self::$accrual, $response->getAccrual());
            $this->assertEquals('sale', $response->getPaymentAction());
            $this->assertNotEmpty($response->getCustomer());
            $this->assertInstanceOf(PaymentCustomersProductModel::class, $response->getCustomer());
            $this->assertEquals('payment.customers', $response->getCustomer()->getObject());
            $this->assertEquals(self::$customerId, $response->getCustomer()->getId());
            $this->assertNotEmpty($response->getCustomer()->getCreated());
            $this->assertNotEmpty($response->getRedirectUrl());
            $this->assertNotEmpty($response->getRedirectUrl()->getIframeUrl());
            $this->assertNotEmpty($response->getRedirectUrl()->getUrlSuccess());
            $this->assertNotEmpty($response->getRedirectUrl()->getUrlFailure());
        }
    }

    /**
     * Test case for paymentSecupaycreditcardsHashCancelPost
     *
     * @throws ApiException
     *
     * @group ignore
     */
    public function testPaymentSecupayCreditcardsCancelById()
    {
        try {
            $response = $this->api->cancelPaymentTransactionById('secupaycreditcards', self::$creditCardTransactionId, null);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertTrue($response['result']);
        $this->assertTrue($response['demo']);
    }
}
