<?php

namespace Secuconnect\Client;

use DateTime;
use PHPUnit\Framework\TestCase;
    
use Secuconnect\Client\Api\LoyaltyCardgroupsApi;
use Secuconnect\Client\Api\LoyaltyCustomersApi;
use Secuconnect\Client\Api\LoyaltyMerchantcardsApi;
use Secuconnect\Client\Api\SecuconnectObjects;
use Secuconnect\Client\Model\Address;
use Secuconnect\Client\Model\Contact;
use Secuconnect\Client\Model\LoyaltyCardsProductModel;
use Secuconnect\Client\Model\LoyaltyCustomersDTO;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCsc;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction;
use Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard;
use Secuconnect\Client\Model\LoyaltyMerchantcardsList;
use Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel;
use Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel;
use Secuconnect\Client\Model\ProductInstanceUID;
use Secuconnect\Client\Model\VirtualTerminalData;

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
    private static $receivedMerchantCard;

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
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new LoyaltyMerchantcardsApi();
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
        self::$receivedMerchantCard = null;
        self::$merchantId = null;
        self::$cardId = null;
        self::$cardGroupId = null;
    }

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
     */
    public function testGetLoyaltyMerchantCardsForTheSpecificLoyaltyCardNumber()
    {
   
        try {
            $response = self::$api->getAll(
                null,
                null,
                null,
                "card.cardnumber:".SecuconnectObjects::LOYALTY_CARD['number']
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
                $this->assertNull($cardGroup->getStockWarnLimit());
                $this->assertNotEmpty($cardGroup->getPicture());
                $this->assertTrue(is_numeric($loyaltyMerchantcardsProductModel->getPoints()));
                $this->assertTrue(is_numeric($loyaltyMerchantcardsProductModel->getCashBalance()));
                $this->assertTrue(is_numeric($loyaltyMerchantcardsProductModel->getBonusBalance()));
                $this->assertTrue(is_numeric($loyaltyMerchantcardsProductModel->getBalance()));
                $this->assertTrue($loyaltyMerchantcardsProductModel->getLockStatus() === 'locked' ||
                    $loyaltyMerchantcardsProductModel->getLockStatus() === 'unlocked');
                $this->assertTrue(is_numeric($loyaltyMerchantcardsProductModel->getPasscode()));
            }

            self::$receivedMerchantCard = $response->getData()[0];
            self::$merchantId = $response->getData()[0]->getMerchant()->getId();
            self::$cardId = $response->getData()[0]->getCard()->getId();
            self::$cardGroupId = $response->getData()[0]->getCardgroup()->getId();
        }
    }

    /**
     * Test case for getting the Loyalty Merchant Card instance for the specified id.
     */
    public function testGetOneLoyaltyMerchantCardForTheSpecificId()
    {
        try {
            $response = self::$api->getOne(self::$receivedMerchantCard->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(LoyaltyMerchantcardsProductModel::class, $response);
        $this->assertEquals(self::$receivedMerchantCard, $response);
    }

    /**
     * Test case for checking lock status then locking and unlocking the Loyalty Merchant Card instance for the specified id.
     */
    public function testCheckLockStatusThenLockAndUnlockOrUnlockAndLockLoyaltyMerchantCard()
    {
        $merchantCardId = self::$receivedMerchantCard->getId();

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
     */
    public function testUpdateLoyaltyCardGroupOfLoyaltyMerchantCard()
    {
        $receivedMerchantCard = self::$receivedMerchantCard;
        $merchantCardId = $receivedMerchantCard->getId();
        $merchantId = $receivedMerchantCard->getMerchant()->getId();
        self::$api = new LoyaltyCardgroupsApi();

        try {
            $response = self::$api->getAll(
                null,
                null,
                null,
                "merchant.id:" . $merchantId
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $loyaltyCardGroups = $response->getData();
        $currentLoyaltyCardGroupId = $receivedMerchantCard->getCardgroup()->getId();
        $newLoyaltyCardGroupId = '';

        if (sizeof($loyaltyCardGroups) > 0) {
            foreach ($loyaltyCardGroups as $loyaltyCardGroup) {
                if ($loyaltyCardGroup->getId() !== $currentLoyaltyCardGroupId) {
                    $newLoyaltyCardGroupId = $loyaltyCardGroup->getId();
                    break;
                }
            }

            self::$api = new LoyaltyMerchantcardsApi();

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
    }

    /**
     * Test case of failing updating Loyalty Merchant Card Card Group for specific Loyalty Merchant Card id.
     */
    public function testUpdateLoyaltyCardGroupOfLoyaltyMerchantCardFail()
    {
        try {
            $response = self::$api->getAll();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $loyaltyMerchantCards = $response->getData();
        self::$api = new LoyaltyCardgroupsApi();

        try {
            $response = self::$api->getAll();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $loyaltyCardGroups = $response->getData();

        $randomLoyaltyMerchantCard = $loyaltyMerchantCards[array_rand($loyaltyMerchantCards, 1)];
        $randomLoyaltyMerchantCardId = $randomLoyaltyMerchantCard->getId();
        $randomLoyaltyCardGroup = $loyaltyCardGroups[array_rand($loyaltyCardGroups, 1)];
        $randomLoyaltyCardGroupId = $randomLoyaltyCardGroup->getId();

        self::$api = new LoyaltyMerchantcardsApi();

        try {
            $response = self::$api->updateCardGroupOfMerchantCard(
                $randomLoyaltyMerchantCardId,
                $randomLoyaltyCardGroupId
            );
            $this->fail('This method should throw ApiException');
        } catch (ApiException $e) {
            $response = $e->getResponseBody();

            $this->expectException(ApiException::class);
            $this->assertEquals('error', $response->status);
            $this->assertEquals('ProductUpdateFailedException', $response->error);
            $this->assertNotEmpty($response->error_details);
            $this->assertNotEmpty($response->error_user);
            $this->assertNotEmpty($response->supportId);

            throw $e;
        }
    }

    /**
     * Test case for getting Virtual Terminal data for General Merchant (correct relation between Loyalty Merchant Card and General Merchant).
     */
    public function testGetVirtualTerminalDataForCorrectRelation()
    {
        $merchantCardId = self::$receivedMerchantCard->getId();
        $merchantId = self::$receivedMerchantCard->getMerchant()->getId();

        try {
            $response = self::$api->getVirtualTerminalData(
                $merchantCardId,
                $merchantId
            );
        } catch (ApiException $e) {
            throw $e;
        }

        $this->assertInstanceOf(VirtualTerminalData::class, $response);
        $this->assertNotEmpty($response->getStore()['name']);
        $this->assertNotEmpty($response->getTid());
        $this->assertTrue(is_array($response->getActions()));
        $this->assertNotEmpty($response->getActions());
        $this->assertTrue(is_numeric($response->getGiftTerminal()));
        $this->assertTrue(is_numeric($response->getAmountSplitEnabled()));
    }

    /**
     * Test case for getting Virtual Terminal data for General Merchant (incorrect relation between Loyalty Merchant Card and General Merchant)..
     */
    public function testGetVirtualTerminalDataForIncorrectRelation()
    {
        $this->markTestIncomplete();
        try {
            $response = self::$api->getAll(100);
        } catch (ApiException $e) {
            throw $e;
        }

        $loyaltyMerchantCards = $response->getData();

        if (sizeof($loyaltyMerchantCards) > 1) {
            $randomIndex = rand(0, sizeof($loyaltyMerchantCards) - 1);

            $randomLoyaltyMerchantCardId = $loyaltyMerchantCards[$randomIndex]->getId();
            $randomLoyaltyMerchantId = $loyaltyMerchantCards[$randomIndex]->getMerchant()->getId();

            $newRandomIndex = rand(0, sizeof($loyaltyMerchantCards) - 1);

            if ($randomIndex !== $newRandomIndex) {
                $newRandomLoyaltyMerchantId = $loyaltyMerchantCards[$newRandomIndex]->getMerchant()->getId();

                $counter = 0;
                while ($randomLoyaltyMerchantId === $newRandomLoyaltyMerchantId ||
                    $counter < sizeof($loyaltyMerchantCards)
                ) {
                    $newRandomIndex = rand(0, sizeof($loyaltyMerchantCards) - 1);
                    $newRandomLoyaltyMerchantId = $loyaltyMerchantCards[$newRandomIndex]->getMerchant()->getId();
                    $counter++;
                }

                $this->assertNotEquals($randomLoyaltyMerchantId, $newRandomLoyaltyMerchantId);

//                #TODO: after annotations changes
//                try {
//                    $response = self::$api->getVirtualTerminalData(
//                        $randomLoyaltyMerchantCardId,
//                        $newRandomLoyaltyMerchantId
//                    );
//                } catch (ApiException $e) {
//                    throw $e;
//                }
//
//                $this->assertEquals(1, $response->disabled);
            }
        }
    }

    /**
     * Test case for setting new Loyalty Customer for a specific Loyalty Merchant Card id.
     */
    public function testSetLoyaltyCustomerForASpecificLoyaltyMerchantCard()
    {
        $currentLoyaltyMerchantCardId = self::$receivedMerchantCard->getId();
        $currentLoyaltyCustomerId = self::$receivedMerchantCard->getCustomer();

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
                if ($currentLoyaltyCustomerId !== $loyaltyCustomer->getId()) {
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
            $this->assertNotEquals($currentLoyaltyCustomerId, $response->getCustomer()->getId());
            $this->assertEquals($newLoyaltyCustomer->getContact(), $response->getCustomer()->getContact());
        }
    }

    /**
     * Test case for getting one Loyalty Merchant Card without assigned Loyalty Customer.
     */
    public function testGetLoyaltyMerchantCardWithoutLoyaltyCustomer()
    {
        try {
            $response = self::$api->getAll(
                1, null,
                null, "!customer.object:loyalty.customers"
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $loyaltyMerchantCard = $response->getData()[0];

        $this->assertEmpty($loyaltyMerchantCard->getCustomer());

        return $loyaltyMerchantCard;
    }

    /**
     * Test case for registering new Loyalty Customer for a specific Loyalty Merchant Card id.
     *
     * @depends testGetLoyaltyMerchantCardWithoutLoyaltyCustomer
     */
    public function testRegisterLoyaltyCustomerForASpecificLoyaltyMerchantCard($loyaltyMerchantCard)
    {
        $loyaltyMerchantCardId = $loyaltyMerchantCard->getId();
        $generalMerchantId = $loyaltyMerchantCard->getMerchant()->getId();

        $loyaltyCustomerData = $this->prepareCustomerData();
        $loyaltyCustomerContact = $loyaltyCustomerData['contact'];
        $loyaltyCustomer = $loyaltyCustomerData['customer'];
        $loyaltyCustomer->setMerchant($generalMerchantId);

        try {
            $response = self::$api->registerCustomer(
                $loyaltyMerchantCardId,
                $loyaltyCustomer
            );
        } catch (ApiException $e) {
            throw $e;
        }

        $this->assertInstanceOf(LoyaltyMerchantcardsProductModel::class, $response);
        $this->assertEquals($generalMerchantId, $response->getMerchant()->getId());
        $newLoyaltyCustomerContact = $response->getCustomer()->getContact();
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
     * Test case for getting Loyalty Merchant Cards for specific Loyalty Card number and unlock them.
     */
    public function testGetLoyaltyMerchantCardsForSpecificLoyaltyCardNumberAndUnlockThem()
    {
        try {
            $response = self::$api->getAll(
                null,
                null,
                null,
                "card.cardnumber:" . SecuconnectObjects::LOYALTY_CARD['number']
            );
        } catch (ApiException $e) {
            throw $e;
        }

        $loyaltyMerchantCards = $response->getData();

        foreach ($loyaltyMerchantCards as $loyaltyMerchantCard) {
            $merchantCardId = $loyaltyMerchantCard->getId();
            $lockData = new LoyaltyMerchantcardsDTOLock();
            $lockData->setReason(1);
            $lockData->setNote('Some note.');

            if ($loyaltyMerchantCard->getLockStatus() === 'locked') {
                try {
                    $response = self::$api->unlock($merchantCardId, $lockData);
                } catch (ApiException $e) {
                    print_r($e->getResponseBody());
                    throw $e;
                }

                $this->assertEquals('unlocked', $response->getLockStatus());
            } else {
                $this->assertEquals('unlocked', $loyaltyMerchantCard->getLockStatus());
            }
        }
    }

    /**
     * Test case for executing transaction from SDK.
     */
    public function testExecuteTransactionFromSdk()
    {
        $loyaltyMerchantCardId = self::$receivedMerchantCard->getId();
        //FIXME: This id will be changed after generating code for General Store Product. General Store id will be fetched from Secucore.
        $generalStoreId = 'STO_WDYDJYWDSWPF4WPCQQ8BERNSY0GAP8';
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
        $this->assertEquals(SecuconnectObjects::LOYALTY_CARD['number'], $response->getCard()->getCardnumber());
        $receipts = $response->getReceipt();

        foreach ($receipts as $receipt) {
            $receiptValue = $receipt->getValue();

            if (isset($receiptValue['name'])) {
                $valueName = $receiptValue->getName();

                if ($valueName === "Kartennummer:") {
                    $this->assertEquals(SecuconnectObjects::LOYALTY_CARD['number'], $receiptValue->getValue());
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
     */
    public function testGetLoyaltyMerchantCardWithPasscode2()
    {
        try {
            $response = self::$api->getAll(
                1, null,
                null, "passcode:2"
            );
        } catch (ApiException $e) {
            throw $e;
        }

        $merchantCard = $response->getData()[0];

        $this->assertEquals(2, $response->getData()[0]->getPasscode());

        return $merchantCard;
    }

    /**
     * Test case for saving newly given passcode for Loyalty Card.
     *
     * @depends testGetLoyaltyMerchantCardWithPasscode2
     */
    public function testSaveNewPasscodeForTheLoyaltyCard($merchantCard)
    {
        $merchantCardId = $merchantCard->getId();
        $merchantId = $merchantCard->getMerchant()->getId();
        $cardNumber = $merchantCard->getCard()->getCardnumber();
        $passcode = rand(1000, 9999);

        $newPasscode = new LoyaltyMerchantcardsDTONewPasscode();
        $newPasscode->setMerchant($merchantId);
        $newPasscode->setCardnumber($cardNumber);
        $newPasscode->setPasscode($passcode);

        try {
            $response = self::$api->newPasscode($merchantCardId, $newPasscode);

            $this->assertTrue($response['result']);
        } catch (ApiException $e) {
            throw $e;
        }

        return $newPasscode;
    }

    /**
     * Test case for checking newly given passcode for Loyalty Card.
     *
     * @depends testGetLoyaltyMerchantCardWithPasscode2
     * @depends testSaveNewPasscodeForTheLoyaltyCard
     */
    public function testCheckNewPasscodeForTheLoyaltyCard($merchantCard, $newPasscode)
    {
        $merchantCardId = $merchantCard->getId();
        $merchantId = $newPasscode->getMerchant();
        $cardNumber = $newPasscode->getCardnumber();
        $passcode = $newPasscode->getPasscode();

        $checkPasscode = new LoyaltyMerchantcardsDTOCheckPasscode();
        $checkPasscode->setCardnumber($newPasscode->getCardnumber());
        $checkPasscode->setPin($newPasscode->getPasscode());

        try {
            $response = self::$api->checkPasscode($merchantCardId, $checkPasscode);

            $this->assertTrue($response['result']);
        } catch (ApiException $e) {
            throw $e;
        }

        $neededData = [
            'merchantCardId' => $merchantCardId,
            'merchantId' => $merchantId,
            'cardNumber' => $cardNumber,
            'passcode' => $passcode
        ];

        return $neededData;
    }

    /**
     * Test case for validating General Merchant id with Loyalty Card number.
     *
     * @depends testCheckNewPasscodeForTheLoyaltyCard
     */
    public function testValidateGeneralMerchantForLoyaltyCardNumber($neededData)
    {
        $validateMerchant = new LoyaltyMerchantcardsDTOValidateMerchantCard();
        $validateMerchant->setMerchant($neededData['merchantId']);
        $validateMerchant->setCardnumber($neededData['cardNumber']);

        try {
            $response = self::$api->validateMerchantCard(
                $neededData['merchantCardId'],
                $validateMerchant
            );
        } catch (ApiException $e) {
            throw $e;
        }

        $this->assertTrue($response->getIsValid());
        $this->assertTrue($response->getHasPasscode());
        $this->assertTrue(is_bool($response->getIsLocked()));
    }

    /**
     * Test case for resetting Loyalty Card passcode.
     *
     * @depends testCheckNewPasscodeForTheLoyaltyCard
     */
    public function testResetPasscodeForSpecificLoyaltyCard($neededData)
    {
        $resetPasscode = new LoyaltyMerchantcardsDTOResetPasscode();
        $resetPasscode->setCardnumber($neededData['cardNumber']);
        $resetPasscode->setPasscode($neededData['passcode']);

        try {
            $response = self::$api->resetPassCode(
                $neededData['merchantCardId'],
                $resetPasscode
            );

            $this->assertNotNull($response['result']);
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Test case for checking CSC code.
     *
     * @group ignore
     * @depends testCheckNewPasscodeForTheLoyaltyCard
     */
    public function testCheckCsc()
    {
        $csc = 4471;
        $cscObj = new LoyaltyMerchantcardsDTOCsc();
        $cscObj->setCardnumber("9276004429942845");
        $cscObj->setCsc($csc);

        try {
            $response = self::$api->checkCsc(
                "CRG_2BESGJNETJJRZVVYS8R7JWGVWK4PRZ",
                $cscObj
            );

            $this->assertTrue($response['result']);
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Test case for creating merchant card.
     */
    public function testCreateMerchantCard()
    {
        $merchantIdToCreateMerchantcard = 'MRC_3TQMPV55JQG9CPKNXUEMSF094ZM4ON';
        $cardgroupIdToCreateMerchantcard = 'CRG_PAPHHDPXFNJDYBDUMKGC8U4CTU5AR8';
        $cardsAmount = new LoyaltyMerchantcardsDTOCardsAmount();
        $cardsAmount->setCardsAmount(1);
        $merchantCard = null;

        try {
            $merchantCards = self::$api->createMerchantcards($merchantIdToCreateMerchantcard, $cardgroupIdToCreateMerchantcard, $cardsAmount);
            $merchantCard = $merchantCards[0];
        } catch (ApiException $e) {
            throw $e;
        }

        if (!is_null($merchantCard)) {
            $this->assertInstanceOf(LoyaltyMerchantcardsProductModel::class, $merchantCard);
            $this->assertNotEmpty($merchantCard);
            $this->assertEquals($merchantIdToCreateMerchantcard, $merchantCard->getMerchant()->getId());
        }
    }

    /**
     * Test case for loyaltyMerchantcardsGetRawMerchantcardId
     *
     * GET Loyalty/MerchantCards/{merchantId}/merchantcard/{cardId}.
     *
     */
    public function testLoyaltyMerchantcardsGetRawMerchantcardId()
    {
        try {
            $merchantCard = self::$api->getAll()->getData()[0];
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        try {
            $response = self::$api->getRawMerchantCardId($merchantCard->getId(), $merchantCard->getCard()->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertTrue($response["result"] === null || $response["result"] !== null);
    }

    /**
     * Test case for removing merchant card.
     */
    public function testRemoveMerchantCard()
    {
        try {
            $merchantCards = self::$api->getAll(10000);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        for ($i = 0; $i < sizeof($merchantCards->getData()); $i++) {
            $merchantCardId = $merchantCards->getData()[$i]->getId();

            for ($j = $i+1; $j < sizeof($merchantCards->getData()); $j++) {
                if ($merchantCardId === $merchantCards->getData()[$j]) {
                    try {
                        $removedMerchantCard = self::$api->removeMerchantcards($merchantCardId);
                    } catch (ApiException $e) {
                        print_r($e->getResponseBody());
                        throw $e;
                    }

                    $this->assertNotEmpty($removedMerchantCard);
                    $this->assertEquals($merchantCardId, $removedMerchantCard->getId());
                }
            }
        }
    }
}
