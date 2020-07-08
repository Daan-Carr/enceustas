<?php
session_start();

// Llamando archvio de configuracion
require '../data/configuracion.php';

// Insersion de archivo de funciones
require '../data/funciones.php';

// Variable de error para mensajes de inicio de sesión
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower(limpiarDatos($_POST['usuario'])), FILTER_SANITIZE_STRING);
    $password = filter_var(limpiarDatos($_POST['contrasena']), FILTER_SANITIZE_STRING);
    $password2 = filter_var(limpiarDatos($_POST['contrasena2']), FILTER_SANITIZE_STRING);

    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>¡Error!</strong> Por favor llena todos los datos correctamente.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
    } else {
        // Insertando la conexion de la base de datos
        $conexion  = conexion($bd_config);
        $consulta = validarExistUser($conexion, $usuario);
        if ($consulta != false) {
            $errores .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>¡Error!</strong> El nombre de usuario ya existe.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
        }
        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);
        $password = hash('sha256', $password);
        $password2 = hash('sha256', $password2);

        if ($password != $password2) {
            $errores .= '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>¡Verifica!</strong> Las contraseñas no coinciden.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
        }

        if ($errores == '') {
            $statement = $conexion->prepare('INSERT INTO usuarios (id_user, user, pass) VALUES (null, :usuario, :pass)');
            $statement->execute(array(':usuario' => $usuario, ':pass' => $password));
            $_SESSION['registrado'] = 'registrate';
            header('Location:' . RUTA);
        }
    }
}

/* Condicional para verficar si las variable de sesión de usuario esta seteada 
nos redireccione a la pagina de inicio de la aplicación */
if (isset($_SESSION['usuario'])) {
    header('Location: ' . RUTA . 'principales/principal');
}




// Insersión de vista de archivo html para inicio de sesión
include '../vistas/registrate.view.php';
