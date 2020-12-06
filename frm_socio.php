<?php
    use Illuminate\Database\Capsule\Manager as DB;
    require 'vendor/autoload.php';
    require 'database/database.php';
    session_start();

    $accion=$_GET['a'];
    if($accion=='agregar'){
        $title="AÑADIR UN NUEVO SOCIO";

        $records = DB::table('membresia')
        ->select('id', 'tipo')
        ->get();

        $nombre="";
        $apellidoPaterno="";
        $apellidoMaterno="";
        $mensualidad="";
        $boton = "AGREGAR";

    } else if($accion=='eliminar'){
            
        $title="ELIMINAR SOCIO";
        $id=$_GET['id'];

        $records = DB::table('socios')
        ->where('id',$_GET['id'])
        ->select('id','nombre','apellido1','apellido2','mensualidad','fecha')->first();

        
        $nombre=$records->nombre;
        $apellidoPaterno=$records->apellido1;
        $apellidoMaterno=$records->apellido2;
        $mensualidad=$records->mensualidad;
        $boton = "ELIMINAR";

    } else if($accion=='modificar'){
        $title="MODIFICAR SOCIO";
        $id=$_GET['id'];

        $records = DB::table('socios')
        ->where('id',$_GET['id'])
        ->select('id','nombre','apellido1','apellido2','mensualidad','fecha')->first();

        $nombre=$records->nombre;
        $apellidoPaterno=$records->apellido1;
        $apellidoMaterno=$records->apellido2;
        $mensualidad=$records->mensualidad;
        $boton = "MODIFICAR";

    } else if($accion=='cobrar'){
        $title="COBRAR SOCIO";
        $id=$_GET['id'];
        
        $records = DB::table('socios')
        ->where('id',$_GET['id'])
        ->select('id','nombre','apellido1','apellido2','mensualidad','fecha')->first();

        $nombre=$records->nombre;
        $apellidoPaterno=$records->apellido1;
        $apellidoMaterno=$records->apellido2;
        $mensualidad=$records->mensualidad;

        $cantidad="";
        $concepto="";
        $boton = "COBRAR";
    }
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
    <h2 class="title is-1 has-text-white" align="center"> SOCIOS</h2>
    <div class="columns is-mobile ">
            <div class="column is-three-fifths is-offset-one-fifth">
                <div class="container">
                    <div class="notification is-light">
                        <h4 class="subtitle" align="center"><?php echo $title; ?></h4>
                        <?php if($accion <> "agregar"){?>
                        <form action="database/db_rud_socio.php?a=<?php echo $accion; ?>&id=<?php echo $id; ?>&memb=<?php echo $_GET['memb'];?>" method="POST">
                        <?php } else {?>
                            <form action="database/db_rud_socio.php?a=<?php echo $accion; ?>" method="POST">
                        <?php }?>
                        <div class="field">
                                <label>Nombre</label>
                                <input type="text" class="input is-primary" name="nombre"  placeholder="Ingrese el nombre del socio" value="<?php echo $nombre?>">

                            <div class="field">
                                <label>Apellidos paterno</label>
                                <input type="text" class="input is-primary" name="apellido1" placeholder="Ingrese el apellido paterno del socio" value="<?php echo $apellidoPaterno?>">
                            </div>
                            <div class="field">
                                <label>Apellidos materno</label>
                                <input type="text" class="input is-primary" name="apellido2" placeholder="Ingrese el apellido materno del socio" value="<?php echo $apellidoMaterno?>">
                            </div>
                                <div class="select is-primary">
                                    <label>Tipo de mensualidad</label>

                                    <?php if($accion=='agregar'){?>
                                        <select name="mensualidad">
                                        <?php
                                            foreach ($records as $row){ ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo $row->tipo;?></option>
                                            <?php } ?>
                                        </select>
                                    <?php } else {?>

                                    <input type="text" class="input is-primary" name="mensualidad" placeholder="Ingrese el apellido materno del socio" value="<?php echo $mensualidad?>">
                                <?php } ?>
                            </div>
                        
                            <?php if($accion=="cobrar"){ ?>
                            <br>
                            <br>
                            <br>
                                <div class="field">
                                    <label>CANTIDAD</label>
                                    <input type="text" class="input is-warning" name="cantidad" placeholder="Número de meses" value="<?php echo $cantidad?>">
                                </div>
                                <div class="field">
                                    <label>CONCEPTO</label>
                                    <input type="text" class="input is-warning" name="concepto" placeholder="Pago (mes)(año)" value="<?php echo $concepto?>">
                                </div> 
                            <?php } ?>
                            <br>
                            <br>
                            <br>
                            <input type="submit" name="boton_Accion" class="button is-primary" value="<?php echo $boton;?>">
                            <a href="socios.php"type="button" class="button is-info">VOLVER</a>
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