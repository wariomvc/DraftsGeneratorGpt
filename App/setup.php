<?php
include './templates/header.php';
require_once __DIR__ . '/utils.php';
$app_config = read_json_file('./config/config.json');
$log='';
if (!empty($_POST)) {
    $app_config['draft_app']['reloadtime'] = $_POST['reloadtime'];
    $app_config['draft_app']['auto'] = boolval($_POST['auto']);
    $app_config['openai']['key'] = $_POST['key'];
    $app_config['openai']['model'] = $_POST['model'];
    $app_config['openai']['max_tokens'] = $_POST['max_tokens'];
    $app_config['openai']['temperature'] = $_POST['temperature'];
    $app_config['openai']['top_p'] = $_POST['top_p'];
    $app_config['openai']['frequency_penalty'] = $_POST['frequency_penalty'];
    $app_config['openai']['presence_penalty'] = $_POST['presence_penalty'];
    $app_config['openai']['stop'] = $_POST['stop'];
    $app_config['db']['username'] = $_POST['username'];
    $app_config['db']['password'] = $_POST['password'];
    $app_config['db']['dbname'] = $_POST['dbname'];
    $app_config['db']['table'] = $_POST['table'];
    $app_config['gmail']['refreshToken'] = $_POST['refreshToken'];
    $app_config['gmail']['authPath'] = $_POST['authPath'];
    write_json_file('./config/config.json', $app_config);
    $log = 'Se Actualizó el archivo de configuración';
}
?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h2>Ajustes de la App</h2>
            <p><?php echo $log?></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="" method="post">
                <div class="row">
                    <h4>Draft App</h4>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="colFormLabelSm" class=" col-form-label col-form-label-sm">Tiempo para
                            Recarga en milisegundos</label>
                        <input type="text" class="form-control from-control-sm" name="reloadtime"
                            value="<?php echo $app_config['draft_app']['reloadtime'] ?>">
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="auto" id="manual" value="0"
                                <?php echo $app_config['draft_app']['auto'] ? '' : 'checked' ?>>
                            <label class="form-check-label" for="manual">
                                Actualización Manual
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="auto" id="auto" value="1"
                                <?php echo $app_config['draft_app']['auto'] ? 'checked' : '' ?>>
                            <label class="form-check-label" for="auto">
                                Actualización Autómatica
                            </label>
                        </div>


                    </div>
                    <hr>
                    <div class="row">
                        <h4>Gmail API</h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Refresh
                                Token</label>
                            <input type="text" class="form-control from-control-sm" name="refreshToken" readonly
                                value="<?php echo $app_config['gmail']['refreshToken'] ?>">
                            <?php if (empty($app_config['gmail']['refreshToken'])) {
    echo 'Ve a Autorización para generar el refresh Token';
}
?>
                        </div>
                        <div class="col">
                            <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Archivo de
                                Credenciales</label>
                            <input class="form-control" type="text" id="modelo" name="authPath"
                                value="<?php echo $app_config['gmail']['authPath'] ?>">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h4>Open AI</h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">API
                                key</label>
                            <input type="text" class="form-control from-control-sm" name="key"
                                value="<?php echo $app_config['openai']['key'] ?>">
                        </div>
                        <div class="col">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Modelo</label>
                            <input class="form-control" type="text" id="modelo" name="model"
                                value="<?php echo $app_config['openai']['model'] ?>">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Max
                                Tokens</label>
                            <input type="text" class="form-control from-control-sm" name="max_tokens"
                                value="<?php echo $app_config['openai']['max_tokens'] ?>">
                        </div>
                        <div class="col">
                            <label for="colFormLabelSm" class=" col-form-label col-form-label-sm">Temperature</label>
                            <input class="form-control" type="text" id="temperature" name="temperature"
                                value="<?php echo $app_config['openai']['temperature'] ?>">

                        </div>
                        <div class="col">
                            <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Top P</label>
                            <input class="form-control" type="text" id="top_p" name="top_p"
                                value="<?php echo $app_config['openai']['top_p'] ?>">

                        </div>
                        <div class="col">
                            <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Frencuency
                                Penalty</label>
                            <input class="form-control" type="text" id="frecuency_penalty" name="frequency_penalty"
                                value="<?php echo $app_config['openai']['frequency_penalty'] ?>">

                        </div>
                        <div class="col">
                            <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Presence
                                Penalty</label>
                            <input class="form-control" type="text" id="presence_penalty" name="presence_penalty"
                                value="<?php echo $app_config['openai']['presence_penalty'] ?>">

                        </div>
                        <div class="col">
                            <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Stop</label>
                            <input class="form-control" type="text" id="stop" name="stop"
                                value="<?php echo $app_config['openai']['stop'] ?>">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h4>Base de Datos</h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="colFormLabelSm" class=" col-form-label col-form-label-sm">Nombre DB</label>
                            <input type="text" class="form-control from-control-sm" name="dbname"
                                value="<?php echo $app_config['db']['dbname'] ?>">
                        </div>
                        <div class="col">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tabla</label>
                            <input class="form-control" type="text" id="modelo" name="table"
                                value="<?php echo $app_config['db']['table'] ?>">

                        </div>
                        <div class="col">
                            <label for="colFormLabelSm"
                                class="col-sm-2 col-form-label col-form-label-sm">Usuario</label>
                            <input class="form-control" type="text" id="modelo" name="username"
                                value="<?php echo $app_config['db']['username'] ?>">

                        </div>
                        <div class="col">
                            <label for="colFormLabelSm"
                                class="col-sm-2 col-form-label col-form-label-sm">Contraseña</label>
                            <input class="form-control" type="text" id="modelo" name="password"
                                value="<?php echo $app_config['db']['password'] ?>">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-2">
                            <button class="btn btn-primary" type="submit">Actualizar Datos </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>