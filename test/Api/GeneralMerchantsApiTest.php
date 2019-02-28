<?php

namespace Secuconnect\Client;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\Api\GeneralMerchantsApi;
use Secuconnect\Client\Api\SecuconnectObjects;
use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Model\GeneralMerchantsProductModel;
use Secuconnect\Client\Model\GeneralMerchantsUser;
use Secuconnect\Client\Model\GeoAddress;

/**
 * Class GeneralMerchantsApiTest
 * @package Secuconnect\Client
 */
class GeneralMerchantsApiTest extends TestCase
{
    /**
     * @var GeneralMerchantsApi
     */
    private static $api;

    /**
     * @var SecuconnectObjects
     */
    private static $instance;

    /**
     * Setup before running any test cases
     *
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new GeneralMerchantsApi();
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
     * Test case for getting list of General Merchants.
     * @throws ApiException
     */
    public function testGetListOfGeneralMerchants()
    {
        try {
            $response = self::$api->getAll(1);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        $numberOfMerchants = $response->getCount();

        if ($numberOfMerchants > 0) {
            $merchants = $response->getData();

            foreach ($merchants as $merchant) {
                $this->assertInstanceOf(GeneralMerchantsProductModel::class, $merchant);
                $this->assertNotEmpty($merchant);
                $this->assertEquals("general.merchants", $merchant->getObject());
                $this->assertNotFalse(strpos($merchant->getId(), "MRC_"));
                $this->assertTrue(is_numeric($merchant->getIdOld()));
                $this->assertNotEmpty($merchant->getType());
                $this->assertNotEmpty($merchant->getUser());

                $generalUser = $merchant->getUser();
                $this->assertNotEmpty($generalUser);
                $this->assertInstanceOf(GeneralMerchantsUser::class, $generalUser);
                $this->assertEquals("general.users", $generalUser->getObject());
                $this->assertNotFalse(strpos($generalUser->getId(), "USR_"));

                $userGeoAddresses = $generalUser->getAddress();

                if (!empty($userGeoAddress)) {
                    foreach ($userGeoAddresses as $userGeoAddress) {
                        $this->assertInstanceOf(GeoAddress::class, $userGeoAddress);
                        $this->assertNotEmpty($userGeoAddress->getType());
                        $this->assertNotEmpty($userGeoAddress->getAddressFormatted());

                        $addressComponents = $userGeoAddress->getAddressComponents();

                        foreach ($addressComponents as $addressComponent) {
                            $this->assertNotEmpty($addressComponent->getLongName());
                            $this->assertNotEmpty($addressComponent->getShortName());

                            $types = $addressComponent->getTypes();

                            foreach ($types as $type) {
                                $this->assertNotEmpty($type);
                            }
                        }
                    }
                }
            }
        }

        return $numberOfMerchants > 0 ? $response->getData()[0] : null;
    }

    /**
     * Test case for getting one General Merchant by provided id.
     *
     * @depends testGetListOfGeneralMerchants
     * @param GeneralMerchantsProductModel $merchant
     * @throws ApiException
     */
    public function testGetOneGeneralMerchantByProvidedId(GeneralMerchantsProductModel $merchant)
    {
        if ($merchant !== null) {
            $response = self::$api->getOne($merchant->getId());

            if (!empty($response)) {
                $receivedMerchant = $response;

                $this->assertInstanceOf(
                    GeneralMerchantsProductModel::class,
                    $receivedMerchant
                );
                $this->assertEquals($merchant, $receivedMerchant);
                $this->assertEquals($merchant->getUser(), $receivedMerchant->getUser());
                $this->assertEquals(
                    $merchant->getUser()->getAddress(),
                    $receivedMerchant->getUser()->getAddress()
                );

                $addresses = $merchant->getUser()->getAddress();
                $receivedAddresses = $receivedMerchant->getUser()->getAddress();

                if (sizeof($addresses) === sizeof($receivedAddresses)) {
                    for ($i = 0; $i < sizeof($addresses); $i++) {
                        $this->assertEquals($addresses[$i], $receivedAddresses[$i]);

                        $addressComponents = $addresses[$i]->getAddressComponents();
                        $receivedAddressComponents = $receivedAddresses[$i]->getAddressComponents();

                        $this->assertEquals($addressComponents, $receivedAddressComponents);
                        $this->assertEquals(
                            $addressComponents->getTypes(),
                            $receivedAddressComponents->getTypes()
                        );
                    }
                }
            }
        }
    }
}
