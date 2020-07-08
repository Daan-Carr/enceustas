<?php
// Declarando la funcion de sesion iniciada
session_start();

// Llamando archvio de configuracion
require_once '../data/configuracion.php';

// Insersion de archivo de funciones
require_once '../data/funciones.php';

// Iniciando la Conexion a la Base de Datos
$conexion = conexion($bd_config);

// Sentencia para cambiar el estatus de conexion de usuario a Desconectado
$statement = $conexion->prepare(
    "UPDATE usuarios SET logeo = 'Desconectado' WHERE id_user = :id"
);

$statement->execute(array(
    ':id' => $_SESSION['id_usuario']
));

// Destruyendo la sesión
session_destroy();

// Limpiando la variable SESSION
$_SESSION =  array();

// Reedireccionamiento a index.php
header("Location: " . RUTA);
