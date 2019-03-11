<?php

namespace Secuconnect\Client\STOMP\Comunication;

interface LocalComunicationInterface
{
    public function getMsgToSendForStompController();

    public function sendMsgToStompController($msg);
}
