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
    <title>Gráficas 1</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark fixed-top">
        <a class="navbar-brand" style="color: white;">Gráficas 1</a>
        <form class="form-inline" action="<?php echo RUTA; ?>principales/cerrar.php" method="POST">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Cerrar Sesión</button>
        </form>
    </nav>
    <div class="container-fluid">
        <div style="padding-bottom: 75px;"></div>
        <div class="row text-center">
            <div class="col-sm-12">
                <div class="card bg-dark text-white mb-1">
                    <div class="card-body">
                        <h5 class="card-title">Número de personas que han contestado esta encuesta:</h5>
                        <p class="card-text"><strong style="font-size: 20px;"><?php echo $conteo["votos_totales"]; ?> Personas</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        <?php
        foreach ($votosedad as $votos) :
            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
            echo ".card1:nth-child(" . $votos['id_res'] . ") circle:nth-child(2){
                stroke-dashoffset: calc(440 - (440 *" . round($porcentajepreg, 1) . ") / 100);";
            if ($votos['id_res'] == '1') {
                echo 'stroke:#62ff00';
            } else if ($votos['id_res'] == '2') {
                echo  'stroke:#00a1ff';
            } else {
                echo 'stroke: #ff04f3';
            }
            echo "}";
        endforeach;

        foreach ($votosempleo as $votos) :
            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
            echo ".card2:nth-child(" . $votos['id_empleo'] . ") circle:nth-child(2){
                stroke-dashoffset: calc(440 - (440 *" . round($porcentajepreg, 1) . ") / 100);";
            if ($votos['id_empleo'] == '1') {
                echo 'stroke:#62ff00';
            } else if ($votos['id_empleo'] == '2') {
                echo  'stroke:#00a1ff';
            } else {
                echo 'stroke: #ff04f3';
            }
            echo "}";
        endforeach;

        foreach ($votosmusic as $votos) :
            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
            echo ".card3:nth-child(" . $votos['id_music'] . ") circle:nth-child(2){
                stroke-dashoffset: calc(440 - (440 *" . round($porcentajepreg, 1) . ") / 100);";
            if ($votos['id_music'] == '1') {
                echo 'stroke:#62ff00';
            } else if ($votos['id_music'] == '2') {
                echo  'stroke:#00a1ff';
            } else {
                echo 'stroke: #ff04f3';
            }
            echo "}";
        endforeach;

        foreach ($votospeli as $votos) :
            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
            echo ".card4:nth-child(" . $votos['id_peli'] . ") circle:nth-child(2){
                stroke-dashoffset: calc(440 - (440 *" . round($porcentajepreg, 1) . ") / 100);";
            if ($votos['id_peli'] == '1') {
                echo 'stroke:#62ff00';
            } else if ($votos['id_peli'] == '2') {
                echo  'stroke:#00a1ff';
            } else {
                echo 'stroke: #ff04f3';
            }
            echo "}";
        endforeach;

        foreach ($votoscomida as $votos) :
            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
            echo ".card5:nth-child(" . $votos['id_com'] . ") circle:nth-child(2){
                stroke-dashoffset: calc(440 - (440 *" . round($porcentajepreg, 1) . ") / 100);";
            if ($votos['id_com'] == '1') {
                echo 'stroke:#62ff00';
            } else if ($votos['id_com'] == '2') {
                echo  'stroke:#00a1ff';
            } else {
                echo 'stroke: #ff04f3';
            }
            echo "}";
        endforeach;

        ?>
    </style>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-12">
                <div class="card bg-dark text-white mb-1">
                    <div class="card-body">
                        <h1 class="card-title">¿Cuál es tu edad?</h1>
                        <?php foreach ($votosedad as $votos) :
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
                        <h1 class="card-title">¿Cuál es tu edad?</h1>
                        <?php foreach ($votosempleo as $votos) :
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

    <div class="contenedor-encuesta">
        <h1>¿A que te dedicas?</h1>
        <div class="graficas">
            <div class="container">
                <?php foreach ($votosempleo as $votos) :
                    $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                ?>
                    <div class="card2">
                        <div class="caja">
                            <div class="percent<?php echo $votos['seleccion']; ?>">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number">
                                    <h2><?php echo round($porcentajepreg, 1); ?> <span>%</span></h2>
                                </div>
                            </div>
                            <h2 class="text<?php echo $votos['seleccion']; ?>">El <?php echo round($porcentajepreg, 1) . '%'; ?> se dedica a <?php echo $votos['opcion']; ?>.</h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div><br>

    <div class="contenedor-encuesta">
        <h1>¿Genero?</h1>
        <div class="graficas">
            <div class="container">
                <?php foreach ($votosmusic as $votos) :
                    $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                ?>
                    <div class="card3">
                        <div class="caja">
                            <div class="percent<?php echo $votos['seleccion']; ?>">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number">
                                    <h2><?php echo round($porcentajepreg, 1); ?> <span>%</span></h2>
                                </div>
                            </div>
                            <h2 class="text<?php echo $votos['seleccion']; ?>">El <?php echo round($porcentajepreg, 1) . '%'; ?> prefiere <?php echo $votos['opcion']; ?>.</h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div><br>

    <div class="contenedor-encuesta">
        <h1>¿Tienes Equipo de Cómputo en Casa?</h1>
        <div class="graficas">
            <div class="container">
                <?php foreach ($votospeli as $votos) :
                    $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                ?>
                    <div class="card4">
                        <div class="caja">
                            <div class="percent<?php echo $votos['seleccion']; ?>">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number">
                                    <h2><?php echo round($porcentajepreg, 1); ?> <span>%</span></h2>
                                </div>
                            </div>
                            <h2 class="text<?php echo $votos['seleccion']; ?>">El <?php echo round($porcentajepreg, 1) . '%'; ?> prefiere <?php echo $votos['opcion']; ?>.</h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div><br>

    <div class="contenedor-encuesta">
        <h1>¿Tienes Internet En Casa?</h1>
        <div class="graficas">
            <div class="container">
                <?php foreach ($votoscomida as $votos) :
                    $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                ?>
                    <div class="card5">
                        <div class="caja">
                            <div class="percent<?php echo $votos['seleccion']; ?>">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number">
                                    <h2><?php echo round($porcentajepreg, 1); ?> <span>%</span></h2>
                                </div>
                            </div>
                            <h2 class="text<?php echo $votos['seleccion']; ?>">El <?php echo round($porcentajepreg, 1) . '%'; ?> prefiere <?php echo $votos['opcion']; ?>.</h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-light bg-dark fixed-bottom text-white">
        &copy; Copyright 2020 | Encuestas
        <form action="<?php echo RUTA; ?>principales/principal.php" method="POST">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Finalizar</button>
        </form>
    </nav>
    <div style="padding-bottom: 100px;"></div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>