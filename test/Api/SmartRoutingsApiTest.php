<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\SmartRoutingPriority;
use Secuconnect\Client\Model\SmartRoutingsDTO;
use Secuconnect\Client\Model\SmartRoutingsProductModel;

/**
 * Class SmartRoutingsApiTest
 * @package Secuconnect\Client
 */
class SmartRoutingsApiTest extends TestCase
{
    const GENERAL_STORE_ID = 'STO_3522R8MS2MSHCN7D37UVJYR4P6C4PX';
    const SMART_DEVICE_ID = 'SDV_UTA370DDJ2N3DAZ5T3H583YZ4XF3AZ';
    const SMART_ROUTING_DESCRIPTION = 'test description';
    const SMART_ROUTING_DESCRIPTION_2 = 'test description 2';

    /**
     * @var SmartRoutingsApi
     */
    private static $api;

    /**
     * @var SecuconnectObjects
     */
    private static $instance;

    /**
     * @var string
     */
    private static $smartRoutingId;

    /**
     * Setup before running any test cases
     *
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new SmartRoutingsApi();
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
        self::$instance = null;
        self::$api = null;
        self::$smartRoutingId = null;
        parent::tearDownAfterClass();
    }

    /**
     * Test case for creating new Smart Routing.
     * @throws ApiException
     */
    public function testAddSmartRouting()
    {
        $smartRoutingDTO = new SmartRoutingsDTO();
        $smartRoutingDTO->setStore(self::GENERAL_STORE_ID);
        $smartRoutingDTO->setDescription(self::SMART_ROUTING_DESCRIPTION);

        try {
            $response = self::$api->addRouting($smartRoutingDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        if ($response instanceof SmartRoutingsProductModel) {
            $routing = $response;

            $this->assertNotEmpty($routing);
            $this->assertInstanceOf(SmartRoutingsProductModel::class, $routing);
            $this->assertEquals("smart.routings", $routing->getObject());
            $this->assertNotFalse(strpos($routing->getId(), "SRT_"));

            self::$smartRoutingId = $routing->getId();

            $merchant = $routing->getMerchant();
            $this->assertEquals("general.merchants", $merchant->getObject());
            $this->assertNotFalse(strpos($merchant->getId(), "MRC_"));

            $store = $routing->getStore();
            $this->assertEquals("general.stores", $store->getObject());
            $this->assertEquals(self::GENERAL_STORE_ID, $store->getId());
            $this->assertNotEmpty($store->getName());

            $this->assertNotEmpty($routing->getCreated());
            $this->assertEquals(self::SMART_ROUTING_DESCRIPTION, $routing->getDescription());

            $assignedDevices = $routing->getAssign();

            if (is_array($assignedDevices)) {
                foreach ($assignedDevices as $assignedDevice) {
                    $this->assertEquals("smart.devices", $assignedDevice->getObject());
                    $this->assertNotFalse(strpos($assignedDevice->getId(), "SDV_"));
                }
            }
        }

        return $response;
    }

    /**
     * Test case for getting one Smart Routing.\
     *
     * @depends testAddSmartRouting
     * @throws ApiException
     */
    public function testGetSmartRouting()
    {
        try {
            $response = self::$api->getOne(self::$smartRoutingId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        if ($response instanceof SmartRoutingsProductModel) {
            $routing = $response;

            $this->assertNotEmpty($routing);
            $this->assertInstanceOf(SmartRoutingsProductModel::class, $routing);
            $this->assertEquals("smart.routings", $routing->getObject());
            $this->assertNotFalse(strpos($routing->getId(), "SRT_"));

            self::$smartRoutingId = $routing->getId();

            $merchant = $routing->getMerchant();
            $this->assertEquals("general.merchants", $merchant->getObject());
            $this->assertNotFalse(strpos($merchant->getId(), "MRC_"));

            $store = $routing->getStore();
            $this->assertEquals("general.stores", $store->getObject());
            $this->assertEquals(self::GENERAL_STORE_ID, $store->getId());
            $this->assertNotEmpty($store->getName());

            $this->assertNotEmpty($routing->getCreated());
            $this->assertEquals(self::SMART_ROUTING_DESCRIPTION, $routing->getDescription());

            $assignedDevices = $routing->getAssign();

            if (is_array($assignedDevices)) {
                foreach ($assignedDevices as $assignedDevice) {
                    $this->assertEquals("smart.devices", $assignedDevice->getObject());
                    $this->assertNotFalse(strpos($assignedDevice->getId(), "SDV_"));
                }
            }
        }

        return $response;
    }

    /**
     * Test case for adding a routing assignment.
     *
     * @depends testAddSmartRouting
     * @throws ApiException
     */
    public function testAddNewSmartDeviceToSmartRouting()
    {
        $priority = new SmartRoutingPriority();
        $priority->setPriority(1);

        try {
            $response = self::$api->assignDeviceToRouting(self::$smartRoutingId, self::SMART_DEVICE_ID, $priority);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        if ($response instanceof SmartRoutingsProductModel) {
            $routing = $response;

            $this->assertNotEmpty($routing);
            $this->assertInstanceOf(SmartRoutingsProductModel::class, $routing);
            $this->assertEquals("smart.routings", $routing->getObject());
            $this->assertEquals(self::$smartRoutingId, $routing->getId());

            $merchant = $routing->getMerchant();
            $this->assertEquals("general.merchants", $merchant->getObject());
            $this->assertNotFalse(strpos($merchant->getId(), "MRC_"));

            $store = $routing->getStore();
            $this->assertEquals("general.stores", $store->getObject());
            $this->assertEquals(self::GENERAL_STORE_ID, $store->getId());
            $this->assertNotEmpty($store->getName());

            $this->assertNotEmpty($routing->getCreated());
            $this->assertEquals(self::SMART_ROUTING_DESCRIPTION, $routing->getDescription());

            $assignedDevices = $routing->getAssign();

            if (is_array($assignedDevices)) {
                foreach ($assignedDevices as $assignedDevice) {
                    $this->assertEquals("smart.devices", $assignedDevice->getObject());
                    $this->assertNotFalse(strpos($assignedDevice->getId(), "SDV_"));
                }
            }
        }

        return $response;
    }

    /**
     * Test case for removing a routing assignment.
     *
     * @depends testAddSmartRouting
     * @throws ApiException
     */
    public function testRemoveSmartDeviceFromSmartRouting()
    {
        try {
            $response = self::$api->removeSmartRoutingAssignment(self::$smartRoutingId, self::SMART_DEVICE_ID);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        if ($response instanceof SmartRoutingsProductModel) {
            $routing = $response;

            $this->assertNotEmpty($routing);
            $this->assertInstanceOf(SmartRoutingsProductModel::class, $routing);
            $this->assertEquals("smart.routings", $routing->getObject());
            $this->assertEquals(self::$smartRoutingId, $routing->getId());

            $merchant = $routing->getMerchant();
            $this->assertEquals("general.merchants", $merchant->getObject());
            $this->assertNotFalse(strpos($merchant->getId(), "MRC_"));

            $store = $routing->getStore();
            $this->assertEquals("general.stores", $store->getObject());
            $this->assertEquals(self::GENERAL_STORE_ID, $store->getId());
            $this->assertNotEmpty($store->getName());

            $this->assertNotEmpty($routing->getCreated());
            $this->assertEquals(self::SMART_ROUTING_DESCRIPTION, $routing->getDescription());

            $assignedDevices = $routing->getAssign();

            if (is_array($assignedDevices)) {
                foreach ($assignedDevices as $assignedDevice) {
                    $this->assertEquals("smart.devices", $assignedDevice->getObject());
                    $this->assertNotFalse(strpos($assignedDevice->getId(), "SDV_"));
                }
            }
        }

        return $response;
    }

    /**
     * Test case for updating existing Smart Routing.
     *
     * @depends testAddSmartRouting
     * @throws ApiException
     */
    public function testUpdateSmartRouting()
    {
        $smartRoutingDTO = new SmartRoutingsDTO();
        $smartRoutingDTO->setDescription(self::SMART_ROUTING_DESCRIPTION_2);

        try {
            $response = self::$api->updateRouting(self::$smartRoutingId, $smartRoutingDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        if ($response instanceof SmartRoutingsProductModel) {
            $routing = $response;

            $this->assertEquals(self::SMART_ROUTING_DESCRIPTION_2, $routing->getDescription());
        }

        return $response;
    }

    /**
     * Test case for removing existing Smart Routing.
     *
     * @depends testAddSmartRouting
     * @throws ApiException
     */
    public function testRemoveSmartRouting()
    {
        try {
            $response = self::$api->removeRouting(self::$smartRoutingId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        if ($response instanceof SmartRoutingsProductModel) {
            $routing = $response;

            $this->assertNotEmpty($routing);
            $this->assertInstanceOf(SmartRoutingsProductModel::class, $routing);
            $this->assertEquals("smart.routings", $routing->getObject());
            $this->assertNotFalse(strpos($routing->getId(), "SRT_"));

            self::$smartRoutingId = $routing->getId();

            $merchant = $routing->getMerchant();
            $this->assertEquals("general.merchants", $merchant->getObject());
            $this->assertNotFalse(strpos($merchant->getId(), "MRC_"));

            $store = $routing->getStore();
            $this->assertEquals("general.stores", $store->getObject());
            $this->assertEquals(self::GENERAL_STORE_ID, $store->getId());
            $this->assertNotEmpty($store->getName());

            $this->assertNotEmpty($routing->getCreated());
            $this->assertEquals(self::SMART_ROUTING_DESCRIPTION_2, $routing->getDescription());

            $assignedDevices = $routing->getAssign();

            if (is_array($assignedDevices)) {
                foreach ($assignedDevices as $assignedDevice) {
                    $this->assertEquals("smart.devices", $assignedDevice->getObject());
                    $this->assertNotFalse(strpos($assignedDevice->getId(), "SDV_"));
                }
            }
        }

        return $response;
    }

    /**
     * Test case for getting list of Smart Routings.
     * @throws ApiException
     */
    public function testGetListOfSmartRoutings()
    {
        try {
            $response = self::$api->getAll(10);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        $numberOfRoutings = $response->getCount();

        if ($numberOfRoutings > 0) {
            $routings = $response->getData();

            foreach ($routings as $routing) {
                $this->assertNotEmpty($routing);
                $this->assertInstanceOf(SmartRoutingsProductModel::class, $routing);
                $this->assertEquals("smart.routings", $routing->getObject());
                $this->assertNotFalse(strpos($routing->getId(), "SRT_"));

                $merchant = $routing->getMerchant();
                $this->assertEquals("general.merchants", $merchant->getObject());
                $this->assertNotFalse(strpos($merchant->getId(), "MRC_"));

                $store = $routing->getStore();
                $this->assertEquals("general.stores", $store->getObject());
                $this->assertNotFalse(strpos($store->getId(), "STO_"));
                $this->assertNotEmpty($store->getName());

                $this->assertNotEmpty($routing->getCreated());
                $this->assertNotEmpty($routing->getDescription());

                $assignedDevices = $routing->getAssign();

                if (is_array($assignedDevices)) {
                    foreach ($assignedDevices as $assignedDevice) {
                        $this->assertEquals("smart.devices", $assignedDevice->getObject());
                        $this->assertNotFalse(strpos($assignedDevice->getId(), "SDV_"));
                    }
                }
            }
        }

        return $numberOfRoutings > 0 ? $response->getData()[0] : null;
    }
}
