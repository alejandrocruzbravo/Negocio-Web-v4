<?php 
    use Illuminate\Database\Capsule\Manager as DB;
    require 'vendor/autoload.php';
    require 'database/database.php';

    session_start();
    if(!isset($_SESSION['mensaje'])){
        $_SESSION['mensaje'] = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">
    <title>Spartan Gym - Tienda</title>
</head>
<body id="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <h1 align="center" class="title has-text-white">PRODUCTOS SPARTAN GYM</h1>
    <div class="columns is-mobile ">
            <div class="column is-three-fifths is-offset-one-fifth">
                <div class="container">
                    <div class="notification is-light">
                        <h2 align="center" class="title is-2">COMPRAR</h2>
                        <div class="field">
                            <h3><?php echo $_SESSION['mensaje']; ?>
                            <form action="database/db_rud_compras.php" method="POST">
                                <label class="label">Nombre completo</label>
                                <div class="control">
                                    <input name="usuario" class="input" type="text" placeholder="Ingrese su nombre completo">
                                </div>
                                </div>

                                <div class="field">
                                <label class="label">Correo electronico</label>
                                <div class="control">
                                    <input  name="email" class="input" type="text" placeholder="Ingrese su correo">
                                </div>
                                <p class="help">Sus datos personales no se compartiran con nadie más.</p>
                                </div>


                                <div class="field">
                                    <label class="label">Producto</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="producto">
                                                <option>Seleccione un producto</option>
                                                <option value="Hidrotein">Hidrotein</option>
                                                <option value="Nitro Tech">Nitro Tech</option>
                                                <option value="Carnivor">Carnivor</option>
                                                <option value="Whey Pro">Whey Pro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="field is-grouped">
                                    <div class="control">
                                        <input type="submit" class="button is-success" value="COMPRAR PRODUCTO">
                                    </div>
                                <div class="control">
                                    <a href="shop.php"class="button is-link is-light">VOLVER</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <br>
    <br>
    <?php require "partials/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>