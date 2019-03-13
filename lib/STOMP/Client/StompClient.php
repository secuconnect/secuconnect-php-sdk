<?php

namespace Secuconnect\Client\STOMP\Client;

use Exception;
use Secuconnect\Client;
use Secuconnect\Client\Configuration;
use Stomp;
use StompFrame;

/**
 * Class StompClient
 */
class StompClient
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $replyTo;

    /**
     * @var string
     */
    private $stompHost;

    /**
     * @var int
     */
    private $port;

    /**
     * @var Stomp
     */
    private $stomp;

    /**
     * StompClient constructor.
     * @throws Exception
     */
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
     * @throws Exception
     */
    public function sendMsg($msgObj, $destinationObj)
    {
        $destination = $destinationObj->prepareDestination();
        $header = $this->prepareHeder();

        if (!empty($msgObj->body)) {
            $body = json_decode($msgObj->body);
        }

        $response = new StompResponse();

        try {
            $this->stomp->send($destination, $msgObj, $header);
        } catch (Exception $e) {
            $response->setMessage($e->getMessage());
            $response->setErrorStatus();
        }

        $response->setMessage('Message send');
        $response->setOkStatus();
        return $response;

    }

    /**
     * reads the STOMP queue
     *
     * @return array $response
     */
    public function readResponse()
    {
        $frame = $this->stomp->readFrame();
        return $frame;
    }

    /**
     * sets internal variables used by stompClient
     * @throws Exception
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
     * sets headers needed for STOMP call to secucore
     *
     * @return array $header
     */
    private function prepareHeder()
    {
        $correlationId = $this->makeCorrelationId();

        $header = [
            'reply-to' => $this->replyTo,
            'content-type' => 'application/json',
            'user-id' => $this->token,
            'correlation-id' => $correlationId
        ];

        return $header;
    }

    /**
     * create unique CorrelationId
     *
     * @return string correlationId
     */
    public function makeCorrelationId()
    {
        return uniqid() . '-' . rand() . '-' . time();
    }
}
