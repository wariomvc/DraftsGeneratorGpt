<?php
/**
 * drafapp.php interfaz de usuario para la generación de los borradores usando gpt
 * Lee los emails de la cuenta de gmail y genera una respuesta para cada uno de ellos.
 * Despues muestra en pantalla el resultado de la ejeción con la opción de que se vuelva
 * a realizar el proceso automaticamente a intervalos regulares de tiempo.
 */

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/utils.php';
require_once __DIR__ . '/mail.manager.php';

require_once __DIR__ . '/openai.php';

$app_config = read_json_file('./config/config.json');
$t1 = time();
$logs = '';

$gmail = new DraftCreator($app_config);
$mails = $gmail->getInfoEmails();

$openAIclient = new OpenAIClient($app_config);

$number_drafts_created = 0;
$number_draft_not_created = 0;
$logs .= $gmail->get_logs();

if (!empty($mails)) {
    foreach ($mails as $mail) {

        $gpt_response = $openAIclient->create_response($mail['body'] . "\n" . $mail['name']);
        if ($gpt_response != null) {
            $gmail->createDraft($mail['address'], $gpt_response['choices'][0]['text'], $mail['message_id'], $mail['subject']);
            $number_drafts_created += 1; //$gmail->setReadMail($mail['id']);
            $logs .= "Exitoso: Se ha creado borrador para el email: " . $mail['address'] . "\n";
            print("Exitoso: Se ha creado borrador para el email: " . $mail['address'] . "\n");
        } else {
            print('Info openAI: No generó una respuesta para el email: ' . $mail['address'] . "\n");
        }

    }
} else {
    print('Info Gmail: No hay emails sin Leer');
}
$logs .= $openAIclient->get_logs();
$t2 = time();
