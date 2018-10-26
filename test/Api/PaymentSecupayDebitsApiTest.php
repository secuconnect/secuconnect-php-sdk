<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\BankAccountDescriptor;
use Secuconnect\Client\Model\PaymentContainersProductModel;
use Secuconnect\Client\Model\PaymentCustomersProductModel;
use Secuconnect\Client\Model\SecupayBasketItem;
use Secuconnect\Client\Model\SecupayTransactionProductModel;
use Secuconnect\Client\Model\SecupayTransactionProductModelUsedPaymentInstrument;

/**
 * Class PaymentSecupayDebitsApiTest
 */
class PaymentSecupayDebitsApiTest extends TestCase
{
    /**
     * @var PaymentSecupayDebitsApi
     */
    private $api;

    /**
     * @var SecuconnectObjects
     */
    private static $secuconnectObjects;

    /**
     * @var string
     */
    private static $containerId;

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
     * @var array
     */
    private static $optData;

    /**
     * @var SecupayBasketItem[]
     */
    private static $basket;

    /**
     * @var string
     */
    private static $debitTransactionId;

    /**
     * Setup before running any test cases
     *
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        self::$secuconnectObjects = SecuconnectObjects::getInstance();
        self::$containerId = self::$secuconnectObjects->getContainer()->getId();
        self::$customerId = self::$secuconnectObjects->getCustomer()->getId();
        self::$amount = 100;
        self::$currency = 'EUR';
        self::$purpose = 'for what text';
        self::$orderId = 'ZZZZZZ';
        self::$optData = ['has_accepted_disclaimer' => true];
        self::$basket = self::$secuconnectObjects->getBasket();
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->api = self::$secuconnectObjects->getApi();
        $this->api = new PaymentSecupayDebitsApi();
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
        self::$containerId = null;
        self::$customerId = null;
        self::$amount = null;
        self::$currency = null;
        self::$purpose = null;
        self::$orderId = null;
        self::$optData = null;
        self::$basket = null;
    }

    /**
     * Test case for paymentSecupaydebitsPost
     *
     * @throws ApiException
     */
    public function testPaymentSecupaydebitsPost()
    {
        $debitData = [
            'container' => self::$containerId,
            'customer' => self::$customerId,
            'amount' => self::$amount,
            'currency' => self::$currency,
            'purpose' => self::$purpose,
            'order_id' => self::$orderId,
            'opt_data' => self::$optData,
            'basket' => self::$basket
        ];

        try {
            $response = $this->api->paymentSecupaydebitsPost($debitData);
            self::$debitTransactionId = $response->getId();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$debitTransactionId);
        $this->assertInstanceOf(SecupayTransactionProductModel::class, $response);
        $this->assertEquals('payment.secupaydebits', $response->getObject());
        $this->assertEquals(self::$debitTransactionId, $response->getId());
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

        $this->assertNotEmpty($response->getTransactionStatus());
        $this->assertEquals('sale', $response->getPaymentAction());
        $this->assertInstanceOf(PaymentCustomersProductModel::class, $response->getCustomer());
        $this->assertNotEmpty($response->getCustomer());
        $this->assertEquals('payment.customers', $response->getCustomer()->getObject());
        $this->assertEquals(self::$customerId, $response->getCustomer()->getId());
        $this->assertNotEmpty($response->getCustomer()->getContract());
        $this->assertEquals('payment.contracts', $response->getCustomer()->getContract()->getObject());
        $this->assertNotEmpty($response->getCustomer()->getContract()->getId());
        $this->assertNotEmpty($response->getCustomer()->getCreated());
        $this->assertInstanceOf(SecupayTransactionProductModelUsedPaymentInstrument::class, $response->getUsedPaymentInstrument());
        $this->assertEquals('bank_account', $response->getUsedPaymentInstrument()['type']);
        $this->assertEmpty($response->getUsedPaymentInstrument()->getData()->getOwner());
        $this->assertNotEmpty($response->getUsedPaymentInstrument()->getData()->getIban());
        $this->assertNotEmpty($response->getUsedPaymentInstrument()->getData()->getBic());
        $this->assertNotEmpty($response->getUsedPaymentInstrument()->getData()->getBankname());
        $this->assertInstanceOf(PaymentContainersProductModel::class, $response->getContainer());
        $this->assertNotEmpty($response->getContainer());
        $this->assertEquals('payment.containers', $response->getContainer()->getObject());
        $this->assertEquals(self::$containerId, $response->getContainer()->getId());
        $this->assertNotEmpty($response->getContainer()->getContract());
        $this->assertEquals('payment.contracts', $response->getContainer()->getContract()->getObject());
        $this->assertNotEmpty($response->getContainer()->getContract()->getId());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getContainer()->getPrivate());
        $this->assertNotEmpty($response->getContainer()->getPrivate());
        $this->assertNotEmpty($response->getContainer()->getPrivate()->getOwner());
        $this->assertNotEmpty($response->getContainer()->getPrivate()->getIban());
        $this->assertNotEmpty($response->getContainer()->getPrivate()->getBic());
        $this->assertNotEmpty($response->getContainer()->getPrivate()->getBankname());
        $this->assertNotEmpty($response->getContainer()->getPublic());
        $this->assertNotEmpty($response->getContainer()->getPublic()->getOwner());
        $this->assertNotEmpty($response->getContainer()->getPublic()->getIban());
        $this->assertNotEmpty($response->getContainer()->getPublic()->getBic());
        $this->assertNotEmpty($response->getContainer()->getPublic()->getBankname());
        $this->assertEquals('bank_account', $response->getContainer()->getType());
        $this->assertNotEmpty($response->getContainer()->getCreated());
        $this->assertNotEmpty($response->getContainer()->getCustomer());
        $this->assertEquals('payment.customers', $response->getContainer()->getCustomer()->getObject());
        $this->assertEquals(self::$customerId, $response->getContainer()->getCustomer()->getId());
    }

    /**
     * Test case for paymentSecupaydebitsHashGet
     *
     * @throws ApiException
     */
    public function testPaymentSecupayDebitsGetById()
    {
        try {
            $response = $this->api->paymentSecupayDebitsGetById(self::$debitTransactionId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$debitTransactionId);
        $this->assertInstanceOf(SecupayTransactionProductModel::class, $response);
        $this->assertEquals('payment.secupaydebits', $response->getObject());
        $this->assertEquals(self::$debitTransactionId, $response->getId());
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

        $this->assertEquals('sale', $response->getPaymentAction());
        $this->assertInstanceOf(PaymentCustomersProductModel::class, $response->getCustomer());
        $this->assertNotEmpty($response->getCustomer());
        $this->assertEquals('payment.customers', $response->getCustomer()->getObject());
        $this->assertEquals(self::$customerId, $response->getCustomer()->getId());
        $this->assertNotEmpty($response->getCustomer()->getContract());
        $this->assertEquals('payment.contracts', $response->getCustomer()->getContract()->getObject());
        $this->assertNotEmpty($response->getCustomer()->getContract()->getId());
        $this->assertNotEmpty($response->getCustomer()->getCreated());
        $this->assertInstanceOf(SecupayTransactionProductModelUsedPaymentInstrument::class, $response->getUsedPaymentInstrument());
        $this->assertEquals('bank_account', $response->getUsedPaymentInstrument()->getType());
        $this->assertEmpty($response->getUsedPaymentInstrument()->getData()->getOwner());
        $this->assertNotEmpty($response->getUsedPaymentInstrument()->getData()->getIban());
        $this->assertNotEmpty($response->getUsedPaymentInstrument()->getData()->getBic());
        $this->assertNotEmpty($response->getUsedPaymentInstrument()->getData()->getBankname());
        $this->assertInstanceOf(PaymentContainersProductModel::class, $response->getContainer());
        $this->assertNotEmpty($response->getContainer());
        $this->assertEquals('payment.containers', $response->getContainer()->getObject());
        $this->assertEquals(self::$containerId, $response->getContainer()->getId());
        $this->assertNotEmpty($response->getContainer()->getContract());
        $this->assertEquals('payment.contracts', $response->getContainer()->getContract()->getObject());
        $this->assertNotEmpty($response->getContainer()->getContract()->getId());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getContainer()->getPrivate());
        $this->assertNotEmpty($response->getContainer()->getPrivate());
        $this->assertNotEmpty($response->getContainer()->getPrivate()->getOwner());
        $this->assertNotEmpty($response->getContainer()->getPrivate()->getIban());
        $this->assertNotEmpty($response->getContainer()->getPrivate()->getBic());
        $this->assertNotEmpty($response->getContainer()->getPrivate()->getBankname());
        $this->assertNotEmpty($response->getContainer()->getPublic());
        $this->assertNotEmpty($response->getContainer()->getPublic()->getOwner());
        $this->assertNotEmpty($response->getContainer()->getPublic()->getIban());
        $this->assertNotEmpty($response->getContainer()->getPublic()->getBic());
        $this->assertNotEmpty($response->getContainer()->getPublic()->getBankname());
        $this->assertEquals('bank_account', $response->getContainer()->getType());
        $this->assertNotEmpty($response->getContainer()->getCreated());
        $this->assertNotEmpty($response->getContainer()->getCustomer());
        $this->assertEquals('payment.customers', $response->getContainer()->getCustomer()->getObject());
        $this->assertEquals(self::$customerId, $response->getContainer()->getCustomer()->getId());
    }

    /**
     * Test case for paymentSecupaydebitsHashCancelPost
     *
     * @throws ApiException
     */
    public function testPaymentSecupayDebitsCancelById()
    {
        try {
            $response = $this->api->paymentSecupayDebitsCancelById(self::$debitTransactionId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertTrue($response['result']);
        $this->assertTrue($response['demo']);
    }
}
