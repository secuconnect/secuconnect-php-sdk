<?php

namespace Secuconnect\Client\STOMP\Comunication;

use Secuconnect\Client\STOMP\Client;
use Secuconnect\Client\STOMP;
use StompFrame;
use React\EventLoop;

class StompComunicationController
{  
    /** @var StompConfigController $StompConfig */
    private $StompConfig;
    
    /** @var StompClient $StompClient */
    private $StompClient;
    
    public function __construct()
    {
        $this->StompClient = new Client\StompClient();
        $this->StompConfig = new STOMP\StompConfigController();
    }
    
    /**
     * it's a proces that is sending and reciving reqests to secucore using STOMP protocol - StompClient
     *
     */
    public function run() 
    {
        $howOftenAttemptToSendMsg = $this->StompConfig->getSleepValue($this->StompConfig->howOftenSendMsgConstantName);
        $howOftenAttemptToReadMsg = $this->StompConfig->getSleepValue($this->StompConfig->howOftenReadMsgConstantName);

        $this->SessionsRefresh(); // first session refresh is done always on begining of the StompComunication so the device will be marked as online in secupay
        
        $loop = EventLoop\Factory::create();

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
    private function SessionsRefresh() 
    {
        $action_id = $this->StompClient->makeCorrelationId();
        $messageBody = array('pid' => 'me', 'sid' => '', 'data' => '{"refresh_interval":390}','action_id'=>$action_id);
        $message = new StompFrame();
        $message->body = json_encode($messageBody);
        
        $oDestination = new Client\Destination();
        $oDestination->setAction('Auth.Sessions.refresh');
        $oDestination->setMethod('EXECUTE');
        
        try {
            $this->StompClient->sendMsg($message, $oDestination);
            $response = new Client\StompResponse();
            $response->setOKStatus();
            $response->setMessage('message sent to secucore');
        } catch (Exception $exc) {
            return $this->logError($sendMsg,'unecepetd Error when sending STOMP message to secucore '.$exc->getMessage(),debug_backtrace());
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
        $response = new Client\StompResponse();
        if (!isset($aSendMsg->Destination)) {
            // not exeption log to some log file (script hase to work evan if one masege will be not send)
            return $this->handleError($sendMsg,'invalid Send Stomp message missing Destination',debug_backtrace());  
        }
        $destination = json_decode($aSendMsg->Destination);
        $oDestination = new Client\Destination();
        $oDestination->setAction($destination->action);
        $oDestination->setMethod($destination->method);
        
        if (!isset($aSendMsg->MsgFrame)) {
            return $this->handleError($sendMsg,'invalid Send Stomp message missing MsgFrame',debug_backtrace());
        }
        $MsgFrame = json_decode($aSendMsg->MsgFrame);
        $messageBody = array('pid' => $MsgFrame->pid, 'sid' => $MsgFrame->sid, 'data' => $MsgFrame->data);
        $message = new StompFrame();
        $message->body = json_encode($messageBody);

        try {
            $this->StompClient->sendMsg($message, $oDestination);
            $response = new Client\StompResponse();
            $response->setOKStatus();
            $response->setMessage('message sent to secucore');
        } catch (Exception $exc) {
            return $this->logError($sendMsg,'unecepetd Error when sending STOMP message to secucore '.$exc->getMessage(),debug_backtrace());
        }        
    }
    
    /**
     * it's geting a single message to be sent by STOMP 
     *
     * @return json (array) $getSendMsg [ "MsgFrame", "Destination" ]
     */
    private function getMsgToSendForStompController() 
    {
        $localComunicationController = $this->StompConfig->getLocalComunicationController();
        $getSendMsg = $localComunicationController->getMsgToSendForStompController();
        return $getSendMsg;
    }
    
    /**
     * it's reading one frame from stomp queue
     *
     * @return json $frame
     */
    private function getReceivedFrame() 
    {
        $frame = $this->StompClient->readResponse();
        return $frame;
    }
    
    /**
     * it's calling an action that needs to be done whit the received message from STOMP
     * @param json $sendMsg
     */
    private function actionAfteReceivedFrame($receivedFrame) 
    {
        $receivedFrameController = $this->StompConfig->getReceivedFrameController();
        $receivedFrameController->process($receivedFrame);
    }
    
    /**
     * TO DO!!!! LOGER
     * this function handle error when attempting to send a message using stomp protocol and creates error log for this
     * @param json $sendMsg
     */
    private function handleError($sendMsg,$errorMsg,$debug_backtrace) 
    {
        $response = new Client\StompResponse();
        $response->setErrorStatus();
        $response->setMessage($errorMsg);

        $logger = $this->StompConfig->getLogger();
        $logger->error($errorMsg);

        return $response;
    }
}