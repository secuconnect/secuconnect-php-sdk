<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Globals;
use Secuconnect\Client\Model\ProductInstanceID;
use Secuconnect\Client\Model\ProductInstanceUID;
use Secuconnect\Client\Model\SmartTransactionsBasket;
use Secuconnect\Client\Model\SmartTransactionsBasketInfo;
use Secuconnect\Client\Model\SmartTransactionsBasketProduct;
use Secuconnect\Client\Model\SmartTransactionsBasketProductGroup;
use Secuconnect\Client\Model\SmartTransactionsCollectionModel;
use Secuconnect\Client\Model\SmartTransactionsDTO;
use Secuconnect\Client\Model\SmartTransactionsIdent;
use Secuconnect\Client\Model\SmartTransactionsList;
use Secuconnect\Client\Model\SmartTransactionsMerchant;
use Secuconnect\Client\Model\SmartTransactionsPrepare;
use Secuconnect\Client\Model\SmartTransactionsPreTransactionModel;
use Secuconnect\Client\Model\SmartTransactionsProductModel;
use Secuconnect\Client\Model\SmartTransactionsSetDeliveryModel;
use Secuconnect\Client\Model\SmartTransactionsShippingModel;
use Secuconnect\Client\Model\SmartTransactionsSubBasketProduct;
use Secuconnect\Client\Model\SmartTransactionsTimeSlot;

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
        parent::setUpBeforeClass();
        Authenticator::authenticateByClientCredentials(...array_values(Globals::OAuthClientCredentials));

        self::$api = new SmartTransactionsApi();

        $SmartTransactionsProductModel = new SmartTransactionsProductModel();
//        $SmartTransactionsProductModel->setObject('smart.transactions');
//        $SmartTransactionsProductModel->setId('STX_3WNFW2NUT2NMD52YD3H584XVMV2GAZ');
        $SmartTransactionsProductModel->setStatus('created');

        $merchant = new SmartTransactionsMerchant();
        $merchant->setObject('general.merchants');
        $merchant->setId('MRC_WVHJQFQ4JNVYNG5B55TYK748ZCHQP8');
        $SmartTransactionsProductModel->setMerchant($merchant);

        $contract = new ProductInstanceUID();
        $contract->setId('GCR_2H69XY35227V2VKP9WRA3SJ0W95RP0');
        $SmartTransactionsProductModel->setContract($contract);

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
        $product1->setGroup(
            [
                new SmartTransactionsBasketProductGroup(
                    [
                        "id" => "2",
                        "desc" => "Brötchen",
                        "level" => 2
                    ]
                )
            ]
        );

        $product2 = new SmartTransactionsBasketProduct();
        $product2->setId(2);
        $product2->setDesc('Brötchen');
        $product2->setArticleNumber('401');
        $product2->setQuantity(1);
        $product2->setPriceOne(32);
        $product2->setTax(1900);
        $product2->setGroup(
            [
                new SmartTransactionsBasketProductGroup(
                    [
                        "id" => "2",
                        "desc" => "Brötchen",
                        "level" => 2
                    ]
                )
            ]
        );

        $product3 = new SmartTransactionsBasketProduct();
        $product3->setId(3);
        $product3->setDesc('Crois.Mohn');
        $product3->setArticleNumber('450');
        $product3->setQuantity(1);
        $product3->setPriceOne(110);
        $product3->setTax(1900);
        $product3->setGroup(
            [
                new SmartTransactionsBasketProductGroup(
                    [
                        "id" => "2",
                        "desc" => "Brötchen",
                        "level" => 2
                    ]
                )
            ]
        );

        $product4 = new SmartTransactionsBasketProduct();
        $product4->setId(4);
        $product4->setDesc('Nutella-Croissant m. Fettglasur');
        $product4->setArticleNumber('434');
        $product4->setQuantity(1);
        $product4->setPriceOne(140);
        $product4->setTax(1900);
        $product4->setGroup(
            [
                new SmartTransactionsBasketProductGroup(
                    [
                        "id" => "2",
                        "desc" => "Brötchen",
                        "level" => 2
                    ]
                )
            ]
        );

        $product5 = new SmartTransactionsBasketProduct();
        $product5->setId(5);
        $product5->setDesc('Croissant');
        $product5->setArticleNumber('432');
        $product5->setQuantity(1);
        $product5->setPriceOne(99);
        $product5->setTax(1900);
        $product5->setGroup(
            [
                new SmartTransactionsBasketProductGroup(
                    [
                        "id" => "2",
                        "desc" => "Brötchen",
                        "level" => 2
                    ]
                )
            ]
        );

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
        parent::tearDownAfterClass();
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
     * Test case for adding new smart transaction.
     *
     * @depends testGetAllSmartTransactions
     * @throws ApiException
     */
    public function testAddNewSmartTransaction()
    {
        $receivedTransaction = self::$SmartTransactionsProductModel;

        $transactionDTO = new SmartTransactionsDTO();
        $transactionDTO->setMerchant(self::$SmartTransactionsProductModel->getMerchant());
        $transactionDTO->setIsDemo(true);
        $transactionDTO->setBasket(self::$SmartTransactionsProductModel->getBasket());
        $transactionDTO->setBasketInfo(self::$SmartTransactionsProductModel->getBasketInfo());
        $transactionDTO->setContract(new ProductInstanceID(['id' => self::$SmartTransactionsProductModel->getContract()->getId()]));

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
        $this->assertEquals($receivedTransaction->getBasketInfo(), $createdTransaction->getBasketInfo());

        self::$SmartTransactionsProductModel->setId($createdTransaction->getId());
        self::$SmartTransactionsProductModel->setObject($createdTransaction->getObject());
    }

    /**
     * Test case for getting exactly one smart transaction by provided id.
     *
     * @depends testAddNewSmartTransaction
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
     * Test case for updating smart transaction.
     *
     * @depends testAddNewSmartTransaction
     * @throws ApiException
     */
    public function testUpdateSmartTransaction()
    {
        $receivedTransaction = self::$SmartTransactionsProductModel;

        $transactionDTO = new SmartTransactionsDTO();

        $transactionDTO->setMerchant($receivedTransaction->getMerchant());
        $transactionDTO->setContract(new ProductInstanceID(['id' => self::$SmartTransactionsProductModel->getContract()->getId()]));

        $price = rand(10, 1000);

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
        $basket->setProducts([$product1]);

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

        $this->assertEquals($basketInfo, $updatedTransaction->getBasketInfo());

        $this->assertCount(1, $updatedTransaction->getBasket()->getProducts());
        $expected_basket = $basket->getProducts()[0];
        $current_basket = $updatedTransaction->getBasket()->getProducts()[0];

        $this->assertEquals($expected_basket->getId(), $current_basket->getId());
        $this->assertEquals($expected_basket->getParent(), $current_basket->getParent());
        $this->assertEquals($expected_basket->getDesc(), $current_basket->getDesc());
        $this->assertEquals($expected_basket->getArticleNumber(), $current_basket->getArticleNumber());
        $this->assertEquals($expected_basket->getSerialNumber(), $current_basket->getSerialNumber());
        $this->assertEquals($expected_basket->getQuantity(), $current_basket->getQuantity());
        $this->assertEquals($expected_basket->getPriceOne(), $current_basket->getPriceOne());
        $this->assertEquals($expected_basket->getSum(), $current_basket->getSum());
        $this->assertEquals($expected_basket->getTax(), $current_basket->getTax());
        $this->assertEquals($expected_basket->getReferenceId(), $current_basket->getReferenceId());
        $this->assertEquals($expected_basket->getContractId(), $current_basket->getContractId());
        $this->assertEquals($expected_basket->getSubBasket(), $current_basket->getSubBasket());
        $this->assertEquals('article', $current_basket->getItemType());
        $this->assertEmpty($current_basket->getEan());
        $this->assertEmpty($current_basket->getGroup());
    }

    /**
     * Test case for adding smart transaction with mixed basket.
     * This test needs to be prepared manually by giving a valid access token in $dev6AccessToken
     * and configuring the data below.
     *
     * @group ignore
     * @throws ApiException
     */
    public function testSmartTransactionsAddMixedBasket()
    {
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
        $subBasket3->setContractId("GCR_2H69XY35227V2VKP9WRA3SJ0W95RP0");
        $subBasket3->setReferenceId("1001.3");

        $prod1 = new SmartTransactionsBasketProduct();
        $prod1->setId(1);
        $prod1->setItemType("sub_transaction");
        $prod1->setDesc("Position 1 Order something");
        $prod1->setSum(130);
        $prod1->setQuantity(1);
        $prod1->setContractId("GCR_3QCX2UMNSE87Y698A5B90GD5MZWHP7");
        $prod1->setReferenceId("1001");
        $prod1->setSubBasket([$subBasket1, $subBasket2, $subBasket3]);

        $SmartTransactionsBasket = new SmartTransactionsBasket();
        $SmartTransactionsBasket->setProducts([$prod1]);
        $SmartTransactionsDTO->setBasket($SmartTransactionsBasket);

        $SmartTransactionsBasketInfo = new SmartTransactionsBasketInfo();
        $SmartTransactionsBasketInfo->setSum(130);

        $SmartTransactionsDTO->setBasketInfo($SmartTransactionsBasketInfo);

        try {
            $api = new SmartTransactionsApi();
            $api->addTransaction($SmartTransactionsDTO);

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

    /**
     * Test case for set shipping to smart transaction.
     *
     * @throws ApiException
     */
    public function testSetShippingTransaction()
    {
        $smartTransactionShipping = new SmartTransactionsShippingModel();
        $smartTransactionShipping->setType('shipping');

        $transactionDTO = new SmartTransactionsDTO();
        $transactionDTO->setMerchant('self::$SmartTransactionsProductModel->getMerchant()');
        $transactionDTO->setIsDemo(true);
        $transactionDTO->setBasket(self::$SmartTransactionsProductModel->getBasket());
        $transactionDTO->setBasketInfo(self::$SmartTransactionsProductModel->getBasketInfo());
        $transactionDTO->setDeliveryOptions($smartTransactionShipping);
        $transactionDTO->setContract(new ProductInstanceID(['id' => self::$SmartTransactionsProductModel->getContract()->getId()]));
        $transactionDTO->setIntent('order');

        //create payment customer
        try {
            $paymentCustomerApi = new PaymentCustomersApi();
            $response = $paymentCustomerApi->paymentCustomersPost(SecuconnectObjects::getInstance()->createPaymentCustomersDTO());
            $customerID = $response->getId();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        //create payment container
        try {
            $paymentContainerApi = new PaymentContainersApi();
            $response = $paymentContainerApi->paymentContainersPost(SecuconnectObjects::getInstance()->createPaymentContainersDTO());
            $containerId = $response->getId();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        // add transaction
        try {
            $smartTransaction = self::$api->addTransaction($transactionDTO);
            $this->assertEquals('shipping', $smartTransaction->getDeliveryOptions()->getType());

        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($smartTransaction->getId());

        //add container and customer for prepare
        $customerUid = new ProductInstanceUID();
        $customerUid->setObject('payment.customers');
        $customerUid->setId($customerID);

        $containerUid = new ProductInstanceUID();
        $containerUid->setObject('payment.containers');
        $containerUid->setId($containerId);

        $smartTransactionPrepareModel = new SmartTransactionsPrepare();
        $smartTransactionPrepareModel->setCustomer($customerUid);
        $smartTransactionPrepareModel->setContainer($containerUid);
        $smartTransactionPrepareModel->getIsDemo();

        try {
            $prepare_response = self::$api->prepare($smartTransaction->getId(), 'debit', $smartTransactionPrepareModel);
            $this->assertInstanceOf(SmartTransactionsProductModel::class, $prepare_response);

        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        try {
            $transactionAfterStart = self::$api->startTransaction($smartTransaction->getId(), '', NULL);
            $this->assertInstanceOf(SmartTransactionsProductModel::class, $transactionAfterStart);

        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $smartTransactionShipping = new SmartTransactionsShippingModel();
        $smartTransactionShipping->setShippedAt('2020-07-17T12:18:18+02:00');
        $smartTransactionShipping->setShippedBy('DHL');
        $smartTransactionShipping->setTrackingCode('1234567');
        $smartTransactionShipping->setInvoiceNumber('12345');

        //set delivery
        try {
            $delivery = new SmartTransactionsSetDeliveryModel();
            $delivery->setDeliveryOptions($smartTransactionShipping);

            $smartTransaction = self::$api->setDelivery($smartTransaction->getId(), $delivery);
            $this->assertInstanceOf(SmartTransactionsShippingModel::class, $smartTransaction->getDeliveryOptions());

            /**
             * @var SmartTransactionsShippingModel $delivery_options
             */
            $delivery_options = $smartTransaction->getDeliveryOptions();
            $this->assertEquals('2020-07-17T12:18:18+02:00', $delivery_options->getShippedAt());
            $this->assertEquals('DHL', $delivery_options->getShippedBy());
            $this->assertEquals('1234567', $delivery_options->getTrackingCode());
            $this->assertEquals('12345', $delivery_options->getInvoiceNumber());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

    }

    /**
     * Test case for set delivery date to a smart transaction.
     * @throws ApiException
     */
    public function testSetCollectionTransaction()
    {
        //smart transactions parameters
        $SmartTransactionSceduledSlot = new SmartTransactionsTimeSlot();
        $SmartTransactionSceduledSlot->setStartDate('2020-07-18T12:18:18+02:00');
        $SmartTransactionSceduledSlot->setEndDate('2020-07-20T12:18:18+02:00');

        $smartTransactionShipping = new SmartTransactionsCollectionModel();
        $smartTransactionShipping->setType('collection');
        $smartTransactionShipping->setScheduledSlot($SmartTransactionSceduledSlot);
        $smartTransactionShipping->setStoreId('STO_DSBK8MVZQUJW5VY4P03HHFD8G8XBOM');

        $transactionDTO = new SmartTransactionsDTO();
        $transactionDTO->setMerchant(self::$SmartTransactionsProductModel->getMerchant());
        $transactionDTO->setIsDemo(true);
        $transactionDTO->setBasket(self::$SmartTransactionsProductModel->getBasket());
        $transactionDTO->setBasketInfo(self::$SmartTransactionsProductModel->getBasketInfo());
        $transactionDTO->setDeliveryOptions($smartTransactionShipping);
        $transactionDTO->setContract(new ProductInstanceID(['id' => self::$SmartTransactionsProductModel->getContract()->getId()]));
        $transactionDTO->setIntent('order');

        //create payment customer
        try {
            $paymentCustomerApi = new PaymentCustomersApi();
            $response = $paymentCustomerApi->paymentCustomersPost(SecuconnectObjects::getInstance()->createPaymentCustomersDTO());
            $customerID = $response->getId();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        //create payment container
        try {
            $paymentContainerApi = new PaymentContainersApi();
            $response = $paymentContainerApi->paymentContainersPost(SecuconnectObjects::getInstance()->createPaymentContainersDTO());
            $containerId = $response->getId();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        //add transaction
        try {
            $smartTransaction = self::$api->addTransaction($transactionDTO);

            $this->assertInstanceOf(SmartTransactionsCollectionModel::class, $smartTransaction->getDeliveryOptions());

            /**
             * @var SmartTransactionsCollectionModel $delivery_options
             */
            $delivery_options = $smartTransaction->getDeliveryOptions();
            $this->assertEquals('STO_DSBK8MVZQUJW5VY4P03HHFD8G8XBOM', $delivery_options->getStoreId());
            $this->assertEquals('collection', $delivery_options->getType());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($smartTransaction->getId());

        //add container and customer for prepare
        $customerUid = new ProductInstanceUID();
        $customerUid->setObject('payment.customers');
        $customerUid->setId($customerID);

        $containerUid = new ProductInstanceUID();
        $containerUid->setObject('payment.containers');
        $containerUid->setId($containerId);

        $smartTransactionPrepareModel = new SmartTransactionsPrepare();
        $smartTransactionPrepareModel->setCustomer($customerUid);
        $smartTransactionPrepareModel->setContainer($containerUid);

        try {
            $prepare_response = self::$api->prepare($smartTransaction->getId(), 'debit', $smartTransactionPrepareModel);
            $this->assertInstanceOf(SmartTransactionsProductModel::class, $prepare_response);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        //start transaction
        try {
            $start_response = self::$api->startTransaction($smartTransaction->getId(), '', null);
            $this->assertInstanceOf(SmartTransactionsProductModel::class, $start_response);
            $this->assertInstanceOf(SmartTransactionsCollectionModel::class, $start_response->getDeliveryOptions());

            /**
             * @var SmartTransactionsCollectionModel $delivery_options
             */
            $delivery_options = $start_response->getDeliveryOptions();
            $this->assertNotEmpty($delivery_options->getCode());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        //set delivery
        try {
            $smartTransactionCollection = new SmartTransactionsCollectionModel();
            $smartTransactionCollection->setDeliveredAt('2020-07-19T12:18:18+02:00');

            $delivery = new SmartTransactionsSetDeliveryModel();
            $delivery->setDeliveryOptions($smartTransactionCollection);

            $set_delivery_response = self::$api->setDelivery($start_response->getId(), $delivery);

            $this->assertInstanceOf(SmartTransactionsCollectionModel::class, $set_delivery_response->getDeliveryOptions());

            /**
             * @var SmartTransactionsCollectionModel $delivery_options
             */
            $delivery_options = $set_delivery_response->getDeliveryOptions();
            $this->assertEquals('2020-07-19T12:18:18+02:00', $delivery_options->getDeliveredAt());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
    }

    /**
     * Test case for preTransaction.
     *
     * @throws ApiException
     */
    public function testPreTransaction()
    {
        $this->markTestSkipped();
        Authenticator::authenticateByRefreshToken(...array_values(Globals::OAuthRefreshCredentials));

        self::$api = new SmartTransactionsApi();

        $transactionDTO = new SmartTransactionsDTO();
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
        $transactionDTO->setBasket(self::$SmartTransactionsProductModel->getBasket());
        $transactionDTO->setBasketInfo(self::$SmartTransactionsProductModel->getBasketInfo());
        $transactionDTO->setMerchant(self::$SmartTransactionsProductModel->getMerchant());

        try {
            $smartTransaction = self::$api->addTransaction($transactionDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }


        try {
            $transactionAfterStart = self::$api->startTransaction($smartTransaction->getId(), 'demo', NULL);
            $this->assertInstanceOf(SmartTransactionsProductModel::class, $transactionAfterStart);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
    }

}
