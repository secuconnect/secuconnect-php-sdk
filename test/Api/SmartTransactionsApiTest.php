<?php

namespace Secuconnect\Client;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\Api\SmartTransactionsApi;
use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Model\SmartTransactionsBasket;
use Secuconnect\Client\Model\SmartTransactionsBasketInfo;
use Secuconnect\Client\Model\SmartTransactionsBasketProduct;
use Secuconnect\Client\Model\SmartTransactionsDTO;
use Secuconnect\Client\Model\SmartTransactionsList;
use Secuconnect\Client\Model\SmartTransactionsPreTransactionModel;
use Secuconnect\Client\Model\SmartTransactionsProductModel;
use Secuconnect\Client\Model\SmartTransactionsSubBasketProduct;

/**
 * Class SmartTransactionsApiTest
 */
class SmartTransactionsApiTest extends TestCase
{
    const SMART_TRANSACTIONS = 'smart.transactions';

    /**
     * @var SmartTransactionsApi
     */
    private static $api;

    /**
     * Setup before running any test cases
     *
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        Authenticator::authenticateByApplicationUser(...array_values(Globals::OAuthApplicationUserCredentials));

        self::$api = new SmartTransactionsApi();
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
        self::$api = null;
    }

    /**
     * Test case for getting all smart transactions.
     * @throws ApiException
     */
    public function testGetAllSmartTransactions()
    {
        try {
            $smartTransactionsList = self::$api->getAll(10);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($smartTransactionsList);
        $this->assertInstanceOf(SmartTransactionsList::class, $smartTransactionsList);

        foreach ($smartTransactionsList->getData() as $smartTransaction) {
            $this->assertInstanceOf(SmartTransactionsProductModel::class, $smartTransaction);
            $this->assertNotEmpty($smartTransaction->getId());
            $this->assertNotEmpty($smartTransaction->getStatus());
            $this->assertEquals(self::SMART_TRANSACTIONS, $smartTransaction->getObject());
        }

        return $smartTransactionsList;
    }

    /**
     * Test case for getting exactly one smart transaction by provided id.
     *
     * @depends testGetAllSmartTransactions
     * @param $smartTransactionsList
     * @throws ApiException
     */
    public function testGetOneSmartTransaction($smartTransactionsList)
    {
        try {
            $smartTransaction = self::$api->getOne($smartTransactionsList->getData()[0]->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertInstanceOf(SmartTransactionsProductModel::class, $smartTransaction);
        $this->assertNotEmpty($smartTransaction->getId());
        $this->assertNotEmpty($smartTransaction->getStatus());
        $this->assertEquals(self::SMART_TRANSACTIONS, $smartTransaction->getObject());
    }

    /**
     * Test case for adding new smart transaction.
     *
     * @depends testGetAllSmartTransactions
     * @param $smartTransactionsList
     * @return SmartTransactionsProductModel
     * @throws ApiException
     */
    public function testAddNewSmartTransaction($smartTransactionsList)
    {
        $receivedTransaction = $smartTransactionsList->getData()[0];

        $transactionDTO = new SmartTransactionsDTO();
        $transactionDTO->setMerchant($receivedTransaction->getMerchant());
        $transactionDTO->setBasket($receivedTransaction->getBasket());
        $transactionDTO->setBasketInfo($receivedTransaction->getBasketInfo());

        try {
            $createdTransaction = self::$api->addTransaction($transactionDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($createdTransaction);
        $this->assertInstanceOf(SmartTransactionsProductModel::class, $createdTransaction);
        $this->assertEquals(self::SMART_TRANSACTIONS, $createdTransaction->getObject());
        $this->assertNotEmpty($createdTransaction->getId());
        $this->assertEquals($receivedTransaction->getBasket(), $createdTransaction->getBasket());
        $this->assertEquals($receivedTransaction->getBasketInfo(), $createdTransaction->getBasketInfo());

        return $createdTransaction;
    }

    /**
     * Test case for updating smart transaction.
     *
     * @depends testAddNewSmartTransaction
     * @depends testGetAllSmartTransactions
     * @param $createdTransaction
     * @param $smartTransactionsList
     * @throws ApiException
     */
    public function testUpdateSmartTransaction($createdTransaction, $smartTransactionsList)
    {
        $receivedTransaction = $smartTransactionsList->getData()[1];

        $transactionDTO = new SmartTransactionsDTO();

        $transactionDTO->setIdents($createdTransaction->getIdents());
        $transactionDTO->setMerchant($createdTransaction->getMerchant());
        $transactionDTO->setBasket($receivedTransaction->getBasket());
        $transactionDTO->setBasketInfo($receivedTransaction->getBasketInfo());

        try {
            $updatedTransaction = self::$api->updateTransaction($createdTransaction->getId(), $transactionDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($updatedTransaction);
        $this->assertInstanceOf(SmartTransactionsProductModel::class, $updatedTransaction);
        $this->assertEquals(self::SMART_TRANSACTIONS, $updatedTransaction->getObject());
        $this->assertNotEmpty($updatedTransaction->getId());

        $this->assertEquals($receivedTransaction->getBasket(), $updatedTransaction->getBasket());
        $this->assertEquals($receivedTransaction->getBasketInfo(), $updatedTransaction->getBasketInfo());
    }

    /**
     * Test case for preTransaction.
     * @throws ApiException
     */
    public function testPreTransaction()
    {
        try {
            $response = self::$api->getAll(
                1000,
                null,
                null,
                'status:created'
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $smartTransactions = $response->getData();

        if (sizeof($smartTransactions) != 0) {
            $preTransaction = null;

            foreach ($smartTransactions as $smartTransaction) {
                if ($smartTransaction->getIdents()[0] !== null && $smartTransaction->getIdents()[0]->getObject() === 'loyalty.merchantcards') {
                    try {
                        $preTransaction = self::$api->preTransaction($smartTransaction->getId());
                        $this->assertInstanceOf(SmartTransactionsPreTransactionModel::class, $preTransaction);
                        $this->assertTrue(is_numeric($preTransaction->getMissingSum()));
                        break;
                    } catch (ApiException $e) {
                        continue;
                    }
                }
            }
        }
    }

    /**
     * Test case for starting smart transaction.
     * @throws ApiException
     */
    public function testStartSmartTransaction()
    {
        Authenticator::authenticateByDevice(
            Globals::OAuthDeviceCredentials['clientId'],
            Globals::OAuthDeviceCredentials['clientSecret'],
            Globals::OAuthDeviceCredentials['uuid']
        );

        $smartTransactions = null;

        try {
            $response = self::$api->getAll(
                100,
                null,
                null,
                'status:created'
            );

            $smartTransactions = $response->getData();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        foreach ($smartTransactions as $smartTransaction) {
            try {
                $transactionAfterStart = self::$api->startTransaction($smartTransaction->getId(), 'demo');
                $this->assertInstanceOf(SmartTransactionsProductModel::class, $transactionAfterStart);
                $this->assertEquals($smartTransaction->getId(), $transactionAfterStart->getId());
                break;
            } catch (ApiException $e) {
                continue;
            }
        }
    }

    /**
     * Test case for adding smart transaction with mixed basket.
     * This test needs to be prepared manually by giving a valid access token in $dev6AccessToken
     * and configuring the data below.
     *
     * @group ignore
     * @throws ApiException
     */
    public function testSmartTransactionsAddMixedBasket() {
        $dev6AccessToken = '';
        $defaultAccessToken = Configuration::getDefaultConfiguration()->getAccessToken();

        $dev6Host = 'https://connect-dev6.secupay-ag.de/api/v2';
        $defaultHost = Configuration::getDefaultConfiguration()->getHost();

        $SmartTransactionsDTO = new SmartTransactionsDTO();

        $subBasket1 = new SmartTransactionsSubBasketProduct();
        $subBasket1->setId(1);
        $subBasket1->setItemType('article');
        $subBasket1->setQuantity(1);
        $subBasket1->setDesc("Cola");
        $subBasket1->setPriceOne(50);
        $subBasket1->setTax(19);
        $subBasket1->setReferenceId("1001.1");

        $subBasket2 = new SmartTransactionsSubBasketProduct();
        $subBasket2->setId(2);
        $subBasket2->setItemType('article');
        $subBasket2->setQuantity(1);
        $subBasket2->setDesc("Bier");
        $subBasket2->setPriceOne(80);
        $subBasket2->setTax(19);
        $subBasket2->setReferenceId("1001.2");

        $subBasket3 = new SmartTransactionsSubBasketProduct();
        $subBasket3->setItemType('stakeholder_payment');
        $subBasket3->setDesc("stakeholder_1");
        $subBasket3->setSum(10);
        $subBasket3->setContractId("GCR_372E9PEKJAD5VEHGBGSPTUVSKBWBPP");
        $subBasket3->setReferenceId("1001.3");

        $prod1 = new SmartTransactionsBasketProduct();
        $prod1->setId(1);
        $prod1->setItemType("sub_transaction");
        $prod1->setDesc("Position 1 Order something");
        $prod1->setSum(130);
        $prod1->setQuantity(1);
        $prod1->setContractId("GCR_KYG4WA80H0P236QUNUMWWXKQKBWCP0");
        $prod1->setReferenceId("1001");
        $prod1->setSubBasket(array($subBasket1, $subBasket2, $subBasket3));

        $SmartTransactionsBasket = new SmartTransactionsBasket();
        $SmartTransactionsBasket->setProducts(array($prod1));
        $SmartTransactionsDTO->setBasket($SmartTransactionsBasket);

        $SmartTransactionsBasketInfo = new SmartTransactionsBasketInfo();
        $SmartTransactionsBasketInfo->setSum(130);

        if ($dev6AccessToken == null or $dev6AccessToken == '') {
            print_r('access token not set, aborting test');
        } else {
            Configuration::getDefaultConfiguration()->setAccessToken($dev6AccessToken);
            Configuration::getDefaultConfiguration()->setHost($dev6Host);

            $SmartTransactionsDTO->setBasketInfo($SmartTransactionsBasketInfo);

            try {
                $api = new SmartTransactionsApi();
                $createdTransaction = $api->addTransaction($SmartTransactionsDTO);

                self::assertTrue(true);
            } catch (ApiException $e) {
                if ($e->getResponseBody()->code == 4028) {
                    print_r('Can not complete this action, do you have mixed basket enabled ?');
                } else {
                    Configuration::getDefaultConfiguration()->setAccessToken($defaultAccessToken);
                    Configuration::getDefaultConfiguration()->setHost($defaultHost);
                    print_r($e->getResponseBody());
                    throw $e;
                }
            }

            Configuration::getDefaultConfiguration()->setAccessToken($defaultAccessToken);
            Configuration::getDefaultConfiguration()->setHost($defaultHost);
        }
    }
}
