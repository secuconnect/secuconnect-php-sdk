<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\STOMP\Destination;
use Secuconnect\Client\STOMP\Client;
use \StompFrame;

/**
 * Class StompTest
 */
class StompTest extends TestCase
{
    /**
     * @var SecuconnectObjects
     */
    private static $instance;
    
    public static function setUpBeforeClass()
    {
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
    }

    /*
     * it's only checkong if the Stomp connection id done
     * 
     * @group ignore
     */
    public function testStomp()
    {
        try{
            $StompClient = new Client\StompClient();
        } catch (Exception $ex) {
            $responseError = $ex->getResponseBody();
        }
        assertFalse(isset($responseError));
   
    }
}