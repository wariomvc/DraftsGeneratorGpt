<?php
require_once __DIR__ . '/../vendor/autoload.php';
// Creamos una conexión con la clase Google_Client
$client = new Google_Client();

// Nos identificamos, con los datos guardados en el JSON de clavesitas
$client->setAuthConfigFile('../token.json');

// Establecemos estos dos parámetros que sirven para que la APP pueda conseguir permisos de actuar por su cuenta sin que el usuario esté presente
$client->setAccessType('offline');
//$client->setApprovalPrompt('force');
$client->setPrompt('select_account consent');

// Solicitamos los permisos que necesitamos que el usuario nos ceda
// LISTADO --> https://developers.google.com/identity/protocols/googlescopes
$client->addScope('https://mail.google.com/');
$redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$client->setRedirectUri($redirect_uri);
if (!isset($_GET['code'])) {

//Aún no lo ha hecho, lo redirigimos pa que le salga la ventanita de permisos esa molona
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));

} else {

//Ya lo ha hecho, lo autenticamos pa sacar su mail del id del calendario primario
    $client->authenticate($_GET['code']);
    $merengue = $client->getAccessToken();

// Guardamos la clave refrescadora
    $codigo = $merengue['refresh_token'];
    echo $codigo;

// Lo normal es guardarla en una base de datos, pero ahora solo copiala para pegarla en el otro archivo.
}
