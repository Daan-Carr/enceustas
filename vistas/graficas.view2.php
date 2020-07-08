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
    <title>Gráficas 2</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark fixed-top">
        <a class="navbar-brand" style="color: white;">Gráficas 2</a>
        <form class="form-inline" action="<?php echo RUTA; ?>principales/cerrar.php" method="POST">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Salir</button>
        </form>
    </nav>
    <div class="container-fluid">
        <div style="padding-bottom: 74px;"></div>
        <div class="row text-center">
            <div class="col-sm-12">
                <div class="card bg-dark text-white mb-1">
                    <div class="card-body">
                        <h2 class="card-title">Número de personas que han contestado esta encuesta:</h2>
                        <p class="card-text">
                            <h4><?php echo $conteo["votos_totales"]; ?> Personas</h4>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card bg-dark text-white mb-1">
                    <div class="card-body">
                        <h1 class="card-title">¿Tienes conocimiento en el uso de equipos de cómputo?</h1>
                        <?php foreach ($votosbebida as $votos) :
                            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                            echo '<h4>' . $votos['opcion'] . '</h4>';
                        ?>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $votos['color']; ?>" role="progressbar" aria-valuenow="<?php echo round($porcentajepreg, 1); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($porcentajepreg, 1) . '%'; ?>"><?php echo round($porcentajepreg, 1); ?>%</div>
                            </div><br>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card bg-dark text-white mb-1">
                    <div class="card-body">
                        <h1 class="card-title">¿Crees que las clases En línea son funcionales?</h1>
                        <?php foreach ($votosvirus as $votos) :
                            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                            echo '<h4>' . $votos['opcion'] . '</h4>';
                        ?>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $votos['color']; ?>" role="progressbar" aria-valuenow="<?php echo round($porcentajepreg, 1); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($porcentajepreg, 1) . '%'; ?>"><?php echo round($porcentajepreg, 1); ?>%</div>
                            </div><br>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card bg-dark text-white mb-1">
                    <div class="card-body">
                        <h1 class="card-title">¿Crees que hacer home office es funcional?</h1>
                        <?php foreach ($votosfruta as $votos) :
                            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                            echo '<h4>' . $votos['opcion'] . '</h4>';
                        ?>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $votos['color']; ?>" role="progressbar" aria-valuenow="<?php echo round($porcentajepreg, 1); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($porcentajepreg, 1) . '%'; ?>"><?php echo round($porcentajepreg, 1); ?>%</div>
                            </div><br>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card bg-dark text-white mb-1">
                    <div class="card-body">
                        <h1 class="card-title">¿Toma medidas de prevención ante el coronavirus?</h1>
                        <?php foreach ($votosnovia as $votos) :
                            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                            echo '<h4>' . $votos['opcion'] . '</h4>';
                        ?>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $votos['color']; ?>" role="progressbar" aria-valuenow="<?php echo round($porcentajepreg, 1); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($porcentajepreg, 1) . '%'; ?>"><?php echo round($porcentajepreg, 1); ?>%</div>
                            </div><br>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card bg-dark text-white mb-1">
                    <div class="card-body">
                        <h1 class="card-title">¿Cree que el COVID-19 nos ayudó a pensar más en nuestra vida?</h1>
                        <?php foreach ($votosprop as $votos) :
                            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                            echo '<h4>' . $votos['opcion'] . '</h4>';
                        ?>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $votos['color']; ?>" role="progressbar" aria-valuenow="<?php echo round($porcentajepreg, 1); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($porcentajepreg, 1) . '%'; ?>"><?php echo round($porcentajepreg, 1); ?>%</div>
                            </div><br>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="padding-bottom: 70px;"></div>
    <nav class="navbar navbar-light bg-dark fixed-bottom text-white">
        &copy; Copyright 2020 | Encuestas
        <form action="<?php echo RUTA; ?>principales/principal.php" method="POST">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Finalizar</button>
        </form>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>