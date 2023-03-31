<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__.'/utils.php';
require_once __DIR__.'/mail.manager.php';

$client = new Google_Client();

// Nos identificamos, con los datos guardados en el JSON de clavesitas
$client->setAuthConfigFile('../token.json');

// Dale caña
$client->refreshToken('1//0fpDEX9dfNFdKCgYIARAAGA8SNwF-L9Ir6-PnWdWhNbu0a7xrK1ERIfUsz6_wPrePGCPsG0fAXp69qugP5BXG-zp22qhZnpEHseE');

$service = new Google_Service_Gmail($client);
// Obtener la cantidad de correos en la bandeja de entrada
// Obtener mensajes en la bandeja de entrada
$results = $service->users_messages->listUsersMessages('me', ['q' => 'in:inbox']);
$messages = $results->getMessages();
$emails = getInfoEmails($messages, $service);

echo '<pre>';
print_r($emails);

echo '</pre>';