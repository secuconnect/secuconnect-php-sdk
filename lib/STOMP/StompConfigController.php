<?php

namespace Secuconnect\Client\STOMP;

include 'StompConfig.php';

use Exception;
use Secuconnect\Client\STOMP\Communication;
use Secuconnect\Client\STOMP\Communication\LocalCommunicationInterface;
use Secuconnect\Client\STOMP\Communication\ReceivedFrameControllerInterface;
use Secuconnect\Client\STOMP\Communication\ReceivedFrameFileController;

/**
 * Class StompConfigController
 */
class StompConfigController
{
    /**
     * object responsible communication between rest of the SDK
     * @var Communication\LocalCommunicationInterface
     */
    private $localCommunicationController;

    /**
     * object responsible for handling Received Stomp Frames
     * @var ReceivedFrameControllerInterface
     */
    private $receivedFrameController;

    /**
     * name of Constant responsible for the frequency of requests for answers from STOMP
     * @var string
     */
    public $howOftenReadMsgConstantName = 'HOW_OFTEN_READ_MSG';

    /**
     * name of Constant responsible for the frequency of attempts to send a message through STOMP
     * @var string
     */
    public $howOftenSendMsgConstantName = 'HOW_OFTEN_SEND_MSG';

    /**
     * milliseconds deafening the default sleep time
     * @const float
     */
    const DEFAULT_STOMP_SLEEP_VALUE = 0.1;


    /**
     * seconds deafening the max sleep time
     * @const float
     */
    const MAX_STOMP_SLEEP_VALUE = 120;

    /**
     * it's creating LocalCommunicationController based on Local_Communication_Controller from StompConfig.php
     *
     * @return LocalCommunicationInterface|Communication\LocalFileCommunicationController
     * @throws Exception
     */
    public function getLocalCommunicationController()
    {
        $this->localCommunicationController = new Communication\LocalFileCommunicationController();

        if (defined("LOCAL_Communication_CONTROLLER") && !empty(LOCAL_Communication_CONTROLLER)) {
            $LocalCommunication = LOCAL_Communication_CONTROLLER;
            $LocalCommunicationController = new $LocalCommunication();
            if ($LocalCommunicationController instanceof LocalCommunicationInterface) {
                $this->localCommunicationController = $LocalCommunicationController;
            } else {
                throw new Exception('Invalid LocalCommunicationClass from StompConfig. LocalCommunicationClass has to implement LocalCommunicationInterface');
            }
        }
        return $this->localCommunicationController;
    }

    /**
     * it's creating ReceivedFrameController based on Received_Frame_Controller from StompConfig.php
     *
     * @return ReceivedFrameControllerInterface
     * @throws Exception
     */
    public function getReceivedFrameController()
    {
        $this->receivedFrameController = new ReceivedFrameFileController();

        if (defined("RECEIVED_FRAME_CONTROLLER") && !empty(RECEIVED_FRAME_CONTROLLER)) {
            $ReceivedFrameControllerString = RECEIVED_FRAME_CONTROLLER;
            $ReceivedFrameController = new $ReceivedFrameControllerString();
            if ($ReceivedFrameController instanceof ReceivedFrameControllerInterface) {
                $this->receivedFrameController = $ReceivedFrameController;
            } else {
                throw new Exception('Invalid ReceivedFrameController from StompConfig. ReceivedFrameController has to implement ReceivedFrameControllerInterface');
            }
        }
        return $this->receivedFrameController;
    }

    /**
     * it's creating ReceivedFrameController based on Received_Frame_Controller from StompConfig.php
     *
     * @param string $constantName
     * @return float
     */
    public function getSleepValue($constantName)
    {
        $value = self::DEFAULT_STOMP_SLEEP_VALUE;
        if (defined($constantName) && !empty(constant($constantName)) && constant($constantName) <= self::MAX_STOMP_SLEEP_VALUE) {
            $value = (float)constant($constantName);
        }

        return $value;
    }
}
