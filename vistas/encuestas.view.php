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
    <link rel="stylesheet" href="<?php echo RUTA; ?>recursos/css/encuestas.css">
    <!-- Color navegador -->
    <meta name="theme-color" content="#202020">
    <title>Encuesta1</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark fixed-top">
        <a class="navbar-brand" style="color: white;">Encuesta 1</a>
        <form class="form-inline" action="<?php echo RUTA; ?>principales/cerrar.php" method="POST">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Cerrar Sesión</button>
        </form>
    </nav>

    <div style="padding-bottom: 60px;"></div>
    <!--cual es tu edad-------------------------------------------------------------------------------------------->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

        <div class="contenedor-encuesta">
            <h1>¿En que edad te encuentras?</h1>
            <?php foreach ($edades as $edad) : ?>
                <label>
                    <input type="radio" name="radioedad" value="<?php echo $edad['opcion']; ?>" required>
                    <span class="<?php echo $edad['seleccion']; ?>"><?php echo strtoupper($edad['seleccion']); ?></span>
                    <?php echo $edad['opcion']; ?>

                </label>
                <br>
            <?php endforeach; ?>
        </div>
        <br>
        <!--a que te dedicas-------------------------------------------------------------------------------------------->


        <div class="contenedor-encuesta">
            <h1>¿A que te dedicas?</h1>
            <?php foreach ($empleos as $empleo) : ?>
                <label>
                    <input type="radio" name="radioempleo" value="<?php echo $empleo['opcion']; ?>" required>
                    <span class="<?php echo $empleo['seleccion']; ?>"><?php echo strtoupper($empleo['seleccion']); ?></span>
                    <?php echo $empleo['opcion']; ?>

                </label>
                <br>
            <?php endforeach; ?>
        </div>
        <br>
        <!--que musica prefieres-------------------------------------------------------------------------------------------->


        <div class="contenedor-encuesta">
            <h1>¿Genero?</h1>
            <?php foreach ($musica as $music) : ?>
                <label>
                    <input type="radio" name="radiomusic" value="<?php echo $music['opcion']; ?>" required>
                    <span class="<?php echo $music['seleccion']; ?>"><?php echo strtoupper($music['seleccion']); ?></span>
                    <?php echo $music['opcion']; ?>

                </label>
                <br>
            <?php endforeach; ?>
        </div>
        <br>
        <!--que genero de perliculas prefieres-------------------------------------------------------------------------------------------->

        <div class="contenedor-encuesta">
            <h1>¿Tienes Equipo de Cómputo en Casa?</h1>
            <?php foreach ($peliculas as $pelicula) : ?>
                <label>
                    <input type="radio" name="radiopeli" value="<?php echo $pelicula['opcion']; ?>" required>
                    <span class="<?php echo $pelicula['seleccion']; ?>"><?php echo strtoupper($pelicula['seleccion']); ?></span>
                    <?php echo $pelicula['opcion']; ?>

                </label>
                <br>
            <?php endforeach; ?>
        </div>

        <br>
        <!--que comida prefieres-------------------------------------------------------------------------------------------->

        <div class="contenedor-encuesta">
            <h1>¿Tienes Internet En Casa?</h1>
            <?php foreach ($comidas as $comida) : ?>
                <label>
                    <input type="radio" name="radiocomida" value="<?php echo $comida['opcion']; ?>" required>
                    <span class="<?php echo $comida['seleccion']; ?>"><?php echo strtoupper($comida['seleccion']); ?></span>
                    <?php echo $comida['opcion']; ?>

                </label>
                <br>
            <?php endforeach; ?>
        </div>

        <div style="padding-bottom: 100px;"></div>
        <nav class="navbar navbar-light bg-dark fixed-bottom text-white">
            &copy; Copyright 2020 | Encuestas
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Enviar Encuesta</button>
        </nav>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>

</html>