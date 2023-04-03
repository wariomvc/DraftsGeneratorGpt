<?php
include './templates/header.php';
require_once __DIR__ . '/utils.php';
$app_config = read_json_file('./config/config.json');

//print_r(empty($_POST));
if (!empty($_POST)) {
    $app_config['draft_app']['reloadtime'] = $_POST['reloadtime'];
    $app_config['draft_app']['auto'] = boolval($_POST['auto']);
    $app_config['openai']['key'] = $_POST['key'];
    $app_config['openai']['model'] = $_POST['model'];
    $app_config['db']['username'] = $_POST['username'];
    $app_config['db']['password'] = $_POST['password'];
    $app_config['db']['dbname'] = $_POST['dbname'];
    $app_config['db']['table'] = $_POST['table'];
    $app_config['gmail']['refreshToken'] = $_POST['refreshToken'];
    $app_config['gmail']['authPath'] = $_POST['authPath'];
    write_json_file('./config/config.json', $app_config);
    echo 'Actualizado';
}
?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h2>Ajustes de la App</h2>
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
                            Recarga</label>
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