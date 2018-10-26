<?php

namespace Secuconnect\Client\Stomp;

use Exception;
use Secuconnect\Client\Configuration;
use Stomp;
use StompFrame;

class StompClient
{  
    const RESPONSE_STATUS_ERROR = 'ERROR';
    const RESPONSE_STATUS_OK = 'OK';
    
    private $token;
    private $msg;
    private $replyTo;  
    private $stompHost;
    private $port;
    private $stomp;
    
    public function __construct()
    {
        $this->initalize();
        $this->stomp = new Stomp($this->stompHost . ':' . $this->port, $this->token, $this->token);
    }
    
    /**
     * sends a message using STOMP
     *
     * @param StompFrame $msgObj
     * @param Destination $destinationObj
     * @return StompResponse $response
     */
    public function sendMsg(StompFrame $msgObj, \Secuconnect\Client\STOMP\Destination $destinationObj) {
        
        $destination = $destinationObj->prepareDestination();
        $header = $this->prepareHeder();

        if (!empty($msgObj->body)) {
            $body = json_decode($msgObj->body);

            if (empty($body->data)) {
                throw new Exception("Invalid StompMsssage. no 'data' in message body");
            }
        }
        
        $response = new StompResponse();

        try {
            $this->stomp->send($destination, $msgObj, $header);
        } catch (Exception $e) {
            $response->setMessage($e->getMessage());
            $response->setStatus(self::RESPONSE_STATUS_ERROR);
        }
           
        $response->setMessage('Message send');
        $response->setStatus(self::RESPONSE_STATUS_OK);

        return;
    }
    
    /**
     * reads the STOMP queue
     *
     * @return array $response
     */
    public function readResponse()
    {
        $response = [];

        while ($this->stomp->hasFrame()) {
            $frame = $this->stomp->readFrame();
            $this->stomp->ack($frame);
            $response[] = $frame->body;
        }

        return $response;
    }

    /**
     * sets internal variables used by stompClient
     */
    private function initalize() 
    {
        $this->token = Configuration::getDefaultConfiguration()->getAccessToken();

        if (empty($this->token)) {
            throw new Exception("Before using StompClient you need to autorizate");
        }

        $this->replyTo = Configuration::getDefaultConfiguration()->getReplyToStomp();

        if (empty($this->replyTo)) {
            throw new Exception("replyTo can't be empty please see Configuration.php");
        }

        $this->stompHost = Configuration::getDefaultConfiguration()->getStompHost();

        if (empty($this->stompHost)) {
            throw new Exception("stompHost can't be empty please see Configuration.php");
        }

        $this->port = Configuration::getDefaultConfiguration()->getStompPort();

        if (empty($this->port)) {
            throw new Exception("port for Stomp connection can't be empty please see Configuration.php");
        }
    }
    
    /**
     * sets heders needed for STOMP call to secucore
     *
     * @return array $header
     */
    private function prepareHeder()
    {
        $correlationId = $this->makeCorrelationId();

        $header = [
            'reply-to' => $this->replyTo,
            'content-type' => 'application/json',
            'user-id' => $this->token ,
            'correlation-id' => $correlationId
        ];

        return $header;
    }
    
    /**
     * create unique CorrelationId
     *
     * @return string correlationId
     */
    private function makeCorrelationId()
    {
        return uniqid() . '-' . rand() . '-' . time();
    }
}
