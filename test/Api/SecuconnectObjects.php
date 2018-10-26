<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Authentication\OAuthApplicationUserCredentials;
use Secuconnect\Client\Authentication\OAuthClientCredentials;
use Secuconnect\Client\Configuration;
use Secuconnect\Client\Globals;
use Secuconnect\Client\Model\Contact;
use Secuconnect\Client\Model\PaymentContainersDTO;
use Secuconnect\Client\Model\PaymentContainersDTOPrivate;
use Secuconnect\Client\Model\PaymentContainersProductModel;
use Secuconnect\Client\Model\PaymentCustomersDTO;
use Secuconnect\Client\Model\PaymentCustomersProductModel;
use Secuconnect\Client\Model\SecupayBasketItem;

/**
 * Class SecuconnectObjects
 */
class SecuconnectObjects
{
    public const BANK_ACCOUNT_OWNER = 'John Doe';
    public const BANK_ACCOUNT_IBAN = 'DE37503240001000000524';
    public const BANK_ACCOUNT_BIC = 'FTSBDEFAXXX';
    public const LOYALTY_CARD = [
    ];

    /**
     * @var SecuconnectObjects
     */
    private static $instance;

    /**
     * @var ApiClient
     */
    private $api;

    /**
     * @var PaymentContainersProductModel
     */
    private $container;

    /**
     * @var PaymentCustomersProductModel
     */
    private $customer;

    /**
     * @var array
     */
    private $basket;

    /**
     * @var string
     */
    private $accessToken;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /**
     * @throws ApiException
     *
     * @return SecuconnectObjects
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
            self::$instance->authenticateByClientCredentials();
            self::$instance->createContainer();
            self::$instance->createCustomer();
            self::$instance->createBasket();
        }

        return self::$instance;
    }

    /**
     * @return $this
     */
    public function authenticateByClientCredentials()
    {
        $auth = new Authenticator(
            OAuthClientCredentials::from(
                Globals::OAuthClientCredentials['clientId'],
                Globals::OAuthClientCredentials['clientSecret']
            )
        );
        $this->accessToken = $auth->getToken();
        Configuration::getDefaultConfiguration()
            ->setAccessToken($this->accessToken);

        return $this;
    }

    /**
     * @return $this
     */
    public function authenticateByApplicationUser()
    {
        $auth = new Authenticator(
            OAuthApplicationUserCredentials::from(
                Globals::OAuthApplicationUserCredentials['clientId'],
                Globals::OAuthApplicationUserCredentials['clientSecret'],
                Globals::OAuthApplicationUserCredentials['username'],
                Globals::OAuthApplicationUserCredentials['password'],
                Globals::OAuthApplicationUserCredentials['device'],
                Globals::OAuthApplicationUserCredentials['deviceName']
            )
        );
        $this->accessToken = $auth->getToken();

        Configuration::getDefaultConfiguration()
            ->setAccessToken($this->accessToken);

        return $this;
    }

    /**
     * @throws ApiException
     *
     * @return $this
     */
    private function createContainer()
    {
        $privateData = new PaymentContainersDTOPrivate();
        $privateData
            ->setOwner(self::BANK_ACCOUNT_OWNER)
            ->setIban(self::BANK_ACCOUNT_IBAN)
            ->setBic(self::BANK_ACCOUNT_BIC);

        $container = new PaymentContainersDTO();
        $container
            ->setType('bank_account')
            ->setPrivate($privateData);

        $this->api = new PaymentContainersApi();

        try {
            $this->container = $this->api->paymentContainersPost($container);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        return $this;
    }

    /**
     * @throws ApiException
     *
     * @return $this
     */
    private function createCustomer()
    {
        $contact = new Contact();
        $contact->setForename('John');
        $contact->setSurname('Doe');
        $contact->setCompanyname('Example Inc.');

        $this->customer = new PaymentCustomersDTO();
        $this->customer->setContact($contact);

        $this->api = new PaymentCustomersApi();

        try {
            $this->customer = $this->api->paymentCustomersPost($this->customer);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        return $this;
    }

    /**
     * @return $this
     */
    private function createBasket()
    {
        $basketItem1 = new SecupayBasketItem();
        $basketItem1->setItemType('shipping');
        $basketItem1->setName('standard delivery');
        $basketItem1->setTax(19);
        $basketItem1->setTotal(1324);

        $basketItem2 = new SecupayBasketItem();
        $basketItem2->setItemType('article');
        $basketItem2->setArticleNumber(3211);
        $basketItem2->setQuantity(2);
        $basketItem2->setName('Testname1');
        $basketItem2->setEan(4123412341243);
        $basketItem2->setTax(19);
        $basketItem2->setTotal(2000);
        $basketItem2->setPrice(1000);

        $basketItem3 = new SecupayBasketItem();
        $basketItem3->setItemType('article');
        $basketItem3->setArticleNumber(48875);
        $basketItem3->setQuantity(3);
        $basketItem3->setName('Testname2');
        $basketItem3->setEan(4123412341236);
        $basketItem3->setTax(19);
        $basketItem3->setTotal(3000);
        $basketItem3->setPrice(1000);

        $this->basket = [$basketItem1, $basketItem2, $basketItem3];

        return $this;
    }

    /**
     * @return ApiClient
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * @return PaymentContainersProductModel
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @return PaymentCustomersProductModel
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return array
     */
    public function getBasket()
    {
        return $this->basket;
    }
}
