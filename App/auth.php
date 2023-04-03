<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/utils.php';
$app_config = read_json_file('./config/config.json');


    // Creamos una conexión con la clase Google_Client
    $client = new Google_Client();

$client->setAuthConfigFile('./config/' . $app_config['gmail']['authPath']);

    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    $client->addScope('https://www.googleapis.com/auth/gmail.modify');
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    $client->setRedirectUri($redirect_uri);
    if (!isset($_GET['code'])) {

        //Aún no lo ha hecho, lo redirigimos pa que le salga la ventanita de permisos esa molona
        $auth_url = $client->createAuthUrl();
        header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
        print_r('Info: Aún no estas autenticado, da click en el siguiente enlace para autenticarte y vuelve a correr');
        echo ($auth_url);
        return false;

    } else {

        //Ya lo ha hecho, lo autenticamos pa sacar su mail del id del calendario primario
        $client->authenticate($_GET['code']);
        $merengue = $client->getAccessToken();

        // Guardamos la clave refrescadora
        $codigo = $merengue['refresh_token'];
$app_config['gmail']['refreshToken'] = $codigo;
write_json_file('./config/config.json', $app_config);
//$myfile = fopen("refresh.token", "w");
//fwrite($myfile,$codigo);
//echo 'Se ha generado el token de recarga, puedes correr draftsApp';
include './templates/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Se generó un nuevo <small>refresh token</small></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class='btn btn-primary' href='./index.php'>Regresar al Inicio</a>
        </div>
    </div>
</div>
<?php

        // Lo normal es guardarla en una base de datos, pero ahora solo copiala para pegarla en el otro archivo.
    }