<!DOCTYPñE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Icono de pestaña -->
        <link rel="shortcut icon" href="<?php echo RUTA; ?>icono.ico" type="image/x-icon">
        <!-- Estilos -->
        <link rel="stylesheet" href="<?php echo RUTA; ?>recursos/css/encuestas.css">
        <!-- Color navegador -->
        <meta name="theme-color" content="#202020">
        <title>Encuesta 2</title>
    </head>

    <body>
        <div id="progressbar"> </div>
        <div id="scrollpath"></div>
        <section>

            <div class="bienvenido">
                <h1>
                    <span>E</span>
                    <span>n</span>
                    <span>c</span>
                    <span>u</span>
                    <span>e</span>
                    <span>s</span>
                    <span>t</span>
                    <span>a</span>
                    <span>-</span>
                    <span>2</span>

                </h1>
            </div>
            <br><br><br><br><br>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <!--que bebida prefieres-------------------------------------------------------------------------------------------->

                <div class="contenedor-encuesta">
                    <h1>¿Tienes Conocimiento En El Uso de Equipos de Cómputo?</h1>
                    <?php foreach ($bebidas as $bebida) : ?>
                        <label>
                            <input type="radio" name="radiobebida" value="<?php echo $bebida['opcion']; ?>" required>
                            <span class="<?php echo $bebida['seleccion']; ?>"><?php echo strtoupper($bebida['seleccion']); ?></span>
                            <?php echo $bebida['opcion']; ?>

                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
                <!--que virus es mas mortal-------------------------------------------------------------------------------------------->

                <div class="contenedor-encuesta">
                    <h1>¿Crees Que Las Clases En Líne Son Funcionales?</h1>
                    <?php foreach ($virus as $viru) : ?>
                        <label>
                            <input type="radio" name="radiovirus" value="<?php echo $viru['opcion']; ?>" required>
                            <span class="<?php echo $viru['seleccion']; ?>"><?php echo strtoupper($viru['seleccion']); ?></span>
                            <?php echo $viru['opcion']; ?>

                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
                <!--que fruta prefieres-------------------------------------------------------------------------------------------->

                <div class="contenedor-encuesta">
                    <h1>¿Crees Que Hacer Home Office Es Funcional?</h1>
                    <?php foreach ($frutas as $fruta) : ?>
                        <label>
                            <input type="radio" name="radiofruta" value="<?php echo $fruta['opcion']; ?>" required>
                            <span class="<?php echo $fruta['seleccion']; ?>"><?php echo strtoupper($fruta['seleccion']); ?></span>
                            <?php echo $fruta['opcion']; ?>

                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
                <!--tienes novia-------------------------------------------------------------------------------------------->

                <div class="contenedor-encuesta">
                    <h1>¿Toma Medidas De Prevención Ante El Coronavirus?</h1>
                    <?php foreach ($novias as $novia) : ?>
                        <label>
                            <input type="radio" name="radionovia" value="<?php echo $novia['opcion']; ?>" required>
                            <span class="<?php echo $novia['seleccion']; ?>"><?php echo strtoupper($novia['seleccion']); ?></span>
                            <?php echo $novia['opcion']; ?>

                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
                <!--quieres ser mi novia-------------------------------------------------------------------------------------------->

                <div class="contenedor-encuesta">
                    <h1>¿Cree Que el COVID-19 Nos Ayudó A Pensar Mas En Nuestra Vida?</h1>
                    <?php foreach ($propuestas as $propuesta) : ?>
                        <label>
                            <input type="radio" name="radioprop" value="<?php echo $propuesta['opcion']; ?>" required>
                            <span class="<?php echo $propuesta['seleccion']; ?>"><?php echo strtoupper($propuesta['seleccion']); ?></span>
                            <?php echo $propuesta['opcion']; ?>

                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
                <center>
                    <br><br>
                    <div class="neon">

                        <button class="boton-ini" type="submit" style="vertical-align:middle">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Enviar Encuesta
                        </button>

                    </div>

                </center>
                <br>
            </form>
        </section>
        <script type="text/javascript">
            let progress = document.getElementById('progressbar');
            let totalHeight = document.body.scrollHeight - window.innerHeight;
            window.onscroll = function() {
                let progressHeight = (window.pageYOffset / totalHeight) * 100;
                progress.style.height = progressHeight + "%";
            }
        </script>

    </body>

    </html>