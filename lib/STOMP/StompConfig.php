<?php

namespace Secuconnect\Client\STOMP;

// name of Local_Communication_Controller class is resposible for storng messages to be send by STOMP it hase to implament LocalCommunicationInterface
// if empty SDK will use LocalFileCommunicationController
if (!defined('LOCAL_COMMUNICATION_CONTROLLER')) {
    define('LOCAL_COMMUNICATION_CONTROLLER', '');
}

// name of Received_Frame_Controller class is resposible for handling recieved messages from STOMP
// if empty SDK will use ReceivedFrameFileController
if (!defined('RECEIVED_FRAME_CONTROLLER')) {
    define('RECEIVED_FRAME_CONTROLLER', '');
}

// value of microseconds for the delay of each loop (max value 120000000 [2min])
if (!defined('STOMP_SLEEP_VALUE')) {
    define('STOMP_SLEEP_VALUE', 1000);
}

// value of seconds for the atempts to read message from stomp (max value 1200[2min])
if (!defined('HOW_OFTEN_READ_MSG')) {
    define('HOW_OFTEN_READ_MSG', 0.1);
}

// value of microseconds for the atempts to send message from stomp (max value 120 [2min])
if (!defined('HOW_OFTEN_SEND_MSG')) {
    define('HOW_OFTEN_SEND_MSG', 0.1);
}
