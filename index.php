<?php

// Declarando la funcion de sesion iniciada
session_start();

// Llamando archvio de configuracion
require 'data/configuracion.php';

// Insersion de archivo de funciones
require 'data/funciones.php';

// Variable de error para mensajes de inicio de sesión
$errores = '';

// Insertando la conexion de la base de datos
$conexion  = conexion($bd_config);
$conteo = obtenerPersonas($conexion);

if (isset($_SESSION['registrado'])) {
    unset($_SESSION['registrado']);
    $errores .= '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>¡Excelente!</strong> Te has registrado con correctamente.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower(limpiarDatos($_POST['usuario'])), FILTER_SANITIZE_STRING);
    $password = filter_var(limpiardatos($_POST['contrasena']), FILTER_SANITIZE_STRING);
    $password = hash('sha512', $password);
    $password = hash('sha256', $password);
    $id = idUsuario($conexion, $usuario);

    if (iniciar_sesion($conexion, $usuario, $password) != false) {
        $_SESSION['id_usuario'] = $id['id_user'];
        $_SESSION['usuario'] = $usuario;
        header('Location:' . RUTA . 'principales/principal.php');
    } else {
        $errores .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>!Te equivocaste¡</strong> Usuario o contraseña incorrectos.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
    }
}

/* Condicional para verficar si las variable de sesión de usuario esta seteada 
nos redireccione a la pagina de inicio de la aplicación */
if (isset($_SESSION['usuario'])) {
    header('Location: ' . RUTA . 'principales/principal.php');
}



// Insersión de vista de archivo html para inicio de sesión
include 'vistas/index.view.php';
