<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\PaymentContractsDTOClone;
use Secuconnect\Client\Model\PaymentContractsDTORequestId;
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
     * Setup before running each test case
     *
     * @throws ApiException
     */
    public function setUp()
    {
        parent::setUp();
        SecuconnectObjects::getInstance()->authenticateByApplicationUser();
        $this->api = new PaymentContractsApi();
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
     * Test case for paymentContractsGetById
     *
     * @throws ApiException
     */
    public function testPaymentContractsGetById()
    {
        try {
            $response = $this->api->paymentContractsGetById('PCR_WDYMYB6CY2N5WNHTD3H587G20Q8KAH');
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertInstanceOf(PaymentContractsProductModel::class, $response);
        $this->assertEquals('general.contracts', $response->getObject());
        $this->assertEquals('GCR_2H69XY35227V2VKP9WRA3SJ0W95RP0', $response->getId());
        $this->assertNotEmpty($response->getCreated());
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
            $response = $this->api->paymentContractsGet(2);
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
    }

    /**
     * Test case for paymentContractsIdClonePost
     * @throws ApiException
     */
    public function testPaymentContractsIdClonePost()
    {
        SecuconnectObjects::getInstance()->authenticateByClientCredentials();
        try {
            $body = new PaymentContractsDTOClone();
            $body->setProject('project_name #' . time());
            $body->setPaymentData(
                new PaymentInformation(
                    [
                        "iban" => "DE89370400440532013000",
                        "bic" => "",
                        "owner" => "Test #1"
                    ]
                )
            );

            $response = $this->api->callClone('me', $body);
            $this->assertNotEmpty($response);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
    }

    /**
     * Test case for paymentContractsIdPaymentMethodsGet
     *
     * @group ignore
     * @throws ApiException
     */
    public function testPaymentContractsIdPaymentMethodsGet()
    {
        SecuconnectObjects::getInstance()->authenticateByClientCredentials();
        try {
            $response = $this->api->paymentContractsIdPaymentMethodsGet('me');
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        $this->assertNotEmpty($response);
    }

    /**
     * Test case for paymentContractsIdRequestIdPost
     *
     * @group ignore
     * @throws ApiException
     */
    public function testPaymentContractsIdRequestIdPost()
    {
        SecuconnectObjects::getInstance()->authenticateByClientCredentials();
        $body = new PaymentContractsDTORequestId();
        $body->setContact('CNT_36UTTTRGQ2MNT4BY52TSD57X5VTYAJ');
        $body->setProject('test_' . microtime());

        $account = new PaymentInformation(
            [
                'iban' => 'DE37503240001000000524',
                'owner' => 'John Doe',
            ]
        );
        $body->setPayoutAccount($account);

        try {
            $response = $this->api->requestId('me', $body);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        $this->assertNotEmpty($response);
    }
}
