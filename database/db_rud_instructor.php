<?php
    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';
    session_start();

    $message = '';
    if($_GET['a']=="agregar"){     
        if(!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) &&!empty($_POST['edad'])){

            DB::table('instructor')->insert(
                ['nombre' => $_POST['nombre'],
                'apellido1' => $_POST['apellido1'],
                'apellido2' => $_POST['apellido2'],
                'edad' => $_POST['edad']]);

            $message = 'Se ha añadido un nuevo socio correctamente.';
            $_SESSION['mensaje_registro'] = $message; 
            header('location:../instructores.php');
            exit;
        } else {
            $message = 'Ha ocurrido un error añadiendo al nuevo usuario';
        }    
    } else if($_GET['a'] == "modificar"){
        if(!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) &&!empty($_POST['edad'])){
            
            $int_value = intval($_GET['id']);

            DB::table('instructor')
              ->where('id', $int_value)
              ->update(['nombre' => $_POST['nombre'], 'apellido1' => $_POST['apellido1'], 'apellido2' => $_POST['apellido2'], 'edad' => $_POST['edad']]);

            header('location:../instructores.php');  
            exit;
        }
    } else if ($_GET['a'] == "eliminar"){

        $int_value = intval($_GET['id']);
        DB::table('instructor')->where('id', $int_value)->delete();
        header('location:../instructores.php');  
        exit;
        
    }
    
?>