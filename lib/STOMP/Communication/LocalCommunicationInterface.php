<?php

namespace Secuconnect\Client\STOMP\Communication;

/**
 * Interface LocalCommunicationInterface
 */
interface LocalCommunicationInterface
{
    /**
     * @return mixed
     */
    public function getMsgToSendForStompController();

    /**
     * @param mixed $msg
     * @return mixed
     */
    public function sendMsgToStompController($msg);
}
