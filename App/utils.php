<?php
function base64ToUtf8($base64String)
{

    $base64String = str_replace(array('-', '_'), array('+', '/'), $base64String);
    $decodedString = base64_decode($base64String);
    $text_sin_tags = strip_html_tags($decodedString);
    return utf8_encode($text_sin_tags);
}

function strip_html_tags($text)
{
    $text = preg_replace('/<[^>]*>/', '', $text); // Eliminar las etiquetas HTML
    $text = preg_replace('/\s+/', ' ', $text); // Eliminar los espacios en blanco adicionales
    $text = trim($text); // Eliminar los espacios en blanco al inicio y al final del texto

    return $text;
}

function codificarUTF8($texto)
{
    // Verificamos si ya está codificado en UTF-8
    if (mb_detect_encoding($texto, 'UTF-8', true) === false) {
        // Si no lo está, lo codificamos a UTF-8
        $texto = utf8_encode($texto);
    }
    return $texto;
}

function convertirHtmlToUtf8($texto)
{
    $patron = '/&([a-z]{1,5}|#\d{1,4});/i';
    if (preg_match_all($patron, $texto, $matches)) {
        for ($i = 0; $i < count($matches[0]); $i++) {
            $entidad = $matches[0][$i];
            $caracter = html_entity_decode($entidad, ENT_COMPAT, 'UTF-8');
            $texto = str_replace($entidad, $caracter, $texto);
        }
    }
    return $texto;
}

function read_json_file($filename)
{
    // Leer el contenido del archivo
    $json = file_get_contents($filename);

    // Decodificar el archivo JSON en un arreglo asociativo
    $array = json_decode($json, true);

    // Devolver el arreglo
    return $array;
}
