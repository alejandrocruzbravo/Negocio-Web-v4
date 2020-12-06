<?php
   use Illuminate\Database\Capsule\Manager as DB;
   require 'vendor/autoload.php';
   require 'database/database.php';
   session_start();

    $registros = DB::table('compras')
    ->select('id','usuario','email','producto','fecha')
    ->get();        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">
    <title>Spartan Gym - Registro de compras</title>
</head>
<body id="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="title is-1 has-text-white" align="center">REGISTRO DE COMPRAS</h2>
    <br>
    <div class="columns is-mobile ">
            <div class="column is-three-fifths is-offset-one-fifth">
                <div class="container">
                <a href="shop.php" type="button" class="button is-primary">IR A LA TIENDA</a>
                    <div class="notification is-light">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">PRODUCTO</th>
                                    <th scope="col">REGISTRO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($registros as $reg){ ?>
                                    <tr>
                                        <td><?php echo $reg->id; ?> </td>
                                        <td><?php echo $reg->usuario; ?> </td>
                                        <td><?php echo $reg->email; ?> </td>
                                        <td><?php echo $reg->producto; ?> </td>
                                        <td><?php echo $reg->fecha; ?> </td>
                                        </td>
                                    </tr>      
                                </tbody>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <?php require "partials/footer.php"?>
</body>
</html>