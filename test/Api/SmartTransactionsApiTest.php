<?php

namespace Secuconnect\Client;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\Api\SmartTransactionsApi;
use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Model\SmartTransactionsDTO;
use Secuconnect\Client\Model\SmartTransactionsList;
use Secuconnect\Client\Model\SmartTransactionsPreTransactionModel;
use Secuconnect\Client\Model\SmartTransactionsProductModel;

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
        Authenticator::authenticateByApplicationUser(
            Globals::OAuthApplicationUserCredentials['clientId'],
            Globals::OAuthApplicationUserCredentials['clientSecret'],
            Globals::OAuthApplicationUserCredentials['username'],
            Globals::OAuthApplicationUserCredentials['password'],
            Globals::OAuthApplicationUserCredentials['device'],
            Globals::OAuthApplicationUserCredentials['deviceName']
        );

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
}
