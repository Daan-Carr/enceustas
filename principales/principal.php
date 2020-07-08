<?php
// Declarando la funcion de sesion iniciada
session_start();

// Llamando archvio de configuracion
require '../data/configuracion.php';

// Insersion de archivo de funciones
require '../data/funciones.php';

$conexion = conexion($bd_config);

$acceso = acceso($conexion, $_SESSION['usuario']);
$acceso2 = acceso2($conexion, $_SESSION['usuario']);

if (isset($_SESSION['backdoor'])) {
    header("Location: " . RUTA . 'principales/encuestas.php');
}

/* Condicional que verifica si la variable sesión esta seteada
hace la insersión del archivo de vista html de lo contrario 
redirecciona al usuario a la pantalla de Login*/
if (isset($_SESSION['usuario'])) {
    require '../vistas/principal.view.php';
} else {
    header("Location: " . RUTA);
}
