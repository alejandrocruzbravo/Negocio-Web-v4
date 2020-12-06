<?php
    use Illuminate\Database\Capsule\Manager as DB;
    require 'vendor/autoload.php';
    require 'database/database.php';
    session_start();
    
    $accion=$_GET['a'];
    if($accion=='agregar'){
        $title="AÑADIR MEMBRESIA";
        $id="";
        $tipo="";
        $precio="";
        $boton = "AGREGAR";

    } else if($accion=='eliminar'){
            
        $title="ELIMINAR MEMBRESIA";
        $id=$_GET['id'];

        $records = DB::table('membresia')
        ->where('id',$_GET['id'])
        ->select('id','tipo','precio')->first();

        $id=$records->id;
        $tipo=$records->tipo;
        $precio=$records->precio;
        $boton = "ELIMINAR";

    } else if($accion=='modificar'){
        $title="MODIFICAR MEMBRESIA";
        $id=$_GET['id'];

        $records = DB::table('membresia')
        ->where('id',$_GET['id'])
        ->select('id','tipo','precio')->first();

        $id=$records->id;
        $tipo=$records->tipo;
        $precio=$records->precio;
        $boton = "MODIFICAR";
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">
    <title>Spartan Gym - Registro</title>
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
    <div class="columns is-mobile ">
            <div class="column is-three-fifths is-offset-one-fifth">
                <div class="container">
                    <div class="notification is-light">
                        <h4 class="subtitle" align="center"><?php echo $title; ?></h4>

                        <?php  if($accion=="agregar"){ ?>
                            <form action="database/db_rud_membresias.php?a=<?php echo $accion; ?>" method="POST">
                        <?php 
                            } else { ?>
                                <form action="database/db_rud_membresias.php?a=<?php echo $accion; ?>&id_Memb=<?php echo $id; ?>" method="POST">
                        <?php } ?> 
                    
                            <div class="form-group">
                                <label for="formGroupExampleInput">ID de la membresia</label>
                                <?php if($accion=="agregar"){ ?> 
                                    <input type="text" class="input is-primary" name="id_Memb"  placeholder="Ingrese el ID de la membresia" value="<?php echo $id?>" >
                                <?php 
                                    }else{ ?>
                                        <input type="text" class="input is-primary" name="id_Memb"  placeholder="Ingrese el ID de la membresia" value="<?php echo $id?>" disabled>
                                <?php } ?>
                            </div> 

                            <div class="form-group">
                                <label for="formGroupExampleInput">Tipo de membresia</label>
                                <input type="text" class="input is-info" name="tipo_Memb" placeholder="Ingrese el tipo de membresia" value="<?php echo $tipo?>">
                            </div> 
                            <div class="form-group">
                                <label for="formGroupExampleInput">Precio de la membresia</label>
                                <input type="text" class="input is-info" name="precio_Memb" placeholder="Ingrese el precio de la membresia" value="<?php echo $precio?>">
                            </div> 
                            <br>
                            <input type="submit" name="boton_Accion" class="button is-primary" value="<?php echo $boton;?>">
                            <a href="membresia.php"type="button" class="button is-info">VOLVER</a>
                        </form>
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