<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icono de pestaña -->
    <link rel="shortcut icon" href="<?php echo RUTA; ?>icono.ico" type="image/x-icon">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTA; ?>recursos/css/index.css">
    <!-- Color navegador -->
    <meta name="theme-color" content="#202020">
    <title>Registrate</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Icono de Usuario -->
            <img src="<?php echo RUTA; ?>recursos/img/registro.svg" alt="icono usuer" width="100" height="100" style="padding-top: 10px;">
            <h1 class="col-12 text-center p-2">Registrate</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Ingresa Usuario" autocomplete="off" required>
                <input type="password" id="password" class="fadeIn third" name="contrasena" placeholder="Ingresa Contraseña" required>
                <input type="password" id="password2" class="fadeIn third" name="contrasena2" placeholder="Confirma Contraseña" required>
                <!-- Botón para ver contraseña -->
                <div class="checkbox mb-3" style="padding-top: 20px;">
                    <label>
                        <input type="checkbox" id="mostrar_contrasena"> Mostrar Contraseña
                    </label>
                </div>
                <input type="submit" class="fadeIn fourth" value="Registrar">
                <div class="col-12">
                    <?php echo $errores ?>
                </div>
            </form>
        </div>
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Función para Mostrar Contraseña -->
    <script src="<?php echo RUTA; ?>recursos/js/passview.js"></script>

</body>

</html>