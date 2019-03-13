<?php

namespace Secuconnect\Client\STOMP\Communication;

use React\EventLoop\Factory;
use Secuconnect\Client\STOMP\Client\Destination;
use Secuconnect\Client\STOMP\Client\StompClient;
use Secuconnect\Client\STOMP\Client\StompResponse;
use Secuconnect\Client\STOMP\StompConfigController;
use StompFrame;

/**
 * Class StompCommunicationController
 */
class StompCommunicationController
{
    /**
     * @var StompConfigController $StompConfig
     */
    private $StompConfig;

    /**
     * @var StompClient $StompClient
     */
    private $StompClient;

    /**
     * StompCommunicationController constructor.
     */
    public function __construct()
    {
        $this->StompClient = new StompClient();
        $this->StompConfig = new StompConfigController();
    }

    /**
     * it's a proces that is sending and reciving reqests to secucore using STOMP protocol - StompClient
     */
    public function run()
    {
        $howOftenAttemptToSendMsg = $this->StompConfig->getSleepValue($this->StompConfig->howOftenSendMsgConstantName);
        $howOftenAttemptToReadMsg = $this->StompConfig->getSleepValue($this->StompConfig->howOftenReadMsgConstantName);

        $this->SessionsRefresh(); // first session refresh is done always on begining of the StompCommunication so the device will be marked as online in secupay

        $loop = Factory::create();

        $loop->addPeriodicTimer(120, function () { // session refresh 120 s = 2 min :)
            $this->SessionsRefresh();
        });

        $loop->addPeriodicTimer($howOftenAttemptToSendMsg, function () {
            $sendMsg = $this->getMsgToSendForStompController();
            if (!empty($sendMsg)) {
                $this->sendMsgToSecucore($sendMsg);
            }
        });

        $loop->addPeriodicTimer($howOftenAttemptToReadMsg, function () {
            $receivedFrame = $this->getReceivedFrame();
            if (!empty($receivedFrame)) {
                $this->actionAfteReceivedFrame($receivedFrame);
            }
        });

        $loop->run();
    }

    /**
     * @return mixed
     */
    private function SessionsRefresh()
    {
        $action_id = $this->StompClient->makeCorrelationId();
        $messageBody = ['pid' => 'me', 'sid' => '', 'data' => '{"refresh_interval":390}', 'action_id' => $action_id];
        $message = new StompFrame();
        $message->body = json_encode($messageBody);

        $oDestination = new Destination();
        $oDestination->setAction('Auth.Sessions.refresh');
        $oDestination->setMethod('EXECUTE');

        try {
            $this->StompClient->sendMsg($message, $oDestination);
            $response = new StompResponse();
            $response->setOKStatus();
            $response->setMessage('message sent to secucore');
        } catch (\Exception $exc) {
            return $this->logError(null, 'Unexpected Error when sending STOMP message to secucore ' . $exc->getMessage(), debug_backtrace());
        }
    }

    /**
     * it's sending a single message secucore using STOMP protocol - StompClient
     *
     * @param json $sendMsg
     * @param Destination $destinationObj
     * @return StompResponse $response
     */
    private function sendMsgToSecucore($aSendMsg)
    {
        $response = new StompResponse();
        if (!isset($aSendMsg->Destination)) {
            // not exception log to some log file (script has to work even if one massage will be not send)
            return $this->handleError(null, 'invalid Send Stomp message missing Destination', debug_backtrace());
        }
        $destination = json_decode($aSendMsg->Destination);
        $oDestination = new Destination();
        $oDestination->setAction($destination->action);
        $oDestination->setMethod($destination->method);

        if (!isset($aSendMsg->MsgFrame)) {
            return $this->handleError(null, 'invalid Send Stomp message missing MsgFrame', debug_backtrace());
        }
        $MsgFrame = json_decode($aSendMsg->MsgFrame);
        $messageBody = array('pid' => $MsgFrame->pid, 'sid' => $MsgFrame->sid, 'data' => $MsgFrame->data);
        $message = new StompFrame();
        $message->body = json_encode($messageBody);

        try {
            $this->StompClient->sendMsg($message, $oDestination);
            $response = new StompResponse();
            $response->setOKStatus();
            $response->setMessage('message sent to secucore');
        } catch (\Exception $exc) {
            return $this->logError(null, 'unecepetd Error when sending STOMP message to secucore ' . $exc->getMessage(), debug_backtrace());
        }
    }

    /**
     * it's geting a single message to be sent by STOMP
     *
     * @return object [ "MsgFrame", "Destination" ]
     * @throws \Exception
     */
    private function getMsgToSendForStompController()
    {
        $localCommunicationController = $this->StompConfig->getLocalCommunicationController();
        $getSendMsg = $localCommunicationController->getMsgToSendForStompController();
        return $getSendMsg;
    }

    /**
     * it's reading one frame from stomp queue
     *
     * @return mixed $frame (json formatted string)
     */
    private function getReceivedFrame()
    {
        return $this->StompClient->readResponse();
    }

    /**
     * it's calling an action that needs to be done whit the received message from STOMP
     * @param mixed $receivedFrame
     */
    private function actionAfteReceivedFrame($receivedFrame)
    {
        $receivedFrameController = $this->StompConfig->getReceivedFrameController();
        $receivedFrameController->process($receivedFrame);
    }

    /**
     * TO DO!!!! LOGER
     * this function handle error when attempting to send a message using stomp protocol and creates error log for this
     * @param mixed $sendMsg
     */
    private function handleError($sendMsg, $errorMsg, $debug_backtrace)
    {
        $response = new StompResponse();
        $response->setErrorStatus();
        $response->setMessage($errorMsg);

        $logger = $this->StompConfig->getLogger();
        $logger->error($errorMsg);

        return $response;
    }
}
