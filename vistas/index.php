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

$_SESSION["token"] = md5(uniqid(mt_rand(), true));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower(limpiarDatos($_POST['usuario'])), FILTER_SANITIZE_STRING);
    $password = filter_var(limpiardatos($_POST['contrasena']), FILTER_SANITIZE_STRING);
    $password = hash('sha512', $password);
    $password = hash('sha256', $password);
    $id = idUsuario($conexion, $usuario);
    $logeo = logeo($conexion, $usuario);
    $capcha = $_POST['g-recaptcha-response'];
    $secret = '6LeKHf0UAAAAAJgKoHr86Vj5nYICY9evgp3pxTGH';
    $_SESSION['csrftoken'] = filter_var(limpiarDatos($_POST['csrf']), FILTER_SANITIZE_STRING);

    if (isset($_SESSION['csrftoken']) && $_SESSION['csrftoken'] = $_SESSION["token"]) {
        if ($capcha) {
            $response = file_get_contents(
                "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$capcha"
            );
            $arr = json_decode($response, true);
            if ($arr['success']) {
                if (iniciar_sesion($conexion, $usuario, $password) != false) {
                    $_SESSION['id_usuario'] = $id['id_user'];
                    $_SESSION['usuario'] = $usuario;
                    header('Location:' . RUTA . 'principales/principal.php');
                } else {
                    $errores .= "<div class='alert'>
                                    <strong>¡TE EQUIVOCASTE!</strong> Usuario o contraseña incorrectos.
                                </div>";
                }
            } else {
                $errores .= "<div class='alert'>
                                <strong>¡ERROR!</strong> Al comprobar el reCAPTCHA.
                            </div>";
            }
        } else {
            $errores .= '<div class="alert">
                            <strong>¡ATENCIÓN!</strong> Checkear en "No soy un robot" del reCAPTCHA.
                        </div>';
        }
    } else {
        echo "<script language='JavaScript'>
                window.alert('¡El Formulario ya ha expirado!');
                window.location.href='" . RUTA . "';
              </script>";
    }
}

/* Condicional para verficar si las variable de sesión de usuario esta seteada 
nos redireccione a la pagina de inicio de la aplicación */
if (isset($_SESSION['usuario'])) {
    header('Location: ' . RUTA . 'principales/principal.php');
}



// Insersión de vista de archivo html para inicio de sesión
include 'vistas/index.view.php';
