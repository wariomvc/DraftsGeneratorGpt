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
    //print("Exitoso: Se ha creado borrador para el email: " . $mail['address'] . "\n");
    } else {
    //print('Info openAI: No generó una respuesta para el email: ' . $mail['address'] . "\n");
    }

    }
} else {
    print('Info Gmail: No hay emails sin Leer');
}
$logs .= $openAIclient->get_logs();
$t2 = time();
include './templates/header.php'
?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Draft App</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Tiempo de ejecución: <?php echo $t2 - $t1 ?> segundos</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title"> <?php echo $number_drafts_created ?><small
                            class="text-body-secondary fw-light"> borradores creados</small>
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><?php echo $number_draft_not_created ?> borradores no creados</li>

                    </ul>
                    <textarea name="logger" id="logger" cols="100" class="form-control"
                        rows="10"><?php echo $logs; ?></textarea>
                    <div class="row">
                        <div class="col">

                            <button type="button" id="updateButton" class="w-100 btn btn-lg btn-primary"
                                <?php echo $app_config['draft_app']['auto'] ? 'disabled' : '' ?>>Actualizar</button>
                        </div>
                        <div class="col">

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="updateCheck"
                                    <?php echo $app_config['draft_app']['auto'] ? 'checked' : '' ?>>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Actualización
                                    Automatica</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="refresh" id="refresh" value="<?php echo $app_config['draft_app']['reloadtime'] ?>">
<script src="js/main.js"> </script>
</body>

</html>