<?php
namespace Secuconnect\Client\STOMP;
// name of Local_Comunication_Controller class is resposible for storng messages to be send by STOMP it hase to implament LocalComunicationInterface 
// if empty SDK will use LocalFileComunicationController
define('Local_Comunication_Controller', '');
// name of Received_Frame_Controller class is resposible for handling recieved messages from STOMP
// if empty SDK will use ReceivedFrameFileController
define('Received_Frame_Controller','');