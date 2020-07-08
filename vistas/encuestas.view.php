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
    <title>Encuestas 1</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark fixed-top">
        <a class="navbar-brand" style="color: white;">Encuesta 1</a>
    </nav>
    <div class="container-fluid">
        <div style="padding-bottom: 74px;"></div>
        <div class="row justify-content-center">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <div class="col-sm-12">
                    <div class="card bg-dark text-white mb-1">
                        <div class="card-body">
                            <h2 class="card-title">¿En que edad te encuentras?</h2>
                            <?php foreach ($edades as $edad) : ?>
                                <div class="col-12">
                                    <label class="h5">
                                        <input type="radio" name="radioedad" value="<?php echo $edad['opcion']; ?>" required>
                                        <span class="<?php echo $edad['seleccion']; ?>"><?php echo strtoupper($edad['seleccion']); ?>)</span>
                                        <?php echo $edad['opcion']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-dark text-white mb-1">
                        <div class="card-body">
                            <h2 class="card-title">¿A que te dedicas?</h2>
                            <?php foreach ($empleos as $empleo) : ?>
                                <div class="col-12">
                                    <label class="h5">
                                        <input type="radio" name="radioempleo" value="<?php echo $empleo['opcion']; ?>" required>
                                        <span class="<?php echo $empleo['seleccion']; ?>"><?php echo strtoupper($empleo['seleccion']); ?>)</span>
                                        <?php echo $empleo['opcion']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-dark text-white mb-1">
                        <div class="card-body">
                            <h2 class="card-title">¿Genero?</h2>
                            <?php foreach ($musica as $music) : ?>
                                <div class="col-12">
                                    <label class="h5">
                                        <input type="radio" name="radiomusic" value="<?php echo $music['opcion']; ?>" required>
                                        <span class="<?php echo $music['seleccion']; ?>"><?php echo strtoupper($music['seleccion']); ?>)</span>
                                        <?php echo $music['opcion']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-dark text-white mb-1">
                        <div class="card-body">
                            <h2 class="card-title">¿Tienes Equipo de Cómputo en Casa?</h2>
                            <?php foreach ($peliculas as $pelicula) : ?>
                                <div class="col-12">
                                    <label class="h5">
                                        <input type="radio" name="radiopeli" value="<?php echo $pelicula['opcion']; ?>" required>
                                        <span class="<?php echo $pelicula['seleccion']; ?>"><?php echo strtoupper($pelicula['seleccion']); ?>)</span>
                                        <?php echo $pelicula['opcion']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-dark text-white mb-1">
                        <div class="card-body">
                            <h2 class="card-title">¿Tienes Internet En Casa?</h2>
                            <?php foreach ($comidas as $comida) : ?>
                                <div class="col-12">
                                    <label class="h5">
                                        <input type="radio" name="radiocomida" value="<?php echo $comida['opcion']; ?>" required>
                                        <span class="<?php echo $comida['seleccion']; ?>"><?php echo strtoupper($comida['seleccion']); ?>)</span>
                                        <?php echo $comida['opcion']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div style="padding-bottom: 70px;"></div>
    <nav class="navbar navbar-light bg-dark fixed-bottom text-white">
        &copy; Copyright 2020 | Encuestas
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Enviar</button>
    </nav>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>

</html>