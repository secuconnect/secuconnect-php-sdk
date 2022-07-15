<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\BankAccountDescriptor;
use Secuconnect\Client\Model\PaymentContainersProductModel;
use Secuconnect\Client\Model\PaymentCustomersProductModel;
use Secuconnect\Client\Model\SecupayBasketItem;
use Secuconnect\Client\Model\SecupayTransactionProductDTO;
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
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$secuconnectObjects = SecuconnectObjects::getInstance();
        self::$containerId = self::$secuconnectObjects->getContainer()->getId();
        self::$customerId = self::$secuconnectObjects->getCustomer()->getId();
        self::$amount = 6324;
        self::$currency = 'EUR';
        self::$purpose = 'for what text';
        self::$orderId = 'ZZZZZZ';
        self::$optData = ['has_accepted_disclaimer' => true];
        self::$basket = self::$secuconnectObjects->getBasket();
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->api = new PaymentSecupayDebitsApi();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        $this->api = null;
        parent::tearDown();
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
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
        parent::tearDownAfterClass();
    }

    /**
     * Test case for paymentSecupaydebitsPost
     *
     * @throws ApiException
     */
    public function testPaymentSecupaydebitsPost()
    {
        $debitData = [
            'customer' => self::$customerId,
            'container' => self::$containerId,
            'amount' => self::$amount,
            'currency' => self::$currency,
            'purpose' => self::$purpose,
            'order_id' => self::$orderId,
            'opt_data' => self::$optData,
            'basket' => self::$basket,
            'demo' => true
        ];
        try {
            $response = $this->api->paymentSecupaydebitsPost(new SecupayTransactionProductDTO($debitData));
            self::$debitTransactionId = $response->getId();
        } catch (ApiException $e) {
            if ($e->getResponseObject()->getErrorDetails() == 'Payment method not available (for this customer)') {
                echo $e->getResponseObject()->getErrorDetails() . ' PaymentSecupaydebitsPost';
            } else {
                print_r($e->getResponseObject()->getErrorDetails());
            }
            throw $e;
        }

        if (isset(self::$debitTransactionId)) {
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
            $this->assertNotEmpty($response->getCustomer()->getCreated());
            $this->assertInstanceOf(SecupayTransactionProductModelUsedPaymentInstrument::class, $response->getUsedPaymentInstrument());
            $this->assertEquals('bank_account', $response->getUsedPaymentInstrument()->getType());
            $this->assertInstanceOf(BankAccountDescriptor::class, $response->getUsedPaymentInstrument()->getData());
            /**
             * @var BankAccountDescriptor $used_payment_instrument
             */
            $used_payment_instrument = $response->getUsedPaymentInstrument()->getData();
            $this->assertEmpty($used_payment_instrument->getOwner());
            $this->assertNotEmpty($used_payment_instrument->getIban());
            $this->assertNotEmpty($used_payment_instrument->getBic());
            $this->assertNotEmpty($used_payment_instrument->getBankname());
            $this->assertInstanceOf(PaymentContainersProductModel::class, $response->getContainer());
            $this->assertNotEmpty($response->getContainer());
            $this->assertEquals('payment.containers', $response->getContainer()->getObject());
            $this->assertEquals(self::$containerId, $response->getContainer()->getId());
            $this->assertInstanceOf(BankAccountDescriptor::class, $response->getContainer()->getPrivate());
            /**
             * @var BankAccountDescriptor $private_data
             */
            $private_data = $response->getContainer()->getPrivate();
            $this->assertNotEmpty($private_data->getOwner());
            $this->assertNotEmpty($private_data->getIban());
            $this->assertNotEmpty($private_data->getBic());
            $this->assertNotEmpty($private_data->getBankname());
            $this->assertInstanceOf(BankAccountDescriptor::class, $response->getContainer()->getPublic());
            /**
             * @var BankAccountDescriptor $public_data
             */
            $public_data = $response->getContainer()->getPublic();
            $this->assertNotEmpty($public_data->getOwner());
            $this->assertNotEmpty($public_data->getIban());
            $this->assertNotEmpty($public_data->getBic());
            $this->assertNotEmpty($public_data->getBankname());
            $this->assertEquals('bank_account', $response->getContainer()->getType());
            $this->assertNotEmpty($response->getContainer()->getCreated());
            $this->assertNotEmpty($response->getContainer()->getCustomer());
            $this->assertEquals('payment.customers', $response->getContainer()->getCustomer()->getObject());
            $this->assertEquals(self::$customerId, $response->getContainer()->getCustomer()->getId());
        }
    }

    /**
     * Test case for paymentSecupaydebitsHashGet
     *
     * @depends testPaymentSecupaydebitsPost
     *
     * @throws ApiException
     */
    public function testPaymentSecupayDebitsGetById()
    {
        if (isset(self::$debitTransactionId) && !empty(self::$debitTransactionId)) {
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
            $this->assertNotEmpty($response->getCustomer()->getCreated());
            $this->assertInstanceOf(SecupayTransactionProductModelUsedPaymentInstrument::class, $response->getUsedPaymentInstrument());
            $this->assertEquals('bank_account', $response->getUsedPaymentInstrument()->getType());
            $this->assertInstanceOf(BankAccountDescriptor::class, $response->getUsedPaymentInstrument()->getData());
            /**
             * @var BankAccountDescriptor $used_payment_instrument
             */
            $used_payment_instrument = $response->getUsedPaymentInstrument()->getData();
            $this->assertEmpty($used_payment_instrument->getOwner());
            $this->assertNotEmpty($used_payment_instrument->getIban());
            $this->assertNotEmpty($used_payment_instrument->getBic());
            $this->assertNotEmpty($used_payment_instrument->getBankname());
            $this->assertInstanceOf(PaymentContainersProductModel::class, $response->getContainer());
            $this->assertNotEmpty($response->getContainer());
            $this->assertEquals('payment.containers', $response->getContainer()->getObject());
            $this->assertEquals(self::$containerId, $response->getContainer()->getId());
            $this->assertInstanceOf(BankAccountDescriptor::class, $response->getContainer()->getPrivate());
            /**
             * @var BankAccountDescriptor $private_data
             */
            $private_data = $response->getContainer()->getPrivate();
            $this->assertNotEmpty($private_data->getOwner());
            $this->assertNotEmpty($private_data->getIban());
            $this->assertNotEmpty($private_data->getBic());
            $this->assertNotEmpty($private_data->getBankname());
            $this->assertInstanceOf(BankAccountDescriptor::class, $response->getContainer()->getPublic());
            /**
             * @var BankAccountDescriptor $public_data
             */
            $public_data = $response->getContainer()->getPublic();
            $this->assertNotEmpty($public_data->getOwner());
            $this->assertNotEmpty($public_data->getIban());
            $this->assertNotEmpty($public_data->getBic());
            $this->assertNotEmpty($public_data->getBankname());
            $this->assertEquals('bank_account', $response->getContainer()->getType());
            $this->assertNotEmpty($response->getContainer()->getCreated());
            $this->assertNotEmpty($response->getContainer()->getCustomer());
            $this->assertEquals('payment.customers', $response->getContainer()->getCustomer()->getObject());
            $this->assertEquals(self::$customerId, $response->getContainer()->getCustomer()->getId());
        }
    }

    /**
     * Test case for paymentSecupaydebitsHashCancelPost
     *
     * @depends testPaymentSecupaydebitsPost
     *
     * @throws ApiException
     */
    public function testPaymentSecupayDebitsCancelById()
    {
        if (isset(self::$debitTransactionId) && !empty(self::$debitTransactionId)) {
            try {
                $response = $this->api->cancelPaymentTransactionById('secupaydebits', self::$debitTransactionId, null);
            } catch (ApiException $e) {
                print_r($e->getResponseBody());
                throw $e;
            }

            $this->assertNotEmpty($response);
            $this->assertTrue($response['demo']);
        }
    }
}
