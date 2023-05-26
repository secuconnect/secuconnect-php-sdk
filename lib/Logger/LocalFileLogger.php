<?php

namespace Secuconnect\Client\Logger;


use Exception;
use Psr\Log\LoggerInterface;

/**
 * Class LocalFileLogger
 */
class LocalFileLogger implements LoggerInterface
{
    /**
     * The name of a directory which will contain
     * all logs directories and files.
     *
     * @var string
     */
    private $dirName;

    public function __construct($dirName = 'logs/')
    {
        $this->dirName = $dirName;
    }

    public function emergency($message, array $context = []): void
    {
        $this->saveMessageToLogFile($message,"emergency.log");
    }

    public function alert($message, array $context = []): void
    {
        $this->saveMessageToLogFile($message,"alert.log");
    }

    public function critical($message, array $context = []): void
    {
        $this->saveMessageToLogFile($message,"critical.log");
    }

    public function error($message, array $context = []): void
    {
        $this->saveMessageToLogFile($message,"error.log");
    }

    public function warning($message, array $context = []): void
    {
        $this->saveMessageToLogFile($message,"warning.log");
    }

    public function notice($message, array $context = []): void
    {
        $this->saveMessageToLogFile($message,"notice.log");
    }

    public function info($message, array $context = []): void
    {
        $this->saveMessageToLogFile($message,"info.log");
    }

    public function debug($message, array $context = []): void
    {
        $this->saveMessageToLogFile($message,"debug.log");
    }

    public function log($level, $message, array $context = []): void
    {
        $this->saveMessageToLogFile($message,"log.log");
    }

    /**
     * Function for saving a message in a file.
     *
     * @param $message
     * @param $fileName
     * @throws Exception
     */
    private function saveMessageToLogFile($message, $fileName)
    {
        $this->checkDirectory($this->dirName, 'Error while creating directory for logs.');

        $dirForTodayLogs = $this->dirName . date("d-m-Y") . '/';
        $this->checkDirectory($dirForTodayLogs, 'Error while creating directory for today logs.');

        $message = $this->prepareFullLogMessage($message);

        $fileHandle = fopen($dirForTodayLogs . $fileName, "a+");

        if ($fileHandle) {
            if (!fwrite($fileHandle, $message)) {
                throw new Exception('Error while writing to log file.');
            }

            if (!fclose($fileHandle)) {
                throw new Exception('Error while closing log file.');
            }
        } else {
            throw new Exception('Error while obtaining file pointer resource.');
        }
    }

    /**
     * Function for checking if directory exists and
     * if doesn't exist it create new directory.
     *
     * @param $dirName
     * @param $errorMessage
     * @throws Exception
     */
    private function checkDirectory($dirName, $errorMessage)
    {
        if (!file_exists($dirName)) {
            if (!mkdir($dirName)) {
                throw new Exception($errorMessage);
            }
        }
    }

    /**
     * Function for preparing full log message.
     * It adds the current date and EOL.
     *
     * @param $message
     * @return string
     */
    private function prepareFullLogMessage($message)
    {
        return "[ " . date("G:i:s") . " ] - " . $message . PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getDirName()
    {
        return $this->dirName;
    }

    /**
     * @param $dirName
     */
    public function setDirName($dirName)
    {
        $this->dirName = $dirName;
    }
}
