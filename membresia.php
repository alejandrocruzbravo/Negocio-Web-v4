<?php
   use Illuminate\Database\Capsule\Manager as DB;
   require 'vendor/autoload.php';
   require 'database/database.php';
   session_start();

    $registros = DB::table('membresia')
    ->select('id','tipo','precio')
    ->get();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">
    <title>Spartan Gym - Membresia</title>
</head>
<body id="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="title is-1 has-text-white" align="center">MEMBRESIAS</h2>
    <br>
    <div class="columns is-mobile ">
            <div class="column is-three-fifths is-offset-one-fifth">
                <div class="container">
                    <a href="frm_membresias.php?a=agregar" type="button" class="button is-primary"><img src="img/new.png" widht="35px" width="35px">AGREGAR MEMBRESIA</a>
                    <div class="notification is-light">
                        <table align="center" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">TIPO</th>
                                    <th scope="col">PRECIO</th>
                                    <th scope="col">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($registros as $row){ ?>
                                <tr>
                                    <td><?php echo $row->id; ?> </td>
                                    <td><?php echo $row->tipo; ?> </td>
                                    <td><?php echo $row->precio; ?></td>
                                    <td><a class="button is-warning" href="frm_membresias.php?a=modificar&id=<?php echo $row->id; ?>">EDITAR</button></a>
                                        <a class="button is-danger" href="frm_membresias.php?a=eliminar&id=<?php echo $row->id; ?>">BORRAR</button></a>
                                    </td>
                                </tr>
                                <?php
                                    }?>      
                            </tbody>    
                        </table>
                    </div>
                </div>
            </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require "partials/footer.php"?>                                                   
</body>
</html>