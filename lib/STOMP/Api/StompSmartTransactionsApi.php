<?php

namespace Secuconnect\Client\STOMP\Api;

use Exception;
use Secuconnect\Client\Model\SmartTransactionsDTO;
use Secuconnect\Client\STOMP;
use Secuconnect\Client\STOMP\Client;
use Secuconnect\Client\STOMP\Client\StompResponse;
use stdClass;
use StompFrame;

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
class StompSmartTransactionsApi
{
    /** @const string SMART_TRANSACTIONS_PRETRANSACTION_ACTION */
    const SMART_TRANSACTIONS_ACTION = 'Smart.Transactions';

    /** @const string SMART_TRANSACTIONS_PRETRANSACTION_ACTION */
    const SMART_TRANSACTIONS_PRETRANSACTION_ACTION = 'Smart.Transactions.PreTransaction';

    /** @const string SMART_TRANSACTIONS_CANCEL_ACTION */
    const SMART_TRANSACTIONS_CANCEL_ACTION = 'Smart.Transactions.cancel';

    /** @const string SMART_TRANSACTIONS_CANCELTRX_ACTION */
    const SMART_TRANSACTIONS_CANCELTRX_ACTION = 'Smart.Transactions.canceltrx';

    /** @const string SMART_TRANSACTIONS_START_ACTION */
    const SMART_TRANSACTIONS_START_ACTION = 'Smart.Transactions.Start';

    /**
     * Operation addTransaction
     *
     * STOMP Smart/Transactions
     *
     * @param SmartTransactionsDTO $SmartTransactionsDTO Smart transaction properties (required)
     * @return StompResponse $response
     */
    public function addTransaction($SmartTransactionsDTO)
    {
        $destinationObj = new stdClass();
        $destinationObj->action = self::SMART_TRANSACTIONS_ACTION;
        $destinationObj->method = Client\Destination::CREATE;

        $message = new stdClass();
        $message->pid = '';
        $message->sid = '';
        $message->data = json_encode($SmartTransactionsDTO);

        $response = new StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message), json_encode($destinationObj));
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
     * @param $SmartTransactionId
     * @return StompResponse $response
     * @throws Exception
     */
    public function preTransaction($SmartTransactionId)
    {
        $destinationObj = new stdClass();
        $destinationObj->action = self::SMART_TRANSACTIONS_PRETRANSACTION_ACTION;
        $destinationObj->method = Client\Destination::EXECUTE;

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = '';
        $message->data = '';

        $response = new StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message), json_encode($destinationObj));
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
     * @param $SmartTransactionId
     * @return StompResponse $response
     * @throws Exception
     */
    public function cancelTransaction($SmartTransactionId)
    {
        $destinationObj = new stdClass();
        $destinationObj->action = self::SMART_TRANSACTIONS_CANCEL_ACTION;
        $destinationObj->method = Client\Destination::EXECUTE;

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = '';
        $message->data = '';

        $response = new StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message), json_encode($destinationObj));
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
     * POST Smart/Transactions/{receiptNumber}/canceltrx
     *
     * @param string $receiptNumber (required)
     * @return StompResponse $response
     */
    public function cancelTrx($receiptNumber)
    {
        $destinationObj = new stdClass();
        $destinationObj->action = self::SMART_TRANSACTIONS_CANCELTRX_ACTION;
        $destinationObj->method = Client\Destination::EXECUTE;

        $message = new stdClass();
        $message->pid = $receiptNumber;
        $message->sid = '';
        $message->data = '';

        $response = new StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message), json_encode($destinationObj));
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
        $destinationObj->action = self::SMART_TRANSACTIONS_ACTION;
        $destinationObj->method = Client\Destination::GET;

        $message = new stdClass();
        $message->pid = '';
        $message->sid = '';
        $message->data = '';

        $response = new StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message), json_encode($destinationObj));
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
     */
    public function getOne($SmartTransactionId)
    {
        $destinationObj = new stdClass();
        $destinationObj->action = self::SMART_TRANSACTIONS_ACTION;
        $destinationObj->method = Client\Destination::GET;

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = '';
        $message->data = '';

        $response = new StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message), json_encode($destinationObj));
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
     * @param $SmartTransactionId
     * @param $method
     * @return StompResponse $response
     * @throws Exception
     */
    public function startTransaction($SmartTransactionId, $method)
    {
        $destinationObj = new stdClass();
        $destinationObj->action = self::SMART_TRANSACTIONS_START_ACTION;
        $destinationObj->method = Client\Destination::CREATE;

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = $method;
        $message->data = '';

        $response = new StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message), json_encode($destinationObj));
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
     * @param $SmartTransactionId
     * @param SmartTransactionsDTO $SmartTransactionsDTO Smart transaction properties (required)
     * @return StompResponse $response
     * @throws Exception
     */
    public function updateTransaction($SmartTransactionId, $SmartTransactionsDTO)
    {
        $destinationObj = new stdClass();
        $destinationObj->action = self::SMART_TRANSACTIONS_ACTION;
        $destinationObj->method = Client\Destination::UPDATE;

        $message = new stdClass();
        $message->pid = $SmartTransactionId;
        $message->sid = '';
        $message->data = json_encode($SmartTransactionsDTO);

        $response = new StompResponse();
        try {
            $this->SendMsgToStompController(json_encode($message), json_encode($destinationObj));
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
     * @param $destination
     * @return StompResponse $response
     * @throws Exception
     */
    private function SendMsgToStompController($message, $destination)
    {
        $ConfigController = new STOMP\StompConfigController();
        $localCommunicationController = $ConfigController->getLocalCommunicationController();
        $response = $localCommunicationController->SendMsgToStompController(['MsgFrame' => $message, 'Destination' => $destination]);
        return $response;
    }
}
