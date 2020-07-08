<?php

// Funcion de conexion a la base de datos
function conexion($bd_config)
{
    try {
        $conexion = new PDO('mysql:host=' . $bd_config['host'] . ';dbname=' . $bd_config['basededatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos)
{
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = strip_tags($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function validarExistUser($conexion, $usuario)
{
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE user = :usuario LIMIT 1');
    $statement->execute(array(':usuario' => $usuario));
    $resultado = $statement->fetch();
    return ($resultado) ? $resultado : false;
}

// Funcion de validacion de Inicio de Sesion
function iniciar_sesion($conexion, $usuario, $password)
{
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE user = :user AND pass = :pass LIMIT 1');
    $statement->execute(array(':user' => $usuario, ':pass' => $password));
    $resultado = $statement->fetch();
    return ($resultado) ? $resultado : false;
}

function idUsuario($conexion, $usuario)
{
    $statement = $conexion->prepare('SELECT id_user FROM usuarios WHERE user = :user LIMIT 1');
    $statement->execute(array(':user' => $usuario));
    $resultado = $statement->fetch();
    return ($resultado) ? $resultado : false;
}

function acceso($conexion, $usuario)
{
    $statement = $conexion->prepare('SELECT acceso FROM usuarios WHERE user = :user LIMIT 1');
    $statement->execute(array(':user' => $usuario));
    $resultado = $statement->fetch();
    return ($resultado) ? $resultado : false;
}

function acceso2($conexion, $usuario)
{
    $statement = $conexion->prepare('SELECT acceso2 FROM usuarios WHERE user = :user LIMIT 1');
    $statement->execute(array(':user' => $usuario));
    $resultado = $statement->fetch();
    return ($resultado) ? $resultado : false;
}

function logeo($conexion, $usuario)
{
    $statement = $conexion->prepare('SELECT logeo FROM usuarios WHERE user = :user LIMIT 1');
    $statement->execute(array(':user' => $usuario));
    $resultado = $statement->fetch();
    return ($resultado) ? $resultado : false;
}

function edad($conexion)
{
    $statement = $conexion->query('SELECT * FROM edad');
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;
}

function empleo($conexion)
{
    $statement = $conexion->query('SELECT * FROM empleo');
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;
}

function musica($conexion)
{
    $statement = $conexion->query('SELECT * FROM musica');
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;
}

function peliculas($conexion)
{
    $statement = $conexion->query('SELECT * FROM peliculas');
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;
}

function comida($conexion)
{
    $statement = $conexion->query('SELECT * FROM comida');
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;
}

function bebida($conexion)
{
    $statement = $conexion->query('SELECT * FROM bebida');
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;
}

function virus($conexion)
{
    $statement = $conexion->query('SELECT * FROM virus');
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;
}

function fruta($conexion)
{
    $statement = $conexion->query('SELECT * FROM fruta');
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;
}

function novia($conexion)
{
    $statement = $conexion->query('SELECT * FROM novia');
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;
}

function propuesta($conexion)
{
    $statement = $conexion->query('SELECT * FROM propuesta');
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;
}

function obtenerVotos($conexion)
{
    $statement = $conexion->query('SELECT SUM(voto) AS votos_totales FROM edad');
    $resultado = $statement->fetch();
    return ($resultado) ? $resultado : false;
}

function obtenerVotos2($conexion)
{
    $statement = $conexion->query('SELECT SUM(voto) AS votos_totales FROM bebida');
    $resultado = $statement->fetch();
    return ($resultado) ? $resultado : false;
}

function obtenerPersonas($conexion)
{
    $statement = $conexion->query('SELECT COUNT(user) AS total_personas FROM usuarios');
    $resultado = $statement->fetch();
    return ($resultado) ? $resultado : false;
}

function calcularPorcentaje($votospreguta, $conteo)
{
    if ($conteo != 0) {
        return ($votospreguta / $conteo) * 100;
    } else {
        return 0;
    }
}
