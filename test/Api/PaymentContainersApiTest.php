<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\BankAccountDescriptor;
use Secuconnect\Client\Model\PaymentContainerMandate;
use Secuconnect\Client\Model\PaymentContainersDTO;
use Secuconnect\Client\Model\PaymentContainersList;
use Secuconnect\Client\Model\PaymentContainersProductModel;
use Secuconnect\Client\Model\PaymentCustomersProductModel;

/**
 * Class PaymentContainersApiTest
 */
class PaymentContainersApiTest extends TestCase
{
    const BANK_ACCOUNT_OWNER_RENAMED = 'John Doe';

    /**
     * @var PaymentContainersApi
     */
    private $api;

    /**
     * @var string
     */
    private static $containerId;

    /**
     * @var PaymentContainersDTO
     */
    private static $container;

    /**
     * @var BankAccountDescriptor
     */
    private static $privateData;

    /**
     * @var PaymentCustomersProductModel
     */
    private static $customer;

    /**
     * @var BankAccountDescriptor
     */
    private static $bankAccount;

    /**
     * @var string
     */
    private static $created;

    /**
     * @var string
     */
    private static $updated;

    /**
     * @var PaymentContainersProductModel
     */
    private static $testContainer1;

    /**
     * @var PaymentContainersProductModel
     */
    private static $testContainer2;

    /**
     * @var PaymentContainersProductModel
     */
    private static $testContainer3;

    /**
     * Setup before running any test cases
     *
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        self::$containerId = '';

        self::$privateData = new BankAccountDescriptor();
        self::$privateData
            ->setOwner(SecuconnectObjects::BANK_ACCOUNT_OWNER)
            ->setIban(SecuconnectObjects::BANK_ACCOUNT_IBAN)
            ->setBic(SecuconnectObjects::BANK_ACCOUNT_BIC);

        self::$container = new PaymentContainersDTO();
        self::$container
            ->setType('bank_account')
            ->setPrivate(self::$privateData);

        self::$customer = SecuconnectObjects::getInstance()->getCustomer();

        self::$bankAccount = new BankAccountDescriptor();

        self::$created = '';
        self::$updated = '';
    }

    /**
     * Setup before running each test case
     * @throws ApiException
     */
    public function setUp()
    {
        $instance = SecuconnectObjects::getInstance();
        $instance->authenticateByClientCredentials();
        $this->api = $instance->getApi();
        $this->api = new PaymentContainersApi();
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
        self::$containerId = null;
        self::$container = null;
        self::$privateData = null;
        self::$customer = null;
        self::$bankAccount = null;
        self::$created = null;
        self::$updated = null;
    }

    /**
     * Test case for paymentContainersPost
     *
     * @throws ApiException
     */
    public function testPaymentContainersPost()
    {
        try {
            $response = $this->api->paymentContainersPost(self::$container);
            self::$containerId = $response->getId();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$containerId);
        $this->assertInstanceOf(PaymentContainersProductModel::class, $response);
        $this->assertEquals('payment.containers', $response->getObject());
        $this->assertNotNull($response->getId());
        $this->assertNotEmpty($response->getId());
        $this->assertEquals('payment.contracts', $response->getContract()->getObject());
        $this->assertNotNull($response->getContract()->getId());
        $this->assertNotEmpty($response->getContract()->getId());
        $this->assertNull($response->getCustomer());
        $this->assertNull($response->getAssign());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPrivate());
        $this->assertNotNull($response->getPrivate()->getOwner());
        $this->assertNotEmpty($response->getPrivate()->getOwner());
        $this->assertNotNull($response->getPrivate()->getIban());
        $this->assertNotEmpty($response->getPrivate()->getIban());
        $this->assertNotNull($response->getPrivate()->getBic());
        $this->assertNotEmpty($response->getPrivate()->getBic());
        $this->assertNotNull($response->getPrivate()->getBankname());
        $this->assertNotEmpty($response->getPrivate()->getBankname());

        self::$bankAccount = $response->getPrivate();

        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPublic());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_OWNER, $response->getPublic()->getOwner());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_IBAN, $response->getPublic()->getIban());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_BIC, $response->getPublic()->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $response->getPublic()->getBankname());
        $this->assertEquals('bank_account', $response->getType());
        $this->assertNotNull($response->getCreated());
        $this->assertNotEmpty($response->getCreated());

        self::$created = $response->getCreated();

        $this->assertInstanceOf(PaymentContainerMandate::class, $response->getMandate());
        $this->assertNotNull($response->getMandate()->getSepaMandateId());
        $this->assertNotEmpty($response->getMandate()->getSepaMandateId());
        $this->assertNotNull($response->getMandate()->getType());
        $this->assertNotEmpty($response->getMandate()->getType());
        $this->assertNotNull($response->getMandate()->getIdentification());
        $this->assertNotEmpty($response->getMandate()->getIdentification());
    }

    /**
     * Test case for paymentContainersIdPut
     *
     * @depends testPaymentContainersPost
     *
     * @throws ApiException
     */
    public function testPaymentContainersIdPut()
    {
        self::$privateData
            ->setOwner(self::BANK_ACCOUNT_OWNER_RENAMED);
        self::$container
            ->setPrivate(self::$privateData);
        self::$bankAccount->setOwner(self::BANK_ACCOUNT_OWNER_RENAMED);

        try {
            $response = $this->api->paymentContainersIdPut(
                self::$containerId,
                self::$container
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$containerId);
        $this->assertInstanceOf(PaymentContainersProductModel::class, $response);
        $this->assertEquals('payment.containers', $response->getObject());
        $this->assertNotNull($response->getId());
        $this->assertNotEmpty($response->getId());
        $this->assertEquals('payment.contracts', $response->getContract()->getObject());
        $this->assertNotNull($response->getContract()->getId());
        $this->assertNotEmpty($response->getContract()->getId());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPrivate());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPublic());
        $this->assertEquals(self::BANK_ACCOUNT_OWNER_RENAMED, $response->getPrivate()->getOwner());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_IBAN, $response->getPrivate()->getIban());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_BIC, $response->getPrivate()->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $response->getPrivate()->getBankname());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPublic());
        $this->assertEquals(self::BANK_ACCOUNT_OWNER_RENAMED, $response->getPublic()->getOwner());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_IBAN, $response->getPublic()->getIban());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_BIC, $response->getPublic()->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $response->getPublic()->getBankname());
        $this->assertEquals('bank_account', $response->getType());
        $this->assertEquals(self::$created, $response->getCreated());
        $this->assertNotNull($response->getUpdated());
        $this->assertNotEmpty($response->getUpdated());
        $this->assertInstanceOf(PaymentContainerMandate::class, $response->getMandate());
        $this->assertNotNull($response->getMandate()->getSepaMandateId());
        $this->assertNotEmpty($response->getMandate()->getSepaMandateId());
        $this->assertNotNull($response->getMandate()->getIban());
        $this->assertNotEmpty($response->getMandate()->getIban());
        $this->assertNotNull($response->getMandate()->getBic());
        $this->assertNotEmpty($response->getMandate()->getBic());
        $this->assertNotNull($response->getMandate()->getType());
        $this->assertNotEmpty($response->getMandate()->getType());
        $this->assertNotNull($response->getMandate()->getStatus());
        $this->assertNotEmpty($response->getMandate()->getStatus());
        $this->assertNotNull($response->getMandate()->getIdentification());
        $this->assertNotEmpty($response->getMandate()->getIdentification());

        self::$updated = $response->getUpdated();
    }

    /**
     * Test case for paymentContainersGetById
     *
     * @throws ApiException
     */
    public function testPaymentContainersGetById()
    {
        try {
            $response = $this->api->paymentContainersGetById(self::$containerId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertInstanceOf(PaymentContainersProductModel::class, $response);
        $this->assertEquals('payment.containers', $response->getObject());
        $this->assertEquals(self::$containerId, $response->getId());
        $this->assertEquals('payment.contracts', $response->getContract()->getObject());
        $this->assertNotNull($response->getContract()->getId());
        $this->assertNotEmpty($response->getContract()->getId());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPrivate());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPublic());
        $this->assertEquals(self::$bankAccount->getOwner(), $response->getPrivate()->getOwner());
        $this->assertEquals(self::$bankAccount->getIban(), $response->getPrivate()->getIban());
        $this->assertEquals(self::$bankAccount->getBic(), $response->getPrivate()->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $response->getPrivate()->getBankname());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPublic());
        $this->assertEquals(self::$bankAccount->getOwner(), $response->getPublic()->getOwner());
        $this->assertEquals(self::$bankAccount->getIban(), $response->getPublic()->getIban());
        $this->assertEquals(self::$bankAccount->getBic(), $response->getPublic()->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $response->getPublic()->getBankname());
        $this->assertEquals('bank_account', $response->getType());
        $this->assertEquals(self::$created, $response->getCreated());
        $this->assertEquals(self::$updated, $response->getUpdated());
    }

    /**
     * Test case for paymentContainersGet
     *
     * @throws ApiException
     */
    public function testPaymentContainersGet()
    {
        try {
            $response = $this->api->paymentContainersGet();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(PaymentContainersList::class, $response);
        $this->assertInternalType('int', $response->getCount());

        foreach ($response->getData() as $container) {
            $this->assertInstanceOf(PaymentContainersProductModel::class, $container);
            $this->assertEquals('payment.containers', $container->getObject());
            $this->assertNotNull($container->getId());
            $this->assertNotEmpty($container->getId());
            $this->assertEquals('payment.contracts', $container->getContract()->getObject());
            $this->assertNotNull($container->getContract()->getId());
            $this->assertNotEmpty($container->getContract()->getId());
            $this->assertNotNull($container->getPrivate()->getIban());
            $this->assertNotEmpty($container->getPrivate()->getIban());
            $this->assertNotNull($container->getPrivate()->getBic());
            $this->assertNotEmpty($container->getPrivate()->getBic());
            $this->assertNotNull($container->getPrivate()->getBankname());
            $this->assertNotEmpty($container->getPrivate()->getBankname());
            $this->assertNotNull($container->getCreated());
            $this->assertNotEmpty($container->getCreated());
        }
    }

    /**
     * Test case for checking count param
     *
     * @throws ApiException
     */
    public function testPaymentContainersGetCountQueryParam()
    {
        try {
            self::$privateData->setIban('DK5750510001322617');
            self::$container->setPrivate(self::$privateData);
            self::$testContainer1 = $this->api->paymentContainersPost(self::$container);
            $this->assertNotEmpty(self::$testContainer1->getId());

            self::$privateData->setIban('EE342200221034126658');
            self::$container->setPrivate(self::$privateData);
            self::$testContainer2 = $this->api->paymentContainersPost(self::$container);
            $this->assertNotEmpty(self::$testContainer2->getId());

            self::$privateData->setIban('FI9814283500171141');
            self::$container->setPrivate(self::$privateData);
            self::$testContainer3 = $this->api->paymentContainersPost(self::$container);
            $this->assertNotEmpty(self::$testContainer3->getId());

            $response = $this->api->paymentContainersGet(2);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertEquals(2, count($response->getData()));
    }

    /**
     * Test case for checking offset param
     *
     * @depends testPaymentContainersGetCountQueryParam
     *
     * @throws ApiException
     */
    public function testPaymentContainersGetOffsetQueryParam()
    {
        try {
            $response1 = $this->api->paymentContainersGet();
            $response2 = $this->api->paymentContainersGet(null, 1);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response1);
        $this->assertNotEmpty($response2);
        $this->assertEquals($response1->getData()[1], $response2->getData()[0]);

        try {
            $this->api->paymentContainersIdDelete(self::$testContainer1->getId());
            $this->api->paymentContainersIdDelete(self::$testContainer2->getId());
            $this->api->paymentContainersIdDelete(self::$testContainer3->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
    }

    /**
     * Test case for paymentContainersIdDelete
     *
     * @throws ApiException
     */
    public function testPaymentContainersIdDelete()
    {
        try {
            /**
             * @var array
             */
            $response = $this->api->paymentContainersIdDelete(self::$containerId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInternalType('array', $response);
        $this->assertContainsOnlyInstancesOf(PaymentContainersProductModel::class, $response);
        $this->assertEquals('payment.containers', $response[0]->getObject());
        $this->assertEquals(self::$containerId, $response[0]->getId());
        $this->assertEquals('payment.contracts', $response[0]->getContract()->getObject());
        $this->assertNotEmpty($response[0]->getContract()->getId());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response[0]->getPrivate());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response[0]->getPublic());
        $this->assertEquals(self::$bankAccount->getOwner(), $response[0]->getPrivate()->getOwner());
        $this->assertEquals(self::$bankAccount->getIban(), $response[0]->getPrivate()->getIban());
        $this->assertEquals(self::$bankAccount->getBic(), $response[0]->getPrivate()->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $response[0]->getPrivate()->getBankname());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response[0]->getPublic());
        $this->assertEquals(self::$bankAccount->getOwner(), $response[0]->getPublic()->getOwner());
        $this->assertEquals(self::$bankAccount->getIban(), $response[0]->getPublic()->getIban());
        $this->assertEquals(self::$bankAccount->getBic(), $response[0]->getPublic()->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $response[0]->getPublic()->getBankname());
        $this->assertEquals('bank_account', $response[0]->getType());
        $this->assertEquals(self::$created, $response[0]->getCreated());
        $this->assertEquals(self::$updated, $response[0]->getUpdated());
    }
}
