<?php
// Declarando la funcion de sesion iniciada
session_start();

// Llamando archvio de configuracion
require '../data/configuracion.php';

// Insersion de archivo de funciones
require '../data/funciones.php';

$conexion = conexion($bd_config);
$conteo = obtenerVotos($conexion);
$votosedad = edad($conexion);
$votosempleo = empleo($conexion);
$votosmusic = musica($conexion);
$votospeli = peliculas($conexion);
$votoscomida = comida($conexion);
$acceso = acceso($conexion, $_SESSION['usuario']);

if ($acceso['acceso'] != 'Contestada') {
    header("Location: " . RUTA . 'principales/principal.php');
}

unset($_SESSION['backdoor']);

/* Condicional que verifica si la variable sesión esta seteada
hace la insersión del archivo de vista html de lo contrario 
redirecciona al usuario a la pantalla de Login*/
if (isset($_SESSION['usuario'])) {
    require '../vistas/graficas.view.php';
} else {
    header("Location: " . RUTA);
}
