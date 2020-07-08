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
    <title>Encuestas 2</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark fixed-top">
        <a class="navbar-brand" style="color: white;">Encuesta 2</a>
    </nav>
    <div class="container-fluid">
        <div style="padding-bottom: 74px;"></div>
        <div class="row justify-content-center">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <div class="col-sm-12">
                    <div class="card bg-dark text-white mb-1">
                        <div class="card-body">
                            <h2 class="card-title">¿Tienes conocimiento en el uso de equipos de cómputo?</h2>
                            <?php foreach ($bebidas as $bebida) : ?>
                                <div class="col-12">
                                    <label class="h5">
                                        <input type="radio" name="radiobebida" value="<?php echo $bebida['opcion']; ?>" required>
                                        <span class="<?php echo $bebida['seleccion']; ?>"><?php echo strtoupper($bebida['seleccion']); ?>)</span>
                                        <?php echo $bebida['opcion']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-dark text-white mb-1">
                        <div class="card-body">
                            <h2 class="card-title">¿Crees que las clases En línea son funcionales?</h2>
                            <?php foreach ($virus as $viru) : ?>
                                <div class="col-12">
                                    <label class="h5">
                                        <input type="radio" name="radiovirus" value="<?php echo $viru['opcion']; ?>" required>
                                        <span class="<?php echo $viru['seleccion']; ?>"><?php echo strtoupper($viru['seleccion']); ?>)</span>
                                        <?php echo $viru['opcion']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-dark text-white mb-1">
                        <div class="card-body">
                            <h2 class="card-title">¿Crees que hacer home office es funcional?</h2>
                            <?php foreach ($frutas as $fruta) : ?>
                                <div class="col-12">
                                    <label class="h5">
                                        <input type="radio" name="radiofruta" value="<?php echo $fruta['opcion']; ?>" required>
                                        <span class="<?php echo $fruta['seleccion']; ?>"><?php echo strtoupper($fruta['seleccion']); ?>)</span>
                                        <?php echo $fruta['opcion']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-dark text-white mb-1">
                        <div class="card-body">
                            <h2 class="card-title">¿Toma medidas de prevención ante el coronavirus?</h2>
                            <?php foreach ($novias as $novia) : ?>
                                <div class="col-12">
                                    <label class="h5">
                                        <input type="radio" name="radionovia" value="<?php echo $novia['opcion']; ?>" required>
                                        <span class="<?php echo $novia['seleccion']; ?>"><?php echo strtoupper($novia['seleccion']); ?>)</span>
                                        <?php echo $novia['opcion']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-dark text-white mb-1">
                        <div class="card-body">
                            <h2 class="card-title">¿Cree que el COVID-19 nos ayudó a pensar más en nuestra vida?</h2>
                            <?php foreach ($propuestas as $propuesta) : ?>
                                <div class="col-12">
                                    <label class="h5">
                                        <input type="radio" name="radioprop" value="<?php echo $propuesta['opcion']; ?>" required>
                                        <span class="<?php echo $propuesta['seleccion']; ?>"><?php echo strtoupper($propuesta['seleccion']); ?>)</span>
                                        <?php echo $propuesta['opcion']; ?>
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