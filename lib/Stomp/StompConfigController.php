<?php
namespace Secuconnect\Client\STOMP;
include 'StompConfig.php';
use Secuconnect\Client\STOMP\Comunication;

class StompConfigController
{
    
    private $LocalComunicationController;
    private $ReceivedFrameController;
    
    
     /**
     * it's creating LocalComunicationController based on Local_Comunication_Controller from StompConfig.php';
     *
     * @return  $LocalComunicationController
     */
    public function getLocalComunicationController() {
        if(!defined(Local_Comunication_Controller) || empty(Local_Comunication_Controller))
        {
            // use dafult
//            Comunication\LocalFileComunicationClass::
            $this->LocalComunicationController = new Comunication\LocalFileComunicationController();
        } else {
            $LocalComunication = Local_Comunication_Controller;
            $LocalComunicationController= new $LocalComunication();
            if($LocalComunicationController instanceof LocalComunicationInterface)
            {
                $this->LocalComunicationController = $LocalComunicationController;
            } else {
                throw new Exception('Invalid LocalComunicationClass from StompConfig. LocalComunicationClass hase to implament LocalComunicationInterface');
            }
        }
        return $this->LocalComunicationController;
    }
    
     /**
     * it's creating ReceivedFrameController based on Received_Frame_Controller from StompConfig.php';
     *
     * @return  ReceivedFrameController
     */
    public function getReceivedFrameController() {
        if(!defined(Received_Frame_Controller) || empty(Received_Frame_Controller))
        {
            // use dafult
            $this->ReceivedFrameController = new Comunication\ReceivedFrameFileController();
        } else {
            $ReceivedFrameControllerString = Received_Frame_Controller;
            $ReceivedFrameController = new $ReceivedFrameControllerString();
            if($ReceivedFrameController instanceof ReceivedFrameControllerInterface)
            {
                $this->ReceivedFrameController = $ReceivedFrameController;
            } else {
                throw new Exception('Invalid ReceivedFrameController from StompConfig. ReceivedFrameController hase to implament ReceivedFrameControllerInterface');
            }
        }
        return $this->ReceivedFrameController;
    }
    
    
}
