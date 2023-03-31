<?php
require_once __DIR__ . '/../vendor/autoload.php';

$client = new Google_Client();

// Nos identificamos, con los datos guardados en el JSON de clavesitas
$client->setAuthConfigFile('../token.json');

// Dale caña
$client->refreshToken('1//0fpDEX9dfNFdKCgYIARAAGA8SNwF-L9Ir6-PnWdWhNbu0a7xrK1ERIfUsz6_wPrePGCPsG0fAXp69qugP5BXG-zp22qhZnpEHseE');

$service = new Google_Service_Gmail($client);
// Obtener la cantidad de correos en la bandeja de entrada
$results = $service->users_messages->listUsersMessages('me', ['q' => 'in:inbox']);
$count = count($results->getMessages());

$id = $results->getMessages()[0]->getId();
$message = $service->users_messages->get('me', $id);
$headers = $message->getPayload()->getHeaders();
$body = $message->getPayload()->getBody()->getData();
$parts = $message->getPayload()->getParts();
$info = $parts[0]->getBody()->getData();
$body = str_replace(array('-', '_'), array('+', '/'), $info);
$decoded = base64_decode($body);
$content = utf8_encode($decoded);

// Crear el arreglo de correos
/* $emails = array();
for ($i = 0; $i < $count; $i++) {
$id = $results->getMessages()[$i]->getId();
$message = $service->users_messages->get('me', $id);
$headers = $message->getPayload()->getHeaders();
foreach ($headers as $header) {
if ($header->getName() == 'From') {
$from = $header->getValue();
}
if ($header->getName() == 'Subject') {
$subject = $header->getValue();
}

}
$body = $message->getPayload()->getBody();

$emails[] = array('from' => $from, 'subject' => $subject, 'body' => $body);
} */

// Imprimir el arreglo de correos
$id = $results->getMessages()[0]->getId();
$msg1 = $service->users_messages->get('me', $id);
$id = $results->getMessages()[1]->getId();
$msg2 = $service->users_messages->get('me', $id);

echo '<pre>';
print_r($msg1);
print_r($msg2);
echo '</pre>';
