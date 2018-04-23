<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Authentication\OAuthApplicationUserCredentials;
use Secuconnect\Client\Authentication\OAuthClientCredentials;
use Secuconnect\Client\Configuration;
use Secuconnect\Client\Globals;
use Secuconnect\Client\Model\PaymentContainersDTO;
use Secuconnect\Client\Model\PaymentContainersDTOPrivate;
use Secuconnect\Client\Model\PaymentCustomersDTO;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\PaymentCustomersDTOContact;
use Secuconnect\Client\Model\SecupayBasketItem;


class SecuconnectObjects
{
    private static $instance = null;
    private $api;
    private $container;
    private $customer;
    private $basket;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new SecuconnectObjects();
            self::$instance->authenticateByClientCredentials();
            self::$instance->createContainer();
            self::$instance->createCustomer();
            self::$instance->createBasket();
        }

        return self::$instance;
    }

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
    }

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
    }

    private function createContainer()
    {
        $privateData = new PaymentContainersDTOPrivate();
        $privateData
            ->setOwner('John Doe')
            ->setIban('DE12500105170648489890')
            ->setBic('ABCDDE12XXX');

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
    }

    private function createCustomer()
    {
        $contact = new PaymentCustomersDTOContact();
        $contact->setForename("John");
        $contact->setSurname("Doe");
        $contact->setCompanyname("Example Inc.");

        $this->customer = new PaymentCustomersDTO();
        $this->customer->setContact($contact);

        $this->api = new PaymentCustomersApi();



        try {
            $this->customer = $this->api->paymentCustomersPost($this->customer);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
    }

    private function createBasket()
    {
        $basketItem1 = new SecupayBasketItem();
        $basketItem1->setItemType("shipping");
        $basketItem1->setName("standard delivery");
        $basketItem1->setTax(19);
        $basketItem1->setTotal(1324);

        $basketItem2 = new SecupayBasketItem();
        $basketItem2->setItemType("article");
        $basketItem2->setArticleNumber(3211);
        $basketItem2->setQuantity(2);
        $basketItem2->setName("Testname1");
        $basketItem2->setEan(4123412341243);
        $basketItem2->setTax(19);
        $basketItem2->setTotal(2000);
        $basketItem2->setPrice(1000);

        $basketItem3 = new SecupayBasketItem();
        $basketItem3->setItemType("article");
        $basketItem3->setArticleNumber(48875);
        $basketItem3->setQuantity(3);
        $basketItem3->setName("Testname2");
        $basketItem3->setEan(4123412341236);
        $basketItem3->setTax(19);
        $basketItem3->setTotal(3000);
        $basketItem3->setPrice(1000);

        $this->basket = [$basketItem1, $basketItem2, $basketItem3];
    }

    public function getApi()
    {
        return $this->api;
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getBasket()
    {
        return $this->basket;
    }
}
