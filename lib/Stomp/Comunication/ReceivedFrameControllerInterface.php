<?php
namespace Secuconnect\Client\STOMP\Comunication;
interface ReceivedFrameControllerInterface
{
    public function process($frame);
}