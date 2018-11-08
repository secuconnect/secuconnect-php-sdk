<?php
namespace Secuconnect\Client\STOMP\Comunication;

use Secuconnect\Client\STOMP\Client;


class LocalFileComunicationController implements LocalComunicationInterface
{
    const MSG_FILES_DIR = __DIR__.'/msg_to_send';

    /**
     * gets stored messages that need to be sent by STOMP.
     *
     * @return json $msg
     */
    public function getMsgToSendForStompController() {
        $msg = '';
        if(count(scandir(self::MSG_FILES_DIR.'/'.date("Ymd"))) > 2)
        {
            $files = scandir (self::MSG_FILES_DIR.'/'.date("Ymd"));
            $firstFile = self::MSG_FILES_DIR.'/'.date("Ymd") .'/'. $files[2];// because [0] = "." [1] = ".." 
            $msg = json_decode(file_get_contents($firstFile));
            unlink($firstFile);
        }
        return $msg;
    }
    
    /**
     * stores messages that need to be send by STOMP
     *
     * @param json $msg
     */
    public function sendMsgToStompController($msg) {
        
        $this->checkAndCreateDir(self::MSG_FILES_DIR);
        $this->checkAndCreateDir(self::MSG_FILES_DIR.'/'.date("Ymd"));
        $dir = self::MSG_FILES_DIR.'/'.date("Ymd");
        
        $fileName = $this->createFileName();
        
        $response = new Client\StompResponse();
        try {
            file_put_contents($dir.'/'.$fileName,json_encode($msg), FILE_APPEND);
            $response = new Client\StompResponse();
        } catch (Exception $exc) {
            throw new Exception($exc->getMessage());
        }

    }
    
    /**
     * create unique filename
     *
     * @return string $fileName
     */
    private function createFileName() {
        $fileName = time().uniqid();
        return $fileName;
    }
    
    /**
     * checks if dir exist if not creates this dir
     *
     * @param string $dir
     * @return boolean
     */
    private function checkAndCreateDir($dir){
        try {
            if(!file_exists($dir))
            {
                mkdir($dir);
            }
            return true;
        } catch (Exception $exc) {
            throw new Exception($exc);
            return false;
        }  
    }
    
}