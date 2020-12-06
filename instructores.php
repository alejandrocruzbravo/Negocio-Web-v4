<?php
   use Illuminate\Database\Capsule\Manager as DB;
   require 'vendor/autoload.php';
   require 'database/database.php';
   session_start();

    $registros = DB::table('instructor')
    ->select('id','nombre','apellido1','apellido2','edad','registro')
    ->get();        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">
</head>
<body id="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="title is-1 has-text-white" align="center">INSTRUCTORES</h2>
    <br>
    <div class="columns is-mobile ">
            <div class="column is-three-fifths is-offset-one-fifth">
                <div class="container">
                <a href="frm_instructor.php?a=agregar" type="button" class="button is-primary"><img src="img/new.png" widht="35px" width="35px">AGREGAR INSTRUCTOR</a>
                    <div class="notification is-light">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">APELLIDOS</th>
                                <th scope="col">EDAD</th>
                                <th scope="col">REGISTRO</th>
                                <th scope="col">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($registros as $reg){ ?>
                                <tr>
                                    <td><?php echo $reg->id;?></td>
                                    <td><?php echo $reg->nombre;?></td>
                                    <td><?php echo $reg->apellido1?> <?php echo $reg->apellido2;?></td>
                                    <td><?php echo $reg->edad?> </td>
                                    <td><?php echo $reg->registro?> </td>
                                    <td><a class="button is-warning" href="frm_instructor.php?a=modificar&id=<?php echo $reg->id; ?>">EDITAR</button></a>
                                        <a class="button is-danger" href="frm_instructor.php?a=eliminar&id=<?php echo $reg->id; ?>">BORRAR</button></a>
                                    </td>
                                </tr>
                                <?php } ?>
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