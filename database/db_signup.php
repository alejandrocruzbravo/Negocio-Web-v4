<?php

    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';

    session_start();

    if(!empty($_POST['email']) && !empty($_POST['password'])){

        DB::table('users')->insertOrIgnore([
            ['email' => $_POST['email'], 'password' => $_POST['password']],
        ]);

        $message = "Usuario registrado";
        $_SESSION['mensaje'] = $message;
        header('location: ../login.php');
        exit;

    } else {
        $message = "Los campos deben estar llenos.";
        $_SESSION['mensaje'] = $message;
        header('location: ../signup.php');
        exit;
    }

?>