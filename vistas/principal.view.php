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
    <link rel="stylesheet" href="<?php echo RUTA; ?>recursos/css/principal.css">
    <!-- Color navegador -->
    <meta name="theme-color" content="#202020">
    <title>Iniciar Encuesta</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark fixed-top">
        <a class="navbar-brand" style="color: white;">Bienvenido <?php echo $_SESSION['usuario']; ?></a>
        <form class="form-inline" action="<?php echo RUTA; ?>principales/cerrar.php" method="POST">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Salir</button>
        </form>
    </nav>
    <div class="container-fluid">
        <div style="padding-bottom: 75px;"></div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card bg-dark text-white mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Encuesta 1</h5>
                        <p class="card-text">La encuesta que esta por contestar es con fines educativos.
                            <?php
                            if ($acceso['acceso'] == 'Contestada') {
                                echo '<span class="parpadea text"><strong>(Encuesta Contestada)</strong>';
                            }
                            ?>
                        </p>
                        <a href="<?php echo RUTA; ?>principales/encuestas.php" class="btn btn-primary">
                            <?php
                            if ($acceso['acceso'] != 'Contestada') {
                                echo 'Ir a Encuesta 1';
                            } else {
                                echo 'Ir a las Graficas ➤';
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-dark text-white mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Encuesta 2</h5>
                        <p class="card-text">La encuesta que esta por contestar es con fines educativos.
                            <?php
                            if ($acceso2['acceso2'] == 'Contestada') {
                                echo '<span class="parpadea text"><strong>(Encuesta Contestada)</strong>';
                            }
                            ?>
                        </p>
                        <a href="<?php echo RUTA; ?>principales/encuestas2.php" class="btn btn-primary">
                            <?php
                            if ($acceso2['acceso2'] != 'Contestada') {
                                echo 'Ir a Encuesta 2';
                            } else {
                                echo 'Ir a las Graficas ➤';
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-light bg-dark fixed-bottom text-white">
        &copy; Copyright 2020 | Encuestas
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>