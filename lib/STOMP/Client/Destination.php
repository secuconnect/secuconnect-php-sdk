<?php

namespace Secuconnect\Client\STOMP\Client;

use Exception;
use Secuconnect\Client\Configuration;

/**
 * Class Destination
 */
class Destination
{
    const GET = 'GET';
    const CREATE = 'CREATE';
    const EXECUTE = 'EXECUTE';
    const UPDATE = 'UPDATE';
    const DELETE = 'DELETE';

    private $basicDestination;
    private $method;
    private $action;
    private $appId;

    /**
     * Destination constructor.
     */
    public function __construct()
    {
        $this->basicDestination = Configuration::getDefaultConfiguration()->getBasicStompDestination();
    }

    /**
     * Gets the appId
     *
     * @return string appId
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Sets the appId
     *
     * @param string $appId
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * Gets the method
     *
     * @return string method
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets the method
     *
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Gets the Action
     *
     * @return string Action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets the action
     *
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * prepare Destination for stomp call
     *
     * @return string destination
     * @throws Exception
     */
    public function prepareDestination()
    {
        if (!empty($this->appId)) {
            $this->basicDestination = $this->basicDestination . 'app:';
        } else {
            $this->basicDestination = $this->basicDestination . 'api:';
        }

        switch ($this->method) {
            case self::GET:
                $command = 'get:';
                break;
            case self::CREATE:
                $command = 'add:';
                break;
            case self::EXECUTE:
                $command = 'exec:';
                break;
            case self::UPDATE:
                $command = 'update:';
                break;
            case self::DELETE:
                $command = 'delete:';
                break;
            default:
                throw new Exception(
                    'Invalid method in Destination for STOMP action. Allowed values: ' . self::GET . ', ' . self::CREATE . ', ' . self::EXECUTE . ', ' . self::UPDATE . ', ' . self::DELETE
                );
                break;
        }

        $action = $this->getAction();

        if (!empty($action)) {
            $command = $command . $action;
        }

        return $this->basicDestination . $command;
    }
}
