<?php

namespace Secuconnect\Client\STOMP\Communication;

/**
 * Class LocalFileCommunicationController
 */
class LocalFileCommunicationController implements LocalCommunicationInterface
{
    /** @const string MSG_FILES_DIR directory of messages waiting to be send by STOMP */
    const MSG_FILES_DIR = __DIR__ . '/msg_to_send';

    /**
     * gets stored messages that need to be sent by STOMP.
     *
     * @return object $msg
     */
    public function getMsgToSendForStompController()
    {
        $msg = null;
        if (file_exists(self::MSG_FILES_DIR . '/' . date("Ymd")) && count(scandir(self::MSG_FILES_DIR . '/' . date("Ymd"))) > 2) {
            $files = scandir(self::MSG_FILES_DIR . '/' . date("Ymd"));
            $firstFile = self::MSG_FILES_DIR . '/' . date("Ymd") . '/' . $files[2];// because [0] = "." [1] = ".."
            $msg = json_decode(file_get_contents($firstFile));
            unlink($firstFile);
        }
        return $msg;
    }

    /**
     * stores messages that need to be send by STOMP
     *
     * @param object|array $msg
     */
    public function sendMsgToStompController($msg)
    {
        $dir = self::MSG_FILES_DIR . DIRECTORY_SEPARATOR . date("Ymd");
        $this->createDirIfNeeded($dir);

        $fileName = $this->createFileName();

        file_put_contents($dir . DIRECTORY_SEPARATOR . $fileName, json_encode($msg), FILE_APPEND);
    }

    /**
     * create unique filename
     *
     * @return string $fileName
     */
    private function createFileName()
    {
        $fileName = time() . uniqid();
        return $fileName;
    }

    /**
     * checks if dir exist if not creates this dir
     *
     * @param string $dir
     */
    private function createDirIfNeeded($dir)
    {
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
    }
}
