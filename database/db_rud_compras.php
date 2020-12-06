<?php

    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';
    session_start();
    

    if(!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['producto'])){

        DB::table('compras')->insert(['usuario' => $_POST['usuario'],'email' => $_POST['email'],'producto' => $_POST['producto']]);
        $message = "Compra realizada";
        $_SESSION['mensaje'] = $message;
        header('location: ../frm_compra.php');
        exit;

    } else {
        $message = "Los campos deben estar llenos";
        $_SESSION['mensaje'] = $message;
        header('location: ../frm_compra.php');
        exit;
    }
?>