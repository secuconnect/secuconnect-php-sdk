<?php

namespace Secuconnect\Client\Api;

use DateTime;
use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\Address;
use Secuconnect\Client\Model\Contact;
use Secuconnect\Client\Model\LoyaltyCardgroupsProductModel;
use Secuconnect\Client\Model\LoyaltyCardsProductModel;
use Secuconnect\Client\Model\LoyaltyCustomersDTO;
use Secuconnect\Client\Model\LoyaltyCustomersProductModel;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard;
use Secuconnect\Client\Model\LoyaltyMerchantcardsList;
use Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel;
use Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel;
use Secuconnect\Client\Model\ProductInstanceUID;
use Secuconnect\Client\Model\VirtualTerminalDataModel;

/**
 * Class LoyaltyMerchantcardsApiTest
 */
class LoyaltyMerchantcardsApiTest extends TestCase
{
    /**
     * @var LoyaltyMerchantcardsApi
     */
    private static $api;

    /**
     * @var SecuconnectObjects
     */
    private static $instance;

    /**
     * @var LoyaltyMerchantcardsProductModel
     */
    private static $LoyaltyMerchantcardsProductModel;

    /**
     * @var string
     */
    private static $merchantId;

    /**
     * @var string
     */
    private static $cardId;

    /**
     * @var string
     */
    private static $cardGroupId;

    /**
     * @var LoyaltyMerchantcardsDTONewPasscode
     */
    private static $newPasscode;

    /**
     * Setup before running any test cases
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new LoyaltyMerchantcardsApi();
        $merchantId = 'MCD_WYMK74ZT52YATUBMA9EE2N4SKQRJAP';
        $cardnumber = 'CRD_3Z6YRPAFZHJT802M8GEWPWP9H7WAP5';
        $passcode = rand(1000, 9999);
        $LoyaltyMerchantcardsProductModel = new LoyaltyMerchantcardsProductModel();
        $LoyaltyMerchantcardsProductModel->setObject('loyalty.merchantcards');
        $LoyaltyMerchantcardsProductModel->setId($merchantId);

        $card = new LoyaltyCardsProductModel();
        $card->setObject('loyalty.cards');
        $card->setId($cardnumber);
        $card->setCardnumber('9276004428948419');
        $card->setCreated('2015-03-02T12:07:15+01:00');
        $LoyaltyMerchantcardsProductModel->setCard($card);

        $merchant = new ProductInstanceUID();
        $merchant->setObject('general.merchants');
        $merchant->setId('MRC_Z8RAAFDVDT6AU5KZ4KX2NHH5P4CKP7');
        $LoyaltyMerchantcardsProductModel->setMerchant($merchant);
        $LoyaltyMerchantcardsProductModel->setCreatedForMerchant($merchant);

        $cardgroup = new LoyaltyCardgroupsProductModel();
        $cardgroup->setObject('loyalty.cardgroups');
        $cardgroup->setId('CRG_6C8AV6FQBFE0WFSHZT4JH4R2FE4CR6');

        $cardgroup->setDisplayName('Bäckerei Card');
        $cardgroup->setDisplayNameRaw('Bäckerei Card');
        $cardgroup->setStockWarnLimit(0);
        $cardgroup->setPicture('https://connect.secucard.com/ds_g/8e79737df1e2513db48908b342c3cc436edf501a');
        $LoyaltyMerchantcardsProductModel->setCardgroup($cardgroup);

        $store = new ProductInstanceUID();
        $store->setObject('general.stores');
        $store->setId('STO_3SGKT879YSRC27NEJSG6BJ85P4CKP8');
        $LoyaltyMerchantcardsProductModel->setCreatedForStore($store);

        $LoyaltyCustomersProductModel = new LoyaltyCustomersProductModel();
        $LoyaltyCustomersProductModel->setObject('loyalty.customers');
        $LoyaltyCustomersProductModel->setId('CUS_WAH0VCXT62YATUBMB5GQGJPRR3QTA8');
        $contact = new Contact();
        $contact->setForename('Steffen');
        $contact->setSurname('Testkarte 2');
        $contact->setSalutation('Herr');
        $LoyaltyCustomersProductModel->setContact($contact);
        $LoyaltyMerchantcardsProductModel->setCustomer($LoyaltyCustomersProductModel);

        $LoyaltyMerchantcardsProductModel->setBalance(3374);
        $LoyaltyMerchantcardsProductModel->setPoints(0);
        $LoyaltyMerchantcardsProductModel->setBonusBalance(43);
        $LoyaltyMerchantcardsProductModel->setCashBalance(3331);
        $LoyaltyMerchantcardsProductModel->setStockStatus('inactive');
        $LoyaltyMerchantcardsProductModel->setLockStatus('unlocked');
        $LoyaltyMerchantcardsProductModel->setIsBaseCard(true);
        $LoyaltyMerchantcardsProductModel->setPasscode(1);
        $LoyaltyMerchantcardsProductModel->setLastUsage('2017-05-31T06:06:18+02:00');
        $LoyaltyMerchantcardsProductModel->setLastCharge('2017-05-31T06:06:18+02:00');

        self::$LoyaltyMerchantcardsProductModel = $LoyaltyMerchantcardsProductModel;

        $newPasscode = new LoyaltyMerchantcardsDTONewPasscode;
        $newPasscode->setMerchant($LoyaltyMerchantcardsProductModel->getMerchant()->getId());
        $newPasscode->setCardnumber($LoyaltyMerchantcardsProductModel->getCard()->getCardnumber());
        $newPasscode->setPasscode($passcode);

        self::$newPasscode = $newPasscode;
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
        self::$instance = null;
        self::$api = null;
        self::$LoyaltyMerchantcardsProductModel = null;
        self::$merchantId = null;
        self::$cardId = null;
        self::$cardGroupId = null;
        self::$newPasscode = null;
        parent::tearDownAfterClass();
    }

    /**
     * @return array
     */
    public function prepareCustomerData()
    {
        $address = new Address();
        $address->setStreet('Example Street');
        $address->setStreetNumber('6a');
        $address->setPostalCode('01234');
        $address->setCity('Examplecity');
        $address->setCountry('Germany');

        $dob = new DateTime();
        $dob->setDate(1904, 1, 3);

        $loyaltyCustomerContact = new Contact();
        $loyaltyCustomerContact->setForename('Gregor');
        $loyaltyCustomerContact->setSurname('Smith');
        $loyaltyCustomerContact->setCompanyname('Example Inc.');
        $loyaltyCustomerContact->setSalutation('Mr.');
        $loyaltyCustomerContact->setGender('m');
        $loyaltyCustomerContact->setTitle('Dr.');
        $loyaltyCustomerContact->setDob($dob);
        $loyaltyCustomerContact->setUrlWebsite('example.com');
        $loyaltyCustomerContact->setBirthplace('New Examplecity');
        $loyaltyCustomerContact->setNationality('german');
        $loyaltyCustomerContact->setEmail('example@example.com');
        $loyaltyCustomerContact->setPhone('0049123456789');
        $loyaltyCustomerContact->setMobile('0049987654321');
        $loyaltyCustomerContact->setFax('0049987456789');
        $loyaltyCustomerContact->setAddress($address);

        $loyaltyCustomer = new LoyaltyCustomersDTO();
        $loyaltyCustomer->setMerchantContact($loyaltyCustomerContact);

        return [
            'contact' => $loyaltyCustomerContact,
            'customer' => $loyaltyCustomer
        ];
    }

    /**
     * Test case for getting a list of Loyalty Merchant Cards instances for the specific Loyalty Card number.
     * @throws ApiException
     */
    public function testGetLoyaltyMerchantCardsForTheSpecificLoyaltyCardNumber()
    {
        try {
            $response = self::$api->getAll(
                null,
                null,
                null,
                "card.cardnumber:" . SecuconnectObjects::LOYALTY_CARD['number']
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(LoyaltyMerchantcardsList::class, $response);

        if ($response->getCount() < 1) {
            $this->assertEmpty($response->getData());
            $this->assertEquals(0, sizeof($response->getData()));
        } else {
            foreach ($response->getData() as $loyaltyMerchantcardsProductModel) {
                $merchant = $loyaltyMerchantcardsProductModel->getMerchant();
                $createdForMerchant = $loyaltyMerchantcardsProductModel->getCreatedForMerchant();
                $card = $loyaltyMerchantcardsProductModel->getCard();
                $cardGroup = $loyaltyMerchantcardsProductModel->getCardgroup();

                $this->assertEquals('loyalty.merchantcards', $loyaltyMerchantcardsProductModel->getObject());
                $this->assertNotEmpty($loyaltyMerchantcardsProductModel->getId());
                $this->assertInstanceOf(ProductInstanceUID::class, $merchant);
                $this->assertEquals('general.merchants', $merchant->getObject());
                $this->assertNotEmpty($merchant->getId());
                $this->assertInstanceOf(ProductInstanceUID::class, $createdForMerchant);
                $this->assertEquals('general.merchants', $createdForMerchant->getObject());
                $this->assertNotEmpty($createdForMerchant->getId());
                $this->assertInstanceOf(LoyaltyCardsProductModel::class, $card);
                $this->assertEquals('loyalty.cards', $card->getObject());
                $this->assertNotEmpty($card->getId());
                $this->assertEquals(SecuconnectObjects::LOYALTY_CARD['number'], $card->getCardnumber());
                $this->assertNotEmpty($card->getCreated());
                $this->assertTrue(is_bool($loyaltyMerchantcardsProductModel->getIsBaseCard()));
                $this->assertEquals('loyalty.cardgroups', $cardGroup->getObject());
                $this->assertNotEmpty($cardGroup->getId());
                $this->assertNotEmpty($cardGroup->getDisplayName());
                $this->assertNotEmpty($cardGroup->getDisplayNameRaw());
                $this->assertEquals(0, $cardGroup->getStockWarnLimit());
                $this->assertNotEmpty($cardGroup->getPicture());
                $this->assertTrue(is_numeric($loyaltyMerchantcardsProductModel->getPoints()));
                $this->assertTrue(is_numeric($loyaltyMerchantcardsProductModel->getCashBalance()));
                $this->assertTrue(is_numeric($loyaltyMerchantcardsProductModel->getBonusBalance()));
                $this->assertTrue(is_numeric($loyaltyMerchantcardsProductModel->getBalance()));
                $this->assertTrue(
                    $loyaltyMerchantcardsProductModel->getLockStatus() === 'locked' ||
                    $loyaltyMerchantcardsProductModel->getLockStatus() === 'unlocked'
                );
                $this->assertTrue(is_numeric($loyaltyMerchantcardsProductModel->getPasscode()));
            }

            self::$merchantId = $response->getData()[0]->getMerchant()->getId();
            self::$cardId = $response->getData()[0]->getCard()->getId();
            self::$cardGroupId = $response->getData()[0]->getCardgroup()->getId();
        }
    }

    /**
     * Test case for getting the Loyalty Merchant Card instance for the specified id.
     * @throws ApiException
     */
    public function testGetOneLoyaltyMerchantCardForTheSpecificId()
    {
        try {
            $response = self::$api->getAll(
                1,
                null,
                null,
                null
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        try {
            $responseOne = self::$api->getOne($response->getData()[0]->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($responseOne);
        $this->assertInstanceOf(LoyaltyMerchantcardsProductModel::class, $responseOne);
        $this->assertEquals($response->getData()[0], $responseOne);
    }

    /**
     * Test case for checking lock status then locking and unlocking the Loyalty Merchant Card instance for the specified id.
     * @throws ApiException
     */
    public function testCheckLockStatusThenLockAndUnlockOrUnlockAndLockLoyaltyMerchantCard()
    {
        $merchantCardId = self::$LoyaltyMerchantcardsProductModel->getId();

        try {
            $response = self::$api->getLock($merchantCardId);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $currentLockStatus = $response->getLockStatus();

        $lockData = new LoyaltyMerchantcardsDTOLock();
        $lockData->setReason(1);
        $lockData->setNote('Some note.');

        if ($currentLockStatus === 'locked') {
            try {
                $response = self::$api->unlock($merchantCardId, $lockData);
            } catch (ApiException $e) {
                print_r($e->getResponseBody());
                throw $e;
            }

            $this->assertEquals('unlocked', $response->getLockStatus());

            try {
                $response = self::$api->lock($merchantCardId, $lockData);
            } catch (ApiException $e) {
                print_r($e->getResponseBody());
                throw $e;
            }

            $this->assertEquals('locked', $response->getLockStatus());

            try {
                $response = self::$api->getLock($merchantCardId);
            } catch (ApiException $e) {
                print_r($e->getResponseBody());
                throw $e;
            }

            $this->assertEquals($lockData->getReason(), $response->getReason());
            $this->assertEquals($lockData->getNote(), $response->getNote());
        } elseif ($currentLockStatus === 'unlocked') {
            try {
                $response = self::$api->lock($merchantCardId, $lockData);
            } catch (ApiException $e) {
                print_r($e->getResponseBody());
                throw $e;
            }

            $this->assertEquals('locked', $response->getLockStatus());

            try {
                $response = self::$api->getLock($merchantCardId);
            } catch (ApiException $e) {
                print_r($e->getResponseBody());
                throw $e;
            }

            $this->assertEquals($lockData->getReason(), $response->getReason());
            $this->assertEquals($lockData->getNote(), $response->getNote());

            try {
                $response = self::$api->unlock($merchantCardId, $lockData);
            } catch (ApiException $e) {
                print_r($e->getResponseBody());
                throw $e;
            }

            $this->assertEquals('unlocked', $response->getLockStatus());
        }
    }

    /**
     * Test case for updating Loyalty Card Group of Loyalty Merchant Card for specific Loyalty Merchant Card id.
     * @throws ApiException
     */
    public function testUpdateLoyaltyCardGroupOfLoyaltyMerchantCard()
    {
        $this->markTestIncomplete('Needs to be fixed.');

        $LoyaltyMerchantcardsProductModel = self::$LoyaltyMerchantcardsProductModel;
        $merchantCardId = $LoyaltyMerchantcardsProductModel->getId();
        $newLoyaltyCardGroupId = $LoyaltyMerchantcardsProductModel->getCardgroup()->getId();

        try {
            $response = self::$api->updateCardGroupOfMerchantCard(
                $merchantCardId,
                $newLoyaltyCardGroupId
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        $this->assertEquals($newLoyaltyCardGroupId, $response->getCardgroup()->getId());
    }

    /**
     * Test case of failing updating Loyalty Merchant Card Card Group for specific Loyalty Merchant Card id.
     * @throws ApiException
     */
    public function testUpdateLoyaltyCardGroupOfLoyaltyMerchantCardFail()
    {
        try {
            self::$api->updateCardGroupOfMerchantCard(
                "MCD_MPXK6MP3J2N0W2PMTGX3ZMNFE67QAU",
                "CRG_4TURDGQC9UGKX2TUU64EWG7Q3BT4TJ"
            );
            $this->fail('This method should throw ApiException');
        } catch (ApiException $e) {
            $response = $e->getResponseBody();

            $this->expectException(ApiException::class);
            $this->assertEquals('error', $response->status);
            $this->assertEquals('ProductInternalException', $response->error);
            $this->assertNotEmpty($response->error_details);
            $this->assertNotEmpty($response->error_user);
            $this->assertNotEmpty($response->supportId);

            throw $e;
        }
    }

    /**
     * Test case for getting Virtual Terminal data for General Merchant (correct relation between Loyalty Merchant Card and General Merchant).
     * @throws ApiException
     */
    public function testGetVirtualTerminalDataForCorrectRelation()
    {
        $merchantCardId = self::$LoyaltyMerchantcardsProductModel->getId();
        $merchantId = self::$LoyaltyMerchantcardsProductModel->getMerchant()->getId();

        $response = self::$api->getVirtualTerminalData(
            $merchantCardId,
            $merchantId
        );

        if (empty($response->getDisabled())) {
            $this->assertInstanceOf(VirtualTerminalDataModel::class, $response);
            $this->assertNotEmpty($response->getStore()['name']);
            $this->assertNotEmpty($response->getTid());
            $this->assertTrue(is_array($response->getActions()));
            $this->assertNotEmpty($response->getActions());
            $this->assertTrue(is_numeric($response->getGiftTerminal()));
            $this->assertTrue(is_numeric($response->getAmountSplitEnabled()));
        } else {
            $this->assertEquals(1, $response->getDisabled());
        }
    }


    /**
     * Test case for setting new Loyalty Customer for a specific Loyalty Merchant Card id.
     * @throws ApiException
     */
    public function testSetLoyaltyCustomerForASpecificLoyaltyMerchantCard()
    {
        //TO DO dont do the getAll just have variable MCD_ and CUS_
        $currentLoyaltyMerchantCardId = self::$LoyaltyMerchantcardsProductModel->getId();
        $currentLoyaltyCustomer = self::$LoyaltyMerchantcardsProductModel->getCustomer();

        self::$api = new LoyaltyCustomersApi();

        try {
            $response = self::$api->getAll(100);
        } catch (ApiException $e) {
            throw $e;
        }

        $newLoyaltyCustomer = null;
        $loyaltyCustomers = $response->getData();

        if (sizeof($loyaltyCustomers) > 1) {
            foreach ($loyaltyCustomers as $loyaltyCustomer) {
                if ($currentLoyaltyCustomer->getId() !== $loyaltyCustomer->getId()) {
                    $newLoyaltyCustomer = $loyaltyCustomer;
                    break;
                }
            }
            self::$api = new LoyaltyMerchantcardsApi();

            try {
                $response = self::$api->setCustomer(
                    $currentLoyaltyMerchantCardId,
                    $newLoyaltyCustomer->getId()
                );
            } catch (ApiException $e) {
                throw $e;
            }

            $this->assertInstanceOf(LoyaltyMerchantcardsProductModel::class, $response);
            $this->assertNotEquals($currentLoyaltyCustomer, $response->getCustomer()->getId());
            $this->assertEquals($newLoyaltyCustomer->getContact(), $response->getCustomer()->getContact());
        }
    }

    /**
     * Test case for getting one Loyalty Merchant Card without assigned Loyalty Customer.
     * @throws ApiException
     */
    public function testGetLoyaltyMerchantCardWithoutLoyaltyCustomer()
    {
        try {
            $response = self::$api->getAll(
                1,
                null,
                null,
                "!customer.object:loyalty.customers"
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $loyaltyMerchantCard = $response->getData()[0];

        $this->assertEmpty($loyaltyMerchantCard->getCustomer());
    }

    /**
     * Test case for registering new Loyalty Customer for a specific Loyalty Merchant Card id.
     *
     * @throws ApiException
     */
    public function testRegisterLoyaltyCustomerForASpecificLoyaltyMerchantCard()
    {
        $this->markTestIncomplete('Needs to be fixed.');

        $merchantIdToCreateMerchantcard = self::$LoyaltyMerchantcardsProductModel->getMerchant()->getId();
        $cardgroupIdToCreateMerchantcard = self::$LoyaltyMerchantcardsProductModel->getCardgroup()->getId();//'CRG_WQ5B7K6WHVEP8YFB333MCX3RE0K9S4';
        $cardsAmount = new LoyaltyMerchantcardsDTOCardsAmount();
        $cardsAmount->setCardsAmount(1);
        $merchantCard = null;

        try {
            $merchantCards = self::$api->createMerchantcards($merchantIdToCreateMerchantcard, $cardgroupIdToCreateMerchantcard, $cardsAmount);
            $merchantCard = $merchantCards[0];
        } catch (ApiException $e) {
            throw $e;
        }

        $loyaltyMerchantCardId = $merchantCard->getId();
        $CustomerData = $this->prepareCustomerData();
        $CustomerData = $CustomerData['customer'];
        $CustomerData->setMerchant($merchantIdToCreateMerchantcard);
        $CustomerData->setCustomernumber('testnr');
        $CustomerData->setNote('test note');
        // TO DO  registerCustomer neads  body parameter
        try {
            $response = self::$api->registerCustomer(
                $loyaltyMerchantCardId,
                $CustomerData
            );
        } catch (ApiException $e) {
            throw $e;
        }

        $this->assertInstanceOf(LoyaltyMerchantcardsProductModel::class, $response);
        $this->assertEquals($merchantIdToCreateMerchantcard, $response->getMerchant()->getId());
        $newLoyaltyCustomerContact = $response->getCustomer()->getContact();
        $loyaltyCustomerContact = $CustomerData->getMerchantContact();
        $this->assertEquals($loyaltyCustomerContact->getForename(), $newLoyaltyCustomerContact->getForename());
        $this->assertEquals($loyaltyCustomerContact->getSurname(), $newLoyaltyCustomerContact->getSurname());
        $this->assertEquals($loyaltyCustomerContact->getCompanyname(), $newLoyaltyCustomerContact->getCompanyname());
        $this->assertEquals($loyaltyCustomerContact->getGender(), $newLoyaltyCustomerContact->getGender());
        $this->assertEquals($loyaltyCustomerContact->getTitle(), $newLoyaltyCustomerContact->getTitle());
        $this->assertEquals($loyaltyCustomerContact->getUrlWebsite(), $newLoyaltyCustomerContact->getUrlWebsite());
        $this->assertEquals($loyaltyCustomerContact->getBirthplace(), $newLoyaltyCustomerContact->getBirthplace());
        $this->assertEquals($loyaltyCustomerContact->getNationality(), $newLoyaltyCustomerContact->getNationality());
        $this->assertEquals($loyaltyCustomerContact->getEmail(), $newLoyaltyCustomerContact->getEmail());
        $this->assertEquals($loyaltyCustomerContact->getPhone(), $newLoyaltyCustomerContact->getPhone());
        $this->assertEquals($loyaltyCustomerContact->getMobile(), $newLoyaltyCustomerContact->getMobile());
        $this->assertEquals($loyaltyCustomerContact->getFax(), $newLoyaltyCustomerContact->getFax());
        $this->assertEquals($loyaltyCustomerContact->getAddress(), $newLoyaltyCustomerContact->getAddress());
    }

    /**
     * Test case for executing transaction from SDK.
     * @throws ApiException
     */
    public function testExecuteTransactionFromSdk()
    {
        $loyaltyMerchantCardId = self::$LoyaltyMerchantcardsProductModel->getId();
        //FIXME: This id will be changed after generating code for General Store Product. General Store id will be fetched from Secucore.
        $generalStoreId = self::$LoyaltyMerchantcardsProductModel->getCreatedForStore()->getId();
        $amount = 20;
        $loyaltyMerchantCardDTOTransaction = new LoyaltyMerchantcardsDTOTransaction();
        $loyaltyMerchantCardDTOTransaction->setAction('charge');
        $loyaltyMerchantCardDTOTransaction->setAmount($amount);
        $loyaltyMerchantCardDTOTransaction->setStore($generalStoreId);

        try {
            $response = self::$api->executeTransaction(
                $loyaltyMerchantCardId,
                $loyaltyMerchantCardDTOTransaction
            );
        } catch (ApiException $e) {
            throw $e;
        }

        $this->assertInstanceOf(LoyaltyMerchantcardsProductWithReceiptModel::class, $response);
        $this->assertEquals(self::$LoyaltyMerchantcardsProductModel->getCard()->getCardnumber(), $response->getCard()->getCardnumber());
        $receipts = $response->getReceipt();

        foreach ($receipts as $receipt) {
            $receiptValue = $receipt->getValue();

            if (isset($receiptValue['name'])) {
                $valueName = $receiptValue->getName();

                if ($valueName === "Kartennummer:") {
                    $this->assertEquals(self::$LoyaltyMerchantcardsProductModel->getCard()->getCardnumber(), $receiptValue->getValue());
                }
            }

            if (isset($receiptValue['text'])) {
                $valueText = $receiptValue->getText();

                if ($valueText === "0," . $amount . " EUR") {
                    $this->assertEquals("0," . $amount . " EUR", $valueText);
                }
            }
        }
    }

    /**
     * Test case for getting Loyalty Merchant Card with passcode 2.
     * @throws ApiException
     */
    public function testGetLoyaltyMerchantCardWithPasscode2()
    {
        try {
            $response = self::$api->getAll(
                1,
                null,
                null,
                "passcode:2"
            );
        } catch (ApiException $e) {
            throw $e;
        }

        $this->assertEquals(2, $response->getData()[0]->getPasscode());
    }

    /**
     * Test case for saving newly given passcode for Loyalty Card.
     *
     * @throws ApiException
     */
    public function testSaveNewPasscodeForTheLoyaltyCard()
    {
        $this->markTestIncomplete('Needs to be fixed.');

        $merchantCardId = self::$LoyaltyMerchantcardsProductModel->getId();
        try {
            $response = self::$api->newPassCode($merchantCardId, self::$newPasscode);

            $this->assertTrue($response['result']);
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Test case for checking newly given passcode for Loyalty Card.
     *
     * @throws ApiException
     */
    public function testCheckNewPasscodeForTheLoyaltyCard()
    {
        $this->markTestIncomplete('Needs to be fixed.');

        $merchantCardId = self::$LoyaltyMerchantcardsProductModel->getId();
        self::$newPasscode->getMerchant();
        $cardNumber = self::$newPasscode->getCardnumber();
        $passcode = self::$newPasscode->getPasscode();

        $checkPasscode = new LoyaltyMerchantcardsDTOCheckPasscode();
        $checkPasscode->setCardnumber($cardNumber);
        $checkPasscode->setPin($passcode);

        try {
            $response = self::$api->checkPassCode($merchantCardId, $checkPasscode);

            $this->assertTrue($response['result']);
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Test case for validating General Merchant id with Loyalty Card number.
     *
     * @throws ApiException
     */
    public function testValidateGeneralMerchantForLoyaltyCardNumber()
    {
        $validateMerchant = new LoyaltyMerchantcardsDTOValidateMerchantCard();
        $validateMerchant->setMerchant(self::$LoyaltyMerchantcardsProductModel->getMerchant()->getId());
        $validateMerchant->setCardnumber(self::$LoyaltyMerchantcardsProductModel->getCard()->getCardnumber());

        try {
            $response = self::$api->validateMerchantCard(
                self::$LoyaltyMerchantcardsProductModel->getId(),
                $validateMerchant
            );
        } catch (ApiException $e) {
            throw $e;
        }

        $this->assertTrue($response->getIsValid());
        $this->assertInternalType('boolean', $response->getHasPasscode());
        $this->assertTrue(is_bool($response->getIsLocked()));
    }

    /**
     * Test case for resetting Loyalty Card passcode.
     *
     * @throws ApiException
     */
    public function testResetPasscodeForSpecificLoyaltyCard()
    {
        $this->markTestIncomplete('Needs to be fixed.');

        $resetPasscode = new LoyaltyMerchantcardsDTOResetPasscode();
        $resetPasscode->setCardnumber(self::$newPasscode->getCardnumber());
        $resetPasscode->setPasscode(self::$newPasscode->getPasscode());

        try {
            $response = self::$api->resetPassCode(
                self::$LoyaltyMerchantcardsProductModel->getId(),
                $resetPasscode
            );

            $this->assertNotNull($response['result']);
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Test case for creating merchant card.
     * @throws ApiException
     */
    public function testCreateMerchantCard()
    {
        $this->markTestIncomplete('Needs to be fixed.');

        $merchantIdToCreateMerchantcard = self::$LoyaltyMerchantcardsProductModel->getMerchant()->getId();
        $cardgroupIdToCreateMerchantcard = self::$LoyaltyMerchantcardsProductModel->getCardgroup()->getId();//'CRG_WQ5B7K6WHVEP8YFB333MCX3RE0K9S4';
        $cardsAmount = new LoyaltyMerchantcardsDTOCardsAmount();
        $cardsAmount->setCardsAmount(1);
        $merchantCard = null;

        try {
            $merchantCards = self::$api->createMerchantcards($merchantIdToCreateMerchantcard, $cardgroupIdToCreateMerchantcard, $cardsAmount);
            $merchantCard = $merchantCards[0];
        } catch (ApiException $e) {
            throw $e;
        }

        $this->assertInstanceOf(LoyaltyMerchantcardsProductModel::class, $merchantCard);
        $this->assertNotEmpty($merchantCard);
        $this->assertEquals($merchantIdToCreateMerchantcard, $merchantCard->getMerchant()->getId());
    }
}
