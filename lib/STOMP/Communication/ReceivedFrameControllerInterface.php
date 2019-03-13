<?php

namespace Secuconnect\Client\STOMP\Communication;

/**
 * Interface ReceivedFrameControllerInterface
 */
interface ReceivedFrameControllerInterface
{
    /**
     * @param object $frame
     * @return mixed
     */
    public function process($frame);
}
