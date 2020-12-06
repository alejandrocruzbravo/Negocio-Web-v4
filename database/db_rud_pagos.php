<?php
     use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';
    session_start();

    
    if ($_GET['a'] == "cancelar"){

        $int_value = intval($_GET['id']);

        DB::table('pagos')
        ->where('id', $int_value)
        ->update(['status' => 'C']);

      header('location:../pagos.php');  
      exit;


    } else if ($_GET['a'] == "eliminar"){

      $int_value = intval($_GET['id']);

      DB::table('pagos')->where('id', $int_value)->delete();

      header('location:../pagos.php');  
      exit;
    }
    
?>