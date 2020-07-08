<?php

// Borrar reportes de error
// error_reporting(0);

// Variable definida para utilizar en los enlaces o en la reedirección
define('RUTA', "http://{$_SERVER['SERVER_NAME']}/Encuestas/");

//  Arreglo de configuracion de la Base de datos
$bd_config = array(
    // Nombre de dominio o host
    'host' => '127.0.0.1:33065',
    // nombre de la base de datos
    'basededatos' => 'encuestas',
    // Usurio de base de datos
    'usuario' => 'root',
    // Contraseña de base de datos
    'pass' => ''
);
