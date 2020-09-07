<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Globals;
use Secuconnect\Client\Model\BankAccountDescriptor;
use Secuconnect\Client\Model\Contact;
use Secuconnect\Client\Model\PaymentContainersDTO;
use Secuconnect\Client\Model\PaymentContainersProductModel;
use Secuconnect\Client\Model\PaymentCustomersDTO;
use Secuconnect\Client\Model\PaymentCustomersProductModel;
use Secuconnect\Client\Model\SecupayBasketItem;

/**
 * Class SecuconnectObjects
 */
class SecuconnectObjects
{
    const BANK_ACCOUNT_OWNER = 'John Doe';
    const BANK_ACCOUNT_IBAN = 'DE37503240001000000524';
    const BANK_ACCOUNT_BIC = 'FTSBDEFAXXX';
    const LOYALTY_CARD = [
        'number' => "92760...",
        'pin' => "..."
    ];

    /**
     * @var SecuconnectObjects
     */
    private static $instance;

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

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /**
     * @return SecuconnectObjects
     * @throws ApiException
     *
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
     * @throws ApiException
     */
    public function authenticateByClientCredentials()
    {
        Authenticator::authenticateByClientCredentials(...array_values(Globals::OAuthClientCredentials));
        return $this;
    }

    /**
     * @return $this
     * @throws ApiException
     */
    public function authenticateByApplicationUser()
    {
        Authenticator::authenticateByApplicationUser(...array_values(Globals::OAuthApplicationUserCredentials));
        return $this;
    }

    /**
     * @return PaymentContainersDTO
     */
    public function createPaymentContainersDTO()
    {
        $privateData = new BankAccountDescriptor();
        $privateData
            ->setOwner(self::BANK_ACCOUNT_OWNER)
            ->setIban(self::BANK_ACCOUNT_IBAN)
            ->setBic(self::BANK_ACCOUNT_BIC);

        $container = new PaymentContainersDTO();
        $container
            ->setType('bank_account')
            ->setPrivate($privateData);

        return $container;
    }

    /**
     * @return $this
     * @throws ApiException
     *
     */
    private function createContainer()
    {
        try {
            $api = new PaymentContainersApi();
            $this->container = $api->paymentContainersPost($this->createPaymentContainersDTO());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        return $this;
    }

    /**
     * @return PaymentCustomersDTO
     */
    public function createPaymentCustomersDTO()
    {
        $contact = new Contact();
        $contact->setForename('John');
        $contact->setSurname('Doe');
        $contact->setCompanyname('Example Inc.');
        $contact->setEmail('mail@example.com');

        $customer = new PaymentCustomersDTO();
        $customer->setContact($contact);

        return $customer;
    }

    /**
     * @return $this
     * @throws ApiException
     *
     */
    private function createCustomer()
    {
        try {
            $api = new PaymentCustomersApi();
            $this->customer = $api->paymentCustomersPost($this->createPaymentCustomersDTO());
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
