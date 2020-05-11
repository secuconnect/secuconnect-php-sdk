<?php

namespace Secuconnect\Client;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\Api\LoyaltyCardsApi;
use Secuconnect\Client\Api\SecuconnectObjects;
use Secuconnect\Client\Model\LoyaltyCardsProductModel;

/**
 * Class LoyaltyCardsApiTest
 * @package Secuconnect\Client
 */
class LoyaltyCardsApiTest extends TestCase
{
    /**
     * @var LoyaltyCardsApi
     */
    private static $api;

    /**
     * @var SecuconnectObjects
     */
    private static $instance;

    /**
     * @var string
     */
    private static $cardId;

    const LOYALTY_CARDS = "loyalty.cards";

    /**
     * Setup before running all test cases
     *
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new LoyaltyCardsApi();
        self::$cardId = null;
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
        self::$instance = null;
        self::$api = null;
        self::$cardId = null;
    }

    /**
     * Test case for getting list of Loyalty Cards.
     *
     * @throws ApiException
     */
    public function testGetListOfLoyaltyCards()
    {
        $card = null;
        $numberOfCards = null;
        $response = self::$api->getAll(50, 10);

        if (!empty($response)) {
            $numberOfCards = $response->getCount();

            if ($numberOfCards > 0) {
                $cards = $response->getData();

                foreach ($cards as $card) {
                    $this->assertInstanceOf(LoyaltyCardsProductModel::class, $card);
                    $this->assertNotEmpty($card);
                    $this->assertEquals(self::LOYALTY_CARDS, $card->getObject());
                    $this->assertNotFalse(strpos($card->getId(), "CRD_"));
                    $this->assertTrue(is_numeric($card->getCardnumber()));
                    $this->assertEquals(16, strlen($card->getCardnumber()));
                    $this->assertNotEmpty($card->getCreated());
                }
            }
        }

        return $numberOfCards > 0 ? $response->getData()[0] : null;
    }

    /**
     * Test case for getting one Loyalty Card by provided id.
     *
     * @depends testGetListOfLoyaltyCards
     * @param LoyaltyCardsProductModel $card
     * @throws ApiException
     */
    public function testGetOneLoyaltyCardByProvidedId(LoyaltyCardsProductModel $card)
    {
        if (!is_null($card)) {
            $response = self::$api->getOne($card->getId());

            if (!empty($response)) {
                $receivedCard = $response;

                $this->assertInstanceOf(LoyaltyCardsProductModel::class, $receivedCard);
                $this->assertEquals($card, $receivedCard);
            }
        }
    }

    /**
     * Test case for assigning user to specific Loyalty Card.
     *
     * @throws ApiException
     */
    public function testAssignUserToSpecificLoyaltyCard()
    {
        $response = self::$api->getAll(
            1,
            null,
            null,
            "cardnumber:" . SecuconnectObjects::LOYALTY_CARD['number']
        );

        if (!empty($response) && !empty($response->getData())) {
            self::$cardId = $response->getData()[0]->getId();

            try {
                $response = self::$api->assignUser(
                    self::$cardId,
                    'me',
                    ['pin' => SecuconnectObjects::LOYALTY_CARD['pin']]
                );

                $this->assertTrue($response['result']);
            } catch (ApiException $e) {
                $response = $e->getResponseBody();

                $this->assertEquals('error', $response->status);
                $this->assertEquals('ProductDuplicateException', $response->error);
                $this->assertNotEmpty($response->error_details);
                $this->assertNotEmpty($response->error_user);
                $this->assertNotEmpty($response->supportId);
            }
        }
    }

    /**
     * Test case for removing assignment user to specific Loyalty Card.
     */
    public function testRemoveAssignmentUserToLoyaltyCard()
    {
        if (!is_null(self::$cardId)) {
            try {
                $response = self::$api->removeAssignedUser(
                    self::$cardId,
                    'me'
                );

                $this->assertTrue($response['result']);
            } catch (ApiException $e) {
                $response = $e->getResponseBody();

                $this->assertEquals('error', $response->status);
                $this->assertEquals('ProductDuplicateException', $response->error);
                $this->assertNotEmpty($response->error_details);
                $this->assertNotEmpty($response->error_user);
                $this->assertNotEmpty($response->supportId);
            }
        }
    }
}
