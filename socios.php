<?php
   use Illuminate\Database\Capsule\Manager as DB;
   require 'vendor/autoload.php';
   require 'database/database.php';
   session_start();

    $registros = DB::table('socios')
    ->select('id','nombre','apellido1','apellido2','mensualidad','fecha')
    ->get();        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">   
    <title>Spartan Gym - Socios</title>
</head>
<body id="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="title is-1 has-text-white" align="center">SOCIOS</h2>
    <br>
    <div class="columns is-mobile ">
            <div class="column is-10 is-offset-1">
                <div class="container">
                  <a href="frm_socio.php?a=agregar" type="button" class="button is-primary"><img src="img/new.png" widht="35px" width="35px">AGREGAR SOCIO</a>
                  <div class="notification is-light">
                      <table align="center" class="table">
                        <thead>
                          <tr>
                          <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDOS</th>
                            <th scope="col">MENSUALIDAD</th>
                            <th scope="col">REGISTRO</th>
                            <th scope="col">ACCIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            foreach ($registros as $row){ ?>
                            <tr>
                                <td><?php echo $row->id; ?> </td>
                                <td><?php echo $row->nombre; ?> </td>
                                <td><?php echo $row->apellido1; ?> <?php echo $row->apellido2; ?> </td>
                                <td><?php echo $row->mensualidad; ?> </td>
                                <td><?php echo $row->fecha; ?> </td>
                                <td><a class="button is-success" href="frm_socio.php?a=cobrar&id=<?php echo $row->id; ?>&memb=<?php echo $row->mensualidad; ?>">COBRAR</a>
                                    <a class="button is-warning" href="frm_socio.php?a=modificar&id=<?php echo $row->id; ?>&memb=<?php echo $row->mensualidad; ?>">EDITAR</a>
                                    <a class="button is-danger" href="frm_socio.php?a=eliminar&id=<?php echo $row->id; ?>&memb=<?php echo $row->mensualidad; ?>">BORRAR</a>
                                </td>
                              </td>
                            </tr> 
                            <?php
                            }
                            ?>     
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
     <?php require "partials/footer.php"?>
</body>
</html>