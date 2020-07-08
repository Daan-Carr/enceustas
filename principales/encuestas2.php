<?php
// Declarando la funcion de sesion iniciada
session_start();

// Llamando archvio de configuracion
require '../data/configuracion.php';

// Insersion de archivo de funciones
require '../data/funciones.php';

$conexion = conexion($bd_config);

$bebidas = bebida($conexion);
$virus = virus($conexion);
$frutas = fruta($conexion);
$novias = novia($conexion);
$propuestas = propuesta($conexion);
$acceso = acceso2($conexion, $_SESSION['usuario']);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $be = filter_var(limpiarDatos($_POST['radiobebida']), FILTER_SANITIZE_STRING);
    $vi = filter_var(limpiarDatos($_POST['radiovirus']), FILTER_SANITIZE_STRING);
    $fr = filter_var(limpiarDatos($_POST['radiofruta']), FILTER_SANITIZE_STRING);
    $no = filter_var(limpiarDatos($_POST['radionovia']), FILTER_SANITIZE_STRING);
    $pr = filter_var(limpiarDatos($_POST['radioprop']), FILTER_SANITIZE_STRING);
    $id = $_SESSION['id_usuario'];

    $statement = $conexion->prepare(
        'UPDATE bebida SET voto = voto + 1 WHERE opcion = :opcion'
    );

    $statement->execute(array(
        ':opcion' => $be
    ));

    $statement = $conexion->prepare(
        'UPDATE virus SET voto = voto + 1 WHERE opcion = :opcion'
    );

    $statement->execute(array(
        ':opcion' => $vi
    ));

    $statement = $conexion->prepare(
        'UPDATE fruta SET voto = voto + 1 WHERE opcion = :opcion'
    );

    $statement->execute(array(
        ':opcion' => $fr
    ));

    $statement = $conexion->prepare(
        'UPDATE novia SET voto = voto + 1 WHERE opcion = :opcion'
    );

    $statement->execute(array(
        ':opcion' => $no
    ));

    $statement = $conexion->prepare(
        'UPDATE propuesta SET voto = voto + 1 WHERE opcion = :opcion'
    );

    $statement->execute(array(
        ':opcion' => $pr
    ));

    $statement = $conexion->prepare(
        'UPDATE usuarios SET acceso2 = "Contestada" WHERE id_user = :id'
    );
    $statement->execute(array(
        ':id' => $id
    ));

    header('Location:' . RUTA . 'principales/graficas2.php');
}

$_SESSION['backdoor'] = 'back';

if ($acceso['acceso2'] == 'Contestada') {
    header("Location: " . RUTA . 'principales/graficas2.php');
}

/* Condicional que verifica si la variable sesión esta seteada
hace la insersión del archivo de vista html de lo contrario
redirecciona al usuario a la pantalla de Login*/
if (isset($_SESSION['usuario'])) {
    require '../vistas/encuestas2.view.php';
} else {
    header("Location: " . RUTA);
}
