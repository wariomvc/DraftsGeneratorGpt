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
