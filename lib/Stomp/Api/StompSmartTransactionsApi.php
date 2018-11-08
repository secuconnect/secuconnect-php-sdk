<?php
/**
 * StompSmartTransactionsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * NOTE: This class is auto generated (included from mustache files) by the swagger code generator program.
 * If you need to change or add something add it also in swagger code generator
 */

namespace Secuconnect\Client\STOMP\Api;

use \Secuconnect\Client\STOMP\Comunication;
use \Secuconnect\Client\STOMP\Client;
use \Secuconnect\Client\STOMP;
use stdClass;
use StompFrame;

class StompSmartTransactionsApi
{
    
    /**
     * Operation addTransaction
     *
     * STOMP Smart/Transactions
     *
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $SmartTransactionsDTO Smart transaction properties (required)
     * @return StompResponse $response
     */
    public function addTransaction($SmartTransactionsDTO)
    {
        
        $destinationObj = new stdClass();
        $destinationObj->action = 'Smart.Transactions';
        $destinationObj->method ='CREATE';

        $message = new stdClass();
        $message->pid = '';
        $message->sid = '';
        $message->data = json_encode($SmartTransactionsDTO);
        
        $response = new Client\StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message),json_encode($destinationObj));
            $response->setMessage('Message sent to StompController');
            $response->setOkStatus();
        } catch (Exception $exc) {
            $response->setMessage($exc->getMessage());
            $response->setErrorStatus();
        }

        return $response;
    }
    
    /**
     * Operation preTransaction
     *
     * POST Smart/Transactions/{smartTransactionId}/PreTransaction
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return StompResponse $response
     */
    public function preTransaction($SmartTransactionId)
    {        
        $destinationObj->action = 'Smart.Transactions.PreTransaction';
        $destinationObj->method ='EXECUTE';

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = '';
        $message->data = '';
        
        $response = new Client\StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message),json_encode($destinationObj));
            $response->setMessage('Message sent to StompController');
            $response->setOkStatus();
        } catch (Exception $exc) {
            $response->setMessage($exc->getMessage());
            $response->setErrorStatus();
        }

        return $response;
    }
    
    /**
     * Operation cancelTransaction
     *
     * POST Smart/Transactions/{smartTransactionId}/cancel
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return StompResponse $response
     */
    public function cancelTransaction($SmartTransactionId)
    {

        $destinationObj = new stdClass();
        $destinationObj->action = 'Smart.Transactions.cancel';
        $destinationObj->method ='EXECUTE';

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = '';
        $message->data = '';
        
        $response = new Client\StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message),json_encode($destinationObj));
            $response->setMessage('Message sent to StompController');
            $response->setOkStatus();
        } catch (Exception $exc) {
            $response->setMessage($exc->getMessage());
            $response->setErrorStatus();
        }

        return $response;
    }
    
    /**
     * Operation cancelTrx
     *
     * POST Smart/Transactions/{smartTransactionId}/canceltrx
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return StompResponse $response
     */
    public function cancelTrx($SmartTransactionId)
    {       
        
        $destinationObj = new stdClass();
        $destinationObj->action = 'Smart.Transactions.canceltrx';
        $destinationObj->method ='EXECUTE';

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = '';
        $message->data = '';
        
        $response = new Client\StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message),json_encode($destinationObj));
            $response->setMessage('Message sent to StompController');
            $response->setOkStatus();
        } catch (Exception $exc) {
            $response->setMessage($exc->getMessage());
            $response->setErrorStatus();
        }

        return $response;
    }
    
    /**
     * Operation getAll
     *
     * GET Smart/Transactions
     *
     * @return StompResponse $response
     */
    public function getAll()
    {
        
        $destinationObj = new stdClass();
        $destinationObj->action = 'Smart.Transactions';
        $destinationObj->method ='GET';

        $message = new stdClass();
        $message->pid = '';
        $message->sid = '';
        $message->data = '';
        
        $response = new Client\StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message),json_encode($destinationObj));
            $response->setMessage('Message sent to StompController');
            $response->setOkStatus();
        } catch (Exception $exc) {
            $response->setMessage($exc->getMessage());
            $response->setErrorStatus();
        }

        return $response;
    }
    
    /**
     * Operation getOne
     *
     * GET Smart/Transactions/{smartTransactionId}
     *
     * @param string $SmartTransactionId Smart transaction id (required)
     * @return StompResponse $response/
     * 

     */
    public function getOne($SmartTransactionId)
    {        
        
        $destinationObj = new stdClass();
        $destinationObj->action = 'Smart.Transactions';
        $destinationObj->method ='GET';

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = '';
        $message->data = '';
        
        $response = new Client\StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message),json_encode($destinationObj));
            $response->setMessage('Message sent to StompController');
            $response->setOkStatus();
        } catch (Exception $exc) {
            $response->setMessage($exc->getMessage());
            $response->setErrorStatus();
        }

        return $response;
    }
    
    /**
     * Operation startTransaction
     *
     * POST Smart/Transactions/{smartTransactionId}/start/{paymentMethod}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param string $payment_method Payment method (required)
     * @return StompResponse $response
     */
    public function startTransaction($SmartTransactionId , $method)
    {
        
        $destinationObj = new stdClass();
        $destinationObj->action = 'Smart.Transactions.Start';
        $destinationObj->method ='CREATE';

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = $method;
        $message->data = '';

        $response = new Client\StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message),json_encode($destinationObj));
            $response->setMessage('Message sent to StompController');
            $response->setOkStatus();
        } catch (Exception $exc) {
            $response->setMessage($exc->getMessage());
            $response->setErrorStatus();
        }

        return $response;
    }
    
    /**
     * Operation updateTransaction
     *
     * PUT Smart/Transactions/{smartTransactionId}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $SmartTransactionsDTO Smart transaction properties (required)
     * @return StompResponse $response
     */
    public function updateTransaction($SmartTransactionId, $SmartTransactionsDTO)
    {    
        
        $destinationObj = new stdClass();
        $destinationObj->action = 'Smart.Transactions';
        $destinationObj->method ='UPDATE';

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = '';
        $message->data = json_encode($SmartTransactionsDTO);


        $response = new Client\StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message),json_encode($destinationObj));
            $response->setMessage('Message sent to StompController');
            $response->setOkStatus();
        } catch (Exception $exc) {
            $response->setMessage($exc->getMessage());
            $response->setErrorStatus();
        }

        return $response;
    }

    /**
     * Operation updateTransaction
     *
     *
     * @param string $message (required)
     * @param string $message (required)
     * @return StompResponse $response
     */
    private function SendMsgToStompController($message, $destination) {
        $ConfigController = new STOMP\StompConfigController();
        $localComunicationController = $ConfigController->getLocalComunicationController();
        $response = $localComunicationController->SendMsgToStompController(['MsgFrame'=>$message,'Destination'=>$destination]);
        return $response;
    }
}