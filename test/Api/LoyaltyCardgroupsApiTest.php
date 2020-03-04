<?php
/**
 * LoyaltyCardgroupsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Secuconnect\Client;

use \PHPUnit\Framework\TestCase;

use \Secuconnect\Client\Api\SecuconnectObjects;
use \Secuconnect\Client\Api\LoyaltyCardgroupsApi;
use \Secuconnect\Client\Model\LoyaltyCardgroupsDTO;
use \Secuconnect\Client\Model\LoyaltyCardgroupsList;
use \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel;

/**
 * LoyaltyCardgroupsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCardgroupsApiTest extends TestCase
{
    /**
     * @var LoyaltyCardgroupsApi
     */
    private static $api;

    /**
     * @var SecuconnectObjects
     */
    private static $instance;

    /**
     * @var LoyaltyCardgroupsList
     */
    private static $cardgroupsList;

    /**
     * Setup before running any test cases
     * @throws ApiException
     */
    public static function setUpBeforeClass() {
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new LoyaltyCardgroupsApi();
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for loyaltyCardgroupsGet
     *
     * GET Loyalty/Cardgroups.
     *
     * @throws ApiException
     */
    public function testLoyaltyCardgroupsGet()
    {   
        try {
            $response = self::$api->getAll();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(LoyaltyCardgroupsList::class, $response);
        $this->assertInternalType('int', $response->getCount());

        self::$cardgroupsList = $response; // save data for next tests

        foreach ($response->getData() as $cardgroup) {
            $this->assertInstanceOf(LoyaltyCardgroupsProductModel::class, $cardgroup);
            $this->assertEquals('loyalty.cardgroups', $cardgroup->getObject());
            $this->assertNotEmpty($cardgroup->getId());
            $this->assertNotEmpty($cardgroup->getDisplayName());
            $this->assertNotEmpty($cardgroup->getDisplayNameRaw());
            $this->assertNotNull($cardgroup->getStockWarnLimit());
            $this->assertNotEmpty($cardgroup->getMerchant());
            $this->assertNotEmpty($cardgroup->getMerchant()->getId());
        }
    }

    /**
     * Test case for loyaltyCardgroupsGetById
     *
     * GET Loyalty/Cardgroups/{id}.
     *
     * @throws ApiException
     */
    public function testLoyaltyCardgroupsGetById()
    {
        $response = self::$api->getOne(self::$cardgroupsList->getData()[0]->getId());
        $this->assertNotEmpty($response);
        $this->assertInstanceOf(LoyaltyCardgroupsProductModel::class, $response);

        $this->assertEquals('loyalty.cardgroups', $response->getObject());
        $this->assertNotEmpty($response->getId());
        $this->assertNotEmpty($response->getDisplayName());
        $this->assertNotEmpty($response->getDisplayNameRaw());
        $this->assertNotNull($response->getStockWarnLimit());
        $this->assertNotEmpty($response->getMerchant());
        $this->assertNotEmpty($response->getMerchant()->getId());
    }

    /**
     * Test case for loyaltyCardgroupsIdCheckPasscodeEnabledPost
     *
     * POST Loyalty/Cardgroups/{id}/checkPasscodeEnabled.
     *
     * @throws ApiException
     */
    public function testLoyaltyCardgroupsIdCheckPasscodeEnabledPost()
    {
        $response = self::$api->checkPassCodeEnabled(self::$cardgroupsList->getData()[0]->getId());
        $this->assertNotEmpty($response);
        $this->assertTrue(true);
    }
}
