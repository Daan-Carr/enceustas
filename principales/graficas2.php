<?php
// Declarando la funcion de sesion iniciada
session_start();

// Llamando archvio de configuracion
require '../data/configuracion.php';

// Insersion de archivo de funciones
require '../data/funciones.php';

$conexion = conexion($bd_config);
$conteo = obtenerVotos2($conexion);
$votosbebida = bebida($conexion);
$votosvirus = virus($conexion);
$votosfruta = fruta($conexion);
$votosnovia = novia($conexion);
$votosprop = propuesta($conexion);
$acceso = acceso2($conexion, $_SESSION['usuario']);

if ($acceso['acceso2'] != 'Contestada') {
    header("Location: " . RUTA . 'principales/principal.php');
}

unset($_SESSION['backdoor']);

/* Condicional que verifica si la variable sesión esta seteada
hace la insersión del archivo de vista html de lo contrario 
redirecciona al usuario a la pantalla de Login*/
if (isset($_SESSION['usuario'])) {
    require '../vistas/graficas.view2.php';
} else {
    header("Location: " . RUTA);
}
