<?php
namespace Secuconnect\Client\STOMP\Comunication;

use Secuconnect\Client\STOMP\Client;
use Secuconnect\Client\STOMP;
//use \Secuconnect\Client;
use StompFrame;

class StompComunicationController
{  
    
    private $StompConfig;
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
    public function run() {

       while (true) {
            $sendMsg = $this->getMsgToSendForStompController();
            if(!empty($sendMsg))
            {
                $this->sendMsgToSecucore($sendMsg);
            }
            
            $receivedFrame = $this->getReceivedFrame();
            if(!empty($receivedFrame))
            {
                $this->actionAfteReceivedFrame($receivedFrame);
                
            }
            sleep(100);
        }
    }
    
    /**
     * it's sending a single message secucore using STOMP protocol - StompClient
     *
     * @param json $sendMsg
     * @param Destination $destinationObj
     * @return StompResponse $response
     */
    private function sendMsgToSecucore($aSendMsg) {
        
        $response = new Client\StompResponse();
        if(!isset($aSendMsg->Destination))
        {
            // not exeption log to some log file (script hase to work evan if one masege will be not send)
            return $this->handleError($sendMsg,'invalid Send Stomp message missing Destination',debug_backtrace());  
        }
        $destination = json_decode($aSendMsg->Destination);
        $oDestination = new Client\Destination();
        $oDestination->setAction($destination->action);
        $oDestination->setMethod($destination->method);
        
        if(!isset($aSendMsg->MsgFrame))
        {
            // not exeption log to some log file (script hase to work evan if one masege will be not send)
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
    private function getMsgToSendForStompController() {
        $localComunicationController = $this->StompConfig->getLocalComunicationController();
        $getSendMsg = $localComunicationController->getMsgToSendForStompController();
        return $getSendMsg;
    }
    
    /**
     * it's reading one frame from stomp queue
     *
     * @return json $frame
     */
    private function getReceivedFrame() {
        $frame = $this->StompClient->readResponse();
        return $frame;
    }
    
    /**
     * it's calling an action that needs to be done whit the received message from STOMP
     * @param json $sendMsg
     */
    private function actionAfteReceivedFrame($receivedFrame) {
        $receivedFrameController = $this->StompConfig->getReceivedFrameController();
        $receivedFrameController->process($receivedFrame);
    }
    
    /**
     * this function handle error when attempting to send a message using stomp protocol and creates error log for this
     * @param json $sendMsg
     */
    private function handleError($sendMsg,$errorMsg,$debug_backtrace) {
//        $errorLogMsg = new \stdClass();
//        $errorLogMsg->message = $sendMsg;
//        $errorLogMsg->error = $errorMsg;
//        $errorLogMsg->debug_backtrace = $debug_backtrace;
//        $this->logger->error(json_encode($errorLogMsg).PHP_EOL);
//        TO DO!!!!
        $response = new Client\StompResponse();
        $response->setErrorStatus();
        $response->setMessage($errorMsg);
        return $response;
    }
}