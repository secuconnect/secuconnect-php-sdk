<?php
/**
 * LoyaltySalesApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Secuconnect API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0.0
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

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\Api\GeneralMerchantsApi;
use Secuconnect\Client\Api\LoyaltyMerchantcardsApi;
use Secuconnect\Client\Api\LoyaltySalesApi;
use Secuconnect\Client\Api\SecuconnectObjects;
use Secuconnect\Client\Model\GeneralMerchantsList;
use Secuconnect\Client\Model\LoyaltyCardgroupsProductModel;


/**
 * LoyaltySalesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltySalesApiTest extends TestCase
{
    /**
     * @var LoyaltySalesApi
     */
    private static $api;

    /**
     * @var SecuconnectObjects
     */
    private static $instance;

    /**
     * @var LoyaltyMerchantcardsApi
     */
    private static $merchant_cards_api;

    /**
     * @var string
     */
    private static $merchant_id;

    /**
     * @var string
     */
    private static $decoded_store_id;

    /**
     * Setup before running any test cases
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new LoyaltySalesApi();

        self::$decoded_store_id = "2495251";
        self::$merchant_cards_api = new LoyaltyMerchantcardsApi();

        try {
            self::$merchant_id = self::$merchant_cards_api->getAll()->getData()[0]->getMerchant()->getId();
        } catch (ApiException $e) {
            print_r("Failed to get merchant's id, some test may fail without this data");
            print_r($e->getResponseBody());
        }
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
        self::$instance = null;
        self::$api = null;
    }

    /**
     * Test case for getCardgroupsByMerchantId
     *
     * GET Loyalty/Sales/{id}/CardGroupsByMerchantID.
     *
     */
    public function testGetCardgroupsByMerchantId()
    {
        try {
            $response = self::$api->getCardgroupsByMerchantId(self::$merchant_id);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
        }

        if (!empty($response)) {
            $this->assertNotEmpty($response);
            foreach ($response as $cardgroup) {
                $this->assertInstanceOf(LoyaltyCardgroupsProductModel::class, $cardgroup);
            }
        }
    }
}
