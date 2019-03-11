<?php

namespace Secuconnect\Client\STOMP;

include 'StompConfig.php';

use Secuconnect\Client\STOMP\Comunication;

class StompConfigController
{

    /** @var LocalComunicationInterface $localComunicationController object responsible communication between rest of the SDK */
    private $localComunicationController;

    /** @var ReceivedFrameControllerInterface $receivedFrameController object responsible for handling Received Stomp Frames */
    private $receivedFrameController;

    /** @var string $howOftenReadMsgConstantName name of Constant responsible for the frequency of requests for answers from STOMP */
    public $howOftenReadMsgConstantName = 'HOW_OFTEN_READ_MSG';

    /** @var string $howOftenSendMsgConstantName name of Constant responsible for the frequency of attempts to send a message through STOMP */
    public $howOftenSendMsgConstantName = 'HOW_OFTEN_SEND_MSG';

    /** @const float DEFAULT_STOMP_SLEEP_VALUE  milliseconds deafening the default sleep time */
    const DEFAULT_STOMP_SLEEP_VALUE = 0.1;


    /** @const float MAX_STOMP_SLEEP_VALUE secounds deafening the max sleep time */
    const MAX_STOMP_SLEEP_VALUE = 120;

    /**
     * it's creating LocalComunicationController based on Local_Comunication_Controller from StompConfig.php';
     *
     * @return  $LocalComunicationController
     */
    public function getLocalComunicationController()
    {
        $this->localComunicationController = new Comunication\LocalFileComunicationController();

        if (defined("LOCAL_COMUNICATION_CONTROLLER") && !empty(LOCAL_COMUNICATION_CONTROLLER)) {
            $LocalComunication = LOCAL_COMUNICATION_CONTROLLER;
            $LocalComunicationController = new $LocalComunication();
            if ($LocalComunicationController instanceof LocalComunicationInterface) {
                $this->localComunicationController = $LocalComunicationController;
            } else {
                throw new Exception('Invalid LocalComunicationClass from StompConfig. LocalComunicationClass hase to implament LocalComunicationInterface');
            }
        }
        return $this->localComunicationController;
    }

    /**
     * it's creating ReceivedFrameController based on Received_Frame_Controller from StompConfig.php';
     *
     * @return  ReceivedFrameController
     */
    public function getReceivedFrameController()
    {
        $this->receivedFrameController = new Comunication\ReceivedFrameFileController();

        if (defined("RECEIVED_FRAME_CONTROLLER") && !empty(RECEIVED_FRAME_CONTROLLER)) {
            $ReceivedFrameControllerString = RECEIVED_FRAME_CONTROLLER;
            $ReceivedFrameController = new $ReceivedFrameControllerString();
            if ($ReceivedFrameController instanceof Comunication\ReceivedFrameControllerInterface) {
                $this->receivedFrameController = $ReceivedFrameController;
            } else {
                throw new Exception('Invalid ReceivedFrameController from StompConfig. ReceivedFrameController hase to implament ReceivedFrameControllerInterface');
            }
        }
        return $this->receivedFrameController;
    }

    /**
     * it's creating ReceivedFrameController based on Received_Frame_Controller from StompConfig.php';
     *
     * @return  ReceivedFrameController
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
