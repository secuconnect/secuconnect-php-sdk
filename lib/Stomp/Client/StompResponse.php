<?php

namespace Secuconnect\Client\STOMP\Client;

class StompResponse
{
    const RESPONSE_STATUS_ERROR = 'ERROR';
    const RESPONSE_STATUS_OK = 'OK';

    private $status;
    private $message;

    public function __construct()
    {
    }

    /**
     * Gets the status
     *
     * @return string status
     */
    public function getStatus()
    {
        return $this->statust;
    }

    /**
     * Sets the Status
     *
     * @param string $status
     * @return $this
     */
    public function setErrorStatus()
    {
        $this->status = self::RESPONSE_STATUS_ERROR;
        return $this;
    }

    /**
     * Sets the Status
     *
     * @param string $status
     * @return $this
     */
    public function setOkStatus()
    {
        $this->status = self::RESPONSE_STATUS_OK;
        return $this;
    }

    /**
     * Gets the message
     *
     * @return string message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the message
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}
