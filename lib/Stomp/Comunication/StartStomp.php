<?php 

namespace Secuconnect\Client\STOMP\Comunication;
require_once __DIR__.'/../../../vendor/autoload.php';


use Secuconnect\Client\Authentication\Authenticator;

Authenticator::authenticateByDevice(
	'', // clientId
	'', // $clientSecret
	'' //  $uuid
);

$StompComunicationController = new StompComunicationController();
$StompComunicationController->run();