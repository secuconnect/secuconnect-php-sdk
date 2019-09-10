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
use Secuconnect\Client\Model\SmartTransactionsMerchant;
use Secuconnect\Client\Model\ProductInstanceUID;
use Secuconnect\Client\Model\SmartTransactionsBasketProductGroup;
use Secuconnect\Client\Model\SmartTransactionsIdent;

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
     * @var SmartTransactionsProductModel
     */
    private static $SmartTransactionsProductModel;

    /**
     * Setup before running any test cases
     *
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        Authenticator::authenticateByRefreshToken(...array_values(Globals::OAuthRefreshCredentials));

        self::$api = new SmartTransactionsApi();
        
        $SmartTransactionsProductModel = new SmartTransactionsProductModel();
        $SmartTransactionsProductModel->setObject('smart.transactions');
        $SmartTransactionsProductModel->setId('STX_WK634H24D2MQDX9Y52TSD52XKSJVAW');
        $SmartTransactionsProductModel->setStatus('created');
        
        $merchant = new SmartTransactionsMerchant();
        $merchant->setObject('general.merchants');
        $merchant->setId('MRC_Z8RAAFDVDT6AU5KZ4KX2NHH5P4CKP7');
        $SmartTransactionsProductModel->setMerchant($merchant);

        $SmartTransactionsProductModel->setMerchantRef('DemoMerchantRef');
        $SmartTransactionsProductModel->setTransactionRef('201610141523-999-994-45');
        
        $SmartTransactionsProductModel->setCreated('2018-07-17T12:18:18+02:00');
        $SmartTransactionsProductModel->setUpdated('2018-07-17T12:18:19+02:00');
        
        $basketInfo = new SmartTransactionsBasketInfo();
        $basketInfo->setSum(420);
        $basketInfo->setCurrency('EUR');
        $SmartTransactionsProductModel->setBasketInfo($basketInfo);
        
        $basket = new SmartTransactionsBasket();

        $product1 = new SmartTransactionsBasketProduct();
        $product1->setId(1);
        $product1->setDesc('Meisterbrötchen');
        $product1->setArticleNumber('418');
        $product1->setQuantity(1);
        $product1->setPriceOne(39);
        $product1->setTax(1900);
        $product1->setGroup([new SmartTransactionsBasketProductGroup([
            "id" => "2",
            "desc" => "Brötchen",
            "level" => 2
        ])]);

        $product2 = new SmartTransactionsBasketProduct();
        $product2->setId(2);
        $product2->setDesc('Brötchen');
        $product2->setArticleNumber('401');
        $product2->setQuantity(1);
        $product2->setPriceOne(32);
        $product2->setTax(1900);
        $product2->setGroup([new SmartTransactionsBasketProductGroup([
            "id" => "2",
            "desc" => "Brötchen",
            "level" => 2
        ])]);

        $product3 = new SmartTransactionsBasketProduct();
        $product3->setId(3);
        $product3->setDesc('Crois.Mohn');
        $product3->setArticleNumber('450');
        $product3->setQuantity(1);
        $product3->setPriceOne(110);
        $product3->setTax(1900);
        $product3->setGroup([new SmartTransactionsBasketProductGroup([
            "id" => "2",
            "desc" => "Brötchen",
            "level" => 2
        ])]);

        $product4 = new SmartTransactionsBasketProduct();
        $product4->setId(4);
        $product4->setDesc('Nutella-Croissant m. Fettglasur');
        $product4->setArticleNumber('434');
        $product4->setQuantity(1);
        $product4->setPriceOne(140);
        $product4->setTax(1900);
        $product4->setGroup([new SmartTransactionsBasketProductGroup([
            "id" => "2",
            "desc" => "Brötchen",
            "level" => 2
        ])]);

        $product5 = new SmartTransactionsBasketProduct();
        $product5->setId(5);
        $product5->setDesc('Croissant');
        $product5->setArticleNumber('432');
        $product5->setQuantity(1);
        $product5->setPriceOne(99);
        $product5->setTax(1900);
        $product5->setGroup([new SmartTransactionsBasketProductGroup([
            "id" => "2",
            "desc" => "Brötchen",
            "level" => 2
        ])]);

        $basket->setProducts([$product1, $product2, $product3, $product4, $product5]);
        $SmartTransactionsProductModel->setBasket($basket);
        
        self::$SmartTransactionsProductModel = $SmartTransactionsProductModel;
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
    }

    /**
     * Test case for getting exactly one smart transaction by provided id.
     *
     * @depends testGetAllSmartTransactions
     * @param $smartTransactionsList
     * @throws ApiException
     */
    public function testGetOneSmartTransaction()
    {
        try {
            $smartTransaction = self::$api->getOne(self::$SmartTransactionsProductModel->getId());
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
    public function testAddNewSmartTransaction()
    {
        $receivedTransaction = self::$SmartTransactionsProductModel;

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
//        $this->assertEquals($receivedTransaction->getBasket(), $createdTransaction->getBasket());
        $this->assertEquals($receivedTransaction->getBasketInfo(), $createdTransaction->getBasketInfo());
    }

    /**
     * Test case for updating smart transaction.
     *
     * @throws ApiException
     */
    public function testUpdateSmartTransaction()
    {
        $receivedTransaction = self::$SmartTransactionsProductModel;

        $transactionDTO = new SmartTransactionsDTO();

        $transactionDTO->setMerchant($receivedTransaction->getMerchant());
        
        $price = rand(10,1000);
        
        $basketInfo = new SmartTransactionsBasketInfo();
        $basketInfo->setSum($price);
        $basketInfo->setCurrency('EUR');
        
        
        $basket = new SmartTransactionsBasket();
        $product1 = new SmartTransactionsBasketProduct();
        $product1->setId(1);
        $product1->setDesc('Roggenbärchen');
        $product1->setArticleNumber('433');
        $product1->setQuantity(1);
        $product1->setPriceOne($price);
        $product1->setTax(700);
        $basket->setProducts(array($product1));
        
        $transactionDTO->setBasket($basket);
        $transactionDTO->setBasketInfo($basketInfo);

        try {
            $updatedTransaction = self::$api->updateTransaction($receivedTransaction->getId(), $transactionDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($updatedTransaction);
        $this->assertInstanceOf(SmartTransactionsProductModel::class, $updatedTransaction);
        $this->assertEquals(self::SMART_TRANSACTIONS, $updatedTransaction->getObject());
        $this->assertNotEmpty($updatedTransaction->getId());

//        $this->assertEquals($receivedTransaction->getBasket(), $updatedTransaction->getBasket());
        $this->assertEquals($basketInfo, $updatedTransaction->getBasketInfo());
    }

    /**
     * Test case for preTransaction.
     * @throws ApiException
     */
    public function testPreTransaction()
    {
        $transactionDTO = new SmartTransactionsDTO();
        $transactionDTO->setMerchant(self::$SmartTransactionsProductModel->getMerchant());
        $transactionDTO->setBasket(self::$SmartTransactionsProductModel->getBasket());
        $transactionDTO->setBasketInfo(self::$SmartTransactionsProductModel->getBasketInfo());
        $SmartTransactionsIdent = new SmartTransactionsIdent();
        $SmartTransactionsIdent->setType('card');
        $SmartTransactionsIdent->setValue('9276004427483018');
        $transactionDTO->setIdents([$SmartTransactionsIdent]);
        
        try {
            $smartTransaction = self::$api->addTransaction($transactionDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        try {
            $preTransaction = self::$api->preTransaction($smartTransaction->getId());
            $this->assertInstanceOf(SmartTransactionsPreTransactionModel::class, $preTransaction);
            $this->assertTrue(is_numeric($preTransaction->getMissingSum()));

        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
    }

    /**
     * Test case for starting smart transaction.
     * @throws ApiException
     */
    public function testStartSmartTransaction()
    {
        $transactionDTO = new SmartTransactionsDTO();
        $transactionDTO->setMerchant(self::$SmartTransactionsProductModel->getMerchant());
        $transactionDTO->setBasket(self::$SmartTransactionsProductModel->getBasket());
        $transactionDTO->setBasketInfo(self::$SmartTransactionsProductModel->getBasketInfo());

        try {
            $smartTransaction = self::$api->addTransaction($transactionDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        

        try {
            $transactionAfterStart = self::$api->startTransaction($smartTransaction->getId(), 'demo');
            $this->assertInstanceOf(SmartTransactionsProductModel::class, $transactionAfterStart);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
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

        $SmartTransactionsDTO->setBasketInfo($SmartTransactionsBasketInfo);

        try {
            $api = new SmartTransactionsApi();
            $createdTransaction = $api->addTransaction($SmartTransactionsDTO);

            self::assertTrue(true);
        } catch (ApiException $e) {
            if ($e->getResponseBody()->code == 4028) {
                print_r('Can not complete this action, do you have mixed basket enabled ?');
            } else {
                print_r($e->getResponseBody());
                throw $e;
            }
        }

    }
}
