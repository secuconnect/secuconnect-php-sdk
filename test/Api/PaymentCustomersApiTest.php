<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\Address;
use Secuconnect\Client\Model\PaymentCustomersDTO;
use Secuconnect\Client\Model\Contact;
use Secuconnect\Client\Model\PaymentCustomersList;
use Secuconnect\Client\Model\PaymentCustomersProductModel;

/**
 * Class PaymentCustomersApiTest
 */
class PaymentCustomersApiTest extends TestCase
{
    /**
     * @var PaymentCustomersApi
     */
    private $api;

    /**
     * @var string
     */
    private static $customerId;

    /**
     * @var Contact
     */
    private static $contact;

    /**
     * @var Address
     */
    private static $contactAddress;

    /**
     * @var string
     */
    private static $created;

    /**
     * @var string
     */
    private static $updated;

    /**
     * @var PaymentCustomersProductModel
     */
    private static $testCustomer1;

    /**
     * @var PaymentCustomersProductModel
     */
    private static $testCustomer2;

    /**
     * @var PaymentCustomersProductModel
     */
    private static $testCustomer3;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
        self::$customerId = '';
        self::$created = '';
        self::$updated = '';

        self::$contactAddress = new Address();
        self::$contactAddress
            ->setStreet('Example Street')
            ->setStreetNumber('6a')
            ->setPostalCode('01234')
            ->setCity('Examplecity')
            ->setCountry('Germany');

        self::$contact = new Contact();
        self::$contact
            ->setSalutation('Mr.')
            ->setTitle('Dr.')
            ->setForename('John')
            ->setSurname('DOe')
            ->setCompanyname('Example Inc.')
            ->setDob('1991-02-03')
            ->setEmail('example@example.com')
            ->setPhone('0049-123-456789')
            ->setMobile('0049-987-654321')
            ->setAddress(self::$contactAddress);
    }

    /**
     * Setup before running each test case
     *
     * @throws ApiException
     */
    public function setUp()
    {
        SecuconnectObjects::getInstance()->authenticateByClientCredentials();
        $this->api = SecuconnectObjects::getInstance()->getApi();
        $this->api = new PaymentCustomersApi();
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
        self::$customerId = null;
        self::$contact = null;
        self::$contactAddress = null;
        self::$created = null;
        self::$updated = null;
    }

    /**
     * Test case for paymentCustomersPost
     *
     * @throws ApiException
     */
    public function testPaymentCustomersPost()
    {
        $customer = new PaymentCustomersDTO();
        $customer->setContact(self::$contact);

        try {
            $response = $this->api->paymentCustomersPost($customer);
            self::$customerId = $response->getId();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        
        $this->assertNotEmpty(self::$customerId);
        $this->assertInstanceOf(PaymentCustomersProductModel::class, $response);
        $this->assertEquals('payment.customers', $response->getObject());
        $this->assertEquals('payment.contracts', $response->getContract()->getObject());
        $this->assertNotEmpty($response->getContract()->getId());

        $this->assertEquals('Mr.', $response->getContact()->getSalutation());
        $this->assertEquals('Dr.', $response->getContact()->getTitle());
        $this->assertEquals('John', $response->getContact()->getForename());
        $this->assertEquals('DOe', $response->getContact()->getSurname());
        $this->assertEquals('Example Inc.', $response->getContact()->getCompanyname());
        $this->assertEquals('1991-02-03T00:00:00+01:00', $response->getContact()->getDob());
        $this->assertEquals('example@example.com', $response->getContact()->getEmail());
        $this->assertEquals('0049123456789', $response->getContact()->getPhone());
        $this->assertEquals('0049987654321', $response->getContact()->getMobile());
        $this->assertEquals('Example Street', $response->getContact()->getAddress()->getStreet());
        $this->assertEquals('6a', $response->getContact()->getAddress()->getStreetNumber());
        $this->assertEquals('01234', $response->getContact()->getAddress()->getPostalCode());
        $this->assertEquals('Examplecity', $response->getContact()->getAddress()->getCity());
        $this->assertEquals('Germany', $response->getContact()->getAddress()->getCountry());
        $this->assertNotEmpty($response->getCreated());

        self::$created = $response->getCreated();
    }

    /**
     * Test case for paymentCustomersIdPut
     *
     * @throws ApiException
     */
    public function testPaymentCustomersIdPut()
    {
        $customer = new PaymentCustomersDTO();
        self::$contactAddress
            ->setStreet('Example 2 Street')
            ->setStreetNumber('125b')
            ->setPostalCode('75432')
            ->setCity('Examplecity2')
            ->setCountry('Austria');

        self::$contact
            ->setSalutation('Mrs.')
            ->setTitle('Prof.')
            ->setForename('Anna')
            ->setSurname('Smith')
            ->setCompanyname('Example2 Inc.')
            ->setDob('1902-03-04')
            ->setEmail('new.email@my-email.com')
            ->setPhone('0049-321-31701')
            ->setMobile('0049-537-144093')
            ->setAddress(self::$contactAddress);

        $customer->setContact(self::$contact);

        try {
            $response = $this->api->paymentCustomersIdPut(
                self::$customerId,
                $customer
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$customerId);
        $this->assertInstanceOf(PaymentCustomersProductModel::class, $response);
        $this->assertEquals('payment.customers', $response->getObject());
        $this->assertEquals('payment.contracts', $response->getContract()->getObject());
        $this->assertNotEmpty($response->getContract()->getId());
        $this->assertEquals(self::$customerId, $response->getId());

        $this->assertEquals('Mrs.', $response->getContact()->getSalutation());
        $this->assertEquals('Prof.', $response->getContact()->getTitle());
        $this->assertEquals('Anna', $response->getContact()->getForename());
        $this->assertEquals('Smith', $response->getContact()->getSurname());
        $this->assertEquals('Example2 Inc.', $response->getContact()->getCompanyname());
        $this->assertEquals('1902-03-04T00:00:00+01:00', $response->getContact()->getDob());
        $this->assertEquals('new.email@my-email.com', $response->getContact()->getEmail());
        $this->assertEquals('004932131701', $response->getContact()->getPhone());
        $this->assertEquals('0049537144093', $response->getContact()->getMobile());
        $this->assertEquals('Example 2 Street', $response->getContact()->getAddress()->getStreet());
        $this->assertEquals('125b', $response->getContact()->getAddress()->getStreetNumber());
        $this->assertEquals('75432', $response->getContact()->getAddress()->getPostalCode());
        $this->assertEquals('Examplecity2', $response->getContact()->getAddress()->getCity());
        $this->assertEquals('Austria', $response->getContact()->getAddress()->getCountry());

        $this->assertNotEmpty($response->getCreated());
        $this->assertEquals(self::$created, $response->getCreated());
        $this->assertNotEmpty($response->getUpdated());

        self::$updated = $response->getUpdated();
    }

    /**
     * Test case for paymentCustomersGet
     *
     * @throws ApiException
     */
    public function testPaymentCustomersGetById()
    {
        try {
            $response = $this->api->paymentCustomersGetById(self::$customerId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(PaymentCustomersProductModel::class, $response);
        $this->assertEquals(self::$customerId, $response->getId());
        $this->assertEquals('payment.customers', $response->getObject());
        $this->assertEquals('payment.contracts', $response->getContract()->getObject());
        $this->assertNotEmpty($response->getContract()->getId());
        $this->assertEquals(self::$customerId, $response->getId());

        $this->assertEquals('Mrs.', $response->getContact()->getSalutation());
        $this->assertEquals('Prof.', $response->getContact()->getTitle());
        $this->assertEquals('Anna', $response->getContact()->getForename());
        $this->assertEquals('Smith', $response->getContact()->getSurname());
        $this->assertEquals('Example2 Inc.', $response->getContact()->getCompanyname());
        $this->assertEquals('1902-03-04T00:00:00+01:00', $response->getContact()->getDob());
        $this->assertEquals('new.email@my-email.com', $response->getContact()->getEmail());
        $this->assertEquals('004932131701', $response->getContact()->getPhone());
        $this->assertEquals('0049537144093', $response->getContact()->getMobile());
        $this->assertEquals('Example 2 Street', $response->getContact()->getAddress()->getStreet());
        $this->assertEquals('125b', $response->getContact()->getAddress()->getStreetNumber());
        $this->assertEquals('75432', $response->getContact()->getAddress()->getPostalCode());
        $this->assertEquals('Examplecity2', $response->getContact()->getAddress()->getCity());
        $this->assertEquals('Austria', $response->getContact()->getAddress()->getCountry());
        $this->assertEquals(self::$created, $response->getCreated());
        $this->assertEquals(self::$updated, $response->getUpdated());
    }

    /**
     * Test case for paymentCustomersIdDelete
     *
     * @throws ApiException
     */
    public function testPaymentCustomersIdDelete()
    {
        try {
            /**
             * @var array
             */
            $response = $this->api->paymentCustomersIdDelete(self::$customerId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInternalType('array', $response);
        $this->assertContainsOnlyInstancesOf(PaymentCustomersProductModel::class, $response);
        $this->assertEquals('payment.customers', $response[0]->getObject());
        $this->assertEquals(self::$customerId, $response[0]->getId());
        $this->assertEquals('payment.contracts', $response[0]->getContract()->getObject());
        $this->assertNotEmpty($response[0]->getContract()->getId());

        $this->assertEquals('Mrs.', $response[0]->getContact()->getSalutation());
        $this->assertEquals('Prof.', $response[0]->getContact()->getTitle());
        $this->assertEquals('Anna', $response[0]->getContact()->getForename());
        $this->assertEquals('Smith', $response[0]->getContact()->getSurname());
        $this->assertEquals('Example2 Inc.', $response[0]->getContact()->getCompanyname());
        $this->assertEquals('1902-03-04T00:00:00+01:00', $response[0]->getContact()->getDob());
        $this->assertEquals('new.email@my-email.com', $response[0]->getContact()->getEmail());
        $this->assertEquals('004932131701', $response[0]->getContact()->getPhone());
        $this->assertEquals('0049537144093', $response[0]->getContact()->getMobile());
        $this->assertEquals('Example 2 Street', $response[0]->getContact()->getAddress()->getStreet());
        $this->assertEquals('125b', $response[0]->getContact()->getAddress()->getStreetNumber());
        $this->assertEquals('75432', $response[0]->getContact()->getAddress()->getPostalCode());
        $this->assertEquals('Examplecity2', $response[0]->getContact()->getAddress()->getCity());
        $this->assertEquals('Austria', $response[0]->getContact()->getAddress()->getCountry());
        $this->assertEquals(self::$created, $response[0]->getCreated());
        $this->assertEquals(self::$updated, $response[0]->getUpdated());
    }

    /**
     * Test case for paymentCustomersGet
     *
     * @throws ApiException
     */
    public function testPaymentCustomersGet()
    {
        try {
            $response = $this->api->paymentCustomersGet();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(PaymentCustomersList::class, $response);
        $this->assertInternalType('int', $response->getCount());

        if (is_int($response->getCount()) && $response->getCount() > 0) {
            foreach ($response->getData() as $customer) {
                $this->assertInstanceOf(PaymentCustomersProductModel::class, $customer);
                $this->assertNotEmpty($customer->getObject());
                $this->assertNotEmpty($customer->getId());
                $this->assertNotEmpty($customer->getContract());
                $this->assertNotEmpty($customer->getContract()->getObject());
                $this->assertNotEmpty($customer->getContract()->getId());
                $this->assertNotEmpty($customer->getCreated());
            }
        }
    }

    /**
     * Test case for checking count param
     *
     * @throws ApiException
     */
    public function testPaymentCustomersGetCountQueryParam()
    {
        $customer = new PaymentCustomersDTO();
        $customer->setContact(self::$contact);

        try {
            self::$testCustomer1 = $this->api->paymentCustomersPost($customer);
            self::$testCustomer2 = $this->api->paymentCustomersPost($customer);
            self::$testCustomer3 = $this->api->paymentCustomersPost($customer);

            $response = $this->api->paymentCustomersGet(2);
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
     * @throws ApiException
     */
    public function testPaymentCustomersGetOffsetQueryParam()
    {
        try {
            $response1 = $this->api->paymentCustomersGet();
            $response2 = $this->api->paymentCustomersGet(null, 1);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response1);
        $this->assertNotEmpty($response2);
        $this->assertEquals($response1->getData()[1], $response2->getData()[0]);

        try {
            $this->api->paymentCustomersIdDelete(self::$testCustomer1->getId());
            $this->api->paymentCustomersIdDelete(self::$testCustomer2->getId());
            $this->api->paymentCustomersIdDelete(self::$testCustomer3->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
    }
}
