<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">
    <title>Spartan Gym - Panel</title>
</head>
<body id="back">
    <?php require "partials/header.php"?>
    <section id="sec2">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="title is-1 has-text-white">PANEL DE CONTROL</h1>
        <div class="block has-text-white">
             Bienvenido al panel de control de <strong class="has-text-white">administración</strong>.
        </div>
        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <p class="title is-5">
                        INSTRUCTORES REGISTRADOS DEL GIMNASIO
                        </p>
                        <p class="subtitle">
                        Listado de todos los instructores registrados en el gimnasio.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            <a href="instructores.php">ACCEDER</a>
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
            <div class="column">
            <div class="card">
                    <div class="card-content">
                        <p class="title is-5">
                            MEMBRESIAS DISPONIBLES DEL GIMNASIO
                        </p>
                        <p class="subtitle">
                        Listado de las membresias disponibles del gimnasio.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            <a href="membresia.php">ACCEDER</a>
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
            <div class="column">
            <div class="card">
                    <div class="card-content">
                        <p class="title is-5">
                        REGISTRO DE COMPRAS DE LA TIENDA
                        </p>
                        <p class="subtitle">
                        Registro de compras de la tienda en linea del gimnasio Spartan Gym.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            <a href="register.php">ACCEDER</a>
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
            <div class="column">
            <div class="card">
                    <div class="card-content">
                        <p class="title is-5">
                        REGISTRO DE TODOS LOS SOCIOS DEL GIMNASIO
                        </p>
                        <p class="subtitle">
                        Lista de socios asociados con sus respectivos pagos cada uno.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            <a href="socios.php">ACCEDER</a>
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
            <div class="column">
            <div class="card">
                    <div class="card-content">
                        <p class="title is-5">
                        REGISTRO DE TODOS PAGOS DE CADA SOCIO DEL GIMNASIO
                        </p>
                        <p class="subtitle">
                         Registro de pagos del gimnasio registrados en el gimnasio.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            <a href="pagos.php">ACCEDER</a>
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require "partials/footer.php"?>

</body>
</html>