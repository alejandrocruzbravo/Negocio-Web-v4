<?php
    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';

    session_start();
    $message = "";

    //Condición para determinar si el campo EMAIL y PASSWORD no están vacios
    if(!empty($_POST['email']) && !empty($_POST['password'])){

        //Consulta SELECT para la tabla usuarios
        $records = DB::table('users')->where('email', $_POST['email'])->first();

        //Condición para determinar si la columna EMAIL es igual al valor del campo EMAIL y accede al sistema
        if($records->email == $_POST['email']){
            if($records->password == $_POST['password']){
                $_SESSION['rol'] = $records->rol;
                $_SESSION['user_id'] = $records->id;
                $_SESSION['email'] = $records->email;

                header('location: ../index.php');
                exit;


            //Si la contraseña no es igual a la seleccionada por el EMAIL, redirecciona a la misma pagina
            } else { 
                $message = "Contraseña incorrecta";
                $_SESSION['mensaje'] = $message;
                header('location: ../login.php');
                exit;
            }
        //Si el Email no es igual a alguno registrado, redirecciona a la misma página
        } else {
            $message = "Usuario inexistente. Registre uno";
            $_SESSION['mensaje'] = $message;
            header('location: ../login.php');
            exit;
        }
    //Si los campos están vacios, redirecciona a la misma página
    } else {
        $message = "Los campos deben estar llenos";
        $_SESSION['mensaje'] = $message;
        header('location: ../login.php');
        exit;
    }
?>
        


