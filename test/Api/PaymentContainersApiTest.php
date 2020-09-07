<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\BankAccountDescriptor;
use Secuconnect\Client\Model\CreditCardDescriptor;
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
        parent::setUpBeforeClass();
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
        parent::setUp();
        $instance = SecuconnectObjects::getInstance();
        $instance->authenticateByClientCredentials();
        $this->api = new PaymentContainersApi();
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
        self::$containerId = null;
        self::$container = null;
        self::$privateData = null;
        self::$customer = null;
        self::$bankAccount = null;
        self::$created = null;
        self::$updated = null;
        parent::tearDownAfterClass();
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
        $this->assertNull($response->getCustomer());
        $this->assertNull($response->getAssign());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPrivate());
        self::$bankAccount = $response->getPrivate();
        $this->assertNotEmpty(self::$bankAccount->getOwner());
        $this->assertNotEmpty(self::$bankAccount->getIban());
        $this->assertNotEmpty(self::$bankAccount->getBic());
        $this->assertNotEmpty(self::$bankAccount->getBankname());

        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPublic());
        /**
         * @var BankAccountDescriptor $public_data
         */
        $public_data = $response->getPublic();
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_OWNER, $public_data->getOwner());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_IBAN, $public_data->getIban());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_BIC, $public_data->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $public_data->getBankname());
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
        $this->assertNotEmpty($response->getId());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPrivate());
        /**
         * @var BankAccountDescriptor $private_data
         */
        $private_data = $response->getPrivate();
        $this->assertEquals(self::BANK_ACCOUNT_OWNER_RENAMED, $private_data->getOwner());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_IBAN, $private_data->getIban());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_BIC, $private_data->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $private_data->getBankname());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPublic());
        /**
         * @var BankAccountDescriptor $public_data
         */
        $public_data = $response->getPublic();
        $this->assertEquals(self::BANK_ACCOUNT_OWNER_RENAMED, $public_data->getOwner());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_IBAN, $public_data->getIban());
        $this->assertEquals(SecuconnectObjects::BANK_ACCOUNT_BIC, $public_data->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $public_data->getBankname());
        $this->assertEquals('bank_account', $response->getType());
        $this->assertEquals(self::$created, $response->getCreated());
        $this->assertNotEmpty($response->getUpdated());
        $this->assertInstanceOf(PaymentContainerMandate::class, $response->getMandate());
        $this->assertNotEmpty($response->getMandate()->getSepaMandateId());
        $this->assertNotEmpty($response->getMandate()->getType());
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
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPrivate());
        /**
         * @var BankAccountDescriptor $private_data
         */
        $private_data = $response->getPrivate();
        $this->assertEquals(self::$bankAccount->getOwner(), $private_data->getOwner());
        $this->assertEquals(self::$bankAccount->getIban(), $private_data->getIban());
        $this->assertEquals(self::$bankAccount->getBic(), $private_data->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $private_data->getBankname());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response->getPublic());
        /**
         * @var BankAccountDescriptor $public_data
         */
        $public_data = $response->getPublic();
        $this->assertEquals(self::$bankAccount->getOwner(), $public_data->getOwner());
        $this->assertEquals(self::$bankAccount->getIban(), $public_data->getIban());
        $this->assertEquals(self::$bankAccount->getBic(), $public_data->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $public_data->getBankname());
        $this->assertEquals('bank_account', $response->getType());
        $this->assertEquals(self::$created, $response->getCreated());
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
            $this->assertNotNull($container->getCreated());
            $this->assertNotEmpty($container->getCreated());

            $this->assertNotEmpty($container->getType());
            if ($container->getType() == 'credit_card') {
                $this->assertInstanceOf(CreditCardDescriptor::class, $container->getPrivate());
                /**
                 * @var CreditCardDescriptor $private
                 */
                $private = $container->getPrivate();
                $this->assertNotEmpty($private->getPan());
                $this->assertNotEmpty($private->getOwner());
                $this->assertNotEmpty($private->getIssuer());
                $this->assertNotEmpty($private->getExpirationDate());
            } elseif ($container->getType() == 'bank_account') {
                $this->assertInstanceOf(BankAccountDescriptor::class, $container->getPrivate());
                /**
                 * @var BankAccountDescriptor $private
                 */
                $private = $container->getPrivate();
                $this->assertNotEmpty($private->getIban());
            }
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
        $this->assertCount(2, $response->getData());
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
        $this->assertIsArray($response);
        $this->assertContainsOnlyInstancesOf(PaymentContainersProductModel::class, $response);
        $this->assertEquals('payment.containers', $response[0]->getObject());
        $this->assertEquals(self::$containerId, $response[0]->getId());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response[0]->getPrivate());
        /**
         * @var BankAccountDescriptor $private_data
         */
        $private_data = $response[0]->getPrivate();
        $this->assertEquals(self::$bankAccount->getOwner(), $private_data->getOwner());
        $this->assertEquals(self::$bankAccount->getIban(), $private_data->getIban());
        $this->assertEquals(self::$bankAccount->getBic(), $private_data->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $private_data->getBankname());
        $this->assertInstanceOf(BankAccountDescriptor::class, $response[0]->getPublic());
        /**
         * @var BankAccountDescriptor $public_data
         */
        $public_data = $response[0]->getPublic();
        $this->assertEquals(self::$bankAccount->getOwner(), $public_data->getOwner());
        $this->assertEquals(self::$bankAccount->getIban(), $public_data->getIban());
        $this->assertEquals(self::$bankAccount->getBic(), $public_data->getBic());
        $this->assertEquals(self::$bankAccount->getBankname(), $public_data->getBankname());
        $this->assertEquals('bank_account', $response[0]->getType());
        $this->assertEquals(self::$created, $response[0]->getCreated());
    }

    /**
     * Asserts that a variable is of type array.
     * @param mixed $value
     */
    public static function assertIsArray($value)
    {
        if (method_exists(TestCase::class, 'assertIsArray')) {
            parent::assertIsArray($value);
        } else {
            self::assertInternalType('array', $value);
        }
    }
}
