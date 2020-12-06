<?php
   use Illuminate\Database\Capsule\Manager as DB;
   require '../vendor/autoload.php';
   require 'database.php';
   session_start();

    $message = '';

    if($_GET['a']=="agregar"){     
        if(!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) &&!empty($_POST['mensualidad'])){

            DB::table('socios')->insert(
                ['nombre' => $_POST['nombre'],
                'apellido1' => $_POST['apellido1'],
                'apellido2' => $_POST['apellido2'],
                'mensualidad' => $_POST['mensualidad']]);


            $message = 'Se ha añadido un nuevo socio correctamente.';
            $_SESSION['mensaje_registro'] = $message; 
            header('location:../socios.php');
            exit;                    
        }
    } else if($_GET['a'] == "modificar"){
        if(!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) &&!empty($_POST['mensualidad'])){

            $int_value = intval($_GET['id']);

            DB::table('socios')
              ->where('id', $int_value)
              ->update(['nombre' => $_POST['nombre'], 'apellido1' => $_POST['apellido1'], 'apellido2' => $_POST['apellido2'], 'mensualidad' => $_POST['mensualidad']]);

            header('location:../socios.php');  
            exit;
        }
    } else if ($_GET['a'] == "eliminar"){
        
        $int_value = intval($_GET['id']);


        DB::table('socios')->where('id', $int_value)->delete();

        header('location:../socios.php');  
        exit;
        
    } else if ($_GET['a'] == "cobrar"){

       $int_value = intval($_GET['id']);

       $registros = DB::table('membresia')->select('id','precio')->where('id',$_GET['memb']) ->get();

        foreach($registros as $reg){
            DB::table('pagos')->insert(
                ['id_socio' => $int_value,
                'id_membresia' => $_GET['memb'],
                'precio' => $reg->precio,
                'cantidad' => $_POST['cantidad'],
                'concepto' => $_POST['concepto'],
                'status' => 'A']);
                
        }
        header('location:../pagos.php');  
        exit;
    
        } 
    
?>