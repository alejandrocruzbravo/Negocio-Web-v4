<?php
    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';
    session_start();
 
    if($_GET['a']=="agregar"){  
        if(!empty($_POST['id_Memb']) && !empty($_POST['tipo_Memb']) && !empty($_POST['precio_Memb'])){

            DB::table('membresia')->upsert([
                ['id' => $_POST['id_Memb'], 'tipo' => $_POST['tipo_Memb'], 'precio' => $_POST['precio_Memb']],
            ], ['id', 'tipo'], ['precio']);

            header('location:../membresia.php');  
            exit;
        }
    } else if($_GET['a'] == "modificar"){


        if(!empty($_POST['tipo_Memb']) && !empty($_POST['precio_Memb'])){


            DB::table('membresia')
              ->where('id', $_GET['id_Memb'])
              ->update(['tipo' => $_POST['tipo_Memb'], 'precio' => $_POST['precio_Memb']]);

            header('location:../membresia.php');  
            exit;
        }
    } else if ($_GET['a'] == "eliminar"){

        DB::table('membresia')->where('id', $_GET['id_Memb'])->delete();
        header('location:../membresia.php');  
        exit;
    }   
?>