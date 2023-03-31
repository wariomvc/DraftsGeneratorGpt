<?php
function getInfoEmails($messages, $service)
{
    $emails = array();
    foreach ($messages as $message) {
        $id = $message->getId();
        $message = $service->users_messages->get('me', $id, ['format' => 'full']);
        $headers = $message->getPayload()->getHeaders();
        $body = $message->getPayload()->getBody();
        $parts = $message->getPayload()->getParts();

        $from = '';
        $subject = '';
        $message_body = '';

        // Obtener el remitente y el asunto
        foreach ($headers as $header) {
            if ($header->getName() == 'From') {
                $from = $header->getValue();
            }
            if ($header->getName() == 'Subject') {
                $subject = $header->getValue();
            }
        }

        // Obtener el cuerpo del mensaje
        if ($message->getPayload()->getMimeType() == 'text/html') {
            $message_body = base64ToUtf8($body->getData());
        } else if ($message->getPayload()->getMimeType() == 'multipart/alternative') {
            foreach ($parts as $part) {
                if ($part->getMimeType() == 'text/html') {
                    $message_body = base64ToUtf8($part->getBody()->getData());
                }
            }
        }

        // Agregar el mensaje al arreglo de mensajes
        $emails[] = array('from' => $from, 'subject' => $subject, 'body' => $message_body);
    }
    return $emails;
};