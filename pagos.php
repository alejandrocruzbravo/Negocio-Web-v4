<?php
    use Illuminate\Database\Capsule\Manager as DB;
    require 'vendor/autoload.php';
    require 'database/database.php';
    session_start();

      $registros = DB::table('pagos')
    ->join('socios', 'pagos.id_socio', '=', 'socios.id') 
    ->join('membresia', 'pagos.id_membresia', '=', 'membresia.id')
    ->select('pagos.*')
    ->get();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">
    <title>Spartan Gym - Pagos</title>
</head>
<body id="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="title is-1 has-text-white" align="center">PAGOS</h2>
    <br>
    <div class="columns is-mobile ">
            <div class="column is-10 is-offset-1">
                <div class="container">
                <a href="socios.php" type="button" class="button is-primary">IR A SOCIOS</a>
                    <div class="notification is-light">
                      <table align="center" class="table">
                        <thead>
                          <tr>
                          <th scope="col">ID</th>
                            <th scope="col">FECHA DE PAGO</th>
                            <th scope="col">SOCIO</th>
                            <th scope="col">MEMBRESIA</th>
                            <th scope="col">PRECIO</th>
                            <th scope="col">CANTIDAD</th>
                            <th scope="col">CONCEPTO</th>
                            <th scope="col">TOTAL</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">ACCIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            foreach ($registros as $row){ ?>
                            <tr>
                                <td><?php echo $row->id; ?> </td>
                                <td><?php echo $row->fecha; ?> </td>
                                <td><?php echo $row->id_socio; ?> </td>
                                <td><?php echo $row->id_membresia; ?> </td>
                                <td><?php echo $row->precio; ?> </td>
                                <td><?php echo $row->cantidad; ?> </td>
                                <td><?php echo $row->concepto ?> </td>
                                <td><?php echo ($row->cantidad * $row->precio); ?> </td>
                                <td><?php echo $row->status; ?> </td>
                                <td><form action="database/db_rud_pagos.php?a=cancelar&id=<?php echo $row->id; ?>" method="POST">
                                  <input type="submit" name="boton_Accion" class="button is-warning" value="CANCELA">
                                </form>
                                <form action="database/db_rud_pagos.php?a=eliminar&id=<?php echo $row->id; ?>" method="POST">
                                  <input type="submit" name="boton_Accion" class="button is-danger" value="ELIMINAR">
                                </form>
                                </td>
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
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <?php require "partials/footer.php"?>
</body>
</html>