<?php
namespace Secuconnect\Client\STOMP\Comunication;
use \Secuconnect\Client\STOMP\Client;
interface LocalComunicationInterface
{
    public function getMsgToSendForStompController();
    public function sendMsgToStompController($msg);
}