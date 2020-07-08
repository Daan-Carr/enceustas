<?php
// Declarando la funcion de sesion iniciada
session_start();

// Llamando archvio de configuracion
require '../data/configuracion.php';

// Insersion de archivo de funciones
require '../data/funciones.php';

$conexion = conexion($bd_config);

$edades = edad($conexion);
$empleos = empleo($conexion);
$musica = musica($conexion);
$peliculas = peliculas($conexion);
$comidas = comida($conexion);
$acceso = acceso($conexion, $_SESSION['usuario']);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ed = filter_var(limpiarDatos($_POST['radioedad']), FILTER_SANITIZE_STRING);
    $em = filter_var(limpiarDatos($_POST['radioempleo']), FILTER_SANITIZE_STRING);
    $mu = filter_var(limpiarDatos($_POST['radiomusic']), FILTER_SANITIZE_STRING);
    $pe = filter_var(limpiarDatos($_POST['radiopeli']), FILTER_SANITIZE_STRING);
    $co = filter_var(limpiarDatos($_POST['radiocomida']), FILTER_SANITIZE_STRING);
    $id = $_SESSION['id_usuario'];

    $statement = $conexion->prepare(
        'UPDATE empleo SET voto = voto + 1 WHERE opcion = :opcion'
    );

    $statement->execute(array(
        ':opcion' => $em
    ));

    $statement = $conexion->prepare(
        'UPDATE musica SET voto = voto + 1 WHERE opcion = :opcion'
    );

    $statement->execute(array(
        ':opcion' => $mu
    ));

    $statement = $conexion->prepare(
        'UPDATE peliculas SET voto = voto + 1 WHERE opcion = :opcion'
    );

    $statement->execute(array(
        ':opcion' => $pe
    ));

    $statement = $conexion->prepare(
        'UPDATE comida SET voto = voto + 1 WHERE opcion = :opcion'
    );

    $statement->execute(array(
        ':opcion' => $co
    ));

    $statement = $conexion->prepare(
        'UPDATE edad SET voto = voto + 1 WHERE opcion = :opcion'
    );

    $statement->execute(array(
        ':opcion' => $ed
    ));


    $statement = $conexion->prepare(
        'UPDATE usuarios SET acceso = "Contestada" WHERE id_user = :id'
    );
    $statement->execute(array(
        ':id' => $id
    ));

    header('Location:' . RUTA . 'principales/graficas.php');
}

$_SESSION['backdoor'] = 'back';

if ($acceso['acceso'] == 'Contestada') {
    header("Location: " . RUTA . 'principales/graficas.php');
}

/* Condicional que verifica si la variable sesión esta seteada
hace la insersión del archivo de vista html de lo contrario 
redirecciona al usuario a la pantalla de Login*/
if (isset($_SESSION['usuario'])) {
    require '../vistas/encuestas.view.php';
} else {
    header("Location: " . RUTA);
}
