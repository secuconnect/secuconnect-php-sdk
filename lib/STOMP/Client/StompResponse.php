<?php

namespace Secuconnect\Client\STOMP\Client;

/**
 * Class StompResponse
 */
class StompResponse
{
    const RESPONSE_STATUS_ERROR = 'ERROR';
    const RESPONSE_STATUS_OK = 'OK';

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $message;

    /**
     * Gets the status
     *
     * @return string status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the Status
     *
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
