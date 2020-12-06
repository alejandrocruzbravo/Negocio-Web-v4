<?php
    use Illuminate\Database\Capsule\Manager as DB;
    require 'vendor/autoload.php';
    require 'database/database.php';
    session_start();
    
    $accion=$_GET['a'];
    if($accion=='agregar'){
        $title="AÑADIR INSTRUCTOR";
        $nombre="";
        $apellidoPaterno="";
        $apellidoMaterno="";
        $edad="";
        $boton = "AGREGAR";

    } else if($accion=='eliminar'){
            
        $title="ELIMINAR INSTRUCTOR";
        $id=$_GET['id'];

        $records = DB::table('instructor')
        ->where('id',$_GET['id'])
        ->select('id','nombre','apellido1','apellido2','edad','registro')->first();

        $nombre=$records->nombre;
        $apellidoPaterno=$records->apellido1;
        $apellidoMaterno=$records->apellido2;
        $edad=$records->edad;
        $boton = "ELIMINAR";
    
    } else if($accion=='modificar'){
        $title="MODIFICAR INSTRUCTOR";
        $id=$_GET['id'];

        $records = DB::table('instructor')
        ->where('id',$_GET['id'])
        ->select('id','nombre','apellido1','apellido2','edad','registro')->first();

        $nombre=$records->nombre;
        $apellidoPaterno=$records->apellido1;
        $apellidoMaterno=$records->apellido2;
        $edad=$records->edad;
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
</head>
<body id="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="title is-1 has-text-white" align="center"> INSTRUCTORES</h2>
    <div class="columns is-mobile ">
            <div class="column is-three-fifths is-offset-one-fifth">
                <div class="container">
                    <div class="notification is-light">
                        <h4 class="subtitle" align="center"><?php echo $title; ?></h4>
                        <?php if($accion <> "agregar"){?>
                        <form action="database/db_rud_instructor.php?a=<?php echo $accion; ?>&id=<?php echo $id; ?>" method="POST">
                        <?php } else {?>
                            <form action="database/db_rud_instructor.php?a=<?php echo $accion; ?>" method="POST">
                        <?php }?>
                            <div class="field">
                                <label>Nombre</label>
                                <input type="text" class="input is-primary" name="nombre"  placeholder="Ingrese el nombre del instructor" value="<?php echo $nombre?>">

                            <div class="field">
                                <label for="formGroupExampleInput">Apellidos paterno</label>
                                <input type="text" class="input is-info" name="apellido1" placeholder="Ingrese el apellido paterno del instructor" value="<?php echo $apellidoPaterno?>">
                            </div>
                            <div class="field">
                                <label for="formGroupExampleInput">Apellidos materno</label>
                                <input type="text" class="input is-info" name="apellido2" placeholder="Ingrese el apellido materno del instructor" value="<?php echo $apellidoMaterno?>">
                            </div>
                            <div class="field">
                                <label for="formGroupExampleInput">Edad</label>
                                <input type="text" class="input is-info" name="edad" placeholder="Ingrese la edad del instructor" value="<?php echo $edad?>">
                            </div> 
                            <br>

                            <input type="submit" name="boton_Accion" class="button is-primary" value="<?php echo $boton;?>">
                            <a href="instructores.php"type="button" class="button is-info">VOLVER</a>

                        </form>
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