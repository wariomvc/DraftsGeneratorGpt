<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__.'/utils.php';
require_once __DIR__.'/mail.manager.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/openai.php';


$gmail = new DraftCreator($config);
$mails = $gmail->getInfoEmails();
$openAIclient = new OpenAIClient($config);
$respuestas = array();
if(!empty($mails))
foreach ($mails as $mail) {    
    $gpt_response = $openAIclient->create_response($mail['body']."\n".$mail['name']);
    if($gpt_response!=null){
      $gmail->createDraft($mail['address'], $gpt_response['choices'][0]['text']);
      $gmail->setReadMail($mail['id']);
      print("Exitoso: Se ha creado borrador para el email: ".$mail['address']."\n");
    }
    else{
        print('Info openAI: No generó una respuesta para el email: '.$mail['address']."\n");
    }

}else print('Info Gmail: No hay emails sin Leer');