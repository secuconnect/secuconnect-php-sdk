<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\PaymentContractsDTO;
use Secuconnect\Client\Model\PaymentContractsDTOClone;
use Secuconnect\Client\Model\PaymentContractsProductModel;
use Secuconnect\Client\Model\PaymentInformation;

/**
 * Class PaymentContractsApiTest
 */
class PaymentContractsApiTest extends TestCase
{
    /**
     * @var PaymentContractsApi
     */
    private $api;

    /**
     * @var string
     */
    private static $contractId;

    /**
     * @var PaymentContractsDTO
     */
    private static $contract;

    /**
     * @var string
     */
    private static $created;

    /**
     * @var string
     */
    private static $updated;

    /**
     * @var PaymentContractsProductModel
     */
    private static $testContract1;

    /**
     * @var PaymentContractsProductModel
     */
    private static $testContract2;

    /**
     * @var PaymentContractsProductModel
     */
    private static $testContract3;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
        //TO DO remove this merchantID get it from API based on curent credentials
        self::$contract = new PaymentContractsDTO();
        self::$contract->setMerchant('MRC_WVHJQFQ4JNVYNG5B55TYK748ZCHQP8')
            ->setInternalReference('181365')
            ->setContractId(49760)
            ->setDemo(true)
            ->setUrlPush('http://requestb.in/xcrbzxxc')
            ->setUniqueOrderId(false)
            ->setScoring(true);
    }

    /**
     * Setup before running each test case
     *
     * @throws ApiException
     */
    public function setUp()
    {
        SecuconnectObjects::getInstance()->authenticateByApplicationUser();
        $this->api = SecuconnectObjects::getInstance()->getApi();
        $this->api = new PaymentContractsApi();
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
        self::$contractId = null;
        self::$contract = null;
        self::$created = null;
        self::$updated = null;
    }

    /**
     * Test case for paymentContractsPost
     *
     * @throws ApiException
     */
    public function testPaymentContractsPost()
    {
        try {
            $response = $this->api->paymentContractsPost(self::$contract);
            self::$contractId = $response->getId();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$contractId);
        $this->assertInstanceOf(PaymentContractsProductModel::class, $response);
        $this->assertEquals('payment.contracts', $response->getObject());
        $this->assertNotNull($response->getId());
        $this->assertNotEmpty($response->getId());
        $this->assertNull($response->getParent());
        $this->assertTrue($response->getDemo());
        $this->assertNotNull($response->getCreated());
        $this->assertNotEmpty($response->getCreated());
        $this->assertNull($response->getUpdated());

        self::$created = $response->getCreated();
    }

    /**
     * Test case for paymentContractsIdPut
     *
     * @throws ApiException
     */
    public function testPaymentContractsIdPut()
    {
        self::$contract
            ->setInternalReference('264748')
            ->setInvoiceProductId(267)
            ->setUrlPush('http://example.com/push_url')
            ->setAllowCloning(false)
            ->setScoring(true);

        try {
            $response = $this->api->paymentContractsIdPut(
                self::$contractId,
                self::$contract
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$contractId);
        $this->assertInstanceOf(PaymentContractsProductModel::class, $response);
        $this->assertEquals('payment.contracts', $response->getObject());
        $this->assertEquals(self::$contractId, $response->getId());
        $this->assertNull($response->getParent());
        $this->assertTrue($response->getDemo());
        $this->assertEquals(self::$created, $response->getCreated());
        $this->assertNotNull($response->getUpdated());
        $this->assertNotEmpty($response->getUpdated());

        self::$updated = $response->getUpdated();
    }

    /**
     * Test case for paymentContractsGetById
     *
     * @throws ApiException
     */
    public function testPaymentContractsGetById()
    {
        try {
            $response = $this->api->paymentContractsGetById(self::$contractId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertInstanceOf(PaymentContractsProductModel::class, $response);
        $this->assertEquals('payment.contracts', $response->getObject());
        $this->assertEquals(self::$contractId, $response->getId());
        $this->assertNull($response->getParent());
        $this->assertTrue($response->getDemo());
        $this->assertEquals(self::$created, $response->getCreated());
        $this->assertEquals(self::$updated, $response->getUpdated());
    }

    /**
     * Test case for paymentContractsGet
     *
     * @throws ApiException
     */
    public function testPaymentContractsGet()
    {
        try {
            $response = $this->api->paymentContractsGet();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInternalType('int', $response->getCount());

        foreach ($response->getData() as $contract) {
            $this->assertInstanceOf(PaymentContractsProductModel::class, $contract);
            $this->assertEquals('payment.contracts', $contract->getObject());
            $this->assertNotNull($contract->getId());
            $this->assertNotEmpty($contract->getId());
            $this->assertNotNull($contract->getDemo());
            $this->assertNotNull($contract->getCreated());
            $this->assertNotEmpty($contract->getCreated());
        }
    }

    /**
     * Test case for checking count param
     *
     * @throws ApiException
     */
    public function testPaymentContractsGetCountQueryParam()
    {
        try {
            self::$testContract1 = $this->api->paymentContractsPost(self::$contract);
            self::$testContract2 = $this->api->paymentContractsPost(self::$contract);
            self::$testContract3 = $this->api->paymentContractsPost(self::$contract);

            $response = $this->api->paymentContractsGet(2);
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
    public function testPaymentContractsGetOffsetQueryParam()
    {
        try {
            $response1 = $this->api->paymentContractsGet();
            $response2 = $this->api->paymentContractsGet(null, 1);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response1);
        $this->assertNotEmpty($response2);
        $this->assertEquals($response1->getData()[1], $response2->getData()[0]);

        try {
            $this->api->paymentContractsIdDelete(self::$testContract1->getId());
            $this->api->paymentContractsIdDelete(self::$testContract2->getId());
            $this->api->paymentContractsIdDelete(self::$testContract3->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
    }

    /**
     * Test case for paymentContractsIdClonePost
     */
    public function testPaymentContractsIdClonePost()
    {
        $this->markTestIncomplete();
        try {
            $body = new PaymentContractsDTOClone();
            $body->setProject('project_name #' . time());
            $body->setPaymentData(new PaymentInformation([
                "iban" => "DE89370400440532013000",
                "bic" => "",
                "owner"=> "Test #1"
            ]));

            $response = $this->api->callClone('me', $body);
            echo var_dump($response);
        } catch (\Secuconnect\Client\ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
    }

    /**
     * Test case for paymentContractsIdPaymentMethodsGet
     *
     * @group ignore
     */
    public function testPaymentContractsIdPaymentMethodsGet()
    {
        try {
            $response = $this->api->paymentContractsIdPaymentMethodsGet('me');
        } catch (\Secuconnect\Client\ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        $this->assertNotEmpty($response);
    }

    /**
     * Test case for paymentContractsIdRequestIdPost
     *
     * @group ignore
     */
    public function testPaymentContractsIdRequestIdPost()
    {
        try {
            $response = $this->api->requestId('me', null);
        } catch (\Secuconnect\Client\ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        $this->assertNotEmpty($response);
    }

    /**
     * Test case for paymentContractsIdDelete
     *
     * @throws ApiException
     */
    public function testPaymentContractsIdDelete()
    {
        try {
            /**
             * @var array
             */
            $response = $this->api->paymentContractsIdDelete(self::$contractId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotNull($response);
        $this->assertInternalType('array', $response);
        $this->assertContainsOnlyInstancesOf(PaymentContractsProductModel::class, $response);
        $this->assertEquals('payment.contracts', $response[0]->getObject());
        $this->assertEquals(self::$contractId, $response[0]->getId());
        $this->assertNull($response[0]->getParent());
        $this->assertTrue($response[0]->getDemo());
        $this->assertEquals(self::$created, $response[0]->getCreated());
        $this->assertEquals(self::$updated, $response[0]->getUpdated());
    }
}
